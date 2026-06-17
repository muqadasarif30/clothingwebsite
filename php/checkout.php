<?php
include("db.php");

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

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
        $message = "Order Placed Successfully!";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}
?>