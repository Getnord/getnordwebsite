<header class="page_header">
    <a href="#"><div class="logo"><img src="{{ url('/') }}/img/logo.svg" alt="Getnord" /></div></a>
    <div class="floating-selector">
        <div class="lang-select-btn">
            @if ( app()->getLocale() == 'us')
                <div class="lang-select">
                    <img src="{{ url('/') }}/img/united-states.png" alt="">
                </div>
            @endif
            @if ( app()->getLocale() == 'ca')
                <div class="lang-select">
                        <img src="{{ url('/') }}/img/canada.png" alt="">
                </div>
            @endif
            @if ( app()->getLocale() == 'uk')
                <div class="lang-select">
                    <img src="{{ url('/') }}/img/united-kingdom.png" alt="">
                </div>
            @endif
            @if ( app()->getLocale() == 'fr' )
                <div class="lang-select">
                    <img src="{{ url('/') }}/img/france.png" alt="">
                </div>
            @endif
            @if ( app()->getLocale() == 'de' )
                <div class="lang-select">
                    <img src="{{ url('/') }}/img/germany.png" alt="">
                </div>
            @endif
            @if ( app()->getLocale() == 'es' )
                <div class="lang-select">
                    <img src="{{ url('/') }}/img/spain.png" alt="">
                </div>
            @endif
            @if ( app()->getLocale() == 'it' )
                <div class="lang-select">
                    <img src="{{ url('/') }}/img/italy.png" alt="">
                </div>
            @endif
            @if ( app()->getLocale() == 'nl' )
                <div class="lang-select">
                    <img src="{{ url('/') }}/img/netherlands.png" alt="">
                </div>
            @endif
            @if ( app()->getLocale() == 'pl' )
                <div class="lang-select">
                    <img src="{{ url('/') }}/img/poland.png" alt="">
                </div>
            @endif
            @if ( app()->getLocale() == 'lt' )
                <div class="lang-select">
                    <img src="{{ url('/') }}/img/lithuania.png" alt="">
                </div>
            @endif
        </div>

        <div class="float-languages">
            @if ( app()->getLocale() != 'us' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'us']) }}">
                        <img src="{{ url('/') }}/img/united-states.png" alt="">
                    </a>
                    <h3>Usa</h3>
                </div>
            @endif
            @if ( app()->getLocale() != 'ca' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'ca']) }}">
                        <img src="{{ url('/') }}/img/canada.png" alt="">
                    </a>
                    <h3>Canada</h3>
                </div>
            @endif
            @if (app()->getLocale() != 'uk' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'uk']) }}">
                        <img src="{{ url('/') }}/img/united-kingdom.png" alt="">
                    </a>
                    <h3>UK</h3>
                </div>
            @endif
            @if (app()->getLocale() != 'fr' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'fr']) }}">
                        <img src="{{ url('/') }}/img/france.png" alt="">
                    </a>
                    <h3>France</h3>
                </div>
            @endif
            @if ( app()->getLocale() != 'de' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'de']) }}">
                        <img src="{{ url('/') }}/img/germany.png" alt="">
                    </a>
                    <h3>Deutschland</h3>
                </div>
            @endif
            @if ( app()->getLocale() != 'es' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'es']) }}">
                        <img src="{{ url('/') }}/img/spain.png" alt="">
                    </a>
                    <h3>España</h3>
                </div>
            @endif
            @if ( app()->getLocale() != 'it' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'it']) }}">
                        <img src="{{ url('/') }}/img/italy.png" alt="">
                    </a>
                    <h3>Italia</h3>
                </div>
            @endif
            @if ( app()->getLocale() != 'nl' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'nl']) }}">
                        <img src="{{ url('/') }}/img/netherlands.png" alt="">
                    </a>
                    <h3>Nederland</h3>
                </div> 
            @endif
            @if ( app()->getLocale() != 'pl' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'pl']) }}">
                        <img src="{{ url('/') }}/img/poland.png" alt="">
                    </a>
                    <h3>Polska</h3>
                </div>
            @endif
            @if ( app()->getLocale() != 'li' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'lt']) }}">
                        <img src="{{ url('/') }}/img/lithuania.png" alt="">
                    </a>
                    <h3>Lietuva</h3>
                </div>
            @endif
        </div>
    </div>
    <div class="top_menu_toggle">
        <a class="hover" href="#"></a>
    </div>
    <div class="social">
        <a href="https://www.facebook.com/getnordinternational/" target="_blank" class="fb"><svg class="icon"><use xlink:href="{{ url('/') }}/img/icons.svg#icon_fb"></use></svg></a>
        <a href="https://twitter.com/getnord" target="_blank" class="tw"><svg class="icon"><use xlink:href="{{ url('/') }}/img/icons.svg#icon_tw"></use></svg></a>
        <a href="https://www.instagram.com/getnord/" target="_blank" class="in"><svg class="icon"><use xlink:href="{{ url('/') }}/img/icons.svg#icon_in"></use></svg></a>
    </div>
    <div class="clear visible_m"></div>

    {{-- The folling elements only need to be shown in the us page --}}
    @if (app()->getLocale() == 'us')
        <a href="tel:8883037271" style="color: #0080ff" class="contact">Call us (888) 303-7271</a>
        <a href="tel:8883037271" style="color: #0080ff" class="contact contact_sm">(888) 303-7271</a>
    @endif
    <nav class="top_menu clearfix">
        <ul>
            @if ($onHomePage)
                <li><a href="#product_section">SHOP</a></li>
            @else
                <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}">SHOP</a></li>
            @endif
<!--			<li><a href="javascript:void(0);" onclick="popup_open();">CONTACT</a></li>-->
            <li><a href="{{ route('contact', ['locale' => app()->getLocale()]) }}">CONTACTS&SUPPORT</a></li>
            <li><a href="{{ route('compatibility', ['locale' => app()->getLocale()]) }}">COMPATIBILITY</a></li>
        </ul>
    </nav>
</header>