<?php

include '../connection/connection.php';

if (isset($_POST['Register'])) {
    $username = $_POST['Username'];
    $password = ($_POST['password']);
    $email = $_POST['email'];
    
    


    $query = "INSERT INTO `user`(`username`,`password`,`email`, `level_id`) VALUES ('$username','$password','$email','2')";
                    mysqli_query($con, $query);
                    header("Location: ../index.php");


    }
mysqli_close($con);
?>