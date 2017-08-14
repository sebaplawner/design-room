//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


// ---------------- GOOGLE MAP ---------------- // 
function initMap() {

  // Specify features and elements to define styles.
  var styleArray = [
    {
      featureType: "all",
      
      stylers: [
        { hue: "#0F3756" },
        { saturation: -90 }      ]
    },{
      featureType: "poi.business",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }
  ];

  var locations = [
      ['Follow Me Devoto', -34.5860486, -58.5046147, 1],
      ['Follow Me Caballito', -34.6198376, -58.4451257, 2],
      ['Follow Me Avellaneda', -34.6636496, -58.3654217, 3]
  ];


  // Create a map object and specify the DOM element for display.
  var map = new google.maps.Map(document.getElementById('map'), {
    scrollwheel: true,
    // Apply the map style array to the map.
    styles: styleArray,
    zoom: 11,
    center: new google.maps.LatLng(-34.6198376, -58.4451257),

  });

  var infowindow = new google.maps.InfoWindow();
  var marker, i;

  for (i = 0; i < locations.length; i++) { 
  marker = new google.maps.Marker({
    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
    map: map
  });  
  }

}

// ---------------- MAPA SCROLL ---------------- // 
$(document).ready(function() {
    $('#map').click(function () {
        $('#map .gm-style').css("pointer-events", "auto");
    });
    
    $( "#map" ).mouseleave(function() {
      $('#map .gm-style').css("pointer-events", "none"); 
    });
 }); 

  
