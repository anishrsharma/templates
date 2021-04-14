<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>policy</title>
    <?php include 'base/header_links.php'; ?>
    <link rel="stylesheet" href="css/policy.css">
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


    <div class="policy-main">
        <h3>company policy</h3>
        <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues <strong> coalesce</strong> , li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues.</p>
        <p>Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic <strong>quam Occidental</strong> in fact, it va esser Occidental. A un Angleso it va semblar un simplificat Angles, quam un skeptic Cambridge amico dit me que Occidental es. Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular.</p>

        <p> A un Angleso it va semblar un <strong>simplificat Angles</strong>, quam un skeptic Cambridge amico dit me que Occidental es. Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular.</p>


        <p>Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. <strong>Omnicos</strong> directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent <strong>Europan lingues</strong>. It va esser tam simplic quam Occidental in fact, it va esser Occidental. A un Angleso it va semblar un simplificat Angles, quam un skeptic Cambridge amico dit me que Occidental es. Li Europan lingues es membres del sam familie.</p>

        <p> On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles.</p>
        <p> A un Angleso it va semblar un simplificat Angles, quam un skeptic Cambridge amico dit me que Occidental es. Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues.</p>
        <p>Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental in fact, it va esser Occidental. A un Angleso it va semblar un simplificat Angles</p>
    </div>

    <?php include 'base/footer.php'; ?>



</body>

</html>