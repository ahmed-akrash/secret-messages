<?php
include("includes/start.php");
session_start();
?>
<link rel="stylesheet" href="css/send.css">
	<script src="js/jquery.js"></script>
	<script src="js/search.js"></script>
</head>

<body>
	<header>
		<a href="myMessage.php"><span><img src="images/123.png"><h1><?php if(isset($_SESSION["username"]))echo $_SESSION["username"];else echo "unknown"; ?></h1></span></a> <a href="home.php" style="color: white; text-decoration: none">secret message</a>
		
		<?php if(!isset($_SESSION["username"]))echo '<a href="register.php"><input type="button" value="register"></a>
		<a href="login.php"><input type="button" value="login"></a>';else echo'<a href="logout.php"><input type="button" value="logout"></a>'?>
		
	</header>
	
	<div id="messageBox">
		<img src="images/123.png">
		<h1><?php if(isset($_GET["SC"]))echo $_GET["SC"];else echo "unknown"; ?></h1><br>
		<p> please dont type any Not desirable messages  !</p><br>
		<form action="phpDB/sendDB.php" method="post" enctype="multipart/form-data" id="myform">
		<textarea rows="4" cols="40" style="border-radius:10px;" placeholder=" leave your message !" name="message"></textarea><br>
		<button type="submit" style="background-color:rgba(255,255,255,0.4);font-style: italic; font-size:18px; border-radius: 5px;"> send it !</button>
		</form>
	</div>
	
	<aside id="search">
		
		<h1>search</h1><br>
			<label>username </label><input class="input" type="text" placeholder=" it will auto search !"  id="SC"><br><br>
		
		
		<div id="result">
			<input type="hidden" name="id" value="<?php if(isset($_GET['id']))echo $_GET['id'];else echo "unknown"; ?>" form="myform">
		</div>
		
	</aside>
<?php
include("includes/end.php");
?>