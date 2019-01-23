<?php
 ini_set('date.timezone','Asia/Shanghai');

$dt="imgs/";
$img = $_POST['img'];
$code = $_POST['code'];
$blg = $_POST['blg'];
$pname = $_POST['pname'];
//echo print($_POST['blg']);

$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$img = base64_decode($img);
//$code = json_encode($code);

$imgname = ".png";
$codename = ".txt";
$blgname = "-blg.txt";
list($msec,$sec) = explode ( " ", microtime () );  
$dname = date('Ymd~His',$sec);


if($pname!='undefined')
{
	$dname=str_replace('.png','',$pname);
}

$imgname=$dname.$imgname;
$codename = $dname.$codename;
$blgname = $dname.$blgname;

$success = file_put_contents($dt.$imgname, $img);
$success = file_put_contents($dt.$codename, $code);
$success = file_put_contents($dt.$blgname, $blg);
//print($code);

$url="index.php"."?id=".$imgname."&code=".$code."&sh=0";


//Header("HTTP/1.1 303 See Other"); 
//header("Content-type: text/html; charset=utf-8");
//Header("Location: $url"); 
//$array = array(0 => "Eric", 1 => 23);

echo $imgname;//json_encode($array);

/*
$img = base64_decode($_POST['img']);
print($img);


	*/
//$img = imagecreatefromstring($img);
/*
if(!is_dir($dt))
mkdir($dt,0777);
if(isset($_FILES['theFile'])){
move_uploaded_file($_FILES['theFile']['tmp_name'], $dt.$_FILES['theFile']['name']);
}
else{
print("Failed!");
}*/

?>
