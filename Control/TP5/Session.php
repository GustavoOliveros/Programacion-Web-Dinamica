<?php
class Session{
    /**
     * Clase constructor
     */
    public function __construct()
    {
        session_start();
    }

    /**
     * Actualiza las variables de sesión con los valores ingresados
     * @param string $nombreUsuario
     * @param string $psw
     * @return 
     */
    public function iniciar($nombreUsuario, $psw){
        $resp = false;
        $error = "";

        $where = ["nombre" => $nombreUsuario, "pass" => $psw];
        $abmUsuario = new AbmUsuario();
        $arreglo = $abmUsuario->buscar($where);

        if(!is_null($arreglo)){
            if($arreglo[0]->getDeshabilitado() == "0000-00-00 00:00:00"){
                $_SESSION["idusuario"] = $arreglo[0]->getId();
                $_SESSION["nombreUsuario"] = $nombreUsuario;
                $resp = true;
            }else{
                $error = "2"; // Usuario deshabilitado
            }
        }else{
            $error = "1"; // Contraseña o usuario invalido
        }

        $resultado = ["respuesta" => $resp, "error" => $error];
        return $resultado;
    }

    /**
     * Valida si la sesión actual tiene usuario y psw válidos. Devuelve true o false
     * @return 
     */
    public function validar(){
        $resp = false;
        if($this->activa()){
            $resp = true;
        }

        return $resp;
    }

    /**
     * Devuelve true o false si la sesión está activa o no
     * @return boolean
     */
    public function activa(){
        $resp = false;
        if(isset($_SESSION["nombreUsuario"]) && isset($_SESSION["idusuario"])){
            $resp = true;
        }

        return $resp;
    }

    /**
     * Devuelve el usuario logeado
     * @return Usuario
     */
    public function getUsuario(){
        $objResultado = null;

        $abmUsuario = new AbmUsuario();
        $where = ["nombre" => $_SESSION["nombreUsuario"]];
        $arreglo = $abmUsuario->buscar($where);

        $objResultado = $arreglo[0];

        return $objResultado;
    }

    /**
     * Devuelve los roles del usuario logeado
     * @return array
     */
    public function getRol(){
        $_SESSION["roles"] = array();

        $where = ["idusuario" => $_SESSION["idusuario"]];
        $abmUsuarioRol = new AbmUsuarioRol();
        $arregloObjRoles = $abmUsuarioRol->buscar($where);

        foreach($arregloObjRoles as $rol){
            array_push($_SESSION["roles"], $rol->getObjRol()->getRolDescripcion());
        }

        return $_SESSION["roles"];
    }

    /**
     * Cierra la sesión actual
     */
    public function cerrar(){
        session_unset();
        session_destroy();
    }
}


?>