<?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "onlinemarketstore";

    $email = $_POST['email'];
    $pwd=$_POST['password'];

    // Create connection
    $conn = new mysqli($servername, $user, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM staff WHERE email='".$email."'";
    $result = $conn->query($sql);
    while($row = mysqli_fetch_array($result)) {
        if($row['Password']==$pwd){
            if($row['Type']=='admin'){
                session_start();
                $_SESSION['username']=$row['User_name'];
                header('Location: ../html/home.php');
            }
            if($row['Type']=='Seller'){
                header('Location: ../html/seller.html');
            }
        }
        else{
            echo('Incorrect Credentials');
        }
    }
    $conn->close();
?>


