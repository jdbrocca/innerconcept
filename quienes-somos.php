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
			$("#barracentral").css("height", altura+30);

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

		#todo img:hover{
			border: 5px solid #97c93d;
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
			<p><img src="images/quienes-somos.jpg" class="Lpic">sdfajlkdjal sdflka sdflkajsdlkfja lsjlk asdjlfka sdlkfualsdf lasdf asdlk jclkjdslk fjaslkd fjlkasj dflkajsdlkfjalksdfjlkaj sdfjaskldfj alsdjfl kasdjfk asdlfkja slkdfjal sdfiouwerquweruq wajsd fajsdf</p>
			<p>asdkjasd falksdf asdufqw elrjqwle jrlq,fna,dnfas,mdnf asdfkjlasjdfauieouqoiwruiouewrasdf jaslkdjfqwerqwopeirq wdkfñ lasdifopaipoeirpkñldsfkñlasdk fñlasdfñiasdfiaposdifpoaipoeipof akñsldfkñlasdf asdifpoa spkelñaksñldk fadsdf askdf aksdñl i sivos dfsdfkgñlskdf gskdfogispodf gñlskdf ñgloperipotwierpotkw ñelrtk ñwerktw ierposkdfl</p>
			<p>ksdfha kshfkajsd fwei rklwejklr jaklsdfj alksdjf asdufasdjflkas dlfk ajsdlfjalksd jfasd</p>
			<p>sdfajlkdjal sdflka sdflkajsdlkfja lsjlk asdjlfka sdlkfualsdf lasdf asdlk jclkjdslk fjaslkd fjlkasj dflkajsdlkfjalksdfjlkaj sdfjaskldfj alsdjfl kasdjfk asdlfkja slkdfjal sdfiouwerquweruq wajsd fajsdf</p>
			<p>asdkjasd falksdf asdufqw elrjqwle jrlq,fna,dnfas,mdnf asdfkjlasjdfauieouqoiwruiouewrasdf jaslkdjfqwerqwopeirq wdkfñ lasdifopaipoeirpkñldsfkñlasdk fñlasdfñiasdfiaposdifpoaipoeipof akñsldfkñlasdf asdifpoa spkelñaksñldk fadsdf askdf aksdñl i sivos dfsdfkgñlskdf gskdfogispodf gñlskdf ñgloperipotwierpotkw ñelrtk ñwerktw ierposkdfl</p>
		</section>
		<?php include("includes/footer.php"); ?>
	</div>
</body>
</html>