



<p id="countdown" class="text-danger" style="font-size: 18px; color: white !important;">

<?php

include('../db/db.php');

$sql=mysql_query("SELECT * from schedule order by id desc ");
$row=mysql_fetch_array($sql);

$due_date = strtotime($row['timestart']);
$due_date2 = strtotime($row['timeend']);

if($due_date > time()) {
    $rem = $due_date - time();
    $day = floor($rem / 86400);
    $hr  = floor(($rem % 86400) / 3600);
    $min = floor(($rem % 3600) / 60);
    $sec = ($rem % 60);
    echo "&nbsp".$day."d&nbsp".$hr."h&nbsp".$min."m&nbsp".$sec."s"; // Timer still has time to go.
} else if($due_date2 > time()){
    $rem = $due_date2 - time();
    $day = floor($rem / 86400);
    $hr  = floor(($rem % 86400) / 3600);
    $min = floor(($rem % 3600) / 60);
    $sec = ($rem % 60);
    echo "&nbsp".$day."d&nbsp".$hr."h&nbsp".$min."m&nbsp".$sec."s"; // Timer still has time to go.
    
}else{
  echo "The Election is End like a relation"; // Timer is finished, now at 00:00:00
echo "<script>window.location = 'logout.php?logout' </script>";
}
?>

</p>