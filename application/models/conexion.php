<?php

class Conexion {

    private $servidor;
    private $user;
    private $password;
    private $conexion;  
    
    public function __construct() {
        $this->servidor = 'localhost';
        $this->user = 'root';
        $this->password = '123456*';
    }
    public function abrirConexion(){
        $this->conexion = mysqli_connect($this->servidor,  $this->user, $this->password) or die('no se conecto');
    }
    public function cerrarConexion(){
        mysqli_close($this->conexion);
    }
    public function getConexion(){
        return $this->conexion;
    }
    public function seleccionarBaseDatos($bd){
        mysqli_select_db($bd,  $this->conexion);
    }
    public function setConsulta($query){
        mysqli_query($query, $this->conexion);
        echo mysqli_error();
    }
    public function getConsulta($query){
       return mysqli_query($query,  $this->conexion);
	   echo mysqli_error();
    }    
}
?>