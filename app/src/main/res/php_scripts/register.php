<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
	require 'connect.php';
	register();
}

function register(){
	global $connect;
	
	$username=$_POST["username"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	
	$sql_query="insert into `users` (username,email,password) values ('$username','$email','$password');";

	mysqli_query($connect,$sql_query) or die (mysqli_error($connect));
	mysqli_close($connect);
	
}

?>