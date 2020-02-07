<?php
session_start();
include('../db/db.php');
if (isset($_POST['submit1'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = mysql_query("SELECT * from admin where user ='$username' and pass='$password' ");
	$row=mysql_fetch_array($sql);
	if(empty($username) && empty($password)){
        echo "<script>toastr.error('please input username and password!')</script>";
	}else if ($row['user'] == $username && $row['pass']==$password) {
		$_SESSION['name']=$row['user'];
		echo '<script>window.location="admin/index.php"</script>';
	}else{
		echo "<script>toastr.error('Incorrect password or username')</script>";
	}
}

?>