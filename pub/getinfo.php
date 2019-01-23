<?php
 ini_set('date.timezone','Asia/Shanghai');

$dt="imgs/";
$code = $_POST['id'];
$code=str_replace('.png','.txt',$code);

//$url="index.php"."?id=".$imgname."&code=".$code."&sh=0";


$opts = array(
    'http'=>array(
      'method'=>"GET",
      'timeout'=>60,
    )
);
 
$context = stream_context_create($opts);
 
$con =file_get_contents($dt.$code, false, $context);

echo $con;//json_encode($array);


?>
