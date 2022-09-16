<?php

class Auto{

    private $patente;
    private $marca;
    private $modelo;
    private $objPersonaDuenio;

    /**
     * Método constructor de la clase
     */
    public function __construct()
    {
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->objPersonaDuenio = new Persona();
    }

    /**
     * Carga datos al objeto
     * @param string $patente
     * @param string $marca
     * @param string $modelo
     * @param object $objPersonaDuenio Objeto de la clase Persona
     */
    public function cargar($patente, $marca, $modelo, $objPersonaDuenio){
        
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
}



?>