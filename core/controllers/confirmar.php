<?php 

$mes = isset($_GET['mes']) ? $_GET['mes'] : date('n');

if ( isset($_GET['fecha']) || isset($_GET['confirmado']) ){

	try {
		$conexion = new Conexion($config_db);
		$conexion->conectarse();
		$conexion = $conexion->getConexion();
	} catch (Exception $e) {
		echo 'ERROR: ' . $e->getMessage();
	}

	$reemplazo = "";

	if (!isset($_GET['reemplazo'])){
		$array = array(
			':fecha'=>$_GET['fecha'],
			':miembro'=>$_GET['miembro'],
			':estado' =>$_GET['confirmado']
		);
	}else{
		$reemplazo = ", reemplazo = :reemplazo";
		$array = array(
			':fecha'=>$_GET['fecha'],
			':miembro'=>$_GET['miembro'],
			':estado' =>$_GET['confirmado'],
			':reemplazo' => $_GET['reemplazo']
		);
	}

	$consulta = $conexion->prepare("UPDATE actividades_miembros
									SET confirmado = :estado " . $reemplazo . "
									WHERE actividades_id = (
											SELECT 
												id 
											FROM (
												SELECT
												ac.id 
												FROM
												actividades ac
												JOIN actividades_miembros am ON ac.id = am.actividades_id
												JOIN miembros mi ON mi.id = am.miembros_id
												WHERE ac.fecha = :fecha AND mi.nombre = :miembro
											) AS t
										)
									");



	$consulta->execute($array);

	header('Location: ?view=mostrar');
	
}else{
	header('Location: ?view=error');
}

?>