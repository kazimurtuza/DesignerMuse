$(document).ready(function () {
    // Offcanvas Open

    $(".hamburger").click(function () {
        $(this).toggleClass("is-active");

        $("body").toggleClass("offcanvas-on");
    });

    // Offcanvas Close

    $(".mobile-offcanvas__close").click(function () {
        $("body").removeClass("offcanvas-on");

        $(".hamburger").removeClass("is-active");
    });

    // Submenu Toggle for offcanvas

    // $(".offcanvas-nav-item.has-submenu,").click(function (e) {
    //   e.preventDefault();

    //   $(this).parent().find(".offcanvas-subnav").slideUp(),

    //     $(this).next().is(":visible") || $(this).next().slideDown(),

    //     e.stopPropagation();

    //   var span = $(this).find(".submenu-icon");

    //   span.toggleClass("menu-up menu-down");

    // });

    // Hero SLider

    $(".hero__slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        lazyLoad: "progressive",
        autoplaySpeed: 20000,
        arrows: false,

        dots: true,

        fade: true,
    });

    $(".products-slider .slider-wrapper").slick({
        slidesToShow: 1,

        slidesToScroll: 1,

        autoplay: true,

        arrows: false,

        variableWidth: true,

        responsive: [

            {
                breakpoint: 767,

                settings: {
                    variableWidth: false,
                },
            },
        ],
    });

    $(".shedule-period .period-card input").on("click", function () {
        $(".shedule-period .period-card .card-title").removeClass(

            "period-active"
        );

        if ($('input[type="radio"]:checked')) {
            $(this)

                .parents()

                .siblings(".shedule-period .period-card .card-title")

                .addClass("period-active");
        }
    });

    $(".video-block").magnificPopup({
        type: "iframe",
    });

    function makeTimer() {
        //		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");

        var endTime = new Date("5 April 2023 9:56:00 GMT+01:00");

        endTime = Date.parse(endTime) / 1000;

        var now = new Date();

        now = Date.parse(now) / 1000;

        var timeLeft = endTime - now;

        var days = Math.floor(timeLeft / 86400);

        var hours = Math.floor((timeLeft - days * 86400) / 3600);

        var minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);

        var seconds = Math.floor(

            timeLeft - days * 86400 - hours * 3600 - minutes * 60
        );

        if (hours < "10") {
            hours = "0" + hours;
        }

        if (minutes < "10") {
            minutes = "0" + minutes;
        }

        if (seconds < "10") {
            seconds = "0" + seconds;
        }

        $("#days").html(days + "<span>:</span>");

        $("#hours").html(hours + "<span>:</span>");

        $("#minutes").html(minutes + "<span>:</span>");

        $("#seconds").html(seconds);
    }

    setInterval(function () {
        makeTimer();
    }, 1000);

    // Slider With Gellery Thumb

    $(".product-slider").slick({
        slidesToShow: 1,

        slidesToScroll: 1,

        fade: true,

        asNavFor: ".slider-gallery",
    });

    $(".slider-gallery").slick({
        slidesToShow: 3,

        slidesToScroll: 1,

        asNavFor: ".product-slider",

        dots: false,

        focusOnSelect: true,

        variableWidth: true,

        centerMode: true,
    });

    // Quantity

    var incrementPlus = $(".quantity-increase").click(function () {
        var $n = $(this).parent(".quantity-wrapper").find(".quantity-value");

        $n.val(Number($n.val()) + 1);
    });

    var incrementMinus = $(".quantity-decrease").click(function () {
        var $n = $(this).parent(".quantity-wrapper").find(".quantity-value");

        var quantity = Number($n.val());

        if (quantity > 1) {
            $n.val(quantity - 1);
        }
    });

    // $(".accordion__item:nth-child(1)").addClass("active");

    // $(".accordion__item:nth-child(1) .accordion__item__body").slideDown();

    $(".accordion__item").on("click", function () {
        if ($(this).hasClass("active")) {
            $(this).find(".accordion__item__body").slideUp(800);

            $(this).removeClass("active");
        } else {
            $(".accordion__item__body").slideUp(800);

            $(".accordion__item").removeClass("active");

            $(this).find(".accordion__item__body").slideDown(800);

            $(this).addClass("active");
        }
    });

    $(".default-tab li a").on("click", function (e) {
        e.preventDefault();

        let target = $(this).parent().data("target");

        $(".default-tab li").removeClass("active");

        $(".project-details-tabs>div").removeClass("active");

        $(`#${target}`).addClass("active");

        $(this).parent().addClass('active');
    });

    $(".agreements .next-btn").on("click", function () {
        $(".stap-1").hide();

        $(".step-2").show();
    });

    $(".file .action-btn>a").on("click", function (e) {
        e.preventDefault();

        $(this).parent().find(".sub-menu").toggle();
    });

    $(".sub-menu a").on("click", function (e) {
        $(this).parents(".sub-menu").toggle();
    });

    // Image Gallery
    $('.image-popup').magnificPopup({
        type: 'image',
      mainClass: 'mfp-with-zoom',
      gallery:{
                enabled:true
            },

      zoom: {
        enabled: true,

        duration: 300, // duration of the effect, in milliseconds
        easing: 'ease-in-out', // CSS transition easing function

        opener: function(openerElement) {
          return openerElement.is('img') ? openerElement : openerElement.find('img');
      }
    }
    });

    $(".modal-open").on("click", function (e) {
        e.preventDefault();
        $($(this).data("target")).removeClass("d-none");
      });
      $(".modal-close").on("click", function () {
        $(this).parents(".popup-parent").addClass("d-none");
      });
    // About page Carousel
    $(".card-carousel").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
});
