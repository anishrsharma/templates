<?php


session_start();






if (isset($_SESSION['logged_in'])) {
    echo 'payment_gateway.php';
    // header('location:payment_gateway.php');
} else {
    echo 'login.php';
    // header('location:login.php');
}
