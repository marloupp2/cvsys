

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Card -->
<div class="container">

  <!-- Card image -->
  <div class="view  bg-danger" style="margin: 0px;">

    <!-- Title -->
    <h2 class="card-header-title mb-3 mt-3 text-white p-1 "><b><center>SSG Ballot</center></b></h2>

  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-left">


    <b id="ssg1"> </b> <strong><small>(President)</small></strong>
    <div class="">
       <progress class="progress progress-sm progress-danger" value="100" max="100"></progress>
    </div>
        <b id="ssg2"> </b> <strong><small>(Vice-President)</small></strong>
    <div class="">
       <progress class="progress progress-sm progress-danger" value="100" max="100"></progress>
    </div> Senators</strong>
    <div class="">
       <progress class="progress progress-sm progress-danger" value="100" max="100"></progress>
    </div>
    

    <ol class="list" id="ssg3"> </ol>
    <div class="">
       <progress class="progress progress-sm progress-danger" value="100" max="100"></progress>
    </div>
      <center>
          <input type="hidden" name="ids" value="<?php echo $fetch_info['id'] ?>">
          <input type="hidden" name="name" value="<?php echo $fetch_info['full_name'] ?>">
          <input type="hidden" name="school_id" value="<?php echo $fetch_info['school_id'] ?>">
          <input type="hidden" name="course" value="<?php echo $fetch_info['course'] ?>">
          <input type="hidden" name="year" value="<?php echo $fetch_info['year_and_section'] ?>">
          <input type="hidden" name="section" value="<?php echo $fetch_info['section'] ?>">
          <input type="hidden" id="total_size1" name="ssg1"/>
          <input type="hidden" id="total_size2" name="ssg2"/>
          <input type="submit" name="submit2" class="btn red darken-4 btn-md" value="SUBMIT" >

         
      </center>

  </div>

</div>

