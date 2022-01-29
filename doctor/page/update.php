<?php
require('Dd.php');

$mom=$_POST['mom'];
$moml=$_POST['moml'];
$HN_mom=$_POST['HN_mom'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$HN=$_POST['HN'];
$admit=$_POST['admit'];
$birthday=$_POST['birthday'];
$t=$_POST['t'];
$A=$_POST['A'];
$C=$_POST['C'];
$B=$_POST['B'];
$D=$_POST['D'];
$w=$_POST['w'];
$OFC=$_POST['OFC'];
$long1=$_POST['long1'];
$born=$_POST['born'];
$why=$_POST['why'];

$sql="UPDATE  Nurse SET mom='$mom',moml='$moml', HN_mom='$HN_mom',fname='$fname',lname='$lname',HN='$HN',admit='$admit',birthday='$birthday',t='$t',A='$A',C='$C',B='$B',D='$D',w='$w',OFC='$OFC',long1='$long1',born='$born',why='$why' WHERE HN =$HN";

$result=mysqli_query($connect,$sql);
if($result){
  
  

  header("location:Home.php");
  exit(0);
}else{
echo "เกิดข้อผิดพลาด";

}
?>