<?php 

require_once 'baglan.php';
 
	if(isset($_POST['guncellemeislemiturkce'])) {
		$kaydet = $db->prepare("UPDATE turkcesoru set

		soru_aciklama=:soru_aciklama,
		soru_derece=:soru_derece,
		a=:a,
		b=:b,
		c=:c,
		d=:d,
		e=:e,
		dogrucevap=:dogrucevap
		where soru_id={$_POST['soru_id']}
		");

	$update=$kaydet->execute(array(
		'soru_aciklama'=>$_POST['soru_aciklama'],
		'soru_derece'=>$_POST['soru_derece'],
		'a'=>$_POST['a'],
		'b'=>$_POST['b'],
		'c'=>$_POST['c'],
		'd'=>$_POST['d'],
		'e'=>$_POST['e'],
		'dogrucevap'=>$_POST['dogrucevap']
		));
	if($update){
		header("Location:guncellemebasarili.php");
	}
	else header("Location:guncellemebasarisiz.php");
}
if(isset($_POST['guncellemeislemimatematik'])) {
		$kaydet = $db->prepare("UPDATE matematiksoru set

		soru_aciklama=:soru_aciklama,
		soru_derece=:soru_derece,
		a=:a,
		b=:b,
		c=:c,
		d=:d,
		e=:e,
		dogrucevap=:dogrucevap
		where soru_id={$_POST['soru_id']}
		");

	$update=$kaydet->execute(array(
		'soru_aciklama'=>$_POST['soru_aciklama'],
		'soru_derece'=>$_POST['soru_derece'],
		'a'=>$_POST['a'],
		'b'=>$_POST['b'],
		'c'=>$_POST['c'],
		'd'=>$_POST['d'],
		'e'=>$_POST['e'],
		'dogrucevap'=>$_POST['dogrucevap']
		));
	if($update){
		header("Location:guncellemebasarili.php");
	}
	else header("Location:guncellemebasarisiz.php");
}
if(isset($_POST['guncellemeislemisosyal'])) {
		$kaydet = $db->prepare("UPDATE sosyalsoru set

		soru_aciklama=:soru_aciklama,
		soru_derece=:soru_derece,
		a=:a,
		b=:b,
		c=:c,
		d=:d,
		e=:e,
		dogrucevap=:dogrucevap
		where soru_id={$_POST['soru_id']}
		");

	$update=$kaydet->execute(array(
		'soru_aciklama'=>$_POST['soru_aciklama'],
		'soru_derece'=>$_POST['soru_derece'],
		'a'=>$_POST['a'],
		'b'=>$_POST['b'],
		'c'=>$_POST['c'],
		'd'=>$_POST['d'],
		'e'=>$_POST['e'],
		'dogrucevap'=>$_POST['dogrucevap']
		));
	if($update){
		header("Location:guncellemebasarili.php");
	}
	else header("Location:guncellemebasarisiz.php");
}
if(isset($_POST['guncellemeislemifen'])) {
		$kaydet = $db->prepare("UPDATE fensoru set

		soru_aciklama=:soru_aciklama,
		soru_derece=:soru_derece,
		a=:a,
		b=:b,
		c=:c,
		d=:d,
		e=:e,
		dogrucevap=:dogrucevap
		where soru_id={$_POST['soru_id']}
		");

	$update=$kaydet->execute(array(
		'soru_aciklama'=>$_POST['soru_aciklama'],
		'soru_derece'=>$_POST['soru_derece'],
		'a'=>$_POST['a'],
		'b'=>$_POST['b'],
		'c'=>$_POST['c'],
		'd'=>$_POST['d'],
		'e'=>$_POST['e'],
		'dogrucevap'=>$_POST['dogrucevap']
		));
	if($update){
		header("Location:guncellemebasarili.php");
	}
	else header("Location:guncellemebasarisiz.php");
}
 ?>