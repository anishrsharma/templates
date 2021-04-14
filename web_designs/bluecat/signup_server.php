<?php
session_start();

include 'base/connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

$admin = 0;

if ($name == '' || $email == '' || $pass1 == '' || $pass2 == '') {

    $_SESSION['msg'] = "please fill all the inputs...";
    header('location:signup.php');
} else {
    if ($pass1 == $pass2) {

        $matched_email = $con->query("SELECT customer_email FROM customer where customer_email = '$email' ");

        if ($matched_email->num_rows > 0) {
            $_SESSION['msg'] = 'email already exists...';
            header('location:signup.php');
        } else {
            $result2 = "INSERT INTO `customer`
            (`customer_name`, `customer_email`, `customer_password`, `admin`) VALUES ('$name','$email','$pass1', '$admin');";

            if ($con->query($result2) === true) {
                $_SESSION['msg'] = "account created successfuly, please login to continue!";
                header('location:login.php');
            } else {

                $_SESSION['msg'] = "something's wrong, please try again...";
                // header('location:signup.php');
                echo $result2;
            }
        }
    } else {

        $_SESSION['msg'] = 'password not matched...';
        header('location:signup.php');
    }
}
