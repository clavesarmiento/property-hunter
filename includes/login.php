<?php
session_start();
include('config.php');
error_reporting(0);

if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$sql ="SELECT username, password FROM users WHERE username=:username and password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['login']=$_POST['username'];
	header('location: ../index.php');
} else{
  	echo "<script>alert('Invalid Details');</script>";

}

}

?>