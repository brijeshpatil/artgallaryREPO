<?php
	include('..\conn.php');
	if(isset($_REQUEST['login']))
	{
		$email_id=$_REQUEST['email_id'];
		$pass=$_REQUEST['password'];
		$sq="select email_id,password from artist where email_id='$email_id'";
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

