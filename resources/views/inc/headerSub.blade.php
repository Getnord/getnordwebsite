<header class="page_header">
    <a href="{{ url('/')}}@if(app()->getLocale())/{{app()->getLocale()}}@endif"><div class="logo"><img src="{{ url('/') }}/img/logo.svg" alt="Getnord" /></div></a>
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

            @if (app()->getLocale() != 'uk' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'uk']) }}">
                        <img src="{{ url('/') }}/img/united-kingdom.svg" alt="">
                    </a>
                    <h3>UK</h3>
                </div>
            @endif
             @if (app()->getLocale() != 'fr' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'fr']) }}">
                        <img src="{{ url('/') }}/img/france.svg" alt="">
                    </a>
                    <h3>FR</h3>
                </div>
            @endif
            @if ( app()->getLocale() != 'de' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'de']) }}">
                        <img src="{{ url('/') }}/img/germany.svg" alt="">
                    </a>
                    <h3>DE</h3>
                </div>
            @endif

             @if ( app()->getLocale() != 'nl' )
                <div class="lang-select">
                    <a href="{{ route('home', ['locale' => 'nl']) }}">
                        <img src="{{ url('/') }}/img/netherlands.svg" alt="">
                    </a>
                    <h3>Nederland</h3>
                </div>
            @endif
        </div>
    </div>
    <div class="top_menu_toggle">
        <a class="hover" href="#"></a>
    </div>

    <div class="clear visible_m"></div>
    <nav class="top_menu clearfix">
        <ul>
            <li><a href="http://getnord.com/{{ app()->getLocale()}}/lock" target="_blank">{{ __('header.lock') }}</a></li>
            <li><a href="http://getnord.com" target="_blank">{{ __('header.moreAbout') }}</a></li>
        </ul>
    </nav>
</header>
