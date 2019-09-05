<?php

if(isset($_POST['mydata']) && !empty($_POST['mydata'])){
	
	$encoded_data = $_POST['mydata'];
	$binary_data = base64_decode( $encoded_data );
	
	// save to server (beware of permissions)
	
	$result = file_put_contents('photos/webcam.jpg', $binary_data );
	if (!$result){
		die("Could not save image!  Check file permissions.");
		
		} else{
			
			
			?>
			<script type="text/javascript">
			alert("snapshot taken and stored");
			window.location = "index.php";
			</script>
			<?php
			}
	
	
	}else{
		?>
		<script type="text/javascript">
			alert("Parameter missing!");
			window.location = "index.php";
			</script>
			<?php
		
		}
	
	?>
