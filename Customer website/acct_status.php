<html>
<head>
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
	width: 55%;
}
.span_2_of_3 {
	width: 20%;
}
.span_1_of_4 {
	width:100%;
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */

@media only screen and (max-width: 480px) {
	.col { margin: 1% 0 1% 0%;}
	.span_1_of_1, .span_1_of_2, .span_1_of_3, .span_2_of_3, .span_3_of_4 { width: 100%; }
}

#app_id{
    position: relative;
    top: 0px;
    left: 10%;
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
#num2{
    position: relative;
    top: 0px;
    left: 21%;
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password]{
    position: relative;
    top: 0px;
    left:10%;
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

   select{
    position: relative;
    top: 0px;
    left: 17%;
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    position: relative;
    top: 0px;
    left: 20%;
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
	left: 25px;
	top: 0px;
}
input[type=submit]:hover {
    
    background-color: #45a049;
}


#lef1{
    height:100px;
    border-radius: 5px;
    
    margin-right:0%; margin-left:0%; margin-top:0%;margin-bottom:0%;
    background-repeat: no-repeat;
    width:20%
    padding: 10px;
}


.fit {
  height: 300px;
  width: 65%;
  position:relative;
  left:18%;
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
    /*overflow:hidden;*/
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
     position:absolute;
     top:120px;
   /*  left: 210px;	/*start from 210px from left/	*/
     right: 0px;
  /*   left-padding: 5px; */
  /*   left-margin: 5px; */
   /*  float: right;*/
     left: 5.1px;
     overflow: hidden;
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
    padding: 10px 18px;
    margin: 5px;
    text-decoration: none;	/* To remove underline */
    border-radius: 4px 4px 0 0;
 /*   border-spacing: 30px;*/
   }

  ul#menu li a:hover {
   background-color: orange;
  }
 
  
#check {
	position:relative;
	left:10px;
}
#check1 {
	position:relative;
	left:20px;
}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;	 	
    width:100%;
    position:relative;
    top:0px;
  }
#emp {
    background-color:#000000;
    position:relative;
    top:-19px;   
    text-align:left;
    padding:5px;	 	
    width:100%;
    font-size:150%;
    color:#e6e6ea;
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
#back {
	background:url("images1.jpeg");
	 position:relative;
  	left:30;
	width:70%;
	border: 1px solid black;
}

#conf {
	text-align:center;
	color:red;
	position:relative;
	top:-10px;
}
ul#vert_menubar {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 80%;
    background-color: #f1f1f1;
    position: relative;
    height: 16.5%;
    top:-30px;
    overflow: auto;
 }

 ul#vert_menubar li a {
    display: block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
 }

 ul#vert_menubar li a.active {
    background-color: #4CAF50;
    color: white;
 }

 ul#vert_menubar li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
 table#acc_info, table#acc_info th, table#acc_info td {
    border: 1px solid black;
    border-collapse: collapse;
    
   
 }
  table#acc_info th, table#acc_info td {
    padding: 6.5px;
    text-align: center;
    color:green;
	
 }
 table#acc_info th {
    background-color: #eeefff;
    color:purple;
 }
 
.error {

    color: #FF0000;
	position:relative;
	top:-35px;
	left:15px;
  /*  text-align: right;	*/
  } 

#credit {
	font-size:200%;
	position:relative;
	top:10px;
    	color: purple;
   	
}	
</style>
</head>

<body>
<?php 
$app_id = 0;
$dbapp_id = "";
$dbpassword = "";
$username = $password = $status = $name = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$app_id = test_input($_POST["app_id"]);
	$password = test_input($_POST["password"]);
	if (filter_var($app_id, FILTER_VALIDATE_INT) == FALSE)
       		$error = "Invalid Application number";
	
	$conn = new mysqli ("localhost", "id324399_yogiraj", "123456", "id324399_banking");
        if($conn->connect_error) 
     	    die("Failed:".$conn->connect_error);
	
	if($error == "")
	{
		$sql = "SELECT password FROM Acct_Applications WHERE applic_no = $app_id";
		$result = $conn->query($sql);
	
		if ($result->num_rows > 0)
		{
   			$row = $result->fetch_assoc();
			$dbpassword = $row["password"];			
		}	
		else
			$error = "Application id incorrect";
	
	}
	if($error == "")
	{
		$value = strcmp($password, $dbpassword);
		if($value != 0)
			$error = "Password incorrect";
	}
	if($error == "")
	{
		$sql = "SELECT applic_no, name, username, status FROM Acct_Applications WHERE applic_no = $app_id";
		$result = $conn->query($sql);
	
		if ($result->num_rows > 0)
		{
   			$row = $result->fetch_assoc();
			$dbapp_id = $row["applic_no"];
			$name = $row["name"];
			$username = $row["username"];
			$status = $row["status"];
			
		}
	}
$conn->close();
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
<ul id="menu"><b><!--Bold-->   
   <li><a href="http://miniprojectofwebsite.000webhostapp.com/index.php">Home</a></li>
   <li><a href="http://miniprojectofwebsite.000webhostapp.com/aboutus.html">About Us</a></li>
   <li><a href="http://miniprojectofwebsite.000webhostapp.com/procedure.html">New Account Procedure</a></li>
   <li><a href="http://miniprojectofwebsite.000webhostapp.com/acct_status.php">Account Creation Status</a></li>
   <li><a href="http://miniprojectofwebsite.000webhostapp.com/contact.html">Contact Us</a></li></b>
  </ul><!--</div>-->
</div>
</div>
<div class = "section group">
<div class = "col span_2_of_3">
</div>

<?php
if($name == "") {
echo '
<div class="col span_1_of_3">

<div id = "credit">Check Account Creation Status</div>
<br>
<br><br>

<form method="post" action="', htmlspecialchars($_SERVER['PHP_SELF']), '">
 <div id = "back" >
	<div class="error">', $error, '</div>
	
	<br>
    <label for="app_id">Application No :</label>
	<br>
    <input type="number" id="app_id" name="app_id"> 
<br>
<br>
<label for="password">Password :</label>
	<br>
    <input type="password" id = "password" name="password"> 
<br>
<br>
</div>
	
<br>
<br>
    <input type="submit" value = "Check Status">

</form>
</div>';
}
?>

<?php
if($name != "")
{
echo '
<div class="col span_1_of_3">
<br>
<div id = "credit">Your Account Application Status :-</div>
<br>
<br><br>
<table id="acc_info" align = "center" width = "400" cellpadding="5" cellspacing="5" border = "1">
    <tr>
     <th colspan="2">Details:</th>
    </tr>
    <tr>
     <td style = "color:black">Application id.</td>
     <td>', $dbapp_id, '</td>
    </tr>
    <tr>
     <td style = "color:black">Name</td>
     <td>', $name, '</td>
    </tr>
    <tr>
     <td style = "color:black">Username</td>
     <td>', $username, '</td>
    </tr>
    <tr>
     <td style = "color:black">Status</td>
     <td>', $status, '</td>
    </tr>
    
   </table>
</div> <br/> <br/>';
}
?>

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
