<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<?php include("includes/head.php"); ?>
	<!-- <script type="text/javascript" src="slider/jquery.nivo.slider.js"></script>
	<link rel="stylesheet" href="slider/themes/default/default.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="slider/nivo-slider.css" type="text/css" media="screen" /> -->
	<script type="text/javascript" src="js/s3Slider.js"></script>
	<script type="text/javascript">
		$(document).on("ready", function(){
			//$("#slider").nivoSlider();

			setTimeout(function(){
				$('#s3slider').s3Slider({
			        timeOut: 2500
			    });	
			}, 2000);	

			var imageneshome = $("#imageneshome img");
			imageneshome.css("opacity", 0.5);
			imageneshome.stop().hover(
				function(){
					$(this).stop().fadeTo("slow", 1);
				},
				function(){
					$(this).stop().fadeTo("slow", 0.5);
				}
			);

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
				<!-- <?php //include("includes/slider.php"); ?> -->
				<div id="s3slider">
				    <ul id="s3sliderContent">
				        <li class="s3sliderImage">
				            <a href=""> <img src="images/slider-01.jpg" alt="1" /></a>
                			<span class="left"><strong>COUNTERS</strong></span></li>
				        <li class="s3sliderImage">
				            <a href=""> <img src="images/slider-02.jpg" alt="2" /></a>
                			<span class="right"><strong>SALAS DE ESPERA</strong></span></li>
				        <li class="s3sliderImage">
				            <a href=""> <img src="images/slider-03.jpg" alt="3" /></a>
                			<span class="left"><strong>SALAS DE REUNIONES</strong></span></li>
				        <li class="s3sliderImage">
				            <a href=""> <img src="images/slider-04.jpg" alt="4" /></a>
                			<span class="right"><strong>GERENCIAS</strong></span></li>
                	    <li class="s3sliderImage">
				            <a href=""> <img src="images/slider-05.jpg" alt="4" /></a>
                			<span class="left"><strong>PUESTOS</strong></span></li>
                		<li class="s3sliderImage">
				            <a href=""> <img src="images/slider-06.jpg" alt="4" /></a>
                			<span class="right"><strong>ARCHIVO MÓVIL</strong></span></li>                			
				        <div class="clear s3sliderImage"></div>
				    </ul>
				</div>				
		</section>
		<?php include("includes/footer.php"); ?>
	</div>
</body>
</html>