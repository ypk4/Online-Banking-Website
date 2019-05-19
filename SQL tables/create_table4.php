<?php
   $conn = new mysqli ("localhost", "Yogiraj", "123456", "Banking");
   if($conn->connect_error)
   	die("Connection failed :". $conn->connect_error);
   	
   $sql = "CREATE TABLE Employee
   (	id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   	username VARCHAR(20) NOT NULL,
   	password VARCHAR(20) NOT NULL,
   	branch VARCHAR(25) NOT NULL
   )";
   
   if($conn->query($sql) === TRUE)
   	echo "Table created";
   else
   	echo "Failed : ". $conn->error;
   	
   $conn->close();	
?>
