<?php
require("conexiones/conexion.php");
$directory ="obres/";

$datas = $database->select("obres", ["id","titol","arquitecte","descripcio","url","url-arquitecte","ubicacio","any","promotor","superficie","pressupost","fotograf","url-fotografia","empresa","tags"], ["url" => $_GET['g']]);
$directori = "obres/historial/";

foreach($datas as $data){
?>

<!DOCTYPE html>
<html lang="ca">
  <head>
    <!-- Meta data -->
    <?php include_once("sections/lang.php"); ?>
    <?php include_once("sections/meta-masala.php"); ?>

    <!-- Títol i Favicons -->
    <title>Masala Consultors</title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- CSS basics -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" media="screen">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- CSS custom -->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- Google Analytics -->
<?php include_once("sections/analyticstracking.php"); ?>

<!-- Contingut de pàgina -->
<div id="container">
	<?php include_once('sections/header.php'); ?>
	<div id="content">
		<div class="responsive-header">
			<div class="icon left">
				<a href="#menu-responsive">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</a>
			</div>
			<a href="//www.masalaconsultors.com" class="center logo">Projectes</a>
			<div class="icon right">
				<a href="contacte">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		<?php include_once("sections/menu-responsive.php") ?>

		<div class="obra">
			<div class="main-photo-project" style="background-image: url(<?php echo $directori.$data['id']."/".$data['id'].".1.jpg";?>);">
			</div>
			<div class="project-info">
				<h1><?php echo $data['titol']; ?></h1>				
				<?php $arquitecte = $data['arquitecte']; if(strstr($arquitecte,'#')){$arquitecte = str_replace("#", $text['i'], $arquitecte);}?>
				<span class="arquitecte"><?php if($data['url-arquitecte']){echo '<a href="'.$data['url-arquitecte'].'" target="_blank">'.$arquitecte.'</a>';
					}else{echo $arquitecte;}?>
				</span>

				<div class="row project-description">
					<div class="col-md-9 description">
						<p><?php echo $data['descripcio']; ?></p>

						<div class="project-images">
							<div class="popup-gallery">
								<?php
								$num_iteraccions = count(glob("obres/historial/".$data['id']."/{*.jpg}",GLOB_BRACE))+1;
								for ($iteraccio = 1; $iteraccio < $num_iteraccions; $iteraccio++) {
   									echo '<a href="'.$directori.$data['id']."/".$data['id'].'.'.$iteraccio.'.jpg" title=""><img src="'.$directori.$data['id']."/".$data['id'].'.'.$iteraccio.'.jpg" height="150" /></a>';
								}
								?>
						    </div>
							
							<script type="text/javascript">
						      $(document).ready(function() {
						        $('.popup-gallery').magnificPopup({
						          delegate: 'a',
						          type: 'image',
						          tLoading: 'Loading image #%curr%...',
						          mainClass: 'mfp-img-mobile',
						          gallery: {
						            enabled: true,
						            navigateByImgClick: true,
						            preload: [0,1], // Will preload 0 - before current, and 1 after the current image
						            arrowMarkup: '',
						            tCounter: '' // markup of counter
						          },
						          image: {
						            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
						          }
						        });
						      });
						    </script>
						</div>
					</div>

					<div class="col-md-3">
						<div class="tags-widget">
							<ul class="post-tags">
								<?php if($data['ubicacio']){ ?><li><?php echo $text['Ubicació']; ?>: <span><?php echo $data['ubicacio']; ?></span></li><?php } ?>
								<?php if($data['any']){ ?><li><?php echo $text['Any']; ?>: <span><?php echo $data['any']; ?></span></li><?php } ?>
								<?php if($data['promotor']){ ?><li><?php echo $text['Promotor']; ?>: <span><?php echo $data['promotor']; ?></span></li><?php } ?>
								<?php if($data['superficie']){ ?><li><?php echo $text['Superfície']; ?>: <span><?php echo $data['superficie']." m<sup>2</sup>"; ?></span></li><?php } ?>
								<?php if($data['pressupost']){ ?><li><?php echo $text['Pressupost']; ?>: <span><?php echo $data['pressupost']." €"; ?></span></li><?php } ?>
								<?php if($data['fotograf'] and $data['url-fotografia']){ ?><li><?php echo $text['Fotografia de']; ?>: <span><a href="<?php echo $data['url-fotografia']; ?>" target="_blank"><?php echo $data['fotograf']; ?></a></span></li>
								<?php }else if($data['fotograf']){ ?><li><?php echo $text['Fotografia de']; ?>: <span><?php echo $data['fotograf'];} ?></span></li>
								<?php switch($data['empresa']){
									case 'Boma': echo "<li style='padding-top:20px;'><span>".$text['projecte_boma']."</span></li>"; break;
									case 'Masala': break;
									case 'MasalaBBG': echo "<li style='padding-top:20px;'><span>".$text['projecte_bbg']."</span></li>"; break;
									default: break; } ?>
							</ul>											
						</div>

						<?php if($data['tags']){ ?>
						<div class="tags-widget sidebar-widget">
							<div class="etiquetes"><?php echo $text['Etiquetes']; ?>:</div>
							<ul class="tags-list-post">
								<?php 
								$tags = explode("#",$data['tags']); 
								foreach($tags as $tag){
									$lowertag = strtolower($tag);
								?>
								<li><a href="projectes.php?tag=<?php echo $lowertag; ?>"><?php echo $tag; ?></a></li>
								<?php } ?>
							</ul>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<!-- JavaScripts basics -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="//www.masalaconsultors.com/js/gmap3.min.js"></script>
<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>

<script src="//dimsemenov.com/plugins/magnific-popup/dist/jquery.magnific-popup.min.js?v=1.1.0"></script>

<!-- JavaScripts custom -->
<script type="text/javascript" src="js/script.js"></script>
<!-- Scripts custom -->
</body>
</html>
</body>
</html>