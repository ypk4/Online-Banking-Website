<!DOCTYPE html>
<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>State Bank Personal Banking</title>
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
 
  
 #footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;	 	
    max-width:100%;
  }
  </style>
 </head>

 <body>

  <div id="header">
   <span id = "headertext"><b>State Bank</b></span> <span id="subtitle"> Banking is now just a click away..!</span>
  </div>

  <div class = "section group">
<div class="col span_1_of_2">
<div id = "emp">
  Logged in as .... ....
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
  <li><a href="http://miniprojectofwebsite2.000webhostapp.com/index.php">Log Out</a></li>
 
</ul>
</div>
 
  <?php
  function test_input($data)
  {
	$data = trim($data);
 	$data = stripslashes($data);
 	$data = htmlspecialchars($data);
 	return $data;
  }
  
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
     echo '<div style="margin-left:25%">';
 /*    var_dump($_POST);
   //  echo '<br/>';
     print_r($_POST);
   //  echo '<br/>'; */
     $applic_no = test_input($_POST["applic_no2"]);
    //   echo $applic_no, " 1<br/>";
 //    echo $_POST(["applic_no2"]);
   
    $conn = new mysqli ("localhost", "id324399_yogiraj", "123456", "id324399_banking");
    if($conn->connect_error)
       die("Failed:".$conn->connect_error);
   /* echo $applic_no3, "7<br/>", "<br/>";    echo $applic_no3, "8<br/>";    echo $applic_no3, "9<br/>";    echo $applic_no, "10<br/>";    echo $applic_no, "11<br/>";    echo $applic_no, "12<br/>";    echo $applic_no, "13<br/>";    echo $applic_no, "14<br/>";    echo $applic_no, "15<br/>";*/
     
    $sql = "SELECT * FROM Acct_Applications WHERE applic_no = $applic_no";	
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
  //  var_dump($row);
    
 //   print_r( 'Hi');
    $newstatus = "Account Activated";
    // Update status of application in Acct_Applications table :-
    $sql2 = "UPDATE Acct_Applications SET status= '$newstatus' WHERE applic_no= $applic_no";
    if($conn->query($sql2) === TRUE)
	;
    else
    	echo "Error".$conn->error;
   
   $pin = intval($row['pincode']);
   $mob = intval($row['mob_no']);
   $uid = intval($row['aadhaar']);
   $bal = 0;
   
    // Insert account details in Accounts table :-    
    if($row['aadhaar'] != "")
	$sql = "INSERT INTO Accounts(name, mother_name, gender, address, pincode, state, dobirth, occupation, aadhaar, mob_no, email, username, password, balance)   VALUES('{$row['name']}', '{$row['mother_name']}', '{$row['gender']}', '{$row['address']}', $pin, '{$row['state']}', '{$row['dobirth']}', '{$row['occupation']}', $uid, $mob, '{$row['email']}', '{$row['username']}', '{$row['password']}', $bal)";

    /*     $sql = "INSERT INTO Accounts(name, mother_name, gender, address, pincode, state, dobirth, occupation, aadhaar, mob_no, email, username, password, balance)   VALUES($row[\"name\"], $row[\"mother_name\"], $row[\"gender\"], $row[\"address\"], $pin, $row[\"state\"], $row[\"dobirth\"], $row[\"occupation\"], $uid, $mob, $row[\"email\"], $row[\"username\"], $row[\"password\"], $bal)";*/

   /*    $sql = "INSERT INTO Accounts(name, mother_name, gender, address, pincode, state, dobirth, occupation, aadhaar, mob_no, email, username, password, balance)   VALUES('$row['name']', '$row['mother_name']', '$row['gender']', '$row['address']', $pin, '$row['state']', '$row['dobirth']', '$row['occupation']', $uid, $mob, '$row['email']', '$row['username']', '$row['password']', $bal)";  */
    else
  //     echo 'null';
  /*  	$sql = "INSERT INTO Accounts(name, mother_name, gender, address, pincode, state, dobirth, occupation, mob_no, email, username, password, balance)   VALUES($row[\"name\"], $row[\"mother_name\"], $row[\"gender\"], $row[\"address\"], $pin, $row[\"state\"], $row[\"dobirth\"], $row[\"occupation\"], $mob, $row[\"email\"], $row[\"username\"], $row[\"password\"], $bal)"; */
 /*	$sql = "INSERT INTO Accounts(name, mother_name, gender, address, pincode, state, dobirth, occupation, mob_no, email, username, password, balance)   VALUES({$row['name']}, {$row['mother_name']}, {$row['gender']}, {$row['address']}, $pin, {$row['state']}, {$row['dobirth']}, {$row['occupation']}, $mob, {$row['email']}, {$row['username']}, {$row['password']}, $bal)";*/

 	$sql = "INSERT INTO Accounts(name, mother_name, gender, address, pincode, state, dobirth, occupation, mob_no, email, username, password, balance)   VALUES('{$row['name']}', '{$row['mother_name']}', '{$row['gender']}', '{$row['address']}', $pin, '{$row['state']}', '{$row['dobirth']}', '{$row['occupation']}', $mob, '{$row['email']}', '{$row['username']}', '{$row['password']}', $bal)";

 
   if($conn->query($sql) === TRUE) 
   {    $acct_no = $conn->insert_id;
   	$new = str_pad($acct_no, 10, '0', STR_PAD_LEFT);
   	echo "<h1>Account Created Succesfully !! </h1> <br/>";
   	echo "<p style='font-size:20px'> IMPORTANT Applicant's Account Number is ", $new, "<br/>";
   }
   else 
       echo "Record Creation Error".$conn->error;
       
   $conn->close();
   echo '</div>';
 }
  ?>
  
 <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
 <div class = "section group">
  <div class="col span_1_of_4">
   <div id = "footer">
     Copyright &copy StateBankOfficial.com
   </div>
  </div>
 </div>

 </body>
</html>
