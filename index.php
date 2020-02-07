
<?php
include('header_link.php');
?>
<style>
  @media screen and (max-width: 600px) {
  .navbar-brand {
    width: 80%;
    text-align: center;
  }
}
</style>
<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow bg-danger">
    <div class="navbar-wrapper">
        <div class="navbar-header bg-danger" style="width: 80%">
          <a href="#" style="padding-top: 10px; margin-top: 5px;" class="navbar-brand nav-link font-weight-bold ">
           <b style="color: white !important;font-size: 15px!important; ">Central Philippine State University</b>
          </a>
        </div>
        <div class="navbar-container content container-fluid">
            <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                <ul class="nav navbar-nav " style="float: right !important;">
                    <li class="nav-item hidden-sm-down ml-3"><a class="nav-link nav-menu-main menu-toggle hidden-xs" data-toggle="modal" data-target="#modalSubscriptionForm"><i class="fas fa-bars text-white"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>



    <body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column bg-white">     
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <div class="robust-content content container-fluid">
            <div class="">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <section class="col-md-4 offset-md-4 col-xs-12  p-0" >
                        <div class="border-grey border-lighten-5 py-2 row ">


                            <div class="card-header no-border" style="padding: 0px;">
                                <div class="card-title text-xs-center">
                                    <img src="images/mobilevoting.jpg" style="width: 60%;" alt="branding logo" >
                                </div>
                                <center>
                                <h4 class="card-title text-center card" style="font-weight: bold; height: 50px;"><div class="mt-1" id="view2" ></div></h4>
                                </center>
                                <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Vote Wisely</span>
                                </h6>
                            </div>
                            
                       <!-- DIRI AND 3 OPTIONS-->



<div id="view1">
  
</div><br>
<br><br><br>
<style>
  a.active{
   color: red !important;
  }
</style>
      <?php
      include('db/db.php');
$e=mysql_query("SELECT * from schedule order by 0+ id desc");
$s=mysql_fetch_array($e);
if($s['electionkind'] === "flpssg"){
      ?>

<div id="resultshow" style="display: none;">
  <!-- Nav tabs -->
    <ul class="nav md-pills nav-justified pills-white darken-4 mb-4 container p-0">
      <li class="b nav-item  col-md-6 col-sm-6 col-xs-6 pl-0 font-weight-bold p-0 m-0 btn btn-outline-danger">
        <a class="nav-link active  pt-1 font-weight-bold pb-1" data-toggle="tab" href="#panel555" role="tab" style="color:black;">FLP result</a>
      </li>
 
      <li class="b nav-item  col-md-6 col-sm-6 col-xs-6 pr-0 font-weight-bold p-0 m-0 btn btn-outline-danger">
        <a class="d nav-link pt-1 font-weight-bold pb-1" data-toggle="tab" href="#panel666" role="tab" style="color:black;">SSG result</a>
      </li>
    </ul>
<!-- Nav tabs -->

<!-- Tab panels -->
<div class="tab-content p-0">

  <!-- Panel 1 -->
  <div class="tab-pane fade in show active" id="panel555" role="tabpanel">

    <!-- Nav tabs -->
   <?php include('viewresult/content/flp2.php'); ?>
    <!-- Nav tabs -->

  </div>
  <!-- Panel 1 -->

  <!-- Panel 2 -->
  <div class="tab-pane fade" id="panel666" role="tabpanel">

  <!-- Panel 1 -->
<?php include('viewresult/content/ssg2.php'); ?>
  <!-- Panel 2 -->

  </div>
  <!-- Panel 2 -->

</div>
<!-- Tab panels -->

      <?php
}else if($s['electionkind'] === "ssg"){

      ?>

<div id="resultshow" style="display: none;">
  <!-- Nav tabs -->
    <ul class="nav md-pills nav-justified pills-white darken-4 mb-4 container p-0" style="display: none;">
      <li class="b nav-item  col-md-6 col-sm-6 col-xs-6 pr-0 font-weight-bold p-0 m-0 btn btn-outline-danger">
        <a class="d nav-link pt-1 font-weight-bold pb-1" data-toggle="tab" href="#panel666" role="tab" style="color:black;">SSG result</a>
      </li>
    </ul>
<!-- Nav tabs -->

<!-- Tab panels -->
<div class="tab-content p-0">

  <!-- Panel 1 -->
  <div class="tab-pane fade in show active" id="panel555" role="tabpanel">
<?php include('viewresult/content/ssg2.php'); ?>
    <!-- Nav tabs -->
 
    <!-- Nav tabs -->

  </div>
  <!-- Panel 1 -->

  <!-- Panel 2 -->
  <div class="tab-pane fade" id="panel666" role="tabpanel" style="display: none;">

  <!-- Panel 1 -->
  <?php include('viewresult/content/flp2.php'); ?>
  <!-- Panel 2 -->

  </div>
  <!-- Panel 2 -->

</div>
<!-- Tab panels -->

<?php

}else if($s['electionkind'] === "flp"){


?>


<div id="resultshow" style="display: none;">
  <!-- Nav tabs -->
    <ul class="nav md-pills nav-justified pills-white darken-4 mb-4 container p-0" style="display: none;">
      <li class="b nav-item  col-md-6 col-sm-6 col-xs-6 pl-0 font-weight-bold p-0 m-0 btn btn-outline-danger">
        <a class="nav-link active  pt-1 font-weight-bold pb-1" data-toggle="tab" href="#panel555" role="tab" style="color:black;">FLP result</a>
      </li>
    </ul>
<!-- Nav tabs -->

<!-- Tab panels -->
<div class="tab-content p-0">

  <!-- Panel 1 -->
  <div class="tab-pane fade in show active" id="panel555" role="tabpanel">

    <!-- Nav tabs -->
   <?php include('viewresult/content/flp2.php'); ?>
    <!-- Nav tabs -->

  </div>
  <!-- Panel 1 -->
  <!-- Panel 2 -->

</div>
<!-- Tab panels -->


<?php

}
?>
</div>
<?php
include('register.php');
?>


                      
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////////////////////////////////////////-->



  <!-- Card -->
<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true"  data-backdrop="false">
  <div class="modal-dialog" role="document">
    <center>
    <div class="modal-content modal-sm">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
            <p style="color:red;" id="incorrect_password"></p>
          <label data-error="wrong" data-success="right" for="form3">Username <b style="color:red;" id="null_username"></b></label>
          <input type="text" name="user" id="username" class="form-control validate">
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="form2">Password <b style="color:red;" id="null_password"></b></label>
          <input type="password" name="pass" id="password" class="form-control validate">
        </div>
<input type="submit" class="btn btn-outline-danger deep-purple-text" id="login" value="ENTER">
      </div><br>
    </div>
  </center>
  </div>
</div>

<script>

</script>

<script>
  $(document).ready(function(){
    setInterval(function(){
        $.ajax({
          url:"process/index1.php",
          type:"POST",
          data:{
            "submit1":1
          },
          success :function(view1){

            $("#view1").html(view1);

             $("#register").click(function(){
               $("#registrationform").show();
               $("#resultshow").hide();
             });

             $("#result00").click(function(){
               $("#registrationform").hide();
               $("#resultshow").show();
             });

            
//flp view result start
       $("#result00").click(function(){
         $.ajax({
          url:"flp2.php",
          type:"POST",
           data:{
            "submit1":1
          },
          success :function(){
             $("#resultshow").show();
             $("#registrationform").hide();
          }
        })
      });
//flp view result end
          }
        })

        //Login form  start
      





      },1000);

//auto enter start
$("#login").click(function(){
      var username = $("#username").val();
      var password = $("#password").val();
         $.ajax({
          url:"process/login_process.php",
          type:"POST",
           data:{
            "submit1":1,
            "username":username,
            "password":password
          },
          success :function(error){
           $("#view1").html(error);
          }
        })
});
        //login form end

$("#password").keyup(function(event) {
    if (event.keyCode === 13) {
        $("#login").click();
    }
});
//auto enter end
 
  });
</script>

<script>
  $(document).ready(function(){
    setInterval(function(){
        $.ajax({
          url:"countdown.php",
          type:"POST",
          data:{
            "submit1":1
          },
          success :function(view2){
            $("#view2").html(view2);
          }
        })

       },1000);
  });
</script>
<?php
include('footer_link.php');

?>
</div>