
<?php
include('header_link.php');
?>

<!DOCTYPE html>
<!-- saved from url=(0022)https://qrcodescan.in/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>QR Code Scanner</title><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="description" content="QR Code Scanner is the fastest and most user-friendly web application."><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-title" content="QR Scanner"><meta name="apple-mobile-web-app-status-bar-style" content="#e4e4e4"><meta name="apple-mobile-web-app-capable" content="yes"><meta name="application-name" content="QR Scanner"><meta name="msapplication-TileColor" content="#e4e4e4"><meta name="msapplication-TileImage" content="/images/touch/mstile-150x150.png"><meta name="theme-color" content="#fff"><script type="text/javascript" async="" src="./QR Code Scanner_files/analytics.js.download"></script><script async="" src="./QR Code Scanner_files/analytics.js.download"></script><script src="./QR Code Scanner_files/nb9HqmBcQezfzHsx4fDJ0-JXM14.js.download"></script><script src="./QR Code Scanner_files/js"></script><link rel="apple-touch-icon" href="images/touch/apple-touch-icon.jpg"><link rel="icon" type="image/png" href="images/touch/favicon-32x32.png" sizes="32x32"><link rel="icon" type="image/png" href="images/touch/favicon-16x16.png" sizes="16x16"><link rel="shortcut icon" href="images/touch/favicon.ico"><link rel="manifest" href="manifest.json"><link rel="preload" as="script" href="decoder.js"><link href="./QR Code Scanner_files/styles.css" rel="stylesheet"><link rel="icon" href="images/touch/android-chrome-512x512.png" sizes="512x512"><link rel="icon" href="images/touch/android-chrome-192x192.png" sizes="192x192"><meta name="mobile-web-app-capable" content="yes"><meta name="x5-orientation" content="portrait"><meta name="screen-orientation" content="portrait"><meta name="x5-page-mode" content="app"><meta name="browsermode" content="application"></head><body><div class="app__layout"><main class="app__layout-content"><video autoplay="" playsinline="true"></video>
<script src="../library/jquery-3.4.1.min.js" type="text/javascript"></script>

	<div class="app__dialog app__dialog--hide" id="hide" style="display: none;">
		<div class="app__dialog-content">
		<div id="myForm" >
			<input type="hidden" id="result" name="qr" ><br><br>
			 <div id="view" class="font-weight-bold" style="text-align: center;color: red"></div><br>
			<input type="button" name="" class="btn btn-success white font-weight-bold" id="rescan" value="Rescan" style="margin-top:0px;margin-bottom: 0px;"><br><br>
			<input type="button" name="" class="btn btn-danger white font-weight-bold" id="back" value="back" style="margin-top:0px;margin-bottom: 0px;">
          

		  </div>
		

<script>

$(document).ready(function(){
	var x = setInterval(function(){
$("#result").focus();
 var qr = $("#result").val();

 if (qr == "") {
 	
 }else{
 	
      $.ajax({
          url:"submit.php",
          type:"POST",
           data:{
            "submit1":1,
            "qr":qr
          },
          success :function(view){
            clearInterval(x);
            
            if (view == "flp_step1") {
               window.location = "../user/index.php";
            }else if(view == "ssg_step1"){
               window.location = "../user/index2.php";
            }else if (view == "flpssg_step1") {
               window.location = "../user/index.php";
            }else if (view == "flpssg_step2") {
            	window.location = "../user/index2.php" ;
            }else if(view == "finish"){
            	alert('you are finish to vote');
               window.location = "../index.php" ;
            }else{
               $("#view").html(view);
               $("#hide").show();
            }
            

          }
        })

 }

 $("#rescan").click(function(){
location.reload();
 });

 $("#back").click(function(){
window.location = "../index.php" ;
 });

   },1000);
});


</script>
		</div>
		</div>
		<div class="app__dialog-overlay app__dialog--hide"></div>
		   <div class="app__snackbar"></div><input type="file" capture="camera" id="camera">
		       <img src="" id="frame"></main>
		   </div>
		   <div class="app__overlay" style="border-style: solid;">
		   <div class="app__overlay-frame"></div><div class="custom-scanner" style="display: block;">
		</div>
		   <script async="" src="./QR Code Scanner_files/pwacompat.min.js.download" integrity="sha384-GOaSLecPIMCJksN83HLuYf9FToOiQ2Df0+0ntv7ey8zjUHESXhthwvq9hXAZTifA" crossorigin="anonymous"></script><script type="text/javascript" src="./QR Code Scanner_files/main.201113f887d44acdfa77.bundle.js.download"></script></body></html>
<script async src="https://cdn.jsdelivr.net/npm/pwacompat@2.0.6/pwacompat.min.js" integrity="sha384-GOaSLecPIMCJksN83HLuYf9FToOiQ2Df0+0ntv7ey8zjUHESXhthwvq9hXAZTifA"
      crossorigin="anonymous"></script>





    <script>
      if (location.hostname !== "localhost") {
        (function (i, s, o, g, r, a, m) {
          i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
          }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'pageview');
      }
    </script>
    <script async src="https://cdn.jsdelivr.net/npm/pwacompat@2.0.6/pwacompat.min.js" integrity="sha384-GOaSLecPIMCJksN83HLuYf9FToOiQ2Df0+0ntv7ey8zjUHESXhthwvq9hXAZTifA"
      crossorigin="anonymous"></script>
  </body>
</html>

<?php
include('footer_link.php');
?>