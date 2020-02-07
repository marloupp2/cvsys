<style>
@media screen and (max-width: 600px) {
  img#pp {
    width: 100px;
    height: 100px;
  }
}
@media screen and (max-width: 600px) {
  img#img {
    width: 550px;
    height: 1050px;
  }
}
</style>
<!-- Button trigger modal -->
<button type="button" data-toggle="modal" data-target="#b<?php echo $row['school_id']; ?>" class="btn btn-outline-purple darken-4 btn-sm btn-rounded waves-effect">
  <i class="fas fa-qrcode"></i> QR code</button>
</button>

<!-- Modal -->
<div class="modal fade" id="b<?php echo $row['school_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div id="radius"  class="card border-green mb-3 col-md-12" style="padding: 0px;">
  <div id="id_header" class="card-header bg-transparent" style="padding: 3px">
    <img src="../images/logo.png" width="80px" style="float: left; margin-left: 20px;">

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
        <img id="pp" class="border-white mt-3 " src="../images/<?php echo $row['profile_picture']; ?>" width="100%" style="float: left;">
      </div>
      <div class="col-md-2 col-2">
      </div>
        <div id="qrcode" class="col-md-7 col-7" ><br>
          <?php
echo '<img id="img" src="https://chart.googleapis.com/chart?chs=250x220&cht=qr&chl='.$row['qrcode'].'" title="from '. $row["full_name"].' ">';
?>
        </div>
    </div>
  </div>
      <div id="id_footer" class="card-footer bg-transparent">
    <b id="info2" style="float: left;">
      ID No: <?php echo $row['school_id']; ?>
    </b>
  </div>
    </div>
  </div>
</div>