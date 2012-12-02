<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>FriendlyFood</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="/assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">

	
  </head>

  <body class="landing">

	<!-- NAVBAR
	================================================== -->
	<!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
	<div class="container navbar-wrapper">

	  <div class="navbar navbar-inverse">
		<div class="navbar-inner">
		  <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
		  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <a class="brand" href="/"><img src="/assets/img/friendly-food-logo.png" alt="" /></a>
		  <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
		  <div class="nav-collapse collapse">
			<ul class="nav">
			  <li class="active"><a href="/">Inicio</a></li>
			  <li><a href="/welcome/codigo/">Codigo de Barra</a></li>
			  <li><a href="/welcome/producto/">Producto</a></li>
			</ul>
		  </div><!--/.nav-collapse -->
		</div><!-- /.navbar-inner -->
	  </div><!-- /.navbar -->

	</div><!-- /.container -->
	
	<div id="main-container">
		<div id="main" class="wrapper clearfix">
			
			<article>
				<section>
					<form class="well" action="/welcome/ficha/" method="POST">
					  <fieldset>
						<legend>Codigo de Barra</legend>
						<label>Codigo de Barra</label>
						<input type="text" placeholder="Ejemplo: 7802000002557" name="codigo" id="codigo">
						<span class="help-block">Ingrese el numero de codigo de barra</span>
						<button type="submit" class="btn" id="buscar">Buscar</button>
					  </fieldset>
					</form>
						
					<ul class="landing-btns" >
						<li><div class="boton"><a class="boton" href="/">Volver</a></div></li>
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
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/libs/modernizr-2.0.6.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function () {
		/*$("form #buscar").click(function(){
			var url = "getFicha.html?code="$("#codigo").get(0).value;
			$("form").attr('action', url);
		});*/
		$("form #buscar").click(function() {
			var url = "/welcome/ficha/";
			$("form").attr('action', url);
		});
	});	  
    </script>
	
  </body>
</html>