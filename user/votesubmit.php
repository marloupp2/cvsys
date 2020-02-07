
<?php
  include('../db/db.php');

  $sched=mysql_query("SELECT * from schedule order by id + 0 DESC");
  $sched_row=mysql_fetch_array($sched);

if ($sched_row['electionkind'] == "flpssg" || $sched_row['electionkind'] == "flp" || $sched_row['electionkind'] == "ssg") {
if (isset($_POST['submit1'])) {
  $a=$_POST['flp1'];
  $b=$_POST['flp2'];
  $c=$_POST['flp3'];
  $d=$_POST['flp4'];
  $e=$_POST['flp5'];
  $f=$_POST['flp6'];
  $g=$_POST['flp7'];
  $h=$_POST['flp8'];
  $i=$_POST['flp9'];
  $name=$_POST['name'];
  $school_id=$_POST['school_id'];
  $course=$_POST['course'];
  $year=$_POST['year'];
  $section=$_POST['section'];
  $ids=$_POST['ids'];

  
  
  if (isset($_POST['flp1'])) {
    if ($a !== "") {
    $pl=mysql_query("SELECT * from  flp_candidates where name='$a' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into flp_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$a','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  } }

  if (isset($_POST['flp2'])) {
     if ($a !== "") {
    $pl=mysql_query("SELECT * from  flp_candidates where name='$b' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into flp_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$b','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}

  if (isset($_POST['flp3'])) {
    if ($a !== "") {
    $pl=mysql_query("SELECT * from  flp_candidates where name='$c' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into flp_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$c','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}
  if (isset($_POST['flp4'])) {
    if ($a !== "") {
    $pl=mysql_query("SELECT * from  flp_candidates where name='$d' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into flp_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$d','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}
  if (isset($_POST['flp5'])) {
    if ($a !== "") {
    $pl=mysql_query("SELECT * from  flp_candidates where name='$e' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into flp_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$e','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}
  if (isset($_POST['flp6'])) {
    if ($a !== "") {
    $pl=mysql_query("SELECT * from  flp_candidates where name='$f' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into flp_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$f','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}
  if (isset($_POST['flp7'])) {
    if ($a !== "") {
    $pl=mysql_query("SELECT * from  flp_candidates where name='$g' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into flp_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$g','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}
  if (isset($_POST['flp8'])) {
    if ($a !== "") {
    $pl=mysql_query("SELECT * from  flp_candidates where name='$h' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into flp_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$h','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}
  if (isset($_POST['flp9'])) {
    if ($a !== "") {
    $pl=mysql_query("SELECT * from  flp_candidates where name='$i' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into flp_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$i','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}

  if ($sched_row['electionkind'] == "flpssg") {
    mysql_query("UPDATE voters_registered set step='2nd' where id='$ids' ");
     echo '<script>window.location="index2.php"</script>';
  }else if( $sched_row['electionkind'] == "flp"){
    mysql_query("UPDATE voters_registered set step='finish' where id='$ids' ");
    echo '<script>window.location="logout.php?logout"</script>';
  }
 

}




if (isset($_POST['submit2'])) {
$a = $_POST['ssg'];
rsort($a);
$b = count($a);
for($x = 0; $x < $b; $x++) {
}
$j=$_POST['ssg1'];
$k=$_POST['ssg2'];
$l = $a[0];
$m = $a[1];
$n = $a[2];
$o = $a[3];
$p = $a[4];
$q = $a[5];
$r = $a[6];
$s = $a[7];
$t = $a[8];
$u = $a[9];
$v = $a[10];
$w = $a[11];
$name=$_POST['name'];
$school_id=$_POST['school_id'];
$course=$_POST['course'];
$year=$_POST['year'];
$section=$_POST['section'];
$ids=$_POST['ids'];
 mysql_query("UPDATE voters_registered set step='finish' where id='$ids' ");


if (isset($j)) {
  if ($j !== "") {
    $pl=mysql_query("SELECT * from  ssg_candidates where name='$j' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into ssg_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$j','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}



if (isset($k)) {
  if ($k !== "") {
    $pl=mysql_query("SELECT * from  ssg_candidates where name='$k' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into ssg_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$k','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}


if (isset($l)) {
  if ($l !== "") {
    $pl=mysql_query("SELECT * from  ssg_candidates where name='$l' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into ssg_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$l','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}


if (isset($m)) {
  if ($m !== "") {
    $pl=mysql_query("SELECT * from  ssg_candidates where name='$m' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into ssg_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$m','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}


if (isset($n)) {
  if ($n !== "") {
    $pl=mysql_query("SELECT * from  ssg_candidates where name='$n' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into ssg_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$n','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}


if (isset($o)) {
  if ($o !== "") {
    $pl=mysql_query("SELECT * from  ssg_candidates where name='$o' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into ssg_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$o','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}


if (isset($p)) {
  if ($p !== "") {
    $pl=mysql_query("SELECT * from  ssg_candidates where name='$p' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into ssg_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$p','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}


if (isset($q)) {
  if ($q !== "") {
    $pl=mysql_query("SELECT * from  ssg_candidates where name='$q' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into ssg_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$q','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}


if (isset($r)) {
  if ($r !== "") {
    $pl=mysql_query("SELECT * from  ssg_candidates where name='$r' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into ssg_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$r','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}


if (isset($s)) {
  if ($s !== "") {
    $pl=mysql_query("SELECT * from  ssg_candidates where name='$s' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into ssg_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$s','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}


if (isset($t)) {
  if ($t !== "") {
    $pl=mysql_query("SELECT * from  ssg_candidates where name='$t' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into ssg_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$t','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}

if (isset($u)) {
  if ($u !== "") {
    $pl=mysql_query("SELECT * from  ssg_candidates where name='$u' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into ssg_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$u','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}

if (isset($v)) {
  if ($v !== "") {
    $pl=mysql_query("SELECT * from  ssg_candidates where name='$v' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into ssg_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$v','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}


if (isset($w)) {
  if ($w !== "") {
    $pl=mysql_query("SELECT * from  ssg_candidates where name='$w' ");
    $row=mysql_fetch_array($pl);
    $party_list=$row['party_list'];
    $position=$row['position'];
    $sql=mysql_query("INSERT into ssg_submit_votes(candidates,position,partylist,voters_name,voters_id,voters_course,voters_year,voters_section) values('$w','$position','$party_list','$name','$school_id','$course','$year','$section')");
  }else{
echo "No inserting";
  }}

 echo '<script>window.location="logout.php?logout"</script>';
}

}


?>