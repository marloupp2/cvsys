<?php
include('../../../../db/db.php');

if (isset($_POST['submit'])) {
	# code...

$a=$_POST['start1'];
$b=$_POST['ended'];
$c=$_POST['timestart'];
$d=$_POST['timeend'];
$e=$_POST['set'];
date_default_timezone_set("Asia/Manila");
$f=date("Y-m-d H:i:s");
$sql=mysql_query("INSERT into schedule(start,end,timestart,timeend,electionkind,timerequest) values('$a','$b','$c','$d','$e','$f')");
if ($sql) {
	 echo "<script type='text/javascript'>window.parent.location.reload()</script>";
}
}
?>