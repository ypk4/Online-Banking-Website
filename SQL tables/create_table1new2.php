<?php
   $conn = new mysqli ("localhost", "Yogiraj", "123456", "Banking");
   if($conn->connect_error)
   	die("Connection failed :". $conn->connect_error);
   	
   $sql = "ALTER TABLE Acct_Applications
 	   MODIFY status VARCHAR(100)";
    
   if($conn->query($sql) === TRUE)
   	echo "Table modified";
   else
   	echo "Failed : ". $conn->error;
   	
   $conn->close();	
?>
