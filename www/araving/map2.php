<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Meta data -->

  <!-- Títol i Favicons -->
  <title>Araving</title>
  <link rel="shortcut icon" href="img/favicons/favicon.ico">

  <!-- CSS basics -->
  <!-- CSS custom -->
  <link rel="stylesheet" type="text/css" href="css/map.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <style>
  header{
    border-bottom: 0px;
    background: #ff6961; /* Old browsers */
    background: -moz-linear-gradient(left, #ff6961 0%, #ff8f54 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left, #ff6961 0%,#ff8f54 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, #ff6961 0%,#ff8f54 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff6961', endColorstr='#ff8f54',GradientType=1 ); /* IE6-9 */
  }
  </style>

  <script async defer type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyAfMpVeFf10m_OFsnUEYZXNZrOty_UEK4U&callback=initMap"></script>
  <script>
  window.onload = function () {
    /* MAPA CENTRAT A: a la teva posició actual o per defecte a Barcelona #SantFelipNeri */
    var myLatLng = {lat: 41.387846, lng: 2.1455558};
    var styles = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#b7b1a3"},{"visibility":"on"}]}]
    
    /* Inicia el MAPA */
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: myLatLng,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      disableDefaultUI: true,
      styles: styles
    });

    /* MARCADORS */
    var image = 'img/icon_32.png';
    var marker = new google.maps.Marker({
      /* MARCADORS: a la posició de cada publicació*/
      position: {lat: 41.3940385, lng: 2.1455558},
      map: map,
      icon: image,
      title: 'InstaUser'
    });

    /* INFORMACIÓ de cada marcador */
    var contentString = 'Contingut en format HTML+CSS';
    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });
    marker.addListener('click', function() {
      infowindow.open(map, marker);
    });

  }
  </script>

</head>

<body>
  <header>
    <a href="//www.agustiroig.com/araving"><img src="img/logo_araving_blanc.png" class="logo-map" /></a>
  </header>

  <div id="map"></div>

  <div id="footer">
  </div>

<!-- JavaScripts basics -->
<!-- JavaScripts custom -->
<!-- Scripts custom -->

</body>
</html>