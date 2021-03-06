<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<?php include("includes/head.php"); ?>
	<script type="text/javascript" src="js/jquery.adipoli.js"></script>
	<link rel="stylesheet" href="css/adipoli.css">
	<script type="text/javascript">
		$(document).on("ready", function(){

			$('#foto1').adipoli({
				'startEffect' : 'overlay',
				'hoverEffect' : 'foldLeft'
			});

			setTimeout(function (){
				$('#foto1').click();
			}, 1500);

		});
	</script>
</head>
<body>
	<div id="fondo"></div>
	<div id="barracentral"></div>
	
	<div id="principal">
		<?php include("includes/header.php"); ?>
		<?php include("includes/menu.php"); ?>
		<section id="todo">
			<h1><img src="images/la-empresa.jpg" class="Lpic" id="foto1">La Empresa</h1>
			<p>Somos una empresa peruana especializada en la creación de mobiliario para espacios de trabajo que le ofrece soluciones integrales para facilitar su vida, para rodearlo de ambientes que vayan de la mano con lo funcional, armónico en líneas, colores texturas y diseños.</p>
			<p>Hacemos realidad las grandes ideas de arquitectos y público en general.</p>
			<p>Contamos con personal altamente especializado en cada una de nuestras líneas de productos.</p>
		</section>
		<?php include("includes/footer.php"); ?>
	</div>
</body>
</html>