<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	include_once('connectDB.php');
	
	function Filter($var)
		{
			return filter_var ( $var, FILTER_SANITIZE_STRING);
		}

	$search=filter_var($_POST['search']);

	 if(isset($search)){

		 $letter =  $search;
		 $sql = "SELECT username , id FROM users WHERE username LIKE '$letter%'";

		 $result = mysqli_query($connect,$sql);

		 if(mysqli_num_rows($result) > 0)
		 {
			 while ($row=mysqli_fetch_row($result))
				{
				 echo '<span><img src="images/123.png"><h1>'.$row[0].'</h1></span><a href="send.php?SC='.$row[0].'&id='.$row[1].'"><input type="button" value="choose"><br><hr>';
				}

		 }
		  else
		  {
			echo " ";
		  }

		 }
	else
	{
		header('location:../send.php');
	}
	mysqli_close($connect);
}
else
{
	header('location:../home.php');
}


