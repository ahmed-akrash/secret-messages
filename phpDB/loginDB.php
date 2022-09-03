<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
	include_once('connectDB.php');
	
	function Filter($var)
	{
		return filter_var ( $var, FILTER_SANITIZE_STRING);
	}
	
	
	
	define('email',Filter($_POST['email']));
	define('pass',Filter($_POST['pass']));

	
	
	$query="SELECT email FROM `users` WHERE email='".email."';";
	
	
	$result=mysqli_query($connect,$query);
	
	
	if(mysqli_num_rows($result) > 0)
	 {
		 
		$query="SELECT passWord FROM `users` WHERE email='".email."';";
	
	
		$result=mysqli_query($connect,$query);
		
		$row=mysqli_fetch_row($result);
		
		if (password_verify(pass, $row[0]))
		{
			$query="SELECT username , id FROM `users` WHERE email='".email."';";
			$result=mysqli_query($connect,$query);
			$row=mysqli_fetch_row($result);
			
			
			session_start();
		 	$_SESSION['username']=$row[0];
		 	$_SESSION['id']=$row[1];
			header("Location:../myMessage.php");

			
		} else 
		{
			header("Location:../login.php");
		}

	 }
	 else
	 {
		 header("Location:../login.php");
	 }
	mysqli_close($connect);
}
else
{
	header('location:../home.php');
}
	




?>