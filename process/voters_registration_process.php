<?php
if (isset($_POST['submit1'])) {
	include('../db/db.php');

	$fullname = $_POST['fullname'];
	$phone = $_POST['phone'];
	$id_number = $_POST['id_number'];
	$course = $_POST['course'];
	$year_and_section = $_POST['year_and_section'];
	$qrcode=md5($id_number);
	$section = $_POST['section'];
	

	$select=mysql_query("SELECT * from  student_info where school_id='$id_number' ");
	$row=mysql_fetch_array($select);
	if ($id_number == "") {
		echo "Fill your School I.D.";
	}else if($row['status'] == "used"){
		echo "You're I.D. number has been used!";
	}else if (!$row['school_id'] == $id_number) {
		echo "You're I.D. number is invalid!";
	}
	else if ($row['school_id'] == $id_number) {
		echo "okey!";
	}
}



if (isset($_POST['submit2'])) {
	include('../db/db.php');
	$image=$_FILES["image"]["name"];
	$fullname = $_POST['fullname'];
	$phone = $_POST['phone'];
	$id_number = $_POST['id_number'];
	$course = $_POST['course'];
	$year_and_section = $_POST['year_and_section'];
	$qrcode=md5($id_number);
	$section = $_POST['section'];
	$date_year=date('Y');

	$select=mysql_query("SELECT * from  student_info where school_id='$id_number' ");
	$row=mysql_fetch_array($select);
	
	if (strlen($fullname) > 8 && $row['school_id'] == $id_number &&  strlen($phone)==11 && !empty($course) && !empty($year_and_section)){
		$sql=mysql_query("INSERT into voters_registered(full_name,phone,school_id,section,course,year_and_section,qrcode,date_year,profile_picture)values('$fullname','$phone','$id_number','$section','$course','$year_and_section','$qrcode','$date_year','$image')");

		if ($sql) {
			mysql_query("UPDATE student_info set status='used' where school_id='$id_number' ");
			move_uploaded_file($_FILES["image"]["tmp_name"] ,'../images/'.basename($image));
			echo '<script>window.location.href = "../index.php" </script>';
		}

		
	}
}
?>