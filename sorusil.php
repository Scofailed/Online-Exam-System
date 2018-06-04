<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 
require_once 'baglan.php';

if($_GET['sorusil']=="ok1"){
	
	$sil=$db->prepare("DELETE from turkcesoru where soru_id=:id");
	$kontrol =$sil->execute(array(
		'id'=>$_GET['soru_id']
));
	if($sil){
		header("Location:turkcelistele.php");
	}
	else header("Location:turkcelistele.php");
}
if($_GET['sorusil']=="ok2"){
	
	$sil=$db->prepare("DELETE from matematiksoru where soru_id=:id");
	$kontrol =$sil->execute(array(
		'id'=>$_GET['soru_id']
));
	if($sil){
		header("Location:matematiklistele.php");
	}
	else header("Location:matematiklistele.php");

}
if($_GET['sorusil']=="ok3"){
	
	$sil=$db->prepare("DELETE from sosyalsoru where soru_id=:id");
	$kontrol =$sil->execute(array(
		'id'=>$_GET['soru_id']
));
	if($sil){
		header("Location:sosyallistele.php");
	}
	else header("Location:sosyallistele.php");

}
if($_GET['sorusil']=="ok4"){
	
	$sil=$db->prepare("DELETE from fensoru where soru_id=:id");
	$kontrol =$sil->execute(array(
		'id'=>$_GET['soru_id']
));
	if($sil){
		header("Location:fenlistele.php");
	}
	else header("Location:fenlistele.php");

}


 ?>
</body>
</html>