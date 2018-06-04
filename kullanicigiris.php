<?php  require_once 'baglan.php'; session_start();// Veritabanı dosyamızı cagırdık ve session işlemini başlattık ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<style>
 h1{
    margin-bottom: 5em;
 }   

</style>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body style="background-color: #41B4BDFF">
    <center>
    <h1></h1>
    
        <h2>Kullanıcı Girişi</h2>
    <form method="post">
        <input type="text" name="kullaniciadi" placeholder="Kullanıcı Adınız"><br><br>
        <input type="password" name="sifreniz" placeholder="Sifreniz"><br><br>
        <div>
<?php
    if($_POST)// Post İşlemi varmı kontrol ediyoruz.
    {
        $Kullanici=$_POST["kullaniciadi"];//Formdan aldıgımız kullanici değerini değişkene atadık.
        $Sifreniz=$_POST["sifreniz"];//Formdan aldıgımız sifre değerini değişkene atadık.
 
        if(!empty($Kullanici) || !empty($Sifreniz))// Eğer Kullanıcı veya Şifre boş değilse buraya gir dedik
        {
            $sorgu=$db->prepare("SELECT * FROM kullanicilar WHERE kullanici_ad=? and kullanici_sifre=?");// sql yazarak verilerin doğruluğunu kontrol ediyoruz.
            $sorgu->execute(array($Kullanici,$Sifreniz));//Kontrol edilecek olan değişkenleri yazdık
            $islem=$sorgu->fetch();// Burada sorguyu parcalayarak girilen bilgilerin karşılığı varmı dedik
 
            if($islem)// Karşığılı varsa buraya gir dedik
            {
                $_SESSION['KullaniciAdi'] = $islem['kullanici_ad'];// Giriş yaptığımız kullanici adımızı SEssion atadık
                header("Location:sinavabaslamadanonce.php");//Yönlendirmemizi yapıyoruz.
            }
            else//Eğer girilen bilgiler eşleşmiyorsa
            {
                echo "Kullanıcı Adınız veya Şifreniz Yanlış";//Hatamızı Cevabını Yazdırdık.
            }
        }
            else//Eğer alanlar boş ise ekranda yazıcak olan kısım.
        {
            echo "Boş Alan Bırakmayınız.";
        }
        
    } 
?>
        </div><br>
        <input type="submit" value="Giriş Yap"> 
        
        
    </form>
    <br>
    <input onClick="window.location.href='kayitol.php'" type="submit" Value="Kayıt ol">
    <br>
    <br>
    <input onClick="window.location.href='index.php'" type="submit" Value="Anasayfa">
    <br>
    </center>
</body>
</html>