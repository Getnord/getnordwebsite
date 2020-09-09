<section class="product_section product_section--onyx" id="product_section">
    <div class="page_center">
        <div class="row anim">
            <div class="col_2_3_xl col_1_m">
                <figure class="section_figure anim3"><img alt="Product" src="{{ url('/') }}/img/product.jpg"/></figure>
            </div>
            <div class="col_1_3_xl col_1_m">
                <div class="section_content">
                    <div class="section_heading">{{ __('home.productTitle') }}</div>
                    <div class="section_text">
                        <ul>
                            <li>{{ __('home.productScreen') }}</li>
                            <li>{{ __('home.productBattery') }}</li>
                            <li>{{ __('home.productSoftware') }}</li>
                            <li>{{ __('home.productPrice') }} {{--<strong>{{ __('home.productPriceValue') }}</strong>--}}
                                <price product-id="50"></price>
                            </li>
                        </ul>
                    </div>
                    <div class="section_form">
                        <buy-btn product-id="50" @buy-btn-clicked="buybtnclicked" :product-has-options="false"
                                 class="button button_yellow button--full-width">
                            {{ __('home.addToCart') }}
                        </buy-btn>

                        <p class="product_section--onyx_or-text">{{ __('home.or') }}</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="product_section--onyx_stores">
                <h2>{{ __('home.marketPlaces') }}</h2>
                <div class="product_section--onyx_stores_list @if(app()->getLocale() === 'nl') stores_list-nl @endif">
                    @if(app()->getLocale() !== 'us')
                        @if(app()->getLocale() !== 'nl')
                            <a href="{{ __('home.amazonLink') }}" class="store_cta store_cta--amazon" target="_blank">
                                <img src="{{ url('/') }}/img/amazon.png" alt="">
                            </a>
                            <a href="{{ __('leo.leoEbayLink') }}" class="store_cta store_cta--ebay" target="_blank">
                                <img src="{{ url('/') }}/img/ebay.png" alt="">
                            </a>
                        @endif
                        @if(app()->getLocale() === 'de')
                            <a href="{{ __('leo.leoConradLink') }}" class="store_cta store_cta--ebay" target="_blank">
                                <img src="{{ url('/') }}/img/conrad_logo.png" alt="">
                            </a>
                        @endif
                        @if(app()->getLocale() === 'fr')
                            <a href="{{ __('home.bolLink') }}" class="store_cta store_cta--bol logo_img"
                               target="_blank">
                                <img src="{{ url('/') }}/img/bol_logo.png" alt="">
                            </a>
                            <a href="{{ __('home.back2BuzzLink') }}" class="store_cta store_cta--ebay logo_img"
                               target="_blank">
                                <img src="{{ url('/') }}/img/back2buzz_logo.png">
                            </a>
                        @endif
                        @if(app()->getLocale() === 'nl')
                            <a href="{{ __('home.bolLink') }}" class="store_cta  logo_img" target="_blank">
                                <img src="{{ url('/') }}/img/bol_logo.png" alt="">
                            </a>
                            <a href="{{ __('home.trendmarqLink') }}" class="store_cta store_cta--ebay logo_img"
                               target="_blank">
                                <img src="{{ url('/') }}/img/trendmarq_logo.png" alt="">
                            </a>
                        @endif
                    @else
                        <a href="{{ __('home.amazonLink') }}" class="store_cta store_cta_us" target="_blank">
                            <img src="{{ url('/') }}/img/lynx/phone_lynx.jpg" alt="">
                        </a>
                        <a href="{{ __('leo.leoAmazonLink') }}" class="store_cta store_cta_right store_cta_us" target="_blank">
                            <img src="{{ url('/') }}/img/leo/phone_leo.jpg" alt="">
                        </a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>
