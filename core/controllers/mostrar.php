<?php 

$mes = isset($_GET['mes']) ? $_GET['mes'] : date('n');

$cant_dias_mes = cal_days_in_month(CAL_GREGORIAN, $mes , date('Y'));

$miembros = array (	  1 => 'Gabriel',
					  2 =>'Belen',
					  3 =>'Maria',
					  4 =>'Kathy',
					  5 => 'Carina');

/*function crearJson($array){
	$array_json = json_encode($array);
	$file = 'clientes.json';
	file_put_contents($file, $array_json);
}*/

//leer json
/*
$datos_integrantes = file_get_contents("clientes.json");
$json_integrantes = json_decode($datos_integrantes, true);

foreach ($json_integrantes as $cliente) {
    
    echo $cliente."<br>";
}*/

/*
function mezclarIntegrantes($integ){
	shuffle ($integ);
	return $integ;
}
*/

$conexion = new Conexion ($config_db);
$conexion->conectarse();
$conexion = $conexion->getConexion();

/*$consulta = $conexion->prepare('SELECT 
								mi.nombre,
								ev_ca.reemplazo,
								ev_ca.fecha,
								ev_ca.confirmado 
								FROM eventos_calendario ev_ca
								JOIN miembros mi ON ev_ca.id_miembro = mi.id');*/

$consulta = $conexion->prepare('SELECT 
								mi.nombre, 
								ac.fecha,
								am.reemplazo,
								am.confirmado
								FROM actividades_miembros am 
								JOIN miembros mi ON am.miembros_id = mi.id
								JOIN actividades ac ON ac.id = am.actividades_id');

$consulta->execute();

$record_eventos = $consulta->fetchAll();

$cantidad_eventos=0;
foreach ($record_eventos as $evento) {
	$cantidad_eventos++;
}

$semana = 1;

for ($i=1; $i <= $cant_dias_mes ; $i++) { 
	
	$dia_semana = date('w', strtotime( date('Y') . '-' . $mes . '-' .$i) );
	//$calendario[$i] = $i;
	$calendario[$semana][$dia_semana] = $i;

	if($dia_semana == 6){
		$semana++;
	}
}
$hoy = date('Y-n-j');

require 'views/mostrar.php';


?>