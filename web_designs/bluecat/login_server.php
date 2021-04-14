<?php
session_start();

include 'base/connect.php';

// $email = $_POST['email'];
// $password = $_POST['password'];


$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);


// $rememberme = $_POST['rememberme'];




if ($email == '' || $password == '') {
    $_SESSION['msg'] = "please fill all the inputs...";
    header('location:login.php');
} else {
    $matching = $con->query("SELECT * FROM `customer` WHERE `customer_email` = '$email' AND `customer_password` = '$password' ");


    if ($matching->num_rows > 0) {
        $_SESSION['user_email'] = $email;
        $_SESSION['logged_in'] = true;

        // if ($rememberme == 'on') {
        //     setcookie($email, $password, time() + 120, "/");
        // }

        while ($row = $matching->fetch_assoc()) {

            if ($row['admin'] == 1) {
                header('location:admin.php');
            } else {

                if (isset($_SESSION['quantity'])) {
                    header('location:place_order.php');
                } else {
                    header('location:index.php');
                }
            }

            break;
        }
    } else {
        $_SESSION['msg'] = 'wrong input, please try again...';
        header('location:login.php');
    }
}
