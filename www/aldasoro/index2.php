<!DOCTYPE html>
<html lang="ca">
  <head>
  <!-- Meta data -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="title" content="Roig Aldasoro">
  <meta name="keywords" content="Agustí, Roig, Malaret, Aldasoro, Enginyer, Ingeniero, Engineer, Civil, Estructuras, Barcelona, Arquitecte, Architect, Arquitecto"/>
  <meta name="author" content="Aldasoro">

  <!-- Títol i Favicons -->
  <title>Agustí Roig</title>
  <link rel="shortcut icon" href="prova/img/favicons/favicon.ico">

  <!-- CSS basics -->
   <link rel="stylesheet" type="text/css" href="css/responsive.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- CSS custom -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
  <!-- Scripts custom -->
</head>

<?php
$color = array(
  "#FF8080",
  "#FFBF80",
  "#FFFF80",
  "#BFFF80",
  "#80FF80",
  "#80FFBF",
  "#80FFFF",
  "#80BFFF",
  "#8080FF",
  "#BF80FF",
  "#FF80FF",
  "#FF80BF"
);
$number = rand(0,11);
if($number>5){$subnumber=$number-6;}else{$subnumber=$number+6;}
$background = $color[$number];
$titol = $color[$subnumber];
?>

<body <?php echo 'style="background-color:'.$color[$number].';"'; ?>>
<!-- Header -->
<a href="//www.agustiroig.com">
  <div class="content" <?php echo 'style="color:'.$color[$subnumber].';"'; ?>>
    <h1>Roig Aldasoro</h1>
    <h2>Arquitectura i estructures</h2>
  </div>
</a>


<!-- JavaScripts basics -->
<!-- JavaScripts custom -->
<!-- Scripts custom -->

</body>
</html>