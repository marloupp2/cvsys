<?php
if (isset($_POST['submit'])) {
	date_default_timezone_set("Asia/Manila");
	echo date('F d, Y h:i:sA');
}
?>