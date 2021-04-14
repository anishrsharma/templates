<?php

echo '<nav>
<div class="nav-menu" onmouseover="navIconColor1();" onmouseout="navIconColor2();">
    <i class="material-icons menu-icon1">clear_all</i>
</div>

<div class="nav-logo">

    <a href="index.php"><img class="img-logo" src="cc80b5ad80f344fab0405e1c9f927d3a1.png" alt=""></a>
    <!-- <label for="">BlueCat</label> -->
</div>

<div class="nav-othericons">

    <abbr title="search" class="abbr-search">
        <input class="search-input" type="text" name="search" id="inpval" placeholder="search product">
        <i class="material-icons" onclick="searchProducts();">search</i>
    </abbr>
    <abbr title="cart">
        <i class="material-icons link-cart" id="link-cart" onclick="functionSoon();">shopping_cart</i>
    </abbr>

    <abbr title="account">
        <i class="material-icons link-account" id="link-account">account_circle</i>
    </abbr>
</div>
</nav>

<div class="side-nav">
<ul>
    <li><a href="index.php">home</a></li>
    <li><a href="popular.php">popular products</a></li>

    <li class="side-nav-response"><a class="link-cart2" href="#">cart</a></li>
    <li class="side-nav-response"><a class="link-account2" href="#">account</a></li>


    <li><a href="about_us.php">about us</a></li>
    <li><a href="feedback.php">feedback</a></li>
    <li><a href="policy.php">company policy</a></li>


</ul>
</div>';
