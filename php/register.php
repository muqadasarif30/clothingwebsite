<?php

include 'db.php';

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirm = $_POST['confirm_password'];
$country = $_POST['country'];
$gender = $_POST['gender'];

$interests = "";
if(isset($_POST['interests'])){
    $interests = implode(", ", $_POST['interests']);
}

if($password != $confirm){
    die("Passwords do not match");
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users
(fullname,email,phone,password,country,gender,interests)
VALUES
('$fullname','$email','$phone','$hashedPassword','$country','$gender','$interests')";

if(mysqli_query($conn,$sql)){
    header("Location: ../html/login.html");
}
else{
    echo "Registration Failed";
}

?>