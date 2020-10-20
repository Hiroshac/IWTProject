<?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "onlinemarketstore";

    $fname = $_POST['fname'];
    $lname =$_POST['lname'];
    $nic = $_POST['nic'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $pw=$_POST['pwd'];


    // Create connection
    $conn = new mysqli($servername, $user, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO staff (Staff_ID,User_name,NIC,Email,Phone_number,Password,Type) VALUES ('','$lname $fname','$nic','$email',$number,'$pw','admin')";
    $result = $conn->query($sql);
    echo ("Added");
    $conn->close();
?>