

<div class="container mt-5">
  <table id="dtHorizontalVerticalExample2" class="table  table-bordered table-sm " cellspacing="0"
  width="100%">
  <thead>
    <tr>
      <th>Name</th>
      <th>Year Section</th>
      <th>Course</th>
      <th>QRCODE</th>
      <th>Viewinfo</th>

    </tr>
  </thead>
  <tbody>
            <?php 
          include('../../db/db.php');
          $datestart=date('Y');
$sql1=mysql_query("select * from accountstudent");
$row1=mysql_fetch_array($sql1);

if ($datestart == $row1['year']) {

          $sql=mysql_query("select * from accountstudent");
          while($row=mysql_fetch_array($sql)){
          
          ?>
    <tr>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['ys']; ?></td>
      <td><?php echo $row['course']; ?></td>
      <td  align="center"  style="padding: 0;">
        <?php include('../../qrgenerator.php'); ?>
      </td> 
      <td  align="center"  style="padding: 0;">
<?php include('../../activestudentinfo.php'); ?>

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