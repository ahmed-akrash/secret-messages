<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
	session_start();
	if(isset($_SESSION["username"]))$sender=$_SESSION["username"];else $sender= "unknown";
	
	include_once('connectDB.php');
	
	
	function Filter($var)
	{
		return filter_var ( $var, FILTER_SANITIZE_STRING);
	}
	
	
	
	define('id',Filter($_POST['id']));
	define('message',Filter($_POST['message']));

	
		$mydate=date('Y-m-d H:i:s A');
		$query=" INSERT INTO `messages` (`id`, `time`, `sender`, `text`, `user_id`) VALUES (NULL, '".date('Y-m-d h:i:s A',strtotime($mydate))."', '"./*$sender*/'unknown'."', '".message."', '".id."'); ";
	
		if(mysqli_query($connect,$query))
		{
			
			header("Location:../myMessage.php");
		}
	}
	mysqli_close();

?>