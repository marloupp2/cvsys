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
$sqll=mysql_query("SELECT * from ssg_candidates where date ='$date' and position ='President' ");
while($roww=mysql_fetch_array($sqll)){

  $sqlsumm=mysql_query("SELECT count(candidates) as total,id,candidates from ssg_submit_votes where position ='President' and candidates='{$roww['name']}' order by count(candidates) + 0 desc ");
  $row_summ=mysql_fetch_array($sqlsumm);
?>
                         <div class="col-xl-12 col-lg-6 col-sm-12 " >
                              <div class="media px-1" >
                                <div class="second-content align-self-center mx-auto text-center">
                                   <span class="font-large-1 text-weight-bold " >

                                     <b <?php
                                      if ($row_summ['id'] !== null) {
                                       ?>
                                       style="float: right;color: red !important"
                                       onclick="window.location.href='view_results2.php?view=1&name=<?php echo $row_summ['candidates'] ?>' "

                                       <?php
                                      }else if($row_summ['id'] === null){
                                        ?>
                                        onclick="window.alert('There is no votes')"
                                        <?php
                                      }
                                      ?> class="h6" style="float: right;color: red !important">
                                      <?php echo $row_summ['total']; ?> Votes<br>
                                     </b>
                                    
                                  </span>                                     
                                   </div>
                                      <b style="color: black"><?php echo $roww['name'] ?>
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
$sqll=mysql_query("SELECT * from ssg_candidates where date ='$date' and position ='Vice President' ");
while($roww=mysql_fetch_array($sqll)){

  $sqlsumm=mysql_query("SELECT count(candidates) as total,id,candidates from ssg_submit_votes where position ='Vice President' and candidates='{$roww['name']}' order by count(candidates) + 0 desc ");
  $row_summ=mysql_fetch_array($sqlsumm);
?>
                         <div class="col-xl-12 col-lg-6 col-sm-12 " >
                              <div class="media px-1" >
                                <div class="second-content align-self-center mx-auto text-center">
                                   <span class="font-large-1 text-weight-bold " >

                                     <b <?php
                                      if ($row_summ['id'] !== null) {
                                       ?>
                                       style="float: right;color: red !important"
                                       onclick="window.location.href='view_results2.php?view=1&name=<?php echo $row_summ['candidates'] ?>' "

                                       <?php
                                      }else if($row_summ['id'] === null){
                                        ?>
                                        onclick="window.alert('There is no votes')"
                                        <?php
                                      }
                                      ?> class="h6" style="float: right;color: red !important">
                                      <?php echo $row_summ['total']; ?> Votes<br>
                                     </b>
                                    
                                  </span>                                     
                                   </div>
                                      <b style="color: black"><?php echo $roww['name'] ?>
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
$sqll=mysql_query("SELECT * from ssg_candidates where date ='$date' and position ='Senator' ");
while($roww=mysql_fetch_array($sqll)){

  $sqlsumm=mysql_query("SELECT count(candidates) as total,id,candidates from ssg_submit_votes where position ='Senator' and candidates='{$roww['name']}' order by count(candidates) + 0 desc ");
  $row_summ=mysql_fetch_array($sqlsumm);
?>
                         <div class="col-xl-12 col-lg-6 col-sm-12 " >
                              <div class="media px-1" >
                                <div class="second-content align-self-center mx-auto text-center">
                                   <span class="font-large-1 text-weight-bold " >

                                     <b <?php
                                      if ($row_summ['id'] !== null) {
                                       ?>
                                       style="float: right;color: red !important"
                                       onclick="window.location.href='view_results2.php?view=1&name=<?php echo $row_summ['candidates'] ?>' "

                                       <?php
                                      }else if($row_summ['id'] === null){
                                        ?>
                                        onclick="window.alert('There is no votes')"
                                        <?php
                                      }
                                      ?> class="h6" style="float: right;color: red !important">
                                      <?php echo $row_summ['total']; ?> Votes<br>
                                     </b>
                                    
                                  </span>                                     
                                   </div>
                                      <b style="color: black"><?php echo $roww['name'] ?>
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