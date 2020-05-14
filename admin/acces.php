<!--<php
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
if ($_SERVER['SERVER_NAME'] != "admin.agustiroig.com") {
    $page = explode("/",$_SERVER['REQUEST_URI'])['2'];
    $url = "https://admin.agustiroig.com/".$page;
    header("Location: $url");
    exit;
}
?>-->
<!DOCTYPE html>
<html lang="ca">
  <head>
    <!-- Meta data -->
    <?php include_once("sections/meta.php"); ?>

    <!-- Títol i Favicons -->
    <title>Agustí Roig</title>
    <link rel="shortcut icon" href="prova/img/favicons/favicon.ico">

    <!-- CSS basics -->
	<!-- CSS custom -->
	<link rel="stylesheet" type="text/css" href="css/index/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/index/responsive.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/index/bootstrap.css" media="screen">
	<!-- Google Fonts -->
</head>

<body class="imatge">
<!-- Google Analytics -->

<!-- Contingut de pàgina -->
<div class="content">
  <!--<div class="box">-->
  	<a href="index.php"><img src="img/MASALA_logo_gris.png" /></a>
  	<?php if($_GET['event'] != 'forgot'){?>
    <form class="form-signin" action="conexiones/validar_usuario.php" method="post">
        <input type="text" id="usuari" name="usuari" placeholder="Usuari" required autofocus>
        <input type="password" id="password" name="password" placeholder="Contrasenya" required><br>
        <div class="forgot"><a href="?event=forgot">Has oblidat la contrasenya?</a></div>
        <button class="btn-acces" type="submit">Accedir</button>
     </form>
     <div class="fail <?php if($_GET['login'] == 'signin-error'){}else{echo 'hidden';}?>">Contrassenya incorrecta</div>
     <div class="fail <?php if($_GET['event'] == 'link-error'){}else{echo 'hidden';}?>">El link ja no està disponible. Si no pots accedir recupera la contrasenya de nou</div>
     <div class="success <?php if($_GET['login'] == 'send-success'){}else{echo 'hidden';}?>">S'ha enviat les instruccions al vostre correu</div>
    <?php }else{ ?>
     <form class="form-signin" action="conexiones/forgot.php" method="post">
        <input type="email" id="email" name="email" placeholder="Correu electrònic" required autofocus><br>
        <button class="btn-acces" type="submit">Enviar</button>
     </form>
     <div class="fail <?php if($_GET['login'] == 'send-error'){}else{echo 'hidden';}?>">Aquest mail no està registrat a Masala</div>
    <?php } ?>
   <!--</div>-->
</div>
	

<!-- JavaScripts basics -->
<!-- JavaScripts custom -->
<script type="text/javascript" src="js/index/script.js"></script>
<!-- Scripts custom -->

</body>
</html>
