<?php
require('Dd.php');
$HN=$_POST['HN'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$Nut=$_POST['Nut'];
$t=$_POST['t'];
$room=$_POST['room'];




$sql= "INSERT INTO  appoint (HN,fname,lname,Nut,t,room) VALUES ('$HN','$fname','$lname','$Nut','$t','$room')";
define('LINE_API',"https://notify-api.line.me/api/notify");
$token = "ej8WVripIuJXDok3EfhgbCzotDGFyQD5lTiQUUMgZNK"; 
 
$str ="\r\n".'HN= '.$HN.
"\r\n".'fname= '.$fname.
"\r\n".'lname= '.$lname.
"\r\n".'Nut= '.$Nut.
"\r\n".'t= '.$t.
"\r\n".'room= '.$room;

$res = notify_message($str,$token);

function notify_message($message,$token){	
	$queryData = array('message' => $message);
	$queryData = http_build_query($queryData,'','&');
	$headerOptions = array(
		'http'=>array(
			'method'=>'POST',
			'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
				."Authorization: Bearer ".$token."\r\n"
				."Content-Length: ".strlen($queryData)."\r\n",
			'content' => $queryData
		),
	);
	$context = stream_context_create($headerOptions);
	$result = file_get_contents(LINE_API,FALSE,$context);
	$res = json_decode($result);
	return $res;
}
$result=mysqli_query($connect,$sql);
if($result){
  echo"<script>alert('นัดหมายสำเร็จ');</script>
  <meta http-equiv='refresh' content='1;URL=appoint.php?HN=$HN'>";
  exit;
  }else { 
    echo "เกิดข้อผิดพลาด โปรดลองใหม่อีกครั้ง";
  
   }




?>