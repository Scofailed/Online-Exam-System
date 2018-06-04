<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title></title>
	<hr>
	<h2>Türkçe Testi</h2>
	<hr>


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


$sorulistele=$db->prepare("select * FROM ((select * FROM turkcesoru WHERE soru_derece='kolay' LIMIT 20) UNION ALL (select * FROM turkcesoru WHERE soru_derece='orta' LIMIT 10) UNION ALL (select * FROM turkcesoru WHERE soru_derece='zor' LIMIT 10)) turkcesoru");
$sorulistele->execute();

while($sorucek=$sorulistele->fetch(PDO::FETCH_ASSOC)){ ?>

	<tr><td>
	<?php  
		
		

		echo $i.")".$sorucek['soru_aciklama'];
		echo "<br>";
	
		
	?>
	
<?php 

	if($_SESSION["cevaplar"]!=NULL){
		if($sorucek['dogrucevap']==$_SESSION["cevaplar"][0][$i]){
		echo "✅";
		$turkcedogru++;
		}else{
		echo "❌";
		echo "<br>";
		echo "Doğru Cevap : ".$sorucek['dogrucevap'];
		$turkceyanlis++;
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
  <td><input type="radio" name="cevaplar[0][<?php echo $i; ?>]" id="a" value="<?php echo $sorucek['a'] ?>" >&emsp;<?php  
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


</table>
<br>
<hr>
<h2>Matematik Testi</h2>
<hr>
<table style="width:100%">
<?php
$i=1;
$sorulistele=$db->prepare("select * FROM ((select * FROM matematiksoru WHERE soru_derece='kolay' LIMIT 20) UNION ALL (select * FROM matematiksoru WHERE soru_derece='orta' LIMIT 10) UNION ALL (select * FROM matematiksoru WHERE soru_derece='zor' LIMIT 10)) matematiksoru");
$sorulistele->execute();

while($sorucek=$sorulistele->fetch(PDO::FETCH_ASSOC)){ ?>

	<tr><td>
	<?php  
		
		

		echo $i.")".$sorucek['soru_aciklama'];
		echo "<br>";
	
		
	?>
	
<?php 

	if($_SESSION["cevaplar"]!=NULL){
		if($sorucek['dogrucevap']==$_SESSION["cevaplar"][3][$i]){
		echo "✅";
		$matematikdogru++;
		}else{
		echo "❌";
		echo "<br>";
		echo "Doğru Cevap : ".$sorucek['dogrucevap'];
		$matematikyanlis++;
		}
	}
?>

</td></tr>


<?php if($_SESSION["cevaplar"]!=NULL){ ?>
  <tr>
  	<td><input type="radio" name="cevaplar[3][<?php echo $i; ?>]" id="a" value="<?php echo $sorucek['a'] ?>"
  	<?php echo ($sorucek['a'] == $_SESSION["cevaplar"][3][$i])?'checked':'' ?> >&emsp;
  		<?php  echo "A)".$sorucek['a']; echo "<br>";?>
  	</td>
  </tr>
  <tr>
    <td><input type="radio" name="cevaplar[3][<?php echo $i; ?>]" id="b" value="<?php echo $sorucek['b'] ?>"
    <?php echo ($sorucek['b'] == $_SESSION["cevaplar"][3][$i])?'checked':'' ?> >&emsp;
	  	<?php echo "B)".$sorucek['b']; echo "<br>";?>
	</td>
  </tr> 
  <td><input type="radio" name="cevaplar[3][<?php echo $i; ?>]" id="c" value="<?php echo $sorucek['c'] ?>"
  <?php echo ($sorucek['c'] == $_SESSION["cevaplar"][3][$i])?'checked':'' ?> >&emsp;<?php  
	echo "C)".$sorucek['c']; echo "<br>";?></td></tr>
  <td><input type="radio" name="cevaplar[3][<?php echo $i; ?>]" id="d" value="<?php echo $sorucek['d'] ?>"
  <?php echo ($sorucek['d'] == $_SESSION["cevaplar"][3][$i])?'checked':'' ?> >&emsp;<?php  
	echo "D)".$sorucek['d']; echo "<br>";?></td></tr>
  <td><input type="radio" name="cevaplar[3][<?php echo $i; ?>]" id="e" value="<?php echo $sorucek['e'] ?>" 
  <?php echo ($sorucek['e'] == $_SESSION["cevaplar"][3][$i])?'checked':'' ?> >&emsp;<?php  
	echo "E)".$sorucek['e']; echo "<br>";?></td></tr> 
<?php  }else{ ?>
  <td><input type="radio" name="cevaplar[3][<?php echo $i; ?>]" id="a" value="<?php echo $sorucek['a'] ?>" checked>&emsp;<?php  
	echo "A)".$sorucek['a']; echo "<br>";?></td></tr> 
  <td><input type="radio" name="cevaplar[3][<?php echo $i; ?>]" id="b" value="<?php echo $sorucek['b'] ?>">&emsp;<?php  
	echo "B)".$sorucek['b']; echo "<br>";?></td></tr> 
  <td><input type="radio" name="cevaplar[3][<?php echo $i; ?>]" id="c" value="<?php echo $sorucek['c'] ?>">&emsp;<?php  
	echo "C)".$sorucek['c']; echo "<br>";?></td></tr>
  <td><input type="radio" name="cevaplar[3][<?php echo $i; ?>]" id="d" value="<?php echo $sorucek['d'] ?>">&emsp;<?php  
	echo "D)".$sorucek['d']; echo "<br>";?></td></tr>
  <td><input type="radio" name="cevaplar[3][<?php echo $i; ?>]" id="e" value="<?php echo $sorucek['e'] ?>" >&emsp;<?php  
	echo "E)".$sorucek['e']; echo "<br>";?></td></tr> 
<?php } ?>

<?php  
	

$i++;

}

?>
</table>
<hr>
<h2>Sosyal Bilimler Testi</h2>
<hr>
<table style="width:100%">
<?php
$i=1;
$sorulistele=$db->prepare("select * FROM ((select * FROM sosyalsoru WHERE soru_derece='kolay' LIMIT 20) UNION ALL (select * FROM sosyalsoru WHERE soru_derece='orta' LIMIT 10) UNION ALL (select * FROM sosyalsoru WHERE soru_derece='zor' LIMIT 10)) sosyalsoru");
$sorulistele->execute();

while	($sorucek=$sorulistele->fetch(PDO::FETCH_ASSOC)){
?>

<tr><td>
	<?php  
		

		echo $i.")".$sorucek['soru_aciklama'];
		echo "<br>";
		
	?>
	<?php 

		if($_SESSION["cevaplar"]!=NULL){
			if($sorucek['dogrucevap']==$_SESSION["cevaplar"][1][$i]){
			echo "✅";
			$sosyaldogru++;
			}else{
			echo "❌";
			echo "<br>";
			echo "Doğru Cevap : ".$sorucek['dogrucevap'];
			$sosyalyanlis++;
			}
		}
	?>
</td></tr>
  <?php if($_SESSION["cevaplar"]!=NULL){ ?>
	  <tr>
	  	<td><input type="radio" name="cevaplar[1][<?php echo $i; ?>]" id="a" value="<?php echo $sorucek['a'] ?>"
	  	<?php echo ($sorucek['a'] == $_SESSION["cevaplar"][1][$i])?'checked':'' ?> >&emsp;
	  		<?php  echo "A)".$sorucek['a']; echo "<br>";?>
	  	</td>
	  </tr>
	  <tr>
	    <td><input type="radio" name="cevaplar[1][<?php echo $i; ?>]" id="b" value="<?php echo $sorucek['b'] ?>"
	    <?php echo ($sorucek['b'] == $_SESSION["cevaplar"][1][$i])?'checked':'' ?> >&emsp;
		  	<?php echo "B)".$sorucek['b']; echo "<br>";?>
		</td>
	  </tr> 
	  <td><input type="radio" name="cevaplar[1][<?php echo $i; ?>]" id="c" value="<?php echo $sorucek['c'] ?>"
	  <?php echo ($sorucek['c'] == $_SESSION["cevaplar"][1][$i])?'checked':'' ?> >&emsp;<?php  
		echo "C)".$sorucek['c']; echo "<br>";?></td></tr>
	  <td><input type="radio" name="cevaplar[1][<?php echo $i; ?>]" id="d" value="<?php echo $sorucek['d'] ?>"
	  <?php echo ($sorucek['d'] == $_SESSION["cevaplar"][1][$i])?'checked':'' ?> >&emsp;<?php  
		echo "D)".$sorucek['d']; echo "<br>";?></td></tr>
	  <td><input type="radio" name="cevaplar[1][<?php echo $i; ?>]" id="e" value="<?php echo $sorucek['e'] ?>" 
	  <?php echo ($sorucek['e'] == $_SESSION["cevaplar"][1][$i])?'checked':'' ?> >&emsp;<?php  
		echo "E)".$sorucek['e']; echo "<br>";?></td></tr> 
	<?php  }else{ ?>
	  <td><input type="radio" name="cevaplar[1][<?php echo $i; ?>]" id="a" value="<?php echo $sorucek['a'] ?>" checked>&emsp;<?php  
		echo "A)".$sorucek['a']; echo "<br>";?></td></tr> 
	  <td><input type="radio" name="cevaplar[1][<?php echo $i; ?>]" id="b" value="<?php echo $sorucek['b'] ?>">&emsp;<?php  
		echo "B)".$sorucek['b']; echo "<br>";?></td></tr> 
	  <td><input type="radio" name="cevaplar[1][<?php echo $i; ?>]" id="c" value="<?php echo $sorucek['c'] ?>">&emsp;<?php  
		echo "C)".$sorucek['c']; echo "<br>";?></td></tr>
	  <td><input type="radio" name="cevaplar[1][<?php echo $i; ?>]" id="d" value="<?php echo $sorucek['d'] ?>">&emsp;<?php  
		echo "D)".$sorucek['d']; echo "<br>";?></td></tr>
	  <td><input type="radio" name="cevaplar[1][<?php echo $i; ?>]" id="e" value="<?php echo $sorucek['e'] ?>" >&emsp;<?php  
		echo "E)".$sorucek['e']; echo "<br>";?></td></tr> 
	<?php } ?>

<?php  
	

$i++;

}


?>
</table>
 <hr>
 <h2>Fen Bilimleri Testi</h2>
<hr>
<table style="width:100%">
<?php
$i=1;
$sorulistele=$db->prepare("select * FROM ((select * FROM fensoru WHERE soru_derece='kolay' LIMIT 20) UNION ALL (select * FROM fensoru WHERE soru_derece='orta' LIMIT 10) UNION ALL (select * FROM fensoru WHERE soru_derece='zor' LIMIT 10)) fensoru");
$sorulistele->execute();

while	($sorucek=$sorulistele->fetch(PDO::FETCH_ASSOC)){ ?>
	<tr><td>
	<?php  
		

		echo $i.")".$sorucek['soru_aciklama'];
		echo "<br>";
		
	?>
	<?php 

		if($_SESSION["cevaplar"]!=NULL){
			if($sorucek['dogrucevap']==$_SESSION["cevaplar"][2][$i]){
			echo "✅";
			$fendogru++;
			}else{
			echo "❌";
			echo "<br>";
			echo "Doğru Cevap : ".$sorucek['dogrucevap'];
			$fenyanlis++;
			}
		}
	?>
</td></tr>
 <?php if($_SESSION["cevaplar"]!=NULL){ ?>
  <tr>
  	<td><input type="radio" name="cevaplar[2][<?php echo $i; ?>]" id="a" value="<?php echo $sorucek['a'] ?>"
  	<?php echo ($sorucek['a'] == $_SESSION["cevaplar"][2][$i])?'checked':'' ?> >&emsp;
  		<?php  echo "A)".$sorucek['a']; echo "<br>";?>
  	</td>
  </tr>
  <tr>
    <td><input type="radio" name="cevaplar[2][<?php echo $i; ?>]" id="b" value="<?php echo $sorucek['b'] ?>"
    <?php echo ($sorucek['b'] == $_SESSION["cevaplar"][2][$i])?'checked':'' ?> >&emsp;
	  	<?php echo "B)".$sorucek['b']; echo "<br>";?>
	</td>
  </tr> 
  <td><input type="radio" name="cevaplar[2][<?php echo $i; ?>]" id="c" value="<?php echo $sorucek['c'] ?>"
  <?php echo ($sorucek['c'] == $_SESSION["cevaplar"][2][$i])?'checked':'' ?> >&emsp;<?php  
	echo "C)".$sorucek['c']; echo "<br>";?></td></tr>
  <td><input type="radio" name="cevaplar[2][<?php echo $i; ?>]" id="d" value="<?php echo $sorucek['d'] ?>"
  <?php echo ($sorucek['d'] == $_SESSION["cevaplar"][2][$i])?'checked':'' ?> >&emsp;<?php  
	echo "D)".$sorucek['d']; echo "<br>";?></td></tr>
  <td><input type="radio" name="cevaplar[2][<?php echo $i; ?>]" id="e" value="<?php echo $sorucek['e'] ?>" 
  <?php echo ($sorucek['e'] == $_SESSION["cevaplar"][2][$i])?'checked':'' ?> >&emsp;<?php  
	echo "E)".$sorucek['e']; echo "<br>";?></td></tr> 
<?php  }else{ ?>
  <td><input type="radio" name="cevaplar[2][<?php echo $i; ?>]" id="a" value="<?php echo $sorucek['a'] ?>" checked>&emsp;<?php  
	echo "A)".$sorucek['a']; echo "<br>";?></td></tr> 
  <td><input type="radio" name="cevaplar[2][<?php echo $i; ?>]" id="b" value="<?php echo $sorucek['b'] ?>">&emsp;<?php  
	echo "B)".$sorucek['b']; echo "<br>";?></td></tr> 
  <td><input type="radio" name="cevaplar[2][<?php echo $i; ?>]" id="c" value="<?php echo $sorucek['c'] ?>">&emsp;<?php  
	echo "C)".$sorucek['c']; echo "<br>";?></td></tr>
  <td><input type="radio" name="cevaplar[2][<?php echo $i; ?>]" id="d" value="<?php echo $sorucek['d'] ?>">&emsp;<?php  
	echo "D)".$sorucek['d']; echo "<br>";?></td></tr>
  <td><input type="radio" name="cevaplar[2][<?php echo $i; ?>]" id="e" value="<?php echo $sorucek['e'] ?>" >&emsp;<?php  
	echo "E)".$sorucek['e']; echo "<br>";?></td></tr> 
<?php } ?>

<?php  
	

$i++;

}

?>
</table>
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
<input type="button" style="float: right;" value="Çıkış" onclick="window.location.href='index.php'" />
</form>
</form>

 </body>
</html>