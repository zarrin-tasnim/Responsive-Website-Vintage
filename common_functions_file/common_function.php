<?php
include 'connect.php';



//seraching_products
function serach_product()
{
    global $con;

    if (isset($_GET['search_data_product'])) {
        $search_data_value = $_GET['search_data'];
        $search_query = "Select * from `products` where product_keyword like '%$search_data_value%'";
        $result_query = mysqli_query($con, $search_query);

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
    }
}

//ip address of client
function getIPAddress()
{
    //whether ip is from the share internet  
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from the remote address  
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
// $ip = getIPAddress();
// echo 'User Real IP Address - ' . $ip;


//Cart_functions
function cart()
{
    if (isset($_GET['add_to_cart'])) {
        global $con;
        $ip = getIPAddress();
        $get_product_id = $_GET['add_to_cart'];
        $select_queryy = "SELECT * from `cart_details` where ip_address='$ip' and product_id=$get_product_id";
        $result_query = mysqli_query($con, $select_queryy);
        $number_of_rows = mysqli_num_rows($result_query);
        if ($number_of_rows > 0) {
            echo "<script>alert('This item is already present inside cart!!!')</script>";
            echo "<script>window.open('feature.php','_self')</script>";
        } else {
            $insert_query = "insert into `cart_details` (product_id,ip_address) values($get_product_id,'$ip')";
            $result_query = mysqli_query($con, $insert_query);
            echo "<script>alert('<h3>This item is now present inside cart!!!<h3>')</script>";
            echo "<script>window.open('feature.php','_self')</script>";
        }
    }
}
