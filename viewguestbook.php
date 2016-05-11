<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>

    	<link rel="stylesheet" href="assets/css/style.css">
    	<link rel="stylesheet" href="assets/css/bootstrap.css">
    	<link rel="stylesheet" href="assets/css/bootstrap-theme.css">
    	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    	    	
    	<script type="text/javascript" src="assets/js/jquery.js"></script>
    	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

	</head>
	<body>
		<div class="wrapper">
		<div id="header">
			<div id="header-title"><a href="http://localhost/guestbook/">guestbook</a></div>
			<div id="nav">
				
				<ul class="nav nav-tabs">
					<li><a href="http://localhost/guestbook/">Add Guestbook</a></li>
				</ul>
			</div>
		</div>	

		<div id="view">
		<?php	
			include('connect.php');
			$result = mysqli_query($con,"SELECT * FROM guestbook ORDER BY `datetime` desc");
			while(($row = mysqli_fetch_array($result))) {
   		?>

  		<h3 style="background-color: transparent; font-size: 18px; color: #ff8d00; font-weight:bold;"> 
      	<?php 
 			echo $row['title'];echo"<br/>";
 		?>
 		</h3>
 		<p style="background-color: transparent; font-size: 14px; color: grey; font-weight:bold;"> 
 		<?php
 			echo $row['description']."<br/>";
 		?>
 		<p style="background-color: transparent; font-size: 12px; color: light-grey; font-weight:bold;">
 		<?php
 			echo 'Updated by '.$row['username']; echo " at ".$row['datetime'];   
  		?>
 		</p>
  
 		<?php
  
			}
		?>
		</div>
		</div>
		<!-- <footer class="footer"> -->
			<!-- copyright@accSecure.com -->
		<!-- </footer> -->
	</body>
</html>