<?php

class Auto{

    private $patente;
    private $marca;
    private $modelo;
    private $objPersonaDuenio;
    private $mensajeOperacion;

    /**
     * Método constructor de la clase
     */
    public function __construct()
    {
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->objPersonaDuenio = new Persona();
        $this->mensajeOperacion = "";
    }

    /**
     * Carga datos al objeto
     * @param string $patente
     * @param string $marca
     * @param string $modelo
     * @param object $objPersonaDuenio Objeto de la clase Persona
     */
    public function cargar($patente, $marca, $modelo, $objPersonaDuenio){
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setObjPersonaDuenio($objPersonaDuenio);
    }

    // Métodos get y set
    
    public function getPatente()
    {
        return $this->patente;
    }
    public function setPatente($patente)
    {
        $this->patente = $patente;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function getObjPersonaDuenio()
    {
        return $this->objPersonaDuenio;
    }
    public function setObjPersonaDuenio($objPersonaDuenio)
    {
        $this->objPersonaDuenio = $objPersonaDuenio;
    }
    public function getMensajeOperacion(){
        return $this->mensajeOperacion;
    }
    public function setMensajeOperacion($mensajeOperacion){
        $this->mensajeOperacion = $mensajeOperacion;
    }

    // Métodos para interactuar con la base de datos

     /**
     * Busca un auto por patente
     * Sus datos son colocados en el objeto
     * @param string $patente
     * @return boolean true si encontro, false caso contrario
     */
    public function buscarAuto($patente){
        $encontro = false;
        $base = new BaseDatos();
        $consulta = "SELECT * FROM auto WHERE Patente = '" . $patente . "'";

        if($base->Iniciar()){
            if($base->Ejecutar($consulta)){
                if($fila = $base->Registro()){
                    // Delegación: Persona (Duenio)
                    $objPersonaDuenio = new Persona();
                    $objPersonaDuenio->buscarPersona($fila["DniDuenio"]);

                    $this->cargar(
                        $patente,
                        $fila["Marca"],
                        $fila["Modelo"],
                        $objPersonaDuenio);

                    $encontro = true;
                }
            }else{$this->setMensajeOperacion($base->getError());}
        }else{$this->setMensajeOperacion($base->getError());}

        return $encontro;
    }

    /**
     * Lista todos los autos de la base de datos
     * @param string $condicion (opcional)
     * @return array|null colección de autos o null si no hay ninguno
     */
    public function listar($condicion = ""){
        $base = new BaseDatos();
        $arreglo = null;

        $consulta = "SELECT * FROM auto";
        if($condicion != ""){
            $consulta .= " WHERE " . $condicion;
        }

        if($base->Iniciar()){
            if($base->Ejecutar($consulta)){
                $arreglo = [];
                while($fila = $base->Registro()){
                    $objAuto = new Auto();
                    $objAuto->buscarAuto($fila["Patente"]);
                    array_push($arreglo, $objAuto);
                }
            }else{$this->setMensajeOperacion($base->getError());}
        }else{$this->setMensajeOperacion($base->getError());}

        return $arreglo;
    }

    /**
     * Inserta los datos del objeto Auto actual a la base de datos.
     * @return boolean true si se concretó, false caso contrario
     */
    public function insertar(){
        $base = new BaseDatos();
        $seConcreto = false;

        $consulta = "INSERT INTO auto(Patente, Marca, Modelo, DniDuenio)
        VALUES ('". $this->getPatente()."','".$this->getMarca()."','".$this->getModelo()."',
        '". $this->getObjPersonaDuenio()->getNumDNI() . "');";

        if($base->Iniciar()){
            if($base->Ejecutar($consulta)){
                $seConcreto = true;

            }else{$this->setMensajeOperacion($base->getError());}
        }else{$this->setMensajeOperacion($base->getError());}

        return $seConcreto;
    }

    /**
     * Modifica los datos de la persona, colocando los del objeto actual
     * @return boolean true si se concretó, false caso contrario
     */
    public function modificar(){
        $base = new BaseDatos();
        $seConcreto = false;

        $consulta = "UPDATE auto SET Marca = '" . $this->getMarca() . "', Modelo = '" . $this->getModelo() .
        "', DniDuenio = '" . $this->getObjPersonaDuenio()->getNumDNI() . "' WHERE Patente = '" . $this->getPatente(). "'";

        if($base->Iniciar()){
            if($base->Ejecutar($consulta)){
                $seConcreto = true;
            }else{$this->setMensajeOperacion($base->getError());}
        }else{$this->setMensajeOperacion($base->getError());}

        return $seConcreto;
    }

    /**
     * Elimina el objeto actual de la base de datos
     * @return boolean true si se concretó, false caso contrario
     */
    public function eliminar(){
        $base = new BaseDatos();
        $seConcreto = false;

        $consulta = "DELETE FROM auto WHERE Patente = '" . $this->getPatente() ."'";

        if($base->Iniciar()){
            if($base->Ejecutar($consulta)){
                $seConcreto = true;
            }else{$this->setMensajeOperacion($base->getError());}
        }else{$this->setMensajeOperacion($base->getError());}

        return $seConcreto;
    }


    // Método to String

    /**
     * Convierte a los atributos del obj en string
     * @return string
     */
    public function __toString()
    {
        return
        "\nPatente: " . $this->getPatente().
        "\nMarca: " . $this->getMarca().
        "\nModelo: " . $this->getModelo().
        "\nDuenio: " . $this->getObjPersonaDuenio();
    }


}



?>