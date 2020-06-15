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
				<?php
					echo htmlentities($countdown['name']);
				?>
			</div>
			<input type="hidden" id="end-time" value="<?php echo htmlentities($countdown['end_time']); ?>" />
			<div id="timer">
				<h3 id="timer-text"></h3>
			</div>
			<p style="float:right;">
				Created at: <?php
					echo htmlentities($countdown['created_at']);
				?>
			</p>
		</div>
	</center>

	<script type="text/javascript">
		var end_time = document.getElementById("end-time").value;
		end_time = new Date(end_time);
		function updateTimerText(){
			var now = new Date();
			var diff = Math.floor((end_time - now) / 1000);

			var res = 'IT IS TIME GAMERS';
			if (diff > 0) {
				res = formatTime(diff);
			}

			document.getElementById('timer-text').innerHTML = res;
		}

		year = 31536000;
		month = 2592000;
		week = 604800;
		day = 86400;
		hour = 3600;
		minute = 60;

		function formatTime(timeBetween) {
			var result = '';
			if (timeBetween >= year) {
				years = Math.floor(timeBetween / year);
				result = years + ' year' + (years == 1 ? '' : 's') + ', ';
				timeBetween = timeBetween % year;
			}
			if (timeBetween > month) {
				months = Math.floor(timeBetween / month);
				result += months + ' month' + (months == 1 ? '' : 's') + ', ';
				timeBetween = timeBetween % month;
			}
			if (timeBetween > week) {
				weeks = Math.floor(timeBetween / week);
				result += weeks + ' week' + (weeks == 1 ? '' : 's') + ', ';
				timeBetween = timeBetween % week;
			}
			if (timeBetween > day) {
				days = Math.floor(timeBetween / day);
				result += days + ' day' + (days == 1 ? '' : 's') + ', ';
				timeBetween = timeBetween % day;
			}
			if (timeBetween > hour) {
				hours = Math.floor(timeBetween / hour);
				result += hours + ' hour' + (hours == 1 ? '' : 's') + ', ';
				timeBetween = timeBetween % hour;
			}
			if (timeBetween > minute) {
				minutes = Math.floor(timeBetween / minute);
				result += minutes + ' minute' + (minutes == 1 ? '' : 's') + ', ';
				timeBetween = timeBetween % minute;
			}
			if (timeBetween > 0)
				result += timeBetween + ' second' + (timeBetween == 1 ? '' : 's') + ', ';
			
			return result.substring(0, result.length - 2);
		}

		setInterval(updateTimerText, 50);
	</script>
</body>
</html>