
<html>
<body>
	<form method="POST">
		<table>
			<tr>
				<td><a href="login.html">Welcom...<input type="button" name="button" value="logout"/></a></td>		
			
		</tr>
		<tr>
			<td>ADDRESS:</td>
			<td><input type="text" name="address" required/></td>
		</tr>

<tr>
	<td><input type="submit" name="button1" value="SUBMIT"/></td>
	
</tr>

		</table>
	</form>
</body>
</html>
    

<?php
session_start();

include("connection.php");
$name=$_SESSION['name'];

$str="SELECT * FROM registration WHERE name='$name'";
$query=mysqli_query($con,$str);

$row=mysqli_fetch_array($query);
$user=$row["id"];
echo $user;
if(isset($_POST['button1']))
{
	$address=$_POST['address'];
	
    $str="INSERT INTO address(address,user_id) VALUES('$address',$user)";

    $result=mysqli_query($con, $str);

    if($result)
    {
     echo  "<script>alert('INSERTED')</script>";
     }
    
   else
    {
	   echo "<script>alert('DATA NOT INSERTED')</script>";
     }
}
?>

<?php

include("connection.php");

$name=$_SESSION['name'];

$str1="SELECT * FROM registration WHERE name='$name'";
$query1=mysqli_query($con,$str1);

$row1=mysqli_fetch_array($query1);
$user=$row1["id"];

$str="SELECT * FROM address WHERE user_id=$user";
 $query=mysqli_query($con,$str);
 $rowcount=mysqli_num_rows($query);
 for($i=1;$i<=$rowcount;$i++)
 {
    $row=mysqli_fetch_array($query);
    $show=$row["address"];
    echo $show;
 
 }
 ?>
 