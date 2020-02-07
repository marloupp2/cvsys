<?php
include('header_link.php');
 $sched=mysql_query("SELECT * from schedule order by id + 0 DESC");
  $sched_row=mysql_fetch_array($sched);
  if ($sched_row['electionkind'] === "ssg" || $sched_row['electionkind'] === "flpssg") {
    
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
                        <div class="border-grey border-lighten-5 py-2 row " >


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="pt-2 pl-2 pr-2 mb-3 mt-5 pt-5"  style="padding: 0px !important;">



    <div id="tutorial" class="tabcontent">
      <form name="mainForm">
<!--Grid row-->
<!--PRESIDENT-->

      <div>

        <!--Grid column-->
        <div class="col-md-12 col-ms-12 col-lg-12 mb-4" >

          <!-- Card -->
          <div class="card gradient-card">

              <div class="card-image"  id="demo">

                <!-- Content -->
                <a href="">
                  <div class="text-white d-flex mask  bg-danger">
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
                <h4 class="font-weight-bold float-right"><span id="result1" class="mr-2" style="float: right !important;"></span></h4>
              </div>

              <!-- Content -->
              <div class="card-body white"><br>
                <div class="progress md-progress">
                </div>
                <h6 class="text-uppercase font-weight-bold my-4 ">President</h6>
                <p class="text-muted " align="justify">

  <?php 
           $sql=mysql_query("SELECT * from ssg_candidates where position='President'");
          while($row=mysql_fetch_array($sql)){

          ?>
<div class="custom-control custom-radio">
  <input type="radio" name="rads" value="<?php echo $row['name']; ?>"  id="<?php echo $row['id']; ?>" name="groupOfDefaultRadios" onclick="getElementById('demo').style.backgroundImage = 'url(../admin/images/<?php echo $row['image']; ?>)'" >
  <label class="custom-control-label" for="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></label>
</div>


<script>
document.getElementById("demo").style.backgroundSize = "112px 112px";

document.mainForm.onclick = function(){
    var radVal = document.mainForm.rads.value;
    result.innerHTML = radVal;
    result1.innerHTML = radVal;
    ssg1.innerHTML = radVal;
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
<form name="mainForm2" >
        <div class="col-md-12 col-ms-12 col-lg-12 mb-4">

          <!-- Card -->
          <div class="card gradient-card">

              <div class="card-image"  id="demo2">

                <!-- Content -->
                <a href="">
                  <div class="text-white d-flex mask  bg-danger">
                    <div class="first-content align-self-center p-2">
                      <h3 class="card-title"><span id="result22"></span></h3>
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
                <h4 class="font-weight-bold float-right"><span id="result222" class="mr-2" style="float: right !important;"></span></h4>
              </div>

              <!-- Content -->
              <div class="card-body white"><br>
                <div class="progress md-progress">
                </div>
                <h6 class="text-uppercase font-weight-bold my-4">Vice-President</h6>
                <p class="text-muted " align="justify">

  <?php 
          
           $sql2=mysql_query("SELECT * from ssg_candidates where position='Vice President'");
          while($row2=mysql_fetch_array($sql2)){

          ?>
<div class="custom-control custom-radio">
  <input type="radio" name="rads2" value="<?php echo $row2['name']; ?>"  id="<?php echo $row2['id']; ?>" name="groupOfDefaultRadios" onclick="getElementById('demo2').style.backgroundImage = 'url(../admin/images/<?php echo $row2['image']; ?>)'"  required>
  <label class="custom-control-label" for="<?php echo $row2['id']; ?>"><?php echo $row2['name']; ?></label>
</div>



<script>
document.getElementById("demo2").style.backgroundSize = "112px 112px";

document.mainForm2.onclick = function(){
    var radVal2 = document.mainForm2.rads2.value;
    result22.innerHTML = radVal2;
    result222.innerHTML = radVal2;
    ssg2.innerHTML = radVal2;
}

</script>
<?php
}
?>
              </div>
          </div>
        </div>
      </div>
</form>
     

<!--SENATOR 1-->


<!--Grid column-->
<form name="mainForm3" action="votesubmit.php" method="POST">
        <div class="col-md-12 col-ms-12 col-lg-12 mb-4">

          <!-- Card -->
          <div class="">

              <div class="card-image" >

                <!-- Content -->
              
                  <div class="text-white d-flex mask  bg-danger mb-2">
                    <div class="first-content align-self-center p-2">
                      <h3 class="card-title"><span id="result3"></span></h3>
                      <p class="lead mb-0 ml-5">12 Senators</p>
                    </div>
                    <div class="second-content align-self-center mx-auto text-center">
                    </div>
                  </div>
         
<span style="color: red" id="senator12" ></span>
              </div>

  

  <?php 

          
         $sql3=mysql_query("SELECT * from ssg_candidates where position='Senator'");
          while($row3=mysql_fetch_array($sql3)){

          ?>



<!-- Material inline 1 -->
<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6" style="padding: 0px;">
  <div class="form-check form-check-inline " style="padding: 0px;">
  <input type="checkbox" class="form-check-input"  name="ssg[]" value="<?php echo $row3['name']; ?>" id="<?php echo $row3['id']; ?>" data-id="myId" style="padding: 0px;">
  <label class="form-check-label ml-3" for="<?php echo $row3['id']; ?>" style="padding: 0px;"><?php echo $row3['name']; ?></label>
</div>
</div>

<?php
}
?>



</div></div></div>

    </div>
    <style>
      li{
        font-weight: bold;
      }
    </style>


<script>


  $("input[type='checkbox']").change(function(){
    var count = $("input[type='checkbox']:checked").length;
  if(count>12){
    $(this).prop('checked', false);
       senator12.innerHTML = "YOU'VE ONLY SELECT 12 SENATORS";
      
  }
});




$('.counter').text($(':checkbox:checked').length);
$('input[type=checkbox]').change(function(){
  $('#counter').text($(':checkbox:checked').length);
});



$("input[type='checkbox']").change(function(){
    var x = "";
    $("[data-id=myId]").each(function(){
      if(this.checked){
      x = x +"<li>" +  $(this).val() +"<br>"+ "</li>" ;
      }
    });
   ssg3.innerHTML=x;
});




</script>




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



</script>


    <div id="editor" class="tabcontent">
     <?php 

include('ssgstep2.php');
?>
    </div>
    
</form>

          </div>
          </div>
        </div>
        </div>
        </div>


<center>
    <div class="tab">
      <button class="tablinks defaultOpen btn-outline-danger btn darken-4 btn-md" id="tutorialTab" >VOTE</button>
      <button class="tablinks btn-outline-danger btn darken-4 btn-md" id="editorTab" >BALLOT</button>
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
