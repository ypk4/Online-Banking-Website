<?php
   $conn = new mysqli('localhost', 'Yogiraj', '123456', 'Banking');
   $sql = "SELECT * FROM Transactions";
   $result = $conn->query($sql);
   while($row = $result->fetch_assoc())
      echo $row["trans_no"]. " ". $row["date"]. " ". $row["time"]. " ". $row["from_acc"]. " ". $row["to_acc"]. " ". $row["amount"]. " ". $row["description"]. "<br>";
?>
