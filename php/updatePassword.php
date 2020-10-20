<?php
    session_start();
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "onlinemarketstore";

    
    $email = $_SESSION['email'];
    $pw=$_POST['password'];


    // Create connection
    $conn = new mysqli($servername, $user, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE staff SET password='".$pw."' WHERE email='".$email."'";
    $result = $conn->query($sql);
    $conn->close();
?>


