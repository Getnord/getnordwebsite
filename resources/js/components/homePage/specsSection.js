/**
 * private api
 */

function specsDropDownToggle() {
    // specs drop down
    $('#specs_link').click(function(e) {
        var use_element = document.getElementById('specs_link_icon');
        if ($('#specs').is(':visible')) {
            use_element.setAttributeNS('http://www.w3.org/1999/xlink', 'href', 'img/icons.svg#icon_plus');
        } else {
            use_element.setAttributeNS('http://www.w3.org/1999/xlink', 'href',  'img/icons.svg#icon_minus');
        }
        $('#specs').toggle();
    });
}

/**
 * public api
 */

export default specsDropDownToggle;


