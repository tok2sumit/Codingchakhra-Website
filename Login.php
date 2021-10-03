<?php
session_start();
?>
<html>
<head>
	<title>Login</title>
	<!-- <link rel="stylesheet" type="text/css" href="login.css" > -->
	<style type="text/css">
		
		@import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body{
margin: 0;
padding: 0;
font-family: sans-serif;
/* background: url(bgimg2.jpg);   */
background-color: #09091f;
background-size: cover;

}

.login-box{
width: 280px;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-70%);
color: white;
}

.login-box h1{
	float: left;
	font-size: 40px;
	border-bottom: 6px solid #00bcd480;
	margin-bottom: 50px;
	padding: 13px 0;

}


.textbox{
width: 100%;
overflow: hidden;
font-size: 20px;
padding: 8px 0;
margin: 8px 0;
border-bottom: 1px solid  ;

}

.textbox i{
	width: 26px;
	float:left;
	text-align: center;
}

.textbox input{
	border: none;
	outline: none;
	background: none;
	color:white;
	font-size: 18px;
	width: 80%;
	float:left;
	margin: 0 10px;

}
.btn{
	width: 100%;
	background: none;
	border: 2px solid #00bcd480;
	color: white;
	padding: 5px;
	font-size: 18px;
	cursor: pointer;
	margin: 12px 0;
	

}
::placeholder{
color: white;
}
.Signin{
width: 280px;
position: absolute;
top: 85%;
left: 50%;
transform: translate(-50%,-50%);
color: white;
}
.signbtn{
	width: 100%;
	background: none;
	border: 2px solid #00bcd480;
	color: white;
	padding: 5px;
	font-size: 18px;
	cursor: pointer;
	margin: 12px 0;
	text-align: center;
	
}

	</style>


</head>
<body>

<?php

include 'config.php';
if(isset($_POST["submit"])){

	$user=strval($_POST["User"]);
	$pass=strval($_POST["Pass"]);
	
	$query= "select * from register where username = '$user' and password='$pass'";
	$data=mysqli_query($conn,$query) or die(mysqli_error($con));
	$count = mysqli_num_rows($data);
	if ($count<=0){
		echo "<script>alert('Wrong login or password');</script>";
		
	}else{
		$_SESSION["user"]=$user;
		echo '<script>alert("You are Logged In")</script>';
		header("Location: Home_After_Login.php");
	}
	}

?>
	<form name="login_form" method="post">
	<div class="login-box">
	<h1>Login</h1>
	
	<div class="textbox">
		<i class="fa fa-user" aria-hidden="true"></i>
		<input type="text" placeholder="Username" name="User" required>
	</div>
	
	<div class="textbox">
		<i class="fa fa-lock" aria-hidden="true"></i>
		<input type="password" placeholder="Password" name="Pass" required>	
	</div>

	<input class="btn" type="Submit" name="submit" Value="Login" >
	<input class="btn"onclick="window.location.href = 'index.php';" type="Submit" name="submit" Value="Cancel" >
	</div>
	</form>

	<form action="Register.php">
	<div class="Signin">
		<h4 color="white">Your First Time here??</h4>
		<input class="signbtn" onclick="window.location.href = 'Register.php';" type="Submit" name="" value="Register">
	</div>
	</form>


</body>
</html>