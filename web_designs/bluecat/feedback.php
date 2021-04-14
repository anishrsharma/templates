<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>

    <?php include 'base/header_links.php'; ?>
    <link rel="stylesheet" href="css/feedback.css">
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


    <div class="feedback-main">

        <form action="">
            <h3>send feedback</h3>
            <input type="text" name="name" id="" placeholder="your name">
            <input type="email" name="email" id="" placeholder="your email">

            <textarea name="msg" id="" cols="30" rows="5" placeholder="enter text here"></textarea>

            <button type="submit">send <i class="material-icons">near_me</i></button>
        </form>

    </div>





    <?php include 'base/footer.php'; ?>


</body>

</html>