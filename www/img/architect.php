<?php include_once("sections/languages.php") ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Meta data -->
  <?php include_once("sections/meta.php") ?>

  <!-- Títol i Favicons -->
  <title>Architect | Agustí Roig</title>
  <link rel="shortcut icon" href="img/favicons/favicon.ico">

  <!-- CSS basics -->
  <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
  <!-- CSS custom -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">
  <!-- Scripts custom -->
</head>


<body>
<!-- Google Analytics -->
<?php include_once("sections/analyticstracking.php") ?>

<!-- Header -->
<header>
  <div class="background-image background-header"></div>
  <div class="logo col-md-offset-2 col-md-2 col-sm-offset-1 col-xs-4"><a href="../">Agustí Roig</a></div>
  <ul class="header-menu col-md-6 list-inline">
    <li><a href="architect">Architect</a></li>
    <li><a href="entrepreneur">Entrepreneur</a></li>
    <li><a href="developer">Developer</a></li>
  </ul>
  <div class="icon right">
    <a href="#menu-responsive">
      <i class="fa fa-bars" aria-hidden="true"></i>
    </a>
  </div>
  <?php include_once("sections/menu-responsive.php") ?>
</header>

<style>
.rectangle{
  height:200px;
  margin-top:10px;
}
.fons-gris{
  background-position: top center;
  background-repeat: no-repeat;
  background-size: cover;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  margin-left:5px;
  margin-right:5px;
  height:100%;
}
</style>

<div class="container">
  <div class="row col-md-offset-2 col-md-8 col-xs-12">
      <?php
      require("conexiones/conexion.php");
        $datas = $database->select("architect_projects", [
          "id",
          "name",
          "description",
          "image"
        ]);
         
        foreach($datas as $data)
        {
          $tamany = if($data['id']-floor($data['id']/7)>0){if($data['id']-floor($data['id']/7)<0.6){3}else{4}}{4};
      ?>
      <div class="col-md-<?php echo $tamany; ?> rectangle">
        <div class="fons-gris project-image project-image" style="background-image: url('img/architect/<?php echo $image; ?>.jpg');"></div>
      </div>
<?php 
      }
?>
  </div>
</div>


<!-- JavaScripts basics -->
<!-- JavaScripts custom -->
<!-- Scripts custom -->

</body>
</html>