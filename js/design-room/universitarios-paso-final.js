$(document).ready(function () {

	var loading_counter = 0;
	const loading_top = 2;

	WebFont.load({
		custom: {
			families: ["Fuente00", "Fuente01", "Fuente02", "Fuente03", "Fuente04",
				"Fuente05", "Fuente06", "Fuente07", "Fuente08", "Fuente09",
				"Fuente10", "Fuente11", "Fuente12", "Fuente13", "Fuente14",
				"Fuente15", "Fuente16", "Fuente17", "Fuente18", "Fuente19",
				"Fuente20", "Fuente21", "Fuente22", "Fuente23", "Fuente24",
				"Fuente25", "Fuente26", "Fuente27", "Fuente28", "Fuente29",
				"Fuente30"]
		},
		active: function () {
			loading_counter++;

			if (loading_counter == loading_top)
				$('#modalLoading').modal('hide');
		}
	});

	var canvas,
	ctx;
	var canvas_w = $($(".design-image > .content").get(0)).width();
	var canvas_h = $($(".design-image > .content").get(0)).height();

	var frente = true;
	var images_frente = [];
	var images_espalda = [];

	var texts_frente = [];
	var texts_espalda = [];
	var act_text = null;

	var cuello = ["Alto con capucha", "Alto sin capucha", "En V con capucha", "En V sin capucha"];
	var cierre = ["con_cierre", "con_snaps"];
	var bolsillo = ["Inclinado", "Canguro", "Sin bolsillo"];
	var punio_y_cintura = ["Regular", "Tejido"];

	var act_cuello = findGetParameter("cuello");
	var act_cierre = findGetParameter("cierre");
	var act_bolsillo = findGetParameter("bolsillo");
	var act_punio_y_cintura = findGetParameter("punio_y_cintura");

	$(".design-image > .content").html("");
	setImages();

	function setImages() {
		$('#modalLoading').modal({
			backdrop: 'static',
			keyboard: false
		});

		if (act_cuello == "alto_con_capucha") {
			alto_con_capucha();
		} else if (act_cuello == "alto_sin_capucha") {
			alto_sin_capucha();
		} else if (act_cuello == "en_v_con_capucha") {
			en_v_con_capucha();
		} else if (act_cuello == "en_v_sin_capucha") {
			en_v_sin_capucha();
		}

		loadImages(true, 0);
	}

	function alto_con_capucha() {
		if (act_cierre == "con_cierre") {
			addToArray("images/Universitario/con_cierre/con_capucha/alto/frente/fondo_blanco.png", "fondo", true, true, 0);
			if (act_bolsillo == "inclinado") {
				addToArray("images/Universitario/con_cierre/con_capucha/alto/frente/inclinado_blanco.png", "bolsillo", true, true, 1);
				addToArray("images/Universitario/con_cierre/con_capucha/alto/frente/inclinado_sombra.png", "bolsillo", true, false, 2);
			} else if (act_bolsillo == "canguro") {
				addToArray("images/Universitario/con_cierre/con_capucha/alto/frente/canguro_blanco.png", "bolsillo", true, true, 1);
				addToArray("images/Universitario/con_cierre/con_capucha/alto/frente/canguro_sombra.png", "bolsillo", true, false, 2);
			} else if (act_bolsillo == "sin_bolsillo") {
				addToArray("images/Universitario/con_cierre/con_capucha/alto/frente/sinbolsillo_sombra.png", "bolsillo", true, false, 2);
			}
			addToArray("images/Universitario/con_cierre/con_capucha/alto/frente/cuello_blanco.png", "cuello", true, true, 1);
			addToArray("images/Universitario/con_cierre/con_capucha/alto/frente/capucha_blanco.png", "capucha", true, true, 1);
			if (act_punio_y_cintura == "tejido")
				addToArray("images/Universitario/con_cierre/con_capucha/alto/frente/tejido_blanco.png", "tejido", true, true, 1);
			addToArray("images/Universitario/con_cierre/con_capucha/alto/frente/cierre_blanco.png", "cierre", true, true, 14);

			addToArray("images/Universitario/con_cierre/con_capucha/alto/espalda/fondo_blanco.png", "fondo", false, true, 0);
			if (act_punio_y_cintura == "tejido")
				addToArray("images/Universitario/con_cierre/con_capucha/alto/espalda/tejido_blanco.png", "tejido", false, true, 1);
			addToArray("images/Universitario/con_cierre/con_capucha/alto/espalda/fondo_sombra.png", "fondo", false, false, 2);

		} else if (act_cierre == "con_snaps") {
			addToArray("images/Universitario/con_botones/con_capucha/alto/frente/fondo_blanco.png", "fondo", true, true, 0);
			if (act_bolsillo == "inclinado") {
				addToArray("images/Universitario/con_botones/con_capucha/alto/frente/inclinado_blanco.png", "bolsillo", true, true, 1);
				addToArray("images/Universitario/con_botones/con_capucha/alto/frente/inclinado_sombra.png", "bolsillo", true, false, 2);
			} else if (act_bolsillo == "canguro") {
				addToArray("images/Universitario/con_botones/con_capucha/alto/frente/canguro_blanco.png", "bolsillo", true, true, 1);
				addToArray("images/Universitario/con_botones/con_capucha/alto/frente/canguro_sombra.png", "bolsillo", true, false, 2);
			} else if (act_bolsillo == "sin_bolsillo") {
				addToArray("images/Universitario/con_botones/con_capucha/alto/frente/sinbolsillo_sombra.png", "bolsillo", true, false, 2);
			}
			addToArray("images/Universitario/con_botones/con_capucha/alto/frente/cuello_blanco.png", "cuello", true, true, 1);
			addToArray("images/Universitario/con_botones/con_capucha/alto/frente/capucha_blanco.png", "capucha", true, true, 1);
			if (act_punio_y_cintura == "tejido")
				addToArray("images/Universitario/con_botones/con_capucha/alto/frente/tejido_blanco.png", "tejido", true, true, 1);
			addToArray("images/Universitario/con_botones/con_capucha/alto/frente/botones2_blanco.png", "cierre", true, true, 14);
			addToArray("images/Universitario/con_botones/con_capucha/alto/frente/botones_sombra.png", "cierre", true, false, 99);

			addToArray("images/Universitario/con_botones/con_capucha/alto/espalda/fondo_blanco.png", "fondo", false, true, 0);
			if (act_punio_y_cintura == "tejido")
				addToArray("images/Universitario/con_botones/con_capucha/alto/espalda/tejido_blanco.png", "tejido", false, true, 1);
			addToArray("images/Universitario/con_botones/con_capucha/alto/espalda/fondo_sombra.png", "fondo", false, false, 2);
		}

		addOptionsToColor(["fondo", "bolsillo", "cuello", "cierre", "capucha", "tejido"]);
		addOptionsToTextures(["fondo", "bolsillo", "cuello", "capucha"]);
	}

	function alto_sin_capucha() {
		if (act_cierre == "con_cierre") {
			addToArray("images/Universitario/con_cierre/sin_capucha/alto/frente/fondo_blanco.png", "fondo", true, true, 0);
			if (act_bolsillo == "inclinado") {
				addToArray("images/Universitario/con_cierre/sin_capucha/alto/frente/inclinado_blanco.png", "bolsillo", true, true, 1);
				addToArray("images/Universitario/con_cierre/sin_capucha/alto/frente/inclinado_sombra.png", "bolsillo", true, false, 2);
			} else if (act_bolsillo == "canguro") {
				addToArray("images/Universitario/con_cierre/sin_capucha/alto/frente/canguro_blanco.png", "bolsillo", true, true, 1);
				addToArray("images/Universitario/con_cierre/sin_capucha/alto/frente/canguro_sombra.png", "bolsillo", true, false, 2);
			} else if (act_bolsillo == "sin_bolsillo") {
				addToArray("images/Universitario/con_cierre/sin_capucha/alto/frente/sinbolsillo_sombra.png", "bolsillo", true, false, 2);
			}
			addToArray("images/Universitario/con_cierre/sin_capucha/alto/frente/cuello_blanco.png", "cuello", true, true, 1);
			if (act_punio_y_cintura == "tejido")
				addToArray("images/Universitario/con_cierre/sin_capucha/alto/frente/tejido_blanco.png", "tejido", true, true, 1);
			addToArray("images/Universitario/con_cierre/sin_capucha/alto/frente/cierre_blanco.png", "cierre", true, true, 14);

			addToArray("images/Universitario/con_botones/sin_capucha/alto/espalda/fondo_blanco.png", "fondo", false, true, 0);
			addToArray("images/Universitario/con_botones/sin_capucha/alto/espalda/cuello_blanco.png", "cuello", false, true, 1);
			if (act_punio_y_cintura == "tejido")
				addToArray("images/Universitario/con_botones/sin_capucha/alto/espalda/tejido_blanco.png", "tejido", false, true, 1);
			addToArray("images/Universitario/con_botones/sin_capucha/alto/espalda/fondo_sombra.png", "fondo", false, false, 2);

		} else if (act_cierre == "con_snaps") {
			addToArray("images/Universitario/con_botones/sin_capucha/alto/frente/fondo_blanco.png", "fondo", true, true, 0);
			if (act_bolsillo == "inclinado") {
				addToArray("images/Universitario/con_botones/sin_capucha/alto/frente/inclinado_blanco.png", "bolsillo", true, true, 1);
				addToArray("images/Universitario/con_botones/sin_capucha/alto/frente/inclinado_sombra.png", "bolsillo", true, false, 2);
			} else if (act_bolsillo == "canguro") {
				addToArray("images/Universitario/con_botones/sin_capucha/alto/frente/canguro_blanco.png", "bolsillo", true, true, 1);
				addToArray("images/Universitario/con_botones/sin_capucha/alto/frente/canguro_sombra.png", "bolsillo", true, false, 2);
			} else if (act_bolsillo == "sin_bolsillo") {
				addToArray("images/Universitario/con_botones/sin_capucha/alto/frente/sinbolsillo_sombra.png", "bolsillo", true, false, 2);
			}
			addToArray("images/Universitario/con_botones/sin_capucha/alto/frente/cuello_blanco.png", "cuello", true, true, 1);
			if (act_punio_y_cintura == "tejido")
				addToArray("images/Universitario/con_botones/sin_capucha/alto/frente/tejido_blanco.png", "tejido", true, true, 1);
			addToArray("images/Universitario/con_botones/sin_capucha/alto/frente/botones2_blanco.png", "cierre", true, true, 14);
			addToArray("images/Universitario/con_botones/sin_capucha/alto/frente/botones_sombra.png", "cierre", true, false, 99);

			addToArray("images/Universitario/con_botones/sin_capucha/alto/espalda/fondo_blanco.png", "fondo", false, true, 0);
			addToArray("images/Universitario/con_botones/sin_capucha/alto/espalda/cuello_blanco.png", "cuello", false, true, 1);
			if (act_punio_y_cintura == "tejido")
				addToArray("images/Universitario/con_botones/sin_capucha/alto/espalda/tejido_blanco.png", "tejido", false, true, 1);
			addToArray("images/Universitario/con_botones/sin_capucha/alto/espalda/fondo_sombra.png", "fondo", false, false, 2);
		}

		addOptionsToColor(["fondo", "bolsillo", "cuello", "cierre", "tejido"]);
		addOptionsToTextures(["fondo", "bolsillo", "cuello"]);
	}

	function en_v_con_capucha() {
		if (act_cierre == "con_cierre") {
			addToArray("images/Universitario/con_cierre/con_capucha/en_v/frente/fondo_blanco.png", "fondo", true, true, 0);
			if (act_bolsillo == "inclinado") {
				addToArray("images/Universitario/con_cierre/con_capucha/en_v/frente/inclinado_blanco.png", "bolsillo", true, true, 1);
				addToArray("images/Universitario/con_cierre/con_capucha/en_v/frente/inclinado_sombra.png", "bolsillo", true, false, 2);
			} else if (act_bolsillo == "canguro") {
				addToArray("images/Universitario/con_botones/con_capucha/en_v/frente/canguro_blanco.png", "bolsillo", true, true, 1);
				addToArray("images/Universitario/con_cierre/con_capucha/en_v/frente/canguro_sombra.png", "bolsillo", true, false, 2);
			} else if (act_bolsillo == "sin_bolsillo") {
				addToArray("images/Universitario/con_cierre/con_capucha/en_v/frente/sinbolsillo_sombra.png", "bolsillo", true, false, 2);
			}
			addToArray("images/Universitario/con_cierre/con_capucha/en_v/frente/cuello_blanco.png", "cuello", true, true, 1);
			addToArray("images/Universitario/con_cierre/con_capucha/en_v/frente/capucha_blanco.png", "capucha", true, true, 1);
			if (act_punio_y_cintura == "tejido")
				addToArray("images/Universitario/con_cierre/con_capucha/en_v/frente/tejido_blanco.png", "tejido", true, true, 1);
			addToArray("images/Universitario/con_cierre/con_capucha/en_v/frente/cierre_blanco.png", "cierre", true, true, 14);

			addToArray("images/Universitario/con_cierre/con_capucha/en_v/espalda/fondo_blanco.png", "fondo", false, true, 0);
			if (act_punio_y_cintura == "tejido")
				addToArray("images/Universitario/con_cierre/con_capucha/en_v/espalda/tejido_blanco.png", "tejido", false, true, 1);
			addToArray("images/Universitario/con_botones/con_capucha/en_v/espalda/fondo_sombra.png", "fondo", false, false, 1);

		} else if (act_cierre == "con_snaps") {
			addToArray("images/Universitario/con_cierre/con_capucha/en_v/frente/fondo_blanco.png", "fondo", true, true, 0);
			if (act_bolsillo == "inclinado") {
				addToArray("images/Universitario/con_botones/con_capucha/en_v/frente/inclinado_blanco.png", "bolsillo", true, true, 1);
				addToArray("images/Universitario/con_botones/con_capucha/en_v/frente/inclinado_sombra.png", "bolsillo", true, false, 2);
			} else if (act_bolsillo == "canguro") {
				addToArray("images/Universitario/con_botones/con_capucha/en_v/frente/canguro_blanco.png", "bolsillo", true, true, 1);
				addToArray("images/Universitario/con_botones/con_capucha/en_v/frente/canguro_sombra.png", "bolsillo", true, false, 2);
			} else if (act_bolsillo == "sin_bolsillo") {
				addToArray("images/Universitario/con_botones/con_capucha/en_v/frente/sinbolsillo_sombra.png", "bolsillo", true, false, 2);
			}
			addToArray("images/Universitario/con_botones/con_capucha/en_v/frente/cuello_blanco.png", "cuello", true, true, 1);
			addToArray("images/Universitario/con_botones/con_capucha/en_v/frente/capucha_blanco.png", "capucha", true, true, 1);
			if (act_punio_y_cintura == "tejido")
				addToArray("images/Universitario/con_botones/con_capucha/en_v/frente/tejido_blanco.png", "tejido", true, true, 1);
			addToArray("images/Universitario/con_botones/con_capucha/en_v/frente/botones2_blanco.png", "cierre", true, true, 14);
			addToArray("images/Universitario/con_botones/con_capucha/en_v/frente/botones_sombra.png", "cierre", true, false, 99);

			addToArray("images/Universitario/con_cierre/con_capucha/en_v/espalda/fondo_blanco.png", "fondo", false, true, 0);
			if (act_punio_y_cintura == "tejido")
				addToArray("images/Universitario/con_botones/con_capucha/en_v/espalda/tejido_blanco.png", "tejido", false, true, 1);
			addToArray("images/Universitario/con_botones/con_capucha/en_v/espalda/fondo_sombra.png", "fondo", false, false, 1);
		}

		addOptionsToColor(["fondo", "bolsillo", "cierre", "cuello", "capucha", "tejido"]);
		addOptionsToTextures(["fondo", "bolsillo", "capucha"]);
	}

	function en_v_sin_capucha() {
		if (act_cierre == "con_cierre") {
			addToArray("images/Universitario/con_cierre/sin_capucha/en_v/frente/fondo_blanco.png", "fondo", true, true, 0);
			if (act_bolsillo == "inclinado") {
				addToArray("images/Universitario/con_cierre/sin_capucha/en_v/frente/inclinado_blanco.png", "bolsillo", true, true, 1);
				addToArray("images/Universitario/con_cierre/sin_capucha/en_v/frente/inclinado_sombra.png", "bolsillo", true, false, 2);
			} else if (act_bolsillo == "canguro") {
				addToArray("images/Universitario/con_cierre/sin_capucha/en_v/frente/canguro_blanco.png", "bolsillo", true, true, 1);
				addToArray("images/Universitario/con_cierre/sin_capucha/en_v/frente/canguro_sombra.png", "bolsillo", true, false, 2);
			} else if (act_bolsillo == "sin_bolsillo") {
				addToArray("images/Universitario/con_cierre/sin_capucha/en_v/frente/sinbolsillo_sombra.png", "bolsillo", true, false, 2);
			}
			addToArray("images/Universitario/con_cierre/sin_capucha/en_v/frente/cuello_blanco.png", "cuello", true, true, 1);
			if (act_punio_y_cintura == "tejido")
				addToArray("images/Universitario/con_cierre/sin_capucha/en_v/frente/tejido_blanco.png", "tejido", true, true, 1);
			addToArray("images/Universitario/con_cierre/sin_capucha/en_v/frente/cierre_blanco.png", "cierre", true, true, 14);

			addToArray("images/Universitario/con_botones/sin_capucha/en_v/espalda/fondo_blanco.png", "fondo", false, true, 0);
			addToArray("images/Universitario/con_botones/sin_capucha/en_v/espalda/cuello_blanco.png", "cuello", false, true, 1);
			if (act_punio_y_cintura == "tejido")
				addToArray("images/Universitario/con_botones/sin_capucha/en_v/espalda/tejido_blanco.png", "tejido", false, true, 1);
			addToArray("images/Universitario/con_botones/sin_capucha/en_v/espalda/fondo_sombra.png", "fondo", false, false, 2);

		} else if (act_cierre == "con_snaps") {
			addToArray("images/Universitario/con_botones/sin_capucha/en_v/frente/fondo_blanco.png", "fondo", true, true, 0);
			if (act_bolsillo == "inclinado") {
				addToArray("images/Universitario/con_botones/sin_capucha/en_v/frente/inclinado_blanco.png", "bolsillo", true, true, 1);
				addToArray("images/Universitario/con_botones/sin_capucha/en_v/frente/inclinado_sombra.png", "bolsillo", true, false, 2);
			} else if (act_bolsillo == "canguro") {
				addToArray("images/Universitario/con_botones/sin_capucha/en_v/frente/canguro_blanco.png", "bolsillo", true, true, 1);
				addToArray("images/Universitario/con_botones/sin_capucha/en_v/frente/canguro_sombra.png", "bolsillo", true, false, 2);
			} else if (act_bolsillo == "sin_bolsillo") {
				addToArray("images/Universitario/con_botones/sin_capucha/en_v/frente/sinbolsillo_sombra.png", "bolsillo", true, false, 2);
			}
			addToArray("images/Universitario/con_botones/sin_capucha/en_v/frente/cuello_blanco.png", "cuello", true, true, 1);
			if (act_punio_y_cintura == "tejido")
				addToArray("images/Universitario/con_botones/sin_capucha/en_v/frente/tejido_blanco.png", "tejido", true, true, 1);
			addToArray("images/Universitario/con_botones/sin_capucha/en_v/frente/botones2_blanco.png", "cierre", true, true, 14);
			addToArray("images/Universitario/con_botones/sin_capucha/en_v/frente/botones_sombra.png", "cierre", true, false, 99);

			addToArray("images/Universitario/con_botones/sin_capucha/en_v/espalda/fondo_blanco.png", "fondo", false, true, 0);
			addToArray("images/Universitario/con_botones/sin_capucha/en_v/espalda/cuello_blanco.png", "cuello", false, true, 1);
			if (act_punio_y_cintura == "tejido")
				addToArray("images/Universitario/con_botones/sin_capucha/en_v/espalda/tejido_blanco.png", "tejido", false, true, 1);
			addToArray("images/Universitario/con_botones/sin_capucha/en_v/espalda/fondo_sombra.png", "fondo", false, false, 2);
		}

		addOptionsToColor(["fondo", "bolsillo", "cuello", "cierre", "tejido"]);
		addOptionsToTextures(["fondo", "bolsillo", "cuello"]);
	}

	function addOptionsToTextures(piezas) {
		for (var i = 0; i < piezas.length; i++) {
			if (piezas[i] === "fondo")
				$('#modalTextura > div > div > div.modal-footer').append('<button type="button" data-id="' + piezas[i] + '" class="btn btn-primary btn-texture">Prenda</button>');
			else if (piezas[i] === "bolsillo" && act_bolsillo != "sin_bolsillo")
				$('#modalTextura > div > div > div.modal-footer').append('<button type="button" data-id="' + piezas[i] + '" class="btn btn-primary btn-texture">Bolsillo</button>');
			else if (piezas[i] === "cuello")
				$('#modalTextura > div > div > div.modal-footer').append('<button type="button" data-id="' + piezas[i] + '" class="btn btn-primary btn-texture">Cuello</button>');
			else if (piezas[i] === "capucha")
				$('#modalTextura > div > div > div.modal-footer').append('<button type="button" data-id="' + piezas[i] + '" class="btn btn-primary btn-texture">Capucha</button>');
		}
	}

	function addOptionsToColor(piezas) {
		for (var i = 0; i < piezas.length; i++) {
			if (piezas[i] === "fondo")
				$('#modalColor > div > div > div.modal-footer').append('<button type="button" data-id="' + piezas[i] + '" class="btn btn-primary btn-color">Prenda</button>');
			else if (piezas[i] === "bolsillo" && act_bolsillo != "sin_bolsillo")
				$('#modalColor > div > div > div.modal-footer').append('<button type="button" data-id="' + piezas[i] + '" class="btn btn-primary btn-color">Bolsillo</button>');
			else if (piezas[i] === "cuello")
				$('#modalColor > div > div > div.modal-footer').append('<button type="button" data-id="' + piezas[i] + '" class="btn btn-primary btn-color">Cuello</button>');
			else if (piezas[i] === "cierre")
				$('#modalColor > div > div > div.modal-footer').append('<button type="button" data-id="' + piezas[i] + '" class="btn btn-primary btn-color">Cierre</button>');
			else if (piezas[i] === "capucha")
				$('#modalColor > div > div > div.modal-footer').append('<button type="button" data-id="' + piezas[i] + '" class="btn btn-primary btn-color">Capucha</button>');
			else if (piezas[i] === "tejido" && act_punio_y_cintura != "regular")
				$('#modalColor > div > div > div.modal-footer').append('<button type="button" data-id="' + piezas[i] + '" class="btn btn-primary btn-color">Tejido</button>');
		}
	}

	function initCanvas() {
		canvas = document.createElement('canvas');
		canvas.width = canvas_w;
		canvas.height = canvas_h;
		ctx = canvas.getContext('2d');

		$('canvas').remove();
		$(".design-image > .content").append(canvas);

		tintImages();
	}

	function drawText() {
		if (frente) {
			for (var i = 0; i < texts_frente.length; i++) {
				var t = texts_frente[i];
				var x = canvas_w / 2 + t.x;
				var y = canvas_h / 2 + t.y;

				t.height = t.size;
				t.width = t.size * t.text.length;
				t.top = y - t.size / 2;
				t.left = x - t.width / 2;

				ctx.save();
				ctx.translate(x, y);
				ctx.rotate(t.rotate * Math.PI / 180);

				ctx.font = t.size + "px " + t.font;
				ctx.fillStyle = t.color;
				ctx.textAlign = "center";
				ctx.fillText(t.text, 0, 0);
				ctx.restore();
			}
		} else {
			for (var i = 0; i < texts_espalda.length; i++) {
				var t = texts_espalda[i];
				var x = canvas_w / 2 + t.x;
				var y = canvas_h / 2 + t.y;

				t.height = t.size;
				t.width = t.size * t.text.length;
				t.top = y - t.size / 2;
				t.left = x - t.width / 2;

				ctx.save();
				ctx.translate(x, y);
				ctx.rotate(t.rotate * Math.PI / 180);

				ctx.font = t.size + "px " + t.font;
				ctx.fillStyle = t.color;
				ctx.textAlign = "center";
				ctx.fillText(t.text, 0, 0);
				ctx.restore();
			}
		}
	}

	$('#moveUp, #moveDown, #moveLeft, #moveRight, #rotateLeft, #rotateRight, #achicarTexto, #agrandarTexto').on('click', function () {
		var id = $(this).attr('id');

		switch (id) {
		case "moveUp":
			act_text.y -= 5;
			break;
		case "moveDown":
			act_text.y += 5;
			break;
		case "moveLeft":
			act_text.x -= 5;
			break;
		case "moveRight":
			act_text.x += 5;
			break;

		case "rotateLeft":
			act_text.rotate -= 30;
			break;
		case "rotateRight":
			act_text.rotate += 30;
			break;

		case "achicarTexto":
			act_text.size -= 2;
			if (act_text.size <= 0)
				act_text.size = 2;
			break;
		case "agrandarTexto":
			act_text.size += 2;
			break;
		}

		tintImages();
	});

	$('#texto').on('change', function () {
		if (act_text === null) {
			act_text = {
				text: '',
				x: 0,
				y: 0,
				rotate: 0,
				size: 14,
				font: 'Fuente00',
				fontName: 'This Is Not Goodbye',
				color: '#000000',
				colorName: "BLACK"
			};
		}

		act_text.text = $('#texto').val();

		var existe = -1;
		if (frente) {
			for (var i = 0; i < texts_frente.length; i++) {
				if (act_text === texts_frente[i]) {
					existe = i;
					break;
				}
			}
		} else {
			for (var i = 0; i < texts_espalda.length; i++) {
				if (act_text === texts_espalda[i]) {
					existe = i;
					break;
				}
			}
		}

		if (act_text.text.length > 0 && existe <= -1) {
			if (frente)
				texts_frente.push(act_text);
			else
				texts_espalda.push(act_text);
		} else if (act_text.text.length <= 0 && existe > -1) {
			if (frente)
				texts_frente.splice(existe, 1);
			else
				texts_espalda.splice(existe, 1);

			act_text = null;
		}
	});

	$('#moveBtn').on('click', function () {
		if (act_text !== null && act_text.text.length > 0) {
			$('#modalMove').modal('show');
			$('#modalBordado').modal('hide');
		}
	});

	$('#modalBordado > div > div > div.modal-body > form > div:nth-child(1) > div > div:nth-child(4) > button').on('click', function () {
		if (act_text !== null) {
			act_text.size -= 2;

			if (act_text.size <= 0)
				act_text.size = 2;
		}
	});

	$('#modalBordado > div > div > div.modal-body > form > div:nth-child(1) > div > div:nth-child(3) > button').on('click', function () {
		if (act_text !== null) {
			act_text.size += 2;
		}
	});

	$('#fuente_palette > div > div > div > img').on('click', function () {
		var font = $(this).attr('src').substring(19, 21);
		var fontName = $(this).attr('data-original-title');

		if (act_text === null) {
			act_text = {
				text: "",
				x: 0,
				y: 0,
				rotate: 0,
				size: 14,
				font: "Fuente" + font,
				fontName: fontName,
				color: '#000000',
				colorName: "BLACK"
			};
		} else {
			act_text.font = "Fuente" + font;
			act_text.fontName = fontName;
		}

		$('#modalFuente').modal('hide');
		showModalBordado();
	});

	$('#fontColor_palette > div > div > div').on('click', function () {
		var color = rgb2hex($(this).css('background-color'));
		var colorName = $(this).attr('data-original-title');

		if (act_text === null) {
			act_text = {
				text: "",
				x: 0,
				y: 0,
				rotate: 0,
				size: 14,
				font: "Fuente00",
				fontName: "This Is Not Goodbye",
				color: color,
				colorName: colorName
			};
		} else {
			act_text.color = color;
			act_text.colorName = colorName;
		}

		$('#modalFontColor').modal('hide');
		showModalBordado();
	});

	$('#btn-modalBordado').on('click', function () {
		showModalBordado();
	});

	$('#modalFontColor, #modalFuente, #modalLoading, #modalColor, #modalTextura, #modalBordado').on('show.bs.modal', function () {
		$('#modalMove').modal('hide');
		$('body').css('overflow', 'hidden');
	});

	$('#modalFontColor, #modalFuente, #modalLoading, #modalColor, #modalTextura').on('hide.bs.modal', function () {
		$('body').css('overflow', 'auto');
	});

	$('#modalBordado').on('hide.bs.modal', function () {
		$('body').css('overflow', 'auto');

		tintImages();
	});

	$('#textsLista > select').on('change', function () {
		if (parseInt($(this).val()) == -1) {
			act_text = null;
		} else {
			if (frente)
				act_text = texts_frente[parseInt($(this).val())];
			else
				act_text = texts_espalda[parseInt($(this).val())];
		}

		showModalBordado();
	});

	$('#trashBtn').on('click', function () {
		var index = $('#textsLista > select').val();
		if (index > -1) {
			if (frente)
				texts_frente.splice(index, 1);
			else
				texts_espalda.splice(index, 1);
		}
		act_text = null;
		showModalBordado();
	});

	function showModalBordado() {
		$('#textsLista > select').html('');
		$('#textsLista > select').append('<option value="-1"> - Nuevo bordado - </option>');

		if (frente) {
			texts_frente.forEach(function (e, i) {
				$('#textsLista > select').append('<option value="' + i + '">' + e.text + '</option>');
			});
		} else {
			texts_espalda.forEach(function (e, i) {
				$('#textsLista > select').append('<option value="' + i + '">' + e.text + '</option>');
			});
		}

		if (act_text === null) {
			var fuente = $('#fuente_palette > div:nth-child(1) > div > div > img');
			var color = $('#fontColor_palette > div:nth-child(3) > div > div');

			$('#toggleFont > img').attr('src', fuente.attr('src'));
			$('#toggleFont > img').attr('data-original-title', fuente.attr('data-original-title'));

			$('#toggleFontColor > div').css('background-color', color.css('background-color'));
			$('#toggleFontColor > div').attr('data-original-title', color.attr('data-original-title'));

			$('#texto').val("");
		} else {
			if (frente) {
				for (var i = 0; i < texts_frente.length; i++) {
					if (texts_frente[i] === act_text) {
						$('#textsLista > select').val(i);
						break;
					}
				}
			} else {
				for (var i = 0; i < texts_espalda.length; i++) {
					if (texts_espalda[i] === act_text) {
						$('#textsLista > select').val(i);
						break;
					}
				}
			}

			for (var i = 0; i < $('#fuente_palette > div').length; i++) {
				var e = $("#fuente_palette > div:nth-child(" + (i + 1) + ") > div > div > img")[0];
				if ("Fuente" + $(e).attr('src').substring(19, 21) == act_text.font) {
					$('#toggleFont > img').attr('src', $(e).attr('src'));
					$('#toggleFont > img').attr('data-original-title', $(e).attr('data-original-title'));
					break;
				}
			}

			for (var i = 0; i < $('#fontColor_palette > div').length; i++) {
				var e = $("#fontColor_palette > div:nth-child(" + (i + 1) + ") > div > div.colorBox")[0];
				if (rgb2hex($(e).css('background-color')) == act_text.color) {
					$('#toggleFontColor > div').css('background-color', $(e).css('background-color'));
					$('#toggleFontColor > div').attr('data-original-title', $(e).attr('data-original-title'));
					break;
				}
			}

			$('#texto').val(act_text.text);
		}

		$('#modalBordado').modal('show');
	}

	function tintImages() {
		ctx.clearRect(0, 0, canvas.width, canvas.height);

		var images = frente ? images_frente : images_espalda;
		for (var i = 0; i < images.length; i++) {
			var img;

			if (images[i].isBlanco && !images[i].texturizado)
				img = imgdye(images[i].img, images[i].hexColor, 0.7);
			else if (!images[i].isBlanco)
				img = imgdye(images[i].img, "#000000", 1);
			else if (images[i].isBlanco && images[i].texturizado)
				img = images[i].img;

			if (images[i].height >= canvas_h) {
				var maxWidth = canvas.width;
				var maxHeight = canvas.height;
				var ratio = 0;
				var width = images[i].width;
				var height = images[i].height;

				if (width > maxWidth) {
					ratio = maxWidth / width * 1.2;
					height = height * ratio;
					width = width * ratio;
				}

				if (height > maxHeight) {
					ratio = maxHeight / height * 1.2;
					width = width * ratio;
					height = height * ratio;
				}

				ctx.drawImage(img, (canvas_w - width) / 2, (canvas_h - height) / 2, width, height);
			} else {
				ctx.drawImage(img, (canvas_w - images[i].width) / 2, (canvas_h - images[i].height) / 2);
			}
		}
		drawText();

		loading_counter++;

		if (loading_counter == loading_top)
			$('#modalLoading').modal('hide');
	}

	$('#texture_palette > div > div > div > img').on('click', function () {
		var id = $('.btn-texture.active').attr('data-id');
		var texturaName = $(this).attr('data-original-title');
		var aux = "";

		if (id == "bolsillo") {
			if (act_bolsillo == "canguro") {
				aux = "_CANGURO";
			} else if (act_bolsillo == "inclinado") {
				aux = "_INCLINADO";
			}
		} else if (id == "cuello") {
			aux = "_CUELLO";
		} else if (id == "capucha") {
			aux = "_CAPUCHA";
		}

		var src = $(this).attr('src');
		src = src.slice(-6);
		src = src.slice(0, 2);

		var image = $.grep(images_frente, function (e) {
				return e.id === id
			})[0];

		var imageObj = new Image();
		$(imageObj).unbind("load");
		$(imageObj).bind("load", function () {
			if (!image.texturizado)
				image.aux = image.img;
			image.texturizado = true;
			image.texturaName = texturaName;
			image.img = this;

			tintImages();
		});

		if (act_cuello == "alto_con_capucha") {
			imageObj.src = "images/Universitario/con_botones/con_capucha/alto/frente/Tramas/" + src + aux + ".png";
		} else if (act_cuello == "alto_sin_capucha") {
			imageObj.src = "images/Universitario/con_botones/sin_capucha/alto/frente/Tramas/" + src + aux + ".png";
		} else if (act_cuello == "en_v_con_capucha") {
			imageObj.src = "images/Universitario/con_botones/con_capucha/en_v/frente/Tramas/" + src + aux + ".png";
		} else if (act_cuello == "en_v_sin_capucha") {
			imageObj.src = "images/Universitario/con_botones/sin_capucha/en_v/frente/Tramas/" + src + aux + ".png";
		}

		if (id == "fondo" || id == "cuello") {
			var image2 = $.grep(images_espalda, function (e) {
					return e.id === id
				})[0];

			var imageObj2 = new Image();
			$(imageObj2).unbind("load");
			$(imageObj2).bind("load", function () {
				if (!image2.texturizado)
					image2.aux = image2.img;
				image2.texturizado = true;
				image2.img = this;

				tintImages();
			});

			if (act_cuello == "alto_con_capucha") {
				imageObj2.src = "images/Universitario/con_botones/con_capucha/alto/espalda/Tramas/" + src + aux + ".png";
			} else if (act_cuello == "alto_sin_capucha") {
				imageObj2.src = "images/Universitario/con_botones/sin_capucha/alto/espalda/Tramas/" + src + aux + ".png";
			} else if (act_cuello == "en_v_con_capucha") {
				imageObj2.src = "images/Universitario/con_botones/con_capucha/en_v/espalda/Tramas/" + src + aux + ".png";
			} else if (act_cuello == "en_v_sin_capucha") {
				imageObj2.src = "images/Universitario/con_botones/sin_capucha/en_v/espalda/Tramas/" + src + aux + ".png";
			}
		}

		$('#modalTextura').modal('hide');
	});

	$('#color_palette > div > div > div.colorBox').on('click', function () {
		var id = $('.btn-color.active').attr('data-id');
		var hexColor = $(this).css('backgroundColor');
		var colorName = $(this).attr('data-original-title');

		for (var i = 0; i < images_frente.length; i++) {
			if (images_frente[i].id === id) {
				images_frente[i].hexColor = hexColor;
				images_frente[i].colorName = colorName;

				if (images_frente[i].texturizado) {
					images_frente[i].img = images_frente[i].aux;
					images_frente[i].texturizado = false;
				}
			}
		}

		for (var i = 0; i < images_espalda.length; i++) {
			if (images_espalda[i].id === id) {
				images_espalda[i].hexColor = hexColor;
				images_espalda[i].colorName = colorName;

				if (images_espalda[i].texturizado) {
					images_espalda[i].img = images_espalda[i].aux;
					images_espalda[i].texturizado = false;
				}
			}
		}

		$('.btn-color.active').attr('style', 'background-color: ' + hexColor + ' !important; color: ' + invertColor(rgb2hex(hexColor)) + ' !important;');

		tintImages();
		$('body').css('overflow', 'hidden');
	});

	function addToArray(path, id, isFrente, isBlanco, index) {
		var colors = $('.colorBox');

		if (isFrente) {
			images_frente.splice(index, 0, {
				img: null,
				width: null,
				height: null,
				hexColor: "#FFFFFF",
				colorName: "WHITE",
				id: id,
				isBlanco: isBlanco,
				path: path,
				texturizado: false,
				texturaName: "",
				aux: null
			});
		} else {
			images_espalda.splice(index, 0, {
				img: null,
				width: null,
				height: null,
				hexColor: $.grep(images_frente, function (e) {
					return e.id === id
				})[0].hexColor,
				colorName: $.grep(images_frente, function (e) {
					return e.id === id
				})[0].colorName,
				id: id,
				isBlanco: isBlanco,
				path: path,
				texturizado: false,
				texturaName: "",
				aux: null
			});
		}
	}

	function loadImages(isFrente, index) {
		var images = isFrente ? images_frente : images_espalda;
		if (isFrente && images.length <= index) {
			loadImages(false, 0);
			return;
		} else if (!isFrente && images.length <= index) {
			initCanvas();
			return;
		}

		var image = images[index];
		var imageObj = new Image();

		$(imageObj).unbind("load");

		$(imageObj).bind("load", function () {
			image.img = this;

			image.width = this.width;
			image.height = this.height;

			loadImages(isFrente, index + 1);
		});

		imageObj.src = image.path;
	}

	$(window).resize(function () {
		canvas_w = $($(".design-image > .content").get(0)).width();
		canvas_h = $($(".design-image > .content").get(0)).height();
		initCanvas();
	});

	$("div.img-container > div.btn-group.top > button:nth-child(1)").on("click", function () {
		$("div.img-container > div.btn-group.top > button:nth-child(2)").removeClass('active');
		$("div.img-container > div.btn-group.top > button:nth-child(1)").addClass('active');
		act_text = null;
		frente = true;
		initCanvas();
	});

	$("div.img-container > div.btn-group.top > button:nth-child(2)").on("click", function () {
		$("div.img-container > div.btn-group.top > button:nth-child(1)").removeClass('active');
		$("div.img-container > div.btn-group.top > button:nth-child(2)").addClass('active');
		act_text = null;
		frente = false;
		initCanvas();
	});

	$("#toggleFont").on("click", function () {
		$('#modalBordado').modal('hide');
		$('#modalFuente').modal('show');
	});

	$("#toggleFontColor").on("click", function () {
		$('#modalBordado').modal('hide');
		$('#modalFontColor').modal('show');
	});

	$("#btn-modalColor").on("click", function () {
		$(".btn-color").removeClass("active");
		$($(".btn-color").get(0)).addClass("active");
	});

	$("#btn-modalTextura").on("click", function () {
		$(".btn-texture").removeClass("active");
		$($(".btn-texture").get(0)).addClass("active");
	});

	$(".btn-texture").on("click", function () {
		$(".btn-texture").removeClass("active");
		$(this).addClass("active");
	});

	$(".btn-color").on("click", function () {
		$(".btn-color").removeClass("active");
		$(this).addClass("active");
	});

	function rgb2hex(rgb) {
		if (rgb.search("rgb") == -1) {
			return rgb;
		} else {
			rgb = rgb.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+))?\)$/);
			function hex(x) {
				return ("0" + parseInt(x).toString(16)).slice(-2);
			}
			return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
		}
	}

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

	function invertColor(hex) {
		if (hex.indexOf('#') === 0) {
			hex = hex.slice(1);
		}

		if (hex.length === 3) {
			hex = hex[0] + hex[0] + hex[1] + hex[1] + hex[2] + hex[2];
		}
		if (hex.length !== 6) {
			throw new Error('Invalid HEX color.');
		}

		var r = (255 - parseInt(hex.slice(0, 2), 16)).toString(16),
		g = (255 - parseInt(hex.slice(2, 4), 16)).toString(16),
		b = (255 - parseInt(hex.slice(4, 6), 16)).toString(16);

		return '#' + padZero(r) + padZero(g) + padZero(b);
	}

	function padZero(str, len) {
		len = len || 2;
		var zeros = new Array(len).join('0');
		return (zeros + str).slice(-len);
	}

	$(".btn.btn-design.prev").on("click", function () {
		window.location = 'universitarios-paso-05.php?cuello="' + cuello + '"&cierre="' + cierre + '"&bolsillo="' + act_bolsillo + '"';
	});

	$(".btn.btn-design.next").on("click", function () {
		$('#checkOut').append('<input type="hidden" name="prenda" value="UNIVERSITARIO"/>');

		$('#checkOut').append('<input type="hidden" name="cuello" value="' + act_cuello.replace(/_/g, ' ').toUpperCase() + '"/>');
		$('#checkOut').append('<input type="hidden" name="cierre" value="' + act_cierre.replace(/_/g, ' ').toUpperCase() + '"/>');
		$('#checkOut').append('<input type="hidden" name="bolsillo" value="' + act_bolsillo.replace(/_/g, ' ').toUpperCase() + '"/>');
		$('#checkOut').append('<input type="hidden" name="punio_y_cintura" value="' + act_punio_y_cintura.replace(/_/g, ' ').toUpperCase() + '"/>');

		images_frente.forEach(function (e) {
			if (e.isBlanco) {
				switch (e.id) {
				case "fondo":
					if (e.texturizado)
						$('#checkOut').append('<input type="hidden" name="prendaTextura" value="' + e.texturaName.toUpperCase() + '"/>');
					else
						$('#checkOut').append('<input type="hidden" name="prendaColor" value="' + e.colorName.toUpperCase() + '"/>');
					break;
				case "cuello":
					$('#checkOut').append('<input type="hidden" name="cuelloColor" value="' + e.colorName.toUpperCase() + '"/>');
					break;
				case "cierre":
					$('#checkOut').append('<input type="hidden" name="cierreColor" value="' + e.colorName.toUpperCase() + '"/>');
					break;
				case "bolsillo":
					if (e.texturizado)
						$('#checkOut').append('<input type="hidden" name="bolsilloTextura" value="' + e.texturaName.toUpperCase() + '"/>');
					else
						$('#checkOut').append('<input type="hidden" name="bolsilloColor" value="' + e.colorName.toUpperCase() + '"/>');
					break;
				case "tejido":
					$('#checkOut').append('<input type="hidden" name="punioYCinturaColor" value="' + e.colorName.toUpperCase() + '"/>');
					break;
				case "capucha":
					if (e.texturizado)
						$('#checkOut').append('<input type="hidden" name="capuchaTextura" value="' + e.texturaName.toUpperCase() + '"/>');
					else
						$('#checkOut').append('<input type="hidden" name="capuchaColor" value="' + e.colorName.toUpperCase() + '"/>');
					break;
				}
			}
		});

		var i = 0;

		texts_frente.forEach(function (e) {
			$('#checkOut').append('<input type="hidden" name="text' + i + 'Text" value="' + e.text.toUpperCase() + '"/>');
			$('#checkOut').append('<input type="hidden" name="text' + i + 'Color" value="' + e.colorName.toUpperCase() + '"/>');
			$('#checkOut').append('<input type="hidden" name="text' + i + 'Fuente" value="' + e.fontName.toUpperCase() + '"/>');
			i++;
		});

		texts_espalda.forEach(function (e) {
			$('#checkOut').append('<input type="hidden" name="text' + i + 'Text" value="' + e.text.toUpperCase() + '"/>');
			$('#checkOut').append('<input type="hidden" name="text' + i + 'Color" value="' + e.colorName.toUpperCase() + '"/>');
			$('#checkOut').append('<input type="hidden" name="text' + i + 'Fuente" value="' + e.fontName.toUpperCase() + '"/>');
			i++;
		});

		frente = true;
		initCanvas();
		$('#checkOut').append('<input type="hidden" name="imgFrente" value="' + canvas.toDataURL('image/jpg') + '"/>');

		frente = false;
		initCanvas();
		$('#checkOut').append('<input type="hidden" name="imgEspalda" value="' + canvas.toDataURL('image/jpg') + '"/>');

		frente = true;
		initCanvas();

		$("#checkOut").submit();
	});

});
