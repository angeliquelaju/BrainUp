<?php
include "connection2.php";
include "header_learner.php";
$cat = $_GET["cat"];
$sql = "SELECT * FROM Questions WHERE qgroup='$cat'";
$result = $conn->query($sql);
$numbers = range(1, 30);
$seqNum= array(0,0,0,0,0,0);
shuffle($numbers);
for ($i=0; $i<6; $i++){
    $seqNum[$i] = $numbers[$i];
}
if ($result->num_rows > 0) {
    echo "<h1>Questions</h1>";
    echo "<form action='learner_check.php' method='post'>";
  echo "<table class= 'table table-hover' width = '100%'>";
  $i = 1;
  $no = 1;
  while($row = $result->fetch_assoc()) {
      $found = false;
      for ($j=0; $j<6; $j++){
        if ($i == $seqNum[$j]){
            $found = true;
            break;
        }
      }
      if ($found) {
          $question = $row['question'];
          $optionA = $row['optionA'];
          $optionB = $row['optionB'];
          $optionC = $row['optionC'];
          $optionD = $row['optionD'];
          $answer  = $row['answer'] ;
            echo "
             <h3><br>$no. $question</h3>
             <div class='row'>
              <div class='col-md-6'>
              <label class='mycontainer'><h3>$optionA</h3>
              <input type='radio' name='q$i' value='A'>
              <span class='checkmark'></span>
              </label>
              </div><br>
              <div class='col-md-6'>
              <label class='mycontainer'><h3>$optionB</h3>
              <input type='radio' name='q$i' value='B'>
              <span class='checkmark'></span>
              </label>
              </div><br>
             </div>
             <div class='row'>
              <div class='col-md-6'>
              <label class='mycontainer'><h3>$optionC</h3>
              <input type='radio' name='q$i' value='C'>
              <span class='checkmark'></span>
              </label>
              </div><br>
              <div class='col-md-6'>
              <label class='mycontainer'><h3>$optionD</h3>
              <input type='radio' name='q$i' value='D'>
              <span class='checkmark'></span>
              </label>
              </div><br>
              <input type='hidden' name='key$i' value='$answer'>
              <input type='hidden' name='no$i' value='$i'>
              </div>";
              $no++;
      }
      $i++;
  }
echo "</table>";
echo "<input type='hidden' name='username' value='user1'>";
echo "<br><input type='submit' class = 'btn btn-primary btn-lg' value='Kirim Jawaban'></form><br>";
echo "</form>";
}
$conn->close();
?>
