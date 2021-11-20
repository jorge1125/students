<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE card_activation ( 
id int(10) NOT NULL,                                                        
  u_card varchar(12) NOT NULL,
  u_f_name text NOT NULL,
  u_l_name text NOT NULL,
  u_father` text NOT NULL,

  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

if ($conn->query($sql) === TRUE) {
  echo "Table card_activation  successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();





?>