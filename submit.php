<?php

	require "emv.php";

	$name = $_POST['name'] ?? null;
	$date = $_POST['date'] ?? null;
	$time = $_POST['time'] ?? null;

	
	if (empty($name) || empty($date) || empty($time)) {
		header("Location: http://countdown.org:8080/getStarted.php?error=1");
	}

	$endTime = (new DateTime($date .  " " . $time))->format("Y-m-d H:i:s");
	$currentTime = (new DateTime())->format("Y-m-d H:i:s");


	#echo($endTime->format("Y-m-d H:i:s"));
	
	$db = new mysqli(DATABASE_HOST, DATABASE_USERNAME, 
		DATABASE_PASSWORD, DATABASE_NAME);

	if ($db->connect_errno) {
		echo "Error! " . $db->connect_error;
		die;
	}

	$name = $db->real_escape_string($name); #sanatize

	$query = "INSERT INTO countdowns VALUES (null, '". $name ."', '". $endTime . "', '" . $currentTime . "');";

	$result = $db->query($query);
	if (!$result) {
		echo "Error 2!: " . $db->error;
	} else {
		$insert_id = $db->insert_id; #new variable = value stored in insert_id databsase instance. 

		$link_redirect ="http://countdown.org:8080/countdown.php?id=".  $insert_id;

		header("Location: ". $link_redirect); 
	}

	