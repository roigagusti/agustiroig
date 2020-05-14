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
  <div class="container" style="max-width:1350px;">
    <div class="py-4 text-center">
    </div>

    <div class="row">
      <div class="col-md-12 order-md-1 table-responsive">
        <table class="table table-striped table-sm table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nom</th>
              <th scope="col">Representant</th>
              <th scope="col">Direcció</th>
              <th scope="col" class="numero">Codi postal</th>
              <th scope="col">Ciutat</th>
              <th scope="col" class="numero">CIF</th>
              <th scope="col" class="numero">Telèfon</th>
              <th scope="col">Mail</th>
            </tr>
          </thead>
          <tbody><?php
            require("conexiones/conexion.php");
            $clients = $database->select("clients", ["id","nom","representant","direccio","codi-postal","ciutat","cif","telefon","mail"]);
            foreach($clients as $data){
            ?>
            <tr class='table-row' data-href='http://www.agustiroig.com/admin/projecte.php?id=<?php echo $data["id"];?>'>
              <th scope="row"><?php echo $data['id'];?></th>
              <td><?php echo $data['nom'];?></td>
              <td><?php echo $data['representant'];?></td>
              <td><?php echo ucfirst($data['direccio']);?></td>
              <td class="numero telefon"><?php echo $data['codi-postal'];?></td>
              <td><?php echo $data['ciutat'];?></td>
              <td class="numero"><?php echo $data['cif'];?></td>
              <td class="numero telefon"><?php echo $data['telefon'];?></td>
              <td><?php echo $data['mail'];?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>

  <?php include_once("sections/footer.php"); ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/examples/checkout/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
  <script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script>
  <script>
  $('tr[data-href]').on("click", function() {
  document.location = $(this).data('href');
  });
  </script>
</body>
</html>