
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// import { TimelineMax, TweenMax, Linear } from 'gsap';
// require('./vendor/bullseye/jquery.bullseye-1.0-min.js');
// import ScrollMagic from 'scrollmagic';
// var sm_controller = new ScrollMagic.Controller();
// require('./vendor/svgxuse/svgxuse.min.js');


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

import NavInit from './components/global/header';
import startAnimations from './components/global/animations';
import { isObject } from 'util';
// import contactForm from './components/contactForm/form';


NavInit();
startAnimations();
// contactForm();

$(document).ready(function() {
    $('.btn-buy-product').on('click', function() {
        $('section#buy-product').addClass('active');
    });
    

    //floating language selector
    
});

function register($form) {
    $.ajax({
        type: $form.attr('method'),
        url: $form.attr('action'),
        data: $form.serialize(),
        cache: false,
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        error: function(err) {
            alert("Could not connect to the registration server. Please try again later.");
        },
        success: function(data) {
            if (data.result != "success") {
                // Something went wrong, do something to notify the user. maybe alert(data.msg);
            } else {
                // It worked, carry on...
            }
        }
    });
}

function mobile_check() {
    var agent = navigator.userAgent || navigator.vendor || window.opera;
    var check = false;
    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(agent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(agent.substr(0, 4))) {
        check = true;
    }
    return check;
}

var current_container;
var current_scrollbar_width;

function scrollbar_width() {
    if (typeof(current_scrollbar_width) != 'undefined' && current_scrollbar_width != null && current_scrollbar_width != '') {
        return current_scrollbar_width;
    } else {
        var parent, child;
        parent = $('<div style="width:50px;height:50px;overflow:auto"><div></div></div>').appendTo('body');
        child = parent.children();
        var width = child.innerWidth() - child.height(100).innerWidth();
        parent.remove();
        current_scrollbar_width = width;
        return width;
    }
};






$(document).ready(function() {
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
    
    $('#designed_overlay').click(function(e) {
        e.preventDefault();
        var video = document.getElementById('designed_video');
        $('#designed_overlay').hide();
        video.play();
    });
    
    $('#designed_video').click(function(e) {
        var video = document.getElementById('designed_video');
        if (!video.hasAttribute('controls')) {
            e.preventDefault();
            $('#designed_overlay').show();
            video.pause();
        }
    });
    
    $('#specs_link').click(function(e) {
        var use_element = document.getElementById('specs_link_icon');
        if ($('#specs').is(':visible')) {
            use_element.setAttributeNS('http://www.w3.org/1999/xlink', 'href', ROOT_DIR + 'img/icons.svg#icon_plus');
        } else {
            use_element.setAttributeNS('http://www.w3.org/1999/xlink', 'href', ROOT_DIR + 'img/icons.svg#icon_minus');
        }
        $('#specs').toggle();
    });

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
            $.ajax({
                type: 'POST',
                url: '/getnord/public/contact',
                data: $('#contact_form').serialize(),
                async: true,
                success: function(data) {
                    form_response(data, 'contact_form');
                    // Object.keys(data.errors).forEach(error => {
                    //     console.log(data.errors[error]);
                    // });
                    // // console.log(data);
                },
                dataType: 'json'
            });
        });
    };
    formSubmit();
    //animations
    // $('.anim').bind('enterviewport', function(e) {
    //     $(this).addClass('viewport');
    // }).bullseye();
    // var scene1 = new ScrollMagic.Scene({
    //     triggerElement: '#ram_section',
    //     duration: 600,
    //     offset: -100
    // }).setTween('#ram_section_bg', {
    //     top: '-75px',
    //     ease: Linear.easeNone
    // }).addTo(sm_controller);
    // var scene2 = new ScrollMagic.Scene({
    //     triggerElement: '#battery_section',
    //     duration: 600,
    //     offset: -100
    // }).setTween('#battery_section_bg', {
    //     top: '-75px',
    //     ease: Linear.easeNone
    // }).addTo(sm_controller);
});