<?php

$con=mysqli_connect("localhost","root","","kalam");

if($con)
{
	//echo "connection done"."<br>";
}
else
{
	echo "<script>alert('Connection Not Done')</script>";
}


?>