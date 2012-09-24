<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<?php include("includes/head.php"); ?>
	<script src="js/jquery.adipoli.min.js" type="text/javascript"></script>
	<link href="css/adipoli.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript">
		$(document).on("ready", function(){
			$("div.galeriaimg img").adipoli({
			    'startEffect' : 'grayscale',
			    'hoverEffect' : 'normal'
			});

			$("#galeria #caption").animate({
				opacity: 0.5,
				top: -35,
			}, 1000);

			var botonmenu2 = $("nav#menu ul li a[href='productos.php']");
		    botonmenu2.addClass("botonhover");
		    botonmenu2.css("color", "#97c93c");

			$("div.galeriaimg a").click(function(e){
				e.preventDefault();
				var foto = $(this).attr("href");
				var caption = $(this).attr("alt");
				var fotomostrar = $("#leftside #galeria");
				fotomostrar.animate({opacity: 0}, 500, function(){
					fotomostrar.html("<img src='" + foto +"'' border='0'><div id='caption'>" + caption + "</div>");
					//fotomostrar.css("opacity", "0");
					fotomostrar.stop().animate({opacity: 1}, 4000);
					$("#galeria #caption").animate({
						opacity: 0.5,
						top: -35,
					}, 1000);
					});
			});

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
			<div id="rightside" style="height:400px;">
				<div class="galeriaimg">
					<a href="images/counters/counter01.jpg" alt="COUNTER 01"><img src="images/counters/counter01-sm.jpg" border="0"></a>
				</div>
				<div class="galeriaimg">
					<a href="images/counters/counter02.jpg" alt="COUNTER 02"><img src="images/counters/counter02-sm.jpg" border="0"></a>
				</div>
				<div class="galeriaimg">
					<a href="images/counters/counter03.jpg" alt="COUNTER 03"><img src="images/counters/counter03-sm.jpg" border="0"></a>
				</div>
				<div class="galeriaimg">
					<a href="images/counters/counter04.jpg" alt="COUNTER 04"><img src="images/counters/counter04-sm.jpg" border="0"></a>
				</div>
				<div class="galeriaimg">
					<a href="images/counters/counter05.jpg" alt="COUNTER 05"><img src="images/counters/counter05-sm.jpg" border="0"></a>
				</div>
				<div class="galeriaimg">
					<a href="images/counters/counter06.jpg" alt="COUNTER 06"><img src="images/counters/counter06-sm.jpg" border="0"></a>
				</div>
				<div class="galeriaimg">
					<a href="images/counters/counter07.jpg" alt="COUNTER 07"><img src="images/counters/counter07-sm.jpg" border="0"></a>
				</div>			
			</div>
			<div id="leftside">
				<div style="float:left; width:50px;">
					<img src="images/counters-titulo.png">
				</div>
				<div id="galeria" style="float:left;">
					<img src="images/counters/counter01.jpg" border="0">
					<div id="caption">COUNTER 01</div>
				</div>				
			</div>
		</section>
		<?php include("includes/footer.php"); ?>
	</div>
</body>
</html>