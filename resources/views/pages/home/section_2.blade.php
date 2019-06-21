<section class="product_section product_section--onyx" id="product_section">
    <div class="page_center">
        <div class="row anim">
            <div class="col_2_3_xl col_1_m">
                <figure class="section_figure anim3"><img alt="Product" src="{{ url('/') }}/img/product.jpg" /></figure>
            </div>
            <div class="col_1_3_xl col_1_m">
                <div class="section_content">
                    <div class="section_heading">All-rounder with variety of Wireless accessories, largest battery and strongest screen in the market</div>
                    <div class="section_text">
                        <ul>
                        <li>4.5'' 1.8mm Corning Gorilla Screen</li>
                        <li>6000mAh battery</li>
                        <li>Android 8.1 Oreo</li>
                        <li>Price <strong>{{ __('home.lynxPrice') }}</strong></li>
                        </ul>
                    </div>
                    <div class="section_form">
                        <buy-btn product-id="50" @buy-btn-clicked="buybtnclicked" :product-has-options="false" class="button button_yellow button--full-width">
                            {{ __('onyx.addToCart') }}
                        </buy-btn>
                        <p class="product_section--onyx_or-text">Or</p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product_section--onyx_stores">
                <h2>{{ __('onyx.maketPlacesTitle') }}</h2>
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