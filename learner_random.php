
<?php
// Creating an array containing a range of elements
$numbers = range(1, 30);

// Randomize the order of array items
shuffle($numbers);
for ($i=0; $i<6; $i++){
   echo $numbers[$i] . "<br>";
}
?>
