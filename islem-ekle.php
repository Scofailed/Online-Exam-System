<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 
require_once 'baglan.php';

if(isset($_POST['insertislemiturkce'])) {
	
	$kaydet = $db->prepare("INSERT INTO turkcesoru set

		soru_aciklama=:soru_aciklama,
		soru_derece=:soru_derece,
		a=:a,
		b=:b,
		c=:c,
		d=:d,
		e=:e,
		dogrucevap=:dogrucevap
		");

	$insert=$kaydet->execute(array(
		'soru_aciklama'=>$_POST['soru_aciklama'],
		'soru_derece'=>$_POST['soru_derece'],
		'a'=>$_POST['a'],
		'b'=>$_POST['b'],
		'c'=>$_POST['c'],
		'd'=>$_POST['d'],
		'e'=>$_POST['e'],
		'dogrucevap'=>$_POST['dogrucevap']
		));

		if($insert){
			echo "Türkçe Sorusu başarıyla kaydedildi";
			?>

			<form action="adminpaneli.php">
    <input type="submit" value="Admin Paneli" />
</form>


	<?php  
			
		}
		else {
			echo "Kayıt tamamlanamadı!!!";
		
		?>

			<form action="adminpaneli.php">
    <input type="submit" value="Admin Paneli" />
</form>


	<?php
	}		

}
if(isset($_POST['insertislemimatematik'])) {
	
	$kaydet = $db->prepare("INSERT INTO matematiksoru set

		soru_aciklama=:soru_aciklama,
		soru_derece=:soru_derece,
		a=:a,
		b=:b,
		c=:c,
		d=:d,
		e=:e,
		dogrucevap=:dogrucevap
		");

	$insert=$kaydet->execute(array(
		'soru_aciklama'=>$_POST['soru_aciklama'],
		'soru_derece'=>$_POST['soru_derece'],
		'a'=>$_POST['a'],
		'b'=>$_POST['b'],
		'c'=>$_POST['c'],
		'd'=>$_POST['d'],
		'e'=>$_POST['e'],
		'dogrucevap'=>$_POST['dogrucevap']
		));

		if($insert){
			echo "Matematik Sorusu başarıyla kaydedildi";
			?>

			<form action="adminpaneli.php">
    <input type="submit" value="Admin Paneli" />
</form>


	<?php  
			
		}
		else {
			echo "Kayıt tamamlanamadı!!!";
		
		?>

			<form action="adminpaneli.php">
    <input type="submit" value="Admin Paneli" />
</form>


	<?php
	}		

}
			

if(isset($_POST['insertislemisosyal'])) {
	
	$kaydet = $db->prepare("INSERT INTO sosyalsoru set

		soru_aciklama=:soru_aciklama,
		soru_derece=:soru_derece,
		a=:a,
		b=:b,
		c=:c,
		d=:d,
		e=:e,
		dogrucevap=:dogrucevap
		");

	$insert=$kaydet->execute(array(
		'soru_aciklama'=>$_POST['soru_aciklama'],
		'soru_derece'=>$_POST['soru_derece'],
		'a'=>$_POST['a'],
		'b'=>$_POST['b'],
		'c'=>$_POST['c'],
		'd'=>$_POST['d'],
		'e'=>$_POST['e'],
		'dogrucevap'=>$_POST['dogrucevap']
		));

		if($insert){
			echo "Sosyal Sorusu başarıyla kaydedildi";
			?>

			<form action="adminpaneli.php">
    <input type="submit" value="Admin Paneli" />
</form>


	<?php  
			
		}
		else {
			echo "Kayıt tamamlanamadı!!!";
		
		?>

			<form action="adminpaneli.php">
    <input type="submit" value="Admin Paneli" />
</form>


	<?php
	}		

}
	
if(isset($_POST['insertislemifen'])) {
	
	$kaydet = $db->prepare("INSERT INTO fensoru set

		soru_aciklama=:soru_aciklama,
		soru_derece=:soru_derece,
		a=:a,
		b=:b,
		c=:c,
		d=:d,
		e=:e,
		dogrucevap=:dogrucevap
		");

	$insert=$kaydet->execute(array(
		'soru_aciklama'=>$_POST['soru_aciklama'],
		'soru_derece'=>$_POST['soru_derece'],
		'a'=>$_POST['a'],
		'b'=>$_POST['b'],
		'c'=>$_POST['c'],
		'd'=>$_POST['d'],
		'e'=>$_POST['e'],
		'dogrucevap'=>$_POST['dogrucevap']
		));

		if($insert){
			echo "Fen Sorusu başarıyla kaydedildi";
			?>

			<form action="adminpaneli.php">
    <input type="submit" value="Admin Paneli" />
</form>


	<?php  
			
		}
		else {
			echo "Kayıt tamamlanamadı!!!";
		
		?>

			<form action="adminpaneli.php">
    <input type="submit" value="Admin Paneli" />
</form>


	<?php
	}		

}
	
	
 ?>



 </body>
</html>