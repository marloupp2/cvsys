<?php
include('header_link.php');
  $sched=mysql_query("SELECT * from schedule order by id + 0 DESC");
  $sched_row=mysql_fetch_array($sched);
  if ($sched_row['electionkind'] === "flpssg" || $sched_row['electionkind'] === "flp") {
    
  }else{
    echo "<script>window.location = 'logout.php?logout' </script>";
  }
?>




    <body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column bg-white">     
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <div class="robust-content content container-fluid">
            <div class="">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <section class="col-md-4 offset-md-4 col-xs-12  p-0" >
                        <div class="border-grey border-lighten-5 py-2 row " style="padding: 0px !important;">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="pt-2 pl-2 pr-2 mb-3 mt-5 pt-5" style="padding: 0px !important;">



    <div id="tutorial" class="tabcontent">
      <form name="mainForm">
    


<!--PRESIDENT-->
      <div>
<br><br>
        <!--Grid column-->
        <div class="col-md-12 col-ms-12 col-lg-12 mb-4">

          <!-- Card -->
          <div class="card gradient-card">

              <div class="card-image"  id="demo">

                <!-- Content -->
                <a href="">
                  <div class="text-white d-flex mask bg-danger">
                    <div class="first-content align-self-center p-2">
                      <h3 class="card-title"><span id="result"></span></h3>
                      <p class="lead mb-0 ml-5">PRESIDENT</p>
                    </div>
                    <div class="second-content align-self-center mx-auto text-center">
                    </div>
                  </div>
                </a>

              </div>

              <!-- Data -->
              <div class="third-content ml-auto mr-4 mb-2">
                <p class="text-uppercase text-muted"></p>
                
              </div>

              <!-- Content -->
              <div class="card-body white"><br>
                <div class="progress md-progress">
                </div>
                <p class="text-muted " align="justify">
<span id="result1" class="ml-1 h4 font-weight-bold"></span>
  <?php 
          include('../db/db.php');
          
          $sql=mysql_query("SELECT * from flp_candidates where position='President'");
          while($row=mysql_fetch_array($sql)){
          

          ?>
<div class="custom-control custom-radio">
  <input type="radio" name="rads" value="<?php echo $row['name']; ?>"  id="<?php echo $row['id']; ?>" name="groupOfDefaultRadios" onclick="getElementById('demo').style.backgroundImage = 'url(../admin/images/<?php echo $row['image'] ?>)'" >
  <label class="custom-control-label" for="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></label>
</div>



<script>
document.getElementById("demo").style.backgroundSize = "112px 112px";

document.mainForm.onclick = function(){
    var radVal = document.mainForm.rads.value;
    result.innerHTML = radVal;
    result1.innerHTML = radVal;
    flp1.innerHTML = radVal;
}

</script>
<?php
}
?>
              </div>
          </div>
        </div>
</form>
<!--VICE PRESIDENT-->


<!--Grid column-->
<form name="mainForm2">
        <div class="col-md-12 col-ms-12 col-lg-12 mb-4">

          <!-- Card -->
          <div class="card gradient-card">

              <div class="card-image"  id="demo2">

                <!-- Content -->
                <a href="">
                  <div class="text-white d-flex mask  bg-danger">
                    <div class="first-content align-self-center p-2">
                      <h3 class="card-title"><span id="result22" ></span></h3>
                      <p class="lead mb-0 ml-5" >VICE PRESIDENT</p>
                    </div>
                    <div class="second-content align-self-center mx-auto text-center">
                    </div>
                  </div>
                </a>

              </div>

              <!-- Data -->
              <div class="third-content ml-auto mr-4 mb-2">
                <p class="text-uppercase text-muted"></p>
               </div>

              <!-- Content -->
              <div class="card-body white"><br>
                <div class="progress md-progress">
                </div>
                <p class="text-muted " align="justify">
                  <span id="result222"  class="ml-1 h4 font-weight-bold"></span>

  <?php 
          
          $sql2=mysql_query("SELECT * from flp_candidates where position='Vice President'");
          while($row2=mysql_fetch_array($sql2)){

          ?>
<div class="custom-control custom-radio">
  <input type="radio" name="rads2" value="<?php echo $row2['name']; ?>"  id="<?php echo $row2['id']; ?>" name="groupOfDefaultRadios" onclick="getElementById('demo2').style.backgroundImage = 'url(../admin/images/<?php echo $row2['image'] ?>)'" >
  <label class="custom-control-label" for="<?php echo $row2['id']; ?>"><?php echo $row2['name']; ?></label>
</div>



<script>
document.getElementById("demo2").style.backgroundSize = "112px 112px";

document.mainForm2.onclick = function(){
    var radVal2 = document.mainForm2.rads2.value;
    result22.innerHTML = radVal2;
    result222.innerHTML = radVal2;
    flp2.innerHTML = radVal2;
}

</script>
<?php
}
?>
              </div>
          </div>
        </div>
</form>
     




<!--SECRITARY-->


<!--Grid column-->
<form name="mainForm3">
        <div class="col-md-12 col-ms-12 col-lg-12 mb-4">

          <!-- Card -->
          <div class="card gradient-card">

              <div class="card-image"  id="demo3">

                <!-- Content -->
                <a href="">
                  <div class="text-white d-flex mask bg-danger">
                    <div class="first-content align-self-center p-2">
                      <h3 class="card-title"><span id="result3" ></span></h3>
                      <p class="lead mb-0 ml-5">SECRETARY</p>
                    </div>
                    <div class="second-content align-self-center mx-auto text-center">
                    </div>
                  </div>
                </a>

              </div>

              <!-- Data -->
              <div class="third-content ml-auto mr-4 mb-2">
                <p class="text-uppercase text-muted"></p>
              </div>

              <!-- Content -->
              <div class="card-body white"><br>
                <div class="progress md-progress">
                </div>
                <p class="text-muted " align="justify">
                  <span id="result33"  class="ml-1 h4 font-weight-bold"></span>

  <?php 
          
          $sql3=mysql_query("SELECT * from flp_candidates where position='Secretary'");
          while($row3=mysql_fetch_array($sql3)){

          ?>
<div class="custom-control custom-radio">
  <input type="radio" name="rads3" value="<?php echo $row3['name']; ?>"  id="<?php echo $row3['id']; ?>" name="groupOfDefaultRadios" onclick="getElementById('demo3').style.backgroundImage = 'url(../admin/images/<?php echo $row3['image'] ?>)'" >
  <label class="custom-control-label" for="<?php echo $row3['id']; ?>"><?php echo $row3['name']; ?></label>
</div>



<script>
document.getElementById("demo3").style.backgroundSize = "112px 112px";

document.mainForm3.onclick = function(){
    var radVal3 = document.mainForm3.rads3.value;
    result3.innerHTML = radVal3;
    result33.innerHTML = radVal3;
    flp3.innerHTML = radVal3;
}

</script>
<?php
}
?>
              </div>
          </div>
        </div>
</form>







<!--treasurer-->


<!--Grid column-->
<form name="mainForm4">
        <div class="col-md-12 col-ms-12 col-lg-12 mb-4">

          <!-- Card -->
          <div class="card gradient-card">

              <div class="card-image"  id="demo4">

                <!-- Content -->
                <a href="">
                  <div class="text-white d-flex mask  bg-danger">
                    <div class="first-content align-self-center p-2">
                      <h3 class="card-title"><span id="result4"  ></span></h3>
                      <p class="lead mb-0 ml-5">TREASURER</p>
                    </div>
                    <div class="second-content align-self-center mx-auto text-center">
                    </div>
                  </div>
                </a>

              </div>

              <!-- Data -->
              <div class="third-content ml-auto mr-4 mb-2">
                <p class="text-uppercase text-muted"></p>
              </div>

              <!-- Content -->
              <div class="card-body white"><br>
                <div class="progress md-progress">
                </div>
                <p class="text-muted " align="justify">
                  <span id="result44"  class="ml-1 h4 font-weight-bold"></span>

  <?php 
          
          $sql4=mysql_query("SELECT * from flp_candidates where position='Treasurer'");
          while($row4=mysql_fetch_array($sql4)){

          ?>
<div class="custom-control custom-radio">
  <input type="radio" name="rads4" value="<?php echo $row4['name']; ?>"  id="<?php echo $row4['id']; ?>" name="groupOfDefaultRadios" onclick="getElementById('demo4').style.backgroundImage = 'url(../admin/images/<?php echo $row4['image']; ?>)'" >
  <label class="custom-control-label" for="<?php echo $row4['id']; ?>"><?php echo $row4['name']; ?></label>
</div>



<script>
document.getElementById("demo4").style.backgroundSize = "112px 112px";

document.mainForm4.onclick = function(){
    var radVal4 = document.mainForm4.rads4.value;
    result4.innerHTML = radVal4;
    result44.innerHTML = radVal4;
    flp4.innerHTML = radVal4;
}

</script>
<?php
}
?>
              </div>
          </div>
        </div>
</form>






<!--auditor-->


<!--Grid column-->
<form name="mainForm5">
        <div class="col-md-12 col-ms-12 col-lg-12 mb-4">

          <!-- Card -->
          <div class="card gradient-card">

              <div class="card-image"  id="demo5">

                <!-- Content -->
                <a href="">
                  <div class="text-white d-flex mask bg-danger">
                    <div class="first-content align-self-center p-2">
                      <h3 class="card-title"><span id="result5" ></span></h3>
                      <p class="lead mb-0 ml-5">AUDITOR</p>
                    </div>
                    <div class="second-content align-self-center mx-auto text-center">
                    </div>
                  </div>
                </a>

              </div>

              <!-- Data -->
              <div class="third-content ml-auto mr-4 mb-2">
                <p class="text-uppercase text-muted"></p>
              </div>

              <!-- Content -->
              <div class="card-body white"><br>
                <div class="progress md-progress">
                </div>
                <p class="text-muted " align="justify">
                  <span id="result55"  class="ml-1 h4 font-weight-bold"></span>

  <?php 
          
          $sql5=mysql_query("SELECT * from flp_candidates where position='Auditor'");
          while($row5=mysql_fetch_array($sql5)){

          ?>
<div class="custom-control custom-radio">
  <input type="radio" name="rads5" value="<?php echo $row5['name']; ?>"  id="<?php echo $row5['id']; ?>" name="groupOfDefaultRadios" onclick="getElementById('demo5').style.backgroundImage = 'url(../admin/images/<?php echo $row5['image']; ?>)'" >
  <label class="custom-control-label" for="<?php echo $row5['id']; ?>>"><?php echo $row5['name']; ?></label>
</div>



<script>
document.getElementById("demo5").style.backgroundSize = "112px 112px";

document.mainForm5.onclick = function(){
    var radVal5 = document.mainForm5.rads5.value;
    result5.innerHTML = radVal5;
    result55.innerHTML = radVal5;
    flp5.innerHTML = radVal5;
}

</script>
<?php
}
?>
              </div>
          </div>
        </div>
</form>





<!--PIO-->


<!--Grid column-->
<form name="mainForm6">
        <div class="col-md-12 col-ms-12 col-lg-12 mb-4">

          <!-- Card -->
          <div class="card gradient-card">

              <div class="card-image"  id="demo6">

                <!-- Content -->
                <a href="">
                  <div class="text-white d-flex mask  bg-danger">
                    <div class="first-content align-self-center p-2">
                      <h3 class="card-title"><span id="result6" ></span></h3>
                      <p class="lead mb-0 ml-5">P.I.O.</p>
                    </div>
                    <div class="second-content align-self-center mx-auto text-center">
                    </div>
                  </div>
                </a>

              </div>

              <!-- Data -->
              <div class="third-content ml-auto mr-4 mb-2">
                <p class="text-uppercase text-muted"></p>
              </div>

              <!-- Content -->
              <div class="card-body white"><br>
                <div class="progress md-progress">
                </div>
                <p class="text-muted " align="justify">
                  <span id="result66"  class="ml-1 h4 font-weight-bold"></span>

  <?php 
          
          $sql6=mysql_query("SELECT * from flp_candidates where position='PIO'");
          while($row6=mysql_fetch_array($sql6)){

          ?>
<div class="custom-control custom-radio">
  <input type="radio" name="rads6" value="<?php echo $row6['name']; ?>"  id="<?php echo $row6['id']; ?>" name="groupOfDefaultRadios" onclick="getElementById('demo6').style.backgroundImage = 'url(../admin/images/<?php echo $row6['image']; ?>)'" >
  <label class="custom-control-label" for="<?php echo $row6['id']; ?>"><?php echo $row6['name']; ?></label>
</div>



<script>
document.getElementById("demo6").style.backgroundSize = "112px 112px";

document.mainForm6.onclick = function(){
    var radVal6 = document.mainForm6.rads6.value;
    result6.innerHTML = radVal6;
    result66.innerHTML = radVal6;
    flp6.innerHTML = radVal6;
}

</script>
<?php
}
?>
              </div>
          </div>
        </div>
</form>



<!--Business Manager-->


<!--Grid column-->
<form name="mainForm7">
        <div class="col-md-12 col-ms-12 col-lg-12 mb-4">

          <!-- Card -->
          <div class="card gradient-card">

              <div class="card-image"  id="demo7">

                <!-- Content -->
                <a href="">
                  <div class="text-white d-flex mask bg-danger">
                    <div class="first-content align-self-center p-2">
                      <h3 class="card-title"><span id="result7"  ></span></h3>
                      <p class="lead mb-0 ml-5">BUSINESS MANAGER</p>
                    </div>
                    <div class="second-content align-self-center mx-auto text-center">
                    </div>
                  </div>
                </a>

              </div>

              <!-- Data -->
              <div class="third-content ml-auto mr-4 mb-2">
                <p class="text-uppercase text-muted"></p>
              </div>

              <!-- Content -->
              <div class="card-body white"><br>
                <div class="progress md-progress">
                </div>
                <p class="text-muted " align="justify">
                  <span id="result77"  class="ml-1 h4 font-weight-bold"></span>

  <?php 

          
         $sql7=mysql_query("SELECT * from flp_candidates where position='Business Manager'");
          while($row7=mysql_fetch_array($sql7)){

          ?>
<div class="custom-control custom-radio">
  <input type="radio" name="rads7" value="<?php echo $row7['name']; ?>" id="<?php echo $row7['id']; ?>" name="groupOfDefaultRadios" onclick="getElementById('demo7').style.backgroundImage = 'url(../admin/images/<?php echo $row7['image']; ?>)'" >
  <label class="custom-control-label" for="<?php echo $row7['id']; ?>"><?php echo $row7['name']; ?></label>
</div>



<script>
document.getElementById("demo7").style.backgroundSize = "112px 112px";

document.mainForm7.onclick = function(){
    var radVal7 = document.mainForm7.rads7.value;
    result7.innerHTML = radVal7;
    result77.innerHTML = radVal7;
    flp7.innerHTML = radVal7;
}

</script>
<?php
}
?>
              </div>
          </div>
        </div>
</form>




<!--MUSE-->


<!--Grid column-->
<form name="mainForm8">
        <div class="col-md-12 col-ms-12 col-lg-12 mb-4">

          <!-- Card -->
          <div class="card gradient-card">

              <div class="card-image"  id="demo8">

                <!-- Content -->
                <a href="">
                  <div class="text-white d-flex mask  bg-danger">
                    <div class="first-content align-self-center p-2">
                      <h3 class="card-title"><span id="result8"></span></h3>
                      <p class="lead mb-0 ml-5">MUSE</p>
                    </div>
                    <div class="second-content align-self-center mx-auto text-center">
                    </div>
                  </div>
                </a>

              </div>

              <!-- Data -->
              <div class="third-content ml-auto mr-4 mb-2">
                <p class="text-uppercase text-muted"></p>
              </div>

              <!-- Content -->
              <div class="card-body white"><br>
                <div class="progress md-progress">
                </div>
                <p class="text-muted " align="justify">
                  <span id="result88"  class="ml-1 h4 font-weight-bold"></span>

  <?php 
          
          $sql8=mysql_query("SELECT * from flp_candidates where position='Muse'");
          while($row8=mysql_fetch_array($sql8)){

          ?>
<div class="custom-control custom-radio">
  <input type="radio" name="rads8" value="<?php echo $row8['name']; ?>"  id="<?php echo $row8['id']; ?>" name="groupOfDefaultRadios" onclick="getElementById('demo8').style.backgroundImage = 'url(../admin/images/<?php echo $row8['image']; ?>)'" >
  <label class="custom-control-label" for="<?php echo $row8['id']; ?>"><?php echo $row8['name']; ?></label>
</div>



<script>
document.getElementById("demo8").style.backgroundSize = "112px 112px";

document.mainForm8.onclick = function(){
    var radVal8 = document.mainForm8.rads8.value;
    result8.innerHTML = radVal8;
    result88.innerHTML = radVal8;
    flp8.innerHTML = radVal8;
}

</script>
<?php
}
?>
              </div>
          </div>
        </div>
</form>





<!--SENTINEL-->


<!--Grid column-->
<form name="mainForm9">
        <div class="col-md-12 col-ms-12 col-lg-12 mb-4">

          <!-- Card -->
          <div class="card gradient-card">

              <div class="card-image"  id="demo9">

                <!-- Content -->
                <a href="">
                  <div class="text-white d-flex mask  bg-danger">
                    <div class="first-content align-self-center p-2">
                      <h3 class="card-title"><span id="result9" ></span></h3>
                      <p class="lead mb-0 ml-5">SENTINEL</p>
                    </div>
                    <div class="second-content align-self-center mx-auto text-center" >
                    </div>
                  </div>
                </a>

              </div>

              <!-- Data -->
              <div class="third-content ml-auto mr-4 mb-2">
                <p class="text-uppercase text-muted"></p>
              </div>

              <!-- Content -->
              <div class="card-body white"><br>
                <div class="progress md-progress">
                </div>
                <p class="text-muted " align="justify">
                  <span id="result99"  class="ml-1 h4 font-weight-bold"></span>

  <?php 
          
          $sql9=mysql_query("SELECT * from flp_candidates where position='Sentinel'");
          while($row9=mysql_fetch_array($sql9)){

          ?>
<div class="custom-control custom-radio">
  <input type="radio" name="rads9" value="<?php echo $row9['name']; ?>" id="<<?php echo $row9['id']; ?>" name="groupOfDefaultRadios" onclick="getElementById('demo9').style.backgroundImage = 'url(../admin/images/<?php echo $row9['image']; ?>)'" >
  <label class="custom-control-label" for="<?php echo $row9['id']; ?>"><?php echo $row9['name']; ?></label>
</div>



<script>
document.getElementById("demo9").style.backgroundSize = "112px 112px";

document.mainForm9.onclick = function(){
    var radVal9 = document.mainForm9.rads9.value;
    result9.innerHTML = radVal9;
    result99.innerHTML = radVal9;
    flp9.innerHTML = radVal9;
}

</script>
<?php
}
?>
              </div>
          </div>
        </form>

        </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
(function($) {
    $(function() {
        $('input[type="radio"]').click(function(e){
            value = $("input[name=rads]:checked").val();
            $('#total_size1').val(value);
        });
    });
})(jQuery);

(function($) {
    $(function() {
        $('input[type="radio"]').click(function(e){
            value = $("input[name=rads2]:checked").val();
            $('#total_size2').val(value);
        });
    });
})(jQuery);



(function($) {
    $(function() {
        $('input[type="radio"]').click(function(e){
            value = $("input[name=rads3]:checked").val();
            $('#total_size3').val(value);
        });
    });
})(jQuery);


(function($) {
    $(function() {
        $('input[type="radio"]').click(function(e){
            value = $("input[name=rads4]:checked").val();
            $('#total_size4').val(value);
        });
    });
})(jQuery);


(function($) {
    $(function() {
        $('input[type="radio"]').click(function(e){
            value = $("input[name=rads5]:checked").val();
            $('#total_size5').val(value);
        });
    });
})(jQuery);


(function($) {
    $(function() {
        $('input[type="radio"]').click(function(e){
            value = $("input[name=rads6]:checked").val();
            $('#total_size6').val(value);
        });
    });
})(jQuery);




(function($) {
    $(function() {
        $('input[type="radio"]').click(function(e){
            value = $("input[name=rads7]:checked").val();
            $('#total_size7').val(value);
        });
    });
})(jQuery);




(function($) {
    $(function() {
        $('input[type="radio"]').click(function(e){
            value = $("input[name=rads8]:checked").val();
            $('#total_size8').val(value);
        });
    });
})(jQuery);




(function($) {
    $(function() {
        $('input[type="radio"]').click(function(e){
            value = $("input[name=rads9]:checked").val();
            $('#total_size9').val(value);
        });
    });
})(jQuery);
</script>

</div>
</p></div>

<style>
  .nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #007bff;
}
</style>










    
    </div>
    <div id="editor" class="tabcontent">
<?php 

include('flpballot.php');
?>
    </div>
    
</form>



<center>
    <div class="tab">
      <button class="tablinks defaultOpen btn  btn-outline-danger btn-md" id="tutorialTab" >VOTE</button>
      <button class="tablinks btn btn-md btn-outline-danger" id="editorTab" >BALLOT</button>
    </div>
</div>
</center>


<br>

<script >
  function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

document.getElementById("tutorialTab").onclick = function(event) {
    openTab(event, 'tutorial');
}

document.getElementById("editorTab").onclick = function(event) {
    openTab(event, 'editor');
}

document.getElementById("tutorialTab").click();
</script>

                           
                      
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////////////////////////////////////////-->







<?php
include('footer_link.php');

?>
