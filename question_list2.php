<?php
include "connection2.php";
include "header2.php";

$sql = "SELECT * FROM Questions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<h1> Questions </h1>";
  echo "<table class= 'table table-hover' width = '100%'>";
  while($row = $result->fetch_assoc()) {
    $id=$row["id"];
    $delete_url = "<a href='question_delete2.php?id=$id'>Delete</a>";
    $update_url = "<a href='question_update2.php?id=$id'>Update</a>";
    echo "<tr>";
    echo "<td>" . $row["question"] . "</td>";
    echo "<td>" . $row["answer"]   . "</td>";
    echo "<td>" . $row["optionA"]  . "</td>";
    echo "<td>" . $row["optionB"]  . "</td>";
    echo "<td>" . $row["optionC"]  . "</td>";
    echo "<td>" . $row["optionD"]  . "</td>";
    echo "<td>" . $update_url      . "</td>";
    echo "<td>" . $delete_url      . "</td>";
  }
    echo"</table>";
} else {
  echo "No records";
}
echo "<a href='question_add2.php'> Add Questions</a>";
$conn->close();
?>
