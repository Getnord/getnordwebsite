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
                    <a href="https://www.facebook.com/getnordinternational/" target="_blank">
                        <img src="{{ url('/') }}/img/facebook-logo.png" alt="getnord facebook">
                    </a>
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