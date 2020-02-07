
<?php
include('../db/db.php');
include('header_link.php');
 ?>
 <style>
 	#content-overlay2 {
	background-color: white;
	width: 200px;
	height:180px;
	text-align: center;
	margin-top: 50px;

}



 </style>
<meta name="viewport" content="width=device-width, initial-scale=1">


<script src='vendor/jsqrcode-packaged/build/jsqrcode.js'></script>
<script src="../library/jquery-3.4.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/fullscreen.css">

<body>
	<div class="video-container fullscreen-bg">
		<video autoplay id="camsource" class='fullscreen-bg__video'></video>
	</div>
	
<center>
	<div id="content-overlay2" style="display: none;">
		<br><br><br>
		<input type="button" name="" class="btn btn-success white font-weight-bold" id="rescan" value="Rescan" style="margin-top:0px;margin-bottom: 0px;"><br><br>
			<input type="button" name="" class="btn btn-danger white font-weight-bold" id="back" value="back" style="margin-top:0px;margin-bottom: 0px;">
	</div>
	<div id="content-overlay" style='display: none;'>
		
		<div id="qrcode-value" class='qrcode-value' style='display: none'></div>
		<input type="hidden" name="" id="qrcode" >
		<a class='copy-clipboard button'>
		</a>
		<a class='open-browser button'>
		</a>
		<a class='close-overlay button'>
		</a>
	</div>
	<?php
	?>
</center>

	<script src='js/overlay.js'></script>
	<script src='js/main.js'></script>
</body>
<script>
	$(document).ready(function(){
		$('#content-overlay').hide();
		var x = setInterval(function(){

		if ($('#qrcode-value').html() !== "") {

			$("#qrcode").focus();
			var val=$('#qrcode-value').html();
			$("#qrcode").val(val);
			var qr = $("#qrcode").val();


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
               if (view === "finish") {
                $("#content-overlay2").hide();
               }else if(view === "THE QR CODE IS WRONG!"){
               	$("#content-overlay2").show();
               }
            }
            
          }
        })

		
 $("#rescan").click(function(){
location.reload();
 });

 $("#back").click(function(){
window.location = "../index.php" ;
 });


		}
	  },500);
	})
</script>
