<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 10px;
}

/* Set a style for all buttons */
button {

    background-color: #4CAF50;
    color: white;
    padding: 13px 20px;
    margin: 18px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */


/* Float cancel and signup buttons and add an equal width */
.signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>

<form action="islem-kaydol.php" style="border:1px solid #ccc" method="POST">
  <div class="container">
    <h1>Kayıt Olma Formu</h1>
    <p>Kayıt olabilmek için lütfen eksiksiz doldurun</p>
    <hr>

    <label for="ad"><b>Kullanıcı Adı</b></label>
    <input type="text" placeholder="Kullanıcı Adını giriniz" name="kullanici_ad" required>

    <label for="psw"><b>Şifre</b></label>
    <input type="password" placeholder="Şifreyi giriniz" name="kullanici_sifre" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Email giriniz" name="email" required>
    

    
      
      <button type="submit" class="signupbtn" name="kaydol">Kayıt ol</button>
    
  </div>
</form>

</body>
</html>