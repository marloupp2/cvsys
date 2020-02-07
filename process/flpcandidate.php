<?php
include('../db/db.php');
$date=date('Y');
?>
<?php
if (isset($_POST['submit1'])) {
?>
<div class="col-xs-12" style="padding: 0px;">
    <div class="row">
<?php
$sql=mysql_query("SELECT * from flp_candidates where date ='$date' and position ='President' ");
while($row=mysql_fetch_array($sql)){

  $sqlsum=mysql_query("SELECT count(candidates) as total,id,candidates from flp_submit_votes where position ='President' and candidates='{$row['name']}' order by count(candidates) + 0 desc ");
  $row_sum=mysql_fetch_array($sqlsum);
?>
                         <div class="col-xl-12 col-lg-6 col-sm-12 " >
                              <div class="media px-1" >
                                <div class="second-content align-self-center mx-auto text-center">
                                   <span class="font-large-1 text-weight-bold " >

                                     <b <?php
                                      if ($row_sum['candidates'] !== null) {
                                       ?>
                                       style="float: right;color: red !important"
                                       onclick="window.location.href='view_results.php?view=1&name=<?php echo $row_sum['candidates'] ?>' "

                                       <?php
                                      }else if($row_sum['candidates'] === null){
                                        ?>
                                        onclick="window.alert('There is no votes')"
                                        <?php
                                      }
                                      ?> class="h6" style="float: right;color: red !important">
                                      <?php echo $row_sum['total']; ?> Votes<br>
                                     </b>
                                    
                                  </span>                                     
                                   </div>
                                      <b style="color: black"><?php echo $row['name'] ?>
                                    </b>               
                                    <br>
                              </div>
                               <progress class="progress progress-sm progress-danger" value="100" max="100">
                               </progress>
                         </div>
                          
<?php
}
?>
 </div>
</div>                                
<?php
}
?>




<?php
if (isset($_POST['submit2'])) {
?>
<div class="col-xs-12" style="padding: 0px;">
    <div class="row">
<?php
$sql=mysql_query("SELECT * from flp_candidates where date ='$date' and position ='Vice President' ");
while($row=mysql_fetch_array($sql)){

  $sqlsum=mysql_query("SELECT count(candidates) as total,id,candidates from flp_submit_votes where position ='Vice President' and candidates='{$row['name']}' order by count(candidates) + 0 desc ");
  $row_sum=mysql_fetch_array($sqlsum);
?>
                         <div class="col-xl-12 col-lg-6 col-sm-12 " >
                              <div class="media px-1" >
                                <div class="second-content align-self-center mx-auto text-center">
                                   <span class="font-large-1 text-weight-bold " >

                                     <b <?php
                                      if ($row_sum['id'] !== null) {
                                       ?>
                                       style="float: right;color: red !important"
                                       onclick="window.location.href='view_results.php?view=1&name=<?php echo $row_sum['candidates'] ?>' "

                                       <?php
                                      }else if($row_sum['id'] === null){
                                        ?>
                                        onclick="window.alert('There is no votes')"
                                        <?php
                                      }
                                      ?> class="h6" style="float: right;color: red !important">
                                      <?php echo $row_sum['total']; ?> Votes<br>
                                     </b>
                                    
                                  </span>                                     
                                   </div>
                                      <b style="color: black"><?php echo $row['name'] ?>
                                    </b>               
                                    <br>
                              </div>
                               <progress class="progress progress-sm progress-danger" value="100" max="100">
                               </progress>
                         </div>
                          
<?php
}
?>
 </div>
</div>                                
<?php
}
?>







<?php
if (isset($_POST['submit3'])) {
?>
<div class="col-xs-12" style="padding: 0px;">
    <div class="row">
<?php
$sql=mysql_query("SELECT * from flp_candidates where date ='$date' and position ='Secretary' ");
while($row=mysql_fetch_array($sql)){

  $sqlsum=mysql_query("SELECT count(candidates) as total,id,candidates from flp_submit_votes where position ='Secretary' and candidates='{$row['name']}' order by count(candidates) + 0 desc ");
  $row_sum=mysql_fetch_array($sqlsum);
?>
                         <div class="col-xl-12 col-lg-6 col-sm-12 " >
                              <div class="media px-1" >
                                <div class="second-content align-self-center mx-auto text-center">
                                   <span class="font-large-1 text-weight-bold " >

                                     <b <?php
                                      if ($row_sum['id'] !== null) {
                                       ?>
                                       style="float: right;color: red !important"
                                       onclick="window.location.href='view_results.php?view=1&name=<?php echo $row_sum['candidates'] ?>' "

                                       <?php
                                      }else if($row_sum['id'] === null){
                                        ?>
                                        onclick="window.alert('There is no votes')"
                                        <?php
                                      }
                                      ?> class="h6" style="float: right;color: red !important">
                                      <?php echo $row_sum['total']; ?> Votes<br>
                                     </b>
                                    
                                  </span>                                     
                                   </div>
                                      <b style="color: black"><?php echo $row['name'] ?>
                                    </b>               
                                    <br>
                              </div>
                               <progress class="progress progress-sm progress-danger" value="100" max="100">
                               </progress>
                         </div>
                          
<?php
}
?>
 </div>
</div>                                
<?php
}
?>










<?php
if (isset($_POST['submit4'])) {
?>
<div class="col-xs-12" style="padding: 0px;">
    <div class="row">
<?php
$sql=mysql_query("SELECT * from flp_candidates where date ='$date' and position ='Treasurer' ");
while($row=mysql_fetch_array($sql)){

  $sqlsum=mysql_query("SELECT count(candidates) as total,id,candidates from flp_submit_votes where position ='Treasurer' and candidates='{$row['name']}' order by count(candidates) + 0 desc ");
  $row_sum=mysql_fetch_array($sqlsum);
?>
                         <div class="col-xl-12 col-lg-6 col-sm-12 " >
                              <div class="media px-1" >
                                <div class="second-content align-self-center mx-auto text-center">
                                   <span class="font-large-1 text-weight-bold " >

                                     <b <?php
                                      if ($row_sum['id'] !== null) {
                                       ?>
                                       style="float: right;color: red !important"
                                       onclick="window.location.href='view_results.php?view=1&name=<?php echo $row_sum['candidates'] ?>' "

                                       <?php
                                      }else if($row_sum['id'] === null){
                                        ?>
                                        onclick="window.alert('There is no votes')"
                                        <?php
                                      }
                                      ?> class="h6" style="float: right;color: red !important">
                                      <?php echo $row_sum['total']; ?> Votes<br>
                                     </b>
                                    
                                  </span>                                     
                                   </div>
                                      <b style="color: black"><?php echo $row['name'] ?>
                                    </b>               
                                    <br>
                              </div>
                               <progress class="progress progress-sm progress-danger" value="100" max="100">
                               </progress>
                         </div>
                          
<?php
}
?>
 </div>
</div>                                
<?php
}
?>



<?php
if (isset($_POST['submit5'])) {
?>
<div class="col-xs-12" style="padding: 0px;">
    <div class="row">
<?php
$sql=mysql_query("SELECT * from flp_candidates where date ='$date' and position ='Auditor' ");
while($row=mysql_fetch_array($sql)){

  $sqlsum=mysql_query("SELECT count(candidates) as total,id,candidates from flp_submit_votes where position ='Auditor' and candidates='{$row['name']}' order by count(candidates) + 0 desc ");
  $row_sum=mysql_fetch_array($sqlsum);
?>
                         <div class="col-xl-12 col-lg-6 col-sm-12 " >
                              <div class="media px-1" >
                                <div class="second-content align-self-center mx-auto text-center">
                                   <span class="font-large-1 text-weight-bold " >

                                     <b <?php
                                      if ($row_sum['id'] !== null) {
                                       ?>
                                       style="float: right;color: red !important"
                                       onclick="window.location.href='view_results.php?view=1&name=<?php echo $row_sum['candidates'] ?>' "

                                       <?php
                                      }else if($row_sum['id'] === null){
                                        ?>
                                        onclick="window.alert('There is no votes')"
                                        <?php
                                      }
                                      ?> class="h6" style="float: right;color: red !important">
                                      <?php echo $row_sum['total']; ?> Votes<br>
                                     </b>
                                    
                                  </span>                                     
                                   </div>
                                      <b style="color: black"><?php echo $row['name'] ?>
                                    </b>               
                                    <br>
                              </div>
                               <progress class="progress progress-sm progress-danger" value="100" max="100">
                               </progress>
                         </div>
                          
<?php
}
?>
 </div>
</div>                                
<?php
}
?>





<?php
if (isset($_POST['submit6'])) {
?>
<div class="col-xs-12" style="padding: 0px;">
    <div class="row">
<?php
$sql=mysql_query("SELECT * from flp_candidates where date ='$date' and position ='PIO' ");
while($row=mysql_fetch_array($sql)){

  $sqlsum=mysql_query("SELECT count(candidates) as total,id,candidates from flp_submit_votes where position ='PIO' and candidates='{$row['name']}' order by count(candidates) + 0 desc ");
  $row_sum=mysql_fetch_array($sqlsum);
?>
                         <div class="col-xl-12 col-lg-6 col-sm-12 " >
                              <div class="media px-1" >
                                <div class="second-content align-self-center mx-auto text-center">
                                   <span class="font-large-1 text-weight-bold " >

                                     <b <?php
                                      if ($row_sum['id'] !== null) {
                                       ?>
                                       style="float: right;color: red !important"
                                       onclick="window.location.href='view_results.php?view=1&name=<?php echo $row_sum['candidates'] ?>' "

                                       <?php
                                      }else if($row_sum['id'] === null){
                                        ?>
                                        onclick="window.alert('There is no votes')"
                                        <?php
                                      }
                                      ?> class="h6" style="float: right;color: red !important">
                                      <?php echo $row_sum['total']; ?> Votes<br>
                                     </b>
                                    
                                  </span>                                     
                                   </div>
                                      <b style="color: black"><?php echo $row['name'] ?>
                                    </b>               
                                    <br>
                              </div>
                               <progress class="progress progress-sm progress-danger" value="100" max="100">
                               </progress>
                         </div>
                          
<?php
}
?>
 </div>
</div>                                
<?php
}
?>










<?php
if (isset($_POST['submit7'])) {
?>
<div class="col-xs-12" style="padding: 0px;">
    <div class="row">
<?php
$sql=mysql_query("SELECT * from flp_candidates where date ='$date' and position ='Business Manager' ");
while($row=mysql_fetch_array($sql)){

  $sqlsum=mysql_query("SELECT count(candidates) as total,id,candidates from flp_submit_votes where position ='Business Manager' and candidates='{$row['name']}' order by count(candidates) + 0 desc ");
  $row_sum=mysql_fetch_array($sqlsum);
?>
                         <div class="col-xl-12 col-lg-6 col-sm-12 " >
                              <div class="media px-1" >
                                <div class="second-content align-self-center mx-auto text-center">
                                   <span class="font-large-1 text-weight-bold " >

                                     <b <?php
                                      if ($row_sum['id'] !== null) {
                                       ?>
                                       style="float: right;color: red !important"
                                       onclick="window.location.href='view_results.php?view=1&name=<?php echo $row_sum['candidates'] ?>' "

                                       <?php
                                      }else if($row_sum['id'] === null){
                                        ?>
                                        onclick="window.alert('There is no votes')"
                                        <?php
                                      }
                                      ?> class="h6" style="float: right;color: red !important">
                                      <?php echo $row_sum['total']; ?> Votes<br>
                                     </b>
                                    
                                  </span>                                     
                                   </div>
                                      <b style="color: black"><?php echo $row['name'] ?>
                                    </b>               
                                    <br>
                              </div>
                               <progress class="progress progress-sm progress-danger" value="100" max="100">
                               </progress>
                         </div>
                          
<?php
}
?>
 </div>
</div>                                
<?php
}
?>




<?php
if (isset($_POST['submit8'])) {
?>
<div class="col-xs-12" style="padding: 0px;">
    <div class="row">
<?php
$sql=mysql_query("SELECT * from flp_candidates where date ='$date' and position ='Muse' ");
while($row=mysql_fetch_array($sql)){

  $sqlsum=mysql_query("SELECT count(candidates) as total,id,candidates from flp_submit_votes where position ='Muse' and candidates='{$row['name']}' order by count(candidates) + 0 desc ");
  $row_sum=mysql_fetch_array($sqlsum);
?>
                         <div class="col-xl-12 col-lg-6 col-sm-12 " >
                              <div class="media px-1" >
                                <div class="second-content align-self-center mx-auto text-center">
                                   <span class="font-large-1 text-weight-bold " >

                                     <b <?php
                                      if ($row_sum['id'] !== null) {
                                       ?>
                                       style="float: right;color: red !important"
                                       onclick="window.location.href='view_results.php?view=1&name=<?php echo $row_sum['candidates'] ?>' "

                                       <?php
                                      }else if($row_sum['id'] === null){
                                        ?>
                                        onclick="window.alert('There is no votes')"
                                        <?php
                                      }
                                      ?> class="h6" style="float: right;color: red !important">
                                      <?php echo $row_sum['total']; ?> Votes<br>
                                     </b>
                                    
                                  </span>                                     
                                   </div>
                                      <b style="color: black"><?php echo $row['name'] ?>
                                    </b>               
                                    <br>
                              </div>
                               <progress class="progress progress-sm progress-danger" value="100" max="100">
                               </progress>
                         </div>
                          
<?php
}
?>
 </div>
</div>                                
<?php
}
?>






<?php
if (isset($_POST['submit9'])) {
?>
<div class="col-xs-12" style="padding: 0px;">
    <div class="row">
<?php
$sql=mysql_query("SELECT * from flp_candidates where date ='$date' and position ='Sentinel' ");
while($row=mysql_fetch_array($sql)){

  $sqlsum=mysql_query("SELECT count(candidates) as total,id,candidates from flp_submit_votes where position ='Sentinel' and candidates='{$row['name']}' order by count(candidates) + 0 desc ");
  $row_sum=mysql_fetch_array($sqlsum);
?>
                         <div class="col-xl-12 col-lg-6 col-sm-12 " >
                              <div class="media px-1" >
                                <div class="second-content align-self-center mx-auto text-center">
                                   <span class="font-large-1 text-weight-bold " >

                                     <b <?php
                                      if ($row_sum['id'] !== null) {
                                       ?>
                                       style="float: right;color: red !important"
                                       onclick="window.location.href='view_results.php?view=1&name=<?php echo $row_sum['candidates'] ?>' "

                                       <?php
                                      }else if($row_sum['id'] === null){
                                        ?>
                                        onclick="window.alert('There is no votes')"
                                        <?php
                                      }
                                      ?> class="h6" style="float: right;color: red !important">
                                      <?php echo $row_sum['total']; ?> Votes<br>
                                     </b>
                                    
                                  </span>                                     
                                   </div>
                                      <b style="color: black"><?php echo $row['name'] ?>
                                    </b>               
                                    <br>
                              </div>
                               <progress class="progress progress-sm progress-danger" value="100" max="100">
                               </progress>
                         </div>
                          
<?php
}
?>
 </div>
</div>                                
<?php
}
?>
