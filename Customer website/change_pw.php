<?php
	session_start();
?>

<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>State Bank Personal Banking</title>
  
    <!-- include the Tools -->
  <script src="http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script>
  
  <!-- standalone page styling (can be removed) -->
  <link rel="shortcut icon" href="/media/img/favicon.ico">
  <link rel="stylesheet" type="text/css"
        href="/media/css/standalone.css"/>

  <link rel="stylesheet" type="text/css"
      href="/media/css/tooltip-generic.css"/>
  
  <style>
   #header {
    background:url("intro-middle.png");
    background-size:100%;
    border-radius: 4px 4px 0 0;
    padding: 5px;
    position:relative;
    height:120px;
    color:white;
    max-width:100%;
    overflow:hidden;
  }

   span#headertext {
    font-size: 150%;
    font-family: courier;
    font-weight: bold;
  }

   span#headertext b {
    position: relative;
    left:10px;
    font-size:250%;
    font-family:verdana;
    top:20px;
  }
  
   #subtitle {
    position:relative;
    right:10px;
    float:right;
    font-size: 150%;
    font-family: courier;
    font-weight: bold;
    color:white;
    top:20px;
  }

  
  div#login_greet {
  /*  background: url("images2.jpeg"); /*#000333; /*rgb(95,95,95);*/
    background-color: #333;
   /* background-size:100%;
    border-radius: 4px 4px 0 0; */
    padding: 5px;
    position: relative;
    height:40px;
    color: white;
    max-width: 100%;
    overflow: hidden;
    font-size: 125%;
    padding: 12px 30px 6px;
   /* margin: 5px; */
    font-weight: bold;
 }
  
  ul#vert_menubar {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 23.5%;
  /*  z-index: -1; */
    top: 197px; 
 /*   top: 7px;  */
    background-color: /*rgb(0, 140, 186);*/ #f1f1f1;
    position: absolute; /* fixed; */
  /*  margin-top: 50px;*/
    height: 90%;
    overflow: auto;
    border: 0.5px solid #4CAF50; /*#555;*/
    font-weight: bold; 
  }

  ul#vert_menubar li a {
    display: block;
    color: /*rgb(0, 140, 186);*/ #4CAF50; /*black;*/
    padding: 8px 0 8px 20px;
    border-radius: 4px 4px 0 0;
    text-decoration: none;
 /*   text-align: center; */
    border-bottom: 1px solid #4CAF50; /* #555; */
  }

  ul#vert_menubar li a.active {
    background-color: rgb(0, 140, 186); /* #4CAF50; */
    color: white;
  }

  ul#vert_menubar li a:hover:not(.active) {
    background-color: #555;
    color: white;
  }
  
  
  form#myform {
	margin: 29px 84px; 
	padding: 5px ;
/*	background-color: #f8f8f8 ; */
	max-width: 100% ;
	max-width: 420px ;
	border-radius: 6px ;
/*	border: 1px solid #e4e4e4 ; */
	position: relative ;
  }
  form#myform input, textarea {
	font-family: 'Source Sans Pro', sans-serif;
	padding: 12px ;
	border: 1px solid #d2d2d2 ;
	font-size: 18px ;
	transition: border .4s, box-shadow .4s ;
	cursor: pointer ;
	border-radius: 6px ;
	width: 90% ;
	margin-bottom: 5px ;
  }
  form#myform input[type=text]:focus {
	border: 1px solid #646464 ;
	box-shadow: 0px -20px 10px -10px #f8f8f8 inset ;
  }		
  form#myform label {
	/*font-family: 'Source Sans Pro', sans-serif;*/
	width: 100% ;
	padding: 5px ;
  }
  form#myform input[type=submit]{
	font-family: 'Source Sans Pro', sans-serif;
	width: 95% ;
	padding: 12px ;
	font-size: 18px ;
	cursor: pointer ;
	border: 0 ;
	border-radius: 6px ;
	background-color: #0bb7c6 ;
	color: #ffffff ;
	text-transform: uppercase ;
	font-weight: bold ;
	letter-spacing: 2px ;
	transition: background-color .4s ;
  }
  form#myform input[type=submit]:hover{
	background-color: #037a85 ;
  }

  
  .tooltip {
    background-color:#000;
    border:1px solid #fff;
    padding:10px 20px;
    max-width:270px;
    display:none;
    color:#fff;
    text-align:center;
    font-size:15px;
    margin-left:5px;
 
    /* outline radius for mozilla/firefox only */
    -moz-box-shadow:0 0 10px #000;
    -webkit-box-shadow:0 0 10px #000;
  }

 .error {
    color: #FF0000;
  /*  text-align: right;	*/
  }

   #footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;	 	
    width:100%;
  }
  </style>
 </head>

 <body>

 <script>
       $(function() {

        // select all desired input fields and attach tooltips to them
      $("#myform :input").tooltip({

      // place tooltip on the right edge
      position: "center right",

      // a little tweaking of the position
      offset: [-2, 10],

      // use the built-in fadeIn/fadeOut effect
      effect: "fade",

      // custom opacity setting
      opacity: 0.7

      });
    });

  </script>  
 
  <?php
  // define variables and set to empty values
  $oldpw = $newpw = $newpw2 = "";
  $oldpwErr = $newpwErr = $newpw2Err = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $oldpw = test_input($_POST["oldpw"]);
    /* Create connection */
    $conn = new mysqli ("localhost", "id324399_yogiraj", "123456", "id324399_banking");
    if($conn->connect_error)
       die("Failed:".$conn->connect_error);
    $sql = "SELECT password FROM Accounts WHERE username='{$_SESSION['username']}'";			/* HERE */
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();				// fetch_assoc() puts result into associative array $row2
    if($oldpw != $row["password"])
      $oldpwErr = "Wrong Password";
       
    $newpw = test_input($_POST["newpw"]);
    if(strlen($newpw) < 6 || strlen($newpw) > 9)
        $newpwErr = "Password must be 6 to 9 characters long";
    elseif(!preg_match("#[0-9]+#", $newpw))
        $newpwErr = "Your Password Must Contain At Least 1 Number";
    elseif(!preg_match("#[A-Z]+#", $newpw))
        $newpwErr = "Your Password Must Contain At Least 1 Capital Letter";
    elseif(!preg_match("#[a-z]+#", $newpw))
        $newpwErr = "Your Password Must Contain At Least 1 Lowercase Letter";
    elseif(!strpbrk($newpw, '!@#$%'))
        $newpwErr = "Your Password Must Contain At Least 1 Special Character";
        
    $newpw2 = test_input($_POST["newpw2"]);
    if ($newpw2 != $newpw)
       $newpw2Err = "Passwords do not match";
  }

  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }
 ?> 

  <div id="header">
   <span id = "headertext"><b>State Bank</b></span> <span id="subtitle"> Banking is now just a click away..!</span>
  </div>

  <div id="login_greet"> Welcome <?php echo $_SESSION['username'] ?> </div> <!--  </div> -->
  
 <?php
  $success = 0;
  if($oldpwErr != "" || $newpwErr != "" || $newpw2Err != "" || $oldpw == "")
  { 
    echo '
    <ul id="vert_menubar">
      <li><a href="http://miniprojectofwebsite.000webhostapp.com/login_home.php">Login Home</a></li>
      <li><a href="http://miniprojectofwebsite.000webhostapp.com/transfer_money.php">Transfer Money</a></li>
      <li><a class="active" href="http://miniprojectofwebsite.000webhostapp.com/change_pw.php">Change Password</a></li>
      <li><a href="http://miniprojectofwebsite.000webhostapp.com/logout.php">Log Out</a></li>
    </ul>

    <div style="margin-left:25%; padding:1px 16px;">
    <h1 style="color: purple;">Change Password</h2>

    <form id="myform" method="post" action="', htmlspecialchars($_SERVER["PHP_SELF"]), '" autocomplete="off">
	</br>
	<label>Old Password <span style="color:red"> *</span> </label>
	<input type="password" name="oldpw" title="Enter your Old Login Password" required/> 
	<div class="error">', $oldpwErr, '</div> <br/> <br/>
	 
	<label>New Password <span style="color:red"> *</span> </label>
	<input type="password" name="newpw" title="Enter new Login Password having 6-9 characters, at least one digit, one uppercase alphabet, one lowercase alphabet and one special symbol out of !, @, #, $, %" required/>
	<div class="error">', $newpwErr, '</div> <br/> <br/>
	
	<label>Confirm New Password <span style="color:red"> *</span> </label>
	<input type="password" name="newpw2" title="Re-Enter new Login Password" required/>
	<div class="error">', $newpw2Err, '</div> <br/> <br/>
	
	<input type="submit" value="Submit" />
     </form>

    </div>
    <br/> <br/> <br/> <br/>';
  }

   if($oldpwErr == "" && $newpwErr == "" && $newpw2Err == "" && $oldpw != "")
   { 
        /* Updating Accounts database by changing password */
        /* Create connection */
	$conn = new mysqli ("localhost", "id324399_yogiraj", "123456", "id324399_banking");
        if($conn->connect_error)
     	    die("Failed:".$conn->connect_error);
    
        $sql2 = "UPDATE Accounts SET password='$newpw' WHERE username='{$_SESSION['username']}'";			/* HERE */
        if($conn->query($sql2) === TRUE)
     	     $success = 1;
        else
     	     echo "Password Change Error".$sql2."<br/>".$conn->error;
     	$conn->close();
     
         echo '<ul id="vert_menubar" style="height:62.5%">
  	   <li><a href="http://miniprojectofwebsite.000webhostapp.com/login_home.php">Login Home</a></li>
 	  <li><a class="active" href="http://miniprojectofwebsite.000webhostapp.com/transfer_money.php">Transfer Money</a></li>
 	  <li><a href="http://miniprojectofwebsite.000webhostapp.com/change_pw.php">Change Password</a></li>
 	  <li><a href="http://miniprojectofwebsite.000webhostapp.com/login_page.php">Log Out</a></li>
  	</ul>';
    }
     if($success == 1)
     { echo '<div style="margin-left:25%; padding:1px 16px;">
	   <h1 style="color: purple;">Password Changed Successfully !!</h1>  <br/>
	   <a href="http://miniprojectofwebsite.000webhostapp.com/login_home.php" style="align:center; font-size:18px; color:#580000;">Click here to go back to Login Home</a>
	  </div>';
	   
 	 echo '<br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>';
      }
   ?>     

  <div id="footer">
   Copyright &copy StateBankOfficial.com
  </div>

 </body>
</html>
