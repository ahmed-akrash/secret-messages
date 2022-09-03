<?php
include("includes/start.php");
session_start();
if(!isset($_SESSION["username"]));else header("Location:home.php");
?>
<link rel="stylesheet" href="css/login.css">
	
</head>

<body>
	<header>
		<a href="myMessage.php"><span><img src="images/123.png"><h1>unknown</h1></span></a> <a href="home.php" style="color: white; text-decoration: none">secret message</a>
		
		<a href="send.php"><input type="button" value="send message"></a>
		<a href="register.php"><input type="button" value="register"></a>
		<a href="login.php"><input type="button" value="login"></a>
	</header>
	
	
	
	<div id="messageBox">
		<form action="phpDB/loginDB.php" method="post" enctype="multipart/form-data">
			<center><h1>login</h1></center>
			
			<label>email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input class="input" type="text" placeholder="" name="email" id="email" onKeyUp="Ocheck();"><br><br>
			<label>password  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input class="input" type="password" placeholder="" name="pass" id="pass" onKeyUp="Ocheck();"><br><br>
			
			<center><input type="submit" value="login" id="submit" disabled >
			<input type="reset"></center>
		</form>
	</div>
	
	
	
	<script>
		function Ocheck(){
		var email=document.getElementById("email").value;
		var pass=document.getElementById("pass").value;
		var submit=document.getElementById("submit");
		if(email!=''&&pass!='')
			{
				submit.disabled = false;
			}
			else{
				submit.disabled = true;
			}
		}
	</script>
<?php
include("includes/end.php");
?>