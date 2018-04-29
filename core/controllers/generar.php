<?php 

if ($_SERVER['REQUEST_METHOD'] != "POST") {

$integrantes = array ('G','B','K','M');

function mezclarIntegrantes($integ){
	shuffle ($integ);
	return $integ;
}

$semana = 1;
for ($i=1; $i <= date('t') ; $i++) { 
	
	$dia_semana = date('w', strtotime(date('Y-02'). '-' .$i));
	//$calendario[$i] = $i;
	$calendario[$semana][$dia_semana] = $i;

	if($dia_semana == 6){
		$semana++;
	}
}

require 'views/generar.php';

//HAGO EL INCLUDE DE GENERAR.PHP (HTML)

}else{

	try {
	$conexion = new Conexion ($config_db);

	$conexion->conectarse();

	$conexion = $conexion->getConexion();
		
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	
	$total_domingos = $_POST['total'];

	echo 'domingos reales:' . $total_domingos;

	for ($i=0; $i <$total_domingos ; $i++) { 

		$consulta0 = $conexion->prepare('
			SELECT id_miembro 
			FROM miembros 
			WHERE nombre=:miembro
			LIMIT 1' );


		$consulta0->execute(array(
			':miembro' => $_POST['integrante' . $i]
			));

		$respuesta0 = $consulta0->fetch();

		echo '<pre>';
		print_r ($respuesta0);
		echo '</pre>';

		$consulta = $conexion->prepare('
			INSERT INTO eventos_calendario (dia,numero,id_miembro)
			VALUES (:dia, :num, :miembro);
		');

		$consulta -> execute(array(
			':dia' => $_POST['dia' . $i],
			':num' => $_POST['num' . $i],
			':miembro' => $respuesta0['id_miembro']
		));




	}

}

?>