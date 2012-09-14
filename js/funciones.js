function movsubt(){
	var subt = $("#header #subtitulo2");
	subt.css("left", 530);
	subt.animate({
		opacity: 0.8,
	}, 2000, function(){
		subt.animate({
			opacity: 0,
			left: '-=250',
		}, 4000);
	});
}

function crecermedio(){
	var barracentral = $("#barracentral");
	barracentral.css({
		"left": "49%",
		"opacity": "0",
		"width": "2%",
	});
	barracentral.animate({
		"left": "0%",
		"opacity": "1",
		"width": "100%",
	}, 2000);	
}

$(document).on("ready", function(){

	var subt = $("#header #subtitulo2");
	subt.css("opacity", 0);

	movsubt();
	
	setInterval(function() {
	    movsubt();
	}, 10000);
			
	crecermedio();

	var pathname = window.location.pathname;

	if (/quienes-somos.php/.test(pathname)){
	    var botonseleccionado = $("nav#menu ul li a[href='quienes-somos.php']");
	    botonseleccionado.addClass("botonhover");
	    botonseleccionado.css("color", "#97c93c");
	}
})