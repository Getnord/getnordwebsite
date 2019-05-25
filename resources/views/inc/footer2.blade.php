<section class="footer_section footer" id="footer">
    <div class="footer--gray">
        <div class="page_center">
            <div class="footer__instagram">
                <h1>Lorem ipsum dolor sit amet</h1>
            </div>
            <div class="footer__social">
                <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                <div class="footer__social__links">

                    <a href="#" class="footer__social__links__link--yt">
                        <svg class="icon"><use xlink:href="{{ url('/') }}/img/icons.svg#icon_yt"></use></svg>
                    </a>

                    <a href="#" class="footer__social__links__link--fb">
                        <svg class="icon"><use xlink:href="{{ url('/') }}/img/icons.svg#icon_fb"></use></svg>
                    </a>

                    <a href="#" class="footer__social__links__link--in">
                        <svg class="icon"><use xlink:href="{{ url('/') }}/img/icons.svg#icon_in"></use></svg>
                    </a>

                    <a href="#" class="footer__social__links__link--pt">
                        <svg class="icon"><use xlink:href="{{ url('/') }}/img/icons.svg#icon_pt"></use></svg>
                    </a>

                    <a href="#" class="footer__social__links__link--tw">
                        <svg class="icon"><use xlink:href="{{ url('/') }}/img/icons.svg#icon_tw"></use></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer--black">
        <div class="page_center">
            <div class="footer__info">
                <div class="row">
                    <div class="col_3_xl col_1_xs footer__info__links">
                        <a href="{{ route('shipping', ['locale' => app()->getLocale()]) }}">Delivery and returns</a>
                        <a href="{{ route('warranty', ['locale' => app()->getLocale()]) }}">Warranty</a>
                        <a href="{{ route('legal', ['locale' => app()->getLocale()]) }}">Legal notes</a>
                        <a href="{{ route('cookies', ['locale' => app()->getLocale()]) }}">Privacy and cookies</a>
                    </div>
                    <div class="col_3_xl col_1_xs">
                        <h3>
                           Payments Methods 
                        </h3>
                        <div class="footer__info__payments">
                            <div class="footer__info__payments__payment">
                                <img src="{{ url('/') }}/img/Visa.svg" alt="">
                            </div>
                            <div class="footer__info__payments__payment">
                                <img src="{{ url('/') }}/img/Mastercard.svg" alt="">
                            </div>
                            <div class="footer__info__payments__payment">
                                <img src="{{ url('/') }}/img/Maestro.svg" alt="">
                            </div>
                            <div class="footer__info__payments__payment">
                                <img src="{{ url('/') }}/img/Paypal.svg" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col_3_xl col_1_xs footer__info__secure">
                        <h3>
                            Secure with
                        </h3>
                        <div class="footer__info__secure__braintree">
                            <img src="{{ url('/') }}/img/Braintree_logo.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>