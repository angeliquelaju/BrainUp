<?php
include "connection2.php";
include "header2.php";
$message = "";
$username = "user1";
$password = "user1";

if (isset($_POST["submit"])) {     
    $username  = $_POST["username"] ;   
    $password  = $_POST["password"] ;  
    $sql = "SELECT * FROM learner WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      if ($row = $result->fetch_assoc()) {
        header("location: dashboard.php");
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
<body>
<div class = "container">
<h1> Learner Login </h1>
<form action="learner_login.php" method= "post">  
    <table class = 'table hover'>
        <tr>
            <td>Username:</td><td><input type='text' name='username' value = '<?php echo $username; ?>' required></td></tr>
        <tr>
            <td>Password:</td><td><input type='password' name='password' value = '<?php echo $password; ?>' required></td></tr>
        <tr>
            <td colspan ='2'><input type='submit' name='submit'
            value = 'Submit'></td></tr>
        <tr>
            <td colspan ='2'><p style ='color:red'><?php echo $message; ?></p></td>
        </tr> 
    </table>
</form>
</div>
</body>
</html>



    
