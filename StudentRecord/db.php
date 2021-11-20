<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection

$sql = "CREATE DATABASE if not exists  user";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$query = "INSERT INTO card_activation (id, u_card, u_f_name, u_l_name, u_father, u_aadhar, u_birthday, u_gender, u_email, u_phone, u_state, u_dist, u_village, u_police, u_pincode, file, u_mother, u_family, staff_id, uploaded),
VALUES('102', 'Lavkush', 'adsfasdf', 'asdfadf', 'asdf', '', '', '', '', 'asdf', '', '', '', '', '', '', 'aadsf', '', '', '', '2021-01-16 12:47:17')";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



//Table structure for table `card_activation`=[students]


$sql = "CREATE TABLE if not exists card_activation ( 
  id int(10) NOT NULL,
  u_card varchar(12) NOT NULL,
  u_f_name text NOT NULL,
  u_l_name text NOT NULL,
  u_father text NOT NULL,
  u_aadhar varchar(12) NOT NULL,
  u_birthday text NOT NULL,
  u_gender varchar(6) NOT NULL,
  u_email text NOT NULL,
  u_phone varchar(10) NOT NULL,
  u_state varchar(12) NOT NULL,
  u_dist text NOT NULL,
  u_village text NOT NULL,
  u_police text NOT NULL,
  u_pincode text NOT NULL,
  file longblob NOT NULL,
  u_mother varchar(30) NOT NULL,
  u_family text NOT NULL,
  staff_id varchar(12) NOT NULL,
  PRIMARY KEY (id)
  )";

  if ($conn->query($sql) === TRUE) {
    echo "";
  } else {
    echo "Error creating table: " . $conn->error;
  }
     //insert data for test display imfo
  //$sql="INSERT INTO card_activation (id, u_card, u_f_name, u_l_name, u_father, u_aadhar, u_birthday, u_gender, u_email, u_phone, u_state, u_dist,u_village, u_police, u_pincode, file, u_mother, u_family, staff_id, image, uploaded)
  //VALUES('11, 'Lavkush', 'adsfasdf', 'asdfadf', 'asdf', '', '', '', '', 'asdf', '', '', '', '', '', '', 'aadsf', '', '', '', '')";
  
  


  $sql = "CREATE TABLE if not exists Company(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    compname VARCHAR(30) NOT NULL,
    compdirection VARCHAR(30) NOT NULL,
    compwoner VARCHAR(50)
    )";

if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error creating table: " . $conn->error;
}


$sql = "CREATE TABLE if not exists Departments(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  compname VARCHAR(30) NOT NULL,
  compdirection VARCHAR(30) NOT NULL,
  compwoner VARCHAR(50)
  )";


// Close connection

?>