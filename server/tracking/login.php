<?php
	header('Content-Type: application/json');
	
	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	$path = __DIR__ . "/usuarios/" . $usuario . ".json";
	
	$archivos = glob($path);
	
	if (count($archivos) > 0) {
		$archivo = file_get_contents($path);
		$usuarioJson = json_decode($archivo, true);
		
		if($usuarioJson['clave'] == $pass) {
			$key = md5(microtime().rand());
			$usuarioJson['key'] = $key;
			$jsonString = json_encode($usuarioJson, JSON_UNESCAPED_UNICODE);
			
			if(file_put_contents($path, $jsonString)) {
				if(array_key_exists('admin', $usuarioJson))
					echo json_encode(array('key' => $key, 'admin' => true));
				else
					echo json_encode(array('key' => $key));
			} else {
				echo json_encode(array('error' => "Not Found"));
			}
		} else {
			echo json_encode(array('error' => "Not Found"));
		}
	} else {
		echo json_encode(array('error' => "Not Found"));
	}
?>