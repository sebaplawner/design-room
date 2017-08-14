$(document).ready(function () {
	
	if(localStorage.getItem('key') !== null) {
		if(localStorage.getItem('admin') !== null)
			window.location.replace('admin.php');
		else
			window.location.replace('estado-pedido.php');
	}

	$('#loginForm').on('submit', function (e) {
		var usuario = $('#usuario').val();
		var pass = $('#password').val();

		if (usuario.length > 0 && pass.length > 0) {
			$.ajax({
				data: {
					usuario: usuario,
					pass: pass
				},
				url: 'http://localhost/design-room/server/tracking/login.php',
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
						localStorage.setItem('key', response.key);
						localStorage.setItem('usuario', usuario);
						
						if(response.admin) {
							localStorage.setItem('admin', response.admin);
							window.location.replace('admin.php');
						} else
							window.location.replace('estado-pedido.php');
					} else {
						$('#errorAlert').fadeIn();
					}
				}
			});
		}

		e.preventDefault();
	});

});
