<?php
include('header_link.php');
include('db/db.php');
if (isset($_GET['view'])) {
    $name=$_GET['name'];
    $sqlget=mysql_query("SELECT count(candidates) as total,candidates,partylist from flp_submit_votes where candidates='$name' ");
    $row_get=mysql_fetch_array($sqlget);
    $sqlpp=mysql_query("SELECT * from flp_candidates where name = '{$row_get['candidates']}' ");
    $row_pp=mysql_fetch_array($sqlpp);


?>
<style>


.bg {
  border-bottom: 8px solid #ff4d4d; }


.avatarcontainer {
        width: 106px;
    height: 106px;
    border: 8px solid #ff4d4d;
    color: #FFFFFF;
    border-radius: 50%;
    margin: 0px auto;
    overflow: hidden;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;}
 * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

body {
  background-color: #ecf0f1; }

header {
  display: block;
  overflow: hidden;
  position: relative;
  padding-bottom: 2em;
  -moz-border-radius-topleft: 8px;
  -webkit-border-top-left-radius: 8px;
  border-top-left-radius: 8px;
  -moz-border-radius-topright: 8px;
  -webkit-border-top-right-radius: 8px;
  border-top-right-radius: 8px; }

.container {
  width: 320px;
  margin: 3em auto 1em auto;
  -webkit-border-radius: 8px;
  -moz-border-radius: 8px;
  -ms-border-radius: 8px;
  -o-border-radius: 8px;
  border-radius: 8px;
  padding-bottom: 1.5em;
  background-color: #dde1e2;
  -webkit-box-shadow: #bdc3c7 0 5px 5px;
  -moz-box-shadow: #bdc3c7 0 5px 5px;
  box-shadow: #bdc3c7 0 5px 5px; }

.bg {
  border-bottom: 8px solid #ff4d4d; }


.avatarcontainer {
  position: absolute;
  bottom: 0;
  right: 0;
  left: 0;
  display: block; }
 
.data {
  margin-top: .6em;
  color: #81878b; }
  .data li {
    width: 32%;
    text-align: center;
    display: inline-block;
    font-size: 1.5em;
    font-family: 'Lato';
    border-right: solid 1px #bdc3c7; }
    .data li:last-child {
      border: none; }
    .data li span {
      display: block;
      text-transform: uppercase;
      font-family: 'Quicksand';
      font-size: .5em;
      margin-top: .6em;
      font-weight:700;
    }


</style>
<!-- navbar-fixed-top-->
<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow bg-danger">
    <div class="navbar-wrapper">
        <div class="navbar-header bg-danger">
            <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu hidden-md-up float-xs-left" ><a href="index.php" class="nav-link  hidden-xs"><i class="fas fa-chevron-left fa-2x" style="color: white"></i></i></a></li>
            </ul>
        </div>
    </div>
</nav>


<!-- ////////////////////////////////////////////////////////////////////////////-->    
    <body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column bg-white">     
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <div class="robust-content content container-fluid">
            <div class="">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <section class="col-md-4 offset-md-4 col-xs-12  p-0" >
                        <div class="border-grey border-lighten-5 py-2 row" style="padding: 0px !important;">

    <div >
        <header>
        <img src="images/cpsu_scc.jpg" alt="background" class="bg" style="width: 100%; height:35%;z-index: -1;">
               <br><br>
            
            <div class="avatarcontainer">
                <img src="admin/images/<?php echo $row_pp['image']; ?>" alt="avatar" class="avatar" style="width: 100% !important;">
            </div>


        </header>
 <center>
        <div class="content">
            <div class="data">

                <ul style="padding: 0px !important;">
                    <li>
                        <h6 style="color: black"><?php echo $row_get['partylist']; ?></h6>
                        <span>Partylist</span>
                    </li>
                    <li>
                        <h6 style="color: black"><?php echo $row_get['candidates']; ?></h6>
                        <span>Candiate Name</span>
                    </li>
                    <li>
                        <h6 style="color: black"><?php echo $row_get['total']; ?></h6>
                        <span>voters</span>
                    </li>
                </ul>
            </div>
</center>
           <canvas id="barChart"></canvas>
           <canvas id="lineChart1"></canvas>
           <canvas id="lineChart2"></canvas>
           <canvas id="lineChart3"></canvas>
           <canvas id="lineChart4"></canvas>
           <canvas id="lineChart5"></canvas>
        </div>

    </div>
    
</body>
</html>
                      
                        </div>
                    </section>
                </div>
            </div>
        </div>







<?php
include('footer_link.php');

$sql1=mysql_query("SELECT count(candidates) as total_course1,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_course='CCJE' ");
$row1=mysql_fetch_array($sql1);

$sql2=mysql_query("SELECT count(candidates) as total_course2,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_course='CTE' ");
$row2=mysql_fetch_array($sql2);

$sql3=mysql_query("SELECT count(candidates) as total_course3,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_course='CBM' ");
$row3=mysql_fetch_array($sql3);

$sql4=mysql_query("SELECT count(candidates) as total_course4,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_course='CAF' ");
$row4=mysql_fetch_array($sql4);

$sql5=mysql_query("SELECT count(candidates) as total_course5,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_course='CCS' ");
$row5=mysql_fetch_array($sql5);

//lineChart1
$sqls1=mysql_query("SELECT count(candidates) as total_year1,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='1st year' and  voters_course='CCJE' ");
$rows1=mysql_fetch_array($sqls1);

$sqls2=mysql_query("SELECT count(candidates) as total_year2,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='2nd year' and  voters_course='CCJE' ");
$rows2=mysql_fetch_array($sqls2);

$sqls3=mysql_query("SELECT count(candidates) as total_year3,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='3rd year' and  voters_course='CCJE' ");
$rows3=mysql_fetch_array($sqls3);

$sqls4=mysql_query("SELECT count(candidates) as total_year4,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='4th year' and  voters_course='CCJE' ");
$rows4=mysql_fetch_array($sqls4);


//lineChart2
$sqlss1=mysql_query("SELECT count(candidates) as total_year1,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='1st year' and  voters_course='CTE' ");
$rowss1=mysql_fetch_array($sqlss1);

$sqlss2=mysql_query("SELECT count(candidates) as total_year2,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='2nd year' and  voters_course='CTE' ");
$rowss2=mysql_fetch_array($sqlss2);

$sqlss3=mysql_query("SELECT count(candidates) as total_year3,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='3rd year' and  voters_course='CTE' ");
$rowss3=mysql_fetch_array($sqlss3);

$sqlss4=mysql_query("SELECT count(candidates) as total_year4,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='4th year' and  voters_course='CTE' ");
$rowss4=mysql_fetch_array($sqlss4);

//lineChart3

$sqlsss1=mysql_query("SELECT count(candidates) as total_year1,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='1st year' and  voters_course='CBM' ");
$rowsss1=mysql_fetch_array($sqlsss1);

$sqlsss2=mysql_query("SELECT count(candidates) as total_year2,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='2nd year' and  voters_course='CBM' ");
$rowsss2=mysql_fetch_array($sqlsss2);

$sqlsss3=mysql_query("SELECT count(candidates) as total_year3,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='3rd year' and  voters_course='CBM' ");
$rowsss3=mysql_fetch_array($sqlsss3);

$sqlsss4=mysql_query("SELECT count(candidates) as total_year4,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='4th year' and  voters_course='CBM' ");
$rowsss4=mysql_fetch_array($sqlsss4);
//lineChart4
$sqlssss1=mysql_query("SELECT count(candidates) as total_year1,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='1st year' and  voters_course='CAF' ");
$rowssss1=mysql_fetch_array($sqlssss1);

$sqlssss2=mysql_query("SELECT count(candidates) as total_year2,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='2nd year' and  voters_course='CAF' ");
$rowssss2=mysql_fetch_array($sqlssss2);

$sqlssss3=mysql_query("SELECT count(candidates) as total_year3,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='3rd year' and  voters_course='CAF' ");
$rowssss3=mysql_fetch_array($sqlssss3);

$sqlssss4=mysql_query("SELECT count(candidates) as total_year4,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='4th year' and  voters_course='CAF' ");
$rowssss4=mysql_fetch_array($sqlssss4);

//lineChart5


$sqlsssss1=mysql_query("SELECT count(candidates) as total_year1,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='1st year' and  voters_course='CCS' ");
$rowsssss1=mysql_fetch_array($sqlsssss1);

$sqlsssss2=mysql_query("SELECT count(candidates) as total_year2,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='2nd year' and  voters_course='CCS' ");
$rowsssss2=mysql_fetch_array($sqlsssss2);

$sqlsssss3=mysql_query("SELECT count(candidates) as total_year3,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='3rd year' and  voters_course='CCS' ");
$rowsssss3=mysql_fetch_array($sqlsssss3);

$sqlsssss4=mysql_query("SELECT count(candidates) as total_year4,voters_course,voters_year,voters_section from flp_submit_votes where candidates='$name' and voters_year='4th year' and  voters_course='CCS' ");
$rowsssss4=mysql_fetch_array($sqlsssss4);
?>
<script>

    //bar
var ctxB = document.getElementById("barChart").getContext('2d');
var myBarChart = new Chart(ctxB, {
type: 'bar',
data: {
labels: ["CCJE", "CTE", "CBM", "CAF", "CCS"],
datasets: [{
label: '# of Votes',
data: [<?php echo $row1['total_course1']; ?>,
       <?php echo $row2['total_course2']; ?>,
       <?php echo $row3['total_course3']; ?>, 
       <?php echo $row4['total_course4']; ?>,
       <?php echo $row5['total_course5']; ?>],
backgroundColor: [
'rgba(255, 99, 132, 0.2)',
'rgba(54, 162, 235, 0.2)',
'rgba(255, 206, 86, 0.2)',
'rgba(75, 192, 192, 0.2)',
'rgba(153, 102, 255, 0.2)'
],
borderColor: [
'rgba(255,99,132,1)',
'rgba(54, 162, 235, 1)',
'rgba(255, 206, 86, 1)',
'rgba(75, 192, 192, 1)',
'rgba(153, 102, 255, 1)'
],
borderWidth: 1
}]
},
options: {
scales: {
yAxes: [{
ticks: {
beginAtZero: true
}
}]
}
}
});








//line
var ctxL = document.getElementById("lineChart1").getContext('2d');
var myLineChart = new Chart(ctxL, {
type: 'line',
data: {
labels: ["1st Year", "2nd Year", "3rd Year", "4th Year"],
datasets: [{
label: "CCJE",
data: [<?php echo $rows1['total_year1']; ?>,
       <?php echo $rows2['total_year2']; ?>, 
       <?php echo $rows3['total_year3']; ?>, 
       <?php echo $rows4['total_year4']; ?>],
backgroundColor: [
'rgba(105, 0, 132, .2)',
],
borderColor: [
'rgba(200, 99, 132, .7)',
],
borderWidth: 2
},

]
},
options: {
responsive: true
}
});



//line
var ctxL = document.getElementById("lineChart2").getContext('2d');
var myLineChart = new Chart(ctxL, {
type: 'line',
data: {
labels: ["1st Year", "2nd Year", "3rd Year", "4th Year"],
datasets: [{
label: "CTE",
data: [<?php echo $rowss1['total_year1']; ?>,
       <?php echo $rowss2['total_year2']; ?>, 
       <?php echo $rowss3['total_year3']; ?>, 
       <?php echo $rowss4['total_year4']; ?>],
backgroundColor: [
'rgba(54, 162, 235, 0.2)',
],
borderColor: [
'rgba(54, 162, 235, 1)',
],
borderWidth: 2
},

]
},
options: {
responsive: true
}
});


//line
var ctxL = document.getElementById("lineChart3").getContext('2d');
var myLineChart = new Chart(ctxL, {
type: 'line',
data: {
labels: ["1st Year", "2nd Year", "3rd Year", "4th Year"],
datasets: [{
label: "CBM",
data: [<?php echo $rowsss1['total_year1']; ?>,
       <?php echo $rowsss2['total_year2']; ?>, 
       <?php echo $rowsss3['total_year3']; ?>, 
       <?php echo $rowsss4['total_year4']; ?>],
backgroundColor: [
'rgba(255, 206, 86, 0.2)',
],
borderColor: [
'rgba(255, 206, 86, 1)',
],
borderWidth: 2
},

]
},
options: {
responsive: true
}
});


//line
var ctxL = document.getElementById("lineChart4").getContext('2d');
var myLineChart = new Chart(ctxL, {
type: 'line',
data: {
labels: ["1st Year", "2nd Year", "3rd Year", "4th Year"],
datasets: [{
label: "CAF",
data: [<?php echo $rowssss1['total_year1']; ?>,
       <?php echo $rowssss2['total_year2']; ?>, 
       <?php echo $rowssss3['total_year3']; ?>, 
       <?php echo $rowssss4['total_year4']; ?>],
backgroundColor: [
'rgba(75, 192, 192, 0.2)',
],
borderColor: [
'rgba(75, 192, 192, 1)',
],
borderWidth: 2
},

]
},
options: {
responsive: true
}
});


//line
var ctxL = document.getElementById("lineChart5").getContext('2d');
var myLineChart = new Chart(ctxL, {
type: 'line',
data: {
labels: ["1st Year", "2nd Year", "3rd Year", "4th Year"],
datasets: [{
label: "CCS",
data: [<?php echo $rowsssss1['total_year1']; ?>,
       <?php echo $rowsssss2['total_year2']; ?>, 
       <?php echo $rowsssss3['total_year3']; ?>, 
       <?php echo $rowsssss4['total_year4']; ?>],
backgroundColor: [
'rgba(153, 102, 255, 0.2)',
],
borderColor: [
'rgba(153, 102, 255, 1)ss',
],
borderWidth: 2
},

]
},
options: {
responsive: true
}
});

    //Follow Button Effect

$(document).ready(

    function iniciar(){
    $('.follow').on("click", function(){
        $('.follow').css('background-color','#34CF7A');
        $('.follow').html('<div class="icon-ok"></div> Following');
    }); 
    }

);
</script>

<?php
}
?>