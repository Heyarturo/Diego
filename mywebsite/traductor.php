<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Acerca de</title>
	<link rel="shorcut icon" href="/mywebsite/img/favicon.png">
	<link rel="stylesheet" href="/mywebsite/css/normalize.css">
	<link rel="stylesheet" href="/mywebsite/css/default.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/mywebsite/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="/mywebsite/css/animate.css">
	<link rel="stylesheet" href="/mywebsite/css/responsiveslides.css">
	<script src="/mywebsite/js/responsiveslides.js"></script>

	<script>
		$(document).ready(function(){
			$("#slider-home").responsiveSlides({	
				speed:800,		
				nav: true,
				namespace: 'slid-btns',
				titleAnimation: 'bounceIn'
			});
		});
	</script>
</head>
<body>
<header class="cabecera">
	<div class="container clearfix">
		<div class="logo">
			<img src="/mywebsite/img/logo.png">
		</div>
		<nav class="menu">
			<ul class="clearfix">
				<li><a href="home.html">Inicio</a></li>
				<li><a href="cursos.html">Cursos</a></li>
				<li><a href="acerca_de.html">Acerca de</a></li>
				<li class="active"><a href="contacto.html">Contacto</a></li>
			</ul>
		</nav>
	</div>
</header>

<h1>Estas en la página contacto</h1>






</body>
