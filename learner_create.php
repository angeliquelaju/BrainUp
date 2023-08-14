<?php
include "connection2.php";

$sql = "CREATE TABLE learner (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username  VARCHAR (100),
password  VARCHAR (100),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>