<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])){
$error = "Username or Password is Invalid";
}
else
{
//Define $user and $pass
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
//Establishing Connection with server by passing server_name, user_id and pass as a patameter
$conn = mysqli_connect("localhost", "root", "");
//Selecting Database
$db = mysqli_select_db($conn, "Class");
//sql query to fetch information of registerd user and finds user match.
$query = mysqli_query($conn, "SELECT * FROM register WHERE username='$username'AND email='$email' AND  password='$password'");
$rows = mysqli_num_rows($query);
if($rows == 1){
header("Location: home.html"); // Redirecting to other page
}
else
{
$error = "Username of Password is Invalid";
}
mysqli_close($conn); // Closing connection
}
}
?>