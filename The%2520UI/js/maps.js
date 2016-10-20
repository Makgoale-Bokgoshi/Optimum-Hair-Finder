function initMap() {
 /*if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
		
		"Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude; 
		
		
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }


*/


  var pointA = new google.maps.LatLng(-26.1795, 28.0454),
    pointB = new google.maps.LatLng(-26.1811, 28.0454),
    center = new google.maps.LatLng(51.3, 0.8),
    myOptions = {
      zoom: 8,
      center: center,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    },
    map = new google.maps.Map(document.getElementById('map-canvas'), myOptions),
    // Instantiate a directions service.
    directionsService = new google.maps.DirectionsService;
  directionsDisplay = new google.maps.DirectionsRenderer({
      map: map
    }),

    outputAtoB = document.getElementById('a2b'),

    // click on marker B to get route from A to B
    calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB, outputAtoB);

  var travelMode = document.getElementById("mode");
  travelMode.addEventListener("change", function() {
    calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB, outputAtoB);
  });
}


function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB, outputTxt) {
  var selectedMode = document.getElementById('mode').value;
  directionsService.route({
    origin: pointA,
    destination: pointB,
    unitSystem: google.maps.UnitSystem.METRIC,
    travelMode: google.maps.TravelMode[selectedMode]
  }, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);

      outputTxt.innerHTML = Math.round(directionsDisplay.getDirections().routes[directionsDisplay.getRouteIndex()].legs[0].distance.value / 1000) + "Km";
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}

initMap();

