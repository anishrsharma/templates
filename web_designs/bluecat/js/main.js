$(document).ready(function () {
    $('.menu-icon1').click(function () {
        $('.side-nav').toggleClass('side-nav-x');
        $('.products, footer, .loadmore, .about-main, .feedback-main, .policy-main, .signup-main, .order-main').toggleClass('disable-element');
    });




    $("body").click(function () {
        $('.side-nav').removeClass('side-nav-x');
    });


    /////////////////////

    $('.link-account, .link-account2').click(function () {

        $('.nav-account').toggleClass('nav-account-x');
        $('.nav-account2').toggleClass('nav-account2-x');

        // $('.products, footer, .loadmore').toggleClass('disable-element');

    });

    $("body").click(function () {
        $('.nav-account').removeClass('nav-account-x');
        $('.nav-account2').removeClass('nav-account2-x');

        $('.products, footer, .loadmore, .about-main, .feedback-main, .policy-main, .signup-main, .order-main').removeClass('disable-element');

    });
    ///////////////


    $(".nav-menu, .side-nav, .nav-account,.nav-account2, .link-account").click(function (event) {
        event.stopPropagation();
    });


    ///////////


    // $('.place-order-workingarea').load('place_order1.php');
    $('.btn-place-order2').click(function () {
        $('.place-order-workingarea').load('place_order2.php');


        $('.order-span1,.order-span2,.order-span3').css({
            "background-color": "#ffffff"
        });
        $('.order-span2').css({
            "background-color": "rgb(255, 165, 0)"
        });
    });


});





changeImage = (img) => {
    $('#img-main').attr('src', img);
}



goToDetails = (id) => {
    $.ajax({
        url: 'session_product_details.php',
        type: 'POST',
        data: {
            myId: id
        },
        success: function () {
            // window.location.href = 'product_details.php';
            window.open('product_details.php', '_blank');
        }
    });

}


////////////////////

navIconColor1 = () => {
    $('.menu-icon1').css({
        "color": "#ffffff"
    });
}

navIconColor2 = () => {
    $('.menu-icon1').css({
        "color": "#000"
    });
}



////////////////

function searchProducts() {

    var inpval = document.getElementById('inpval').value;
    console.log(inpval);

    $.ajax({
        url: 'get_search_result.php',
        type: 'POST',
        data: {
            inpval: inpval
        },
        success: function (result) {
            console.log('success...');
            window.location.href = 'index.php';

        }

    });
}


////////////////

function functionSoon() {
    alert('this feature is not available for now...');
}

function functionLogout() {
    $.ajax({
        url: 'logout_server.php',

        success: function () {
            window.location.href = 'index.php';
        }
    });
}


////////////////////////


function confirmOrder() {
    $.ajax({
        url: 'confirm_order_server.php',
        success: function (result) {
            window.location.href = result;
        }
    });
}

////////////////////////////


function loadFun() {
    $('body').fadeIn(700);
}