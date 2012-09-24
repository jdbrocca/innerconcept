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
			}, 2000);

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
			<img src="images/la-empresa.jpg" id="foto1">
		</section>
		<?php include("includes/footer.php"); ?>
	</div>
</body>
</html>