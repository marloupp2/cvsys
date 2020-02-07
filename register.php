

<?php
include('db/db.php');
?>


<style >
  /*Profile Pic Start*/
.picture-container{
    position: relative;
    cursor: pointer;
    text-align: center;
}
.picture{
    width: 106px;
    height: 106px;
    border: 4px solid #CCCCCC;
    color: #FFFFFF;
    border-radius: 50%;
    margin: 0px auto;
    overflow: hidden;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;

}
.picture:hover{
    border-color: #2ca8ff;
}
.content.ct-wizard-green .picture:hover{
    border-color: #05ae0e;
}
.content.ct-wizard-blue .picture:hover{
    border-color: #3472f7;
}
.content.ct-wizard-orange .picture:hover{
    border-color: #ff9500;
}
.content.ct-wizard-red .picture:hover{
    border-color: #ff3b30;
}
.picture input[type="file"] {
    cursor: pointer;
    display: block;
    height: 100%;
    left: 0;
    opacity: 0 !important;
    position: absolute;
    top: 0;
    width: 100%;
}

.picture-src{
    width: 100%;
    
}
</style>

<div class="" id="registrationform" style="display: none;">
      <div class="" style="height: 510px;">
        <div class="card-header mb-2 bg-danger white">
          <h4 class="card-title"><i class="icon-info"></i> Registration Form</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="process/voters_registration_process.php" method="POST" class="form form-horizontal" enctype="multipart/form-data" >
                  <div class="picture">
                      <div class="picture-container">
                          <img src="images/avatar.png" class="picture-src" title="" id="wizardPicturePreview" width="100%" height="100%">
                          <input type="file" id="wizard-picture" class="" name="image" required="" id="s" accept="image/*">
                      </div>
                  </div><br>
              <div class="form-body">
                <div class="row">
                  <div class="col-md-12 form-group " style="margin-bottom: 0px;">
                    <div id="warn1" style="color: red;"></div>
                    <div class="position-relative has-icon-left">
                      <input type="text" class="form-control danger" name="fullname" id="fname" placeholder="Fullname" style="text-indent: 29px;">
                      <div class="form-control-position" style="margin-top: 4px !important;">
                        <i class="fas fa-user-tie danger fa-2x"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 form-group " style="margin-bottom: 0px;">
                    <div id="warn2" style="color: red;"></div>
                    <div class="position-relative has-icon-left">
                      <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone number" style="text-indent: 29px;">
                      <div class="form-control-position" style="margin-top: 4px !important;">
                        <i class="fas fa-mobile-alt fa-2x danger"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 form-group " style="margin-bottom: 0px;">
                    <div id="warn3" style="color: red;"></div>
                    <div class="position-relative has-icon-left">
                      <input type="number"  class="form-control" id="id_number" name="id_number" placeholder="ID number" style="text-indent: 29px;">
                      <div class="form-control-position" style="margin-top: 4px !important;">
                        <i class="far fa-id-card danger fa-2x"></i>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 form-group" style="margin-bottom: 0px;">
                    <div id="warn4" style="color: red;"></div>
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
                    <div id="warn5" style="color: red;"></div>
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
                    <div id="warn6" style="color: red;"></div>
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


                 <center>
                  <div class="col-12 d-flex justify-content-end ">
                    <input type="submit" name="submit2" class="btn btn-outline-danger mr-1 mb-1" id="registerr" value="register" style="display: none;">
                  </div>
                </center>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

<script>
  $(document).ready(function(){
// Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(document).ready(function(){
  setInterval(function(){
     var fullname = $("#fname").val();
     var phone = $("#phone").val();
     var id_number = $("#id_number").val();
     var course = $("#course").val();
     var year_and_section = $("#year_and_section").val();
     var section = $("#section").val();
     if (fullname == "") {
      $("#warn1").html("Fill your fullname!");
      $("#registerr").hide();
     }else if(fullname.length < 8){
      $("#warn1").html("your full name must be 8 characters and above!");
      $("#registerr").hide();
     }else if(!fullname == ""){
      $("#warn1").html("Okey");
     }if (phone == "") {
       $("#warn2").html("Fill your phone number!");
       $("#registerr").hide();
     }else if(phone.length < 11){
       $("#warn2").html("your phone number must be 11 characters");
       $("#registerr").hide();
     }else if(phone.length > 11){
       $("#warn2").html("your phone number must be 11 characters");
       $("#registerr").hide();
     }else if(!phone == ""){
       $("#warn2").html("Okey");
     }if(course == null){
       $("#warn4").html("Choose Course");
     }else if(course == "CCS"){
       $("#warn4").html("okey");
     }else if(course == "CTE"){
       $("#warn4").html("okey");
     }else if(course == "CCJE"){
       $("#warn4").html("okey");
     }else if(course == "CBM"){
       $("#warn4").html("okey");
     }else if(course == "CAF"){
       $("#warn4").html("okey");
     }if (year_and_section === null) {
      $("#warn5").html("Fill your year");
      $("#registerr").hide();
     }else if (!year_and_section == "") {
      $("#warn5").html("Okey");
     }if(section === null){
      $("#warn6").html("Fill your section");
      $("#registerr").hide();
     }else if(!section == ""){
      $("#warn6").html("Okey");
     }

   $.ajax({
          url:"process/voters_registration_process.php",
          type:"POST",
           data:{
            "submit1":1,
            "fullname":fullname,
            "phone":phone,
            "id_number":id_number,
            "course":course,
            "section":section,
            "year_and_section":year_and_section
          },
          success :function(warn){
            $("#warn3").html(warn);
            if ( warn !== "okey!") {
               $("#registerr").hide();
            }
            if (fullname.length > 8 && phone.length==11 && course !== null && !year_and_section == "" && warn == "okey!" && !section == "") {
              $("#registerr").show();
            }
          }
        })


  },1000);
});



      
      // registration end

</script>