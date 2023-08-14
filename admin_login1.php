<?php
include "header_learner.php";
include "connection_admin.php"
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
<form action="admin_validation.php" method= "POST">
  <table class= 'table hover'>
    <tr>
      <td><p>Username<span>*</span></p>
      <td><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" name="username" value ="" required></td>
    <tr>
      <td><p>Password<span>*</span></p>
      <td><input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password" name="password" value ="" required></td>
    <tr>
     <td><p id="button"><button type="submit" name="submit" value="submit" class="btn btn-primary">Login</button></td>
</form>
</div>
</body>
</html>
