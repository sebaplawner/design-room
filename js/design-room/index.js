$(document).ready(function() {
	
	var prenda = ["Chomba", "Campera", "Remera", "Buzo", "Universitario"]; 
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
			window.location = "buzos-paso-02.php";
		  break;
		  case 1:
			window.location = "universitarios-paso-02.php";
		  break;
		  case 2:
			window.location = "camperas-paso-02.php";
		  break;
		  case 3:
			window.location = "remeras-paso-02.php";
		  break;
		  case 4:
			window.location = "chombas-paso-02.php";
		  break;
	  }
	});

});