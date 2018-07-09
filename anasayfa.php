<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<style>
		body {font-family: Arial, Helvetica, sans-serif;}
h1 {color: #4695B8FF;}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 15px 20px;
    margin: 15px 20;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-top: 20px;
}

button:hover {
    opacity: 0.8;
}
#kullanicigirisi {
	margin-top:5em;
}
#admingirisi {
	margin-top: 0em;
	
}


/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}




.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}
.modal2 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
	</style>
</head>
<body>
  <div class="container">
    <div class="row">
      <h1 align="center" >Online Sınav Sistemi</h1>
<div class="kullanici">
<h2 id="kullanicigirisi">Kullanıcı Girişi</h2>

<button class="btn btn-success" onclick="location.href='kullanicigiris.php' " style="width:auto;">Giriş</button>
<hr>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="sinavabaslamadanonce.php">
    

    <div class="container">
      <label for="uname"><b>Kullanıcı Adı</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Şifre</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Giriş</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"> <a href="kayitol.php">Kayıt olun</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>
<div class="admin">
<h2 id="admingirisi">Admin Girişi</h2>
 
<button class="btn btn-success" onclick="location.href='admingiris.php' " style="width:auto;">Giriş</button>

<div id="id02" class="modal2">
 
  
  <form class="modal-content animate" action="adminlogin.php">
    

    <div class="container">
   
      <label for="uname"><b>Kullanıcı Adı</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Şifre</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
  
      <button type="submit">Giriş</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>

<script>
// Get the modal
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>  
      
    </div>
    
  </div>
   <script src="assets/js/jquery.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>
<style type="text/css" media="screen">
  body{
  font-family: 'Roboto', sans-serif;
}
</style>