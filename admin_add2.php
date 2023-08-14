<?php
include "connection2.php";
include "header2.php";

if (isset($_POST["submit"])) {
    $firstname = $_POST["firstname"];
    $lastname  = $_POST["lastname"] ;
    $email     = $_POST["email"]    ;      
    $username  = $_POST["username"] ;   
    $password  = $_POST["password"] ;   
    $sql = "INSERT INTO admin (firstname, lastname, email, username, password)
            VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("location: admin_list2.php");
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    } 
    $conn->close();
}
?>

<html>
<body>
<div class = "container">
<h1> Add Admin </h1>
<form action="admin_add2.php" method= "post">
   
    <table class = 'table hover'>
        <tr>
            <td>First name:</td><td><input type='text' name='firstname' required></td>
        </tr>
        <tr>
            <td>Last name:</td><td><input type='text' name='lastname'  required></td>
        <tr>
            <td>Email:</td><td><input type='text' name='email'  required></td>
        <tr>
            <td>Username:</td><td><input type='text' name='username'  required></td>
        <tr>
            <td>Password:</td><td><input type='password' name='password'  required></td>
        <tr>
            <td colspan ='2'><input type='submit' name='submit'
            value = 'Submit'></td>
        </tr>
    </table>

</form>
</div>
</body>
</html>



    
