<?php
   $conn = new mysqli ("localhost", "Yogiraj", "123456", "Banking");
   if($conn->connect_error)
   	die("Connection failed :". $conn->connect_error);
   	
/*   $sql = "CREATE TABLE Transactions
   (	trans_no INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   	date DATE NOT NULL,
   	time TIME NOT NULL,
   	from_acc INT(10) UNSIGNED NOT NULL,
   	to_acc INT(10) UNSIGNED NOT NULL,
   	amount INT(10) UNSIGNED NOT NULL,
   	description VARCHAR(60)
   )";
   
   if($conn->query($sql) === TRUE)
   	echo "Table created";
   else
   	echo "Failed : ". $conn->error;*/
   	   	
   $sql = "ALTER TABLE Transactions
 	   MODIFY from_acc INT(10) UNSIGNED DEFAULT NULL";
    
   if($conn->query($sql) === TRUE)
   	echo "Table modified";
   else
   	echo "Failed : ". $conn->error;
   	
   $conn->close();	
?>
