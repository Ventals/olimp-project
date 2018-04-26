<?php
	include "/connect_DB.php";

	$token = $auth0->getUser()["sub"];
	$redirect_uri  = getenv('AUTH0_CALLBACK_URL');
	$given_name = $_POST["given_name"];
	$last_name  = $_POST["last_name"];
	createUser($link, $token, $given_name, $last_name);
	header("Location: $redirect_uri");
