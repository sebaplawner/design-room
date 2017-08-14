$(document).ready(function () {

	var prenda = ["Con Cordones", "Sin Cordones"];
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
	var punio_y_cintura = findGetParameter("punio_y_cintura");

	if (cuello == "en_v_con_capucha") {
		$(".design-image > .content").prepend('<img style="z-index:1;position:absolute" src="images/Buzo/con_capucha/en_v/frente/fondo_blanco.png" class="img-responsive"/>');
		if (bolsillo == "inclinado") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/con_capucha/en_v/frente/inclinado_sombra.png" class="img-responsive"/>');
		} else if (bolsillo == "canguro") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/con_capucha/en_v/frente/canguro_sombra.png" class="img-responsive"/>');
		} else if (bolsillo == "sin_bolsillo") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/con_capucha/en_v/frente/sinbolsillo_sombra.png" class="img-responsive"/>');
		}
		$($(".design-image > .content").get(0)).prepend('<img style="z-index:4;position:absolute" src="images/Buzo/con_capucha/en_v/frente/cordones_blanco.png" class="img-responsive"/>');
		$($(".design-image > .content").get(0)).prepend('<img style="z-index:5;position:absolute" src="images/Buzo/con_capucha/en_v/frente/cordones_sombra.png" class="img-responsive"/>');

	} else if (cuello == "en_v_sin_capucha") {
		$(".design-image > .content").prepend('<img style="z-index:1;position:absolute" src="images/Buzo/sin_capucha/en_v/frente/fondo_blanco.png" class="img-responsive"/>');
		if (bolsillo == "inclinado") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/sin_capucha/en_v/frente/inclinado_sombra.png" class="img-responsive"/>');
		} else if (bolsillo == "canguro") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/sin_capucha/en_v/frente/canguro_sombra.png" class="img-responsive"/>');
		} else if (bolsillo == "sin_bolsillo") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/con_capucha/en_v/frente/sinbolsillo_sombra.png" class="img-responsive"/>');
		}
		$($(".design-image > .content").get(0)).prepend('<img style="z-index:4;position:absolute" src="images/Buzo/sin_capucha/en_v/frente/cordones_blanco.png" class="img-responsive"/>');
		$($(".design-image > .content").get(0)).prepend('<img style="z-index:5;position:absolute" src="images/Buzo/sin_capucha/en_v/frente/cordones_sombra.png" class="img-responsive"/>');

	} else if (cuello == "rugby_con_capucha") {
		$(".design-image > .content").prepend('<img style="z-index:1;position:absolute" src="images/Buzo/con_capucha/rugby/frente/fondo_blanco.png" class="img-responsive"/>');
		if (bolsillo == "inclinado") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/con_capucha/rugby/frente/inclinado_sombra.png" class="img-responsive"/>');
		} else if (bolsillo == "canguro") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/con_capucha/rugby/frente/canguro_sombra.png" class="img-responsive"/>');
		} else if (bolsillo == "sin_bolsillo") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/con_capucha/rugby/frente/sinbolsillo_sombra.png" class="img-responsive"/>');
		}
		$($(".design-image > .content").get(0)).prepend('<img style="z-index:4;position:absolute" src="images/Buzo/con_capucha/rugby/frente/cordones_blanco.png" class="img-responsive"/>');
		$($(".design-image > .content").get(0)).prepend('<img style="z-index:5;position:absolute" src="images/Buzo/con_capucha/rugby/frente/cordones_sombra.png" class="img-responsive"/>');

	} else if (cuello == "rugby_sin_capucha") {
		$(".design-image > .content").prepend('<img style="z-index:1;position:absolute" src="images/Buzo/sin_capucha/rugby/frente/fondo_blanco.png" class="img-responsive"/>');
		if (bolsillo == "inclinado") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/sin_capucha/rugby/frente/inclinado_sombra.png" class="img-responsive"/>');
		} else if (bolsillo == "canguro") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/sin_capucha/rugby/frente/canguro_sombra.png" class="img-responsive"/>');
		} else if (bolsillo == "sin_bolsillo") {
			$(".design-image > .content").prepend('<img style="z-index:2;position:absolute" src="images/Buzo/sin_capucha/rugby/frente/sinbolsillo_sombra.png" class="img-responsive"/>');
		}
		$($(".design-image > .content").get(0)).prepend('<img style="z-index:4;position:absolute" src="images/Buzo/sin_capucha/rugby/frente/cordones_blanco.png" class="img-responsive"/>');
		$($(".design-image > .content").get(0)).prepend('<img style="z-index:5;position:absolute" src="images/Buzo/sin_capucha/rugby/frente/cordones_sombra.png" class="img-responsive"/>');
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
		switch (selected_prenda) {
		case 0:
			window.location = 'buzos-paso-final.php?cuello="' + cuello + '"&bolsillo="' + bolsillo + '"&punio_y_cintura="' + punio_y_cintura + '"&cordones="con_cordones"';
			break;
		case 1:
			window.location = 'buzos-paso-final.php?cuello="' + cuello + '"&bolsillo="' + bolsillo + '"&punio_y_cintura="' + punio_y_cintura + '"&cordones="sin_cordones"';
			break;
		}
	});

	$(".btn.btn-design.prev").on("click", function () {
		window.location = 'buzos-paso-04.php?cuello="' + cuello + '"&bolsillo="' + bolsillo + '"';
	});

});

function hexToRgb(color) {
	var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
	color = color.replace(shorthandRegex, function (m, r, g, b) {
			return r + r + g + g + b + b;
		});

	var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(color);
	return result ? {
		r: parseInt(result[1], 16),
		g: parseInt(result[2], 16),
		b: parseInt(result[3], 16)
	}
	 : {
		r: 0,
		g: 0,
		b: 0
	};
}

function colorImage(imgId, hexaColor) {
	// create hidden canvas (using image dimensions)
	var imgElement = document.getElementById(imgId);

	var canvas = document.createElement("canvas");
	canvas.width = imgElement.width;
	canvas.height = imgElement.height;

	var ctx = canvas.getContext("2d");
	ctx.drawImage(imgElement, 0, 0);

	var imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);

	var data = imageData.data;

	// convert image to grayscale
	var rgbColor = hexToRgb(hexaColor);

	for (var p = 0, len = data.length; p < len; p += 4) {
		if (data[p + 3] == 0)
			continue;
		data[p + 0] = rgbColor.r;
		data[p + 1] = rgbColor.g;
		data[p + 2] = rgbColor.b;
		data[p + 3] = 255;
	}
	ctx.putImageData(imageData, 0, 0);

	// replace image source with canvas data
	imgElement.src = canvas.toDataURL();
}
