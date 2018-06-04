<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 
require_once 'baglan.php';

if(isset($_POST['kaydol'])) {
	
	$kaydet = $db->prepare("INSERT INTO kullanicilar set

		kullanici_ad=:kullanici_ad,
		kullanici_sifre=:kullanici_sifre,
		email=:email
		");

	$insert=$kaydet->execute(array(
		'kullanici_ad'=>$_POST['kullanici_ad'],
		'kullanici_sifre'=>$_POST['kullanici_sifre'],
		'email'=>$_POST['email']
		));

		if($insert){
			echo "Kayıt başarıyla tamamlandı";
			header("Location:kullanicigiris.php")
			?>

			<form action="sinavabaslamadanonce.php">
    
</form>


	<?php  
			
		}
		else {
			echo "Kayıt tamamlanamadı!!! Kullanıcı adı veya email kullanılıyor";

		
		?>
			<br><button onclick="location.href='kayitol.php' ">Yeniden dene</button>
			<form action="index.php">
    
</form>


	<?php

		}		

}
	



 ?>

 </body>
</html>