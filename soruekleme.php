<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<title></title>
	<meta charset="UTF-8">
  <meta name="description" content="arama motorundan çıkan alt bilgi">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="Emre İrem">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color:powderblue;">


<form action="islem-ekle.php" method="POST">
Soru 
	<br><textarea rows="10" cols="80" name="soru_aciklama"></textarea><br>
Şıklar	<br>
A) <input type="text" name="a">
B)<input type="text" name="b">
C)<input type="text" name="c">
D)<input type="text" name="d">
E)<input type="text" name="e">
dogrucevap)<input type="text" name="dogrucevap">
<br>
<br>

	Seviye Seçiniz  <select name="soru_derece">
		<option selected ="">kolay</option>
		<option >orta</option>
		<option>zor</option>
	</select>
	<br>
	<br>
	<button class="btn btn-primary" type="submit" name="insertislemiturkce">Türkçe</button>
	<button class="btn btn-primary" type="submit" name="insertislemimatematik">Matematik</button>
	<button class="btn btn-primary" type="submit" name="insertislemifen">Fen</button>
	<button class="btn btn-primary" type="submit" name="insertislemisosyal">Sosyal</button><br><br>
	<a href="adminpaneli.php"><input class="adminpaneli btn btn-primary" type="button" name="button2" id="button2" value="Admin Paneli" /></a>
	
</form>
<script src="assets/js/jquery.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</body>
</html>