<?php
 session_start();
 $error = "a";
 $username = "";
 list($error, $username) = validate(); 

 if($error == "" && $username != "")
 {
	$_SESSION["username"] = $username;
	/*echo $username;
	echo $_SESSION["username"]; */
//	header("Location:http://localhost/final_project/login_home.php");
	header("Location:http://miniprojectofwebsite.000webhostapp.com/login_home.php");
	exit();
 }
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>State Bank Personal Banking Login</title>
 <style>
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}

/*  COLUMN SETUP  */
.col {
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
}
.col:first-child { margin-left: 0; }


/*  GROUPING  */
.group:before,
.group:after {
	content:"";
	display:table;
}
.group:after {
	clear:both;
}
.group {
    zoom:1; /* For IE 6/7 */
}

/*  GRID OF THREE  */
.span_1_of_1 {
	width: 100%;
}
.span_1_of_2 {
	width: 100%;
}
.span_1_of_3 {
	width: 49%;
}
.span_2_of_3 {
	width: 49%;
}
.span_1_of_4 {
	width:100%;
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */

@media only screen and (max-width: 480px) {
	.col { margin: 1% 0 1% 0%;}
	.span_1_of_1, .span_1_of_2, .span_1_of_3, .span_2_of_3, .span_3_of_4 { width: 100%; }
}

input[type=text], input[type=password]{
    position: relative;
    top: 0px;
    left: 20%;
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
/*
input[type=text]{
    position: relative;
    top: -40px;
    left: 65px;
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

    position: relative;
    top: -40px;
    left: 65px;
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}*/


input[type=submit] {
    position: relative;
    top: 15px;
    left: 30%;
    width: 40%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

label {
	position: relative;
	left: 10%;
	top: 5px;
}
input[type=submit]:hover {
    
    background-color: #45a049;
}

form{
   
    border-radius: 5px;
   /* background-color: #f2f2e2; */
    margin-right:0%; margin-left:0%; margin-top:0%;margin-bottom:0%;
    padding: 0px;
  /*  border-width: 25px, 15px, 25px,10px;*/
}

/*
input[type=submit] {
    position: relative;
    top: -33px;
    left: 30%;
    width: 40%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

label {
	
	position: relative;
	left: 5px;
	top: -40px;
}
input[type=submit]:hover {
    
    background-color: #45a049;
}

form{
    
    border-radius: 5px;
    background-color: #f2f2e2;
    margin-right:0%; margin-left:0%; margin-top:0%;margin-bottom:0%;
    padding: 10px;
}

#lef1{
    height:100px;
    border-radius: 5px;
    
    margin-right:0%; margin-left:0%; margin-top:0%;margin-bottom:0%;
    background-repeat: no-repeat;
    width:20%
    padding: 10px;
}*/

.fit {
  position:relative;
  top:-40px;
  height: 384px;
  width: 100%;
}

 #header {
   background:url("intro-middle.png");
   background-size:100%;
    border-radius: 4px 4px 0 0;
    padding: 5px;
/*    padding-left: 2px; */
    position:relative;
    height:100px;
    color:white;
    width:100%;
    overflow:hidden;
  }

  div#header pre {
    font-size: 150%;
    font-family: courier;
    font-weight: bold;
  }

  div#header pre b {
    position: relative;
    left:10px;
    font-size:250%;
    font-family:verdana;
  }

   ul#menu {
     position:relative;
     top:-35px;
   /*  left: 210px;	/*start from 210px from left/	*/
     right: 0px;
  /*   left-padding: 5px; */
  /*   left-margin: 5px; */
   /*  float: right;*/
     left: 2.1px;
    overflow:hidden;
     width: 95.9%;
     background-color: black;
   }

   ul#menu li {
    display: inline;
    float: left;
   }

   ul#menu li a {
    background-color:black;
    display: block;
    color: white;
    padding: 10px 20px;
    margin: 5px;
    text-decoration: none;	/* To remove underline */
    border-radius: 4px 4px 0 0;
 /*   border-spacing: 30px;*/
   }

  ul#menu li a:hover {
   background-color: orange;
  }

#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;	 	
    width:100%;
  }
#header2 {
    background:url("intro-middle.png");
    color:white;
    clear:both;
    text-align:left;
    padding:5px;	 	
    width:100%;
   
  }
#text {
	position:relative;
	font-size:300%;
	line-height: 150%;
	
}
#star {
	color:red;
}
.error {
    color: #FF0000;
	position:relative;
	top:-50px;
	left:65px;
  /*  text-align: right;	*/
  } 
</style> </head>

<body>

<?php 
function validate()
{ 
  $username = $password = "";
  $error = $repass = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);
	$conn = new mysqli ("localhost", "id324399_yogiraj","123456", "id324399_banking");
        if($conn->connect_error) 
     	    die("Failed:".$conn->connect_error);
	
	$sql = "SELECT password FROM Accounts WHERE username = '$username'";
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0)
	{   
		$row = $result->fetch_assoc();
		$repass = $row["password"];
		$value = strcmp($repass, $password);
		if($value != 0)
			$error = "Username or password incorrect.";
   	} 
	else
		$error = "Username or password incorrect.";  
			
	$conn->close();
	return array($error, $username);
   }
}
   
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

 <div class = "section group">
<div class="col span_1_of_1">
<div id = "header2">
  <h1 id = "text"><b>State Bank</b></h1>  
 </div>
</div>
</div>

<div class = "section group">
<div class="col span_1_of_2">
<ul id="menu"><b>   
   <li><a href="http://miniprojectofwebsite.000webhostapp.com/index.php">Home</a></li>
   <li><a href="http://miniprojectofwebsite.000webhostapp.com/aboutus.html">About Us</a></li>
   <li><a href="http://miniprojectofwebsite.000webhostapp.com/procedure.html">New Account Procedure</a></li>
   <li><a href="http://miniprojectofwebsite.000webhostapp.com/acct_status.php">Account Creation Status</a></li>
   <li><a href="http://miniprojectofwebsite.000webhostapp.com/contact.html">Contact Us</a></li></b>
  </ul>

</div>
</div>

<div class = "section group">
<div class="col span_1_of_3">

<img  class = "fit" src="img.jpg" >

</div>

<div class="col span_2_of_3">
<h2 style = " font-size:300%; position:relative; top:-70px; margin-bottom:-35px; left:20px; color:purple; overflow:hidden;">LOGIN</h2>
	
	<!--<div id = "form">-->
	  <form method="post" autocomplete="off" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
	  <fieldset> <br/>
	
	<div class="error"><?php echo $error;?></div>
    <label for="fname">Username :<sup id = "star"> *</sup></label>
    <input type="text" id="fname" name="username">
<br/> <br/>
    <label for="lname">Password :<sup id = "star"> *</sup></label>
    <input type="password" id="lname" name="password">
<br/> <br/>
    <!--<label for="country">State:<sup id = "star"> *</sup>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>--> 
  
    <input type="submit" value="Submit"> <br/> <br/> 

   </fieldset> 
  </form>
	<!--</div>-->
<!--<div style="height:0;width:453px;border:0;border-bottom:3px;border-style: solid;border-color: #000000"></div>-->
<!--<div id = "lef2">
</div>-->
</div>
</div>
<div class = "section group">
<div class="col span_1_of_4">
<div id = "footer">
  Copyright &copy StateBankOfficial.com
 </div>
</div>
</div>

</body>
</html>
