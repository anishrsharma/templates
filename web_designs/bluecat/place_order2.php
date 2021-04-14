<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'base/header_links.php'; ?>
    <link rel="stylesheet" href="css/place_order.css">
    <style>
        .abbr-search {
            display: none;
        }
    </style>
</head>

<body onload="loadFun();">


    <div class="place-order2-main">



        <?php

        // $quantity = $_POST['quantity'];

        include 'base/connect.php';



        $sql = "SELECT * FROM products WHERE product_id = " . $_SESSION['product_id'] . " ";



        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                $new_pricex = str_replace(',', '', $row['new_price']);
                $total_price = ($new_pricex * $_SESSION['quantity']) + 70;

                echo '
                <h3>order summary</h3>

                <img src="' . $row['img1_ref'] . '" alt="">
        
                <h4>' . $row['product_name'] . '</h4>
                <p>quantity = ' . $_SESSION["quantity"] . '</p>
                <p>price = <span>&#8377;</span> ' .  $new_pricex . ' x ' . $_SESSION["quantity"] . ' </p>
                
        
                <p>will deliver within 5 days </p>
        
                <p>shipping charge = <span>&#8377;</span> 70</p>
        
                



                <p>total = <span>&#8377;</span> ' . $total_price . '</p>
        
                <button onclick="confirmOrder();">confirm</button>
                ';
            }
        }



        ?>

        <!-- <h3>order summary</h3>

        <img src="img/1a.jpg" alt="">

        <h4>name of product</h4>
        <p>price = <span>&#8377;</span> 299 </p>
        <p>quantity = 1</p>

        <p>delivered by Wednesday March 31 </p>

        <p>shipping charge = <span>&#8377;</span> 70</p>

        <p>total = <span>&#8377;</span>369.00</p>

        <button>confirm</button> -->
    </div>
</body>

</html>