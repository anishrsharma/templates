<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <?php include 'base/header_links.php'; ?>
    <style>
        .abbr-search {
            display: none;
        }
    </style>

</head>

<body onload="loadFun();">


    <?php include 'base/nav.php'; ?>


    <?php


    include 'base/connect.php';
    // $_SESSION['user'] = $email;
    // $sql = $con->query("SELECT customer_email FROM customer where customer_email = '$email' ");

    if (isset($_SESSION['user_email'])) {

        $sql = "SELECT * FROM customer WHERE customer_email = '" . $_SESSION['user_email'] . "' ";

        $result = $con->query($sql);

        if ($result->num_rows > 0) {


            while ($row = $result->fetch_assoc()) {


                echo '<div class="nav-account2">
                                <h3>account</h3>
                                <ul>
                                    <li>' . $row["customer_name"] . '</li>
                                    <li>' . $row["customer_email"] . '</li>
                                    <a href="javascript:void(0);" onclick="functionSoon();">history</a>
                                    <a href="javascript:void(0);" onclick="functionLogout();">logout</a>
                        
                                </ul>
                            </div>
                            ';
                break;
            }
        }
    } else {
        echo '<div class="nav-account">
                                <ul>
                                    <li><a href="login.php">login</a></li>
                                    <li><a href="signup.php">signup</a></li>
                        
                                </ul>
                            </div>
                                ';
    }




    // $con->close();



    ?>



    <div class="hr">
        <span>popular products</span>
    </div>

    <div class="products">

        <?php

        include 'base/connect.php';

        $sql = " SELECT `product_id`,`old_price`,`new_price`, `product_name`, `img1_ref`, `special_offer`,`popular` FROM `products` WHERE popular = 1 ";



        $result = $con->query($sql);

        if ($result->num_rows > 0) {

            // $arr = array();
            while ($row = $result->fetch_assoc()) {
                // $_SESSION[$i] = $row["id"];

                for ($i = $row["product_id"]; $i <= $row["product_id"]; $i++) {


                    echo '<div class="product-details" onclick="goToDetails(' . $i . ');" >';
                    break;
                }


        ?>

                <?php

                if ($row['special_offer'] == 1) {
                    echo '<i class="discount">special offer</i>';
                }


                ?>

        <?php

                echo '
                    <img src="' . $row["img1_ref"] . '" alt="">
                    <p>' . $row["product_name"] . '</p>

                    <span>
                        <strike><i style="color: #000000;""><span>&#8377;</span> ' . $row["old_price"] . ' </i></strike><strong> <span style="margin-left: 6px;">
                            &#8377; </span>' . $row["new_price"] . '</strong>
                    </span>

                </div>
                
                
                ';


                // break;
            }
        } else {
            echo 'no result...';
        }




        ?>



        <!-- <div class="product-details" onclick="location.href='product_details.php';">
            <i class="discount">10% off</i>
            <img src="img/26228.jpg" alt="">
            <p>m416 assault rifle 5.56mm</p>
            <span><strike><i style="color: #9896f1;"><span>&#8377;</span> 6,67,000 </i></strike><strong> <span style="margin-left: 6px;">
                        &#8377; </span> 5,99,800</strong></span>
        </div> -->


    </div>

    <!-- <div class="loadmore">
        <abbr title="load more">
            <button class="btn-loadmore">
                <i class="material-icons">expand_more</i>
            </button>
        </abbr>
    </div> -->

    <?php
    include 'base/footer.php';
    ?>

</body>

</html>