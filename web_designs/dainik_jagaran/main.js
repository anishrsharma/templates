$(document).ready(function () {




    $('.nav-main-menu-bar').click(function () {
        $('.side-menu').toggleClass('side-menu-x');
        $('.nav-main-menu-bar').toggleClass('nav-main-menu-bar-x');

        $('.container-main').toggleClass('disable-element');

    });
    //////////////////



    $("body").click(function () {
        $('.side-menu').removeClass('side-menu-x');
        $('.nav-main-menu-bar').removeClass('nav-main-menu-bar-x');

        $('.container-main').removeClass('disable-element');


        $('.nav-main-search').removeClass('nav-main-search-x');

        $('.input').removeClass('input-x');
        $('.search2').removeClass('search2-x');

    });

    $(".side-menu, .nav-main-menu-bar, .nav-main-search, .input, .search2").click(function (event) {
        event.stopPropagation();
    });


    //////////////////////
    $('.search1').click(function () {
        $('.nav-main-search').addClass('nav-main-search-x');

        $('.input').addClass('input-x');
        $('.search2').addClass('search2-x');


    });

    $('.search2').click(function () {
        $('.nav-main-search').removeClass('nav-main-search-x');

        $('.input').removeClass('input-x');
        $('.search2').removeClass('search2-x');



    });

    /////////////////////////////////////////////////////////







});
