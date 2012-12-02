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
	<meta name="description" content="Ficha de calidad de un alimento">
	<meta name="author" content="Chubasco">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	<link rel="stylesheet" href="/assets/css/style.css?v=2">

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
		
		$(document).ready(function () {
			var frank_param = gup( 'codigo' );
			//alert(frank_param);
			$.ajax({ // ajax call starts
				url: 'http://api.friendlyfood.me/api/search/producto/code/'+frank_param+'/format/json', 
				dataType: 'json', // Choosing a JSON datatype
				success: 
				function(data) // Variable data constains the data we get from serverside
				{
					$('#producto').append(data['NombreProducto'] + '<br/>');
					$('#calorias').append(data['KcalFlag'] + '<br/>');
					$('#grasas').append(data['GrasaFlag'] + '<br/>');
					$('#saturadas').append(data['GrasaSaturadaFlag'] + '<br/>');
					$('#azucares').append(data['HdeCFlag'] + '<br/>');
					$('#sodio').append(data['SodioFlag'] + '<br/>');
				}
			});
		});	        
    </script>
	
</head>

<body>
	<div id="container">
        <div id="contact-form" class="clearfix">
			<form method="post" action="">
		        <div id="labelProducto">Producto</div>
		        <div id="producto"></div>
				
		        <div id="labelComponente">Calorias</div>
				<div id="calorias"></div>
				
		        <div id="labelComponente">Grasas</div>
				<div id="grasas"></div>
				
		        <div id="labelComponente">Grasas Saturadas</div>
				<div id="saturadas"></div>
				
		        <div id="labelComponente">azucares</div>
				<div id="azucares"></div>
				
		        <div id="labelComponente">sodio</div>
				<div id="sodio"></div>
				<a href="/" class="btn" type="submit">Volver</button>
			</form>
		</div>
	</div>

	
</body>
</html>
