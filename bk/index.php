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

			var altura = $("#contenido").height();
			$("#barracentral").css("height", altura+30);

			var subt = $("#header #subtitulo2");
			subt.css("opacity", 0);

			function movsubt(){
				subt.css("left", 580);
				subt.animate({
					opacity: 0.8,
				}, 2000, function(){
					subt.animate({
						opacity: 0,
					    left: '-=250',
					}, 4000);
				});
			}
			movsubt();

			setInterval(function() {
			    movsubt();
			}, 10000);		

            $("#capslide_img_cont, #capslide_img_cont2, #capslide_img_cont3, #capslide_img_cont4").capslide({
                caption_color	: 'white',
                caption_bgcolor	: 'black',
                overlay_bgcolor : 'black',
                border			: '',
                showcaption	    : false
            });			

            // MENU HORIZONTAL
            //$('#barracentral').animate({backgroundColor: '#400101'})
            /*$("#enlace").click(function(e){
            	e.preventDefault();
            	$("#barracentral").animate({
            		backgroundColor: '#FF0000'
            	});
            });*/
		});
	</script>
</head>
<body>
	<div id="barracentral">
		
	</div>
	<div id="principal">
		<?php include("includes/header.php"); ?>
		<?php include("includes/menu.php"); ?>
		<section>
			<div id="leftside">
				<table width="400" cellspacing="0" cellpadding="0" border="0" id="imageneshome">
					<tr>
						<td>
				            <div id="capslide_img_cont" class="ic_container">
				                <img src="images/imagen01.jpg" alt="" width="170" height="180"/>
				                <div class="overlay" style="display:none;"></div>
				                <div class="ic_caption">
				                    <h3>Sofas</h3>
				                </div>
				            </div>						
						</td>
						<td>
				            <div id="capslide_img_cont2" class="ic_container">
				                <img src="images/imagen02.jpg" alt="" width="170" height="180"/>
				                <div class="overlay" style="display:none;"></div>
				                <div class="ic_caption">
				                    <h3>Alfombras</h3>
				                </div>
				            </div>	
						</td>
					</tr>
					<tr>
						<td colspand="2" height="30"></td>
					</tr>
					<tr>
						<td>
				            <div id="capslide_img_cont3" class="ic_container">
				                <img src="images/imagen03.jpg" alt="" width="170" height="180"/>
				                <div class="overlay" style="display:none;"></div>
				                <div class="ic_caption">
				                    <h3>Cortinas</h3>
				                </div>
				            </div>	
						</td>
						<td>
				            <div id="capslide_img_cont4" class="ic_container">
				                <img src="images/imagen04.jpg" alt="" width="170" height="180"/>
				                <div class="overlay" style="display:none;"></div>
				                <div class="ic_caption">
				                    <h3>Counters</h3>
				                </div>
				            </div>								
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
		<?php include("includes/footer.php"); ?>
	</div>
</body>
</html>