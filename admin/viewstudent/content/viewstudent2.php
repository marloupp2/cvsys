

<div class="container mt-5">
  <table id="dtHorizontalVerticalExample2" class="table  table-bordered table-sm " cellspacing="0"
  width="100%">
  <thead>
    <tr>
      <th>School ID</th>
      <th>Name</th>
      <th>Year Section</th>
      <th>Course</th>
      <th>QRCODE</th>
      <th>Viewinfo</th>

    </tr>
  </thead>
  <tbody>
            <?php 
          include('../db/db.php');
          $datestart=date('Y');
$sql1=mysql_query("SELECT * from voters_registered");
$row1=mysql_fetch_array($sql1);

if ($datestart == $row1['date_year']) {

          $sql=mysql_query("SELECT * from voters_registered");
          while($row=mysql_fetch_array($sql)){
          
          ?>
    <tr>
      <td><?php echo $row['school_id']; ?></td>
      <td><?php echo $row['full_name']; ?></td>
      <td><?php echo $row['year_and_section']; ?></td>
      <td><?php echo $row['course']; ?></td>
      <td  align="center"  style="padding: 0;">
        <?php include('qrgenerator.php'); ?>
      </td> 
      <td  align="center"  style="padding: 0;">
<?php include('activestudentinfo.php'); ?>
      </td>
    </tr>
   <?php } ?>


 <?php }else{
$sql2 = mysql_query("INSERT INTO studenthistory SELECT * FROM accountstudent");


  $delete=mysql_query("DELETE from accountstudent");



 } ?>
  </tbody>
</table>
</div>


<?php 

include('footer.php');
?>