$(document).ready(function () {
    const home = new Waypoint({
        element: document.getElementById('home-x'),
        handler: function () {
            console.log("home");
            $('a').removeClass('active');
            $('.home-x').addClass('active');
        },
        offset: '20%' // 20px from the top
    })

    const about = new Waypoint({
        element: document.getElementById('about-x'),
        handler: function () {
            console.log("about");
            $('a').removeClass('active');
            $('.about-x').addClass('active');
        },
        offset: '20%' // 20px from the top
    })

    var service = new Waypoint({
        element: document.getElementById('service-x'),
        handler: function () {
            console.log("service");
            $('a').removeClass('active');
            $('.service-x').addClass('active');
        },
        offset: '20%' // 20px from the top
    })

    var contact = new Waypoint({
        element: document.getElementById('contact-x'),
        handler: function () {
            $('a').removeClass('active');
            console.log("contact");
            $('.contact-x').addClass('active');
        },
        offset: '20%' // 20px from the top
    })

    var feedback = new Waypoint({
        element: document.getElementById('feedback-x'),
        handler: function () {
            $('a').removeClass('active');
            console.log("contact");
            $('.feedback-x').addClass('active');
        },
        offset: '20%' // 20px from the top
    })

    //----------------

    function enableWP() {
        home.enable();
        about.enable();
        service.enable();
        contact.enable();
        feedback.enable();
    }

    function disableWP() {
        home.disable();
        about.disable();
        service.disable();
        contact.disable();
        feedback.disable();
    }



    disableWP();

    window.onscroll = function () {
        enableWP();
    }

    //----------------


	$('.home-x, .about-x, .service-x, .contact-x, .feedback-x').click(function () {
        disableWP();
        $('*').removeClass('active');
        $('#home-x, #about-x, #service-x, #contact-x, #feedback-x').css({
        	"scroll-margin-top":"10em"
        });
	});

    $('.home-x').click(function () {
        $(this).addClass('active');
    });

    $('.about-x').click(function () {
        $(this).addClass('active');
    });

    $('.service-x').click(function () {
        $(this).addClass('active');
    });

    $('.contact-x').click(function () {
        $(this).addClass('active');
    });

    $('.feedback-x').click(function () {
        $(this).addClass('active');
    });

});

// drawback: when page is refreshed in any particular bookmark then the active will shown on home...
// onscroll it will fixed...
// so user has to scroll to get it fixed...
