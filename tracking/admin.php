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
		<style>
			.form-control {
			padding: inherit;
		</style>
		
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
								<h4 class="modal-title">Cargando</h4>
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
				<h2>Admin</h2>
				<div class="alert alert-dismissable alert-danger" id="errorAlert" style="display: none;">
					<button type="button" class="close" onclick="$('#errorAlert').hide();">×</button>
					Ocurrió un problema.
				</div>
				<div class="alert alert-dismissable alert-success" id="successAlert" style="display: none;">
					<button type="button" class="close" onclick="$('#successAlert').hide();">×</button>
					Éxito.
				</div>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Usuario</th>
							<th>Contraseña</th>
							<th>Estado</th>
							<th>Fecha</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input type="text" class="form-control" id="usuario"></td>
							<td><input type="text" class="form-control" id="password"></td>
							<td><select class="form-control" id="estado">
								<option>01. TELA</option>
								<option>02. CORTE</option>
								<option>03. BORDADO</option>
								<option>04. CONFECCIÓN</option>
								<option>05. CONTROL DE CALIDAD</option>
								<option>06. PACKAGING</option>
							</select>
							</td>
							<td><select class="form-control" id="dia" style="width:45%;float:left;">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
								<option>24</option>
								<option>25</option>
								<option>26</option>
								<option>27</option>
								<option>28</option>
								<option>29</option>
								<option>30</option>
								<option>31</option>
							</select>
							<select class="form-control" id="mes" style="width:50%;float:right;">
								<option>Enero</option>
								<option>Febrero</option>
								<option>Marzo</option>
								<option>Abril</option>
								<option>Mayo</option>
								<option>Junio</option>
								<option>Julio</option>
								<option>Agosto</option>
								<option>Septiembre</option>
								<option>Octubre</option>
								<option>Noviembre</option>
								<option>Diciembre</option>
							</select>
							</td>
							<td><input type="button" class="form-control" id="agregar" value="Agregar"></td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
		
		<?php include("../footer.php"); ?>
		
		<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="../js/jquery.easing.min.js"></script>
		
		<script src="../js/tracking/admin.js"></script> 
		
		<script src="../js/jquery.matchHeight-min.js"></script>
		<script>
			// matchHeight blocks content
			$(document).ready(function() {
				$('.equal').matchHeight();
			});
		</script>
		
	</body>
</html>		