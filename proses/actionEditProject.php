<?php
// Include DB connection file
include '../connection/connection.php';

// Get the form update value
$idProject = $_POST["idProject"];
$namaProject = $_POST["namaProject"];
$urlProject= $_POST["urlProject"];
$usernameProject = $_POST["usernameProject"];
$passwordProject = $_POST["passwordProject"];
$status = $_POST["status"];


$query = "update project set nama_project ='$namaProject', url_project='$urlProject', username='$usernameProject', password='$passwordProject', status='$status' WHERE project_id = '$idProject'";
            mysqli_query($con, $query);
            header("Location:../tampilProject.php");

mysqli_close($con); 