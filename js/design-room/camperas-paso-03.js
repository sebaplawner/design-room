$(document).ready(function() {
	
	var prenda = ["Con cierre", "Con snaps"]; 
	var selected_prenda = 0;

	$(".owl-carousel").owlCarousel({
	  nav: true,
	  navSpeed: 300,
	  navText: false,
	  items: 1,
	  rewind: true
	});
	
	$(".owl-carousel").on('changed.owl.carousel', function(event) {
		selected_prenda = event.item.index;
	});
	
	var cuello = findGetParameter("cuello");
	
	if(cuello == "alto_sin_capucha") {
		$($(".design-image > .content").get(0)).prepend('<img style="z-index:1;position:absolute" src="images/Campera/con_cierre/sin_capucha/Alto/Espalda/cierre_sin_alto_espalda_blanco_cangu.png" class="img-responsive"/>');
		$($(".design-image > .content").get(0)).prepend('<img style="z-index:2;position:absolute" src="images/Campera/con_cierre/sin_capucha/Alto/Frente/Inclinado/cierre_sin_alto_frente_transp_incl_regular.png" class="img-responsive"/>');
		
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:1;position:absolute" src="images/Campera/campera_cuello_alto_sin_capucha.png" class="img-responsive"/>');
	} else if(cuello == "alto_con_capucha") {
		$($(".design-image > .content").get(0)).prepend('<img style="z-index:1;position:absolute" src="images/Campera/campera.png" class="img-responsive"/>');
		
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:1;position:absolute" src="images/Campera/campera_cuello_alto_con_capucha.png" class="img-responsive"/>');
	} else if(cuello == "rugby_sin_capucha") {
		$($(".design-image > .content").get(0)).prepend('<img style="z-index:1;position:absolute" src="images/Campera/campera_cuello_rugby_sin_capucha.png" class="img-responsive"/>');
		
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:1;position:absolute" src="images/Campera/con_botones/sin_capucha/Rugby/Frente/boton_sin_rugby_frente_blanco_cangu.png" class="img-responsive"/>');
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:2;position:absolute" src="images/Campera/con_botones/sin_capucha/Rugby/Frente/Inclinado/boton_sin_rugby_frente_transp_inclinado_regular.png" class="img-responsive"/>');
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:3;position:absolute" src="images/Campera/con_botones/sin_capucha/Rugby/Frente/boton_sin_rugby_frente_boton_transp.png" class="img-responsive"/>');
	} else if(cuello == "rugby_con_capucha") {
		$($(".design-image > .content").get(0)).prepend('<img style="z-index:1;position:absolute" src="images/Campera/con_botones/con_capucha/Alto/Espalda/bot_con_alto_fren_blanco_cangu.png" class="img-responsive"/>');
		$($(".design-image > .content").get(0)).prepend('<img style="z-index:2;position:absolute" src="images/Campera/con_cierre/con_capucha/Rugby/Frente/Inclinado/boton_con_alto_frente_transp_inclinado_regular.png" class="img-responsive"/>');
		
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:1;position:absolute" src="images/Campera/con_botones/con_capucha/Alto/Espalda/bot_con_alto_fren_blanco_cangu.png" class="img-responsive"/>');
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:2;position:absolute" src="images/Campera/con_botones/con_capucha/Rugby/Frente/Inclinado/bot_con_rugby_fren_transp_inclinado_regu.png" class="img-responsive"/>');
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:3;position:absolute" src="images/Campera/con_botones/con_capucha/Rugby/Frente/bot_con_rugby_boton_fren_transp.png" class="img-responsive"/>');
	}
	
	$(window).resize(function() {
		var w = $($('div.content > img.img-responsive').get(0)).width() / 2;
		var wc = $($('div.content').get(0)).width() / 2;
		var t = wc - w;
		$('div.content > img.img-responsive').css( { marginLeft : t + "px" } );
	});
	
	var w = $($('div.content > img.img-responsive').get(0)).width() / 2;
	var wc = $($('div.content').get(0)).width() / 2;
	var t = wc - w;
	$('div.content > img.img-responsive').css( { marginLeft : t + "px" } );
	
	function findGetParameter(parameterName) {
		var result = null,
			tmp = [];
		var items = location.search.substr(1).split("&");
		for (var index = 0; index < items.length; index++) {
			tmp = items[index].split("=");
			if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
		}
		return result.slice(1, -1);
	}

	$(".btn.btn-design.next").on("click", function() {
	  switch(selected_prenda) {
		  case 0:
			window.location = 'camperas-paso-04.php?cuello="' + cuello + '"&cierre="con_cierre"';
		  break;
		  case 1:
			window.location = 'camperas-paso-04.php?cuello="' + cuello + '"&cierre="con_snaps"';
		  break;
	  }
	});

	$(".btn.btn-design.prev").on("click", function() {
		window.location = 'camperas-paso-02.php';
	});

});