  
  <div class="container  mt-5" >
    
      <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
  width="100%">
  <thead>
    <tr class="col-ms-12">

      </th>
      <th class="th-sm-2 col-ms-2">School ID
          

      <th class="th-sm-2 col-ms-2">Name

      </th>
      <th class="th-sm-2 col-ms-2">Course
          
    </th>
      <th class="th-sm-2 col-ms-2">Year & Section

    
      </th>
        <th class="th-sm-2 col-ms-2"><center>Update</center>

      </th>
    </tr>
  </thead>
  <tbody>
      <?php 
      include("../../db/db.php");
      
      $sql=mysql_query("SELECT * FROM voters");
      while($row=mysql_fetch_array($sql)){
      
      ?>
    <tr>
      <td  style="padding: 0;"><?php echo $row['sid']; ?></td>
      <td  style="padding: 0;"><?php echo $row['name']; ?></td>
      <td  style="padding: 0;"><?php echo $row['course']; ?></td>
      <td  style="padding: 0;"><?php echo $row['ys']; ?></td>
      <td  align="center"  style="padding: 0;"><button type="button" class="btn btn-outline-indigo btn-sm btn-rounded waves-effect"><i class="fas fa-edit"></i> Edit</button></td>
    </tr> 
    <?php } ?>
  </tbody> 
</table>
      
  </div>  

<?php 

include('footer.php');
?>

