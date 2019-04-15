
/**
 * private methodes
 */

function navWatcher() {
    $(window).on("scroll", function() {
        const isLanguageSelectorOpen = $('.float-languages').hasClass('active');
        const isNavvOpen = $(".top_menu").hasClass("on");
        //change the header background to transparent on scroll
        if ($(window).scrollTop() > 50) {
            $(".page_header").addClass("active");
            $(".floating-selector").addClass("inactive");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $(".page_header").removeClass("active");
            $(".floating-selector").removeClass("inactive");
        };
        if (isLanguageSelectorOpen) {
            $('.float-languages').removeClass('active');
        };

        //close the nav menu drop down on scroll
        
            if(isNavvOpen) {
                $(".top_menu").removeClass("on");
                $(".page_header").removeClass("on");
            };

        //Make country flag names clickable
        $('.floating-selector').find('h3').on('click', function(e){
            // get the parent of the clicked element
            $this = $(this).parent();
            // get the link of the anchor tag within the parent element
            const link = $this.find('a').attr('href');
            // redirect to the clicked link
            window.location.href = link;
        });

        //nav toggle for mobile
        $('.top_menu_toggle').click(function(e) {
            e.preventDefault();
            $('.top_menu').toggleClass('on');
            $('.page_header').toggleClass('on');
        });

    });
};

/**
 * Opens and closes the language selector
 */
function languageSelectorTrig() {
    const isSelectorOpen = $('.float-languages').hasClass('active');
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
 * Dropdown
 */
function toggleDropDown() {
    $('.dropdown').on('click', function(e) {
        e.preventDefault();
        $('.dropdown').toggleClass('active');
    });
};

/**
 * public methodes
 */

function NavInit() {
    navWatcher();
    languageSelectorWatcher();
    toggleDropDown();
};

export default NavInit;

