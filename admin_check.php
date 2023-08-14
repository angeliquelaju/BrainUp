<?php
include "connection2.php";

if(isset($_POST['submit'])){
  $username = $_POST['username']
  $password = $_POST['password']

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

    if ($result->num_rows > 0) {
      if ($row = $result->fetch_assoc()) {
        if($row == 1) {
          echo "login successful"
          $_SESSION['username'] = $username;
        header("location: feedback_list.php");
      }
    } else {
      $message = "Invalid user ID or password";
      $username = "";
      $password = "";
    }
      $conn->close();
}
}
