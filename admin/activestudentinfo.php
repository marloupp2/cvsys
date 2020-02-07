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
<button type="button" data-toggle="modal" data-target="#a<?php echo $row['school_id']; ?>" class="btn btn-outline-danger darken-4 btn-sm btn-rounded waves-effect"><i class="fas fa-info"></i> Info</button>
<!-- Modal -->
<div class="modal fade" id="a<?php echo $row['school_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      
<div id="radius"  class="card border-green mb-3 col-md-12" style="padding: 0px;">
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
  <div class="card-body text-green">
    <div id="id_body" class="card-text row" style="height: 250px;">
      <div class="col-md-3 col-3 text-white">
        <img class="border-white mt-3 " src="../images/<?php echo $row['profile_picture']; ?>" width="100%" style="float: left;">
      </div>
      <div class="col-md-2 col-2">
      </div>
        <div class="col-md-7 col-7" ><br>
          <b class="col-md-12 col-12" id="info" style="border-style: ridge;">
          <?php echo $row['full_name']; ?></b><br>
          <b id="info2">Name</b><br>
          <b class="col-md-12 col-12" id="info" style="border-style: ridge;">
          <?php echo $row['course']; ?></b><br>
          <b id="info2">Course</b><br>
          <b class="col-md-12 col-12" id="info" style="border-style: ridge;">
          <?php echo $row['year_and_section']; ?> <?php echo $row['section']; ?></b><br>
          <b id="info2">Year & Section</b><br>
          <b class="col-md-12 col-12" id="info" style="border-style: ridge;">
          <?php echo $row['phone']; ?></b><br>
          <b id="info2">Contact</b>
        </div>
    </div>
  </div>
  <div id="id_footer" class="card-footer bg-transparent">
    <b id="info2" style="float: left;">
      ID No: <?php echo $row['school_id']; ?>
    </b>
  </div>
</div>
<!-- Card -->
    </div>
  </div>