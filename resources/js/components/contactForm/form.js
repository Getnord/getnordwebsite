/**
 * private methodes
 */
// Handle the form response
function form_response(data, form_id) {
    if (data.errors) {
        let text = '';
        Object.keys(data.errors).forEach(error => {
            text += data.errors[error].join() + '<br />';
        });
        $('#' + form_id).find('.form_error').show();
        $('#' + form_id).find('.form_error').html(text);
        $('#' + form_id).find('.form_result').hide();

    } else if (data.success) {
        let text = data.success;

        $('#' + form_id).find('.form_result').show();
        $('#' + form_id).find('.form_result').html(text);
        $('#' + form_id).find('.form_error').hide();
        $('#' + form_id).find('.form_data').hide();

    }
};

function formSubmit() {
    $('#send_button').click(function() {
        let forms = $('#contact_form').serializeArray()
        forms.push({
            name:'recaptcha',
            value:$('#g-recaptcha-response').val()
        });
        let values = jQuery.param(forms)
        $.ajax({
            type: 'POST',
            url: '/contact',
            data: values,
            async: true,
            success: function(data) {
                form_response(data, 'contact_form');
            },
            dataType: 'json'
        });
    });
};


/**
 * public methodes
 */


function contactForm() {
    formSubmit();
};

export default contactForm;
