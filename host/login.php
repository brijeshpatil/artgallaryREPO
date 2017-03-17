<?php
	include('..\conn.php');
	if(isset($_REQUEST['login']))
	{
		$email_id=$_REQUEST['email_id'];
		$host_user=$_REQUEST['hostusername'];
		$pass=$_REQUEST['password'];
		$sq="select email,password from host where email='$email_id' or hostusername='$host_user'";
		$res=$conn->query($sq);
$f=$res->fetch_object();
	if(($f->password==$pass)
	{
		echo "true";
		
	}
	else
	{
		echo "false";
	}
	}
?>

