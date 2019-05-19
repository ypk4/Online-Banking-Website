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
    height: 125%;
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
  form#myform .heading {
	font-family: "Source Sans Pro", sans-serif;
	text-transform: uppercase ; 
	font-size: 30px ;
	text-align: center ;
	color: #037a85 ;
	border-bottom: 3px solid #037a85 ;
  }
  form#myform input, textarea {
	font-family: "Source Sans Pro", sans-serif;
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
	/*font-family: "Source Sans Pro", sans-serif;*/
	width: 100% ;
	padding: 5px ;
  }
  form#myform input[type=submit]{
	font-family: "Source Sans Pro", sans-serif;
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
  $acc_no = $acc_no2 = $amount = $description = $password = "";
  $acc_noErr = $acc_no2Err = $amountErr = $descriptionErr = $passwordErr = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $acc_no = test_input($_POST["acc_no"]);
     // check if acc_no only contains numbers
   // if (filter_var($acc_no, FILTER_VALIDATE_INT) == FALSE)
   if (strlen($acc_no) != 10 || !ctype_digit($acc_no))
       $acc_noErr = "Invalid Account Number";
    
    $acc_no2 = test_input($_POST["acc_no2"]);
    if ($acc_no != $acc_no2)
       $acc_no2Err = "Account numbers do not match";
    
    $amount = test_input($_POST["amount"]);
  //  if (filter_var($amount, FILTER_VALIDATE_INT) == FALSE)
    if (!ctype_digit($amount))
       $amountErr = "Incorrect Amount Format";
    
    $description = test_input($_POST["description"]);
 /*   if (empty($description)) 
       $descriptionErr = "Description is required"; */
    
    $password = test_input($_POST["password"]);
  
  // Check if password is correct
    $conn = new mysqli ("localhost", "id324399_yogiraj","123456", "id324399_banking");
    if($conn->connect_error) 
        die("Failed:".$conn->connect_error);
	
    $sql = "SELECT password FROM Accounts WHERE username = '{$_SESSION['username']}'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {   
	$row = $result->fetch_assoc();
	$repass = $row["password"];
	$value = strcmp($repass, $password);
	if($value != 0)
	     	$passwordErr = "Password incorrect.";
    } 
    else
	$PasswordErr = "Password incorrect.";  
			
    $conn->close();
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

  <div id="login_greet"> Welcome <?php echo $_SESSION['username'];?> </div>


 <?php
  $success = 0;
  if($acc_noErr != "" || $acc_no2Err != "" || $amountErr != "" || $descriptionErr != "" || $passwordErr != "" || $acc_no == "")
  {
    echo '
   <ul id="vert_menubar">
    <li><a href="http://miniprojectofwebsite.000webhostapp.com/login_home.php">Login Home</a></li>
    <li><a class="active" href="http://miniprojectofwebsite.000webhostapp.com/transfer_money.php">Transfer Money</a></li>
    <li><a href="http://miniprojectofwebsite.000webhostapp.com/change_pw.php">Change Password</a></li>
    <li><a href="http://miniprojectofwebsite.000webhostapp.com/logout.php">Log Out</a></li>
   </ul>
   
   <div style="margin-left:25%; padding:1px 16px;">
    <h1 style="color: purple;">Transfer Money</h1>
     <form id="myform" method="post" action="', htmlspecialchars($_SERVER["PHP_SELF"]), '" autocomplete="off">
	<div class="heading">Fill out the form</div>
	</br></br>
	<label>To Account Number <span style="color:red"> *</span> </label>
	<input type="number" name="acc_no" title="Enter account number of receiver without any space" value="', $acc_no, '" required/>  
        <div class="error">', $acc_noErr, '</div> <br/> <br/>
        
	<label>Re-Enter Account Number <span style="color:red"> *</span> </label>
	<input type="number" name="acc_no2" title="Re-Enter account number" value="', $acc_no2, '" required/>
	<div class="error">', $acc_no2Err, '</div> <br/> <br/>
	
	<label>Amount <span style="color:red"> *</span> </label>
	<input type="number" name="amount" title="Enter amount in INR without any space and comma" value="', $amount, '" required/>
	<div class="error">', $amountErr, '</div> <br/> <br/>
	
	<label>Description</label>
	<textarea name="description" rows="2" maxlength="60" title="Write some description which will remind you and receiver about this particular transaction" value="', $description, '"> </textarea>
	<br/> <br/> <br/>
		
	<label>Enter Your Password <span style="color:red"> *</span> </label>
	<input type="password" name="password" title="Enter your Login Password to confirm transaction" value="', $password, '" required/> <br/> <br/>
	<div class="error">', $passwordErr, '</div> <br/>
	
	<input type="submit" value="Submit" /> <br/>
     </form>
    </div>';
 }  
 
     date_default_timezone_set("India");
     $date = date("Y-m-d"); 
    // echo "Today is " . $date . "<br>";
     $time = date("H:i:s");
    // echo "Time is ". $time . "<br>";
    
     if($acc_noErr == "" && $acc_no2Err == "" && $amountErr == "" && $descriptionErr == "" && $passwordErr == "" && $acc_no != "")
     { 
        /* Create connection */
	$conn = new mysqli ("localhost", "id324399_yogiraj", "123456", "id324399_banking");
        if($conn->connect_error)
     	    die("Failed:".$conn->connect_error);
    
        /* Storing old balance of sender before transaction, to check if balance >= amount */
        $sql2 = "SELECT balance, acc_no FROM Accounts WHERE username='{$_SESSION['username']}'";			/* HERE */
        $result2 = $conn->query($sql2);
        $row2 = $result2->fetch_assoc();				// fetch_assoc() puts result into associative array $row2
        $oldbal = $row2["balance"];
        $account = $row2["acc_no"];
     // $account = acc no of sender, $acc_no = acc no of receiver
           
    	/* Check if receiver/destination account number exists :- */
    	$sql0 = "SELECT * FROM Accounts WHERE acc_no=$acc_no";		
        $result0 = $conn->query($sql0);
        if($result0->num_rows == 0)
            echo "<p class='error' style='text-align:center; font-size:20px;'><b>Transaction failed..</b> Incorrect Account Number</p>";
            
        else if($oldbal < $amount)
            echo "<p class='error' style='text-align:center; font-size:20px;'><b>Transaction failed..</b> Available balance is low</p>";
            
        else
        {
          /* Insert transaction record into table "Transactions" :- */
       
          $sql = "INSERT INTO Transactions(date, time, from_acc, to_acc, amount, description) 
                           VALUES('$date', '$time', $account, $acc_no, $amount, '$description')"; 		/* HERE */

          if($conn->query($sql) === TRUE)
     	     ;
          else
     	     echo "Record Creation Error".$sql."<br/>".$conn->error;
      
        
         /* Update balance of sender and receiver in table "Accounts" :- */
         /* 1. Of sender first */
          $newbal = $oldbal - $amount;
        
          $sql3 = "UPDATE Accounts SET balance=$newbal WHERE acc_no=$account";				/* HERE */
          if($conn->query($sql3) === TRUE)
         	;
          else
        	echo "Error". $conn->error;
        	
         /* 2. Of receiver now */
          $sql4 = "SELECT balance FROM Accounts WHERE acc_no=$acc_no";		
          $result4 = $conn->query($sql4);
          $row4 = $result4->fetch_assoc();				// fetch_assoc() puts result into associative array $row2
          $newbal = $row4["balance"] + $amount;
         
          $sql5 = "UPDATE Accounts SET balance=$newbal WHERE acc_no=$acc_no";
          if($conn->query($sql5) === TRUE) {
        	//echo "Receiver balance updated";
        	$success = 1;
        	}
          else
        	echo "Error". $conn->error;
        	
        }
        $conn->close();
        echo '<ul id="vert_menubar" style="height:62.5%" >
  	   <li><a href="http://miniprojectofwebsite.000webhostapp.com/login_home.php">Login Home</a></li>
	   <li><a class="active" href="http://miniprojectofwebsite.000webhostapp.com/transfer_money.php">Transfer Money</a></li>
    	   <li><a href="http://miniprojectofwebsite.000webhostapp.com/change_pw.php">Change Password</a></li>
	   <li><a href="http://miniprojectofwebsite.000webhostapp.com/logout.php">Log Out</a></li>
           </ul>';  
 	      
 	if($success == 1)
 	{ 
 	  echo '<div style="margin-left:25%; padding:1px 16px;">
  	 <h1 style="color: purple;">Money Transfer Successful !!</h2>  <br/>
  	 <a href="http://miniprojectofwebsite.000webhostapp.com/login_home.php" style="align:center; font-size:18px; color:#580000;">Click here to go to Login Home</a>
 	 </div>
 	 <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>';
 	 }
 	 else
 	   echo ' <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> ';
      }
  ?>
  
  <div id="footer">
   Copyright &copy StateBankOfficial.com
  </div>

 </body>
</html>
