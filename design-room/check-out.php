<?php
	$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<meta name="description" content="Follow Me Egresados, buzos, remeras, chombas, los mejores diseños y la mejor calidad. Diseñá tu buzo online y marcá tendencia con Follow Me. We lead the way. ">
		<meta name="keywords" content="buzos, buzos de egresados, secundario, ropa estudiantil, diseñar buzos, diseños de buzos, egresados, colegio, campera de egresados, buzos para egresados, calidad, chombas de egresados, remeras de egresados, diseño buzos de egresados, diseño de buzos, chombas, remeras">
		<meta name="author" content="Estudio Grüm">
		
		<title>Follow Me - We lead the way</title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="../css/styles.css" rel="stylesheet">
		
		<!-- Owl Carousel Assets -->
		<link href="../css/owl.carousel.min.css" rel="stylesheet">
		<link href="../css/owl.theme.default.min.css" rel="stylesheet">
		<link href="../css/custom.css" rel="stylesheet">
		
		<!-- Fonts -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		
	</head>
	<body id="design-room" class="check-out pink">
		
		<?php include("../header.php"); ?>
		
		<section class="big-jumbotrom">
			<div class="container">
				<div class="row header-images">
					<div class="col-sm-12"> 
						<img class="img-responsive center" src="images/grupal.png" alt="Design Room"> 
					</div>
				</div>
			</div>
			<div class="divider-contain">
				<img src="../images/dividers/rombo-fill-pink.svg" width="55" class="divider center">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 1920 169" style="enable-background:new 0 0 1920 169;" xml:space="preserve"> 
					<polygon class="st0" points="0,168.2 1919.6,168.2 1919.6,0 0,167.5 "/>
				</svg>
			</div>
		</section>
		
		<section class="main-content">
			<div id="modalLoading" class="modal fade" role="dialog">
				<div class="vertical-alignment-helper">
					<div class="modal-dialog vertical-align-center">
						
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Enviando presupuesto</h4>
							</div>
							<div class="modal-body">
								<img src="images/loading.gif" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal -->
			<div id="modalSuccess" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Presupuesto enviado</h4>
						</div>
						<div class="modal-body">
							<p>Redireccionando a la página principal</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container">
				<h2>Check Out</h2>
				<div class="alert alert-dismissable alert-danger" id="errorAlert" style="display: none;">
					<button type="button" class="close" onclick="$('#errorAlert').hide();">×</button>
					Ocurrió un problema al enviar el presupuesto.
				</div>
				<form role="form" name="formCheckOut" id="formCheckOut" class="form-check-out row">
					<div class="col-xs-12 col-sm-6">
						<div class="form-group">
							<input type="text" class="form-control" id="nombre" placeholder="Nombre de Contacto" name="nombre" required="">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="whatsapp" placeholder="Whatsapp" name="whatsapp" required="">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="colegio" placeholder="Colegio" name="colegio" required="">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="curso" placeholder="Curso" name="curso" required="">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<div class="form-group">
							<input type="text" class="form-control" id="cantidad" placeholder="Cantidad" name="cantidad" required="">
						</div>
						<div class="form-group">
							<textarea class="form-control" id="consulta" name="consulta" placeholder="Consulta" rows="7" required="" style="resize: vertical;">
<?php
									echo "Quisiera presupuestar el siguiente pedido:";
									
									echo "\n\n-----\n\n";
									
									echo "PRENDA: " . $_POST['prenda'] . "\n";
									if(isset($_POST['prendaColor']))
									echo "\tCOLOR: " . $_POST['prendaColor'] . "\n";
									else if(isset($_POST['prendaTextura']))
									echo "\tTEXTURA: " . $_POST['prendaTextura'] . "\n";
									if(isset($_POST['capuchaColor']))
									echo "\tCAPUCHA COLOR: " . $_POST['capuchaColor'] . "\n\n";
									else if(isset($_POST['capuchaTextura']))
									echo "\tCAPUCHA TEXTURA: " . $_POST['capuchaTextura'] . "\n\n";
									else
									echo "\n";
									
									if(isset($_POST['cuello'])) {
										echo "CUELLO: " . $_POST['cuello'] . "\n";
										if(isset($_POST['cuelloColor']))
											echo "\tCOLOR: " . $_POST['cuelloColor'] . "\n\n";
										else
											echo "\n";
									}
									
									if(isset($_POST['cierre'])) {
										echo "CIERRE: " . $_POST['cierre'] . "\n";
										echo "\tCOLOR: " . $_POST['cierreColor'] . "\n\n";
									}
									
									if(isset($_POST['botones'])) {
										echo "BOTONES: " . $_POST['botones'] . "\n";
										echo "\tCOLOR: " . $_POST['botonesColor'] . "\n";
									}
									
									if(isset($_POST['cordones'])) {
										echo "CORDONES: " . $_POST['cordones'] . "\n";
										if(isset($_POST['cordonesColor']))
											echo "\tCOLOR: " . $_POST['cordonesColor'] . "\n\n";
										else
											echo "\n";
									}
									
									if(isset($_POST['bolsillo'])) {
										echo "BOLSILLO: " . $_POST['bolsillo'] . "\n";
										if(isset($_POST['bolsilloColor']))
										echo "\tCOLOR: " . $_POST['bolsilloColor'] . "\n\n";
										else if(isset($_POST['bolsilloTextura']))
										echo "\tTEXTURA: " . $_POST['bolsilloTextura'] . "\n\n";
									}
									
									if(isset($_POST['punio_y_cintura'])) {
										echo "PUÑO Y CINTURA: " . $_POST['punio_y_cintura'] . "\n";
										if(isset($_POST['punioYCinturaColor']))
										echo "\tCOLOR: " . $_POST['punioYCinturaColor'] . "\n";
									}
									
									if(isset($_POST['text0Text']))
									echo "\n-----\n\n";
									
									for($i = 0; isset($_POST['text' . $i . 'Text']); $i++) {
										echo "TEXTO " . ($i + 1) . ": " . $_POST['text' . $i . 'Text'] . "\n";
										echo "\tCOLOR: " . $_POST['text' . $i . 'Color'] . "\n";
										echo "\tFUENTE: " . $_POST['text' . $i . 'Fuente'] . "\n\n";
									}
									
									if(!isset($_POST['text0Text']))
									echo "\n";
									
									echo "-----\n\n";
									
									echo "Gracias.";
								?></textarea>
						</div>
						<div class="form-group">
							<div style="float: left; width: calc(100% - 160px); background-color: #F1F2F2;">
								<img id="imgFrente" style="width: 50%; float: left;" src="<?php echo $_POST['imgFrente']; ?>"/>
								<img id="imgEspalda" style="width: 50%; float: left;" src="<?php echo $_POST['imgEspalda']; ?>"/>
							</div>
							<button type="submit" class="btn btn-primary pull-right">Presupuestar</button>
						</div>
					</div>
					
				</form>
			</div>
		</section>
		
		<?php include("../footer.php"); ?>
		
		<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="../js/jquery.easing.min.js"></script>
		
		<script src="../js/check-out.js"></script>
	</body>
</html>