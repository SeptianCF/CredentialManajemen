<?php
// Include DB connection file
include '../connection/connection.php';

//get the form value
$namaProject = $_POST["namaProject"];
$urlProject= $_POST["urlProject"];
$usernameProject = $_POST["usernameProject"];
$passwordProject = $_POST["passwordProject"];
$status = $_POST["status"];

if ($status == "Public"){
$query = "INSERT INTO `project`(`nama_project`,`url_project`,`username`, `password`,`status`,`flag`) VALUES ('$namaProject','$urlProject','$usernameProject','$passwordProject','$status','1')";

} else { 
    $query = "INSERT INTO `project`(`nama_project`,`url_project`,`username`, `password`,`status`,`flag`) VALUES ('$namaProject','$urlProject','$usernameProject','$passwordProject','$status','0')";
    
}
mysqli_query($con, $query);
header("Location: ../tampilProject.php");



    ?>