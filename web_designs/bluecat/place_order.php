<?php

session_start();

// if (!isset($_SESSION['quantity'])) {
$_SESSION['quantity'] = $_POST['quantity'];
// }else{
//     $temp = $_POST['quantity'];
// }





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>place order</title>
    <link rel="stylesheet" href="css/place_order.css">
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



    <div class="order-main">

        <div class="order-heading">
            <h3>place your order</h3>
        </div>


        <div class="place-order-workingarea">

            <div class="place-order1-main">
                <h3>delivery address</h3>


                <!-- <div class="box-main"> -->

                <div class="box input-name">
                    <p>name</p>
                    <input type="text" name="name" id="">
                </div>

                <div class="box input-mob">
                    <p>phone</p>
                    <input style="width: 150px;" type="text" name="mob" id="">
                </div>

                <!-- </div> -->
                <!-- <textarea name="" id="" cols="30" rows="10"></textarea> -->

                <!-- <div class="box-main"> -->

                <div class="box input-pincode">
                    <p>pincode</p>
                    <input style="width: 100px;" type="text" name="pincode" id="">
                </div>
                <div class="box input-locality">
                    <p>locality</p>
                    <textarea type="text" name="locality" id=""></textarea>
                </div>

                <!-- </div> -->



                <!-- <div class="box-main"> -->
                <div class="box input-area">
                    <p>area and street</p>
                    <!-- <input type="text" name="area" id=""> -->
                    <textarea type="text" name="area" id=""></textarea>

                </div>


                <div class="box input-city">
                    <p>city/town/district</p>
                    <input type="text" name="city" id="">
                </div>
                <!-- </div> -->


                <div class="box input-state">
                    <p>state</p>
                    <input style="width: 180px;" type="text" name="state" id="">
                </div>



                <!-- <div class="box-main"> -->

                <div class="box input-landmark">
                    <p>landmark(optional)</p>
                    <!-- <input type="text" name="landmarke" id=""> -->
                    <textarea type="text" name="landmark" id=""></textarea>

                </div>

                <div class="box input-alternate-mob">
                    <p>alternate phone(optional)</p>
                    <input style="width: 150px;" type="text" name="alternate_phone" id="">
                </div>
                <!-- </div> -->

                <div class="input-radio">
                    <label style="margin: 0 20px;" for="radio1">home(all day delivery)
                        <input type="radio" name="radio" id="radio1">
                    </label>


                    <label style="margin: 0 20px;" for="radio2">work(10 am to 5 pm)
                        <input type="radio" name="radio" id="radio2">
                    </label>
                </div>
            </div>


            <button class="btn-place-order2">next<i class="material-icons">arrow_forward</i></button>
        </div>

        <div class="dots">
            <span class="order-span1"></span>
            <span class="order-span2"></span>
            <span class="order-span3"></span>

        </div>

    </div>






    <?php include 'base/footer.php'; ?>




</body>

</html>