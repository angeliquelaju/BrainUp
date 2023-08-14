<?php

include "connection2.php";

$sql = "CREATE TABLE Questions (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
qgroup    VARCHAR (3)    NOT NULL,
question  VARCHAR (1000) NOT NULL,
qphoto    VARCHAR (50)           ,
answer    VARCHAR (1)    NOT NULL,
optionA   VARCHAR (500)          ,
optionB   VARCHAR (500)          ,
optionC   VARCHAR (500)          ,
optionD   VARCHAR (500)          ,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>