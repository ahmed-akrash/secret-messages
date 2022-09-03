<?php
include("includes/start.php");
session_start();
if(isset($_SESSION["username"]));else header("Location:home.php");
?>
<link rel="stylesheet" href="css/myMessage.css">
	
</head>

<body>
	<header>
		<a href="myMessage.php"><span><img src="images/123.png"><h1><?php echo $_SESSION['username'];?></h1></span></a><a href="home.php" style="color: white; text-decoration: none">secret message</a>
		
		<a href="send.php"><input type="button" value="send message"></a>
		<a href="logout.php"><input type="button" value="logout"></a>
	</header>
	
		
	<h1 style="text-align: center;margin-top: 7%; color:white">my messages</h1>
	<div  id="messageBox">
			
		<br>
		
		<?php include('phpDB/myMessageDB.php')?>
		
	</div>
<?php
include("includes/end.php");
?>