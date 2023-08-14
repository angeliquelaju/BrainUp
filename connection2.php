<?php
$servername = "rupakenca.iixcp.rumahweb.com";
$username = "root";
$password = "";
$dbname = "pp_trivia";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
