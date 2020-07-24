<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
            var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PZXDSVM');</script><!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- styles --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,700&amp;subset=cyrillic,latin-ext" rel="stylesheet"> --}}

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> --}}
    {{-- title --}}
    <title>@yield('pageTitle')</title>
    @include('inc.header_tags')
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZXDSVM" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript><!-- End Google Tag Manager (noscript) -->
<!-- Google Tag Manager (noscript) -->
{{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZXDSVM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> --}}
<!-- End Google Tag Manager (noscript) -->

{{-- Get locale to use in js--}}
<input type="hidden" class="locale_input" value="@if(app()->getLocale()){{app()->getLocale()}}@endif">
<div class="page_content" id="app">
    @include('inc.header2')

    @yield('content')
    @include('inc.shopping_cart')

    @if(app()->getLocale() === 'nl' && isset($popup))
        @include('pages.coupon.index')
    @endif
</div>
@include('inc.footer2')
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/lightbox.min.js') }}"></script>
<script src="{{ asset('js/modal.js') }}"></script>
<script src="{{ url('/') }}/js/lang-{{ app()->getLocale() }}.js"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=reCaptchaCallback" async defer></script>
<script >


</script>
@yield('scripts')
<script>
    function reCaptchaCallback () {
        /* this must be in the global scope for google to get access */
        grecaptcha.render('g--recaptcha', {
            'sitekey': '{{env('RECAPTCHA_KEY')}}',
            'callback': reCaptchaVerify,
        });
    }
    let doSubmit = false;
    function reCaptchaVerify(response) {
        if (response === document.querySelector('.g-recaptcha-response').value) {
            doSubmit = true;
        }
    }
    $(document).ready(function () {
        $('.show-button').on('click', function () {
            $(this).closest(".can__item").toggleClass('active');

        })


        if ($(window).width() > 480) {

            $('.lock__banner-text').on('click', function () {
                $('#lock__banner').toggleClass('banner--active')
                $('#lock__banner video').trigger('play')
            })
            $('.banner__video').on('click', function () {
                $('#lock__banner').toggleClass('banner--active')
                $('#lock__banner video').trigger('pause')
            })
        } else {
            $('.banner__video').on('click', function () {
                $('#lock__banner').toggleClass('banner--active')
                let video = $('#lock__banner video')
                video[0].paused ? video.trigger('play') : video.trigger('pause')
            })
        }
        $(document).on('click', function (e) {
            if (e.target.classList.contains('modal-wrapper')) {
                $('.modal-wrapper').removeClass('modal--open')
                $('.modal-wrapper video').trigger('pause')
                $('.modal-wrapper input').val('')
                $('.modal-wrapper textarea').val('')
                $('.modal-wrapper span').remove('')
            }
        })
        $('.tab-item').on('click', function () {
            let idx = $(this).data('idx');
            let img = $('.tab-image')
            $('.tab-item').removeClass('active');
            $(this).addClass('active');
            img.removeClass('active');
            img[idx].classList.add('active')
        })
        $('.tab-2-header--item').on('click', function () {
            let index = $(this).data('index');
            let image = $('.tab-content--image')
            $('.tab-2-header--item').removeClass('active');
            $(this).addClass('active');
            image.removeClass('active');
            image[index].classList.add('active')
        })
        $('.try--button').on('click', function () {
            $('#contact--modal').addClass('modal--open')
        })

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // email regex
        const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        // input validation function
        function validateInput(target, isRequired = false) {
            let valid = true

            if (target.type === 'email' && !target.value.match(mailformat)) {
                console.log('asdasd')
                $(target).siblings('span').text(`Please enter valid email`)
                valid = false
            }
            if (isRequired && target.value === '') {
                $(target).siblings('span').text(`${target.name.replace(/-/g, ' ')} field is required`)
                valid = false
            }
            return valid
        }





        // submitting contact form
        $('.contact-submit').on('click', function (e) {
            e.preventDefault()
            let ok = [];
            let data = {}
            const inputs = $('#contact--form input')
            $('.error').text('')
            $.each(inputs, function (idx, input) {
                let isRequired = false
                if (input.hasAttribute('required')) {
                    isRequired = true
                }
                ok.push(validateInput(input, isRequired))
                data[input.name] = $(input).val()
            })
            if(!doSubmit){
                $('.g-input .error').text('Captcha field is required , please verify')
            }else{
                $('.g-input .error').text('')
            }
            if (!ok.includes(false) && doSubmit) {
                data[$('#contact--form textarea').attr('name')] = $('#contact--form textarea').val()
                $.ajax({
                    type: 'POST',
                    url: $('#contact--form').attr('action'),
                    data: data,
                    success: function (data) {
                        $('#contact--form').append(`<span class="success">Thank you for contacting us! <br> We will contact you back soon</span>`)
                        setTimeout(function () {
                            $('.modal-wrapper').removeClass('modal--open')
                        }, 3000)
                    }

                });
            }
        })
    })



</script>
</body>
</html>
