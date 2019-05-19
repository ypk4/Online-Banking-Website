<?php
 $error = "a";
 $username = "";
 list($error, $username) = validate(); 
 
 session_start();

 if($error == "" && $username != "")
 {
 	$_SESSION['username2'] = $username;
	header("Location:http://miniprojectofwebsite2.000webhostapp.com/activate_acct.php");
	exit();
 }

?>

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

input[type=text]{
    position: relative;
    top: 0px;
    left: 12%;
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password]{
    position: relative;
    top: 0px;
    left: 12%;
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password]{
    position: relative;
    top: 0px;
    left:12%;
    width: 51%;
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
button {
    position: relative;
    top: 0px;
    left: 30%;
    width: 40%;
    height:40px;
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
	left: 15px;
	top: 0px;
}
button:hover {
    
    background-color: #45a049;
}
input[type=submit]:hover {
    
    background-color: #45a049;
}

#lef1{
   position:relative;
	top:-5px;
}


.fit {

  height: 300px;
  width: 65%;
  position:relative;
  left:18%;
  top:25px;
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
#emp {
    background-color:#000000;
    position:relative;
    top:-19px;
    text-align:center;
    padding:5px;	 	
    width:100%;
    font-size:200%;
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
	background-color:#e6e6ea;
	border-radius: 20px;
	width:100%;
	
	
}
form {
	position :relative;
	top:20px;
}

#conf {
	text-align:center;
	color:purple;
	position:relative;
	top:-10px;
}
.error {

    color: #FF0000;
	position:relative;
	top:-35px;
	left:15px;
  /*  text-align: right;	*/
  } 
	
</style>
<body>
<?php 
  	
function validate()
{ 
  $username = $password = $branch = "";
  $error = $repass = $form_branch = "";
  
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
  	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);
	$branch = test_input($_POST["branch"]);
	$conn = new mysqli ("localhost", "id324399_yogiraj", "123456", "id324399_banking");
        if($conn->connect_error) 
     		die("Failed:".$conn->connect_error);
	
	$sql = "SELECT password, branch FROM Employee WHERE username = '$username'";
	$result = $conn->query($sql);
		
	if ($result->num_rows > 0)
	{
   		$row = $result->fetch_assoc();
   		$repass = $row["password"];
		$form_branch = $row["branch"];		
	} 
	else
		$error = "Username or password or branch is incorrect. ";  
	
	$value = strcmp($repass, $password);
	if($value != 0)
		$error = "Username or password or branch is incorrect. ";
	
	$value1 = strcmp($form_branch, $branch);
	if($value1 != 0)
		$error = "Username or password or branch is incorrect. ";
	
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
<div id = "emp">
  Employee Login
 </div>
</div>
</div>

<div class = "section group">
<div class="col span_1_of_2">

  <div id = "conf"><marquee>*CONFIDENTIAL*</marquee></div>
 
</div>
</div>


<div class = "section group">
<div class="col span_1_of_3">
<form id = "back"  method="post" autocomplete="off" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
	
	<div class="error"><?php echo $error;?></div>
 	<br>
	
    <label for="fname">Username:<sup id = "star"> *</sup></label>
    <input type="text" id="fname" name="username">
<br>
<br>
    <label for="lname">Password:<sup id = "star"> *</sup></label>
    <input type="password" id="lname" name="password">
</br>
<br>
 <label for="branch">Branch:<sup id = "star"> *</sup></label>
    <select id="branch" name="branch">
      <option value="branch1">Branch-1</option>
      <option value="branch2">Branch-2</option>
      <option value="branch3">Branch-3</option>
    </select>
  <br>
<br>
   <input type = "submit" value = "Submit">

</form>
</div>

<div class="col span_2_of_3">
<img src = "emplog.jpg" class = "fit">

</div>
</div>

<div class = "section group">
<div class="col span_1_of_4">
<br><br>
<div id = "footer">
  Copyright &copy StateBankOfficial.com
 </div>
</div>
</div>
</body>
</html>
