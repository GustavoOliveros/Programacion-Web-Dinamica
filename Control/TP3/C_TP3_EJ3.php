<?php
class C_TP3_EJ3{
    private $poster;
    private $titulo;
    private $actores;
    private $director;
    private $guion;
    private $produccion;
    private $anio;
    private $nacionalidad;
    private $genero;
    private $duracion;
    private $edad_recomendada;
    private $sinopsis;

    /**
     * Método constructor de la clase
     */
    public function __construct()
    {
        $this->poster = null;
        $this->titulo = null;
        $this->actores = null;
        $this->director = null;
        $this->guion = null;
        $this->produccion = null;
        $this->anio = null;
        $this->nacionalidad = null;
        $this->genero = null;
        $this->duracion = null;
        $this->edad_recomendada = null;
        $this->sinopsis = null;
    }

    // Métodos get y set
    
    public function getPoster(){
        return $this->poster;
    }
    public function setPoster($poster){
        $this->poster = $poster;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function getActores(){
        return $this->actores;
    }
    public function setActores($actores){
        $this->actores = $actores;
    }
    public function getDirector(){
        return $this->director;
    }
    public function setDirector($director){
        $this->director = $director;
    }
    public function getGuion(){
        return $this->guion;
    }
    public function setGuion($guion){
        $this->guion = $guion;
    }
    public function getProduccion(){
        return $this->produccion;
    }
    public function setProduccion($produccion){
        $this->produccion = $produccion;
    }
    public function getAnio(){
        return $this->anio;
    }
    public function setAnio($anio){
        $this->anio = $anio;
    }
    public function getNacionalidad(){
        return $this->nacionalidad;
    }
    public function setNacionalidad($nacionalidad){
        $this->nacionalidad = $nacionalidad;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function setGenero($genero){
        $this->genero = $genero;
    }
    public function getDuracion(){
        return $this->duracion;
    }
    public function setDuracion($duracion){
        $this->duracion = $duracion;
    }
    public function getEdad_recomendada(){
        return $this->edad_recomendada;
    }
    public function setEdad_recomendada($edad_recomendada){
        $this->edad_recomendada = $edad_recomendada;
    }
    public function getSinopsis(){
        return $this->sinopsis;
    }
    public function setSinopsis($sinopsis){
        $this->sinopsis = $sinopsis;
    }

    // Métodos varios

    /**
     * Carga los datos al objeto
     * @param array $entrada
     */
    public function cargarDatos($entrada){

    }


    /**
     * Retorna el resultado del ejercicio
     * @return array (claves => "result" (array|null) y "error" (int))
     */
    public function visualizarResultado(){

    }

    // Método to string

    /**
     * Convierte al objeto en string
     * @return string
     */
    public function __toString()
    {
        return
        "\nPath del poster: " . $this->getPoster().
        "\nTitulo: " . $this->getTitulo() .
        "\nActores: " . $this->getActores() .
        "\nDirector: " . $this->getDirector() .
        "\nGuión: " . $this->getGuion() . 
        "";
    }
}




?>