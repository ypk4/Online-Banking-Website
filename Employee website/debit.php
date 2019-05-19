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

#num1{
    position: relative;
    top: 0px;
    left: 10%;
    width: 50%;
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
    left: 19%;
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
    width: 70%;
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

 #menu {
	background-color:yellow;
     	position:relative;
	top:-58px;
	left:85%;
	color:white;
 	padding: 10px 20px;
	overflow:hidden;
    	width:85px;
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
    height: 25%;
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
    text-align: left;
	
 }
 table#acc_info th {
    background-color: #eeefff;
    color:purple;
 }
 
 .success {
    color: green;
	position:relative;
	/*top:-35px; */
	left:15px;
	margin-left: 70px;
	font-size: 30px;
	
  /*  text-align: right;	*/
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
	top:-30px;
    	color: purple;
    	/*text-decoration:underline;*/
	
}
</style>
<body>

<?php 
//$account = $amount = 0;
$error = $success = "";
//$balance = 0;
//$newbalance = 0;

//echo $_SESSION['username'];

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   $account = test_input($_POST["account"]);
   $amount = test_input($_POST["amount"]);
    
 //  if (filter_var($amount, FILTER_VALIDATE_INT) === FALSE)
   if(!ctype_digit($account))
    	$error = "Type valid amount";
    	
   if($error == "")
   {
	$conn = new mysqli ("localhost", "id324399_yogiraj", "123456", "id324399_banking");
        if($conn->connect_error) 
     	    die("Failed:".$conn->connect_error);
	
	$sql = "SELECT balance FROM Accounts WHERE acc_no = $account";
	
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0)
	{
   		$row = $result->fetch_assoc();
		$balance = $row["balance"];
		if($balance < $amount)
			$error = "Account balance low";
		else 
		{
			$newbalance = $balance - $amount;
			$sql="UPDATE Accounts SET balance = $newbalance WHERE acc_no = $account";
 
			if($conn->query($sql) === false)
				die('Wrong SQL: ' . $sql . ' Error: ' . $conn->error);
			else
				$success = "Amount debited successfully";
				
			 date_default_timezone_set("India");
    			 $date = date("Y-m-d"); 
			 // echo "Today is " . $date . "<br>";
 	        	 $time = date("H:i:s");
   			 // echo "Time is ". $time . "<br>";
   		 
   			 $sql = "INSERT INTO Transactions(date, time, from_acc, amount, description) 
                	           VALUES('$date', '$time', $account, $amount, 'Debit')"; 		/* HERE */
	
      			 if($conn->query($sql) === TRUE)
     	     			;
  	        	 else
     			      echo "Record Creation Error".$sql."<br/>".$conn->error;
    
		}
	 }
	 else
		$error = "Account number incorrect. Try again";  
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
<div id = "emp">
  Logged in as <?php echo $_SESSION['username2'];?> 
 </div>
<!--<div id="menu">
  <a href="http://localhost/project/employee/emp_login.php">LOGOUT</a>
</div>-->
</div>
</div>


<div class = "section group">
<div class="col span_1_of_3">
<ul id="vert_menubar">
  <li><a href="http://miniprojectofwebsite2.000webhostapp.com/activate_acct.php">Activate account</a></li>
  <li><a href="http://miniprojectofwebsite2.000webhostapp.com/credit.php">Credit money</a></li>
  <li><a class = "active" href="http://miniprojectofwebsite2.000webhostapp.com/debit.php">Debit Money</a></li>
  <li><a href="http://miniprojectofwebsite2.000webhostapp.com/emplogout.php">Log Out</a></li>
</ul>
</div>

<div class="col span_2_of_3">
<div id = "credit">Debit Money</div>
<br>


<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<div class="error"><?php echo $error;?></div>

<?php
if($success == "")
{ echo '
 <div id = "back">
	
    <label for="num1">Account No. :</label>
	
    <input type="number" id="num1" name="account" required> 
<br>
<br>
<label for="num2">Amount :</label>
	
    <input type="number" id="num2" name="amount" required> 
<br>
<br>
</div>
	
<br>
<br>
    <input type="submit" value = "Debit">';
}
?>

</form>

<div class="success"><b><?php echo $success;?></b></div>

<?php
if($success != "")
{	echo ' <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> ';
} ?>

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
