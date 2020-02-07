<?php
include("../../db/db.php");
if(isset($_POST['submit'])){

echo $filename=$_FILES["file"]["tmp_name"];
$date=date('Y');
if ($_FILES["file"]["size"] > 0) {

	$file=fopen($filename,"r");
	while (($row=fgetcsv($file,230000,",")) !==FALSE)
	 {


   $sql=mysql_query("INSERT into student_info(full_name,school_id,course,year,section,date_year) values('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$date')");
header("location:../voters.php");
}
}}


?>
