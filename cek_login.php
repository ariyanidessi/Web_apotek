<?php 
session_start();
include'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query=mysqli_query($connection,"SELECT * from admin where username = '$username' and password = '$password' ");

$cek = mysqli_num_rows($query);
if($cek>0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:home.php");
}else{
	echo"dak masuk";

}


 ?>