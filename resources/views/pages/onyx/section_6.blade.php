<section class="specs_section">
    <div class="page_center">
        <div class="section_header"><a id="specs_link" class="hover" href="javascript:void(0)">View full technical specs&emsp;<svg class="icon"><use id="specs_link_icon" xlink:href="{{ url('/') }}/img/icons.svg#icon_plus"></use></svg></a></div>
        <div class="specs" id="specs">
            <div class="row">
                <div class="specs__col specs__col--15"></div>
                <div class="specs__col specs__col--27">
                    <img src="{{ url('/')}}/img/onyx/phone_onyx.jpg" alt="" class="specs__phone">
                </div>
                <div class="specs__col specs__col--27">
                    <img src="{{ url('/')}}/img/onyx/phone_lynx.jpg" alt="" class="specs__phone">
                </div>
                <div class="specs__col specs__col--27">
                    <img src="{{ url('/')}}/img/onyx/phone_walrus.jpg" alt="" class="specs__phone">
                </div>
            </div>

            {{-- Ip rating --}}
            <div class="row">
                <div class="specs__col specs__col--15">
                    <p class="specs__spec">{{ __('onyx.comparisonIpRating') }}</p>
                </div>
                <div class="specs__col specs__col--27">
                    <p class="specs__spec-info">{{ __('onyx.comparisonIpRatingOnyx') }}</p>
                </div>
                <div class="specs__col specs__col--27">
                    <p class="specs__spec-info">{{ __('onyx.comparisonIpRatingLynx') }}</p>
                </div>
                <div class="specs__col specs__col--27">
                    <p class="specs__spec-info">{{ __('onyx.comparisonIpRatingWalrus') }}</p>
                </div>
            </div>
            
            {{-- waterproof --}}
            <div class="row">
                <div class="specs__col specs__col--15">
                    <p class="specs__spec">{{ __('onyx.comparisonIpWaterproof') }}</p>
                </div>
                <div class="specs__col specs__col--27">
                    <p class="specs__spec-info">{{ __('onyx.comparisonIpWaterproofOnyx') }}</p>
                </div>
                <div class="specs__col specs__col--27">
                    <p class="specs__spec-info">{{ __('onyx.comparisonIpWaterproofLynx') }}</p>
                </div>
                <div class="specs__col specs__col--27">
                    <p class="specs__spec-info">{{ __('onyx.comparisonIpWaterproofWalrus') }}</p>
                </div>
            </div>

            {{-- Temperature rang --}}
            <div class="row">
                <div class="specs__col specs__col--15">
                    <p class="specs__spec">{{ __('onyx.comparisonIpTemp') }}</p>
                </div>
                <div class="specs__col specs__col--27">
                    <p class="specs__spec-info">{{ __('onyx.comparisonIpTempOnyx') }}</p>
                </div>
                <div class="specs__col specs__col--27">
                    <p class="specs__spec-info">{{ __('onyx.comparisonIpTempLynx') }}</p>
                </div>
                <div class="specs__col specs__col--27">
                    <p class="specs__spec-info">{{ __('onyx.comparisonIpTempWalrus') }}</p>
                </div>
            </div>

            
        </div>
        <div class="specs--responsive" id="specs--responsive">
            <h1>test</h1>
            <h1>test</h1>
            <h1>test</h1>
            <h1>test</h1>
        </div>
    </div>
</section>