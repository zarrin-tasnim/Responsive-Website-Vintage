<?php


// To connect with user_info_vintage database
$con = new mysqli('localhost', 'root', '', 'user_info_vintage');

if (!$con) {
    die(mysqli_error($con));
}
