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

        if ($(specsSectionToShow).is(':visible')) {
            useElement.setAttributeNS('http://www.w3.org/1999/xlink', 'href', '/img/icons.svg#icon_plus');
        } else {
            useElement.setAttributeNS('http://www.w3.org/1999/xlink', 'href',  '/img/icons.svg#icon_minus');
        }
        // start slick js 
        if(windowWidth < 760) {
            $(specsSectionToShow).slick({
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 3,
            });
        }
        $(specsSectionToShow).toggle();

    });

}

/**
 * public api
 */

export default specsDropDownToggle;


