<?php 
session_start();
include('../db/db.php');

if (isset($_POST['submit1'])) {
	


$qr=$_POST['qr'];
$sql=mysql_query("SELECT * from voters_registered where qrcode = '$qr' ");
$row=mysql_fetch_array($sql);

$schedule=mysql_query("SELECT electionkind FROM schedule order by id desc limit 1");
$set=mysql_fetch_array($schedule);

if ($set['electionkind'] == "flp" && $row['qrcode']==$qr && empty($row['step'])) {
	$_SESSION['id']=$row['id'];
	echo 'flp_step1';

}else if($set['electionkind'] == "ssg" && $row['qrcode']==$qr && empty($row['step'])){
	$_SESSION['id']=$row['id'];
	echo 'ssg_step1';

}else if ($set['electionkind']=="flpssg" && $row['qrcode']==$qr && empty($row['step'])) {
	$_SESSION['id']=$row['id'];
	echo 'flpssg_step1';

}else if($set['electionkind']=="flpssg" && $row['qrcode']==$qr && $row['step'] == "2nd"){

	$_SESSION['id']=$row['id'];
	echo 'flpssg_step2';

}else if($set['electionkind']=="flpssg" && $row['qrcode']==$qr && $row['step'] == "finish"){


echo "finish";

}

else{
	echo "THE QR CODE IS WRONG!";
}




}
?>