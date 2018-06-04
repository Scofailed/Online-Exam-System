<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	
.adminpaneli{
	float: right;
}

</style>
</head>
<body style="background-color:powderblue;">
<?php 
require_once 'baglan.php';
?>
<h2>Listeleme İşlemleri</h2>

	<p>Listelemek istediğiniz dersi seçiniz</p>
	<input type="button" value="Türkçe" onclick="window.location.href='turkcelistele.php'">
	<input type="button" value="Matematik" onclick="window.location.href='matematiklistele.php'">
	<input type="button" value="Sosyal" onclick="window.location.href='sosyallistele.php'">
	<input type="button" value="Fen" onclick="window.location.href='fenlistele.php'">
	<a href="adminpaneli.php"><input class="adminpaneli" type="button" name="button2" id="button2" value="Admin Paneli" /></a>
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
<?php 
		

	

	$listele=$db->prepare("Select * from sosyalsoru order by soru_derece");
	$listele -> execute();
	
	$say=0;

	while($cek=$listele->fetch(PDO::FETCH_ASSOC)){
		$say++

		
		?>
	


	<tr>
		<td><?php echo $say ?></td>
		<td><?php echo $cek['soru_id'] ?></td>
		<td><?php echo $cek['soru_aciklama'] ?></td>
		<td><?php echo $cek['soru_derece'] ?></td>
		<td><?php echo $cek['a'] ?></td>
		<td><?php echo $cek['b'] ?></td>
		<td><?php echo $cek['c'] ?></td>
		<td><?php echo $cek['d'] ?></td>
		<td><?php echo $cek['e'] ?></td>
		<td><?php echo $cek['dogrucevap'] ?></td>
		<td align="center"><a href="sorusil.php?soru_id=<?php echo $cek['soru_id'] ?>&sorusil=ok3"><button>Sil</button></td></a>
		<td align="center"><a href="soruguncellesosyal.php?soru_id=<?php echo $cek['soru_id'] ?>"><button>Güncelle</button></td></a>
	</tr>
		<?php 
	}

 ?>
 </table>
</body>
</html>