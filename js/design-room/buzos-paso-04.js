$(document).ready(function () {

	var prenda = ["Regular", "Tejido"];
	var selected_prenda = 0;

	$(".owl-carousel").owlCarousel({
		nav: true,
		navSpeed: 300,
		navText: false,
		items: 1,
		rewind: true
	});

	$(".owl-carousel").on('changed.owl.carousel', function (event) {
		selected_prenda = event.item.index;
	});

	var cuello = findGetParameter("cuello");
	var bolsillo = findGetParameter("bolsillo");

	if (cuello == "en_v_con_capucha") {
		$(".design-image > .content").prepend('<img style="z-index:1;position:absolute" src="images/Buzo/con_capucha/en_v/frente/fondo_blanco.png" class="img-responsive"/>');
		if (bolsillo == "inclinado") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/con_capucha/en_v/frente/inclinado_sombra.png" class="img-responsive"/>');
		} else if (bolsillo == "canguro") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/con_capucha/en_v/frente/canguro_sombra.png" class="img-responsive"/>');
		} else if (bolsillo == "sin_bolsillo") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/con_capucha/en_v/frente/sinbolsillo_sombra.png" class="img-responsive"/>');
		}
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:3;position:absolute" src="images/Buzo/con_capucha/en_v/frente/tejido_blanco.png" class="img-responsive"/>');
	} else if (cuello == "en_v_sin_capucha") {
		$(".design-image > .content").prepend('<img style="z-index:1;position:absolute" src="images/Buzo/sin_capucha/en_v/frente/fondo_blanco.png" class="img-responsive"/>');
		if (bolsillo == "inclinado") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/sin_capucha/en_v/frente/inclinado_sombra.png" class="img-responsive"/>');
		} else if (bolsillo == "canguro") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/sin_capucha/en_v/frente/canguro_sombra.png" class="img-responsive"/>');
		} else if (bolsillo == "sin_bolsillo") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/sin_capucha/en_v/frente/sinbolsillo_sombra.png" class="img-responsive"/>');
		}
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:3;position:absolute" src="images/Buzo/sin_capucha/en_v/frente/tejido_blanco.png" class="img-responsive"/>');
	} else if (cuello == "rugby_con_capucha") {
		$(".design-image > .content").prepend('<img style="z-index:1;position:absolute" src="images/Buzo/con_capucha/rugby/frente/fondo_blanco.png" class="img-responsive"/>');
		if (bolsillo == "inclinado") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/con_capucha/rugby/frente/inclinado_sombra.png" class="img-responsive"/>');
		} else if (bolsillo == "canguro") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/con_capucha/rugby/frente/canguro_sombra.png" class="img-responsive"/>');
		} else if (bolsillo == "sin_bolsillo") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/con_capucha/rugby/frente/sinbolsillo_sombra.png" class="img-responsive"/>');
		}
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:3;position:absolute" src="images/Buzo/con_capucha/rugby/frente/tejido_blanco.png" class="img-responsive"/>');
	} else if (cuello == "rugby_sin_capucha") {
		$(".design-image > .content").prepend('<img style="z-index:1;position:absolute" src="images/Buzo/sin_capucha/rugby/frente/fondo_blanco.png" class="img-responsive"/>');
		if (bolsillo == "inclinado") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/sin_capucha/rugby/frente/inclinado_sombra.png" class="img-responsive"/>');
		} else if (bolsillo == "canguro") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/sin_capucha/rugby/frente/canguro_sombra.png" class="img-responsive"/>');
		} else if (bolsillo == "sin_bolsillo") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/sin_capucha/rugby/frente/sinbolsillo_sombra.png" class="img-responsive"/>');
		}
		$(".design-image > .content").prepend('<img style="z-index:3;position:absolute" src="images/Buzo/sin_capucha/rugby/frente/botones_sombra.png" class="img-responsive"/>');
		$($(".design-image > .content").get(1)).prepend('<img style="z-index:4;position:absolute" src="images/Buzo/sin_capucha/rugby/frente/tejido_blanco.png" class="img-responsive"/>');
	}

	$(window).resize(function () {
		var w = $($('div.content > img.img-responsive').get(0)).width() / 2;
		var wc = $($('div.content').get(0)).width() / 2;
		var t = wc - w;
		$('div.content > img.img-responsive').css({
			marginLeft: t + "px"
		});
	});

	var w = $($('div.content > img.img-responsive').get(0)).width() / 2;
	var wc = $($('div.content').get(0)).width() / 2;
	var t = wc - w;
	$('div.content > img.img-responsive').css({
		marginLeft: t + "px"
	});

	function findGetParameter(parameterName) {
		var result = null,
		tmp = [];
		var items = location.search.substr(1).split("&");
		for (var index = 0; index < items.length; index++) {
			tmp = items[index].split("=");
			if (tmp[0] === parameterName)
				result = decodeURIComponent(tmp[1]);
		}
		return result.slice(1, -1);
	}

	$(".btn.btn-design.next").on("click", function () {
		if (cuello == "en_v_sin_capucha" || cuello == "rugby_sin_capucha") {
			switch (selected_prenda) {
			case 0:
				window.location = 'buzos-paso-final.php?cuello="' + cuello + '"&bolsillo="' + bolsillo + '"&punio_y_cintura="regular"&cordones="sin_cordones"';
				break;
			case 1:
				window.location = 'buzos-paso-final.php?cuello="' + cuello + '"&bolsillo="' + bolsillo + '"&punio_y_cintura="tejido"&cordones="sin_cordones"';
				break;
			}
		} else if (cuello == "en_v_con_capucha" || cuello == "rugby_con_capucha") {
			switch (selected_prenda) {
			case 0:
				window.location = 'buzos-paso-05.php?cuello="' + cuello + '"&bolsillo="' + bolsillo + '"&punio_y_cintura="regular"';
				break;
			case 1:
				window.location = 'buzos-paso-05.php?cuello="' + cuello + '"&bolsillo="' + bolsillo + '"&punio_y_cintura="tejido"';
				break;
			}
		}
	});

	$(".btn.btn-design.prev").on("click", function () {
		window.location = 'buzos-paso-03.php?cuello="' + cuello + '"';
	});

});
