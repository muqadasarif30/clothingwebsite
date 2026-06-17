<?php

include("db.php");

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$address = $_POST['address'];
$payment = $_POST['payment'];

$sql = "INSERT INTO orders
(fullname,email,phone,city,address,payment_method)
VALUES
('$fullname','$email','$phone','$city','$address','$payment')";

if(mysqli_query($conn,$sql)){
    echo "Order Placed Successfully!";
}
else{
    echo "Error: " . mysqli_error($conn);
}

?>