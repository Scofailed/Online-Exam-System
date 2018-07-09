<?php  require_once 'baglan.php'; session_start();// Veritabanı dosyamızı cagırdık ve session işlemini başlattık ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
<style>
 h1{
    margin-bottom: 5em;
 }   

</style>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body style="background-color: #41B4BDFF">
   
    <div class="container">
    <div class="login-container">
            <div id="output"></div>
            <div class="avatar" style="background:url('https://cdn3.iconfinder.com/data/icons/49handdrawing/256x256/user-admin.png');background-size: cover;"></div>
            <div class="form-box">

        <h2>Kullanıcı Girişi</h2>
    <form method="post">
        <input type="text" name="kullaniciadi" placeholder="Kullanıcı Adınız" class="input-group"><br><br>
        <input type="password" name="sifreniz" placeholder="Sifreniz" class="input-group"><br><br>
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
        <input  type="submit" value="Giriş Yap"> 
        
        
    </form>
 
    <input  onClick="window.location.href='kayitol.php'" type="button" Value="Kayıt ol" >
    
    <input  onClick="window.location.href='anasayfa.php'" type="button" Value="Anasayfa" >
   
</div>
</div>
</div>

    <script src="assets/js/jquery.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>

<style type="text/css" media="screen">

body{background: #eee url(http://subtlepatterns.com/patterns/sativa.png);}
html,body{
    position: relative;
    height: 100%;
}

.login-container{
    position: relative;
    width: 300px;
    margin: 80px auto;
    padding: 20px 40px 40px;
    text-align: center;
    background: #fff;
    border: 1px solid #ccc;
}

#output{
    position: absolute;
    width: 300px;
    top: -75px;
    left: 0;
    color: #fff;
}

#output.alert-success{
    background: rgb(25, 204, 25);
}

#output.alert-danger{
    background: rgb(228, 105, 105);
}


.login-container::before,.login-container::after{
    content: "";
    position: absolute;
    width: 100%;height: 100%;
    top: 3.5px;left: 0;
    background: #fff;
    z-index: -1;
    -webkit-transform: rotateZ(4deg);
    -moz-transform: rotateZ(4deg);
    -ms-transform: rotateZ(4deg);
    border: 1px solid #ccc;

}

.login-container::after{
    top: 5px;
    z-index: -2;
    -webkit-transform: rotateZ(-2deg);
     -moz-transform: rotateZ(-2deg);
      -ms-transform: rotateZ(-2deg);

}

.avatar{
    width: 100px;height: 100px;
    margin: 10px auto 30px;
    border-radius: 100%;
    border: 2px solid #aaa;
    
}

.form-box input{
    width: 100%;
    padding: 10px;
    text-align: center;
    height:40px;
    border: 1px solid #ccc;;
    background: #fafafa;
    transition:0.2s ease-in-out;

}

.form-box input:focus{
    outline: 0;
    background: #eee;
}

.form-box input[type="text"]{
    border-radius: 5px 5px 0 0;
    text-transform: lowercase;
}

.form-box input[type="password"]{
    border-radius: 0 0 5px 5px;
    border-top: 0;
}

.form-box button.login{
    margin-top:15px;
    padding: 10px 20px;
}

.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    -ms-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}

    
</style>