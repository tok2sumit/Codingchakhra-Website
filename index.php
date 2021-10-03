<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HOME</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--  <link rel="stylesheet" type="text/css" href="bootstrap.css" >-->
  <style>
/*Styling for an menu navigation*/
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(218, 214, 214);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: black ;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color:whitesmoke;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.hr{
    border-bottom: 5px solid #00bcd480;
}


*{
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #09091f;
  padding: cover;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  text-align: center;
  float: left;
  width: 30%;
  height: 100%; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #09091f;
  padding: 10px;
  text-align: center;
  color: white;
}

a{
  text-decoration: none;
  text-align: left;
  size: 16px;
  padding: 30px;
}


a:link {
  color:black;
}

/* visited link */
/*a:visited {
  color: green;
}
*/

/* mouse over link */
a:hover {
  color: white;
}

/* selected link */
a:active {
  color:black;
}
#section1{
  background-color:#f1f1f1 ;
  height: 600px;
}
html {
  scroll-behavior: smooth;
}
#section2{
  background-color:#f1f1f1 ;
  height: 600px;
}




.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  
  background-color: #2196F3;
  color: black;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
    position: fixed;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

.buttonnav {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: cover;
}

.buttonnav:hover {
  background-color: #555;
}

/*css for dropdown meny in navbar.*/

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown:hover .dropbtn {
  background-color: rgb(170, 170, 180);
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}


  </style>
<link rel="icon"href="icon.jfif" type="image/x-icon">
</head>
<body>
<header>
  <!--   html tag for side menu navigation bar -->
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <button class="button"onclick="window.location.href = 'Login.php';">LOGIN</button>
    <button class="button" onclick="window.location.href = 'Register.php';">REGISTER</button>
  
    <a href="Login.php" >Data Structure</a>
    <a href="Login.php" >Algorithm</a>
    <a href="Login.php" >Videos</a>
    <a href="Login.php" >Developers</a>
    
  </div>
  <span style="font-size:30px;cursor:pointer;float:left;margin-left: 8px;"  onclick="openNav()">&#9776; Menu</span>
  
  <button class="buttonnav" onclick="window.location.href = 'Login.php';" style="float: right;margin-right: 30px;margin-top: 40px;">LOGIN</button>

  <button class="buttonnav" onclick="window.location.href = 'Register.php';" style="float: right;margin-right: 8px;margin-top: 40px">REGISTER</button>
  
  <h1>CodingChakra</h1>

  <section>
    

    <div class="topnav">
      <a class="active" href="Home.html">Home</a>
      <div class="dropdown">
        <button class="dropbtn" style="color: black;">Data Structure
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="Login.php" >LinkedList</a>
          <a href="Login.php" >Stack</a>
          <a href="Login.php" >Trees</a>
        </div>
      </div> 
      <a  href="Login.php" >Algorithms</a>
      
      
  
        
      
      <a href="Login.php" >Java</a>
      <a href="Login.php" >Python</a>
      
      <div class="search-container">
        <form action="">
          <input type="text" placeholder="Search.." Disabled name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
    
  </section>
        </header>
        
          
            
            <iframe src="AboutHome.html" name="iframe_a" height="800px" width="100%" ></iframe>



        <footer>
          <p>CodingChakra</p>
        </footer>
    
    <!--Scripting for side menu navigation bar -->
        <script>
          function openNav() {
            document.getElementById("mySidenav").style.width = "200px";
          }
          
          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
          }

          </script>   
    
    
</body>
</html>