<?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "onlinemarketstore";

    $id=$_POST['id'];

    // Create connection
    $conn = new mysqli($servername, $user, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM Staff WHERE staff_id='".$id."'";
    $result = $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
    $conn->close();
?>


