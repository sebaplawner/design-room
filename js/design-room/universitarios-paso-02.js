$(document).ready(function() {
	
	var prenda = ["Alto con capucha", "Alto sin capucha", "En V con capucha", "En V sin capucha"]; 
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

	$(".btn.btn-design.next").on("click", function() {
	  switch(selected_prenda) {
		  case 0:
			window.location = 'universitarios-paso-03.php?cuello="alto_con_capucha"';
		  break;
		  case 1:
			window.location = 'universitarios-paso-03.php?cuello="alto_sin_capucha"';
		  break;
		  case 2:
			window.location = 'universitarios-paso-03.php?cuello="en_v_con_capucha"';
		  break;
		  case 3:
			window.location = 'universitarios-paso-03.php?cuello="en_v_sin_capucha"';
		  break;
	  }
	});

	$(".btn.btn-design.prev").on("click", function() {
		window.location = 'index.php';
	});

});