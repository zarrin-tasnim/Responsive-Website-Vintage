<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic WEbsite</title>
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- FOntawsome link -->
    <script src="https://kit.fontawesome.com/c4830dafcc.js" crossorigin="anonymous"></script>

    <!--Custom CSS -->
    <link rel="stylesheet" href="./Assets/styles/style.css">

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
                        <li class="nav-item ps-3 pe-4">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link" href="service.php">Services</a>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link" href="about.php
                            ">About</a>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex p-3" role="search">
                        <input class="form-control me-2  pe-4" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-danger ps-4" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- Carousal -->
        <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="./Assets/images/book-cvr-1.jpg" class="d-block w-100" alt="book-covor-1">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="./Assets/images/book-cvr-2 .jpg" class="d-block w-100" alt="book-covor-2">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="./Assets/images/book-cvr-3.jpg" class="d-block w-100" alt="book-covor-3">
                </div>
                <div class="carousel-item">
                    <img src="./Assets/images/book-cvr-4.jpg" class="d-block w-100" alt="book-covor-4">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Carousel end here -->
        <!-- About us start here -->
        <section class="my-5 about-us">
            <!-- section title -->
            <div class="py-5">
                <h1 class="text-center display-4">About Us</h1>
            </div>
            <div class="container-fluid">
                <div class="row gx-2">
                    <div class="col-lg-5 col-md-6 col-12">
                        <img src="./Assets/images/about-us-1.jpg" class="img-fluid  about-image" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <h2 class="display-5">About Vintage</h2>
                        <p class="py-3 fs-4"> Vintage will help you get your book in front of more Amazon shoppers
                            so you can spend less time marketing and more time writing.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem magnam deleniti nobis voluptatem aut sed distinctio quis odit id aliquid!</p>
                        <a href="about.php" class="btn btn-success">Read more...</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- About us end here -->
        <!-- Our services start here -->
        <section class="our-services py-5 my-5">
            <!-- section title -->
            <div class="py-5">
                <h1 class="text-center display-4">Our Services</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card h-100">
                            <img src="./Assets/images/services/service-1.jpg" class="card-img-top img-fluid" alt="...">
                            <div class="card-body pt-4">
                                <h5 class="card-title">Browse Favourite Books</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card h-100">
                            <img src="./Assets/images/services/service-3.jpg" class="card-img-top img-fluid" alt="...">
                            <div class="card-body pt-5 mt-2">
                                <h5 class="card-title">Buy Books</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card h-100">
                            <img class="img-fluid" src="./Assets/images/services/service-2.png" class="card-img-top" alt="...">
                            <div class="card-body pt-3">
                                <h5 class="card-title">Delivery anywhere</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our services end here -->
        <!-- Gallary Start here -->
        <section class="gallary-area py-5 my-5">
            <!-- section title -->
            <div class="py-5">
                <h1 class="text-center display-4 pb-4">Gallary</h1>
            </div>
            <div class="container mr-auto ml-auto">
                <div class="row g-2">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="gallary-image">
                            <img src="./Assets/images/Gallary/book-gallary-1.jpg" class="img-fluid pb-3" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="gallary-image">
                            <img src="./Assets/images/Gallary/gallary-2.jpg" class="img-fluid pb-3" style="width: 80%; height:300px;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="gallary-image">
                            <img src="./Assets/images/Gallary/gallary-3.jpg" style="width: 80%; height:300px;" class="img-fluid pb-3" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="gallary-image">
                            <img src="./Assets/images/Gallary/gallary-4.jpg" style="width: 80%; height:300px;" class="img-fluid pb-3" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="gallary-image">
                            <img src="./Assets/images/Gallary/gallary-5.jpg" style="width: 80%; height:300px;" class="img-fluid pb-3" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="gallary-image">
                            <img src="./Assets/images/Gallary/gallary-6.jpg" style="width: 80%; height:300px;" class="img-fluid pb-3" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="gallary-image">
                            <img src="./Assets/images/Gallary/gallary-7.jpg" class="img-fluid pb-3" style="width: 80%; height:300px;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="gallary-image">
                            <img src="./Assets/images/Gallary/gallry-8.jpg" class="img-fluid pb-3" style="width: 80%; height:300px;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="gallary-image">
                            <img src="./Assets/images/Gallary/g-9.jpg" class="h-25 img-fluid pb-3" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallary end here -->
        <!-- Contact start here -->
        <section class="gallary-area py-5 my-5">
            <!-- section title -->
            <div class="py-5">
                <h1 class="text-center display-4 pb-4">Contact Us</h1>
            </div>
            <div class="container w-50 m-auto">
                <form action="user-Info.php" method="post">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="" class="form-label">User name</label>
                            <input type="text" class="form-control" name="user" id="" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelp" autocomplete="off">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Mobile</label>
                            <input type="number" class="form-control" name="mobile" id="" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </section>
        <!-- Contact end here -->
        <!-- footer starts here -->
        <footer>
            <p class="p-3 bg-dark text-white text-center">@vintage.com</p>
        </footer>
        <!-- footer ends here -->
    </main>

    <!-- JS & Popper Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>