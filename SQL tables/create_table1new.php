<?php
   $conn = new mysqli ("localhost", "Yogiraj", "123456", "Banking");
   if($conn->connect_error)
   	die("Connection failed :". $conn->connect_error);
   	
   $sql = "CREATE TABLE Acct_Applications
   (	applic_no INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   	name VARCHAR(100) NOT NULL,
   	mother_name VARCHAR(30) NOT NULL,
   	gender VARCHAR(8) NOT NULL,
   	address VARCHAR(100) NOT NULL,
   	pincode SMALLINT(6) UNSIGNED NOT NULL,
   	state VARCHAR(30) NOT NULL,
   	dobirth DATE NOT NULL,
   	occupation VARCHAR(30) NOT NULL,
   	aadhaar BIGINT(16) UNSIGNED,
   	mob_no BIGINT(10) UNSIGNED NOT NULL,
   	email VARCHAR(40),
   	username VARCHAR(20) NOT NULL,
   	password VARCHAR(20) NOT NULL,
   	status VARCHAR(30) NOT NULL
   )";
   
   if($conn->query($sql) === TRUE)
   	echo "Table created";
   else
   	echo "Failed : ". $conn->error;
   	
   $conn->close();	
?>
