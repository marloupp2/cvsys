


<!-- Card -->
<div class="container">

  <!-- Card image -->
  <div class="view view-cascade gradient-card-header bg-danger">

    <!-- Title -->
    <h2 class="card-header-title mb-3 text-white text-white p-1 "><b><center>FLP Ballot</center></b></h2>

  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-left">


    <b id="flp1"> </b> <strong><small>(President)</small></strong>
    <div class="">
       <progress class="progress progress-sm progress-danger" value="100" max="100"></progress>
    </div>
        <b id="flp2"> </b> <strong><small>(Vice-President)</small></strong>
    <div class="">
       <progress class="progress progress-sm progress-danger" value="100" max="100"></progress>
    </div>
    <b id="flp3"> </b> <strong><small>(Secretary)</small></strong>
    <div class="">
       <progress class="progress progress-sm progress-danger" value="100" max="100"></progress>
    </div>
    <b id="flp4"> </b> <strong><small>(Treasurer)</small></strong>
    <div class="">
       <progress class="progress progress-sm progress-danger" value="100" max="100"></progress>
    </div>
    <b id="flp5"> </b> <strong><small>(Auditor)</small></strong>
    <div class="">
      <progress class="progress progress-sm progress-danger" value="100" max="100"></progress>
    </div>
    <b id="flp6"> </b> <strong><small>(PIO)</small></strong>
    <div class="">
       <progress class="progress progress-sm progress-danger" value="100" max="100"></progress>
    </div>
    <b id="flp7"> </b> <strong><small>(VBusiness Manager)</small></strong>
    <div class="">
       <progress class="progress progress-sm progress-danger" value="100" max="100"></progress>
    </div>
    <b id="flp8"> </b> <strong><small>(Muse)</small></strong>
    <div class="">
       <progress class="progress progress-sm progress-danger" value="100" max="100"></progress>
    </div>
    <b id="flp9"> </b> <strong><small>(Sentinel)</small></strong>
    <div class="">
       <progress class="progress progress-sm progress-danger" value="100" max="100"></progress>
    </div>
      <center>
        <form action="votesubmit.php" method="POST">
          <input type="hidden" name="ids" value="<?php echo $fetch_info['id'] ?>">
          <input type="hidden" name="name" value="<?php echo $fetch_info['full_name'] ?>">
          <input type="hidden" name="school_id" value="<?php echo $fetch_info['school_id'] ?>">
          <input type="hidden" name="course" value="<?php echo $fetch_info['course'] ?>">
          <input type="hidden" name="year" value="<?php echo $fetch_info['year_and_section'] ?>">
          <input type="hidden" name="section" value="<?php echo $fetch_info['section'] ?>">
          <input type="hidden" id="total_size1" name="flp1"/>
          <input type="hidden" id="total_size2" name="flp2"/>
          <input type="hidden" id="total_size3" name="flp3"/>
          <input type="hidden" id="total_size4" name="flp4"/>
          <input type="hidden" id="total_size5" name="flp5"/>
          <input type="hidden" id="total_size6" name="flp6"/>
          <input type="hidden" id="total_size7" name="flp7"/>
          <input type="hidden" id="total_size8" name="flp8"/>
          <input type="hidden" id="total_size9" name="flp9"/>
          <input type="submit" name="submit1" class="btn red darken-4 btn-md" value="SUBMIT" >
        </form>
         
      </center>
  </div>

</div>

