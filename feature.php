<?php
include 'connect.php';
include('./common_functions_file/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feature</title>
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
                            <a class="nav-link" href="about.php" target="_blank">About</a>
                        </li>
                        <li class="nav-item pe-2">
                            <a class="nav-link" href="contact.php" target="_blank">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex p-2" role="search" action="search_product.php" method="get">
                        <input class="form-control me-2  pe-4" type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <!-- <button class="btn btn-outline-danger ps-2" type="submit">Search</button> -->
                        <input type="submit" value="Search" class="btn btn-outline-danger ps-2" name="search_data_product">
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

    <main>
        <!-- products -->
        <div class="container pt-5">
            <div class="row">
                <!-- Fetching Products -->
                <?php

                cart();

                $select_queryy = "SELECT * from `products`";
                $result_query = mysqli_query($con, $select_queryy);

                while ($row = mysqli_fetch_assoc($result_query)) {
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_keyword = $row['product_keyword'];
                    $product_image1 = $row['product_image1'];
                    $product_price = $row['product_price'];

                    echo "<div class='col-lg-4 col-md-4 col-12'>
                    <div class='card'>
                        <img src='./products_images/$product_image1' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <h5 class='card-title'>$product_price</h5>
                            <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href='feature.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
                        </div>
                    </div>
                </div>";
                }

                // $ip = getIPAddress();
                // echo 'User Real IP Address - ' . $ip;

                ?>



            </div>
        </div>
    </main>
    <!-- footer starts here -->
    <footer>
        <p class="p-3 bg-dark text-white text-center">@vintage.com</p>
    </footer>
    <!-- footer ends here -->

    <!-- JS & Popper Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>