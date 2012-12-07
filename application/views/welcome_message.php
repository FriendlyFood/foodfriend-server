<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>FriendlyFood</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-responsive.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico/favicon.ico'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/ico/apple-touch-icon-144-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/ico/apple-touch-icon-114-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/ico/apple-touch-icon-72-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/ico/apple-touch-icon-57-precomposed.png'); ?>">
  </head>

  <body class="landing">

	
	<div id="main-container">
		<div id="main" class="wrapper clearfix">
			
			<article>
				<header>
					<h1><img src="<?php echo base_url('assets/img/logo-landing.png'); ?>" alt="logotipo" /></h1>
					<h2 class="tagline">Encuentra tus productos saludables</h2>
				</header>
				<section>
				
				<ul class="landing-btns" >
					<li><div class="boton"><a class="boton" href="http://friendlyfood.me/">Volver al Home</a></div></li>
				</ul>
				
				
				
				</section>
				
			</article>
			
		</div> <!-- #main -->
	</div> <!-- #main-container -->

	<div id="footer-container">
		<footer class="wrapper">
			
		</footer>
	</div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/libs/modernizr-2.0.6.min.js'); ?>"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
  </body>
</html>
