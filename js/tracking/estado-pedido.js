$(document).ready(function () {

	if (localStorage.getItem('key') === null || localStorage.getItem('usuario') === null) {
		localStorage.clear();
		window.location.replace('index.php');
	} else if (localStorage.getItem('admin')) {
		window.location.replace('admin.php');
	} else {
		$.ajax({
			data: {
				usuario: localStorage.getItem('usuario'),
				key: localStorage.getItem('key')
			},
			url: 'http://localhost/design-room/server/tracking/get.php',
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
					var estado = $($('#tracking > section.main-content > div > div > div.col-xs-12.col-sm-2')[parseInt(response.estado)]);
					$(estado.children('.row')[0]).children().children().addClass('active');
					response.fecha = response.fecha.replace("de ", "de<br>");
					$('#tracking > section.yellow > div > div.container > div > div.col-xs-5.fecha-entrega.text-center > div > h3').html(response.fecha);
				} else {
					localStorage.clear();
					window.location.replace('index.php');
				}
			}
		});
	}

});
