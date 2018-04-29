<?php 

require 'core/core.php';

if ( isset($_GET['view']) ){
	if ( file_exists('core/controllers/' . $_GET['view'] . '.php') ){
		require 'core/controllers/' . $_GET['view'] . '.php';
	}else{
		require 'core/controllers/error.php';
	}
	
}else{
	require 'core/controllers/mostrar.php';
}


?>