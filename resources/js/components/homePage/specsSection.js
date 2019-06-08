import { slick } from 'slick-carousel';
/**
 * private api
 */

function specsDropDownToggle() {
    // specs drop down
    $('#specs_link').click(function(e) {
        var useElement = document.getElementById('specs_link_icon');
        var windowWidth = $(document).width();
        var specsSectionToShow = windowWidth > 760 ? '#specs' : '#specs--responsive';

        /**
         * Hide show the specs section
         */
        if ($(specsSectionToShow).is(':visible')) {
            useElement.setAttributeNS('http://www.w3.org/1999/xlink', 'href', '/img/icons.svg#icon_plus');
        } else {
            useElement.setAttributeNS('http://www.w3.org/1999/xlink', 'href',  '/img/icons.svg#icon_minus');
        }
        $(specsSectionToShow).toggle();

        /**
         *  start slick js 
         */ 
        if(windowWidth < 760 && windowWidth > 480 && specsSectionToShow == '#specs--responsive') {
            $('.specs__slider').slick({
                centerMode: true,
                centerPadding: '120px',
                slidesToShow: 1,
                dots: true,
                // customPaging: function(slider, i ) {
                //     var name = $(slider.$slides[i]).find('.specs--responsive__col').attr('name');
                //     console.log(name);
                //     return '<button class="tab"><h3>' + name  + '</h3></button>';
                // },
            });
        } else if( windowWidth < 480 && specsSectionToShow == '#specs--responsive') {
            $('.specs__slider').slick({
                centerMode: true,
                slidesToShow: 1,
                centerPadding: '60px',
                arrows: false,
                infinite: true,
                dots: true,
                mobileFirst: true,
                // customPaging: function(slider, i ) {
                //     var name = $(slider.$slides[i]).find('.specs--responsive__col').attr('name');
                //     return '<button class="tab"><h3>' + name  + '</h3></button>';
                // },
            });
        } 
        
    });

}

/**
 * public api
 */

export default specsDropDownToggle;


