
<html>
<head>
    <title>Register</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body class="pt-5">
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
                        <li class="nav-item ">
                            <a class=" nav-link js-scroll-trigger text" href="index.php">Login</a>
                        </li>
                </div>
            </nav>
        </div>
    </nav>
        <div class="container mt-5">
            <h2 class="mt-5 text-center">Daftar Developer</h2>
            <div class="row mt-5">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <!-- form handling in process/actionAddBarang -->
                    <form action="proses/registerproses.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Username</label>
                            <div class="col-md-9">
                                <input type="text" autocomplete="off" name="Username" id="username" class="form-control" placeholder="Username" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" autocomplete="off" name="password" id="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-9">
                                <input type="text" name="email" autocomplete="off" id="email" class="form-control" placeholder="example@example.com" required>
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <div class="col-md-4">
                                <!-- Back to home -->
                                <a name="backBtn" id="backBtn" class="btn btn-dark btn-block" href="index.php" role="button">Kembali</a>
                            </div>
                            <div class="col-md-4">
                                <!-- Clear form value using JS. Please check clearForm function -->
                                <button name="clearFormBtn" id="clearFormBtn" class="btn btn-warning btn-block" role="button" onclick="clearForm()">Clear</button>
                            </div>
                            <div class="col-md-4">
                                <!-- Input button to submit form. Please check href attribute -->
                                <input type="submit" name="Register" class="btn btn-success btn-block" value="Register"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <script>
        // clear form input
        function clearForm() {
            $('#username').val('');
            $('#password').val('');
            $('#email').val('');
        }
    </script>
    </body>
</html>