<?php 

include("../../db/db.php");

$date=date('Y');
if (isset($_POST['soloflp'])) {
	
	$position=$_POST['position'];
	$image=$_FILES["image"]["name"];
	$name=$_POST['name'];

	$sql=mysql_query("INSERT into flp_candidates(name,image,position,party_list,date) values('$name','$image','$position','none','$date')");
		if ($sql) {
			 move_uploaded_file($_FILES["image"]["tmp_name"] ,'../images/'.basename($image));
			}
			echo '<script>window.location="../candidates.php"</script>';
}
 ?>

 <?php 
if (isset($_POST['solossg'])) {
	
	$position=$_POST['position'];
	$image=$_FILES["image"]["name"];
	$name=$_POST['name'];

	$sql=mysql_query("INSERT into ssg_candidates(name,image,position,party_list,date) values('$name','$image','$position','none','$date')");
		if ($sql) {
			 move_uploaded_file($_FILES["image"]["tmp_name"] ,'../images/'.basename($image));
			}
			echo '<script>window.location="../candidates.php"</script>';
}
 ?>