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
  .fons{
    position:relative;
    width:100%;
    overflow: hidden;
  }
  .hidden{
    display:none;
  }
  .gm-style .gm-style-iw{
    top: 0px !important;
    /*left: 0px !important;*/
  }
  .profile{
    position: relative;
    float: left;
    margin-right: 25px;
    top: 15px;
    left: 15px;
  }
  .profile-info{
    position: relative;
    float: left;
    height: 40px;
    width: 315px;
    top: 9px;
  }
  .profile-info h1{
    position: relative;
    font-size: 0.9em;
    margin-top: 12px;
    font-family: 'Open Sans', sans-serif;
    width: 100px;
    display: inline;
    top: 10px;
  }
  .profile-info .post{
    width: 100px;
    display: inline;
    height: 40px;
    position: relative;
    top: 5px;
  }
  .profile-info .location,.time{
    font-size: 0.8em;
    float: right;
    font-family: 'Open Sans', sans-serif;
    color: #bcbcbc;
  }
  .profile-image{
    width:40px;
    border-radius: 50%;
  }
  .post-image{
    position: relative;
    top: 20px;
    width: 400px;
    height: 400px;
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
      position: {lat: 41.3840385, lng: 2.1455558},
      map: map,
      icon: image,
      title: 'InstaUser'
    });

    /* INFORMACIÓ de cada marcador */
    var contentString = '<div class="fons"><div class="profile"><img src="https://scontent.cdninstagram.com/t51.2885-19/s150x150/12080560_1686158201620794_677787917_a.jpg" class="profile-image"></div><div class="profile-info"><h1>Agustí Roig</h1><div class="location">Plaça Sant Felip Neri</div><div class="time">Hace 34 min</div></div><div class="post-image"><img src="https://scontent-mxp1-1.cdninstagram.com/t51.2885-15/e35/12918491_1063646347006743_892451239_n.jpg?ig_cache_key=MTIzNDExOTE0NDkxNjY0MjIwNg%3D%3D.2" class="post-image"></div></div>';
    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });
    marker.addListener('click', function() {
      infowindow.open(map, marker);
      $('div.modal').removeClass('hidden');
    })
    ;
  }
  </script>

</head>

<body>
  <header>
    <a href="//www.agustiroig.com/araving"><img src="img/logo_araving_deg.png" class="logo-map" /></a>
  </header>

  <div id="map"></div>
  <?php include_once("sections/instauser.php") ?>

  <div id="footer">
  </div>

<!-- JavaScripts basics -->
<!-- JavaScripts custom -->
<!-- Scripts custom -->

</body>
</html>