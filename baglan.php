<?php 

try {


	$db = new PDO ("mysql:host=localhost;dbname=sinav;charset=utf8",'root','1234567q');
	
	//echo "Veri tabanı baglantisi basarili";
} catch (PDOException $e) {
	echo $e->getMessage();
}

 ?>