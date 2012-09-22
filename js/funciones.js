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

	$("#todo").css("opacity", 0)

	setTimeout(function(){
		var altura = $("#todo").height();
		$("#barracentral").css("height", altura+35);
		crecermedio();
		$("#todo").animate({
			opacity: 1,
		}, 2000);
	}, 500);

	var pathname = window.location.pathname;
	var botonmenu = $("nav#menu ul li a");

	$.each(botonmenu, function(){
		//alert($(this).attr("href"));
		var url = $(this).attr("href");
		if (url == pathname.substr(pathname.lastIndexOf("/")+1)){
			var botonmenu2 = $("nav#menu ul li a[href='"+url+"']");
		    botonmenu2.addClass("botonhover");
		    botonmenu2.css("color", "#97c93c");
		}
	});

	/*if (/quienes-somos.php/.test(pathname)){
		var botonmenu2 = $("nav#menu ul li a[href]");
		alert(botonmenu2);
	    botonmenu2.addClass("botonhover");
	    botonmenu2.css("color", "#97c93c");
	}*/

})