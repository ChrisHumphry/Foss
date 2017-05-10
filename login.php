<?php //Start the Session
session_start();
require('connect.php');
if (isset($_POST['username']) and isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM `user` WHERE username='$username' and
password='$password'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
echo $count;

if ($count == 1){
$_SESSION['username'] = $username;
}else{
$fmsg = "Invalid Login Credentials.";
}
}
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
header("location:welcome.php");
}else{}
?>
<html>
<head>
<title>Login</title>
</head>
<h2>Please Login</h2>
Username<input type="text" name="username" placeholder="Username">
Password<input type="password" name="password" id="inputPassword" placeholder="Password" required>
<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
<a class="btn btn-lg btn-primary btn-block" href="page.html">Register</a>
</form>
</html>
