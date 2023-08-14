<?php
include "connection2.php";
include "header_learner.php";

if (isset($_POST["submit"])) {
    $email  = $_POST["email"] ;
    $comments  = $_POST["comments"] ;
    $sql = "INSERT INTO feedback2 (email, comments)
            VALUES ('$email', '$comments')";

    if ($conn->query($sql) === TRUE) {
        header("location: dashboard.php");
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<html>
<body>
<div class = "container">
<h3>Feedback</h3>
<form action="signup.php" method= "post">
    <table class = 'table hover'>
        <tr>
            <td><label for="exampleInputEmail1">Email address</label>
            <br><input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll contact you for further information on how we can improve this site.</small>
            </td>
        <tr>
            <td>Comments and Feedback
            <br><textarea class="form-control" id="exampleTextarea" rows="5" spellcheck="true" name="comments"></textarea>
            </td>
        <tr>
            <td><button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </tr>
    </table>
</form>
</div>
</body>
</html>
