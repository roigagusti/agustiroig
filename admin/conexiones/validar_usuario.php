<?php 
require('conexion.php');
session_start();

if(isset($_POST["usuari"])&&isset($_POST["password"])) {
	
	$usuari = $_POST["usuari"];
	$password = $_POST["password"];

	$taulausuaris = $database->select("usuaris", [
	  "id",
	  "usuari",
	  "pass"
	  ], ["usuari" => $usuari]);

	echo "Usuari_POST: ".$usuari."<br>";
	echo "Pass_POST: ".$password."<br>";
	foreach($taulausuaris as $data){
	echo "Taula usuaris.id: ".$data['id']."<br>";
	echo "Taula usuaris.usuari: ".$data['usuari']."<br>";
	echo "Taula usuari.pass: ".$data['pass']."<br>";
	}

	if(password_verify($password,$data['pass'])){
			$_SESSION["k_username"] = $usuari;
			header('Location: ../projectes.php');
			echo $data['usuari'].", has entrat correctament. En breu seràs redirigit automàticament. En cas contrari fes clic <a href='../projectes.php'>aquí</a>.";
		}else{
			header('Location: ../index.php?login=signin-error');
			echo "Contrassenya incorrecte, seràs redirigit automàticament. En cas contrari fes clic <a href='../index.php?login=error'>aquí</a>.";
	}
}
?>