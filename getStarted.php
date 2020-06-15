<!DOCTYPE html>
<html>
<head>
	<title>Countdown!</title>

		<link rel="stylesheet" type="text/css" href="assets/app.css">
</head>
<body>
	<p>
		<div class="topnav">
		  <a href="index.html">Home</a>
		  <a class="active" href="getStarted.html">Insert New Countdown</a>
		  <a href="Support.html">Contact Aidan for Support</a>
		  <a href="about.html">About</a>
		</div>
	</p>
	<p>
		Complete this form to initiated a countdown
	</p>
	<form action="submit.php" method="POST">
		<label>Name:</label>
		<input type="text" name="name"><br><br>
		<label>Date: </label>
		<input type="date" name="date"><br><br>
		<label>Time:</label>
		<input type="time" name="time"><br><br>
		<input type="submit" value="Submit">
	</form> <br>
	
</body>
</html>