<section class="product_section product_section--onyx" id="product_section">
    <div class="page_center">
        <div class="row anim">
            <div class="col_2_3_xl col_1_m">
                <figure class="section_figure anim3"><img alt="Product" src="{{ url('/') }}/img/product.jpg" /></figure>
            </div>
            <div class="col_1_3_xl col_1_m">
                <div class="section_content">
                    <div class="section_heading">{{ __('home.productTitle') }}</div>
                    <div class="section_text">
                        <ul>
                        <li>{{ __('home.productScreen') }}</li>
                        <li>{{ __('home.productBattery') }}</li>
                        <li>{{ __('home.productSoftware') }}</li>
                        <li>{{ __('home.productPrice') }} <strong>{{ __('home.productPriceValue') }}</strong></li>
                        </ul>
                    </div>
                    <div class="section_form">
                        <buy-btn product-id="50" @buy-btn-clicked="buybtnclicked" :product-has-options="false" class="button button_yellow button--full-width">
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
                <div class="product_section--onyx_stores_list">
                    <a href="{{ __('home.amazonLink') }}" class="store_cta store_cta--amazon" target="_blank">
                        <img src="{{ url('/') }}/img/amazon.png" alt="">
                    </a>
                    <a href="{{ __('home.ebayLink') }}" class="store_cta store_cta--ebay" target="_blank">
                        <img src="{{ url('/') }}/img/ebay.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>