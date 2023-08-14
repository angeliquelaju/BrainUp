<?php
include "connection2.php";
include "header_learner.php";
$message = "";
$username = "";
$password = "";

if (isset($_POST["submit"])) {
    $username  = $_POST["username"] ;
    $password  = $_POST["password"] ;
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      if ($row = $result->fetch_assoc()) {
        header("location: feedback_list.php");
      }
    } else {
      $message = "Invalid user ID or password";
      $username = "";
      $password = "";
    }
    $conn->close();
}
?>

<html>
<head>
  <style>
  td.unp{
    font-size: 1.2rem;
  }
  span{
    color: red;
  }
  p#button{
    margin-left: -2rem;
  }
  </style>
</head>
<body>
<div class = "container">
<h3> Admin Login </h3>
<form action="admin_login.php" method= "post">
  <table class= 'table hover'>
    <tr>
      <td><p>Username<span>*</span></p>
      <td><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" name="username" value ='<?php echo $username; ?>' required></td>
    <tr>
      <td><p>Password<span>*</span></p>
      <td><input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password" name="password" value ='<?php echo $password; ?>' required></td>
    <tr>
      <td><p id="button"><button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button></td>
</form>
</div>
</body>
</html>
