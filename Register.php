<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style type="text/css">

body{
margin: 0;
padding: 0;
font-family: sans-serif;
background-color: #09091f;
background-size: cover;

}
.registerFormbox{
width: 400px;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
color: white;
}

.h1{
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

.textboxinput{
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



    </style>
</head>
<body>
<?php
    include 'config.php';
    if (isset($_POST["submit"])){
    $fnm=$_POST["firstname"];
    $lnm=$_POST["lastname"];
    $mail=$_POST["emailid"];
    
    $unm=$_POST["username"];
    $pass=strval($_POST["password"]);
    $repass=strval($_POST["confermpassword"]);

    if($pass!=$repass){
        echo "<script>alert('Password and conferm Password Mismatch...!!');</script>";
    }else{
    
$insert= "insert into register values('$fnm','$lnm','$mail','$unm','$pass','$repass')";

if(mysqli_query($conn,$insert)){

    // Redirect browser
header("Location: Login.php");

}else{
    echo "Error: " . $insert . "<br>" . mysqli_error($conn);
  }
 }
}

?>

    <form method="POST" >
    <div class="registerFormbox">
    <h1 class="h1">Register</h1><br>
    
    <div class="textbox">
   <b> FIRST NAME:</b>
    <input type="text" class="textboxinput" name="firstname" maxlength="100" placeholder="First Name" required>
    </div>
    <div class="textbox">
        <b> LAST NAME:</b>
         <input type="text" class="textboxinput"name="lastname" maxlength="100" placeholder="Last Name" required>
         </div>
    <div class="textbox">
            <b> EMAIL ID:</b>
             <input type="email"class="textboxinput" name="emailid" maxlength="100" placeholder="E-mail id" required>
             </div>
    
    <div class="textbox">
                  <b> USER NAME:</b>
                   <input type="text" class="textboxinput"name="username" maxlength="100" placeholder="username" required>
                   </div>  
    <div class="textbox">
                    <b> PASSWORD:</b>
                     <input type="number" class="textboxinput"name="password" maxlength="100" placeholder="Password" required>
                     </div> 
    <div class="textbox">
                        <b> CONFERM PASSWORD:</b>
                         <input type="number" class="textboxinput"name="confermpassword" maxlength="100" placeholder="Connferm password" required>
                         </div> 
                 <input class="btn" type="submit" name="submit" value="REGISTER">
                 <input class="btn" onclick="window.location.href = 'Home.html';" type="submit" name="submit" value="CANCEL">

</div>
</form>
</body>
</html>