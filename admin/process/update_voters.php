<?php 
include('../../db/db.php');


if (isset($_POST['update'])) {
	$id=$_POST['id'];
	$a=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$e=$_POST['e'];


	mysql_query("UPDATE student_info set full_name='$a',school_id='$b',course='$c',year='$d',section='$e' where id='$id' ");
	header('location:../voters.php');
}
?>