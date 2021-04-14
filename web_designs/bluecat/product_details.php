<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product detail</title>

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



    <div class="details-main">



        <div class="gallery">


            <div class="thumbs">



                <?php


                include 'base/connect.php';

                $sql = " SELECT `product_id`, `old_price`, `new_price`, `product_name`, `img1_ref`,`img2_ref`,`img3_ref`,`img4_ref`,`img5_ref`,`img6_ref`,
                `special_offer`,`popular`,`product_desc`,`stock` FROM `products` WHERE product_id = " . $_SESSION['id'] . " ";


                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        echo '                
                        <img onclick="changeImage(\' ' . $row["img1_ref"] . ' \');" src="' . $row["img1_ref"] . '" alt=""> 
                        <img onclick="changeImage(\' ' . $row["img2_ref"] . ' \');" src="' . $row["img2_ref"] . '" alt=""> 
                        <img onclick="changeImage(\' ' . $row["img3_ref"] . ' \');" src="' . $row["img3_ref"] . '" alt=""> 
                        <img onclick="changeImage(\' ' . $row["img4_ref"] . ' \');" src="' . $row["img4_ref"] . '" alt=""> 
                        <img onclick="changeImage(\' ' . $row["img5_ref"] . ' \');" src="' . $row["img5_ref"] . '" alt="">
                        <img onclick="changeImage(\' ' . $row["img6_ref"] . ' \');" src="' . $row["img6_ref"] . '" alt=""> 
                        ';

                        break;
                    }
                } else {
                    echo 'no results...';
                }


                ?>

            </div>



            <div class="photo">


                <?php


                echo '<img id="img-main" src="' . $row["img1_ref"] . '" alt="">';


                ?>



            </div>


            <!-- 
            <div class="thumbs">



                <?php


                echo '
                <img onclick="changeImage(\' ' . $row["img1_ref"] . ' \');" src="' . $row["img1_ref"] . '" alt=""> 
                <img onclick="changeImage(\' ' . $row["img2_ref"] . ' \');" src="' . $row["img2_ref"] . '" alt=""> 
                <img onclick="changeImage(\' ' . $row["img3_ref"] . ' \');" src="' . $row["img3_ref"] . '" alt=""> 
                <img onclick="changeImage(\' ' . $row["img4_ref"] . ' \');" src="' . $row["img4_ref"] . '" alt=""> 
                <img onclick="changeImage(\' ' . $row["img5_ref"] . ' \');" src="' . $row["img5_ref"] . '" alt="">
                <img onclick="changeImage(\' ' . $row["img6_ref"] . ' \');" src="' . $row["img6_ref"] . '" alt=""> 


                    
                ';

                ?>

            </div> -->
        </div>





        <form action="place_order.php" method="POST">
            <?php $_SESSION['product_id'] = $row['product_id'] ?>

            <?php echo '<h3 style="margin-bottom:0;">' . $row["product_name"] . '</h3>
            
            <i style="color: #000000;">stock: ' . $row["stock"] . '</i>
            
            
            
            ';

            if ($row["stock"] <= 10) {
                echo '<i style="color:red; margin-top:0;">hurry up!</i>';
            }


            ?>



            <hr>

            <?php echo '<p style="color:#000000;">price:<strong> <span>&#8377;</span> ' . $row["new_price"] . ' only</strong></p>'; ?>

            <hr>

            <label for="">quantity

                <input type="number" name="quantity" id="" value="1"  min="1" max="10">

            </label>
            <div class="btn">
                <button disabled>add to cart</button>
                <button type="submit">buy now</button>
            </div>
        </form>


    </div>


    <div class="more-details">
        <!-- color: rgb(255, 165, 0); -->
        <h3 style="color: rgb(255, 165, 0);">more details:</h3>

        <?php echo '<pre> ' . $row["product_desc"] . ' </pre>'; ?>

    </div>

    <?php include 'base/footer.php'; ?>






</body>

</html>