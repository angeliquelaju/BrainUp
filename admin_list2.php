<?php
include "connection2.php";
include "header2.php";

$sql = "SELECT * FROM admin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<h1> Admin List </h1>";
  echo "<table class= 'table table-hover' width = '100%'>";
  while($row = $result->fetch_assoc()) {
    $id=$row["id"];
    $delete_url = "<a href='admin_delete2.php?id=$id'>Delete</a>"; 
    $update_url = "<a href='admin_update2.php?id=$id'>Update</a>"; 
    echo "<tr>";
    echo "<td>" . $id                . "</td>";
    echo "<td>" . $row["firstname"]  . "</td>";
    echo "<td>" . $row["lastname"]   . "</td>";
    echo "<td>" . $row["email"]      . "</td>";
    echo "<td>" . $row["username"]   . "</td>";
    echo "<td>" . $update_url        . "</td>";
    echo "<td>" . $delete_url        . "</td>";
  }
    echo"</table>";
} else {
  echo "No records";
}
echo "<a href='admin_add2.php'> Add Admin</a>";
$conn->close();
?>