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
		
		<!-- Custom -->
		<link href="../css/custom.css" rel="stylesheet">
		
		<!-- Fonts -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>	
	</head>
	<body id="design-room" class="purple">
		
		<?php include("../header.php"); ?>
		
		<section class="big-jumbotrom">
			<div class="container">
				<div class="row header-images">
					<div class="col-xs-12"> 
						<img class="img-responsive" src="images/modelo-chombas.png" alt="Design Room">
						<h1>Chombas</h1>
					</div>
				</div>
			</div>
			<div class="divider-contain">
				<img src="../images/dividers/rombo-line-purple.svg" width="105" class="divider right">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 1920 169" style="enable-background:new 0 0 1920 169;" xml:space="preserve"> 
					<polygon class="st0" points="0,168.2 1919.6,168.2 1919.6,0 0,167.5 "/>
				</svg>
			</div>
		</section>
		
		<section class="main-content">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-5">
						<div class="number-container">
							<div class="vertical-line"></div>
							<div class="number">
								0<br>3
							</div>
							
							<div class="title">
								<h2>Personalizá tu diseño</h2>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-7 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-1">
						<div class="img-container">
							<div class="btn-group top">
								<button type="button" class="btn btn-default active col-xs-6">Frente</button>
								<button type="button" class="btn btn-default col-xs-6">Dorso</button>
							</div>
							<div class="design-container"> 
								<div class="content">
									<div class="design-image"> 
										<div class="content">
										</div> 
									</div>                  
									<p class="design-title">Chomba</p>
								</div> 
							</div>
							<div class="btn-group bottom">
								<button type="button" class="btn btn-default col-xs-4" data-toggle="modal" data-target="#modalColor" id="btn-modalColor">Color</button>
								<button type="button" class="btn btn-default col-xs-4" data-toggle="modal" data-target="#modalTextura" id="btn-modalTextura">Textura</button>
								<button type="button" class="btn btn-default col-xs-4" id="btn-modalBordado">Bordado</button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-6">
						<a class="btn btn-design prev">Back</a>
					</div>
					<div class="col-xs-6">
						<a class="btn btn-design next">Next</a>
					</div>
				</div>
			</div>
		</section>
		
		<div id="modalLoading" class="modal fade" role="dialog">
			<div class="vertical-alignment-helper">
				<div class="modal-dialog vertical-align-center">
					
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Inicializando prendas</h4>
						</div>
						<div class="modal-body">
							<img src="images/loading.gif" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- MODAL Move -->
		<div class="modal fade" id="modalMove" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<form role="form" name="form" class="form-bordado">
							<div class="row row-small">
								<div class="form-group col-xs-12 col-sm-8">
									
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" aria-haspopup="true" aria-expanded="false" id="agrandarTexto">
											A+
										</button>
									</div>
									
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" aria-haspopup="true" aria-expanded="false" id="achicarTexto">
											A-
										</button>
									</div>
									
								</div>
							</div>
							
							<div class="row row-small">
								<div class="form-group col-xs-12 col-sm-8">
									
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" aria-haspopup="true" aria-expanded="false" id="rotateRight">
											<img src="images/r_right.png">
										</button>
									</div>
									
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" aria-haspopup="true" aria-expanded="false" id="moveUp">
											<img src="images/a_up.png">
										</button>
									</div>
									
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" aria-haspopup="true" aria-expanded="false" id="rotateLeft">
											<img src="images/r_left.png">
										</button>
									</div>
									
								</div>
							</div>
							
							<div class="row row-small">
								<div class="form-group col-xs-12 col-sm-8">
									
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" aria-haspopup="true" aria-expanded="false" id="moveLeft">
											<img src="images/a_left.png">
										</button>
									</div>
									
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" aria-haspopup="true" aria-expanded="false" id="moveDown">
											<img src="images/a_down.png">
										</button>
									</div>
									
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" aria-haspopup="true" aria-expanded="false" id="moveRight">
											<img src="images/a_right.png">
										</button>
									</div>
									
								</div>
							</div>
							
						</form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<!-- MODAL COLOR -->
		<div class="modal fade" id="modalColor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Color</h4>
					</div>
					<div class="modal-body">
						<div id="color_palette">
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #ffffff; box-shadow: inset black 0 0 0 1px;" data-toggle="tooltip" data-placement="top" title="WHITE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #f8f7f0;" data-toggle="tooltip" data-placement="top" title="ICECREAM"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #030405;" data-toggle="tooltip" data-placement="top" title="BLACK"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #434342;" data-toggle="tooltip" data-placement="top" title="DARK SMOKE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #a5a4a4;" data-toggle="tooltip" data-placement="top" title="LIGHT SMOKE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #bdbfb6;" data-toggle="tooltip" data-placement="top" title="SILVER"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #525252;" data-toggle="tooltip" data-placement="top" title="STEEL"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #848484;" data-toggle="tooltip" data-placement="top" title="ALUMINIUM"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #d6d6d6;" data-toggle="tooltip" data-placement="top" title="PLATINUM"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #b3d6e0;" data-toggle="tooltip" data-placement="top" title="CRYSTAL"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #93b5d7;" data-toggle="tooltip" data-placement="top" title="QUARTZ"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #7cb9ca;" data-toggle="tooltip" data-placement="top" title="SAPPHIRE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #79aeb9;" data-toggle="tooltip" data-placement="top" title="AQUAMARINE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #f6f6d3;" data-toggle="tooltip" data-placement="top" title="GEMSTONE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #acd9d2;" data-toggle="tooltip" data-placement="top" title="EMERALD"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #789e99;" data-toggle="tooltip" data-placement="top" title="DIAMOND"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #6fada7;" data-toggle="tooltip" data-placement="top" title="CARIBEAN SEA"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #198298;" data-toggle="tooltip" data-placement="top" title="SWIMMING POOL"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #3d687f;" data-toggle="tooltip" data-placement="top" title="JACUZZI"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #396071;" data-toggle="tooltip" data-placement="top" title="WATERFALL"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #115958;" data-toggle="tooltip" data-placement="top" title="LAKE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #7d9cc4;" data-toggle="tooltip" data-placement="top" title="LAGOON"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #212246;" data-toggle="tooltip" data-placement="top" title="RIVER"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #263159;" data-toggle="tooltip" data-placement="top" title="OCEAN"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #1b1825;" data-toggle="tooltip" data-placement="top" title="SEA"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #121b18;" data-toggle="tooltip" data-placement="top" title="DARK SEA"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #388d7f;" data-toggle="tooltip" data-placement="top" title="MINT"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #328567;" data-toggle="tooltip" data-placement="top" title="KIWI"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #3b9c78;" data-toggle="tooltip" data-placement="top" title="LIME"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #9dca80;" data-toggle="tooltip" data-placement="top" title="MELON"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #c9dd97;" data-toggle="tooltip" data-placement="top" title="GREEN APPLE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #8ab271;" data-toggle="tooltip" data-placement="top" title="PINEAPPLE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #615c48;" data-toggle="tooltip" data-placement="top" title="OLIVES"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #6b6b53;" data-toggle="tooltip" data-placement="top" title="ALMONDS"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #7e8174;" data-toggle="tooltip" data-placement="top" title="CONCRETE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #8c7e6d;" data-toggle="tooltip" data-placement="top" title="SAND"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #cac4b6;" data-toggle="tooltip" data-placement="top" title="STONE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #f9f199;" data-toggle="tooltip" data-placement="top" title="BANANA"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #fcde8b;" data-toggle="tooltip" data-placement="top" title="PEAR"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #fab833;" data-toggle="tooltip" data-placement="top" title="LEMON"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #f08161;" data-toggle="tooltip" data-placement="top" title="PUMPKIN"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #e53017;" data-toggle="tooltip" data-placement="top" title="ORANGE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #cc471f;" data-toggle="tooltip" data-placement="top" title="APRICOT"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #e94a59;" data-toggle="tooltip" data-placement="top" title="RED APPLE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #d11e17;" data-toggle="tooltip" data-placement="top" title="MANGO"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #831719;" data-toggle="tooltip" data-placement="top" title="CHERRY"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #41121a;" data-toggle="tooltip" data-placement="top" title="WINE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #4a2619;" data-toggle="tooltip" data-placement="top" title="CACAO"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #fbdad3;" data-toggle="tooltip" data-placement="top" title="LAVANDER"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #f4c0c1;" data-toggle="tooltip" data-placement="top" title="ROSE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #eca0be;" data-toggle="tooltip" data-placement="top" title="LOTUS"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #bd4166;" data-toggle="tooltip" data-placement="top" title="LILIUM"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #d94c5b;" data-toggle="tooltip" data-placement="top" title="FRESIA"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #ce2f57;" data-toggle="tooltip" data-placement="top" title="ORCHID"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #74160f;" data-toggle="tooltip" data-placement="top" title="RASPBERRY"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #918ab5;" data-toggle="tooltip" data-placement="top" title="BLUEBERRY"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #5a4e80;" data-toggle="tooltip" data-placement="top" title="GRAPE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #473550;" data-toggle="tooltip" data-placement="top" title="CRANBERRY"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #5d3f68;" data-toggle="tooltip" data-placement="top" title="PLUM"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #feeeb7;" data-toggle="tooltip" data-placement="top" title="DURAZNO DEL VALLE ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #fab833;" data-toggle="tooltip" data-placement="top" title="ORANGE MEDIO ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #ee7373;" data-toggle="tooltip" data-placement="top" title="CORAL ROSADO ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #be411d;" data-toggle="tooltip" data-placement="top" title="CIRUELA OPACO ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #b01e17;" data-toggle="tooltip" data-placement="top" title="ROJO ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #cf4670;" data-toggle="tooltip" data-placement="top" title="FUCCIA ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #e62f66;" data-toggle="tooltip" data-placement="top" title="FUCCIA BRILLANTE ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #9c627b;" data-toggle="tooltip" data-placement="top" title="MORA ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #8a2844;" data-toggle="tooltip" data-placement="top" title="CIRUELA INTENSO ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #493a36;" data-toggle="tooltip" data-placement="top" title="CACAO ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #cac4b6;" data-toggle="tooltip" data-placement="top" title="SAHARA ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #b0dbda;" data-toggle="tooltip" data-placement="top" title="SWEET LAKE ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #2f3a25;" data-toggle="tooltip" data-placement="top" title="BOTELLA ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #10282e;" data-toggle="tooltip" data-placement="top" title="PETRÓLEO ESP. ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #273642;" data-toggle="tooltip" data-placement="top" title="AZUL BÁLTICO ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #a4bde4;" data-toggle="tooltip" data-placement="top" title="AZTECA NESS ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #253365;" data-toggle="tooltip" data-placement="top" title="AZUL IMPERIO ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #556d90;" data-toggle="tooltip" data-placement="top" title="AZUL TREVISO ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #4f697c;" data-toggle="tooltip" data-placement="top" title="MARINO NIGHT ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #969696;" data-toggle="tooltip" data-placement="top" title="GRISÚ ML"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<!-- MODAL Textura -->
		<div class="modal fade" id="modalTextura" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Textura</h4>
					</div>
					<div class="modal-body">
						<div id="texture_palette">
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="../images/tramas/tramas-01.jpg" class="img-responsive" alt="Trama" data-toggle="tooltip" data-placement="top" title="Skulls">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="../images/tramas/tramas-02.jpg" class="img-responsive" alt="Trama" data-toggle="tooltip" data-placement="top" title="Retro">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="../images/tramas/tramas-03.jpg" class="img-responsive" alt="Trama" data-toggle="tooltip" data-placement="top" title="Military">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="../images/tramas/tramas-04.jpg" class="img-responsive" alt="Trama" data-toggle="tooltip" data-placement="top" title="Mandala">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="../images/tramas/tramas-05.jpg" class="img-responsive" alt="Trama" data-toggle="tooltip" data-placement="top" title="Lines">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="../images/tramas/tramas-06.jpg" class="img-responsive" alt="Trama" data-toggle="tooltip" data-placement="top" title="Graffiti">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="../images/tramas/tramas-07.jpg" class="img-responsive" alt="Trama" data-toggle="tooltip" data-placement="top" title="Graffiti">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="../images/tramas/tramas-08.jpg" class="img-responsive" alt="Trama" data-toggle="tooltip" data-placement="top" title="Galaxy">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="../images/tramas/tramas-09.jpg" class="img-responsive" alt="Trama" data-toggle="tooltip" data-placement="top" title="Flowers">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="../images/tramas/tramas-10.jpg" class="img-responsive" alt="Trama" data-toggle="tooltip" data-placement="top" title="Flowers">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="../images/tramas/tramas-11.jpg" class="img-responsive" alt="Trama" data-toggle="tooltip" data-placement="top" title="Comics">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="../images/tramas/tramas-12.jpg" class="img-responsive" alt="Trama" data-toggle="tooltip" data-placement="top" title="Animals">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="../images/tramas/tramas-13.jpg" class="img-responsive" alt="Trama" data-toggle="tooltip" data-placement="top" title="Animal Print">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="../images/tramas/tramas-14.jpg" class="img-responsive" alt="Trama" data-toggle="tooltip" data-placement="top" title="Abstract">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="../images/tramas/tramas-15.jpg" class="img-responsive" alt="Trama" data-toggle="tooltip" data-placement="top" title="Capa">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<!-- MODAL Bordado -->
		<div class="modal fade" id="modalBordado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Bordado</h4>
					</div>
					<div class="modal-body">
						<form role="form" name="form" class="form-bordado">
							<div class="row row-small">
								<div class="form-group col-xs-12 col-sm-8">
									
									<div class="btn-group" id="textsLista">
										<select class="btn btn-default dropdown-toggle">
										</select>
									</div>
									
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" aria-haspopup="true" aria-expanded="false" id="toggleFont">
											<img src="images/Tipografias/00.png" data-toggle="tooltip" data-placement="top" title="This Is Not Goodbye">
										</button>
									</div>
									
									<div class="col-xs-12 col-sm-2" style="width: 50%"> 
										<button class="btn btn-secondary" onclick="return false;">A+</button>
									</div>
									<div class="col-xs-12 col-sm-2" style="width: 50%"> 
										<button class="btn btn-secondary" onclick="return false;">A-</button>
									</div>
									
								</div>
							</div>
							
							<div class="row row-small" style="margin-bottom: 0;">
								<div class="form-group col-xs-12 col-sm-8" style="margin-bottom: 0;">
									
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" aria-haspopup="true" aria-expanded="false" id="toggleFontColor">
											<div style="background-color: #030405; height: 100%" data-toggle="tooltip" data-placement="top" title="BLACK"></div>
										</button>
									</div>
									
								</div>
							</div>
							
							<div class="form-group">
								<textarea class="form-control" id="texto" name="texto" placeholder="Texto" rows="5" style="resize: vertical;"></textarea>
							</div>
							
							<div class="row row-small">
								<div class="form-group col-xs-12 col-sm-8" style="width: 100%">
									
									<div class="col-xs-12 col-sm-2" style="width: 50%"> 
										<button id="trashBtn" class="btn btn-secondary" onclick="return false;"><img src="images/trash.png" style="height: 100%;"/></button>
									</div>
									<div class="col-xs-12 col-sm-2" style="width: 50%"> 
										<button id="moveBtn" class="btn btn-secondary" onclick="return false;"><img src="images/move.png" style="height: 100%;"/></button>
									</div>
									
								</div>
							</div>
						</form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<!-- MODAL Fuente -->
		<div class="modal fade" id="modalFuente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Fuente</h4>
					</div>
					<div class="modal-body">
						<div id="fuente_palette">
							
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/00.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="This Is Not Goodbye">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/01.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Androgyne">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/02.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="The Last Time">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/03.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Chunk Five Ex">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/04.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Best Marker">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/05.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Dream Orphans">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/06.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="A Safe Place to Fall">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/07.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Simpson">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/08.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Notera">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/09.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Blacksword">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/10.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Wolf in the City">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/11.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Rough Brush Script">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/12.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Birds in Paradise">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/13.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Back to BLack">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/14.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Say Something">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/15.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Sweet Pea">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/16.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Thirsty Script">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/17.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Walter">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/18.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Colors of Autumn">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/19.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Lemonade Summer">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/20.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Kraash">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/21.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Super Mario">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/22.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Rio Grande">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/23.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="College">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/24.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Varsity">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/25.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Plump">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/26.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Lemon Milk">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/27.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Chum">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/28.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Nova">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/29.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Freshman">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="box">
									<div class="imageBox">
										<img src="images/Tipografias/30.png" class="img-responsive" alt="Fuente" data-toggle="tooltip" data-placement="top" title="Big Ten Block">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- MODAL Fuente color -->
		<div class="modal fade" id="modalFontColor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Color</h4>
					</div>
					<div class="modal-body">
						<div id="fontColor_palette">
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #ffffff; box-shadow: inset black 0 0 0 1px;" data-toggle="tooltip" data-placement="top" title="WHITE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #f8f7f0;" data-toggle="tooltip" data-placement="top" title="ICECREAM"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #030405;" data-toggle="tooltip" data-placement="top" title="BLACK"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #434342;" data-toggle="tooltip" data-placement="top" title="DARK SMOKE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #a5a4a4;" data-toggle="tooltip" data-placement="top" title="LIGHT SMOKE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #bdbfb6;" data-toggle="tooltip" data-placement="top" title="SILVER"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #525252;" data-toggle="tooltip" data-placement="top" title="STEEL"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #848484;" data-toggle="tooltip" data-placement="top" title="ALUMINIUM"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #d6d6d6;" data-toggle="tooltip" data-placement="top" title="PLATINUM"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #b3d6e0;" data-toggle="tooltip" data-placement="top" title="CRYSTAL"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #93b5d7;" data-toggle="tooltip" data-placement="top" title="QUARTZ"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #7cb9ca;" data-toggle="tooltip" data-placement="top" title="SAPPHIRE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #79aeb9;" data-toggle="tooltip" data-placement="top" title="AQUAMARINE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #f6f6d3;" data-toggle="tooltip" data-placement="top" title="GEMSTONE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #acd9d2;" data-toggle="tooltip" data-placement="top" title="EMERALD"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #789e99;" data-toggle="tooltip" data-placement="top" title="DIAMOND"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #6fada7;" data-toggle="tooltip" data-placement="top" title="CARIBEAN SEA"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #198298;" data-toggle="tooltip" data-placement="top" title="SWIMMING POOL"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #3d687f;" data-toggle="tooltip" data-placement="top" title="JACUZZI"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #396071;" data-toggle="tooltip" data-placement="top" title="WATERFALL"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #115958;" data-toggle="tooltip" data-placement="top" title="LAKE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #7d9cc4;" data-toggle="tooltip" data-placement="top" title="LAGOON"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #212246;" data-toggle="tooltip" data-placement="top" title="RIVER"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #263159;" data-toggle="tooltip" data-placement="top" title="OCEAN"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #1b1825;" data-toggle="tooltip" data-placement="top" title="SEA"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #121b18;" data-toggle="tooltip" data-placement="top" title="DARK SEA"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #388d7f;" data-toggle="tooltip" data-placement="top" title="MINT"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #328567;" data-toggle="tooltip" data-placement="top" title="KIWI"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #3b9c78;" data-toggle="tooltip" data-placement="top" title="LIME"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #9dca80;" data-toggle="tooltip" data-placement="top" title="MELON"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #c9dd97;" data-toggle="tooltip" data-placement="top" title="GREEN APPLE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #8ab271;" data-toggle="tooltip" data-placement="top" title="PINEAPPLE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #615c48;" data-toggle="tooltip" data-placement="top" title="OLIVES"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #6b6b53;" data-toggle="tooltip" data-placement="top" title="ALMONDS"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #7e8174;" data-toggle="tooltip" data-placement="top" title="CONCRETE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #8c7e6d;" data-toggle="tooltip" data-placement="top" title="SAND"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #cac4b6;" data-toggle="tooltip" data-placement="top" title="STONE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #f9f199;" data-toggle="tooltip" data-placement="top" title="BANANA"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #fcde8b;" data-toggle="tooltip" data-placement="top" title="PEAR"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #fab833;" data-toggle="tooltip" data-placement="top" title="LEMON"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #f08161;" data-toggle="tooltip" data-placement="top" title="PUMPKIN"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #e53017;" data-toggle="tooltip" data-placement="top" title="ORANGE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #cc471f;" data-toggle="tooltip" data-placement="top" title="APRICOT"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #e94a59;" data-toggle="tooltip" data-placement="top" title="RED APPLE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #d11e17;" data-toggle="tooltip" data-placement="top" title="MANGO"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #831719;" data-toggle="tooltip" data-placement="top" title="CHERRY"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #41121a;" data-toggle="tooltip" data-placement="top" title="WINE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #4a2619;" data-toggle="tooltip" data-placement="top" title="CACAO"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #fbdad3;" data-toggle="tooltip" data-placement="top" title="LAVANDER"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #f4c0c1;" data-toggle="tooltip" data-placement="top" title="ROSE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #eca0be;" data-toggle="tooltip" data-placement="top" title="LOTUS"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #bd4166;" data-toggle="tooltip" data-placement="top" title="LILIUM"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #d94c5b;" data-toggle="tooltip" data-placement="top" title="FRESIA"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #ce2f57;" data-toggle="tooltip" data-placement="top" title="ORCHID"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #74160f;" data-toggle="tooltip" data-placement="top" title="RASPBERRY"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #918ab5;" data-toggle="tooltip" data-placement="top" title="BLUEBERRY"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #5a4e80;" data-toggle="tooltip" data-placement="top" title="GRAPE"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #473550;" data-toggle="tooltip" data-placement="top" title="CRANBERRY"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #5d3f68;" data-toggle="tooltip" data-placement="top" title="PLUM"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #feeeb7;" data-toggle="tooltip" data-placement="top" title="DURAZNO DEL VALLE ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #fab833;" data-toggle="tooltip" data-placement="top" title="ORANGE MEDIO ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #ee7373;" data-toggle="tooltip" data-placement="top" title="CORAL ROSADO ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #be411d;" data-toggle="tooltip" data-placement="top" title="CIRUELA OPACO ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #b01e17;" data-toggle="tooltip" data-placement="top" title="ROJO ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #cf4670;" data-toggle="tooltip" data-placement="top" title="FUCCIA ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #e62f66;" data-toggle="tooltip" data-placement="top" title="FUCCIA BRILLANTE ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #9c627b;" data-toggle="tooltip" data-placement="top" title="MORA ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #8a2844;" data-toggle="tooltip" data-placement="top" title="CIRUELA INTENSO ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #493a36;" data-toggle="tooltip" data-placement="top" title="CACAO ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #cac4b6;" data-toggle="tooltip" data-placement="top" title="SAHARA ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #b0dbda;" data-toggle="tooltip" data-placement="top" title="SWEET LAKE ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #2f3a25;" data-toggle="tooltip" data-placement="top" title="BOTELLA ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #10282e;" data-toggle="tooltip" data-placement="top" title="PETRÓLEO ESP. ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #273642;" data-toggle="tooltip" data-placement="top" title="AZUL BÁLTICO ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #a4bde4;" data-toggle="tooltip" data-placement="top" title="AZTECA NESS ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #253365;" data-toggle="tooltip" data-placement="top" title="AZUL IMPERIO ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #556d90;" data-toggle="tooltip" data-placement="top" title="AZUL TREVISO ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #4f697c;" data-toggle="tooltip" data-placement="top" title="MARINO NIGHT ML"></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<div class="box">
									<div class="colorBox" style="background-color: #969696;" data-toggle="tooltip" data-placement="top" title="GRISÚ ML"></div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<form action="check-out.php" method="post" accept-charset="utf-8" enctype="multipart/form-data" id="checkOut" style="display: none">
		</form>
		
		<?php include("../footer.php"); ?>
		
		<script
		src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="../js/jquery.easing.min.js"></script>
		
		<script src="../js/main-scripts.js"></script> 
		
		<script src="../js/imgdye.min.js"></script> 
		
		<script src="../js/webfont.js"></script> 
		
		<script src="../js/design-room/chombas-paso-final.js"></script> 
		
	</body>
</html>