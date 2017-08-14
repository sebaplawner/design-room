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
	<body id="design-room" class="pink">
  
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
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-5">
          <div class="number-container">
            <div class="vertical-line"></div>
            <div class="number">
              0<br>1
            </div>

            <div class="title">
              <h2>Elegí tu prenda</h2>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-7 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-1">
          <div class="owl-carousel">
			<div class="item">
              <div class="design-container"> 
                <div class="content">
                  <div class="design-image"> 
                    <div class="content">
                      <img src="images/Buzo/buzo.png" class="img-responsive" title="Buzos" alt="Follow Me - Buzos"/>
                    </div> 
                  </div>                  
                  <p class="design-title">Buzos</p>
                </div> 
              </div>
            </div>
            
            <div class="item">
              <div class="design-container"> 
                <div class="content">
                  <div class="design-image"> 
                    <div class="content">
                      <img src="images/Universitario/universitario.png" class="img-responsive" title="Universitario" alt="Follow Me - Universitario"/>
                    </div> 
                  </div>                  
                  <p class="design-title">Universitario</p>
                </div> 
              </div>
            </div>

            <div class="item">
              <div class="design-container"> 
                <div class="content">
                  <div class="design-image"> 
                    <div class="content">
                      <img src="images/Campera/campera.png" class="img-responsive" title="Camperas" alt="Follow Me - Camperas"/>
                    </div> 
                  </div>                  
                  <p class="design-title">Camperas</p>
                </div> 
              </div>
            </div>

            <div class="item">
              <div class="design-container"> 
                <div class="content">
                  <div class="design-image"> 
                    <div class="content">
                      <img src="images/Remera/remera.png" class="img-responsive" title="Remeras" alt="Follow Me - Remeras"/>
                    </div> 
                  </div>                  
                  <p class="design-title">Remeras</p>
                </div> 
              </div>
            </div>
            
            <div class="item">
              <div class="design-container"> 
                <div class="content">
                  <div class="design-image"> 
                    <div class="content">
                      <img src="images/Chomba/chomba.png" class="img-responsive" title="Chomba" alt="Follow Me - Chomba"/>
                    </div> 
                  </div>                  
                  <p class="design-title">Chombas</p>
                </div> 
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-6">
        </div>
        <div class="col-xs-6">
          <a class="btn btn-design next">Next</a>
        </div>
      </div>
    </div>
  </section>

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
	<script src="../js/owl.carousel.min.js"></script>

	<script src="../js/design-room/index.js"></script>

  </body>
</html>