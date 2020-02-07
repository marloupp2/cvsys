<style>
 #id_header,#id_footer {
  background-image: linear-gradient(#ffff1a,#ffffb3);
}
@media screen and (max-width: 600px) {
  strong,h2 {
    font-size: 12px;
  }
}@media screen and (max-width: 600px) {
  img#img {
    width: 100px;
    height: 150px;
  }
}
#radius{
  border-radius: 10px;
  
}#id_header {
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
}#id_body{
  background-image: url(../images/cpsu_scc.jpg);
  width: 100%;
  height: auto;
  background-size: cover;
}#id_footer{
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
}b#info{
   font: bold 16px/25px Georgia, sans-serif;
   color: black;
   background-color: #f2f2f2;
   background: rgba(255, 255, 255, 0.6);
}b#info2{
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  color: white;
  font: bold 16px/16px Georgia, sans-serif;

}@media screen and (max-width: 600px) {
  b#info2 {
    font-size: 10px;
  }
</style>  
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
      include('../../../db/db.php');
      $date = date('Y');
      $sql=mysql_query("SELECT * FROM student_info where date_year='$date' ");
      while($row=mysql_fetch_array($sql)){
      
      ?>
    <tr>
      <td  style="padding: 0;"><?php echo $row['school_id']; ?></td>
      <td  style="padding: 0;"><?php echo $row['full_name']; ?></td>
      <td  style="padding: 0;"><?php echo $row['course']; ?></td>
      <td  style="padding: 0;"><?php echo $row['year']; ?> <?php echo $row['section']; ?></td>
      <td  align="center"  style="padding: 0;">
        <button type="button"  data-toggle="modal" data-target="#aa<?php echo $row['id']; ?>" class="btn btn-outline-indigo btn-sm btn-rounded waves-effect"><i class="fas fa-edit"></i> Edit</button></td>
    </tr> 

     <div class="modal fade" id="aa<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">

 <div id="radius"  class="card border-green mb-3 col-md-12" style="padding: 0px;">
  <center>
  <div id="id_header" class="card-header bg-transparent" style="padding: 3px">
    <img id="img" src="../images/logo.png" width="80px" style="float: left; margin-left: 20px;">

    <strong>
       <h1 class="font-weight-bold" style="margin-top: 5px;color: green;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;font: bold 16px/20px Georgia, sans-serif;">
         <u>CENTRAL PHILIPPINE STATE UNIVERSITY</u><br>
       </h1>
        <p style="margin-top: -7px; margin-bottom: 0px;">
          Don Justo V. Valmayor Campus<br>
         San Carlos City, Negros Occidental
        </p>
    </strong>
  </div>
</center>

  <div class="card-body text-green">
    <div id="id_body" class="card-text row" style="height: 250px;">
      <div class="col-md-2 col-2">
      </div>
      <form action="../../../process/update_voters.php" method="POST">
        <div class="col-md-8 col-8" ><br>
          <b>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <input type="text" name="a" class="form-control col-md-12 col-12" value="<?php echo $row['full_name']; ?>"></b><br>
          <b id="info2">Name</b><br>
           <b>
          <input type="text" name="b" class="form-control col-md-12 col-12" value="<?php echo $row['school_id']; ?>"></b><br>
          <b id="info2">School ID</b><br>
          <b>
          <input type="text" name="c" class="form-control col-md-12 col-12" value="<?php echo $row['course']; ?>"></b><br>
          <b id="info2">Course</b><br>
          <b>
          <input type="text" name="d" class="form-control col-md-12 col-12" value="<?php echo $row['year']; ?>"></b><br>
          <b id="info2">Year</b><br>
          <b>
          <input type="text" name="e" class="form-control col-md-12 col-12" value="<?php echo $row['section']; ?>"></b><br>
          <b id="info2">Section</b><br>
         
        </div>
    </div>
  </div>
  <div id="id_footer" class="card-footer bg-transparent">
    <b id="info2" style="float: right;">
      <input type="submit" name="update" value="Update" >
    </b>
  </div>
</div>
</form>
    </div>
  </div>

    <?php } ?>
  </tbody> 
</table>
      
      
  </div>  

<?php 

include('footer.php');
?>

