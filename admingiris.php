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
<body style="background-color: #4AB492FF">
    <center>
    <h1></h1>
        <h2>Admin Girişi</h2>
    <form method="post">
        <input type="text" name="admin_adi" placeholder="Kullanıcı Adınız" autocomplete="off"><br><br>
        <input type="password" name="admin_sifre" placeholder="Sifreniz"><br><br>
        <div>
<?php
    if($_POST)// Post İşlemi varmı kontrol ediyoruz.
    {
        $Kullanici=$_POST["admin_adi"];//Formdan aldıgımız kullanici değerini değişkene atadık.
        $Sifreniz=$_POST["admin_sifre"];//Formdan aldıgımız sifre değerini değişkene atadık.
 
        if(!empty($Kullanici) || !empty($Sifreniz))// Eğer Kullanıcı veya Şifre boş değilse buraya gir dedik
        {
            $sorgu=$db->prepare("SELECT * FROM admin WHERE admin_ad=? and admin_sifre=?");// sql yazarak verilerin doğruluğunu kontrol ediyoruz.
            $sorgu->execute(array($Kullanici,$Sifreniz));//Kontrol edilecek olan değişkenleri yazdık
            $islem=$sorgu->fetch();// Burada sorguyu parcalayarak girilen bilgilerin karşılığı varmı dedik
 
            if($islem)// Karşığılı varsa buraya gir dedik
            {
                $_SESSION['AdminAdi'] = $islem['admin_ad'];// Giriş yaptığımız kullanici adımızı SEssion atadık
                header("Location:adminpaneli.php");//Yönlendirmemizi yapıyoruz.
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
    <input onClick="window.location.href='index.php'" type="submit" Value="Anasayfa">
    </center>
</body>
</html>