<?php
include('..\conn.php');
if(isset($_REQUEST['submit']))
{
	
	$contact_no=$_REQUEST['contact_no'];
	
	$first_name=$_REQUEST['first_name'];
	$last_name=$_REQUEST['last_name'];
	$Email_id=$_REQUEST['email_id']; 
	$pass=$_REQUEST['password']; 

	 $sq="insert into UserRegister (contact_no,first_name,last_name,Email_id,password) values('$contact_no','$first_name','$last_name','$Email_id','$pass')";
	$res=$conn->query($sq);
	
	if($res)
	{
		echo "success";
		//header("location:show.php");
		
	}
	else
	{
		echo "fails";
	}
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<form action="" method="post">
    
    <table border="2" align="center">
    
    <tr>
    <td>Mobileno</td><td><input type="number" name="contact_no" /></td>
    </tr>
    
    <tr>
    <td>Firstname</td><td><input type="text" name="first_name" /></td>
    </tr>
    
    <tr>
    <td>Lastname</td><td><input type="text" name="last_name" /></td>
    </tr>
    
    <tr>
    <td>Address</td><td><input type="text" name="address" /></td>
    </tr>

    <tr>
    <td>City</td><td><input type="text" name="city" /></td>
    </tr>

<tr>
    <td>State</td><td><input type="text" name="state" /></td>
    </tr>

<tr>
    <td>Age</td><td><input type="number" name="age" /></td>
    </tr>

 <tr>
    <td>Gender</td><td>Male<input type="radio" name="gender" value="male" />
    FeMale<input type="radio" name="gender" value="female" /></td>
    </tr>

<tr>
    <td>Email</td><td><input type="text" name="email_id" /></td>
    </tr>

<tr>
    <td>Password</td><td><input type="text" name="password" /></td>
    </tr>

    <tr>
    <td><input type="submit" name="submit" value="submit" />
	 
</td>
    </tr>
    </table>
    </form>
</body>
</html>
-->