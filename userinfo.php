<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection Successfull";
}else{
	echo "No connection";
	}
	
mysqli_select_db($con, 'users');

$user = $_POST['user'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$comment=$_POST['comment'];

$query = "INSERT INTO `userfeedback`(`username`, `email`, `mobile`, `comment`) VALUES ('$user','$email','$mobile','$comment')";

echo "$query";

mysqli_query($con,$query);

header('location:Homepage.php');

?>