<?php
session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'users');

$name =$_POST['new_user'];
$pass=$_POST['new_psw'];


$s = " select* from usertable where username = '$name'";

$result= mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if( $num == 1){
	echo"Username Already Taken ";
}else{
	$reg="insert into usertable(username ,password ) values ('$name','$pass' )";
	mysqli_query($con, $reg);
	echo "You Signed Up Succesfully";
	$_SESSION['username'];
    header('location:Home.php');
}
mysqli_close($con)
?>
