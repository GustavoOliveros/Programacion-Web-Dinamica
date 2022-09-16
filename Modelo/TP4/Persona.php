<?php

class Persona{

    private $numDNI;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;
    private $mensajeOperacion;

    /**
     * Método constructor de la clase
     */
    public function __construct()
    {
        $this->numDNI = "";
        $this->apellido = "";
        $this->nombre = "";
        $this->fechaNac = "";
        $this->telefono = "";
        $this->domicilio = "";
        $this->mensajeOperacion = "";
    }

    /**
     * Carga datos al objeto
     * @param string $numDNI
     * @param string $apellido
     * @param string $nombre
     * @param string $fechaNac
     * @param string $telefono
     * @param string $domicilio
     */
    public function cargar($numDNI, $apellido, $nombre, $fechaNac, $telefono, $domicilio){
        $this->setNumDNI($numDNI);
        $this->setApellido($apellido);
        $this->setNombre($nombre);
        $this->setFechaNac($fechaNac);
        $this->setTelefono($telefono);
        $this->setDomicilio($domicilio);

    }

    // Métodos get y set
    
    public function getNumDNI()
    {
        return $this->numDNI;
    }
    public function setNumDNI($numDNI)
    {
        $this->numDNI = $numDNI;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getFechaNac()
    {
        return $this->fechaNac;
    }
    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
    public function getDomicilio()
    {
        return $this->domicilio;
    }
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;
    }
    public function getMensajeOperacion()
    {
        return $this->mensajeOperacion;
    }
    public function setMensajeOperacion($mensajeOperacion)
    {
        $this->mensajeOperacion = $mensajeOperacion;
    }

    // Métodos para interactuar con la base de datos

    /**
     * Busca una persona por DNI
     * Sus datos son colocados en el objeto
     * @param string $numDNI
     * @return boolean true si encontro, false caso contrario
     */
    public function buscarPersona($numDNI){
        $encontro = false;
        $base = new BaseDatos();
        $consulta = "SELECT * FROM persona WHERE nroDNI = '" . $numDNI . "'";

        if($base->Iniciar()){
            if($base->Ejecutar($consulta)){
                if($fila = $base->Registro()){
                    $encontro = true;
                    $this->setNumDNI($numDNI);
                    $this->setApellido($fila["Apellido"]);
                    $this->setNombre($fila["Nombre"]);
                    $this->setFechaNac($fila["fechaNac"]);
                    $this->setTelefono($fila["Telefono"]);
                    $this->setDomicilio($fila["Domicilio"]);
                }
            }else{$this->setMensajeOperacion($base->getError());}
        }else{$this->setMensajeOperacion($base->getError());}

        return $encontro;
    }

    /**
     * Lista todas las personas de la base de datos
     * @param string $condicion (opcional)
     * @return array|null colección de personas o null si no hay alguna
     */
    public function listar($condicion = ""){
        $base = new BaseDatos();
        $arreglo = null;

        $consulta = "SELECT * FROM persona";
        if($condicion != ""){
            $consulta .= " WHERE " . $condicion;
        }

        if($base->Iniciar()){
            if($base->Ejecutar($consulta)){
                $arreglo = [];
                while($fila = $base->Registro()){
                    $objPersona = new Persona;
                    $objPersona->buscarPersona($fila['NroDni']);
                    array_push($arreglo, $objPersona);
                }
            }else{$this->setMensajeOperacion($base->getError());}
        }else{$this->setMensajeOperacion($base->getError());}

        return $arreglo;
    }

    /**
     * Inserta los datos del objeto Persona actual a la base de datos.
     * @return boolean true si se concretó, false caso contrario
     */
    public function insertar(){
        $base = new BaseDatos();
        $seConcreto = false;

        $consulta = "INSERT INTO persona(NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio)
        VALUES ('". $this->getNumDNI()."','".$this->getApellido()."','".$this->getNombre()."',
        '". $this->getFechaNac() ."', '". $this->getTelefono() . "','". $this->getDomicilio() . "');";
        echo $consulta; 

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

        $consulta = "UPDATE persona SET Nombre = '" . $this->getNombre() . "', Apellido = '" . $this->getApellido() .
        "', fechaNac = '" . $this->getFechaNac() . "', Telefono = '" . $this->getTelefono() . "', Domicilio = '" .
        $this->getDomicilio() . "' WHERE nroDni = '" . $this->getNumDNI(). "'";

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

        $consulta = "DELETE FROM persona WHERE NroDni = '" . $this->getNumDNI() ."'";

        if($base->Iniciar()){
            if($base->Ejecutar($consulta)){
                $seConcreto = true;
            }else{$this->setMensajeOperacion($base->getError());}
        }else{$this->setMensajeOperacion($base->getError());}

        return $seConcreto;
    }

    // Método to string

    /**
     * Convierte a los atributos del objeto en string
     * @return string
     */
    public function __toString()
    {
        return
        "\nNúmero de DNI: " . $this->getNumDNI().
        "\nNombre: " . $this->getNombre().
        "\nApellido: " . $this->getApellido().
        "\nFecha de nacimiento: " . $this->getFechaNac().
        "\nTelefono: " . $this->getTelefono() . 
        "\nDomicilio: " . $this->getDomicilio();
    }



}




?>