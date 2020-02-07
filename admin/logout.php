<?php
session_start();
session_destroy();
if (isset($_GET['logout'])) {
	header("location:../index.php");
}

?>