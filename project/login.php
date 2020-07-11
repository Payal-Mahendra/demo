<?php
include("connection.php");

if(isset($_POST['button']))
{
$email=$_POST['email'];
$password=$_POST['password'];

$str="SELECT * FROM registration WHERE email='$email'";

$result=mysqli_query($con,$str);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$num= mysqli_num_rows($result);


if($row['email'] == $email && $row['password'] == $password && $num!=0)
{
	session_start();
	$_SESSION['name']=$row['name'];

	header("location:data.php");
}
else {
	echo  "<script>alert('WRONG DATA')</script>";
}


}
?>