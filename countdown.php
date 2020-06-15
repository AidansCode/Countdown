<?php

	require "emv.php";

	$countdownID = $_GET['id'] ?? null;

	if (empty($countdownID)) {
		http_response_code(404);
		die; #oof
	}

	$db = new mysqli(DATABASE_HOST, DATABASE_USERNAME, 
		DATABASE_PASSWORD, DATABASE_NAME);

	$countdownID = $db->real_escape_string($countdownID); #sanatize

	$query = "SELECT * FROM countdowns WHERE id=". $countdownID;

	$result = $db->query($query);

	if(!$result){
		echo "Error 2!: " . $db->error;
	}
	else{
		if ($result->num_rows == 0) {
			http_response_code(404);
			die; #oof
		}
		else{
			$countdown = $result->fetch_assoc();
			include "template.php";
			#var_dump($countdown);

		}
	}







