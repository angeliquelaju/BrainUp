<?php
include "connection2.php";
include "header2.php";

    $id = $_GET["id"];
    $sql = "DELETE FROM admin WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("location: admin_list2.php");
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    } 
    $conn->close();
?>

