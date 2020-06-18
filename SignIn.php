<?php
session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'users');

$name =$_POST['user'];
$pass=$_POST['psw'];


$s = " select* from usertable where username = '$name' && password ='$pass'";

$result= mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if( $num == 1){
	$_SESSION['username'];
	header('location:Home.php');
	
}else{
	header('location:Home.php');
}
mysqli_close($con);
?>
