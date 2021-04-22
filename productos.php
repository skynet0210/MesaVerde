<?php
include('include/function.php');
include('include/conexion.php');
abrir_conexion();//Abre la conexion a la base de datos
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Invierte - Paypal</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
	</head>
<body>
<div class="page" id="products-columns">
  <header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap rd-navbar-modern-wrap">
      <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="70px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
        <div class="rd-navbar-main-outer">
          <div class="rd-navbar-main">
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
              <!-- RD Navbar Brand-->
              <div class="rd-navbar-brand"><a class="brand" href="index.html"><img src="images/logo-default-196x47.png" alt="" width="196" height="47"/></a>Mesa Verde</div>
            </div>
            <div class="rd-navbar-main-element">
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Basket-->

                <!-- RD Navbar Search-->

                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Inicio</a>
                  </li>
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="about-us.html">Nosotros</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="proyect.html">Proyecto</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="inversors.html">Inversores</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#">Productores</a>
                  </li>
                </ul>
              </div>
              <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                <div class="project-hamburger"><span class="project-hamburger-arrow-top"></span><span class="project-hamburger-arrow-center"></span><span class="project-hamburger-arrow-bottom"></span></div>
                <div class="project-hamburger-2"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                </div>
                <div class="project-close"><span></span><span></span></div>
              </div>
            </div>
            <div class="rd-navbar-project rd-navbar-modern-project">
              <div class="rd-navbar-project-modern-header">
                <h4 class="rd-navbar-project-modern-title">Contáctanos</h4>
                <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                  <div class="project-close"><span></span><span></span></div>
                </div>
              </div>
              <div class="rd-navbar-project-content rd-navbar-modern-project-content">
                <div>
                  <p>Siempre estamos listos para brindarle la ayuda necesaria y responder a todas sus preguntas. Contáctenos para averiguar cómo podemos ayudarlo.</p>
                  <div class="heading-6 subtitle">Nuestros Contáctos</div>
                  <div class="row row-10 gutters-10">
                    <div class="col-12"><img src="images/home-sidebar-394x255.jpg" alt="" width="394" height="255"/>
                    </div>
                  </div>
                  <ul class="rd-navbar-modern-contacts">
                    <li>
                      <div class="unit unit-spacing-sm">
                        <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                        <div class="unit-body"><a class="link-phone" href="tel:#">+1 323-913-4688</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm">
                        <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                        <div class="unit-body"><a class="link-location" href="#">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm">
                        <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                        <div class="unit-body"><a class="link-email" href="mailto:#">mail@demolink.org</a></div>
                      </div>
                    </li>
                  </ul>
                  <ul class="list-inline rd-navbar-modern-list-social">
                    <li><a class="icon fa fa-facebook" href="#"></a></li>
                    <li><a class="icon fa fa-twitter" href="#"></a></li>
                    <li><a class="icon fa fa-google-plus" href="#"></a></li>
                    <li><a class="icon fa fa-instagram" href="#"></a></li>
                    <li><a class="icon fa fa-pinterest" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>


		<?php
	//Select_All_Records function es usada para obtner todos los registros de la base de datos
	$query = Select_All_Records('tbl_product_detail');
	$query->setFetchMode(PDO::FETCH_ASSOC);
	while ($result = $query->fetch()) {
		?>
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="panel">
            <div class="panel-body">
                <a href="#"><img src="<?php echo $result['product_img'];?>" class="img-responsive"></a>
                <div class="title-products-columns">
                    <h4 class="text-center"><a href="#"><strong><?php echo $result['product_name']; ?></strong></a></h4>

                    <hr>
                    <p >
					<?php
						echo $result['product_dec'];
					?>
					</p>
                </div>
                <div class="footer-realestates-columns">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="process.php?id=<?php echo base64_encode($result['product_id']); ?>" class="btn btn-info btn-lg btn-block"><i class="fa fa-paypal"></i> COMPRAR AHORA USD <?php echo $result['product_price']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
		<?php

	}
	?>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
<?php cerrar_conexion(); ?>
