<?php 
	session_start();
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
	width: 30%;
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

input[type=number]{
    position: relative;
    top: 0px;
    left: 10%;
    width: 50%;
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

input[type=submit], input[type=button] {
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
    top:-35px;
    
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
	background-color:#f1f1f1;
	 position:relative;
  	left:0;
	width:100%;
	
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
    height: 22.5%;
    top:0px;
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
    text-align: left;
	
 }
 table#acc_info th {
    background-color: #eeefff;
    color:purple;
 }
 
 
 table#acc_details, table#acc_details th, table#acc_details td {
    border: 1px solid black;
    border-collapse: collapse;
 }
  table#acc_details th, table#acc_details td {
    padding: 6.5px;
    text-align: left;
 }
 table#acc_details th {
    background-color: #eee;
 }
 table#acc_details caption {
    margin-bottom: 15px;
    color: #330066;
    font-weight: bold;
    font-size: 130%;
    text-align: left;
 }
 

 ul#activate_menu {
    padding: 0;
}

ul#activate_menu li {
    display: inline;
    margin-left: 50px;
}

ul#activate_menu li a {
    background-color: black;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px 4px 0 0;
    font-weight: bold;
}

ul#activate_menu li a:hover {
    background-color: orange;
}

 
 .error {
    color: #FF0000;
	position:relative;
	top:-50px;
	left:35px;
  /*  text-align: right;	*/
  } 

#right {
	float:right;
}

</style>

<body>
<!-- <script>
  var verifyPaymentType = function ()
  {
   var checkboxes = $('.wish_payment_type .checkbox');
   var inputs = checkboxes.find('input');
   var first = inputs.first()[0];

   inputs.on('change', function ()
   {
     this.setCustomValidity('');
   });

  first.setCustomValidity(checkboxes.find('input:checked').length < 2  ? 'Choose one' : '');
  }

  $('#submit').click(verifyPaymentType);

 /* $('form').on('submit', function(){alert('ok') 
 </script> -->

<?php
 // define variables and set to empty values
  $applic_no = $applic_noErr = $docErr = "" ;

 function test_input($data)
 {
 	$data = trim($data);
 	$data = stripslashes($data);
 	$data = htmlspecialchars($data);
 	return $data;
 }

 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $applic_no = test_input($_POST["applic_no"]);
    if (filter_var($applic_no, FILTER_VALIDATE_INT) === FALSE)
    	$applic_noErr = "Invalid Application Number";
    else
    {	$conn = new mysqli ("localhost", "id324399_yogiraj", "123456", "id324399_banking");
        if($conn->connect_error) 
     	    die("Failed:".$conn->connect_error);
    	$sql = "SELECT * FROM Acct_Applications WHERE applic_no = $applic_no";
    	$result = $conn->query($sql);
    	if($result->num_rows == 0)
    	    $applic_noErr = "Application Number does not exist";
    	$conn->close();
    }
    
    $a = !empty($_POST['aadhaar']);
    $b = !empty($_POST['pan']);
    $c = !empty($_POST['license']);
    $d = !empty($_POST['bill']);
    $e = !empty($_POST['passport']);
 /*   echo $a;
    echo $b;
    echo $c;
    echo $d;
    echo $e; */
    
    if(!isset($_POST['aadhaar']) && !isset($_POST['pan']) && !isset($_POST['license']) && !isset($_POST['bill']) && !isset($_POST['passport']))
  //  if(!(($a&&$b) || ($a&&$c) || ($a&&$d) || ($a&&$e) || ($b&&$c) || ($b&$d) || ($b&&$e) || ($c&&$d) || ($c&&$e) || ($d&&$e)))
  /*   if(!(($a||$b||$c||$d) && !($a||$b||$c||$e) && !($e||$b||$c||$d) && !($a||$e||$c||$d) && !($a||$b||$e||$d)))
  	$docErr = "At least two documents are needed to submit";*/
  	
    // if($a || $b || $c || $d || Se)
       	$docErr = "At least one document is needed to be submit";
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
  Logged in as <?php echo $_SESSION['username2']; ?>
<!--
<div id = "right">Logout</div> -->
 </div>
</div>
</div>


<div class = "section group">
<div class="col span_1_of_3">
<ul id="vert_menubar">
  <li><a class="active" href="http://miniprojectofwebsite2.000webhostapp.com/activate_acct.php">Activate account</a></li>
  <li><a href="http://miniprojectofwebsite2.000webhostapp.com/credit.php">Credit money</a></li>
  <li><a href="http://miniprojectofwebsite2.000webhostapp.com/debit.php">Debit Money</a></li>
  <li><a href="http://miniprojectofwebsite2.000webhostapp.com/emplogout.php">Log Out</a></li>
 
</ul>
</div>

<h2 style="color:purple;">Activate Account</h2>

<?php
if($applic_no == "" || $applic_noErr != "" || $docErr != "" )
{
 echo '
 <div class="col span_2_of_3">
  <div id = "back">
  <form id="myform" method="post" action="', htmlspecialchars($_SERVER["PHP_SELF"]), '">
    <label for="fname">Application No.:</label>
	
    <input type="number" id="fname" name="applic_no" value = "', $applic_no, '"> </div> <br/> <br/>
    <div class="error">', $applic_noErr, '</div> 
 <br> <br>

 <table id="acc_info" align = "center" width = "400" cellpadding="5" cellspacing="5" border = "1">
    <tr>
     <th colspan="2">Documents submitted:</th>
    </tr>
    <tr>
     <td><input type="checkbox" id = "check1" name="aadhaar" value="Aadhaar card"> </td>
     <td><label for="check">Aadhaar Card</label></td>
    </tr>
    <tr>
     <td><input type="checkbox" id = "check1" name="pan" value="Pan card"> </td>
     <td><label for="check">PAN Card</label></td>
    </tr>
    <tr>
     <td><input type="checkbox" id = "check1" name="license" value="Driving license"> </td>
     <td><label for="check">Driving License</label></td>
    </tr>
    <tr>
     <td><input type="checkbox" id = "check1" name="bill" value="Electricity bill"> </td>
     <td><label for="check">Electricity Bill</label></td>
    </tr>
    <tr>
     <td><input type="checkbox" id = "check1" name="passport" value="Passport"> </td>
     <td><label for="check">Passport</label></td>
    </tr>
    
   </table>
   <br/> <br/> <br/> <br/>
   <div class="error">', $docErr, '</div>
    
   <input type="submit" value="Proceed" id="submit"> 
  </form>
  </div>
  </div>';
}


if($applic_no != "" && $applic_noErr == "" && $docErr == "")
{
   $conn = new mysqli ("localhost", "id324399_yogiraj", "123456", "id324399_banking");
   if($conn->connect_error) 
       die("Failed:".$conn->connect_error);
   $sql = "SELECT * FROM Acct_Applications WHERE applic_no = $applic_no";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
  /* http://localhost/project/employee/activate2.php */
   echo "
   <div style='padding:1px 16px;'>
   <h2 style='color: purple;'>Check Applicant's Details with Submitted Documents</h2>

   <table id='acc_details' style='max-width:100%'>
    <tr>
      <th colspan='2'>Applicant Details</th>
    </tr>
    <tr>
     <td>Application Number</td>
     <td>".$row['applic_no']."</td>
    </tr>
    <tr>
     <td>Full Name</td>
     <td>".$row['name']."</td>
    </tr>
    <tr>
     <td>Mother's Name</td>
     <td>".$row['mother_name']."</td>
    </tr>
    <tr>
      <td>Gender</td>
     <td>".$row['gender']."</td>
    </tr>
    <tr>
     <td>Address</td>
     <td>".$row['address']."</td>
    </tr>
    <tr>
     <td>State</td>
     <td>".$row['state']."</td>
    </tr>
    <tr>
     <td>Date of Birth</td>
     <td>".$row['dobirth']."</td>
    </tr>
    <tr>
     <td>Occupation</td>
     <td>".$row['occupation']."</td>
    </tr>
      <td>Aadhaar Number (UID)</td>
     <td>".$row['aadhaar']."</td>
    </tr>
    <tr>
     <td>Mobile number</td>
     <td>".$row['mob_no']."</td>
    </tr>
    <tr>
     <td>Email id</td>
     <td>".$row['email']."</td>
    </tr>
     <tr>
     <td>Username</td>
     <td>".$row['username']."</td>
    </tr>
    <tr>
     <td>Account Status</td>
     <td>".$row['status']."</td>
    </tr>

   </table>
   </div>
   <br/>
   
   
   <form method='post' action='http://miniprojectofwebsite2.000webhostapp.com/insert_acct.php' id='myform'>
    <input type='hidden' name='applic_no2' value='", $applic_no, "' />
    <input type='submit' style='max-width:175px;' value='Activate Account'>
    <input type='submit' style='max-width:175px; margin-left:40px;' formaction='http://miniprojectofwebsite2.000webhostapp.com/activate_acct.php' value='Cancel Activation' />
   </form>";
 }
?>  
  
  <div class = "section group">
<div class="col span_1_of_4">
<div id = "footer">
  Copyright &copy StateBankOfficial.com
 </div>
</div>
</div>


</body>
</html>
