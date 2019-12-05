<?php
include '../connection/connection.php';
session_start();
$error = '';

if(!empty($_POST["username"]) || !empty($_POST["password"])) {
    # Get username and password from user
    $username = $_POST["username"];
    $password = $_POST["password"];
    

    # Write MySql Query
    $query = "SELECT * FROM user WHERE (username='$username' OR email='$username') AND password='$password'";
    # Get the query result
    $result = mysqli_query($con, $query);
    

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $level = $row["level_id"];

        if($level == 1) {
            $_SESSION["username"] = $username;
            $_SESSION["level"] = $level;
            header("Location: ../landingManajer.php");
        } else if ($level == 2) {
            $_SESSION["username"] = $username;
            $_SESSION["level"] = $level;
            header("Location: ../landingDeveloper.php");
        }
    } else {
        // $error = urlencode("Username atau password salah!");
        // header("Location: ../index.php?pesan=$error");
        echo "<script>alert('Username atau password salah!'); window.location = '../loginDeveloper.php';</script>";
    }

    # Close connection to database
    mysqli_close($con);

}
?>