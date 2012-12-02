<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>FriendlyFood</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Ficha de calidad de un alimento">
	<meta name="author" content="Chubasco">
		
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
 
 <!-- Le styles -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
	<link href="/assets/css/style.css" rel="stylesheet" media="screen">
    <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <style>

    /* GLOBAL STYLES
 /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: relative;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: absolute;
      right: 0;
      bottom: 0;
      left: 0;
    }

    .carousel-control {
      background-color: transparent;
      border: 0;
      font-size: 120px;
      margin-top: 0;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-bottom: 100px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-bottom: 40px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style>

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

 
	<script src="/assets/js/libs/modernizr-2.0.6.min.js"></script>
    <script src="/assets/js/jquery.js"></script>

	 <script type="text/javascript">	
	 
		function gup( name ){
			var regexS = "[\\?&]"+name+"=([^&#]*)";
			var regex = new RegExp ( regexS );
			var tmpURL = window.location.href;
			var results = regex.exec( tmpURL );
			if( results == null )
				return"";
			else
				return results[1];
		}	 
		
		function semaforo(label,id)
		{
			if(id==0)
			{
				$(label).append('<em> producto no recomendado </em>');
				$(label).append('<img src="/assets/img/green-signal.png" alt="Rojo"/>');
				$(label).append('assets/img/green-signal.png');
			}
			else if(id==1)
			{
				$(label).append('<em> precaucion </em>');
				$(label).append('<img src="/assets/img/yellow-signal.png" alt="Amarillo"/>');
			}
			else if(id==2)
			{
				$(label).append('<em> producto no recomendado </em>');
				$(label).append('<img src="/assets/img/red-signal.png" alt="Rojo"/>');
			}
			else
			{
				$(label).append('error');
			}
		}
		
		$(document).ready(function () {
			// var frank_param = "8480000107480"; // gup( 'code' );
			//var frank_param = gup( 'codigo' );
			// alert(frank_param);
			$.ajax({ // ajax call starts
				url: 'http://dal.friendlyfood.me/api/search/producto/code/<?=$search?>/format/json', 
				dataType: 'json', // Choosing a JSON datatype
				success: 
				function(data) // Variable data constains the data we get from serverside
				{
					$('#producto').append(data['NombreProducto'] + '');					
					semaforo('#calorias',data['KcalFlag']);
					semaforo('#grasas',data['GrasaFlag']);
					semaforo('#saturadas',data['GrasaSaturadaFlag']);
					semaforo('#azucares',data['HdeCFlag']);					
					semaforo('#sodio',data['SodioFlag']);					
				}
			});
		});	        
    </script>
	
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

      <!-- START THE FEATURETTES -->
      <div class="featurette">	  
		  <hr class="featurette-divider">
		  <div class="wrapper-ficha">
		  <p class="detail-title">Producto</p>
		  <div id="producto"></div>
		  <div class="wrapper-sugerencia">
		  <p class="detail-title">Sugerencia</p>
		  <p class="sugerencia-info">
		  Este producto se debe consumir con precaucon
		  </p>	  
		  </div>
		  
		  <ul class="list-results">
			<li class="red-class"> <strong>Calorias</strong>
			<div id="calorias"></div>
			
			<li class="green-class"> <strong>Grasas</strong> 
			<div id="grasas"></div>

			<li class="yellow-class"> <strong>Grasas Saturadas</strong> 
			<div id="saturadas"></div>
			
			<li class="red-class"> <strong>Sodio</strong> 
			<div id="sodio"></div>
			
			<li class="green-class"> <strong>Azucares</strong> 
			<div id="azucares"></div>
		  </ul>
		  </div>
		  <a href="/" class="btn">Volver</a>
      </div>

      <!-- /END THE FEATURETTES -->

	
</body>
</html>
