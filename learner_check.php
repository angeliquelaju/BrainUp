<?php
include "connection2.php";
include "header_learner.php";

$correct = 0;
$n = 1;
for ($i=1; $i<=30; $i++) {
    $q = 'q' . $i;
    $key = 'key' . $i;
    $no = 'no' . $i;
    if (isset($_POST["$no"])) {
        $no = $_POST["$no"];
        if ($i == intval($no)) {
            if ($_POST["$q"] == $_POST["$key"]){
                $correct++;
            }
        }
    }
}
$score = round(($correct/6)*100);
$message = "";
$username = "user1";
?>

<html>
  <head>
    <style>
      h3#usi{
        margin-left: -0.1rem;
        text-align: center;
      }
      h1.display-1{
        text-align: center;
      }
      h5{
        text-align: center;
      }
    </style>
  </head>
  <div class="container">
   <div class="jumbotron">
     <h3 id="usi">Your Score is</h3>
     <h1 class="display-1"><?php echo $score. "%"; ?></h1>
     <?php
       echo $message;
       if($score>=65){
           echo "<h5>Congrats!</h5>";
       } else {
           echo "<h5>Good effort but please try again.</h5>";
       }
     ?>
    </div>
   </div>
  <p><br>
</html>

<?
$sql = "SELECT * FROM learner WHERE username = '$username' ";
$result = $conn->query($sql);

  $n = 1;
  for ($i=1; $i<=30; $i++) {
      $q = 'q' . $i;
      $key = 'key' . $i;
      $no = 'no' . $i;
      if (isset($_POST["$no"])) {
          $no = $_POST["$no"];
          if ($i == intval($no)) {
              $question = 'question' . $i;
              $question = $_POST["$question"];
              $answer_desc = 'answer_desc' . $i;
              $answer_desc = $_POST["$answer_desc"];
              echo "<h3>" . $n . ". " . $question . "</h3>";
              $n++;
              if ($_POST["$q"] == $_POST["$key"]){
                  echo "<h4>Your answer is <b>correct</b>. </h4><br>";
              } else {
                  echo "<h4>Your answer is <b>incorrect</b>, </h4>";
                  echo "<h4>The correct answer is: <b>" . $answer_desc . "</b></h4><br>";
              }
          }
      }
  }
  ?>
<html>
  <head>
    <style>
      h5{
        text-transform: none;
      }
      h3, h4{
        text-transform: none;
        margin-left: 5rem;
      }
      p#backtohp{
        margin-left: 3rem;
      }
    </style>
  </head>
  <body>
    <a href="dashboard.php">
        <p id="backtohp"><button class="btn btn-primary">Back to the Game Page</button></a>
    <br><br>
