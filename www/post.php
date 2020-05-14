<?php 
if(isset($_GET['url'])){
  $url = $_GET['url'];
}else{
  //header('Location: /blog');
}
require("conexiones/conexion.php");
$datas = $database->select("blog", [
            "id",
            "link",
            "keywords",
            "titol",
            "descripcio",
            "entrada",
            "fecha"
          ], 
          ["link" => $url]);
foreach($datas as $data){
?>

<?php include_once("sections/languages.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Meta data -->
  <?php include_once("sections/meta-share.php"); ?>

  <!-- Títol i Favicons -->
  <title><?php echo $data['titol']; ?></title>
  <link rel="shortcut icon" href="img/favicons/favicon.ico">

  <!-- JS basics -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <!-- CSS basics -->
  <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
  <!-- CSS custom -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">
  <!-- Scripts custom -->
</head>


<body class="blog">
<!-- Google Analytics -->
<?php include_once("sections/analyticstracking.php"); ?>

<!-- Header -->
<header style=" background: url('img/blog/<?php echo $data['link']; ?>.jpg');
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;">
<?php include_once("sections/header.php") ?>
</header>

<!-- Content -->
<div class="content-page">
  <div class="entrada">
    <div class="row col-md-offset-2 col-md-6 escrit">
      <h3><?php echo $data['titol']; ?></h3>
      <h4>Última actualización: <?php echo $data['fecha']; ?></h4>
      <p>
      <?php echo $data['entrada']; ?>
      </p>

      <!-- Share -->
      <?php include_once("sections/share.php");} ?>
    </div>
    <div class="col-md-2 col-xs-11 entrades-anteriors">
      <h3>Entrades anteriors</h3>
      <ul class="entrada-anterior">

        <?php
        $entrades = count(glob("img/blog/{*.jpg}",GLOB_BRACE));
        $datas = $database->select("blog", [
            "id",
            "link",
            "titol",
            "fecha"
          ], 
          ["id" => $entrades]);
        foreach($datas as $data){
        ?>
        <li>
          <a href="post?url=<?php echo $data['link']; ?>">
          <img src="img/blog/<?php echo $data['link']; ?>.jpg"/>
          <span class="text-content">
            <span>
              <h3><?php echo $data['titol']; ?></h3>
              <h4><?php echo $data['fecha']; ?></h4>
            </span>
          </span>
        </a>
        </li>
        <?php } ?>

        <?php
        $datas = $database->select("blog", [
            "id",
            "link",
            "titol",
            "fecha"
          ], 
          ["id" => $entrades-1]);
        foreach($datas as $data){
        ?>
        <li>
          <a href="post?url=<?php echo $data['link']; ?>">
          <img src="img/blog/<?php echo $data['link']; ?>.jpg"/>
          <span class="text-content">
            <span>
              <h3><?php echo $data['titol']; ?></h3>
              <h4><?php echo $data['fecha']; ?></h4>
            </span>
          </span>
        </a>
        </li>
        <?php } ?>

        <?php
        $datas = $database->select("blog", [
            "id",
            "link",
            "titol",
            "fecha"
          ], 
          ["id" => $entrades-2]);
        foreach($datas as $data){
        ?>
        <li>
          <a href="post?url=<?php echo $data['link']; ?>">
          <img src="img/blog/<?php echo $data['link']; ?>.jpg"/>
          <span class="text-content">
            <span>
              <h3><?php echo $data['titol']; ?></h3>
              <h4><?php echo $data['fecha']; ?></h4>
            </span>
          </span>
        </a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>


<!-- JavaScripts basics -->
<!-- JavaScripts custom -->
<!-- Scripts custom -->

</body>
</html>