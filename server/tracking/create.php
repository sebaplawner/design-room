<?php
	header('Content-Type: application/json');
	
	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	$estado = $_POST['estado'];
	$fecha = $_POST['fecha'];
	$path = __DIR__ . "/usuarios/" . $usuario . ".json";
	
	$archivos = glob($path);
	
	if (count($archivos) <= 0) {
		$jsonString = json_encode(array(
			"clave" => $pass,
			"estado" => $estado,
			"fecha" => $fecha
		), JSON_UNESCAPED_UNICODE);
		
		if(file_put_contents($path, $jsonString))
			echo json_encode(array('success' => "Ok"));
		else
			echo json_encode(array('error' => "Error"));
	} else {
		echo json_encode(array('error' => "Found"));
	}
?>