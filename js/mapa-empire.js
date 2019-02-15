//Mapa de localização da empresa que esta na pagina de contatos
function initMap() {
  var uluru = {lat: -22.695911, lng: -46.783838 }; 
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });}