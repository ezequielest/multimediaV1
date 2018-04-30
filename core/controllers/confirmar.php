<?php 

//fecha
echo $_GET['mes'];

$mes = isset($_GET['mes']) ? $_GET['mes'] : date('n');

if ( isset($_GET['fecha']) || isset($_GET['confirmado']) ){

	try {
		$conexion = new Conexion($config_db);
		$conexion->conectarse();
		$conexion = $conexion->getConexion();
	} catch (Exception $e) {
		echo 'ERROR: ' . $e->getMessage();
	}


	switch ($_GET['confirmado']) {
		case 0:
			/*PASO A SIN CONFIRMAR*/
			$consulta = $conexion->prepare("UPDATE eventos_calendario
											SET confirmado = 0
											WHERE fecha = :fecha AND id_miembro = (
												SELECT id FROM miembros WHERE nombre = :miembro
											)");

			$consulta->execute(
				array(
					':fecha'=>$_GET['fecha'],
					':miembro'=>$_GET['miembro']
				)
			);
		
			break;
	
		case 1:
			/*PASO A CONFIRMADO*/
			$consulta = $conexion->prepare('UPDATE eventos_calendario
											SET confirmado = 1
											WHERE fecha = :fecha ');
			$consulta->execute(array(
				':fecha'=>$_GET['fecha']
			));
			break;

		case 2:
			/*PASO A CAMBIO*/
			$consulta = $conexion->prepare('UPDATE eventos_calendario
											SET confirmado = 2
											WHERE fecha = :fecha ');
			$consulta->execute(array(
				':fecha'=>$_GET['fecha']
			));
			break;

		case 3:
			/*REEPLAZO*/
			$consulta = $conexion->prepare('UPDATE eventos_calendario
											SET confirmado = 3, reemplazo = :reemplazo
											WHERE fecha = :fecha ');
			$consulta->execute(array(
				':fecha'=>$_GET['fecha'],
				':reemplazo'=>$_GET['miembro']
			));
			break;
	}

	header('Location: ?view=mostrar');


}else{
	header('Location: ?view=error');
}

?>