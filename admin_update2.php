<?php
include "connection2.php";
include "header2.php";

if (isset($_POST["submit"])) {
    $id        = $_POST["id"];
    $firstname = $_POST["firstname"];
    $lastname  = $_POST["lastname"] ;
    $email     = $_POST["email"]    ;      
    $username  = $_POST["username"] ;   
    $password  = $_POST["password"] ;   
    $sql = "UPDATE admin SET lastname='$lastname',firstname='$firstname',
            email='$email', username='$username', password='$password' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("location: admin_list2.php");
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    } 
    $conn->close();
} else {
    $id = $_GET["id"];
    $sql = "SELECT * FROM admin WHERE id=$id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        if($row = $result->fetch_assoc()) {
            $id        = $row["id"];
            $firstname = $row["firstname"];
            $lastname  = $row["lastname"];
            $email     = $row["email"];
            $username  = $row["username"];
            $password  = $row["password"];
        }
    }
}
?>

<html>
<body>
<div class = "container">
<h1> Update Admin </h1>
<form action="admin_update2.php" method= "post">
    <?php
    echo " 
    <table class = 'table hover'>
        <tr>
            <td>ID:</td><td><input type='text' name='id' value='$id' readonly></td>
        </tr>
        <tr>
            <td>First name:</td><td><input type='text' name='firstname' value='$firstname' required></td>
        </tr>
        <tr>
            <td>Last name:</td><td><input type='text' name='lastname' value='$lastname' required></td>
        <tr>
            <td>Email:</td><td><input type='text' name='email' value='$email' required></td>
        <tr>
            <td>Username:</td><td><input type='text' name='username' value='$username' required></td>
        <tr>
            <td>Password:</td><td><input type='password' name='password' value='$password' required></td>
        <tr>
            <td colspan ='2'><input type='submit' name='submit'
            value = 'Submit'></td>
        </tr>
    </table>
    ";
    ?>
</form>
</div>
</body>
</html>



    
