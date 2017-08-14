$(document).ready(function () {

	if (localStorage.getItem('key') === null || localStorage.getItem('admin') === null) {
		localStorage.clear();
		window.location.replace('index.php');
	} else {
		var succ = findGetParameter('state');
		if (succ !== null)
			$('#successAlert').show();

		$.ajax({
			url: 'http://localhost/design-room/server/tracking/get-all.php',
			type: 'post',
			beforeSend: function () {
				$('#modalLoading').modal({
					backdrop: 'static',
					keyboard: false
				});
			},
			success: function (response) {
				$('#modalLoading').modal('hide');

				$.each(response, function (i, e) {
					var tr = $('#tracking > section.main-content > div.container > table > tbody > tr:nth-child(1)').clone();
					tr.attr('data-name', e.usuario);
					tr.find('#usuario').val(e.usuario);
					tr.find('#password').val(e.clave);
					tr.find('#estado')[0].selectedIndex = parseInt(e.estado);

					var dia = e.fecha.split(' de ')[0];
					var mes = e.fecha.split(' de ')[1];
					tr.find('#dia')[0].selectedIndex = parseInt(dia) - 1;
					$.each(tr.find('#mes').children(), function (i, e) {
						if ($(e).html() == mes) {
							tr.find('#mes')[0].selectedIndex = i;
						}
					});

					$(tr.children()[4]).html('<input type="button" class="form-control" id="mod" value="MOD." style="width:45%;float:left;"><input type="button" class="form-control" id="borr" value="BORR." style="width:50%;float:right;">');
					$('#tracking > section.main-content > div.container > table > tbody').append(tr);
				});
			}
		});
	}

	$('#tracking > section.main-content > div.container > table > tbody').on('click', '#mod', function (e) {
		var tr = $($(this).parents()[1]);

		var usuario = tr.attr('data-name');
		var nuevo_usuario = tr.find('#usuario').val();
		var pass = tr.find('#password').val();
		var estado = tr.find('#estado')[0].selectedIndex;
		var dia = tr.find('#dia').val();
		var mes = tr.find('#mes').val();

		if (usuario.length > 0 && nuevo_usuario.length > 0 && pass.length > 0 && estado !== null && dia !== null && mes !== null) {
			var fecha = dia + " de " + mes;

			$.ajax({
				data: {
					usuario: usuario,
					nuevo_usuario: nuevo_usuario,
					pass: pass,
					estado: estado,
					fecha: fecha
				},
				url: 'http://localhost/design-room/server/tracking/update.php',
				type: 'post',
				beforeSend: function () {
					$('#modalLoading').modal({
						backdrop: 'static',
						keyboard: false
					});
				},
				success: function (response) {
					$('#modalLoading').modal('hide');

					if (response.error == undefined) {
						window.location.replace('admin.php?state="success"');
					} else {
						$('#errorAlert').fadeIn();
					}
				}
			});
		}
	});

	$('#tracking > section.main-content > div.container > table > tbody').on('click', '#borr', function (e) {
		$.ajax({
			data: {
				usuario: $($(this).parents()[1]).attr('data-name')
			},
			url: 'http://localhost/design-room/server/tracking/borrar.php',
			type: 'post',
			beforeSend: function () {
				$('#modalLoading').modal({
					backdrop: 'static',
					keyboard: false
				});
			},
			success: function (response) {
				$('#modalLoading').modal('hide');

				if (response.error == undefined) {
					window.location.replace('admin.php?state="success"');
				} else {
					$('#errorAlert').fadeIn();
				}
			}
		});
	});

	$('#agregar').on('click', function (e) {
		var usuario = $('#usuario').val();
		var pass = $('#password').val();
		var estado = $('#estado')[0].selectedIndex;
		var dia = $('#dia').val();
		var mes = $('#mes').val();

		if (usuario.length > 0 && pass.length > 0 && estado !== null && dia !== null && mes !== null) {
			var fecha = dia + " de " + mes;

			$.ajax({
				data: {
					usuario: usuario,
					pass: pass,
					estado: estado,
					fecha: fecha
				},
				url: 'http://localhost/design-room/server/tracking/create.php',
				type: 'post',
				beforeSend: function () {
					$('#modalLoading').modal({
						backdrop: 'static',
						keyboard: false
					});
				},
				success: function (response) {
					$('#modalLoading').modal('hide');

					if (response.error == undefined) {
						window.location.replace('admin.php?state="success"');
					} else {
						$('#errorAlert').fadeIn();
					}
				}
			});
		}
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
		if (result !== null)
			return result.slice(1, -1);
		else
			return null;
	}

});
