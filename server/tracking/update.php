<?php
	header('Content-Type: application/json');
	
	$usuario = $_POST['usuario'];
	$nuevo_usuario = $_POST['nuevo_usuario'];
	$pass = $_POST['pass'];
	$estado = $_POST['estado'];
	$fecha = $_POST['fecha'];
	$path = __DIR__ . "/usuarios/" . $usuario . ".json";
	
	$archivos = glob($path);
	
	if (count($archivos) > 0) {
		$archivo = file_get_contents($path);
		$usuarioJson = json_decode($archivo, true);
		
		$usuarioJson['clave'] = $pass;
		$usuarioJson['estado'] = $estado;
		$usuarioJson['fecha'] = $fecha;
		
		$jsonString = json_encode($usuarioJson, JSON_UNESCAPED_UNICODE);
		$new_path = __DIR__ . "/usuarios/" . $nuevo_usuario . ".json";
		
		if(unlink($path) && file_put_contents($new_path, $jsonString))
			echo json_encode(array('success' => 'Ok'));
		else
			echo json_encode(array('error' => "Error"));
	} else {
		echo json_encode(array('error' => "Not Found"));
	}
?>