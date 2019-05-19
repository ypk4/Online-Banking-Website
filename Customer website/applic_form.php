
<!DOCTYPE HTML>
<html>
<head>

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>State Bank New Account Application</title>
  
     <!-- include the Tools -->
  <script src="http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script>
  
  <!-- standalone page styling (can be removed) -->
  <link rel="shortcut icon" href="/media/img/favicon.ico">
  <link rel="stylesheet" type="text/css"
        href="/media/css/standalone.css"/>

  <link rel="stylesheet" type="text/css"
      href="/media/css/tooltip-generic.css"/>
  
<style>
  body {
    background-color: #f2f2e2;
  }
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}

/*  COLUMN SETUP  */
.col {
	display:block;
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
	width: 20%;
}
.span_2_of_3 {
	width: 74%;
}
.span_1_of_5 {
	width: 24;
}
.span_2_of_5 {
	width: 74;
}
.span_1_of_6 {
	width: 24;
}
.span_2_of_6 {
	width: 74;
}
.span_1_of_4 {
	width:100%;
}
.span_2_of_2 {
	width:100%;
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */

@media only screen and (max-width: 480px) {
	.col { margin: 1% 0 1% 0%;}
	.span_1_of_1, .span_1_of_2,.span_2_of_2, .span_1_of_3, .span_2_of_3, .span_1_of_5,.span_2_of_5,.span_1_of_6,.span_2_of_6, .span_1_of_4 { width: 100%; }
}

#myform input[type=text]{
    position: relative;
    top: -50px;
    left: 25px;
    width: 35%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
#myform input[type=number]{
    position: relative;
    top: -50px;
    left: 25px;
    width: 35%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
#myform input[type=password]{
    position: relative;
    top: -50px;
    left: 25px;
    width: 35%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
#myform input[type=date]{
    position: relative;
    top: -40px;
    left: 25px;
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
#myform input[type=email]{
    position: relative;
    top: -50px;
    left: 25px;
    width: 35%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


#radio1{
    position: relative;
    top: -38px;
    left: 25px;
   
}
#radio2{
	position: relative;
    top: -38px;
    left: 29px;
   
}

#myform select{
    position: relative;
    top: -50px;
    left: 25px;
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
#myform textarea{
    position: relative;
    top: -40px;
    left: 25px;
   
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
#myform input[type=submit] {
    position: relative;
    top: 20px;
    left: 25%;
    width: 150px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    display: inline-block;
    clear:both;
}
#myform input[type=reset] {
    position: relative;
    top: 20px;
    left: 25%;
    width: 150px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    display: inline-block;
    clear:both;
}

#myform label {
	position: relative;
	left: 25px;
	top: -40px;
}
#myform input[type=submit]:hover {
    
    background-color: #45a049;
}
#myform input[type=reset]:hover {
    
    background-color: #45a049;
}

#myform{
    border-radius: 5px;
    background-color: #f2f2e2;
    margin-right:0%; margin-left:5%; margin-top:0%;margin-bottom:0%;
    padding: 5px;
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
    max-width:100%;
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
    position:relative;
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;
    margin-left: 0;	 	
    max-width:100%;
  }
#header2 {
    background:url("intro-middle.png");
    color:white;
    clear:both;
    text-align:left;
    padding:5px;	 	
    max-width:100%;
   
  }
#text {
	position:relative;
	font-size:300%;
	line-height: 150%;	
}

.tooltip {
    background-color:#000;
    border:1px solid #fff;
    padding:10px 20px;
    max-width:300px;
    display:none;
    color:#fff;
    text-align:center;
    font-size:15px;
    margin-left:25px;
 
    /* outline radius for mozilla/firefox only */
    -moz-box-shadow:0 0 10px #000;
    -webkit-box-shadow:0 0 10px #000;
  }
  
#star {
	color:red;
}

.error {
    color: #FF0000;
	position:relative;
	top:-50px;
	left:35px;
  /*  text-align: right;	*/
  } 
  
 div#successful {
    margin-left: 10px;
    /*color: violet;*/
 } 
  
</style>
<body>

 <script>
       $(function() {

       // select all desired input fields and attach tooltips to them
  
       $("#myform :input").tooltip({
  //    , input[type=number], input[type=email], input[type=date], input[type=password]

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
      
 <div class = "section group">
  <div class="col span_1_of_1">
  <div id = "header2">
    <h1 id = "text"><b>State Bank</b></h1>  
  </div>
  </div>
  </div>

 <!-- <div class = "section group">
 <div class="col span_1_of_2"> -->
  <ul id="menu"><b>   
    <li><a href="http://miniprojectofwebsite.000webhostapp.com/index.php">Home</a></li>
    <li><a href="http://miniprojectofwebsite.000webhostapp.com/aboutus.html">About Us</a></li>
    <li><a href="http://miniprojectofwebsite.000webhostapp.com/procedure.html">New Account Procedure</a></li>
    <li><a href="http://miniprojectofwebsite.000webhostapp.com/acct_status.php">Account Creation Status</a></li>
    <li><a href="http://miniprojectofwebsite.000webhostapp.com/contact.html">Contact Us</a></li> </b>
   </ul>
<!--  </div> 
 </div> -->
  
<?php
 
// define variables and set to empty values
  $name = $mother_name = $gender = $address = $pincode = $state = $dobirth = $occupation = $aadhaar = $mob_no = $email = $username = $password = $repass =  '';
  $nameErr = $mother_nameErr = $genderErr = $addressErr = $pincodeErr = $stateErr = $dobirthErr = $occupationErr = $aadhaarErr = $mob_noErr = $emailErr = $usernameErr = $passwordErr = $repassErr =    "";

 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
       $name = test_input($_POST["name"]);
       if (!preg_match("/^[a-zA-Z ]*$/", $name))
           $nameErr = "Invalid name";
	
       $mother_name = test_input($_POST["mother_name"]);
       if (!preg_match("/^[a-zA-Z]*$/", $mother_name))
           $mother_nameErr = "Invalid name";
   
       $gender = test_input($_POST["gender"]);
       if($gender == '')
           $genderErr = "Please fill out this field";
       
       $address = test_input($_POST["address"]);
       if (!preg_match("/[a-z0-9 ,]*$/", $address))
           $addressErr = "Invalid address";
   
       $pincode = test_input($_POST["pincode"]);
        if (filter_var($pincode, FILTER_VALIDATE_INT) === FALSE)
       		$pincodeErr = "Invalid Pincode";
	else if(strlen($pincode) != 6)
		$pincodeErr = "Invalid Pincode";
   
        $state = test_input($_POST["state"]);
        if($state == '')
           $stateErr = "Please fill out this field";
       
        $dobirth = test_input($_POST["dobirth"]); 
	//date validation
       
        $occupation = test_input($_POST["occupation"]);
       
        $aadhaar = test_input($_POST["aadhaar"]);
	if($aadhaar != '')
	{
	   if (filter_var($aadhaar, FILTER_VALIDATE_INT) === FALSE)          //INT or BIGINT
      		$aadhaarErr = "Invalid UID";  
	   else if(strlen($aadhaar) != 16)
		$aadhaarErr = "Invalid UID";
	}

        $mob_no = test_input($_POST["mob_no"]);
	if (filter_var($mob_no, FILTER_VALIDATE_INT) === FALSE)
       		$mob_noErr = "Invalid Mobile Number";
	else if(strlen($mob_no) != 10)
		$mob_noErr = "Invalid Mobile number";
       
        $email = test_input($_POST["email"]);
        if($email != '')
        { 
           if(!filter_var($email, FILTER_VALIDATE_EMAIL))
               $emailErr = "Invalid email id";
        }
        
        $username = test_input($_POST["username"]);
	$len1 = strlen($username);
	$LLetter  = preg_match('/[a-z]/', $username);
	$ULetter  = preg_match('/[A-Z]/', $username);
	//$Digit   = preg_match('/\d/',          $uname);
	$Special = preg_match('/[^a-zA-Z\d]/', $username);
	
	if($len1 < 6 || $len > 10)
		$usernameErr = "Username has to be 6 to 10 characters long";
	else if(!$LLetter)
		$usernameErr = "Username must have atleast one lower case letter";
	else if(!$ULetter)
		$usernameErr = "Username must have atleast one upper case letter";
	else if($Special)
		$usernameErr = "Username cannot contain special character";
	else if(is_numeric($username[0]))
		$usernameErr = "Username cannot start with a digit";

     
  	$password = test_input($_POST["password"]);
  	if(iconv_strlen($password) < 6 || iconv_strlen($password) > 9)
    	   	$passwordErr = "Password must be 6 to 9 characters long";
    	elseif(!preg_match("#[0-9]+#", $password))
            	$passwordErr = "Your Password Must Contain At Least 1 Number";
    	elseif(!preg_match("#[A-Z]+#", $password))
        	$passwordErr = "Your Password Must Contain At Least 1 Capital Letter";
   	 elseif(!preg_match("#[a-z]+#", $password))
   	  	$passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter";
   	 elseif(!strpbrk($password, '!@#$%')) 
             $passwordErr = "Your Password Must Contain At Least 1 Special Character out of !,@,#,$,%";


        $repass = test_input($_POST["repass"]);
	$value = strcmp($password, $repass);
	if($value != 0)
//	if($repass != $password)
		$repassErr = "Passwords do not match";
       
       /* Check if username is available */
	$conn = new mysqli ("localhost", "id324399_yogiraj", "123456", "id324399_banking");
        if($conn->connect_error) 
     	    die("Failed:".$conn->connect_error);
	
	//$sql = "SELECT username FROM Acct_Applications WHERE username = $username";
	$sql = "SELECT * FROM Acct_Applications WHERE username = '$username'";
	$result = $conn->query($sql);
	if($result->num_rows > 0)
		$usernameErr = "Username already in use. Use another username";
	$conn->close();
 }

 function test_input($data)
 {
 	$data = trim($data);
 	$data = stripslashes($data);
 	$data = htmlspecialchars($data);
 	return $data;
 }

/*
//appform
/*sql to create table
$sql = "CREATE TABLE appform (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fullname VARCHAR(30) NOT NULL,
state VARCHAR(30) NOT NULL,
email VARCHAR(50),
gender VARCHAR(10) NOT NULL,
mothername VARCHAR(30) NOT NULL,
dateofb DATE NOT NULL,
occupation VARCHAR(30) NOT NULL,
pincode INT(20) NOT NULL,
username VARCHAR(20) NOT NULL,
password VARCHAR(20) NOT NULL,
mobile BIGINT(10) NOT NULL,
uid BIGINT(12) NOT NULL,
address VARCHAR(100) NOT NULL

)";*/


 if ($nameErr != '' || $mother_nameErr != '' || $genderErr != '' || $addressErr != '' || $pincodeErr != '' || $stateErr != '' || $dobirthErr != '' || $occupationErr != '' || $aadhaarErr != '' || $mob_noErr != '' || $emailErr != '' || $usernameErr!= '' || $passwordErr != '' || $repassErr != '' || $username == '' || $password == '')
{
 echo 
 '<div class = "section group">
  <div class="col span_2_of_2">
   <h1 style = " font-size:150%;position:relative;top:-50px;left:20px;color:green;overflow:hidden;">APPLICATION FORM</h1>
  </div>
  </div>',

 '<form id="myform" method="post" action="' , htmlspecialchars($_SERVER["PHP_SELF"]), '">
  
  <div class = "section group">
  <div class = "col span_1_of_3">
   <label id = "fname">Full Name:<sup id = "star"> *</sup></label>
  </div>

  <div class = "col span_2_of_3">
   <input type="text" id="fname" name="name" title = "Enter full name with first name (space) father\'s name (space) sirname" value = "', $name, '" required>
   <div class="error">', $nameErr, '</div> 
  </div>
  </div>

  <div class = "section group">
  <div class = "col span_1_of_3">
    <label for="lname">Mother\'s Name:<sup id = "star">*</sup></label> 
  </div>

  <div class = "col span_2_of_3">
    <input type="text" id="lname" name="mother_name" title = "Enter only mother\'s first name. No middle or lastname"  value = "',$mother_name, '" required> <br/> <br/>
   <div class="error"><br/>', $mother_nameErr, '</div> 
  </div>
  </div>

  <div class = "section group">
  <div class = "col span_1_of_3">
   <label>Gender:<sup id = "star"> *</sup></label>
  </div>

  <div class = "col span_2_of_3">
    <input type="radio" id="radio1" name="gender" value = "Male">Male
    <br/>
    <input type="radio" id="radio2" name="gender" value = "Female">Female
    <br/> <br/> <br/>
    <div class="error"><br/>', $genderErr, '</div>  
  </div>
  </div>
  
  <div class = "section group">
  <div class = "col span_1_of_3">
  <br>
    <label for="state">State :<sup id = "star"> *</sup>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  </div>
  <div class = "col span_2_of_3"> 
  <br>
    <select id="state" name="state" title = "Select the state you belong to">
      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
      <option value="Andhra Pradesh">Andhra Pradesh</option>
      <option value="Assam">Assam</option>
      <option value="Bihar">Bihar</option>
      <option value="Delhi">Delhi</option>
      <option value="Gujarat">Gujarat</option>
      <option value="Himachal Pradesh">Himachal Pradesh</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Kerala">Kerala</option>
      <option value="Maharashtra">Maharashtra</option>
      <option value="Punjab">Punjab</option>
      <option value="Rajasthan">Rajasthan</option>
      <option value="Tamilnadu">Tamilnadu</option>
      <option value="Uttar Pradesh">Uttar Pradesh</option>
      <option value="West Bengal">West Bengal</option>
      
    </select>
    	<div class="error">', $stateErr, '</div> 
   </div>
   </div>


  <div class = "section group">
  <div class = "col span_1_of_3">
     <label>Date of Birth:<sup id = "star"> *</sup></label>
  </div>
  <div class = "col span_2_of_3">
	
  <input type="date"  name="dobirth" title = "Enter date of birth in yyyy-mm-dd format" value = "', $dobirth, '" required placeholder="yyyy-mm-dd">
     	<div class="error">', $dobirthErr, '</div> 
  </div>
  </div>

  <div class = "section group">
  <div class = "col span_1_of_3">
  <br>
    <label>Address:<sup id = "star"> *</sup></label>
  </div>
  <div class = "col span_2_of_3">
    <textarea name = "address" rows="4" cols="50" title = "Enter current residential address" value = "', $address, '" required></textarea>
   <div class="error">', $addressErr, '</div> 
   </div>
   </div>

  <div class = "section group">
  <div class = "col span_1_of_3">
  <br>  
    <label>Pincode:<sup id = "star"> *</sup></label>
  </div>
  <div class = "col span_2_of_3">
  <br>	
     <input type="number" name="pincode" title = "Enter pincode without space" value = "', $pincode, '" required>
	<div class="error">', $pincodeErr, '</div> 
  </div>
  </div>

  <div class = "section group">
  <div class = "col span_1_of_3">
    <label for "occ">Occupation :<sup id = "star"> *</sup>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  </div>

  <div class = "col span_2_of_3"> 
    <select  id = "occ" name="occupation" title = "Select your occupation. If you do not find your occupation, select other">
      <option value="Doctor">Doctor</option>
      <option value="Service">Service</option>
      <option value="Farmer">Farmer</option>
      <option value="Business">Business</option>
      <option value="Other">Other</option>
    </select>
    	<div class="error"', $occupationErr, '</div> 
  </div>
  </div>
  <div class = "section group">
  <div class = "col span_1_of_3">
    <label>UID (Aadhaar number) : </label>
  </div>
  <div class = "col span_2_of_3">
     <input type="number" name="aadhaar" title = "Enter aadhar card number" value = "', $aadhaar, '">
	<div class="error">', $aadhaarErr, '</div> 
  </div>
  </div>

  <div class = "section group">
  <div class = "col span_1_of_3">
     <label>Mobile no:<sup id = "star"> *</sup></label>
  </div>
  <div class = "col span_2_of_3">
     <input type="number" name="mob_no" title = "Enter your mobile number" value = "', $mob_no, '" required>
	<div class="error">', $mob_noErr, '</div> 
   </div
   </div>
 
  <div class = "section group">
   <div class = "col span_1_of_3">
      <label>Email id:</label>
   </div>

   <div class = "col span_2_of_3">
     <input type="email" name="email" title = "Enter your email id" value = "', $email, '">
   </div>
  </div>
  <br>

  <div class = "section group">
   <div class = "col span_1_of_3">
      <label>Username:<sup id = "star"> *</sup></label>
   </div>
  
  <div class = "col span_2_of_3">
    <input type="text" name="username" title = "Username should be 6-10 characters long with no special characters and should start with an alphabet. It should have atleast one uppercase and one lowercase alphabet. Numbers are allowed too."  value = "', $username, '" required>
     <div class="error">', $usernameErr, '</div> 
    </div>
  </div>

  <div class = "section group">
  <div class = "col span_1_of_3">
     <label>Password:<sup id = "star"> *</sup></label>
  </div>

  <div class = "col span_2_of_3">
     <input type="password"  name="password" title = "Password should be 6-9 characters long. It should have atleast one uppercase, one lowercase alphabet, one digit and one special character out of !,@,#,$,%" value = "', $password, '" required>
      <div class="error">', $passwordErr, '</div> 
     </div>
   </div>
     
  <div class = "section group">
   <div class = "col span_1_of_3">
     <label> Re-Enter Password:<sup id = "star"> *</sup></label>
   </div>
   <div class = "col span_2_of_3">
	
   <input type="password"  name="repass" title = "Re-Type the password for confirmation" value = "', $repass, '" required>
	<div class="error">', $repassErr, '</div> 
    </div>
   </div>

   <div class = "section group">
    <div class="col span_2_of_3">
      <input type="submit" value="Submit">
    </div>
   </div>

   <div class = "col span_2_of_3">
      <input type = "reset" value = "Reset">
   </div>

 </form>';
 }

   if($nameErr == '' && $mother_nameErr == '' && $genderErr == '' && $addressErr == '' && $pincodeErr == '' && $stateErr == '' && $dobirthErr == '' && $occupationErr == '' && $aadhaarErr == '' && $mob_noErr == '' && $emailErr == '' && $usernameErr == '' && $passwordErr == '' && $repassErr == '' && $username != '' && $password != '')		/* Error was $username == "" here */
   {
	$conn = new mysqli ("localhost", "id324399_yogiraj", "123456", "id324399_banking");
        if($conn->connect_error) 
     	    die("Failed:".$conn->connect_error);
    	           
        if($aadhaar != "")
        	$sql = "INSERT INTO Acct_Applications(name, mother_name, gender, address, pincode, state, dobirth, occupation, aadhaar, mob_no, email, username, password, status)   VALUES('$name', '$mother_name', '$gender', '$address', $pincode, '$state', '$dobirth', '$occupation',$aadhaar, $mob_no, '$email', '$username', '$password', 'Application form submitted, account not activated yet')"; /* HERE */
	else
		$sql = "INSERT INTO Acct_Applications(name, mother_name, gender, address, pincode, state, dobirth, occupation, mob_no, email, username, password, status)   VALUES('$name', '$mother_name', '$gender', '$address', $pincode, '$state', '$dobirth', '$occupation', $mob_no, '$email', '$username', '$password', 'Application form submitted, account not activated yet')"; /* HERE */


         if($conn->query($sql) === TRUE) 
	    ;
	 else 
     	    echo "Record Creation Error".$sql."<br/>".$conn->error;
       
	$sql2 = "SELECT applic_no FROM Acct_Applications WHERE username='$username'";
	$result2 = $conn->query($sql2);
	$row = $result2->fetch_assoc();
        
        echo "<div id='successful'> <h1 style='color:purple;'> Application form for new account submitted successfully !! </h1> <br/>
                  <p style='font-size:20px' > IMPORTANT - Your Application Number is ", $row["applic_no"], "</p> <br/>
                  <p style='font-size:18px' > Note down Application Number for further procedure. </p> <br/>
                  <p style='font-size:18px' > Now visit any State Bank branch and Submit required documents as per given on New Account opening Procedure page. </p> <br/>
                  <p style='font-size:18px'> Check Account Creation Status for confirming account activation after submitting documents. </p> </div> <br/>
                   <a href='http://miniprojectofwebsite.000webhostapp.com/homepage.php' style='align:center; font-size:18px; color:#580000;'>Click here to go to Login Home</a>";
    }
?>

 <br/>
 <div class = "section group">
  <div class="col span_1_of_4">
   <div id = "footer">
     Copyright &copy StateBankOfficial.com
   </div>
  </div>
 </div>

 </body>
</html>
