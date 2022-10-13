<?php

class Productos extends BaseDatos2 {

    private $id;
    private $nombre;
    private $existencia;
    private $codigoBarras;
    private $mensajeoperacion;

    // Metodo constructor crea una nueva instancia de una clase.
    public function __construct(){

        $this->id="";
        $this->nombre = "";
        $this->existencia ="";
        $this->codigoBarras = "";

        $this->mensajeoperacion ="";
    }

    public function setear($nombre, $existencia, $codigoBarras){

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
        $base = new BaseDatos2();
        $query = "SELECT * FROM productos WHERE id = ".$this->getId();
        if($base->Iniciar()){
            $rta = $base->Ejecutar($query);
            if($rta > -1){
                if($rta > 0 ){
                    $row = $base->Registro();
                    $this->setear($row['id'],
                                  $row['nombre'],
                                  $row['existencia'],
                                  $row['codigoBarras']);
                }
            }
        }else{
            $this->setmensajeoperacion("Productos->listar: ".$base->getError());
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
        $base = new BaseDatos2();
        $sql="UPDATE productos SET nombre ='".$this->getNombre()."', existencia = '".$this->getExistencia()."', codigoBarras ='".$this->getCodigoBarras()."'  WHERE id=".$this->getId();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Productos->modificar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Productos->modificar: ".$base->getError());
        }
        return $resp;
    }

    //ABM: Método que permite eliminar el registro
    public function eliminar(){
        $resp = false;
        $base = new BaseDatos2();
        $sql="DELETE FROM productos WHERE id=".$this->getId();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {//ejecutar en este punto retorna la cantidad de filas afectadas
                $resp = true;
            } else {
                $this->setmensajeoperacion("Productos->eliminar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Productos->eliminar: ".$base->getError());
        }
        return $resp;
    }

    // Metodo listar nos muestra los producto en stock.
    public function listar($parametro=""){
        $arreglo = array();
        $base = new BaseDatos2();
        $sql="SELECT * FROM productos ";

        if ($parametro!="") {
            $sql.=' WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res > -1){
            if($res > 0){

                while ($row = $base->Registro()){
                    $obj= new Productos();
                    $obj->setear($row['id'],
                                 $row['nombre'],
                                 $row['existencia'],
                                 $row['codigoBarras']);
                    array_push($arreglo, $obj);
                }

            }

        } else {
            $this->setmensajeoperacion("Productos->listar: ".$base->getError());
        }

        return $arreglo;
    }

}

?>
