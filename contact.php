<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    $sql = "insert into `user_info` (name,email,mobile,message) values('$name', '$email','$mobile','$message')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data inserted succesfully";
        header('location: display.php');
    } else {
        die(mysqli_error($con));
    }
}

?>

<!-- main document -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact</title>

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/c4830dafcc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <div class="container text-center">
            <h1 class="py-4 bg-dark text-light rounded"><i class="fa-solid fa-swatchbook"></i> User Information </h1>
        </div>

        <div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50">
                <div class="py-2">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="form-group">
                        <label for="">Mobile Number</label>
                        <input type="number" class="form-control" placeholder="Enter your mobile" name="mobile" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-danger" name="submit">Submit</button>
            </form>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>