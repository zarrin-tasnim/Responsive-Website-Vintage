<?php

include('./connect.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- FOntawsome link -->
    <script src="https://kit.fontawesome.com/c4830dafcc.js" crossorigin="anonymous"></script>

    <!--Custom CSS -->
    <link rel="stylesheet" href="./styles/style.css">


</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand ps-5" href="#">Vintage</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ps-2 pe-2">
                            <a class="nav-link active" aria-current="page" href="index.php" target="_blank">Home</a>
                        </li>
                        <li class="nav-item pe-2">
                            <a class="nav-link" href="feature.php" target="_blank">Features</a>
                        </li>
                        <li class="nav-item pe-2">
                            <a class="nav-link" href="about.php
                            " target="_blank">About</a>
                        </li>
                        <li class="nav-item pe-2">
                            <a class="nav-link" href="contact.php" target="_blank">Contact</a>
                        </li>

                    </ul>
                    <form class="d-flex p-2" role="search">
                        <input class="form-control me-2  pe-4" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-danger ps-4" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item ps-3 pe-4">
                            <a class="nav-link active" aria-current="page" href="login.php" target="_blank">Login </a>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link" href="register.php" target="_blank">Register</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <!-- User Contact Information -->
        <div class="container">
            <div class="bg-light">
                <h2 class="text-center p-3">Manage Details</h2>
            </div>
            <div class="row">
                <div class="col-md-12 bg-secondary p-1">
                    <p class="text-light text-center fs-3">Admin</p>
                    <div class="button text-center">
                        <button class="mx-2 px-2">
                            <a href="admin_page.php?display" class="nav-link text-light bg-info  my-1 px-2" target="_blank">Display Contact Info</a>
                        </button>

                        <button class="mx-2 px-2">
                            <a href="insert_products.php" class="nav-link text-light bg-info my-1 px-2">Insert Products</a>
                        </button>


                        <button class="mx-2 px-2"><a href="index.php" class="nav-link text-light bg-info my-1">LogOut</a></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- display php page -->
        <div class="container my-5">
            <?php
            if (isset($_GET['display'])) {
                include('display.php');
            }
            ?>
        </div>




    </main>
    <!-- footer starts here -->
    <footer class="position-absolute bottom-0 container-fluid">
        <p class="text-center text-white p-4 bg-dark">@Vintage.com</p>
    </footer>
    <!-- footer ends here -->


    <!-- JS & Popper Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>