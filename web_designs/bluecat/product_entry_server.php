<?php

$product_name = $_POST['product_name'];
$old_price = $_POST['old_price'];
$new_price = $_POST['new_price'];
// $special_offer = $_POST['special_offer'];


if (isset($_POST['special_offer'])) {
    $special_offer = 1;
} else {
    $special_offer = 0;
}





// echo $special_offer;

$product_desc = $_POST['product_desc'];
$stock = $_POST['stock'];
$img1 = $_POST['img1'];
$img2 = $_POST['img2'];
$img3 = $_POST['img3'];
$img4 = $_POST['img4'];
$img5 = $_POST['img5'];
$img6 = $_POST['img6'];

if (isset($_POST['popular'])) {
    $popular = 1;
} else {
    $popular = 0;
}






include 'base/connect.php';

$sql = "INSERT INTO products (product_name, old_price, new_price, special_offer, product_desc, stock, 
img1_ref, img2_ref, img3_ref, img4_ref, img5_ref, img6_ref,popular)
VALUES ('$product_name', '$old_price', '$new_price', '$special_offer', '$product_desc', '$stock', 
'$img1', '$img2', '$img3', '$img4', '$img5', '$img6','$popular')";

if ($con->query($sql) === TRUE) {
    // echo "New record created successfully";
    header('location:admin.php');
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
