$(document).ready(function () {

	$('#formCheckOut').on('submit', function (e) {
		var nombre = $('#nombre').val();
		var whatsapp = $('#whatsapp').val();
		var colegio = $('#colegio').val();
		var curso = $('#curso').val();
		var cantidad = $('#cantidad').val();
		var consulta = $('#consulta').html().replace(/\n/g, "<br>").replace(/\t/g, "  ");
		var imgFrente = $('#imgFrente').attr('src');
		var imgEspalda = $('#imgEspalda').attr('src');

		if (nombre.length > 0 && whatsapp.length > 0 && colegio.length > 0 && curso.length > 0 && cantidad.length > 0 && consulta.length > 0 && imgFrente.length > 0 && imgEspalda.length > 0) {
			$.ajax({
				data: {
					nombre: nombre,
					whatsapp: whatsapp,
					colegio: colegio,
					curso: curso,
					cantidad: cantidad,
					consulta: consulta,
					imgFrente: imgFrente,
					imgEspalda: imgEspalda
				},
				url: 'http://localhost/design-room/server/send.php',
				type: 'post',
				beforeSend: function() {
					$('#modalLoading').modal({
						backdrop: 'static',
						keyboard: false
					});
				},
				success: function (response) {
					$('#modalLoading').modal('hide');
					
					if (response.error == undefined) {
						$('#modalSuccess').modal('show');
						setTimeout(function() {
							window.location.replace('index.php');
						}, 3000);
					} else {
						$('#errorAlert').fadeIn();
					}
				}
			});
		}

		e.preventDefault();
	});

});
