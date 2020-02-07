<?php
include('header_link.php');
include('header.php');
$date=date('Y');
$sql_student=mysql_query("SELECT count(*) as all_student from student_info where date_year='$date' ");
$row_student=mysql_fetch_array($sql_student);


$sql_student1=mysql_query("SELECT count(*) as all_student1 from  voters_registered where date_year='$date' ");
$row_student1=mysql_fetch_array($sql_student1);

$sql_student2=mysql_query("SELECT count(*) as all_student2 from  voters_registered where step='' and date_year='$date' ");
$row_student2=mysql_fetch_array($sql_student2);

$sql_student3=mysql_query("SELECT count(*) as all_student3 from  voters_registered  where date_year='$date' ");
$row_student3=mysql_fetch_array($sql_student3);
?>


        <div class="robust-content content container-fluid">
            <div class="content-wrapper" style="padding: 0px;">
                <div class="content-header row">
                </div>
                <div class="content-body">




<div class="col-md-3 mb-4">

        <div class="card  p-1" style="height: 100px;">
          
          <a href="#" data-toggle="modal" data-target="#basicExampleModal">
            <center>
                    <h6 class="card-title text-center" style="padding-bottom: 0px;">
                        <div id="view2" ></div>
                    </h6>
            </center>
          </a><br> 
        
        </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-9 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class=" mb-4">
              <div class="row">                
                                           <div class="col-xl-3 col-lg-6 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                                <div class="media px-1">
                                                    <div class="media-left media-middle">
                                                        <i class="icon-graduation-cap font-large-1 blue-grey"></i>
                                                    </div>
                                                    <div class="media-body text-xs-right">
                                                        <span class="font-large-1 text-bold-300 danger"><?php echo $row_student['all_student']; ?></span>
                                                    </div>
                                                    <p class="text-muted">Total voters</p>
                                                    <progress class="progress progress-sm progress-danger" value="80" max="100"></progress>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                                <div class="media px-1">
                                                    <div class="media-left media-middle">
                                                        <i class="icon-user font-large-1 blue-grey"></i>
                                                    </div>
                                                    <div class="media-body text-xs-right">

                                                        <span class="font-large-1 text-bold-300 info"><?php echo $row_student1['all_student1']; ?></span>
                                                    </div>
                                                    <p class="text-muted" >Total registered Voters </p>
                                                    <progress class="progress progress-sm progress-info" value="95" max="100"></progress>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                                <div class="media px-1">
                                                    <div class="media-left media-middle">
                                                        <i class="icon-user font-large-1 blue-grey"></i>
                                                    </div>
                                                    <div class="media-body text-xs-right">
                                                        <span class="font-large-1 text-bold-300 deep-orange"><?php echo $row_student3['all_student3']; ?></span>
                                                    </div>
                                                    <p class="text-muted">Total casted voters </p>
                                                    <progress class="progress progress-sm progress-deep-orange" value="95" max="100"></progress>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                                <div class="media px-1">
                                                    <div class="media-left media-middle">
                                                        <i class="icon-graduation-cap font-large-1 blue-grey"></i>
                                                    </div>
                                                    <div class="media-body text-xs-right">
                                                        <span class="font-large-1 text-bold-300 danger"><?php echo $row_student2['all_student2']; ?></span>
                                                    </div>
                                                    <p class="text-muted">Total voters wasn't vote</p>
                                                    <progress class="progress progress-sm progress-danger" value="80" max="100"></progress>
                                                </div>
                                            </div>
                                            
                                        </div>
             

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->


<div class="container">
  <div class="card col-md-12">
  <div class="row">
    <div class="col-md-4">
      
    </div>
    <div class="col-md-8">
      <canvas class="container mt-1 mb-1" id="myChart"></canvas>
    </div>
  </div>
</div>
</div>




                </div>
            </div>
        </div>

<script>
  $(document).ready(function(){
    setInterval(function(){
        $.ajax({
          url:"../countdown.php",
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
include('schedule.php'); 
include('footer_link.php');
?>