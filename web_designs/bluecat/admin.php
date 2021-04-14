<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/signup.css">
    <?php include 'base/header_links.php'; ?>
    <style>
        .abbr-search {
            display: none;
        }
    </style>
</head>

<body onload="loadFun(); insertPage();">


    <nav>
        <h3>admin panel</h3>
        <a href="index.php"><img class="img-logo" src="cc80b5ad80f344fab0405e1c9f927d3a1.png" alt=""></a>

        <!-- <img src="cc80b5ad80f344fab0405e1c9f927d3a1.png" alt=""> -->
    </nav>

    <div class="admin-menu">
        <li><a class="add-product" href="javascript:void(0);">add product</a></li>
        <hr>
        <li><a class="my-product" href="javascript:void(0);">product lists</a></li>
        <hr>
        <li><a class="create-admin" href="javascript:void(0);">create new admin</a></li>
        <hr>
        <!-- <li><a href=""></a></li> -->

    </div>


    <div class="admin-container">


    </div>


    <script>
        $(document).ready(function() {
            $('.add-product').click(function() {
                $('.admin-container').load('admin_insert.php');

                $(this).css({
                    "background-color": "rgba(255, 165, 0, 0.95)"
                });

                $('.my-product').css({
                    "background-color": "white",
                    "color": "black"
                });

                $('.create-admin').css({
                    "background-color": "white",
                    "color": "black"
                });

            });

            $('.my-product').click(function() {
                $(this).css({
                    "background-color": "rgba(255, 165, 0, 0.95)"
                });

                $('.add-product').css({
                    "background-color": "white",
                    "color": "black"
                });

                $('.create-admin').css({
                    "background-color": "white",
                    "color": "black"
                });


                $('.admin-container').load('admin_show.php');

            });


            $('.create-admin').click(function() {
                $(this).css({
                    "background-color": "rgba(255, 165, 0, 0.95)"
                });

                $('.add-product').css({
                    "background-color": "white",
                    "color": "black"
                });

                $('.my-product').css({
                    "background-color": "white",
                    "color": "black"
                });


                $('.admin-container').load('create_admin.php');

            });
        });

        function insertPage() {
            $('.add-product').css({
                "background-color": "rgba(255, 165, 0, 0.95)"
            });
            $('.admin-container').load('admin_insert.php');

        }
    </script>


</body>

</html>