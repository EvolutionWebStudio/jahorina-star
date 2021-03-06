<?php
    $page = 'pocetna';
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    $page = 'pages/' . $page . '.php';
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Jahorina Star</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="css/foundation.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&subset=latin-ext,latin' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/main.css" />
        <script src="js/vendor/modernizr.js"></script>

     </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="main-wrapper">
            <div class="row">
                <header class="main-header">
                    <div class="large-3 columns">
                        <div class="logo panel">
                            <h1>Jahorina Star</h1>
                        </div>
                    </div>
                    <div class="large-10 columns">

                    </div>
                    <nav class="large-12 columns">
                        <ul class="main-menu secondary-part">
                            <li><a href="#">O nama</a></li>
                            <li><a href="#">Instruktori</a></li>
                            <li><a href="#">Galerija</a></li>
                            <li><a href="#">Web Kamera</a></li>
                            <li><a href="#">Prognoza</a></li>
                            <li><a href="#">Kontakt</a></li>
                        </ul>
                        <ul class="main-menu">
                            <li><a href="index.php?page=pocetna">Početna</a></li>
                            <li><a href="index.php?page=ski-skola">Ski škola</a></li>
                            <li><a href="#">Jahorina</a></li>
                            <li><a href="#">Team building</a></li>
                            <li><a href="#">Animacija</a></li>
                            <li><a href="#">Smještaj</a></li>
                        </ul>
                    </nav>
                </header>
            </div>
			<div class="row">
				<div class="main-container large-12 columns">
					<?php include $page; ?>
				</div>
			</div>
            <div class="row">
                <footer class="main-footer">

                </footer>
            </div>
        </div>


        <script src="js/jquery.js"></script>
    	<script src="js/foundation.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

  		<!--
   		<script src="js/foundation/foundation.alerts.js"></script>
  		<script src="js/foundation/foundation.clearing.js"></script>
  		<script src="js/foundation/foundation.cookie.js"></script>
  		<script src="js/foundation/foundation.dropdown.js"></script>
  		<script src="js/foundation/foundation.forms.js"></script>
  		<script src="js/foundation/foundation.joyride.js"></script>
  		<script src="js/foundation/foundation.magellan.js"></script>
  		<script src="js/foundation/foundation.reveal.js"></script>
  		<script src="js/foundation/foundation.section.js"></script>
  		<script src="js/foundation/foundation.tooltips.js"></script>
  		<script src="js/foundation/foundation.topbar.js"></script>
  		<script src="js/foundation/foundation.interchange.js"></script>
  		<script src="js/foundation/foundation.placeholder.js"></script>
  		<script src="js/foundation/foundation.abide.js"></script>
  		-->

        <script src="js/foundation/foundation.js"></script>
        <script src="js/foundation/foundation.orbit.js"></script>
		<script>
			$(document).foundation();
		</script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
