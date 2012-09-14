<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<?php include("includes/head.php"); ?>
	<script type="text/javascript" src="slider/jquery.nivo.slider.js"></script>
	<link rel="stylesheet" href="slider/themes/default/default.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="slider/nivo-slider.css" type="text/css" media="screen" />
	<script type="text/javascript">
		$(document).on("ready", function(){
			$("#slider").nivoSlider();
		});
	</script>	
</head>
<body>
		<section id="todo">
			<div id="leftside">
				<table width="400" cellspacing="0" cellpadding="0" border="0" id="imageneshome">
					<tr>
						<td>
							<span>Sofa</span><br>
				            <img src="images/imagen01.jpg" alt="" width="170" height="115"/>
						</td>
						<td>
							<span>Alfombras</span><br>
				            <img src="images/imagen02.jpg" alt="" width="170" height="115"/>
						</td>
					</tr>
					<tr>
						<td>
							<span>Cortinas</span><br>
				            <img src="images/imagen03.jpg" alt="" width="170" height="115"/>
						</td>
						<td>
							<span>Counters</span><br>
				            <img src="images/imagen04.jpg" alt="" width="170" height="115"/>
						</td>
					</tr>
					<tr>
						<td>
							<span>Comedores</span><br>
				            <img src="images/imagen05.jpg" alt="" width="170" height="115"/>
						</td>
						<td>
							<span>Porcelanato</span><br>
				            <img src="images/imagen06.jpg" alt="" width="170" height="115"/>
						</td>
					</tr>
				</table>
			</div>	
			<div id="rightside">
				<section id="contenido">
					<?php include("includes/slider.php"); ?> 			
				</section>
			</div>				
		</section>
</body>
</html>