<?php include_once("sections/languages.php") ?>
<!DOCTYPE html>
<html lang="es">
  <head>
  <!-- Meta data -->
  <?php include_once("sections/meta.php") ?>

  <!-- Títol i Favicons -->
  <title>Architect | Agustí Roig</title>
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


<body>
<!-- Google Analytics -->
<?php include_once("sections/analyticstracking.php") ?>

<!-- Header -->
<header>
<?php include_once("sections/header_lan.php") ?>
</header>

<div class="container">
  <div class="row col-md-offset-2 col-md-8 col-xs-12">
      <?php
      require("conexiones/conexion.php");
        $datas = $database->select("architect_projects", [
          "id",
          "name",
          "location",
          "description_ES",
          "description_FR",
          "url"
        ], ["ORDER" => "id"]);
         
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
      <div class="col-md-<?php echo $tamany; ?> rectangle">
        <a href="#<?php echo $data['url']; ?>">
          <div class="arch-project" style="background-image: url('../img/architect/<?php echo $data['url']; ?>.jpg');"></div>
      </div>

      <div class="remodal remodal-project" data-remodal-id="<?php echo $data['url']; ?>" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
      <button data-remodal-action="close" class="remodal-close close-grey" aria-label="Close"></button>

      <div class="remodal-image" style="background-image: url('../img/architect/<?php echo $data['url']; ?>.jpg');"></div>
        <h2><?php echo $data['name']; ?></h2>
        <h3><?php echo $data['location']; ?></h3>
        <?php   if($lang=="es"){echo "<p>".$data['description_ES']."</p>";
                  }else{
                    echo "<p>".$data['description_FR']."</p>";}
        ?>
      </div>
<?php 
        }
?>

  <?php include_once("sections/projecte.php") ?>
  </div>
</div>


<!-- JavaScripts basics -->
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!-- JavaScripts custom -->
<script src="js/script.js"></script>
<!-- Scripts custom -->

</body>
</html>