<?php
	header('Content-Type: application/json');
	
	$path = __DIR__ . "/usuarios/*.json";
	
	$archivos = glob($path);
	$usuarios = array();
	
	foreach($archivos as $archivoPath) {
		$archivo = file_get_contents($archivoPath);
		$usuarioJson = json_decode($archivo, true);
		
		if(array_key_exists('admin', $usuarioJson))
			continue;
		
		$usuarios[] = array(
			"usuario" => basename($archivoPath, ".json"),
			"clave" => $usuarioJson['clave'],
			"estado" => $usuarioJson['estado'],
			"fecha" => $usuarioJson['fecha']
		);
	}
	
	echo json_encode($usuarios);
?>