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
        if(windowWidth < 760 && windowWidth > 480) {
            $('.specs__slider').slick({
                centerMode: true,
                centerPadding: '100px',
                slidesToShow: 1,
                dots: true,
                customPaging: function(slider, i ) {
                    var name = $(slider.$slides[i]).find('.specs--responsive__col').attr('name');
                    console.log(name);
                    return '<button class="tab"><h3>' + name  + '</h3></button>';
                },
            });
        } else if( windowWidth < 480) {
            $('.specs__slider').slick({
                centerMode: true,
                slidesToShow: 1,
                arrows: false,
                infinite: false,
                dots: true,
                mobileFirst: true,
                customPaging: function(slider, i ) {
                    var name = $(slider.$slides[i]).find('.specs--responsive__col').attr('name');
                    console.log(name);
                    return '<button class="tab"><h3>' + name  + '</h3></button>';
                },
            });
        } 
        $(specsSectionToShow).toggle();

    });

}

/**
 * public api
 */

export default specsDropDownToggle;


