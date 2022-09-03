<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	include_once('connectDB.php');
	
	function Filter($var)
	{
		return filter_var ( $var, FILTER_SANITIZE_STRING);
	}
	
	
	
	define('Fname',Filter($_POST['Fname']));
	define('Lname',Filter($_POST['Lname']));
	define('email',Filter($_POST['email']));
	define('pass',password_hash(Filter($_POST['pass']), PASSWORD_DEFAULT));
	define('photo',$_POST['photo']);	

	
	$query="SELECT email FROM `users` WHERE email='".email."';";
	
	
	$result=mysqli_query($connect,$query);
	
	
	if(mysqli_num_rows($result) > 0)
	 {
	
			header("Location:../register.php");
	 }
	else
	{
		$query="INSERT INTO `users` (`id`, `fName`, `lName`,`username` ,`email`, `passWord`, `photo`) VALUES (NULL, '".Fname."', '".Lname."', '".Fname." ".Lname."', '".email."', '".pass."', '".photo."');";
	
		if(mysqli_query($connect,$query))
		{
			
			$query="SELECT id FROM `users` WHERE email='".email."';";
			$result=mysqli_query($connect,$query);
			$row=mysqli_fetch_row($result);
			
			session_start();
		 	$_SESSION['username']=Fname.Lname;
		 	$_SESSION['id']=$row[0];
			header("Location:../myMessage.php");
		}
	}
	mysqli_close();
	
}
else
{
	header('location:../home.php');
}


?>