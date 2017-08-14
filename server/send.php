<?php
    $nombre = $_POST['nombre'];
    $whatsapp = $_POST['whatsapp'];
    $colegio = $_POST['colegio'];
    $curso = $_POST['curso'];
    $cantidad = $_POST['cantidad'];
    $consulta = $_POST['consulta'];
    $imgFrente = $_POST['imgFrente'];
    $imgEspalda = $_POST['imgEspalda'];

    include("class.phpmailer.php");
    include("class.smtp.php");

    $mail = new PHPMailer;

    $mail->isSMTP();                                    
    $mail->Host = 'smtp.gmail.com';                     
    $mail->SMTPAuth = true;                               
    $mail->Username = '';           		     // COMPLETAR 
    $mail->Password = '';          		      // COMPLETAR         
    $mail->SMTPSecure = 'ssl';                         
    $mail->Port = 465;                                 

    $mail->From = '';					 // COMPLETAR
    $mail->FromName = 'FollowMe Pedidos';
    $mail->addAddress('');             		  // COMPLETAR
    //$mail->addAddress('orlandojuanp@gmail.com');

    $filesToErase = array();

	$imgFrente = str_replace('data:image/png;base64,', '', $imgFrente);
	$imgFrente = str_replace(' ', '+', $imgFrente);
	$dataFrente = base64_decode($imgFrente);
	$fileFrente = 'tmp/' . uniqid() . '.png';
	array_push($filesToErase, $fileFrente);
	$successFrente = file_put_contents($fileFrente, $dataFrente);

	$imgEspalda = str_replace('data:image/png;base64,', '', $imgEspalda);
	$imgEspalda = str_replace(' ', '+', $imgEspalda);
	$dataEspalda = base64_decode($imgEspalda);
	$fileEspalda = 'tmp/' . uniqid() . '.png';
	array_push($filesToErase, $fileEspalda);
	$successEspalda = file_put_contents($fileEspalda, $dataEspalda);

	if($successFrente)
		$mail->addAttachment($file, 'Frente.png');
	if($successEspalda)
		$mail->addAttachment($file, 'Espalda.png');

    $mail->isHTML(true);

    $mail->Subject = 'NUEVO PEDIDO';
	
    $mail->Body = utf8_decode('<strong>NOMBRE:</strong> ' . $nombre . '<br><br>' . '<strong>WHATSAPP:</strong> ' . $whatsapp . '<br><br>' . '<strong>COLEGIO:</strong> ' . $colegio . '<br><br>' . '<strong>CURSO:</strong> ' . $curso . '<br><br>' . '<strong>CANTIDAD:</strong> ' . $cantidad . '<br><br>' . '<strong>CONSULTA:</strong><br><br>' . $consulta);

	$response = $mail->send();
	
	foreach($filesToErase as $file) {
		if(is_file($file))
			unlink($file);
	}
	
    if($response)
		echo json_encode(array('success' => "Ok"));
    else
		echo json_encode(array('error' => "Error"));
?>