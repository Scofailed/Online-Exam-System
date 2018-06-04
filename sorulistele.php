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


<form action="sorulistele.php" method="POST">
<h2>Listeleme İşlemleri</h2>

	<p>Listelemek istediğiniz dersi seçiniz</p>
	<input type="button" value="Türkçe" onclick="window.location.href='turkcelistele.php'">
	<input type="button" value="Matematik" onclick="window.location.href='matematiklistele.php'">
	<input type="button" value="Sosyal" onclick="window.location.href='sosyallistele.php'">
	<input type="button" value="Fen" onclick="window.location.href='fenlistele.php'">
	<a href="adminpaneli.php"><input class="adminpaneli" type="button" name="button2" id="button2" value="Admin Paneli" /></a>
	
</form>

<table style="width: 100%" border="1">
	<tr>
		<th>Sayı.NO</th>
		<th>Soru_id</th>
		<th>Soru_aciklama</th>
		<th>Soru_derece</th>
		<th>a</th>
		<th>b</th>
		<th>c</th>
		<th>d</th>
		<th>e</th>
		<th>dogrucevap</th>
		<th>İşlemler1</th>
		<th>İşlemler2</th>
	</tr>

</table>

</body>
</html> 