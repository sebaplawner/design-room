$(document).ready(function() {
	
	var prenda = ["con_cierre", "con_snaps"]; 
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
	
	if(cuello == "en_v_con_capucha") {
		$(".design-image > .content").prepend('<img style="z-index:1;position:absolute" src="images/Universitario/con_cierre/con_capucha/en_v/frente/frente_blanco.png" class="img-responsive"/>');
		
		$($(".design-image > .content").get(0)).prepend('<img style="z-index:2;position:absolute" src="images/Universitario/con_cierre/con_capucha/en_v/frente/inclinado_sombra.png" class="img-responsive"/>');
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:2;position:absolute" src="images/Universitario/con_botones/con_capucha/en_v/frente/inclinado_sombra.png" class="img-responsive"/>');
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:3;position:absolute" src="images/Universitario/con_botones/con_capucha/en_v/frente/botones_sombra.png" class="img-responsive"/>');
		
	} else if(cuello == "en_v_sin_capucha") {
		$(".design-image > .content").prepend('<img style="z-index:1;position:absolute" src="images/Universitario/con_cierre/sin_capucha/en_v/frente/frente_blanco.png" class="img-responsive"/>');
		
		$($(".design-image > .content").get(0)).prepend('<img style="z-index:2;position:absolute" src="images/Universitario/con_cierre/sin_capucha/en_v/frente/inclinado_sombra.png" class="img-responsive"/>');
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:2;position:absolute" src="images/Universitario/con_botones/sin_capucha/en_v/frente/inclinado_sombra.png" class="img-responsive"/>');
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:3;position:absolute" src="images/Universitario/con_botones/sin_capucha/en_v/frente/botones_sombra.png" class="img-responsive"/>');
		
	} else if(cuello == "alto_con_capucha") {
		$(".design-image > .content").prepend('<img style="z-index:1;position:absolute" src="images/Universitario/con_cierre/con_capucha/alto/frente/frente_blanco.png" class="img-responsive"/>');
		
		$($(".design-image > .content").get(0)).prepend('<img style="z-index:2;position:absolute" src="images/Universitario/con_cierre/con_capucha/alto/frente/inclinado_sombra.png" class="img-responsive"/>');
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:2;position:absolute" src="images/Universitario/con_botones/con_capucha/alto/frente/inclinado_sombra.png" class="img-responsive"/>');
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:3;position:absolute" src="images/Universitario/con_botones/con_capucha/alto/frente/botones_sombra.png" class="img-responsive"/>');
		
	} else if(cuello == "alto_sin_capucha") {
		$(".design-image > .content").prepend('<img style="z-index:1;position:absolute" src="images/Universitario/con_cierre/sin_capucha/alto/frente/frente_blanco.png" class="img-responsive"/>');
		
		$($(".design-image > .content").get(0)).prepend('<img style="z-index:2;position:absolute" src="images/Universitario/con_cierre/sin_capucha/alto/frente/inclinado_sombra.png" class="img-responsive"/>');
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:2;position:absolute" src="images/Universitario/con_botones/sin_capucha/alto/frente/inclinado_sombra.png" class="img-responsive"/>');
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:3;position:absolute" src="images/Universitario/con_botones/sin_capucha/alto/frente/botones_sombra.png" class="img-responsive"/>');
		
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
			window.location = 'universitarios-paso-04.php?cuello="' + cuello + '"&cierre="con_cierre"';
		  break;
		  case 1:
			window.location = 'universitarios-paso-04.php?cuello="' + cuello + '"&cierre="con_snaps"';
		  break;
	  }
	});

	$(".btn.btn-design.prev").on("click", function() {
		window.location = 'universitarios-paso-02.php';
	});

});