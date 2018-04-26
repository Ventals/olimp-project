<?php
	## function declare
	function createUser($link, $token, $given_name, $last_name) {
		$query = "INSERT INTO `users` (`id`, `token`, `role`, `given_name`, `last_name`) VALUES (NULL, '$token', '', '$given_name', '$last_name');";
		mysqli_query($link, $query);
		
	}

	$host = "127.0.0.1";
	$login = "root";
	$password = "";
	$DB = "olimp-project-backend";
	$link = mysqli_connect($host, $login, $password, $DB);

	if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
	}
	
	
