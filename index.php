<?php
error_reporting(0);
session_start();
include 'includes/lib.inc.php';
include APP_ROOT."/includes/class.inc.php";
include INCLUDES_DIR."/class.paging.php";
$jp = new jcore();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pesantren Sultan Agung</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<link id="callCss" rel="stylesheet" href="themes/current/bootstrap.min.css" type="text/css" media="screen"/>
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="themes/css/base.css" rel="stylesheet" type="text/css">
    <style type="text/css" id="enject"></style>
</head>
<body>
<section id="headerSection">
	<div class="container">
		<div class="navbar">
			<div class="container">
				<button type="button" class="btn btn-navbar active" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<h1><a class="brand" href="#"> Pesantren Sultan Agung <small> </small></a></h1>
				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
                   
						<li class="active"><a href="index.php">Home	</a></li>
                           <?php if ($_SESSION[username]!=''){ ?>
                        <li class="active"><a href="index.php?page=ahp">AHP</a></li>
                        <li class="active"><a href="index.php?page=santri">Santri</a></li>
                        <li class="active"><a href="index.php?page=cetakseleksi">Seleksi</a></li>
                        <li class="active"><a href="index.php?page=cetaknilai">Penilaian</a></li>
                        <li class="active"><a href="index.php?page=cetak">Laporan</a></li>
                        <li class="active"><a href="logout.php">Logout</a></li>
                         <?php } else {?>
                          <li class="active"><a href="index.php?page=login">Login</a></li>
                         <?php } ?>
                         
                         
                  </ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Header Ends================================================ -->
<section id="carouselSection" style="text-align:center">
	<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				<div  style="text-align:center"  class="item active">
					<div class="wrapper"><img src="themes/images/carousel/business_website_templates_1.jpg" alt="business webebsite template">
					
					</div>
				</div>
				<div  style="text-align:center"  class="item">
					<div class="wrapper"><img src="themes/images/carousel/business_website_templates_2.jpg" alt="business themes">
					
					</div>
				</div>
				
				
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
</section>
<!-- Sectionone ends ======================================== -->
<section id="middleSection">
<div class="container">
<div class="row">
			 <?php
		
		switch($_REQUEST[page]){
		case "santri":
			include "santri.php";
		break;
			
		case "login":
			include "login.php";
		break;
			
		case "cetakseleksi":
			include "cetakseleksi.php";
		break;
		
		case "seleksi":
			include "seleksi.php";
		break;
		
		case "cetaknilai":
			include "cetaknilai.php";
		break;
		
		case "nilai":
			include "nilai.php";
		break;
		case "ahp":
			include "ahp.php";
		break;		
		case "cetak":
			include "cetak.php";
		break;
		
		case "hasil":
			include "hasil.php";
		break;
		
		case "keputusan":
			include "keputusan.php";
		break;
		
		
		
		
		default:
			include "home.php";
		break;
	}
	?>
		</div>					
		</div>
</section>

 <!-- Footer
  ================================================== -->
<section id="footerSection">
<div class="container">
    <footer class="footer well well-small">
	<p style="padding:18px 0 44px">&copy; 2022, allright reserved </p>
	</footer>
    </div><!-- /container -->
</section>
<a href="#" class="btn" style="position: fixed; bottom: 38px; right: 10px; display: none; " id="toTop"> <i class="icon-arrow-up"></i> Go to top</a>
<!-- Javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
    <script src="themes/js/bootstrap.min.js"></script>
	<script src="themes/js/bootstrap-tooltip.js"></script>
    <script src="themes/js/bootstrap-popover.js"></script>
	<script src="themes/js/business_ltd_1.0.js"></script>
 	 
</body>
</html>