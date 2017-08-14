<?php
	header('Content-Type: application/json');
	
	$usuario = $_POST['usuario'];
	$key = $_POST['key'];
	$path = __DIR__ . "/usuarios/" . $usuario . ".json";
	
	$archivos = glob($path);
	
	if (count($archivos) > 0) {
		$archivo = file_get_contents($path);
		$usuarioJson = json_decode($archivo, true);
		
		if($usuarioJson['key'] == $key) {
			echo json_encode(array(
				'estado' => $usuarioJson['estado'],
				'fecha' => $usuarioJson['fecha']
			));
		} else {
			echo json_encode(array('error' => "Not Found"));
		}
	} else {
		echo json_encode(array('error' => "Not Found"));
	}
?>