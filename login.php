<?php

include 'connect.php';
session_start();

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, md5($_POST['password']));

    $select_users = mysqli_query($con, "SELECT * from `register_user_info` WHERE email = '$email' AND password = '$password' ") or die('query failed');

    if (mysqli_num_rows($select_users) > 0) {
        $row = mysqli_fetch_assoc($select_users);

        if ($row['user_type'] == 'admin') {

            $_SESSION['admin_name'] = $row['name'];
            $_SESSION['admin_email'] = $row['email'];
            $_SESSION['admin_id'] = $row['id'];

            header('location: admin_page.php');
        } elseif ($row['user_type'] == 'user') {

            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_id'] = $row['id'];

            header('location: index.php');
        }
    } else {
        $message[] = 'Incorrect email or password!';
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
    <section class="login-area py-5 my-4 w-50 m-auto">
        <!-- section title -->
        <div class="py-5">
            <h1 class="text-center display-5 p-4 bg-success text-white">Login</h1>
        </div>
        <div class="container w-50 m-auto">
            <form action="" method="post" class="login">
                <div class="form-group">
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelp" autocomplete="off" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="" required>
                    </div>
                    <button type="submit" name="submit" value="login now" class="btn btn-primary">Submit</button>
                    <p class="mt-3">don't have an account? <a href="register.php" target="_blank">Register now</a></p>
                </div>
            </form>

        </div>
    </section>



    <!-- JS & Popper Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>