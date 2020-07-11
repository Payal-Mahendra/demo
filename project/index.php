<html>
<body>

<form  method="POST" action="">

<table>
	<tr>
		<td>NAME:</td>
		<td><input type="text" id="firstName" name="name" required/></td>
	</tr>
	
	<tr>
		<td>EMAIL: </td>
		<td><input type="email" id="inputEmail" name="email" required/></td>
</tr>
<tr>
	<td>PASSWORD</td>
	<td><input type="password" id="inputPassword" name="password" required/></td>
	</tr>

	<tr>
		<td>GENDER</td>
		<td><input type="radio" name="gen" value="male" required/>MALE
            <input type="radio" name="gen" value="female" required/>FEMALE
		</td>
</tr>


<tr>
	<td><input type="submit" name="button1" value="REGISTRATION"/></td>
	
</tr>

</table>
</form>
</body>
</html>

<?php

include("connection.php");

if(isset($_POST['button1']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$gen=$_POST['gen'];
	
    $str="INSERT INTO registration(name,email,password,gen) VALUES('$name','$email',$password,'$gen')";

    $result=mysqli_query($con, $str);

    if($result)
    {
    	header ("location:login.html");
    }
   else
    {
	   echo "<script>alert('DATA NOT INSERTED')</script>";
     }
}
?>