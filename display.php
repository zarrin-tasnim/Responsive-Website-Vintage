<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/c4830dafcc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <!-- to display the main operations -->
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fa-solid fa-swatchbook"></i> User Information</h1>
    </div>
    <div class="container">
        <!-- <button class="btn btn-success my-5"><a href="index.php" target="_blank" class="text-light">Add user</a></button> -->

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Serial No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Messages</th>
                    <!-- CRUD OPERATIONS -->
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "Select * from `user_info`";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $ID = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $message = $row['message'];

                        echo '<tr>
                    <th scope="row"> ' . $ID . ' </th>
                    <td>' . $name . ' </td>
                    <td>' . $email . '</td>
                    <td>' . $mobile . '</td>
                    <td>' . $message . '</td>
                    <td>
                        <button class="btn btn-primary"><a href="update.php?updateid= ' . $ID . '"" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="delete.php?deleteid= ' . $ID . '" class="text-light">Delete</a></button>
                    </td>
                </tr>';
                    }
                }

                ?>


                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr> -->
            </tbody>
        </table>
    </div>
</body>

</html>