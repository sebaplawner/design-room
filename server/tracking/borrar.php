<?php
	header('Content-Type: application/json');
	
	$usuario = $_POST['usuario'];
	$path = __DIR__ . "/usuarios/" . $usuario . ".json";
	
	$archivos = glob($path);
	
	if (count($archivos) > 0) {
		if(unlink($path))
			echo json_encode(array('success' => 'Ok'));
		else
			echo json_encode(array('error' => "Error"));
	} else {
		echo json_encode(array('error' => "Not Found"));
	}
?>