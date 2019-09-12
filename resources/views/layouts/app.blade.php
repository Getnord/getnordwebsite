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
    <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}">
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
</div>
@include('inc.footer2')
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/lightbox.min.js') }}"></script>
<script src="{{ url('/') }}/js/lang-{{ app()->getLocale() }}.js"></script>
</body>
</html>
