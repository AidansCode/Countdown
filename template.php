<!DOCTYPE html>
<html>
<head>
	<title>Countdown!</title>
	<style type="text/css">
		#countdown-box{
			width : 400px;
			height :400px;

		}
		#timer {
			width :400px;
			height :180px;
			clear : both;
			border:1px solid black;
		}
	</style>


		<link rel="stylesheet" type="text/css" href="assets/app.css">
</head>
<body>
	<p>
		<div class="topnav">
		  <a href="index.html">Home</a>
		  <a href="getStarted.php">Insert New Countdown</a>
		  <a href="Support.html">Contact Aidan for Support</a>
		  <a href="about.html">About</a>		
		</div>
	</p>
	<center>
		<h1>
			Timer 
		</h1>
		
		<div id="countdown-box">
			<div style="float: left;">
				
			</div>
			<div id="timer">
				<?php
					echo htmlentities($countdown['name']);
					
				?>	
			</div>
				<p style="float:right;">
					Created at: Yesterday
				</p>
		</div>


	


	</center>
</body>
</html>