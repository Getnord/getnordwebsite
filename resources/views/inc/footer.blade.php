<section class="section_footer" id="footer">
    <div class="footer-container">
        <div class="footer-item">
            <div class="footer-title">
                <h3>Payment Methods</h3>
            </div>
            <div class="footer-item-content">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
        </div>
        <div class="footer-item">
            <div class="footer-title">
                <h3>Secured With</h3>
            </div>
            <div class="footer-item-content">
                <div class="secure">
                    <img src="{{ url('/') }}/img/braintree_2.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="footer-item">
            <div class="footer-title">
                <h3><a href="{{ route('shipping', ['locale' => app()->getLocale()]) }}">Delivery and Returns</a></h3>
                <h3><a href="{{ route('warranty', ['locale' => app()->getLocale()]) }}">Warranty</a></h3>
                <h3><a href="{{ route('legal', ['locale' => app()->getLocale()]) }}">Legal Notes</a></h3>
                <h3><a href="{{ route('cookies', ['locale' => app()->getLocale()]) }}" >Privacy and Cookies</a></h3>
            </div>
        </div>
        <div class="footer-item">
            <div class="footer-title">
                <h3>Get to know us</h3>
            </div>
            <div class="footer-item-content">
                <div class="link fb-link">

                    @if ( app()->getLocale() == 'us' || app()->getLocale() == 'uk' || app()->getLocale() == 'ca' )
                        <a href="https://www.facebook.com/getnordinternational/" target="_blank">
                            <img src="{{ url('/') }}/img/facebook-logo.png" alt="getnord facebook">
                        </a>
                    @endif

                    @if ( app()->getLocale() == 'es' )
                        <a href="https://www.facebook.com/Móviles-Robustos-Getnord-1780741445489150/" target="_blank">
                            <img src="{{ url('/') }}/img/facebook-logo.png" alt="getnord facebook">
                        </a>
                    @endif

                    @if ( app()->getLocale() == 'it' )
                        <a href="https://www.facebook.com/Getnord-Italia-1509340049384657" target="_blank">
                            <img src="{{ url('/') }}/img/facebook-logo.png" alt="getnord facebook">
                        </a>
                    @endif

                    @if ( app()->getLocale() == 'de' )
                        <a href="https://www.facebook.com/Getnord-Outdoor-Handys-1779613288931903/" target="_blank">
                            <img src="{{ url('/') }}/img/facebook-logo.png" alt="getnord facebook">
                        </a>
                    @endif

                    @if ( app()->getLocale() == 'fr' )
                        <a href="https://www.facebook.com/Téléphones-étanches-Getnord-402801463243716/" target="_blank">
                            <img src="{{ url('/') }}/img/facebook-logo.png" alt="getnord facebook">
                        </a>
                    @endif

                    @if ( app()->getLocale() == 'lt' )
                        <a href="https://www.facebook.com/Getnord-atsparūs-telefonai-1567572783520802/" target="_blank">
                            <img src="{{ url('/') }}/img/facebook-logo.png" alt="getnord facebook">
                        </a>
                    @endif

                    @if ( app()->getLocale() == 'nl' )
                        <a href="https://www.facebook.com/GetnordBenelux/" target="_blank">
                            <img src="{{ url('/') }}/img/facebook-logo.png" alt="getnord facebook">
                        </a>
                    @endif

                    @if ( app()->getLocale() == 'pl' )
                        <a href="https://www.facebook.com/Getnord-odporne-telefony-1199674723387722/" target="_blank">
                            <img src="{{ url('/') }}/img/facebook-logo.png" alt="getnord facebook">
                        </a>
                    @endif
                </div>
                <div class="link">
                    <a href="https://www.instagram.com/getnord/" target="_blank">
                        <img src="{{ url('/') }}/img/instagram-logo.png" alt="getnord instagram">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>