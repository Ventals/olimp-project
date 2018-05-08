<?php
	## function declare
	function createUser($link, $token, $given_name, $last_name) {
		$query = "INSERT INTO `users` (`id`, `token`, `role`, `given_name`, `last_name`,'choise_sphere') VALUES (NULL, '$token', 'user', '$given_name', '$last_name', '');";
		mysqli_query($link, $query);
	}

	$host = "mj235895.mysql.ukraine.com.ua";
	$login = "mj235895_stud18";
	$password = "uad2lfjh";
	$DB = "mj235895_stud18";
	$DB_CONNECTION = mysqli_connect($host, $login, $password, $DB);

	if (!$DB_CONNECTION) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
	}
	
	
