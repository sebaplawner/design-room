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
			<link href="../css/custom.css" rel="stylesheet">
						
			<!-- Fonts -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
			<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
			
		</head>
		<body id="tracking" class="pink">
			
			<?php include("../header.php"); ?>
			
			<section class="big-jumbotrom">
				<div class="container">
					<div class="row header-images">
						<div class="col-sm-12"> 
							<img class="img-responsive center" src="../images/grupal-tracking.png" alt="Tracking"> 
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
									<h4 class="modal-title">Iniciando sesión</h4>
								</div>
								<div class="modal-body">
									<img src="../design-room/images/loading.gif" class="img-responsive">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<h1 class="sr-only">Tracking</h1>
					<h2 class="text-center">Login</h2>
					<div class="alert alert-dismissable alert-danger" id="errorAlert" style="display: none;">
						<button type="button" class="close" onclick="$('#errorAlert').hide();">×</button>
						Ocurrió un problema al iniciar sesión.
					</div>
					<form role="form" name="form" id="loginForm" class="form-login row">
						<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
							<div class="form-group">
								<input type="text" class="form-control" id="usuario" placeholder="Usuario" name="usuario" required="">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="password" placeholder="Contraseña" name="password" required="">
							</div>
							<div class="form-group text-center">
								<button type="submit" class="btn btn-primary text-center">Iniciar Sesión</button>
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
			
			<script src="../js/tracking/index.js"></script> 
			
		</body>
	</html>	