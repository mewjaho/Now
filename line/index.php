<?php
include "Line_model.php";

$line = new Line_Notify();

$line->setToken('ej8WVripIuJXDok3EfhgbCzotDGFyQD5lTiQUUMgZNK');

$line->setMsg('สวัสดีค่ะ');
$line->addMsg('***********************');
$line->addMsg('😁 : มานิตา');
$line->addMsg('***********************');
$line->setSPId(1);
$line->setSId(106);
$line->setImg('https://media.giphy.com/media/13gvXfEVlxQjDO/giphy.gif');

if($line->sendNotify()){ 
	echo "ส่งแล้ว";
}else{
	echo "<pre>";
	print_r($line->getError());
	echo "</pre>";
}
?>