<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="css/signup.css">
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




    <div class="signup-main">

        <?php

        if (isset($_SESSION["msg"])) {
            echo '<p class="msg">' . $_SESSION["msg"] . '</p>';
        }

        session_unset();


        ?>




        <form action="signup_server.php" method="POST">

            <h3>signup</h3>
            <div class="input-name">
                <i class="material-icons">border_color</i>
                <input type="text" name="name" id="" placeholder="full name">
            </div>
            <div class="input-email">
                <i class="material-icons">mail_outline</i>
                <input type="email" name="email" id="" placeholder="email">
            </div>
            <div class="input-pass1">
                <i class="material-icons">lock_open</i>
                <input type="password" name="pass1" id="" placeholder="set password">
            </div>
            <div class="input-pass2">
                <i class="material-icons">lock</i>
                <input type="password" name="pass2" id="" placeholder="confirm password">
            </div>

            <button type="submit">signup <i class="material-icons">how_to_reg</i></button>
            <i style="font-size: 13px;">already have an account? <a href="login.php">login</a></i>

        </form>
    </div>




    <?php include 'base/footer.php'; ?>

</body>

</html>