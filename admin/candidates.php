<?php
include('header_link.php');
include('header.php');
?>

  <div class="robust-content content container-fluid">
     <div class="content-wrapper" style="padding: 0px;">
      <input type="text" id="datepicker"  class="ml-1" value="<?php echo date('Y') ?>" />
        <div class="row">
            
        	<div class="col-md-6 col-6">
        		<a data-toggle="modal" data-target="#modalContactForm2">
        			<button class="btn btn-outline-danger">Add Candidate(s)</button>
        		</a>
        	</div>
        	<div class="col-md-3 col-3">
        		<select id="searchCandidate" onchange="searchCandidate()">
              <option disabled selected>Select Candidate(s)</option> 
              <option value="flp_candidates">FLP Candidates</option>
              <option value="ssg_candidates">SSG Candidates</option>
            </select>
        	</div>
          <div class="col-md-3 col-3">
            <select id="searchPosition" onchange="searchPosition()" style="display: none;">
              <option disabled selected>Select Position</option> 
              <option value="President">President</option>
              <option value="Vice President">Vice President</option>
              <option value="Senator">Senator</option>
              <option value="Secretary">Secretary</option>
              <option value="Treasurer">Treasurer</option>
              <option value="Auditor">Auditor</option>
              <option value="PIO">PIO</option>
              <option value="Business Manager">Business Manager</option>
              <option value="Muse">Muse</option>
              <option value="Sentinel">Sentinel</option>
            </select>
          </div>
        </div>


	<div class="col-md-12" id="candidate_view"></div>

     </div>
  </div>


<script>
  $("#datepicker").datepicker( {
    format: " yyyy", // Notice the Extra space at the beginning
    viewMode: "years", 
    minViewMode: "years"
});


    function searchCandidate(){
      var x = document.getElementById("searchCandidate").value;
      $.ajax({
        url:"search_candidate.php",
        type:"POST",
        data:{
          "search":1,
          "candidate":x
        },
        success:function(view1){
          $("#candidate_view").html(view1);
          $("#searchPosition").show();
        }
      })
      }

    function searchPosition(){
      var x = document.getElementById("searchCandidate").value;
      var y = document.getElementById("searchPosition").value;
      $.ajax({
        url:"search_candidate.php",
        type:"POST",
        data:{
          "search":1,
          "candidate":x,
          "position":y
        },
        success:function(view1){
          $("#candidate_view").html(view1);

          
        }
      })
      }
  
</script>






 <!--IMPORT STATUS-->
<div class="modal fade" id="modalContactForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">


      <div class="modal-header text-center">
       <h4 class="modal-title w-100 font-weight-bold">ADD CANDIDATES
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       </h4> 
      </div>


<br>
<!-- Nav tabs -->

  <ul class="nav nav-tabs md-tabs " role="tablist">
  <li class="nav-item ml-1">
    <a class="nav-link active" data-toggle="tab" href="#panel555" role="tab"  style="color: #dc3545!important">
      <i class="fas fa-users pl-2"></i>Parties</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#panel666" role="tab"  style="color: #dc3545!important">
      <i class="fas fa-user pl-2"></i>Individual</a>
  </li>
 </ul>
<!-- Nav tabs -->

<!-- Tab panels -->
<div class="tab-content">

  <!-- Panel 1 -->
  <div class="tab-pane fade in show active" id="panel555" role="tabpanel">

    <!-- Nav tabs -->
    <div class="row">
      <div class="col-md-12">
    <p class="pt-2">
      <select class="browser-default custom-select" id="mySelect1" onchange="myFunction1()">
        <option disabled selected >FLP / SSG</option>
        <option value="flp">FLP</option>
        <option value="ssg">SSG</option>
      </select>
    </p>

         <p id="demo1"></p>

      </div>
    </div>
    <!-- Nav tabs -->

  </div>
  <!-- Panel 1 -->

  <!-- Panel 2 -->
  <div class="tab-pane fade" id="panel666" role="tabpanel">
   <div class="row">
      <div class="col-md-12">
    <p class="pt-2">
      <select class="browser-default custom-select" id="mySelect" onchange="myFunction()">
        <option disabled selected >FLP / SSG</option>
        <option value="flp">FLP</option>
        <option value="ssg">SSG</option>
      </select>
    </p>

<p id="demo"></p>

  </div>
  <!-- Panel 2 -->

</div>
<!-- Tab panels -->

    </div>
  </div>
</div>

<div id="Partiesflp" style="display: none;">
  <form class='md-form' action='process/flpcandidateprocess.php' method='POST' enctype="multipart/form-data">

<div class="row">
  <input type="text" name="party_list" class="form-control mb-2" placeholder="Party List" required>
	<div class="col-md-12 btn-outline-danger ">
		<input type="file" name="image1" class="" style="float: left;" accept="image/*">
		<input type="text" name="name1" class="form-control " placeholder="President">
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger ">
		<input type="file" name="image2" class="" accept="image/*">
		<input type="text" name="name2" class="form-control input-xl" placeholder="Vice-President">
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger ">
		<input type="file" name="image3" class="" accept="image/*">
		<input type="text" name="name3" class="form-control input-xl" placeholder="Secretary">
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image4" class="" accept="image/*">
		<input type="text" name="name4" class="form-control input-xl" placeholder="Treasurer">
	</div>
</div>

<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image5" class="" accept="image/*">
		<input type="text" name="name5" class="form-control input-xl" placeholder="Auditor">
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger ">
		<input type="file" name="image6" class="" accept="image/*">
		<input type="text" name="name6" class="form-control input-xl" placeholder="P.I.O">
	</div>
</div>

<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image7" class="" accept="image/*">
		<input type="text" name="name7" class="form-control input-xl" placeholder="Business Manager">
	</div>
</div>

<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image8" class="" accept="image/*">
		<input type="text" name="name8" class="form-control input-xl" placeholder="Muse">
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger ">
		<input type="file" name="image9" class="" accept="image/*">
		<input type="text" name="name9" class="form-control input-xl" placeholder="Sentinel">
	</div>
</div>

    <center>
      <input type='submit' class='btn btn-outline-danger' name="flp_submit">
    </center>

  </form>
</div>






<div id="Partiesssg" style="display: none;">
  <form class='md-form' action='process/ssgcandidateprocess.php' method='POST' enctype="multipart/form-data">
   <input type="text" name="party_list" class="form-control input-xl mb-2" placeholder="Party List" required>
 <div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image1" class=""  accept="image/*">
		<input type="text" name="name1" class="form-control input-xl" placeholder="President">
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image2" class="" accept="image/*">
		<input type="text" name="name2" class="form-control input-xl" placeholder="Vice-President">
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image3" class="" accept="image/*">
		<input type="text" name="name3" class="form-control input-xl" placeholder="Senator 1">
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image4" class="" accept="image/*">
		<input type="text" name="name4" class="form-control input-xl" placeholder="Senator 2">
	</div>
</div>

<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image5" class="" accept="image/*">
		<input type="text" name="name5" class="form-control input-xl" placeholder="Senator 3">
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image6" class="" accept="image/*">
		<input type="text" name="name6" class="form-control input-xl" placeholder="Senator 4">
	</div>
</div>

<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image7" class="" accept="image/*">
		<input type="text" name="name7" class="form-control input-xl" placeholder="Senator 5">
	</div>
</div>

<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image8" class="" accept="image/*">
		<input type="text" name="name8" class="form-control input-xl" placeholder="Senator 6">
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image9" class="" accept="image/*">
		<input type="text" name="name9" class="form-control input-xl" placeholder="Senator 7">
	</div>
</div>

<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image10" class="" accept="image/*">
		<input type="text" name="name10" class="form-control input-xl" placeholder="Senator 8">
	</div>
</div>

<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image11" class="" accept="image/*">
		<input type="text" name="name11" class="form-control input-xl" placeholder="Senator 9">
	</div>
</div>


<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image12" class="" accept="image/*">
		<input type="text" name="name12" class="form-control input-xl" placeholder="Senator 10">
	</div>
</div>

<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image13" class="" accept="image/*">
		<input type="text" name="name13" class="form-control input-xl" placeholder="Senator 11">
	</div>
</div>


<br>
<div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image14" class="" accept="image/*">
		<input type="text" name="name14" class="form-control input-xl" placeholder="Senator 12">
	</div>
</div>


    <center>
      <input type='submit' class='btn btn-outline-danger' name="ssg_submit">
    </center>
  </form>
</div>




<div id="soloflp" style="display: none;">
  <form class='md-form' action="process/solocandidate.php" method="POST" enctype="multipart/form-data">
  <select class='browser-default custom-select' name="position">
    <option disabled selected >FLP POSITION</option>
    <option value='President'>President</option>
    <option value='Vice President'>Vice President</option>
    <option value='Secretary'>Secritary</option>
    <option value='Treasurer'>Treasurer</option>
    <option value='Auditor'>Auditor</option>
    <option value='PIO'>P.I.O.</option>
    <option value='Business Manager'>Business Manager</option>
    <option value='Muse'>Muse</option>
    <option value='Sentinel'>Sentinel</option>
  </select><br><br>
<div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image" class="" accept="image/*">
		<input type="text" name="name" class="form-control input-xl" placeholder="Name">
	</div>
</div>
<br><br>
 <center>
      <input type='submit' class='btn btn-outline-danger' name="soloflp">
    </center>
   </form>
</div>


<div id="solossg" style="display: none;">
   <form class='md-form' action="process/solocandidate.php" method="POST" enctype="multipart/form-data">
  <select class='browser-default custom-select' name="position">
    <option disabled selected >SSG POSITION</option>
    <option value='President'>President</option>
    <option value='Vice President'>Vice President</option>
    <option value='Senator'>Senator</option>
  </select>
  <br><br>
<div class="row">
	<div class="col-md-12 btn-outline-danger">
		<input type="file" name="image" class="" accept="image/*">
		<input type="text" name="name" class="form-control input-xl" placeholder="Name">
	</div>
</div>

<br><br>
 <center>
      <input type='submit' class='btn btn-outline-danger' name="solossg">
    </center>
  </form>
</div>

<script>




function myFunction1() {
  var x = document.getElementById("mySelect1").value;
  if(x == "flp"){
    document.getElementById("demo1").innerHTML = document.getElementById("Partiesflp").innerHTML;
  }else if (x == "ssg") {
    document.getElementById("demo1").innerHTML = document.getElementById("Partiesssg").innerHTML;
  }
}
</script>







<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  if(x == "flp"){
    document.getElementById("demo").innerHTML =  document.getElementById("soloflp").innerHTML;
  }else if (x == "ssg") {
    document.getElementById("demo").innerHTML = document.getElementById("solossg").innerHTML;
  }
}
</script>



<?php
include('footer_link.php');
?>

<script>
	$(document).ready(function () {
$('#dtDynamicVerticalScrollExample').DataTable({
"scrollY": "50vh",
"scrollCollapse": true,
});
$('.dataTables_length').addClass('bs-select');
});
</script>