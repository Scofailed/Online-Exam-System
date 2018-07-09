<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	


<style>
#tb, #th, #td {
    border: 1px solid black;
}
input[type="radio"] {
    margin-left: 0px;
    margin-bottom: 1px;
    position: relative;
    position: absolute;
}	

table  {
    border: 1px solid black;
}

</style>

<?php
session_start();
if($_POST){
	$sorusayisi = $_POST['sorusayisi'] / 2;
	$soru_derece = $_POST['soru_derece'];
	$ders = $_POST['ders'];
	
	$_SESSION["sorusayisi"] = $sorusayisi;
	$_SESSION["soru_derece"] = $soru_derece;
	$_SESSION["ders"] = $ders;

}else{
	$sorusayisi = $_SESSION["sorusayisi"] ;
	$soru_derece = $_SESSION["soru_derece"];
	$ders = $_SESSION["ders"];
}

$asildeger = $var /2;
$digerdeger= $var/4;
$i=1;$turkcedogru=0;$turkceyanlis=0;$turkcenet=0;
$matematikdogru=0;$matematikyanlis=0;$matematiknet=0;
$sosyaldogru=0;$sosyalyanlis=0;$sosyalnet=0;
$fendogru=0;$fenyanlis=0;$fennet=0;
session_start();
?>
</head>
<body>
<form action="sinavSonuc.php?islem=sifirla" method="post" style="float: right;">

	<button type="submit" style="background-color: red">Testi Sıfırla</button>
</form>

<form action="sinavSonuc.php?islem=testiTamamla" method="post" >

<table style="width:100%">
<?php 
require_once 'baglan.php';

/*$sorulistele=$db->prepare("select * FROM ((select * FROM turkcesoru WHERE soru_derece='kolay' LIMIT $asildeger) UNION ALL (select * FROM turkcesoru WHERE soru_derece='orta' LIMIT $digerdeger) UNION ALL (select * FROM turkcesoru WHERE soru_derece='zor' LIMIT $digerdeger)) turkcesoru");
$sorulistele->execute();*/


$dereceler = array('kolay' ,'orta' ,'zor' );
$sorusayisi2 = intval($sorusayisi / 2);
foreach ($dereceler as $key => $derece) {
	if($derece == $soru_derece){
		
		array_splice($dereceler,$key,1);
	}
}

if($ders == "hepsi"){

$sorulistele=$db->prepare("

	
	
	(select * FROM turkcesoru where soru_derece = '{$soru_derece}' limit {$sorusayisi}) UNION 
	(Select * from turkcesoru where soru_derece = '{$dereceler[0]}' limit {$sorusayisi2})  UNION 
	(Select * from turkcesoru where soru_derece = '{$dereceler[1]}' limit {$sorusayisi2})  UNION 
	(select * FROM matematiksoru where soru_derece = '{$soru_derece}' limit {$sorusayisi}) UNION 
	(Select * from matematiksoru where soru_derece = '{$dereceler[0]}' limit {$sorusayisi2})  UNION 
	(Select * from matematiksoru where soru_derece = '{$dereceler[1]}' limit {$sorusayisi2})  UNION 
	(select * FROM sosyalsoru where soru_derece = '{$soru_derece}' limit {$sorusayisi}) UNION 
	(Select * from sosyalsoru where soru_derece = '{$dereceler[0]}' limit {$sorusayisi2})  UNION 
	(Select * from sosyalsoru where soru_derece = '{$dereceler[1]}' limit {$sorusayisi2}) UNION
	(select * FROM fensoru where soru_derece = '{$soru_derece}' limit {$sorusayisi}) UNION 
	(Select * from fensoru where soru_derece = '{$dereceler[0]}' limit {$sorusayisi2})  UNION 
	(Select * from fensoru where soru_derece = '{$dereceler[1]}' limit {$sorusayisi2})  
	");
$sorulistele->execute();

}else{

	$sorulistele=$db->prepare("
		(select * FROM {$ders} where soru_derece = '{$soru_derece}'  limit {$sorusayisi}) UNION 
		(Select * from {$ders} where soru_derece = '{$dereceler[0]}' limit {$sorusayisi2}) UNION
		(Select * from {$ders} where soru_derece = '{$dereceler[1]}' limit {$sorusayisi2})");
	$sorulistele->execute();
}
$dersBaslik = "";
while($sorucek=$sorulistele->fetch(PDO::FETCH_ASSOC)){ ?>

	<tr><td>
	<?php  
		
		
		if($dersBaslik != $sorucek['dersBaslik']){
			echo "<h3><hr><b>".$sorucek['dersBaslik']."</b><hr></h3>";
			$dersBaslik=$sorucek['dersBaslik'];
		}
		echo $i.")".$sorucek['soru_aciklama'];
		echo "<br>";
	
		
	?>
	
<?php 

	if($_SESSION["cevaplar"]!=NULL){
		if($sorucek['dogrucevap']==$_SESSION["cevaplar"][0][$i]){
		echo "✅";
			if($sorucek['dersBaslik'] == "Sosyal Soruları" ){
			$sosyaldogru++;

			}else if($sorucek['dersBaslik'] == "Fen Soruları" ){
			$fendogru++;

			}else if($sorucek['dersBaslik'] == "Matematik Soruları" ){
			$matematikdogru++;

			}else{
			$turkcedogru++;

			}
		}else{
		echo "❌";
		echo "<br>";
		echo "Doğru Cevap : ".$sorucek['dogrucevap'];
		if($sorucek['dersBaslik'] == "Sosyal Soruları" ){
			$sosyalyanlis++;

			}else if($sorucek['dersBaslik'] == "Fen Soruları" ){
			$fenyanlis++;

			}else if($sorucek['dersBaslik'] == "Matematik Soruları" ){
			$matematikyanlis++;

			}else{
			$turkceyanlis++;

			}
		}
	}

?>

</td></tr>


<?php if($_SESSION["cevaplar"]!=NULL){ ?>
  <tr>
  	<td><input type="radio" name="cevaplar[0][<?php echo $i; ?>]" id="a" value="<?php echo $sorucek['a'] ?>"
  	<?php echo ($sorucek['a'] == $_SESSION["cevaplar"][0][$i])?'checked':'' ?> >&emsp;
  		<?php  echo "A)".$sorucek['a']; echo "<br>";?>
  	</td>
  </tr>
  <tr>
    <td><input type="radio" name="cevaplar[0][<?php echo $i; ?>]" id="b" value="<?php echo $sorucek['b'] ?>"
    <?php echo ($sorucek['b'] == $_SESSION["cevaplar"][0][$i])?'checked':'' ?> >&emsp;
	  	<?php echo "B)".$sorucek['b']; echo "<br>";?>
	</td>
  </tr> 
  <td><input type="radio" name="cevaplar[0][<?php echo $i; ?>]" id="c" value="<?php echo $sorucek['c'] ?>"
  <?php echo ($sorucek['c'] == $_SESSION["cevaplar"][0][$i])?'checked':'' ?> >&emsp;<?php  
	echo "C)".$sorucek['c']; echo "<br>";?></td></tr>
  <td><input type="radio" name="cevaplar[0][<?php echo $i; ?>]" id="d" value="<?php echo $sorucek['d'] ?>"
  <?php echo ($sorucek['d'] == $_SESSION["cevaplar"][0][$i])?'checked':'' ?> >&emsp;<?php  
	echo "D)".$sorucek['d']; echo "<br>";?></td></tr>
  <td><input type="radio" name="cevaplar[0][<?php echo $i; ?>]" id="e" value="<?php echo $sorucek['e'] ?>" 
  <?php echo ($sorucek['e'] == $_SESSION["cevaplar"][0][$i])?'checked':'' ?> >&emsp;<?php  
	echo "E)".$sorucek['e']; echo "<br>";?></td></tr> 
<?php  }else{ ?>
  <td><input type="radio" name="cevaplar[0][<?php echo $i; ?>]" id="a" value="<?php echo $sorucek['a'] ?>" checked>&emsp;<?php  
	echo "A)".$sorucek['a']; echo "<br>";?></td></tr> 
  <td><input type="radio" name="cevaplar[0][<?php echo $i; ?>]" id="b" value="<?php echo $sorucek['b'] ?>">&emsp;<?php  
	echo "B)".$sorucek['b']; echo "<br>";?></td></tr> 
  <td><input type="radio" name="cevaplar[0][<?php echo $i; ?>]" id="c" value="<?php echo $sorucek['c'] ?>">&emsp;<?php  
	echo "C)".$sorucek['c']; echo "<br>";?></td></tr>
  <td><input type="radio" name="cevaplar[0][<?php echo $i; ?>]" id="d" value="<?php echo $sorucek['d'] ?>">&emsp;<?php  
	echo "D)".$sorucek['d']; echo "<br>";?></td></tr>
  <td><input type="radio" name="cevaplar[0][<?php echo $i; ?>]" id="e" value="<?php echo $sorucek['e'] ?>" >&emsp;<?php  
	echo "E)".$sorucek['e']; echo "<br>";?></td></tr> 
<?php } ?>

<?php  
	

$i++;

}

?>

<?php if($_SESSION["cevaplar"]!=NULL){  ?>

<table id="tb" style="width:100%">
  <tr>
    <th id="th">Türkçe</th>
    <th id="th">Matematik</th> 
    <th id="th">Sosyal</th>
    <th id="th">Fen</th>
  </tr>
  <tr>
    <td id="td">Doğru: <?php echo $turkcedogru ?></td>
    <td id="td">Doğru: <?php echo $matematikdogru ?></td>
    <td id="td">Doğru: <?php echo $sosyaldogru ?></td>
    <td id="td">Doğru: <?php echo $fendogru ?></td>
  </tr>
  <tr>
    <td id="td">Yanlış: <?php echo $turkceyanlis ?></td>
    <td id="td">Yanlış: <?php echo $matematikyanlis ?></td>
    <td id="td">Yanlış: <?php echo $sosyalyanlis ?></td>
    <td id="td">Yanlış: <?php echo $fenyanlis ?></td>
  </tr>
  <tr>
    <td id="td">Net: <?php echo $turkcenet=($turkcedogru-$turkceyanlis/4) ?></td>
    <td id="td">Net: <?php echo $matematiknet=($matematikdogru-$matematikyanlis/4) ?></td>
    <td id="td">Net: <?php echo $sosyalnet=($sosyaldogru-$sosyalyanlis/4) ?></td>
    <td id="td">Net: <?php echo $fennet=($fendogru-$fenyanlis/4) ?></td>
  </tr>
  
</table>



	<h4>Toplam Net Sayısı:<?php echo $turkcenet+$matematiknet+$sosyalnet+$fennet ?></h4>
	<h4>Toplam Doğru Sayısı:<?php echo $turkcedogru+$matematikdogru+$sosyaldogru+$fendogru ?></h4>
	<h4>Toplam Yanlış Sayısı:<?php echo $turkceyanlis+$matematikyanlis+$sosyalyanlis+$fenyanlis ?></h4>
<?php } ?>
<button type="submit" value="Testi Bitir">Testi Bitir</button>
<form>
<input type="button" style="float: right;" value="Çıkış" onclick="window.location.href='anasayfa.php'" />
</form>
</form>

 </body>
</html>