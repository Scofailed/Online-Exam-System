<!DOCTYPE html>
<html>
<head>

	<title></title>

	<style >

body {
	background-color: #569CA8FF
}
.bosluk {
	margin-left: 530px;
	font-size: 20px;
}
.bosluk2 {
	font-size: 20px;
}.bosluk3 {
	font-size: 20px;
}		
#button2 {
	margin-top: 10px;
	margin-right: 50px;
}
#button3 {
	margin-top: 10px;
	margin-right: 50px;
}
#button4 {
	margin-top: 10px;
	margin-right: 50px;
}

	</style>
</head>
<body>
<h3>Soru Sayısı giriniz</h3>
<form action="deneme123.php" method="Post">
  <input type="number" name="sorusayisi" min="4" step="4" max="40">
<br>
<h3>Soru Seviyesini seçiniz</h3>
<select id="soruderecesi" name="soru_derece">
    <option value="kolay">Kolay</option>
    <option value="orta">Orta</option>
    <option value="zor">Zor</option>
    
  </select>
<h3>Dersi seçiniz</h3>
  <select id="ders" name="ders">
    <option value="hepsi">Hepsi</option>
    <option value="turkcesoru">Türkçe</option>
    <option value="matematiksoru">Matematik</option>
    <option value="sosyalsoru">Sosyal</option>
    <option value="fensoru">Fen</option>
  </select>

<br><br>

  <input type="submit" value="Onayla">
</form>

		

	<hr>



<p>Not: Soruların %50 si seçtiğiniz seviyeden gelecektir. Geri kalan %50 si diğer 2 seviye arasında eşit paylaştırılacaktır</p>





</body>
</html>