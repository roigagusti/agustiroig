<!DOCTYPE html>
<html lang="ca">
  <head>
  <!-- Meta data -->
  <?php include_once("sections/meta.php"); ?>

  <!-- Títol i Favicons -->
  <title>Agustí Roig</title>
  <link rel="shortcut icon" href="prova/img/favicons/favicon.ico">

  <!-- CSS basics -->
  <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.css" rel="stylesheet">

  <!-- CSS custom -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Google Fonts -->
  <!-- Scripts custom -->
</head>


<body class="bg-light">
<?php include_once("sections/header.php"); ?>
<div class="container">
<div class="subheader py-2">
  <a href="index.php">←</a>
</div>
<br>
<div class="row">
  <div class="col-md-12 order-md-1">
    <h4 class="mb-3">Nou client</h4>
    <form class="needs-validation" novalidate>
      <div class="row">
        <div class="col-md-8 mb-3">
          <label for="ClientName">Nom del client</label>
          <input type="text" class="form-control" id="ClientName" placeholder="" value="" required>
          <div class="invalid-feedback">
            Cal un nom de client.
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="city">Representant</label>
          <input type="text" class="form-control" id="city" placeholder="" value="">
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="direccio">Direcció</label>
          <input type="text" class="form-control" id="direccio" placeholder="" value="">
        </div>
        <div class="col-md-4 mb-3">
          <label for="codipostal">Codi postal</label>
          <input type="text" class="form-control" id="codipostal" placeholder="" value="">
        </div>
        <div class="col-md-4 mb-3">
          <label for="city">Ciutat</label>
          <input type="text" class="form-control" id="city" placeholder="" value="">
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="cif">CIF</label>
          <input type="text" class="form-control" id="cif" placeholder="" value="">
        </div>
        <div class="col-md-4 mb-3">
          <label for="telefon">Telèfon</label>
          <input type="text" class="form-control" id="telefon" placeholder="" value="">
        </div>
        <div class="col-md-4 mb-3">
          <label for="mail">Mail</label>
          <input type="text" class="form-control" id="mail" placeholder="" value="">
        </div>
      </div>
      <br>
      <button class="col-md-3 mb-3 btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
    </form>
  </div>
</div>

<?php include_once("sections/footer.php"); ?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/examples/checkout/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
      <script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script>
</body>
</html>