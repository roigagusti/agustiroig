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
<?php
require("conexiones/conexion.php");
$projectes = $database->select("administracio", ["id","exp","estat","data","nom","ciutat","id-client"], ["id" => $_GET["id"]]);
foreach($projectes as $data){
  $clientprojecte = $database->select("clients", ["id","nom"], ["id" => $data['id-client']]);
  foreach($clientprojecte as $client){
    $nomclient = $client['nom'];
  }
  $clients = $database->select("clients", ["id","nom"]);
  $ofertes = $database->select("ofertes", ["id","preu","estat"], ["id-projecte" => $data['id']]);
?>
<div class="row">
  <div class="col-md-12 order-md-1">
    <h4 class="mb-3">Dades del projecte</h4>
    <form class="needs-validation" novalidate>
      <div class="row">
        <div class="col-md-8 mb-3">
          <label for="nom">Nom de projecte</label>
          <input type="text" class="form-control" id="nom" placeholder="" value="<?php echo $data['nom'];?>" required>
          <div class="invalid-feedback">
            Cal un nom de projecte.
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="ciutat">Ciutat</label>
          <input type="text" class="form-control" id="ciutat" placeholder="" value="<?php echo $data['ciutat'];?>">
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-8 mb-3">
          <label for="client">Client</label>
          <select class="custom-select d-block w-100" id="client" required>
            <option value="<?php echo $nomclient;?>"><?php echo $nomclient;?></option>
            <?php
            foreach($clients as $client){
              echo "<option>".$client['nom']."</option>";
            }
            ?>
          </select>
        </div>
        <div class="col-md-4 mb-3">
          <label for="data">Data</label>
          <input type="text" class="form-control" id="data" placeholder="" value="<?php echo $data['data'];?>">
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="exp">Expedient</label>
          <input type="text" class="form-control" id="exp" placeholder="" value="<?php echo $data['exp'];?>">
        </div>
      </div>
      <hr class="mb-4">

      <h4 class="mb-3">Estat d'avançament</h4>

      <div class="d-block my-3">
        <div class="custom-control custom-radio">
          <input id="`pendent" name="status" type="radio" class="custom-control-input" checked required>
          <label class="custom-control-label" for="pendent">Pendent d'acceptació</label>
        </div>
        <div class="custom-control custom-radio">
          <input id="noAcceptat" name="status" type="radio" class="custom-control-input" required>
          <label class="custom-control-label" for="noAcceptat">No acceptat</label>
        </div>
        <div class="custom-control custom-radio">
          <input id="acceptat" name="status" type="radio" class="custom-control-input" required>
          <label class="custom-control-label" for="acceptat">Acceptat</label>
        </div>
        <div class="custom-control custom-radio">
          <input id="entregat" name="status" type="radio" class="custom-control-input" required>
          <label class="custom-control-label" for="entregat">Entregat</label>
        </div>
        <div class="custom-control custom-radio">
          <input id="facturat" name="status" type="radio" class="custom-control-input" required>
          <label class="custom-control-label" for="facturat">Facturat</label>
        </div>
        <div class="custom-control custom-radio">
          <input id="pagat" name="status" type="radio" class="custom-control-input" required>
          <label class="custom-control-label" for="pagat">Pagat</label>
        </div>
      </div>
      <hr class="mb-4">

      <h4 class="mb-3">Proposta d'honoraris</h4>
      <div class="row">
        <div class="col-md-3 mb-3">
          <label for="preu">Preu</label>
          <input type="text" class="form-control" id="preu" placeholder="1250.00€" required>
          <small class="text-muted">Quantitat sense símbol de divisa</small>
        </div>
        <div class="col-md-3 mb-3">
          <label for="irpf">IRPF</label>
          <input type="text" class="form-control" id="irpf" placeholder="15%" required>
          <small class="text-muted">Número sense percentatge</small>
        </div>
      </div>
      <hr class="mb-4">
      <button class="col-md-3 mb-3 btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
    </form>
  </div>
</div>

<?php } ?>
<?php include_once("sections/footer.php"); ?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/examples/checkout/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
      <script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script>
</body>
</html>