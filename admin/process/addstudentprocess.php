<?php
include("../../db/db.php");
if(isset($_POST['submiters'])){

$a=$_POST['fullname'];
$b=$_POST['id_number'];
$c=$_POST['course'];
$d=$_POST['year_and_section'];
$e=$_POST['section'];
$date=date('Y');


$sql=mysql_query("INSERT into student_info(full_name,school_id,course,year,section,date_year) values('$a','$b','$c','$d','$e','$date')");
if($sql){
header("location:../voters.php");
}}

?>