<?php
require 'connect.php';
if (isset($_POST['user']) && isset($_POST['pass'])){
	$username = $_POST['user'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$query = "INSERT INTO `users` (username, password, email) VALUES ('$username','$password', '$email')";
	$result = mysqli_query($connection, $query) OR die(mysqli_error($connection));
	echo "'$result'<br>";
	if($result){
		echo "User Created Successfully.";
	}
	else{
		echo "User Registration Failed";
	}
}
?>
