<html>
<head>
    <title>Rfid cam</title>
    <link rel="stylesheet" href="css/timstyle.css" />
      <link rel="stylesheet" href="style/style.css" />
      <?php include("header.php");?>
</head>
<body>

    <div class="containery">
		<div class="roww">
			
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
		
		</div>
		
		</div>
    
    <div class="row">
    <!---
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
	-->
    
    <div class="" style="margin-left:1%;">
    <h2 style="font-size:20pt;font-weight:bolder;text-align:center;"><font style="color:green;">EDEKEE</font> RFID APP</h2>
    <div id="my_camera" style=""></div>
	
	<!-- First, include the Webcam.js JavaScript Library -->
	<script type="text/javascript" src="webcam.js"></script>
	
	<!-- Configure a few settings and attach camera -->
	<script type="text/javascript">
	    Webcam.set({
	        width: 1400,
	        height: 1200,
			
			dest_width: 640,
			dest_height: 480,
			
			// final cropped size
			crop_width: 480,
			crop_height: 480,
			
	        image_format: 'jpeg',
	        jpeg_quality: 100
	    });
	    Webcam.attach('#my_camera');
	</script>
	
	<!-- A button for taking snaps -->

	<center><button class="snap" onclick="take()" style="width:90%;padding:30px;margin-left:2%;margin-right:2%;">Take Snap and Get Rfid Result</button></center>
      
      <form id="myform" method="post" action="myscript.php">
		<input id="mydata" type="hidden" name="mydata" value=""/>
	</form>
	<!-- Code to handle taking the snapshot and displaying it locally -->
	<script language="JavaScript" type="text/javascript">
	    function take_snapshot() {
	        // take snapshot and get image data
	        Webcam.snap(function (data_uri) {
	            // display results in page
	            document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';


	        });
	    }

	    function take() {
	Webcam.snap( function(data_uri) {
		 document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
		var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
		
		document.getElementById('mydata').value = raw_image_data;
		document.getElementById('myform').submit();
	} );
	    }

	</script>

	
    
    
    
    </div>
    <!--
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    
     <div id="results" class="border" style="display:none;">
					<center>
                    <img src="img/avatar.png" alt="me" style="height:240px;width:320px;display:none;" /></center>
                </div>
    
    </div>
	-->
    
    </div>
    
    
    </div>
    
    
    

<?php include("bottom.php");?>
