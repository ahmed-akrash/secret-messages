<?php
include("includes/start.php");
?>
<link rel="stylesheet" href="css/register.css">
	
</head>

<body>
	<header>
		<a href="myMessage.php"><span><img src="images/123.png"><h1>unknown</h1></span></a> <a href="home.php" style="color: white; text-decoration: none">secret message</a>
		
		<a href="send.php"><input type="button" value="send message"></a>
		<a href="register.php"><input type="button" value="register"></a>
		<a href="login.php"><input type="button" value="login"></a>
	</header>
	
	<div id="messageBox">
		<form action="phpDB/registerDB.php" method="post" enctype="multipart/form-data">
			<center><h1>Register</h1></center>
			<label>first name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><input class="input" type="text" placeholder="" name="Fname" id="" required title="Please enter at least 3 characters a-z or numbers" pattern="[a-zA-Z0-9].{3,}"><br><br>
			<label>last name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><input class="input" type="text" placeholder="" name="Lname" id=""required title="Please enter at least 6 characters a-z or numbers" pattern="[a-zA-Z0-9].{3,}"><br><br>
			<label>your email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input class="input" type="email" placeholder="" name="email" id="" required  pattern=".{6,}"><br><br>
			<label>password  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input class="input" type="password" placeholder="" name="pass" id="pass1" required title="Please enter at least 6 characters a-z or numbers" pattern="[a-zA-Z0-9].{6,}" onKeyUp="Ocheck();"><br><br>
			<label>Confirm password </label><input class="input" type="password" placeholder="" name="photo" id="pass2" required title="Please enter at least 6 characters a-z or numbers" pattern="[a-zA-Z0-9].{6,}" onKeyUp="Ocheck();"><br><br>
			<label>your photo &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><input class="input" type="file"  name="" id="" required><br><br>
			<center><input type="submit" id="submit" disabled>
			<input type="reset"></center>
		</form>
	</div>
	<script>
		function Ocheck(){
		var pass1=document.getElementById("pass1").value;
		var pass2=document.getElementById("pass2").value;
		var submit=document.getElementById("submit");
		if(pass1!=''&&pass1==pass2)
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