<header class="page_header">
    <a href="#"><div class="logo"><img src="{{ url('/') }}/img/logo.svg" alt="Getnord" /></div></a>
    <div class="floating-selector">
        <div class="lang-select-btn">
            @if ( app()->getLocale() == 'us')
                <div class="lang-select">
                    <img src="{{ url('/') }}/img/united-states.svg" alt="">
                </div>
            @endif
            @if ( app()->getLocale() == 'ca')
                <div class="lang-select">
                        <img src="{{ url('/') }}/img/canada.svg" alt="">
                </div>
            @endif
            @if ( app()->getLocale() == 'uk')
                <div class="lang-select">
                    <img src="{{ url('/') }}/img/united-kingdom.svg" alt="">
                </div>
            @endif
            @if ( app()->getLocale() == 'fr' )
                <div class="lang-select">
                    <img src="{{ url('/') }}/img/france.svg" alt="">
                </div>
            @endif
            @if ( app()->getLocale() == 'de' )
                <div class="lang-select">
                    <img src="{{ url('/') }}/img/germany.svg" alt="">
                </div>
            @endif
            @if ( app()->getLocale() == 'es' )
                <div class="lang-select">
                    <img src="{{ url('/') }}/img/spain.svg" alt="">
                </div>
            @endif
            @if ( app()->getLocale() == 'it' )
                <div class="lang-select">
                    <img src="{{ url('/') }}/img/italy.svg" alt="">
                </div>
            @endif
            @if ( app()->getLocale() == 'nl' )
                <div class="lang-select">
                    <img src="{{ url('/') }}/img/netherlands.svg" alt="">
                </div>
            @endif
            @if ( app()->getLocale() == 'pl' )
                <div class="lang-select">
                    <img src="{{ url('/') }}/img/poland.svg" alt="">
                </div>
            @endif
            @if ( app()->getLocale() == 'lt' )
                <div class="lang-select">
                    <img src="{{ url('/') }}/img/lithuania.svg" alt="">
                </div>
            @endif
        </div>

        <div class="float-languages">
            @if ( app()->getLocale() != 'us' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'us']) }}">
                        <img src="{{ url('/') }}/img/united-states.svg" alt="">
                    </a>
                    <h3>USA</h3>
                </div>
            @endif
            {{-- @if ( app()->getLocale() != 'ca' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'ca']) }}">
                        <img src="{{ url('/') }}/img/canada.svg" alt="">
                    </a>
                    <h3>Canada</h3>
                </div>
            @endif --}}
            @if (app()->getLocale() != 'uk' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'uk']) }}">
                        <img src="{{ url('/') }}/img/united-kingdom.svg" alt="">
                    </a>
                    <h3>UK</h3>
                </div>
            @endif
            {{-- @if (app()->getLocale() != 'fr' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'fr']) }}">
                        <img src="{{ url('/') }}/img/france.svg" alt="">
                    </a>
                    <h3>FR</h3>
                </div>
            @endif --}}
            @if ( app()->getLocale() != 'de' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'de']) }}">
                        <img src="{{ url('/') }}/img/germany.svg" alt="">
                    </a>
                    <h3>DE</h3>
                </div>
            @endif
            {{-- @if ( app()->getLocale() != 'es' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'es']) }}">
                        <img src="{{ url('/') }}/img/spain.svg" alt="">
                    </a>
                    <h3>ES</h3>
                </div>
            @endif --}}
            {{-- @if ( app()->getLocale() != 'it' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'it']) }}">
                        <img src="{{ url('/') }}/img/italy.svg" alt="">
                    </a>
                    <h3>IT</h3>
                </div>
            @endif --}}
            {{-- @if ( app()->getLocale() != 'nl' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'nl']) }}">
                        <img src="{{ url('/') }}/img/netherlands.svg" alt="">
                    </a>
                    <h3>Nederland</h3>
                </div> 
            @endif --}}
            {{-- @if ( app()->getLocale() != 'pl' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'pl']) }}">
                        <img src="{{ url('/') }}/img/poland.svg" alt="">
                    </a>
                    <h3>Polska</h3>
                </div>
            @endif --}}
            {{-- @if ( app()->getLocale() != 'li' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'lt']) }}">
                        <img src="{{ url('/') }}/img/lithuania.svg" alt="">
                    </a>
                    <h3>Lietuva</h3>
                </div>
            @endif --}}
        </div>
    </div>
    <div class="top_menu_toggle">
        <a class="hover" href="#"></a>
    </div>
    <div class="social">
        <shopping-cart-icon :all-products-in-cart-quantity="cart.length" @open-shopping-cart="openShoppingCart"></shopping-cart-icon>
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
                <li><a href="#product_section">{{ __('header.shop') }}</a></li>
            @else
                <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}">{{ __('header.shop') }}</a></li>
            @endif
            <li class="dropdown">
                <a href="#" class="dropdown__btn">
                    <p>{{ __('header.phones') }}</p>
                </a>
                <div class="dropdown__list">
                    <a href="{{ route('home', ['locale' => app()->getLocale()]) }}">{{ __('header.lynx') }}</a>
                    @if (app()->getLocale() != 'us')
                        <a href="{{ route('onyx', ['locale' => app()->getLocale()]) }}">{{ __('header.onyx') }}</a>
                    @endif
                </div>
            </li>
<!--			<li><a href="javascript:void(0);" onclick="popup_open();">CONTACT</a></li>-->
            <li><a href="{{ route('contact', ['locale' => app()->getLocale()]) }}">{{ __('header.contactAndSupport') }}</a></li>
            <li><a href="{{ route('compatibility', ['locale' => app()->getLocale()]) }}">{{ __('header.compatibility') }}</a></li>
        </ul>
    </nav>
</header>