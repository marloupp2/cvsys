<?php 
include('../db/db.php');
session_start();
if (isset($_SESSION['id'])) {
  # code...
}else{
  header('location:../index.php');
}

$sqlp=mysql_query("SELECT * from voters_registered where id='{$_SESSION['id']}' ");
$fetch_info=mysql_fetch_array($sqlp);
?>
    <style>
    /* Preloader */
#preloader {
  background-color: #f7f7f7;
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 5000;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  -ms-grid-row-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center; }
  #preloader .spinner {
    width: 40px;
    height: 40px;
    background-color: red !important;
    margin: auto;
    -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
    animation: sk-rotateplane 1.2s infinite ease-in-out; }
@-webkit-keyframes sk-rotateplane {
  0% {
    -webkit-transform: perspective(120px);
    transform: perspective(120px); }
  50% {
    -webkit-transform: perspective(120px) rotateY(180deg);
    transform: perspective(120px) rotateY(180deg); }
  100% {
    -webkit-transform: perspective(120px) rotateY(180deg) rotateX(180deg);
    transform: perspective(120px) rotateY(180deg) rotateX(180deg); } }
@keyframes sk-rotateplane {
  0% {
    -webkit-transform: perspective(120px);
    transform: perspective(120px); }
  50% {
    -webkit-transform: perspective(120px) rotateY(180deg);
    transform: perspective(120px) rotateY(180deg); }
  100% {
    -webkit-transform: perspective(120px) rotateY(180deg) rotateX(180deg);
    transform: perspective(120px) rotateY(180deg) rotateX(180deg); } }
</style>

 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>CPSU Voting System</title>
    <link rel="apple-touch-icon" sizes="60x60" href="../library/robust-assets/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../library/robust-assets/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../library/robust-assets/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../library/robust-assets/ico/apple-icon-152.png">
    <link rel="icon" href="../images/logo/student_logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" href="../library/robust-assets/css/vendors.min.css"/>
    <!-- BEGIN VENDOR CSS-->
    <!-- BEGIN Font icons-->
    <link rel="stylesheet" type="text/css" href="../library/robust-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="../library/robust-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <!-- END Font icons-->
    <!-- BEGIN Plugins CSS-->
    <link rel="stylesheet" type="text/css" href="../library/robust-assets/css/plugins/sliders/slick/slick.css">
    <!-- END Plugins CSS-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- BEGIN Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../library/robust-assets/css/plugins/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="../library/robust-assets/css/plugins/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="../library/robust-assets/css/plugins/extensions/unslider.css">
    <!-- END Vendor CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" href="../library/robust-assets/css/app.min.css"/>
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../library/robust-assets/css/components/weather-icons/climacons.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../library/style/style.css">

    <!-- END Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../library/style/chat.css">
    <link rel="stylesheet" type="text/css" href="../library/cardex/cardextension.css">
    <script src="../library/jquery-3.4.1.min.js" type="text/javascript"></script>

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

      <div id="preloader">
          <div class="spinner">
              
          </div>
      </div>

      
<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow bg-danger">
    <div class="navbar-wrapper">
       <div class="navbar-header bg-danger" >
            <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu hidden-md-up float-xs-left"><img src="../images/logo.png"  height="40px">

                </li>
                <li class="nav-item ">
                  
                </li>

                <li class="nav-item hidden-md-up float-xs-right">
                  <div class="font-weight-bold" id="view2" style="margin-top: 10px;"></div>
                </li>
            </ul>
        </div>  
    </div>
</nav>


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