<?php
include("includes/start.php");
session_start();
//$_SESSION["username"]="ahmed reda";
//session_destroy();
?>
<link rel="stylesheet" href="css/home.css">
	
</head>

<body>
	<header>
		<a href="myMessage.php"><span><img src="images/123.png"><h1><?php if(isset($_SESSION["username"]))echo $_SESSION["username"];else echo "unknown"; ?></h1></span></a> <a href="home.php" style="color: white; text-decoration: none">secret message</a>
		
		<a href="send.php"><input type="button" value="send message"></a>
		
		<?php if(!isset($_SESSION["username"]))echo '<a href="register.php"><input type="button" value="register"></a>
		<a href="login.php"><input type="button" value="login"></a>';else echo'<a href="logout.php"><input type="button" value="logout"></a>'?>
		
		
		
	</header>
	
	<fieldset id="messageBox">
		<legend>secret messsages</legend>
		<br>
		<p style="">that is the appliaction that Improve your friendship by discovering your strengths and areas for improvement.</p>
		<p style="display: inline-block">Let your friends be honest with you ! ...</p>
		<?php if(!isset($_SESSION["username"]))echo'<a href="register.php"><input type="button" value="Register"></a>
		<a href="login.php"><input type="button" value="login"></a>'?>
	</fieldset>
	
	<?php
include("includes/end.php");
?>