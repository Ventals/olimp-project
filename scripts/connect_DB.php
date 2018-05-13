<?php
	## function declare
	function createUser($link, $token, $given_name, $last_name) {
		$query = "INSERT INTO `users` (`id`, `token`, `role`, `given_name`, `last_name`) VALUES (NULL, '$token', 'user', '$given_name', '$last_name');";
		mysqli_query($link, $query);
	}

	function setProfession($link, $token, $choise_sphere) {
		$query = "UPDATE `users` SET `choise_sphere` = '$choise_sphere' WHERE `users`.`token` = '$token';";
		mysqli_query($link, $query);
	}


function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

	$host = "mj235895.mysql.ukraine.com.ua";
	$login = "mj235895_stud18";
	$password = "uad2lfjh";
	$DB = "mj235895_stud18";
	$DB_CONNECTION = mysqli_connect($host, $login, $password, $DB);
	mysqli_query($DB_CONNECTION, "SET NAMES utf8");

	if (!$DB_CONNECTION) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
	}
	
	
