<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><a href="index.php">Roig Aldasoro</a></h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark<?php if($_SERVER['SCRIPT_NAME'] == "/admin/index.php"){echo " active";}?>" href="index.php">Projectes</a>
    <a class="p-2 text-dark<?php if($_SERVER['SCRIPT_NAME'] == "/admin/clients.php"){echo " active";}?>" href="clients.php">Clients</a>
    <a class="p-2 text-dark<?php if($_SERVER['SCRIPT_NAME'] == "/admin/ofertes.php"){echo " active";}?>" href="ofertes.php">Ofertes</a>
    <a class="p-2 text-dark<?php if($_SERVER['SCRIPT_NAME'] == "/admin/factures.php"){echo " active";}?>" href="factures.php">Factures</a>
  </nav>
</div>