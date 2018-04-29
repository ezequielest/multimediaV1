<?php 

class Conexion
{
	private $conexion;
	private $server;
	private $dbname;
	private $usuario;
	private $contrasena;

	function __CONSTRUCT($config_db){
		$this->server = $config_db['host'];
		$this->dbname = $config_db['dbname'];
		$this->usuario = $config_db['user'];
		$this->contrasena = $config_db['pass'];
	}

	function conectarse(){
		$this->conexion = new PDO ('mysql:host='.$this->server .';dbname='. $this->dbname , $this->usuario , $this->contrasena);
	}

	function getConexion(){
		return $this->conexion;
	}
}

?>