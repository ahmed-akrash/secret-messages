<?php

	include_once('phpDB/connectDB.php');

	define('id',$_SESSION['id']);

	$sql = "SELECT * FROM `messages` WHERE user_id=".id;

		 $result = mysqli_query($connect,$sql);

		 if(mysqli_num_rows($result) > 0)
		 	{
			 while ($row=mysqli_fetch_row($result))
				{
				 echo '<div class="messages">
				 		<h2> '.$row[2].'</h2>
						<p>'.$row[3].'</p>
						<h6>'.$row[1].' </h6>
						</div>';
				}

		 	}
		  else
		  {
			echo "";
		  }


?>