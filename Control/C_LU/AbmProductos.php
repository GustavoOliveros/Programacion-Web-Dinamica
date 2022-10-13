<?php

class AbmProductos{

    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto


    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Productos
     */
    private function cargarObjeto($param){// patente
        $obj = null;
        
        if( array_key_exists('nombre',$param) and array_key_exists('existencia',$param) and array_key_exists('codigoBarras',$param)){ //array_key_exists — Comprueba si la clave o el índice dado existe en la matriz
            $obj = new Productos();
           
            // Acá se llama a la función setear de la tabla auto.
            $obj->setear($param['nombre'], $param['existencia'], $param['codigoBarras']);
        }
        return $obj;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Productos
     */
    private function cargarObjetoConClave($param){/// $auto= new AbmAuto(); $param['id']= 'ahsh33'; $objeto=  $auto->cargarObjetoConClave($param)
       
        $obj = null;

        if( isset($param['id']) ){ //isset — Determina si una variable está definida y no es null
            $obj = new Productos();
            $obj->setear($param['id'],$param['nombre'],$param['existencia'],$param['codigoBarras']);
        }
        return $obj;
    }


    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */

    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['id']))
            $resp = true;
        return $resp;
    }

    /**
     * Permite dar de alta un objeto
     * @param array $param
     */
    public function alta($param){
        $resp = array();
        //$param['Patente'] =null;
        $elObjtTabla = $this->cargarObjeto($param);
        if ($elObjtTabla!=null and $elObjtTabla->insertar()){
           // $resp = true;
            $resp = array('resultado'=> true,'error'=>'');
        }else {
           // $resp = false;
            $resp = array('resultado'=> false,'error'=> $elObjtTabla->getmensajeoperacion());
        }
        //echo $elObjtTabla->getmensajeoperacion();
    
        return $resp;

    }
    /**
     * Permite eliminar un objeto
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjetoConClave($param);
            if ($elObjtTabla!=null and $elObjtTabla->eliminar()){
                $resp = true;
            }
        }

        return $resp;
    }

    /**
     * Permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjeto($param);
            if($elObjtTabla!=null and $elObjtTabla->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * Permite buscar un objeto
     * @param array $param
     * @return array
     */
    public function buscar($param){
        $where = " true ";
        if ($param<>null){
            if  (isset($param['nombre']))
                $where.=" and nombre = '".$param['nombre']."'";
            if  (isset($param['codigoBarras']))
                 $where.=" and codigoBarras ='".$param['codigoBarras']."'";
        }
        $obj = new Productos();
        $arreglo = $obj->listar($where);
        return $arreglo;
    }

}

?>
