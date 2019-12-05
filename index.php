<?php
    session_start();
    
    if(isset($_SESSION['username'])and isset($_SESSION['level'])){
        if($_SESSION['level'] == '1'){
            header("location: landingManajer.php");
        } else {
            header("location: landingDeveloper.php");
        }
    }

    if(isset($_GET['pesan'])) {
        $mess = "<p> {$_GET['pesan']}</p>";
    } else {
        $mess = "";
    }
?>



<html>
    <head>
        <title>Credential.id</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/signin.css">
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body class="text-center background">
    <nav class="navbar navbar-expand-sm fixed-top pl-5 navigasi" style="opacity:0.75">
        <div class="container-fluid">
            <a class="navbar-brand text-uppercase body"  href="index.php"><h3>Credential.id</h3></a>
            <nav class="navbar navbar-expand-sm header">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="smooth-scroll navbar-nav ml-auto">
                        <li class="nav-item border-right">
                            <a class=" nav-link js-scroll-trigger text" href="index.php">Home</a>
                        </li>
                        <!-- <li class="nav-item ">
                            <a class=" nav-link js-scroll-trigger text" href="loginUser.php">Login</a>
                        </li> -->
                        <li class="nav-item ">
                            <a class=" nav-link js-scroll-trigger text btn btn-outline-dark " href="formregister.php">Daftar Sekarang!</a>
                        </li>
                </div>
            </nav>
        </div>
    </nav>
        <form class="form-signin" action="proses/loginProses.php" method="POST">
            <img src="foto/logo.png" width="75%" alt="logo" class="mb-3"/>
            <h2>Sign in</h2>
            <input type="text" name="username" autocomplete="off" class="form-control" placeholder="username">
            <input type="password" name="password" autocomplete="off" class="form-control" placeholder="password">
            <button class="btn btn-lg btn-primary btn-block mt-4 mb-4" type="submit" name="submit">Login</button>
            <!-- <p><?php //echo $mess; ?></p> -->
            <p>Belum memiliki akun ? Silahkan <a href="formregister.php">register</a></p>
        </form>
    </body>
</html>