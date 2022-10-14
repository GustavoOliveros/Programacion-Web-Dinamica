<?php

class Productos extends BaseDatos2 {

    private $id;
    private $nombre;
    private $existencia;
    private $codigoBarras;
    private $mensajeoperacion;

    // Metodo constructor crea una nueva instancia de una clase.
    public function __construct(){
        parent::__construct();
        $this->id=null;
        $this->nombre = "";
        $this->existencia ="";
        $this->codigoBarras = "";
        $this->mensajeoperacion ="";
    }

    public function setear($id, $nombre, $existencia, $codigoBarras){

        $this->setId($id);
        $this->setNombre($nombre);
        $this->setExistencia($existencia);
        $this->setCodigoBarras($codigoBarras);
    }

    // Metodo Get acceso para la variable privada.
    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return ucfirst($this->nombre);
    }

    public function getExistencia(){
        return $this->existencia;
    }

    public function getCodigoBarras(){
        return $this->codigoBarras;
    }

    public function getmensajeoperacion(){
        return $this->mensajeoperacion;
    }

    // Metodo set acceso para la variable privada.
    public function setId($id){
        $this->id = $id;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setExistencia($existencia){
        $this->existencia = $existencia;
    }

    public function setCodigoBarras($codigoBarras){
        $this->codigoBarras = $codigoBarras;
    }

    public function setmensajeoperacion($valor){
        $this->mensajeoperacion = $valor;
    }

    // Operaciones básicas que se deben implementar en el ORM
    // Metodo cargar nos va realizar una busqueda de un determinado producto por DNI del dueño.
    public function cargar(){
        $resp = false;
        $query = "SELECT * FROM productos WHERE id = ".$this->getId();
        if($this->Iniciar()){
            $rta = $this->Ejecutar($query);
            if($rta > -1){
                if($rta > 0 ){
                    $row = $this->Registro();
                    $this->setear($row['id'],
                                  $row['nombre'],
                                  $row['existencia'],
                                  $row['codigoBarras']);
                }
            }
        }else{
            $this->setmensajeoperacion("Productos->listar: ".$this->getError());
        }
        return $resp;
    }

    //ABM: Método que permite insertar el objeto
    public function insertar(){
        $resp = false;
        $sql="INSERT INTO productos(nombre,existencia,codigoBarras)  VALUES('".$this->getNombre()."','".$this->getExistencia()."','".$this->getCodigoBarras()."')";
        if ($this->Iniciar()) {
            if ($this->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Productos->insertar: ".$this->getError());
            }
        } else {
            $this->setmensajeoperacion("Productos->insertar: ".$this->getError());
        }
        return $resp;
    }

    //ABM: Método que permite actualizar los datos
    public function modificar(){
        $resp = false;
        $sql="UPDATE productos SET nombre ='".$this->getNombre()."', existencia = '".$this->getExistencia()."', codigoBarras ='".$this->getCodigoBarras()."'  WHERE id=".$this->getId();
        if ($this->Iniciar()) {
            if ($this->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Productos->modificar: ".$this->getError());
            }
        } else {
            $this->setmensajeoperacion("Productos->modificar: ".$this->getError());
        }
        return $resp;
    }

    //ABM: Método que permite eliminar el registro
    public function eliminar(){
        $resp = false;
        $sql="DELETE FROM productos WHERE id=".$this->getId();
        if ($this->Iniciar()) {
            if ($this->Ejecutar($sql)) {//ejecutar en este punto retorna la cantidad de filas afectadas
                $resp = true;
            } else {
                $this->setmensajeoperacion("Productos->eliminar: ".$this->getError());
            }
        } else {
            $this->setmensajeoperacion("Productos->eliminar: ".$this->getError());
        }
        return $resp;
    }

    // Metodo listar nos muestra los producto en stock.
    public function listar($parametro=""){
        $arreglo = array();
        $sql="SELECT * FROM productos ";

        if ($parametro!="") {
            $sql.=' WHERE '.$parametro;
        }
        $res = $this->Ejecutar($sql);
        if($res > -1){
            if($res > 0){

                while ($row = $this->Registro()){
                    $obj= new Productos();
                    $obj->setear($row['id'],
                                 $row['nombre'],
                                 $row['existencia'],
                                 $row['codigoBarras']);
                    array_push($arreglo, $obj);
                }

            }

        } else {
            $this->setmensajeoperacion("Productos->listar: ".$this->getError());
        }

        return $arreglo;
    }

    public function __toString()
    {
        return "<br>ID: " . $this->getId() .
        "<br>Nombre: " . $this->getNombre() .
        "<br>Existencia: " . $this->getExistencia() .
        "<br>codigoBarras: " . $this->getCodigoBarras();
    }

}

?>
