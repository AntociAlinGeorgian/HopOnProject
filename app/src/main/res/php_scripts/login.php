<?php

require"init.php";
$user_name="alin";
$user_pass="parola123";

$sql_query="select username from users where username like '$user_name' and password like '$user_pass';";
$result = mysqli_query($con,$sql_query);

if(mysqli_num_rows($result)>0){
	$row=mysqli_fetch_assoc($result);
	$name=$row["username"];
	echo"<h3>Hello! Welcome!".$name."</h3>";
}else{
	echo"No info is available!";
}

?>