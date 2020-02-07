<?php
include("../db/db.php");
if(isset($_POST['submit'])){

echo $filename=$_FILES["file"]["tmp_name"];

if ($_FILES["file"]["size"] > 0) {

	$file=fopen($filename,"r");
	while (($row=fgetcsv($file,230000,",")) !==FALSE)
	 {


   $sql=mysql_query("INSERT into flpaddcandidates(pl,president,vpresident,secritary,treasurer,auditor,pio,businessm,muse,sentinel) values('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]')");
header("location:../index.php?sucess=IMPORT SUCCESS!");
}
}}


?>
