<?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "onlinemarketstore";

    $email = $_POST['email'];
    $pwd=$_POST['password'];

    //$pass = crypt($passwoord, '$2a$07$YourSaltIsA22ChrString$');

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
                header('Location: ../html/adminpanel.html');
                session_start();
                $_SESSION['email']=$row['Email'];
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


    // session_start();
            // $_SESSION['userrr']=$row['Username'];
            // $_SESSION['email']=$row['Email'];
?>


