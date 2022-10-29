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
        $_SESSION["nombreUsuario"] = $nombreUsuario;
        $_SESSION["psw"] = $psw;
    }

    /**
     * Valida si la sesión actual tiene usuario y psw válidos. Devuelve true o false
     * @return 
     */
    public function validar(){
        $resp = false;

        $where = ["nombre" => $_SESSION["nombreUsuario"], "pass" => $_SESSION["psw"]];
        $abmUsuario = new AbmUsuario();
        $arreglo = $abmUsuario->buscar($where);

        if(!is_null($arreglo)){
            if(is_null($arreglo[0]->getDeshabilitado())){
                $_SESSION["idusuario"] = $arreglo[0]->getId();
                $resp = true;
            }
        }

        return $resp;
    }

    /**
     * Devuelve true o false si la sesión está activa o no
     * @return boolean
     */
    public function activa(){
        $resp = false;
        if(isset($_SESSION["nombreUsuario"])){
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
     * @return Rol
     */
    public function getRol(){
        $arregloObjRoles = null;

        $where = ["idusuario" => $_SESSION["idusuario"]];
        $abmUsuarioRol = new AbmUsuarioRol();
        $arregloObjRoles = $abmUsuarioRol->buscar($where);

        return $arregloObjRoles;
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