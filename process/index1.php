
<?php 

  include('../db/db.php');

  $sql=mysql_query("SELECT * from schedule order by id desc ");
$row=mysql_fetch_array($sql);

$due_date = strtotime($row['timestart']);
$due_date2 = strtotime($row['timeend']);

if ($due_date > time()) {
    $rem = $due_date - time();
    $day = floor($rem / 86400);
    $hr  = floor(($rem % 86400) / 3600);
    $min = floor(($rem % 3600) / 60);
    $sec = ($rem % 60);
?>

<center>
<div class="btn-group col-md-12 col-sm-12 col-xs-12 offset-md-4" style="padding: 0px;">
  <button type="button" class="btn col-md-4 col-sm-4 col-xs-4 bg-white" style="display: none;">
      
  </button>

    <button type="button" class="btn col-md-4 col-sm-4 col-xs-4 bg-white text-danger">
      <center>
       <a href="#result2" id="register" class="text-danger">
          <i class="fas fa-user-plus" style="font-size: 60px;"></i>
           <p style="font-size: 15px;" class="font-weight-bold">REGISTER</p></span>
       </a>
    </center>
  </button>

  <button type="button" class="btn col-md-4  col-sm-4 col-xs-4 bg-white" style="display: none;">
      
  </button>

</div>
</center>
<?php
}else if($due_date2 > time()){
    $rem = $due_date2 - time();
    $day = floor($rem / 86400);
    $hr  = floor(($rem % 86400) / 3600);
    $min = floor(($rem % 3600) / 60);
    $sec = ($rem % 60);
?>

<center>
<div class="btn-group col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
   <a href="QRcode/index.php" class="text-danger">
  <button type="button" class="btn col-md-6 col-sm-6 col-xs-6 bg-white text-danger">
      <center>
        <i class="fas fa-qrcode" style="font-size: 60px;"></i>
          <p style="font-size: 15px;" class="font-weight-bold">CODE SCAN</p></span>
     
     </center>
  </button>
   </a>
 <a href="#" id="result00" class="text-danger">
  <button type="button" class="btn col-md-6 col-sm-6 col-xs-6 bg-white text-danger">
      <center>
      
          <i class="far fa-chart-bar" style="font-size: 60px;"></i>
           <p style="font-size: 15px;" class="font-weight-bold" >RESULTS</p></span>
      
    </center>
  </button>
   </a>
</div>

</center>



<?php
}else{
?>


<center>
<div class="btn-group col-md-12 col-sm-12 col-xs-12 offset-md-4" style="padding: 0px;">
  <button type="button" class="btn col-md-4 col-sm-4 col-xs-4 bg-white text-danger" style="display: none;">
  </button>

  <button type="button" class="btn col-md-4 col-sm-4 col-xs-4 bg-white text-danger ">
      <center>
       <a href="#result00" id="result00" class="text-danger ">
          <i class="far fa-chart-bar" style="font-size: 60px;"></i>
           <p style="font-size: 15px;" class="font-weight-bold" >RESULTS</p></span>
       </a>
    </center>
  </button>
  <button type="button" class="btn col-md-4 col-sm-4 col-xs-4 bg-white" style="display: none;">

  </button>
</div>

</center>



<?php
}
?>
