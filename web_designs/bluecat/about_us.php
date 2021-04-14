<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>
    <?php include 'base/header_links.php'; ?>
    <link rel="stylesheet" href="css/about_us.css">
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



    <div class="about-main">
        <h3>about us</h3>
        <p>Welcome to bluecat, your number one source for all things product. We're dedicated to giving you the very
            best of products, with a focus on three characteristics, ie: dependability, customer service and uniqueness.
        </p>
        <p>Founded in 2018 by Anish Raj, has come a long way from its beginnings in a home office. When Anish first
            started out his passion for providing the best product for his fellow citizens drove him to do intense
            research and gave him the impetus to turn hard work and inspiration into to a booming online store. We now
            serve customers all over town Muzaffarpur, and are thrilled to be a part of the fair trade wing of the
            ecommerce industry.</p>
        <p>We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or
            comments, please don't hesitate to contact us.</p>
        <i>Sincerely,<br>
            Steve, CEO</i>
    </div>


    <?php include 'base/footer.php'; ?>



</body>

</html>