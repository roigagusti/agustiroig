<?php include_once("sections/languages.php") ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Meta data -->
  <?php include_once("sections/meta.php") ?>

  <!-- Títol i Favicons -->
  <title>Blog | Agustí Roig</title>
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
<?php include_once("sections/analyticstracking.php") ?>

<!-- Header -->
<header>
<?php include_once("sections/header.php") ?>
<div class="header-titol row col-md-offset-2 col-md-8">Blog</div>
</header>

<div class="content-page">
  <div class="blog-content">
    <div class="row col-md-offset-2 col-md-8 col-xs-12">
      <ul class="entrada-anterior">
        <?php
        require("conexiones/conexion.php");
          $datas = $database->select("blog", [
            "id",
            "link",
            "keywords",
            "titol",
            "descripcio",
            "entrada",
            "fecha"
          ]);
           
          foreach($datas as $data){
            $algoritmo_tamany = $data['id']/7-floor($data['id']/7);

            if($algoritmo_tamany>0){
              if($algoritmo_tamany<0.6){
                $tamany = 3;
              }else{
                $tamany = 4;
              }
            }else{
              $tamany = 4;
            };
        ?>
        <li class="col-md-<?php echo $tamany; ?> blog-post">
          <a href="post?url=<?php echo $data['link']; ?>">
          <div class="arch-project" style="background-image: url('img/blog/<?php echo $data['link']; ?>.jpg');"></div>
          <span class="text-content">
            <span>
              <h3><?php echo $data['titol']; ?></h3>
              <h4><?php echo $data['fecha']; ?></h4>
            </span>
          </span>
        </a>
        </li>
  <?php 
          }
  ?>
      </ul>
    </div>
  </div>
</div>


<!-- JavaScripts basics -->
<!-- JavaScripts custom -->
<!-- Scripts custom -->

</body>
</html>