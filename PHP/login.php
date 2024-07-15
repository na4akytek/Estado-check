<?php
if ($SERVER["REQUEST_METHOD"] = "POST"){
	$email = $_POSTÃ["email"];
	$password = $_POST["password"]

	$data = $email . "," . $password . "\n";
	file_put_contents("users.txt, $data, FILE_APPEND");










}

















?>
