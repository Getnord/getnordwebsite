
/**
 * private methodes
 */

function navWatcher() {
    $(window).on("scroll", function() {
        const isNavOpen = $('.float-languages').hasClass('active');
        const isLanguageSelectorOpen = $(".top_menu").hasClass("on");

        //change the header background to transparent on scroll
        if ($(window).scrollTop() > 50) {
            $(".page_header").addClass("active");
            $(".floating-selector").addClass("inactive");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $(".page_header").removeClass("active");
            $(".floating-selector").removeClass("inactive");
        };
        if (isNavOpen) {
            $('.float-languages').removeClass('active');
        };

        //close the nav menu drop down on scroll
        $(window).on("scroll" , function() {
            const isNavOpen = $(".top_menu").hasClass("on");
            if(isNavOpen) {
                $(".top_menu").removeClass("on");
                $(".page_header").removeClass("on");
            };
        });

    });
};

/**
 * Opens and closes the language selector
 */
function languageSelectorTrig() {
    var isSelectorOpen = $('.float-languages').hasClass('active');
    if (isSelectorOpen) {
        $('.float-languages').removeClass('active');
    } else {
        $('.float-languages').addClass('active');
    };
};

function languageSelectorWatcher() {
    //floating language selector opens and closes based on click events
    $('.floating-selector').on('click', function() {
        languageSelectorTrig();
    });
    //close the nav language selector on scroll

    $('.float-languages').on('mouseleave', function() {
        languageSelectorTrig()
    });
};

/**
 * public methodes
 */

function NavInit() {
    navWatcher();
    languageSelectorWatcher();
};

export default NavInit;

