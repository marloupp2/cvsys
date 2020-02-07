<?php
include('header_link.php');
include('header.php');
?>

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

 <div class="robust-content content container-fluid">
     <div class="content-wrapper" style="padding: 0px;">
       <div class="row">
          <div class="col-md-6 col-6">
            <a data-toggle="modal" data-target="#modalContactForm2">
              <button class="btn btn-outline-danger">Add Voter(s)</button>
            </a>
          </div>
        </div><br>
 





<!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified pills-white container p-0" role="tablist" >
  <li class="nav-item  col-md-4 col-sm-4 col-xs-4 m-0 p-0">
    <a class="nav-link active" data-toggle="tab" href="#panel555a" role="tab" style="color: #dc3545!important">
      <i class="fas fa-user pr-2  p-0 m-0"></i>VOTERS</a>
  </li>
  <li class="nav-item col-md-4 col-sm-4 col-xs-4 m-0 p-0">
    <a class="nav-link" data-toggle="tab" href="#panel666a" role="tab" style="color: #dc3545!important">
      <i class="fas fa-heart p-0 m-0"></i>ACTIVE VOTERS</a>
  </li>
   <li class="nav-item  col-md-4 col-sm-4 col-xs-4 m-0 p-0">
    <a class="nav-link" data-toggle="tab" href="#panel777a" role="tab" style="color: #dc3545!important">
      <i class="fas fa-heart p-0 m-0"></i>VOTERS HISTORY</a>
  </li>
</ul>
<!-- Nav tabs -->

<!-- Tab panels -->
<div class="tab-content">

  <!-- Panel 1 -->
  <div class="tab-pane fade in show active" id="panel555a" role="tabpanel">

    <!-- Nav tabs -->
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
      <form action="process/update_voters.php" method="POST">
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
      <input type="submit" name="update" value="Update">
    </b>
  </div>
</div>
</form>
    </div>
  </div>

    <?php } ?>
  </tbody> 
</table>
    <!-- Nav tabs -->

  </div>
  <!-- Panel 1 -->

  <!-- Panel 2 -->
  <div class="tab-pane fade" id="panel666a" role="tabpanel">

    <?php include('viewstudent/content/viewstudent2.php'); ?>

  </div>
  <!-- Panel 2 -->

   <div class="tab-pane fade" id="panel777a" role="tabpanel">

    <p class="pt-5">dada.</p>

  </div>



</div>
<!-- Tab panels -->



     </div>
  </div>


 <div class="modal fade" id="modalContactForm2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
<!-- Nav tabs -->

  <ul class="nav nav-tabs md-tabs nav-justified" role="tablist">
  <li class="nav-item ">
    <a class="nav-link active" data-toggle="tab" href="#panel555" role="tab" style="color: #dc3545!important">
      <i class="fas fa-file-csv  pl-2"></i>CSV file</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#panel666" role="tab" style="color: #dc3545!important">
      <i class="fas fa-user-plus pl-2"></i>Add voters</a>
  </li>
 </ul>
<!-- Nav tabs -->

<!-- Tab panels -->
<div class="tab-content">
  <!-- Panel 1 -->
  <div class="tab-pane fade in show active" id="panel555" role="tabpanel">

    <!-- Nav tabs -->
<form class="md-form" action="process/importstudent.php" method="POST" enctype="multipart/form-data">
<br><br>
  <input type="file" name="file" class="form-control mt-5 btn-outline-danger col-md-12"  accept=".csv">

<br><br><br><br>
<center>
<input type="submit" name="submit" value="Upload" class="btn btn-outline-danger">
</center>
  </form>
    <!-- Nav tabs -->

  </div>
  <!-- Panel 1 -->

  <!-- Panel 2 -->
  <div class="tab-pane fade" id="panel666" role="tabpanel">
<form class="md-form" action="process/addstudentprocess.php" method="POST"  enctype="multipart/form-data">    
<br><br>
        <div class="form-body">
                <div class="row">
                   
                  <div class="col-md-12 form-group " style="margin-bottom: 0px;">
                    <div id="warn1" style="color: red;">Fullname</div>
                    <div class="position-relative has-icon-left">
                      <input type="text" class="form-control danger" name="fullname" id="fname" placeholder="Fullname" style="text-indent: 29px;">
                      <div class="form-control-position" style="margin-top: 4px !important;">
                        <i class="fas fa-user-tie danger fa-2x"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 form-group " style="margin-bottom: 0px;">
                    <div id="warn3" style="color: red;">ID number</div>
                    <div class="position-relative has-icon-left">
                      <input type="number"  class="form-control" id="id_number" name="id_number" placeholder="ID number" style="text-indent: 29px;">
                      <div class="form-control-position" style="margin-top: 4px !important;">
                        <i class="far fa-id-card danger fa-2x"></i>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 form-group" style="margin-bottom: 0px;">
                    <div id="warn4" style="color: red;">Course</div>
                    <div class="position-relative has-icon-left" class="form-control">
                      <select required="" name="course" id="course" style="border-color: #d9d9d9;text-indent: 29px;">
                        <option  disabled selected >Select course</option>
                        <option value="CCS" >CCS</option>
                        <option value="CTE">CTE</option>
                        <option value="CCJE">CCJE</option>
                        <option value="CBM">CBM</option>
                        <option value="CAF">CAF</option>
                      </select> 
                      <div class="form-control-position" style="margin-top: 4px !important;">
                        <i class="fas fa-user-graduate fa-2x danger"></i>
                      </div>
                    </div>
                  </div>

                   <div class="col-md-12 form-group " style="margin-bottom: 0px;">
                    <div id="warn5" style="color: red;">Year</div>
                    <div class="position-relative has-icon-left">
                      <select required="" name="year_and_section" id="year_and_section" style="border-color: #d9d9d9;text-indent: 29px;">
                        <option  disabled selected >Select Year</option>
                        <option value="1st year" >1st year</option>
                        <option value="2nd year">2nd year</option>
                        <option value="3rd year">3rd year</option>
                        <option value="4th year">4th year</option>
                      </select> 
                      <div class="form-control-position" style="margin-top: 4px !important;">
                        <i class="fas fa-level-up-alt fa-2x danger"></i>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 form-group ">
                    <div id="warn6" style="color: red;">Section</div>
                    <div class="position-relative has-icon-left">
                       <select required="" name="section" id="section" style="border-color: #d9d9d9;text-indent: 29px;">
                        <option  disabled selected >Select Section</option>
                        <option value="Section A" >Section A</option>
                        <option value="Section B">Section B</option>
                        <option value="Section C">Section C</option>
                        <option value="Section D">Section D</option>
                        <option value="Section E">Section E</option>
                      </select> 
                      <div class="form-control-position" style="margin-top: 4px !important;">
                        <i class="fas fa-door-open danger fa-2x"></i>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
      <div class="modal-footer d-flex justify-content-center">
          <input type="submit" name="submiters" class="btn btn-outline-danger waves-effect" class="fas fa-save" value="Save"> 
      </div>
     </form>

  </div>
  <!-- Panel 2 -->

</div>
<!-- Tab panels -->

    </div>
  </div>
</div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>



<?php
include('footer_link.php');
?>
<script>
    $(document).ready(function () {
$('#dtHorizontalVerticalExample').DataTable({
"scrollY": "50vh",
"scrollCollapse": true,
});
$('.dataTables_length').addClass('bs-select');
});


        $(document).ready(function () {
$('#dtHorizontalVerticalExample2').DataTable({
"scrollY": "50vh",
"scrollCollapse": true,
});
$('.dataTables_length').addClass('bs-select');
});
</script>

