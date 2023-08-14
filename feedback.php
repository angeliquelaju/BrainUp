<?php
include "connection2.php";
include "header_learner.php";

if (isset($_POST["submit"])) {
    $email  = $_POST["email"] ;
    $comments  = $_POST["comments"] ;
    $sql = "INSERT INTO feedback2 (email, comments)
            VALUES ('$email', '$comments')";

    if ($conn->query($sql) === TRUE) {
        header("location: feedback.php");
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<html>
  <body>
    <head>
      <style>
        h2{
          margin-left: 1.5rem;
        }
        h3{
          margin-left: 1.5rem;
          }
        tr{
          border: none;
          }
        p{
          font-size: 1.3rem;
          margin-bottom: -1.1rem;
          margin-top: -0.8rem;
          }
        small#emailHelp{
          font-size: 1rem;
          }
        p#button{
          margin-left: -1.9rem;
          margin-bottom: 0.1rem;
          }
        span{
          color: red;
        }
      </style>
    <div class = "container">
      <h2>Feedback</h2>
      <form action="signup.php" method= "post">
        <table class= 'table hover'>
          <tr>
            <td><p>Email address<span>*</span></p>
            <br><input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                <small id="emailHelp" class="form-text text-muted">We'll contact you for further information on how we can improve this site.</small>
            </td>
          <tr>
            <td><p>Comments and Feedback<span>*</span></p>
            <br><textarea class="form-control" id="exampleTextarea" rows="5" spellcheck="true" placeholder="Enter comments" name="comments" required></textarea>
            <br><p id="button"><button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </td>
          </tr>
          <tr>
            <td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>
