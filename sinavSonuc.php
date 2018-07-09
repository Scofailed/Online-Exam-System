<?php 
session_start();

if($_POST["islem"] == "sifirla"){
	unset($_SESSION["cevaplar"]);
}else{
	$_SESSION["cevaplar"] = $_POST["cevaplar"];
}
header('Location: ' . $_SERVER['HTTP_REFERER']);

 ?>