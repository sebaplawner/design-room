$(document).ready(function() {
	
	var prenda = ["Cuello alto", "Cuello alto con capucha", "Cuello rugby", "Cuello rugby con capucha"]; 
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
			window.location = 'camperas-paso-03.php?cuello="alto_sin_capucha"';
		  break;
		  case 1:
			window.location = 'camperas-paso-03.php?cuello="alto_con_capucha"';
		  break;
		  case 2:
			window.location = 'camperas-paso-03.php?cuello="rugby_sin_capucha"';
		  break;
		  case 3:
			window.location = 'camperas-paso-03.php?cuello="rugby_con_capucha"';
		  break;
	  }
	});

	$(".btn.btn-design.prev").on("click", function() {
		window.location = 'index.php';
	});

});