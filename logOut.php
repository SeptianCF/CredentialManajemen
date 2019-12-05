<?php
    session_start();
    if(session_destroy()) {
        header("Location:../CredentialManajemen/index.php");
    };
?>