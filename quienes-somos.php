<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<?php include("includes/head.php"); ?>
	<script type="text/javascript" src="slider/jquery.nivo.slider.js"></script>
	<script type="text/javascript" src="jCapSlide/jquery.capSlide.js"></script>
	<script type="text/javascript" src="js/jquery.animate-colors.js"></script>
	<link rel="stylesheet" href="slider/themes/default/default.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="slider/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="jCapSlide/style.css">
	<script type="text/javascript">
		$(document).on("ready", function(){
			$("#slider").nivoSlider();

			var altura = $("#todo").height();
			$("#barracentral").css("height", altura + 35);

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
	<style type="text/css">
		#todo img{
			border: 5px solid #FFF;
			border-radius: 5px;
			box-shadow: 2px 2px 10px rgba(255, 255, 255, 0.5);
		}
</style>
</head>
<body>
	<div id="fondo"></div>
	<div id="barracentral"></div>
	<div id="principal">
		<?php include("includes/header.php"); ?>
		<?php include("includes/menu.php"); ?>
		<section id="todo">
			<h1>Quienes Somos</h1>
			<p><img src="images/quienes-somos.jpg" class="Lpic">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum hendrerit erat ut odio aliquam eleifend dignissim vel sem. Duis quis mattis nibh. Phasellus purus lectus, commodo non tempor ac, sollicitudin sit amet nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc luctus tortor at ante porta euismod. Proin viverra mauris vel elit porttitor sodales. Cras pretium adipiscing pharetra.</p>
			<p>Suspendisse pellentesque facilisis neque ut imperdiet. Aenean hendrerit lobortis semper. Sed sed orci et tellus semper accumsan non non lacus. Pellentesque metus orci, faucibus at placerat eu, rutrum sit amet risus. Cras at magna ut metus laoreet accumsan. Fusce egestas velit interdum orci euismod et semper enim rhoncus. Suspendisse velit nisl, mattis vitae mattis vel, faucibus posuere diam. In ac quam eget arcu rutrum fermentum.</p>
			<p>Praesent placerat aliquet neque sed bibendum. Pellentesque imperdiet eleifend aliquet. Aliquam laoreet rhoncus scelerisque. Maecenas erat massa, sollicitudin in pharetra quis, tempor pellentesque felis. Etiam consectetur felis metus, at consectetur tortor. Vestibulum molestie egestas congue. Duis vitae turpis dolor, eget faucibus lacus. Suspendisse vel mi ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In hac habitasse platea dictumst. Nullam lacinia nunc sed nibh posuere dapibus. Fusce eu tempus magna.</p>
		</section>
		<?php include("includes/footer.php"); ?>
	</div>
</body>
</html>