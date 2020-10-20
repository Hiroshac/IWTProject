<?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "onlinemarketstore";

    $email = $_POST['email'];
    //$pwd = $_POST['password'];
    $nic = $_POST['nic'];
    $telno= $_POST['telno'];

    // Create connection
    $conn = new mysqli($servername, $user, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM staff WHERE email='".$email."' and NIC='".$nic."' and phone_number='".$telno."'";
    $result = $conn->query($sql);
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['email']=$email;
        header('Location: ../html/forgot_password2.html');
    }
    else{
        echo("Incorrect Details");
    }
    $conn->close();
?>
