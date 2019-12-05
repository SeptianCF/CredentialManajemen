<?php
/***** Include db connection file *****/

include 'connection/connection.php';

?>
<html>
    <!-- Include header.php that contain header informations -->
    <head>
        <title>Daftar Project</title>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="css/index.css">
        </head>
    <body>
    <nav class="navbar navbar-expand-sm fixed-top pl-5 navigasi shadow"style="opacity:0.75">
            <div class="container-fluid">
                <a class="navbar-brand text-uppercase body"  href="index.php"><h3>Criedential.id</h3></a>
                    <nav class="navbar navbar-expand-sm header">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="smooth-scroll navbar-nav ml-auto">
                            <li class="nav-item border-right">
                                <a class=" nav-link js-scroll-trigger text" href="index.php">Dashboard</a>
                            </li>
                            <li class="nav-item ">
                                <a class=" nav-link js-scroll-trigger text" href="logOut.php">Logout</a>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </nav>

        
        <div class="container" style="margin-top: 100px;">
            <h2 class="mt-3 text-center">List Project</h2>
            <?php
            /***** Get get error message from actionAddBarang.php ******/
            $message = '';
            if(isset($_GET["error"])) {
                $message = $_GET["error"];
                echo "
                <p style='color:red; font-style:italic'>$message</p>
                ";
            }
            ?>
            <a href="tambahProject.php" class="btn btn-success mt-3">Add New Project</a>
            <!--div class="row"-->
                <table id="beasiswa" class="table table-stripped text-center mt-3" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Project</th>
                            <th>Url Project</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    // Query command
                    $query = "SELECT * FROM project where flag >=1";
                    // Do query
                    // $con is db connection
                    // $query is query command
                    $result = mysqli_query($con, $query);

                    // Check row number, if we have data on db ( > 0), show the result data
                    if (mysqli_num_rows($result) > 0){
                        // Create row index
                        $index = 1;
                        // Do loop through data
                        while($row = mysqli_fetch_assoc($result)){
                            // Print result to HTML structure
                            // $row is the iterator
                            // nama_barang, harga_barang, and jml_barang is array key,
                            // They are the coloums names in table tb_barang
                            $project_id= $row["project_id"];
                                echo "
                                <tr>
                                    <td>" . $index++ . "</td>
                                    <td>" .$row["nama_project"]. "</td>
                                    <td>" .$row["url_project"]. "</td>
                                    <td>" .$row["username"]. "</td>
                                    <td>" .$row["password"]. "</td>
                                    <td>" .$row["status"]. "</td>
                                    <td>
                                        <a href='editProject.php?id=$project_id' class='btn btn-warning'>Update</a>
                                        <a href='proses/actionDeleteProject.php?id=$project_id' class='btn btn-danger'>Delete</a>
                                     </td>
                                </tr>
                                ";
                        }
                    }
                    // close mysql connection
                    mysqli_close($con); 
                    ?>
                    </tbody>
                </table>
            <!-- </div> -->
        </div>
        <script>
            $(document).ready(function() {
            $('#project').DataTable({
               "lengthMenu" : [5, 10, 15, 20],
               "pageLength" : 5
            });
            } 
        );
        </script>
    <body>
</html>