<?php 

/*$config_db = array(
	'host' => 'localhost',
	'dbname' => 'opensky',
	'user' => 'root',
	'pass' => ''
	);
*/
	
$config_db = array(
	'host' => 'mysql.iddcielosabiertos.com',
	'dbname' => 'multimedia_app',
	'user' => 'dbezequielest',
	'pass' => '4739eerr'
	);


require 'models/conexion.php';

$array_dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$array_meses = array("1" =>"Enero",
					 "2" => "Febrero",
					 "3" => "Marzo",
					 "4" => "Abril",
					 "5" => "Mayo",
					 "6" => "Junio",
					 "7" =>"Julio",
					 "8" =>"Agosto",
					 "9" =>"Septiembre",
					 "10" =>"Octubre",
					 "11" =>"Noviembre",
					 "12" =>"Diciembre");



?>