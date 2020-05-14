<?php include_once("sections/languages.php") ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Meta data -->
  <?php include_once("sections/meta.php") ?>

  <!-- Títol i Favicons -->
  <title>Agustí Roig</title>
  <link rel="shortcut icon" href="img/favicons/favicon.ico">

  <!-- CSS basics -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <!--<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">-->
  <!-- CSS custom -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">
  <!-- Scripts custom -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/typed.js" type="text/javascript"></script>
  <script src="js/script.js" type="text/javascript"></script>
  <meta name="google-site-verification" content="0J3Cg3z_EXggVLdsG17itFL_Dws5TiSW5nM1euVAJmI" />
</head>


<body class="imagen">
<!-- Google Analytics -->
<?php include_once("sections/analyticstracking.php") ?>
<div class="background-image"></div>
<!--<div class="home-lang">
  <?php switch($lang){case "es": echo '<strong>ES</strong> | <a href="'.$_SERVER['SCRIPT_NAME'].'?lang=fr">FR</a>'; break; case "fr": echo '<a href="'.$_SERVER['SCRIPT_NAME'].'">ES</a> | <strong>FR</strong>'; break;} ?>
</div>-->

<!-- Header -->
<div class="content">
  <h1>Agustí Roig</h1>
  <ul class="main-menu list-inline">
    <li><a href="architect.php">Architect</a></li>
    <li><a href="entrepreneur.php">Entrepreneur</a></li>
    <li><a href="developer.php">Developer</a></li>
    <li><a href="about.php">About</a></li>
    <!--<li><a href="blog.php">Blog</a></li>-->
  </ul>
  <div class="social-icons">
    <a href="//twitter.com/roigagusti" target="_blank"><i class="fab fa-twitter"></i></a>
    <a href="//www.linkedin.com/in/agustiroig" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    <a href="//github.com/roigagusti" target="_blank"><i class="fab fa-github"></i></a>
    <a href="mailto:a@agustiroig.com?subject=<?php echo $text['mail'];?>"><i class="fas fa-envelope"></i></a>
  </div>
</div>


<!-- JavaScripts basics -->
<!-- JavaScripts custom -->
<!-- Scripts custom -->

</body>
</html>