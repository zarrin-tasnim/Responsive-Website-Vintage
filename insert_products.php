<?php

include 'connect.php';
if (isset($_POST['insert_product'])) {

    $product_title = $_POST['product_title'];
    $product_keyword = $_POST['product_keyword'];
    $product_price = $_POST['product_price'];

    // Accessing product image
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];

    // Accessing product temporary image location
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];


    // checking empty condition
    if ($product_title == '' or $product_keyword == '' or $product_price == '' or $product_image1 == '' or $product_image2 == '') {
        echo "<script>alert('Please fill all fields')</script>";
        exit();
    } else {
        move_uploaded_file($temp_image1, "./products_images/$product_image1");
        move_uploaded_file($temp_image2, "./products_images/$product_image2");
    }

    // insert query
    $insert_products = "insert into `products` (product_title,product_keyword,product_image1,product_image2,product_price) values('$product_title', '$product_keyword','$product_image1','$product_image2','$product_price')";

    $results = mysqli_query($con, $insert_products);
    if ($results) {
        echo "<script>
        alert('Successfully Inserted!')
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
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
                        <li class="nav-item pe-2">
                            <a class="nav-link" href="contact.php" target="_blank">Blogs</a>
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
        <div class="container">
            <!-- User Contact Information -->
            <div class="container">
                <div class="bg-light">
                    <h2 class="text-center p-3">Manage Details</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 bg-secondary p-1">
                        <p class="text-light text-center">Admin Name</p>
                        <div class="button text-center">
                            <button class="mx-2 px-2">
                                <a href="admin_page.php?display" class="nav-link text-light bg-info  my-1 px-2" target="_blank">Display Contact Info</a>
                            </button>
                            <button class="mx-2 px-2">
                                <a href="" class="nav-link text-light bg-info my-1 px-2" target="_blank">Insert Products</a>
                            </button>
                            <button class="mx-2 px-2">
                                <a href="" class="nav-link text-light bg-info my-1 px-2" target="_blank">View Product</a>
                            </button>
                            <button class="mx-2 px-2">
                                <a href="" class="nav-link text-light bg-info my-1 px-2" target="_blank">All orders</a>
                            </button>
                            <button class="mx-2 px-2">
                                <a href="index.php" class="nav-link text-light bg-info my-1">LogOut</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container mt-3">
                <h1 class="text-center">Insert Products</h1>
                <!-- form -->
                <form action="" method="post" enctype="multipart/form-data" class="w-50 m-auto pt-3">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="product_title" class="form-label">Product title</label>
                            <input type="text" class="form-control" name="product_title" id="product_title" autocomplete="off" placeholder="Enter product title" required>
                        </div>
                        <div class="mb-3">
                            <label for="product_keyword" class="form-label">Product keywords</label>
                            <input type="text" class="form-control" name="product_keyword" id="product_keyword" autocomplete="off" placeholder="Enter product keyword" required>
                        </div>
                        <div class="mb-3">
                            <label for="product_image1" class="form-label">Product image 1</label>
                            <input type="file" class="form-control" name="product_image1" id="product_image1" autocomplete="off" placeholder="Enter product image1" required>
                        </div>
                        <div class="mb-3">
                            <label for="product_image2" class="form-label">Product image 2</label>
                            <input type="file" class="form-control" name="product_image2" id="product_image2" autocomplete="off" placeholder="Enter product image2" required>
                        </div>
                        <div class="mb-3">
                            <label for="product_price" class="form-label">Product price</label>
                            <input type="text" class="form-control" name="product_price" id="product_price" autocomplete="off" placeholder="Enter product price" required>
                        </div>
                        <button type="submit" name="insert_product" value="Insert Products" class="btn btn-primary">Insert Product</button>


                    </div>
                </form>
            </div>

        </div>
    </main>



    <!-- JS & Popper Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>