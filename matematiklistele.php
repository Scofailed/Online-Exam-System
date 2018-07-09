<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<title></title>
	<style>
	
.adminpaneli{
	float: right;
}

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:powderblue;">
<?php 
require_once 'baglan.php';
?>
<h2>Listeleme İşlemleri</h2>

	<p>Listelemek istediğiniz dersi seçiniz</p>
	<input class="btn btn-primary" type="button" value="Türkçe" onclick="window.location.href='turkcelistele.php'">
	<input class="btn btn-primary" type="button" value="Matematik" onclick="window.location.href='matematiklistele.php'">
	<input class="btn btn-primary" type="button" value="Sosyal" onclick="window.location.href='sosyallistele.php'">
	<input class="btn btn-primary" type="button" value="Fen" onclick="window.location.href='fenlistele.php'">
	<a href="adminpaneli.php"><input class="adminpaneli btn btn-primary" type="button" name="button2" id="button2" value="Admin Paneli" /></a>

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
		

	

	$listele=$db->prepare("Select * from matematiksoru order by soru_derece");
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
		<td align="center"><a href="sorusil.php?soru_id=<?php echo $cek['soru_id'] ?>&sorusil=ok2"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td></a>
		<td align="center"><a href="soruguncellematematik.php?soru_id=<?php echo $cek['soru_id'] ?>"><button class="btn btn-warning"><i class="fa fa-pencil"></i></button></td></a>
	</tr>
		<?php 
	}

 ?>
 </table>
 <script src="assets/js/jquery.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>