<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, md5($_POST['password']));
    $cpassword = mysqli_real_escape_string($con, md5($_POST['cpassword']));

    $user_type = $_POST['user_type'];

    $select_users = mysqli_query($con, "SELECT * from `register_user_info` WHERE email = '$email' AND password = '$password' ") or die('query failed');

    if (mysqli_num_rows($select_users) > 0) {
        $message[] = 'user already exist!';
    } else {
        if ($password != $cpassword) {
            $message[] = 'password not matched!';
        } else {
            mysqli_query($con, "INSERT INTO `register_user_info`(name,email,mobile,password,user_type) VALUES('$name','$email','$mobile','$cpassword','$user_type')") or die('query failed');
            $message[] = 'Registered Successfully!';
            header('location: login.php');
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- FOntawsome link -->
    <script src="https://kit.fontawesome.com/c4830dafcc.js" crossorigin="anonymous"></script>
    <!--Custom CSS -->
    <link rel="stylesheet" href="./styles/style.css">

</head>

<body>

    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '
                <div class="message bg-danger text-white p-4 m-auto d-flex justify-content-between fs-4">
                    <span>' . $message . '</span>
                    <i class="fas fa-times text-danger" onclick="this.parentElement.remove();"></i>
                </div>';
        }
    }
    ?>
    <section class="Registration-area py-5 my-5 w-50 m-auto">
        <!-- section title -->
        <div class="py-5">
            <h1 class="text-center display-5 p-4 bg-dark text-white">Registration Form</h1>
        </div>
        <div class="container w-50 m-auto">
            <form action="" method="post">
                <div class="form-group">
                    <div class="mb-3">
                        <label for="" class="form-label">User name</label>
                        <input type="text" class="form-control" name="name" id="" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelp" autocomplete="off" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Mobile</label>
                        <input type="number" class="form-control" name="mobile" id="" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" id="" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputState" class="form-label">Select</label>
                        <select name="user_type" id="" multiple class="form-control">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" value="register now" class="btn btn-primary">Submit</button>
                    <p class="mt-3">already have an account? <a href="login.php" target="_blank">Login now</a></p>
                </div>
            </form>

        </div>
    </section>



    <!-- JS & Popper Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>