<?php
    session_start();
?>

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
    height: 70%;
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

  table#acc_info, table#acc_info th, table#acc_info td {
    border: 1px solid black;
    border-collapse: collapse;
 }
  table#acc_info th, table#acc_info td {
    padding: 6.5px;
    text-align: left;
 }
 table#acc_info th {
    background-color: #eee;
 }
 table#acc_info caption {
    margin-bottom: 15px;
    color: #330066;
    font-weight: bold;
    font-size: 130%;
    text-align: left;
 }

  table#transactions, table#transactions th, table#transactions td {
    border: 1px solid black;
    border-collapse: collapse;
 }
  table#transactions th, table#transactions td {
    padding: 6.5px;
    text-align: left;
 }
 table#transactions th {
    background-color: #eee;
 }
 table#transactions caption {
    margin-bottom: 15px;
    color: #330066;
    font-weight: bold;
    font-size: 130%;
    text-align: left;
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

  <div id="header">
   <span id = "headertext"><b>State Bank</b></span> <span id="subtitle"> Banking is now just a click away..!</span>
  </div>

  <div id="login_greet"> Welcome <?php echo $_SESSION['username'] ?> </div>

 <ul id="vert_menubar">
   <li><a class="active" href="http://miniprojectofwebsite.000webhostapp.com/login_home.php">Login Home</a></li>
   <li><a href="http://miniprojectofwebsite.000webhostapp.com/transfer_money.php">Transfer Money</a></li>
   <li><a href="http://miniprojectofwebsite.000webhostapp.com/change_pw.php">Change Password</a></li>
   <li><a href="http://miniprojectofwebsite.000webhostapp.com/logout.php">Log Out</a></li>
  </ul>
  
  <?php
    $conn = new mysqli ("localhost", "id324399_yogiraj", "123456", "id324399_banking");
    if($conn->connect_error)
       die("Failed:".$conn->connect_error);
       
  //  echo '<div style="margin-left:25%">', $_SESSION["username"], '</div>';
     
    /* Retrieving and displaying account details from table Accounts */   
    $sql = "SELECT * FROM Accounts WHERE username='{$_SESSION["username"]}'";			
    $result = $conn->query($sql);
 /*   if($result->num_rows > 0)
    	echo '<div style="margin-left:25%"> yes <br/>', $_SESSION["username"], '</div>';
    else
    	echo '<div style="margin-left:25%"> no <br/>', $_SESSION["username"], '</div>'; */
    	
   $row = $result->fetch_assoc();
 //  var_dump($row);
     
   echo "
   <div style='margin-left:25%; padding:1px 16px;'>
   <h1 style='color: purple;'>Personal Banking Home</h2>

   <table id='acc_info' style='max-width:100%'>
    <caption>Account Information</caption>
    <tr>
     <th colspan='2'>Account Details</th>
    </tr>
    <tr>
     <td>Name</td>
     <td>".$row['name']."</td>
    </tr>
    <tr>
     <td>Account Number</td>
     <td>".$row['acc_no']."</td>
    </tr>
    <tr>
     <td>Bank Branch</td>
     <td>".$row['branch']."</td>
    </tr>
    <tr>
     <td>Available Balance</td>
     <td>".$row['balance']."</td>
    </tr>
    <tr>
     <td>Mobile Number</td>
     <td>".$row['mob_no']."</td>
    </tr>
   </table>";
   $account = $row['acc_no'];
   $conn->close();
   
   echo "<br/> <br/>";
  
   $conn = new mysqli ("localhost", "id324399_yogiraj", "123456", "id324399_banking");
   if($conn->connect_error)
       die("Failed:". $conn->connect_error);
       
   /* Retrieving and displaying last 10 transactions from table Transactions */
   $sql = "SELECT * FROM Transactions WHERE from_acc=$account OR to_acc=$account LIMIT 10";
   $result = $conn->query($sql);
   
   echo "
   <table id='transactions' style='max-width:100%'>
    <caption>Last 10 Transactions</caption>
    <tr>
     <th>Date</th>
     <th>Time</th>
     <th>Transaction Number</th>
     <th>Type</th>
     <th>Account Number</th>
     <th>Amount</th>
     <th>Description</th>
    </tr>";
    
   if($result->num_rows > 0)
   {
   	while($row = $result->fetch_assoc())
   	{	
    		if($row['from_acc']==$account) { $type="Debit"; $other=$row['to_acc']; }
    		else { $type="Credit"; $other=$row['from_acc']; }
    
    		echo "
 		   <tr>
 		    <td>".$row['date']."</td>
   		  <td>".$row['time']."</td>
   		  <td>".$row['trans_no']."</td>
   		  <td>".$type."</td>
   		  <td>".$other."</td>
    		 <td>".$row['amount']."</td>
    		 <td>".$row['description']."</td>
    		</tr>";
  	 }
   }
   echo "
   </table>

  </div>";
 ?>
    
  <br/> <br/> 

  <div id="footer">
   Copyright &copy StateBankOfficial.com
  </div>

 </body>
</html>
