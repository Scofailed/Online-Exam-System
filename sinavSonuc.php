<?php 
session_start();

if($_POST["islem"] == "sifirla"){
	session_destroy();
}else{
	$_SESSION["cevaplar"] = $_POST["cevaplar"];
}
header('Location: ' . $_SERVER['HTTP_REFERER']);

 ?>