<?php
$lang = "es";
if(isset($_GET['lang'])){
	$lang = $_GET['lang'];
	if($lang =="es"){
		include_once("languages/es_translate.php");
	}else{
		include_once("languages/fr_translate.php");
	}
}else{
	$lang = "es";
	include_once("languages/es_translate.php");
}
?>