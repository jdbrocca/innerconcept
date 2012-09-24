<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<?php include("includes/head.php"); ?>
	<script type="text/javascript" src="js/jquery.adipoli.min.js"></script>
	<link rel="stylesheet" href="css/adipoli.css">
	<script type="text/javascript">
		$(document).on("ready", function(){

			/*setTimeout(function(){
				var altura = $("#todo").height();
				$("#barracentral").css("height", altura+30);
				crecermedio();
			}, 500);*/

		});
	</script>
	<style type="text/css">
		/*#todo img{
			border: 5px solid #FFF;
			border-radius: 5px;
			box-shadow: 2px 2px 10px rgba(255, 255, 255, 0.5);
		}*/
	</style>
</head>
<body>
	<div id="fondo"></div>
	<div id="barracentral"></div>
	
	<div id="principal">
		<?php include("includes/header.php"); ?>
		<?php include("includes/menu.php"); ?>
		<section id="todo">
			<h1><img src="images/la-empresa.jpg" class="Lpic" id="foto1">La Empresa</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum hendrerit erat ut odio aliquam eleifend dignissim vel sem. Duis quis mattis nibh. Phasellus purus lectus, commodo non tempor ac, sollicitudin sit amet nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc luctus tortor at ante porta euismod. Proin viverra mauris vel elit porttitor sodales. Cras pretium adipiscing pharetra.</p>
			<p>Suspendisse pellentesque facilisis neque ut imperdiet. Aenean hendrerit lobortis semper. Sed sed orci et tellus semper accumsan non non lacus. Pus. Cras at magna ut metus laoreet accumsan. Fusce egestas velit interdum orci euismod et semper enim rhoncus. Suspendisse velit nisl, mattis vitae mattis vel, faucibus posuere diam. In ac quam eget arcu rutrum fermentum.</p>
		</section>
		<?php include("includes/footer.php"); ?>
	</div>
</body>
</html>