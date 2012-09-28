<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<?php include("includes/head.php"); ?>
	<script type="text/javascript" src="js/jquery.eachStep.min.js"></script>
	<script type="text/javascript">
		$(document).on("ready", function(){
			$(".producto").css("opacity", 0);

			setTimeout(function(){
				/*$(".producto").css("display", "block");*/
				$('.producto').eachStep(150, function(i, el, duration){
				    $(el).animate({ opacity: 0.5});
				});
			},500);

			setTimeout(function(){
				$('.producto').hover(function(){
					$(this).animate({ opacity: 1 });
				}, function(){
					$(this).animate({ opacity: 0.5 });
				});
			}, 2300);

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
			<div id="leftside">
				<div class="producto">COUNTERS<a href="counters.php"><img src="images/producto01.jpg" border="0"></a></div>
				<div class="producto">SALA DE ESPERAS<a href="#"><img src="images/producto02.jpg" border="0"></a></div>
				<div class="producto">MESAS DE REUNIONES<a href="#"><img src="images/producto03.jpg" border="0"></a></div>
				<div class="producto">GERENCIAS<a href="#"><img src="images/producto04.jpg" border="0"></a></div>
				<div class="producto">PUESTOS OPERATIVOS<a href="#"><img src="images/producto05.jpg" border="0"></a></div>
				<div class="producto">ARCHIVOS MOVILES<a href="#"><img src="images/producto13.jpg" border="0"></a></div>
				<div class="producto">PANELERIA<a href="#"><img src="images/producto06.jpg" border="0"></a></div>
				<div class="producto">COMEDORES<a href="#"><img src="images/producto07.jpg" border="0"></a></div>
				<div class="producto">KITCHENETTES<a href="#"><img src="images/producto08.jpg" border="0"></a></div>
				<div class="producto">PANELES PISO TECHO<a href="#"><img src="images/producto09.jpg" border="0"></a></div>
				<div class="producto">SILLAS<a href="#"><img src="images/producto10.jpg" border="0"></a></div>
				<div class="producto">S. ESPERA/COMEDORES<a href="#"><img src="images/producto11.jpg" border="0"></a></div>
			</div>
			<div id="rightside">
				<h1>Productos</h1>
				<p>Ofrecemos la línea más completa de productos, para hacer de sus ambientes un lugar cómodo y placentero.</p>
			</div>
		</section>
		<?php include("includes/footer.php"); ?>
	</div>
</body>
</html>