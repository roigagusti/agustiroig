<?php include_once("sections/languages.php") ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Meta data -->
  <?php include_once("sections/meta.php") ?>

  <!-- Títol i Favicons -->
  <title>Developer | Agustí Roig</title>
  <link rel="shortcut icon" href="img/favicons/favicon.ico">

  <!-- JS basics -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="/js/typed.js" type="text/javascript"></script>
  <!-- CSS basics -->
  <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
  <!-- CSS custom -->
  <link rel="stylesheet" type="text/css" href="//www.agustiroig.com/css/style.css">
  <link rel="stylesheet" type="text/css" href="//www.agustiroig.com/css/responsive.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">
  <!-- Scripts custom -->
  <script>
        $(function(){
            // make conversation
            $('#story').typed({
                strings: ["Hola^500, soy Agustí.^1250 \nMe encanta esto^800, a ti también ¿verdad?^1000\n Pues es todo código,^500 imagina todo lo que podemos hacer^200.^200.^200.^1500\n ¿Podríamos trabajar juntos?^10000\n ¿Aún por aquí?^500\n Habría que clicar alguno de los links"],
                typeSpeed: 20,
                backDelay: 500,
                loop: false,
                loopCount: false,
            });
        });
    </script>
  </head>

  <body>
  <header>
  <?php include_once("sections/header.php") ?>
  </header>

    <div class="developer_history">
        <span id="story"></span>
        <div id="developer_links">
          <ul class="list-inline">
            <li><a href="#" target="_blank">Archallenge</a></li>
            <li><a href="//www.agustiroig.com/cloudia" target="_blank">Cloudia</a></li>
            <li><a href="//www.masalaconsultors.com" target="_blank">Masala</a></li>
            <li><a href="//repte.umbele.org" target="_blank">Umbele</a></li>
            <li><a href="//www.pankpank.org/calima" target="_blank">Pank</a></li>
            <li><a href="#">Sensarch</a></li>
            <li><a href="#">Goover</a></li>
          </ul>
        </div>
    </div>


<!-- JavaScripts basics -->
<!-- JavaScripts custom -->
<!-- Scripts custom -->

</body>
</html>