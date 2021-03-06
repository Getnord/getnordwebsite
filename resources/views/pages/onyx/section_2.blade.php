<section class="product_section product_section--onyx" id="product_section">
    <div class="page_center">
        <div class="row anim">
            <div class="col_2_3_xl col_1_m">
                {{-- add  anim3 class to section_figure in order to start the animations --}}
                <figure class="section_figure anim3"><img alt="Product"
                                                          src="{{ url('/') }}/img/onyx/getnord_onyx_all_sides.png"/>
                </figure>
            </div>
            <div class="col_1_3_xl col_1_m">
                <div class="section_content">
                    <div class="section_heading">{{ __('onyx.productTitle') }}</div>
                    <div class="section_text">
                        <ul>
                            <li>{{ __('onyx.productScreen') }}</li>
                            <li>{{ __('onyx.productBattery') }}</li>
                            <li>{{ __('onyx.productGlass') }}</li>
                            <li>{{ __('onyx.productPrice') }}{{-- <strong>{{ __('onyx.productPriceValue') }}</strong>--}}
                                <price product-id="67"></price>
                            </li>
                        </ul>
                    </div>
                    <div class="section_form">
                        <buy-btn product-id="67" @buy-btn-clicked="buybtnclicked" :product-has-options="false"
                                 class="button button_yellow button--full-width">
                            {{ __('onyx.addToCart') }}
                        </buy-btn>
                        <p class="product_section--onyx_or-text">{{ __('onyx.or') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product_section--onyx_stores">
                <h2>{{ __('onyx.marketPlaces') }}</h2>
                <div class="product_section--onyx_stores_list @if(app()->getLocale() === 'nl') stores_list-nl @endif">
                    @if(app()->getLocale() !== 'nl')
                        <a href="{{ __('onyx.onyxAmazonLink') }}" class="store_cta store_cta--amazon" target="_blank">
                            <img src="{{ url('/') }}/img/amazon.png" alt="">
                        </a>
                        <a href="{{ __('onyx.onyxEbayLink') }}" class="store_cta store_cta--ebay" target="_blank">
                            <img src="{{ url('/') }}/img/ebay.png" alt="">
                        </a>
                    @endif
                    @if(app()->getLocale() === 'de')
                        <a href="{{ __('leo.leoConradLink') }}" class="store_cta store_cta--ebay" target="_blank">
                            <img src="{{ url('/') }}/img/conrad_logo.png" alt="">
                        </a>
                    @endif
                    @if(app()->getLocale() === 'fr')
                        <a href="{{ __('home.bolLink') }}" class="store_cta store_cta--bol logo_img" target="_blank">
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

                </div>
            </div>
        </div>
    </div>
</section>
