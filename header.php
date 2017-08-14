<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];?>
<header>
<!-- Navigation -->
<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <img src="../images/logo.svg" class="logo" title="Follow Me" alt="Logo Follow Me - Egresados"/>  
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse" id="navbar">
        <ul class="nav navbar-nav">  
            <li class="<?php if ($current_page == "www.followme.com.ar/"){ echo "active "; }?>">
                <a href="/">HOME</a>
            </li>          
            <li class="fm">
                <a href="/follow-me.php">FOLLOW ME</a>
            </li>
            <li class="showroom">
                <a href="/showroom.php">SHOWROOM</a>
            </li>
            <li class="design-room">
                <a href="/design-room.php">DESIGN ROOM</a>
            </li>
            <li class="tracking">
                <a href="/tracking.php">TRACKING</a>
            </li>
            <li class="contact-us">
                <a href="/contact-us.php">CONTACT US</a>
            </li>
        </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
</header>