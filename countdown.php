



<p id="countdown" class="text-danger m-0" style="font-size: 18px; color: red !important;">

<?php

include('db/db.php');

$sql=mysql_query("SELECT * from schedule order by id +0 desc ");
$row=mysql_fetch_array($sql);

$due_date = strtotime($row['timestart']);
$due_date2 = strtotime($row['timeend']);

if($due_date > time()) {
    $rem = $due_date - time();
    $day = floor($rem / 86400);
    $hr  = floor(($rem % 86400) / 3600);
    $min = floor(($rem % 3600) / 60);
    $sec = ($rem % 60);
    echo "The election will start in <br>$day Day";
    if ($day == "1" || $day == "0") {
        
    }else{
        echo "s";
    }
    echo" $hr Hour";
    if ($hr == "1" || $hr == "0") {
        
    }else{
        echo "s";
    }
    echo " $min Minutes $sec"; // Timer still has time to go.
} else if($due_date2 > time()){
    $rem = $due_date2 - time();
    $day = floor($rem / 86400);
    $hr  = floor(($rem % 86400) / 3600);
    $min = floor(($rem % 3600) / 60);
    $sec = ($rem % 60);
    echo "the election will end  in <br> $day Day";
    if ($day == "1" || $day == "0") {
        
    }else{
        echo "s";
    }
    echo" $hr Hour";
    if ($hr == "1" || $hr == "0") {
        echo "";
    }else{
        echo "s";
    }
    echo " $min Minutes $sec"; // Timer still has time to go.
    
}else{
  echo "The Election is about to End like a relation"; // Timer is finished, now at 00:00:00

}
?>

</p>