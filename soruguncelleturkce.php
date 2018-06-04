<?php 
require_once 'baglan.php';

?>

<!DOCTYPE html>
<html>
<head>
<style>
	
.adminpaneli{
	float: right;
}

</style>
	<title></title>
	<meta charset="UTF-8">
  <meta name="description" content="arama motorundan çıkan alt bilgi">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="Emre İrem">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color:powderblue;">



<?php 
	$listele=$db->prepare("SELECT * from turkcesoru where soru_id=:id");
	$listele->execute(array(
		'id'=>$_GET['soru_id']
));
	$cek=$listele->fetch(PDO::FETCH_ASSOC);
 ?>



<form action="islem-guncelle.php" method="POST">
<h1>Güncelleme İşlemleri</h1>
	<textarea rows="10" cols="80" name="soru_aciklama" placeholder="Soruyu yazınız"><?php echo $cek['soru_aciklama'] ?></textarea><br>
	
	soruderece)<input type="text" name="soru_derece" value="<?php echo $cek['soru_derece'] ?>">
	
	A)<input type="text" name="a" value="<?php echo $cek['a'] ?>">
	B)<input type="text" name="b" value="<?php echo $cek['b'] ?>">
	C)<input type="text" name="c" value="<?php echo $cek['c'] ?>">
	D)<input type="text" name="d" value="<?php echo $cek['d'] ?>">
	E)<input type="text" name="e" value="<?php echo $cek['e'] ?>"> <br>
	Dogru cevap)<input type="text" name="dogrucevap" value="<?php echo $cek['dogrucevap'] ?>">
	<input type="hidden" value="<?php echo $cek['soru_id'] ?>" name="soru_id">
	<button type="submit" name="guncellemeislemiturkce">Güncelle</button>


</form>

</body>

</html>
