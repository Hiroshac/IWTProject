<?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "onlinemarketstore";

    $fname = $_POST['fname'];
    $lname =$_POST['lname'];
    $nic = $_POST['nic'];
    $pw=$_POST['pwd'];


    // Create connection
    $conn = new mysqli($servername, $user, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO admins (id,fname,lname, nic,password) values('','$fname','$lname','$nic','$pw')";
    $result = $conn->query($sql);
    echo ("Added");
    $conn->close();
?>