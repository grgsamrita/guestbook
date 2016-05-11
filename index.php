<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>

    	<link rel="stylesheet" href="assets/css/style.css">
    	<!-- <link rel="stylesheet" href="assets/css/bootstrap.css"> -->
    	<link rel="stylesheet" href="assets/css/bootstrap-theme.css">
    	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="assets/css/jquery.simple-dtpicker.css">
    	    	
    	<script type="text/javascript" src="assets/js/jquery.js"></script>
    	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    	<script type="text/javascript" src="assets/js/jquery.simple-dtpicker.js"></script>

	</head>
	<body>
		<div class="wrapper">
		<div id="header">
			<div id="header-title"><a href="http://localhost/guestbook/">guestbook</a></div>
			<div id="nav">
				
				<ul class="nav nav-tabs">
					<li><a href="viewguestbook.php">View Guestbook</a></li>
				</ul>
			</div>
		</div>	
		<?php	
			include('addguestbook.php');
		?>
		</div>
		<!-- <footer class="footer"> -->
			<!-- copyright@accSecure.com -->
		<!-- </footer> -->
	</body>
	<script type="text/javascript">
	$(function(){
		$('#datetimepicker').appendDtpicker({
			"autodateOnStart": false
		});
			
	});
	
</script>
</html>