//Mapa de localização da empresa que esta na pagina de contatos
function initMap() {
  var uluru = {lat: -22.606965, lng: -46.933112 }; 
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });}