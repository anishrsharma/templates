<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <?php include 'base/header_links.php'; ?>
</head>




<body onload="loadFun();">




    <?php include 'base/nav.php'; ?>




    <?php


    include 'base/connect.php';


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



    ?>




    <div class="products">




        <?php



        if (isset($_SESSION['input_value'])) {
            $input_valuex = mysqli_real_escape_string($con, $_SESSION['input_value']);

            $sql = " SELECT `product_id`,`old_price`,`new_price`, `product_name`, `img1_ref`, `special_offer`,`popular` FROM `products` 
            WHERE product_name LIKE '%$input_valuex%' ";
        } else {
            $sql = " SELECT `product_id`,`old_price`,`new_price`, `product_name`, `img1_ref`, `special_offer`,`popular` FROM `products` ";
        }


        // LIKE '%{$name}%'

        $result = $con->query($sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

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
                <strike><i style="color: #000000;"><span>&#8377;</span> ' . $row["old_price"] . ' </i></strike><strong> <span style="margin-left: 6px;">
                    &#8377; </span>' . $row["new_price"] . '</strong>
            </span>

        </div>
        
        
        ';
            }
        } else {
            echo 'no result...';
        }



        unset($_SESSION["input_value"]);
        ?>




    </div>

    <!-- <div class="loadmore">
        <abbr title="load more">
            <button class="btn-loadmore">
                <i class="material-icons">expand_more</i>
            </button>
        </abbr>
    </div> -->


    <?php include 'base/footer.php'; ?>

</body>

</html>