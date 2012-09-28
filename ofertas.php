<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<?php include("includes/head.php"); ?>
	<script type="text/javascript" src="js/jquery.adipoli.js"></script>
	<script type="text/javascript" src="shadowbox/shadowbox.js"></script>
	<link rel="stylesheet" href="css/adipoli.css">
	<link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css">
	<script type="text/javascript">
		$(document).on("ready", function(){

			/*$('#oferta').adipoli({
				'startEffect' : 'overlay',
				'hoverEffect' : 'foldLeft'
			});
			
			setTimeout(function(){
				$('#oferta').click();
			}, 1500);*/
			$(".oferta").css("display", "none");
			setTimeout(function(){
				$(".oferta").fadeIn(2000);
			}, 1500);
			
			Shadowbox.init();

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
			<h1>Ofertas del Mes</h1>
			<p align="center"><a href="images/oferta-del-mes.jpg" rel="shadowbox"><img src="images/oferta-del-mes-sm.jpg" class="oferta"></a></p>	
		</section>
		<?php include("includes/footer.php"); ?>
	</div>
</body>
</html>