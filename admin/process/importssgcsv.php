<?php
include("../db/db.php");
if(isset($_POST['submit'])){

echo $filename=$_FILES["file"]["tmp_name"];

if ($_FILES["file"]["size"] > 0) {

	$file=fopen($filename,"r");
	while (($row=fgetcsv($file,230000,",")) !==FALSE)
	 {


   $sql=mysql_query("INSERT into ssgaddcandidates(partylist,President,VPresident,s1,s2,s3,s4,s5,s6,s7,s8,s9,s10,s11,s12) values('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12]','$row[13]','$row[14]')");
header("location:../viewssgcandidate.php");
}
}}


?>
