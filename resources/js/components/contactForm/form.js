/**
 * private methodes
 */

// Handle the form response
function form_response(data, form_id) {
    if (data.error) {
        if (Object.prototype.toString.call(data.error) === '[object Array]') {
            var text = '';
            for (var key in data.error) {
                text += data.error[key] + '<br />';
            }
        } else {
            var text = data.error;
        }
        $('#' + form_id).find('.form_error').show();
        $('#' + form_id).find('.form_error').html(text);
        $('#' + form_id).find('.form_result').hide();
    } else if (data.result) {
        if (Object.prototype.toString.call(data.success) === '[object Array]') {
            var text = '';
            for (var key in data.result) {
                text += data.result[key] + '<br />';
            }
        } else {
            var text = data.result;
            var htmlToShow = `<h1 style="text-align: center; margin-top:50px;">${text}</h1>`;
        }
        $('#' + form_id).find('.form_result').show();
        $('#' + form_id).find('.form_result').html(text);
        $('#' + form_id).find('.form_error').hide();
        $('#' + form_id).find('.form_data').hide();
        // removing the whole form
        if(form_id == 'subscribe_form1') {
            $('#' + form_id).html(htmlToShow);
            setTimeout(function(){
                $('.section_popup').addClass('popup_close');
            }, 2000)
        }
    }
};


//contact form submit btn
function formSubmit() {
    $('#send_button').click(function() {
        $.ajax({
            type: 'POST',
            url: '/contact',
            data: $('#contact_form').serialize(),
            async: true,
            success: function(data) {
                // form_response(data, 'contact_form');
                console.log(data);
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

export default contactForm();