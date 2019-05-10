<div class="background-image background-header"></div>
<div class="logo col-md-offset-2 col-md-2 col-sm-offset-1 col-xs-4"><a href="../">Agustí Roig</a></div>
<ul class="header-menu col-md-6 list-inline">
  <li><a href="architect">Architect</a></li>
  <li><a href="entrepreneur">Entrepreneur</a></li>
  <li><a href="developer">Developer</a></li>
  <li><a href="about">About</a></li>
  <li><a href="blog">Blog</a></li>
  <li><?php switch($lang){case "es": echo '<strong>ES</strong> | <a href="'.$_SERVER['SCRIPT_NAME'].'?lang=fr">FR</a>'; break; case "fr": echo '<a href="'.$_SERVER['SCRIPT_NAME'].'">ES</a> | <strong>FR</strong>'; break;} ?>
  </li>
</ul>
<div class="icon right">
  <a href="#menu-responsive">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </a>
</div>
<?php include_once("sections/menu-responsive.php") ?>