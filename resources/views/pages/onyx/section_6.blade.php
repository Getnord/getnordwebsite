<section class="specs_section">
    <div class="page_center">
        <div class="section_header"><a id="specs_link" class="hover" href="javascript:void(0)"><p class="specs__title__small">{{ __('onyx.comparisonTitleSmall') }}</p><p class="specs__title__big">{{ __('onyx.comparisonTitleBig') }}</p>&emsp;<svg class="icon"><use id="specs_link_icon" xlink:href="{{ url('/') }}/img/icons.svg#icon_plus"></use></svg></a></div>
        
        <div class="specs" id="specs">
            <div class="row">
                <div class="specs__col specs__col--15"></div>
                <div class="specs__col specs__col--27">
                    <img src="{{ url('/')}}/img/onyx/phone_onyx.jpg" alt="" class="specs__phone">
                </div>
                <div class="specs__col specs__col--27">
                    <img src="{{ url('/')}}/img/lynx/phone_lynx.jpg" alt="" class="specs__phone">
                </div>
                <div class="specs__col specs__col--27">
                    <img src="{{ url('/')}}/img/walrus/phone_walrus.jpg" alt="" class="specs__phone">
                </div>
                <div class="specs__col specs__col--27">
                    <img src="{{ url('/')}}/img/leo/phone_leo.jpg" alt="" class="specs__phone">
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
                <div class="specs__col specs__col--27">
                    <p class="specs__spec-info">{{ __('onyx.comparisonIpRatingLeo') }}</p>
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
                <div class="specs__col specs__col--27">
                    <p class="specs__spec-info">{{ __('onyx.comparisonIpWaterproofLeo') }}</p>
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
                <div class="specs__col specs__col--27">
                    <p class="specs__spec-info">{{ __('onyx.comparisonIpTempLeo') }}</p>
                </div>
            </div>

            
        </div>
        <div class="specs--responsive" id="specs--responsive">
            <h2 class="specs--responsive__title">
                {{ __('onyx.getnordPhonesComparison') }}
            </h2>
            <div class="specs__dots"></div>
            <div class="specs__slider">
                <div class="specs--responsive__col" name="Onyx">
                    <img src="{{ url('/')}}/img/onyx/phone_onyx.jpg" alt="" class="specs__phone">
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                </div>
                <div class="specs--responsive__col"
                name="Lynx">
                    <img src="{{ url('/')}}/img/lynx/phone_lynx.jpg" alt="" class="specs__phone">
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                </div>
                <div class="specs--responsive__col"
                name="Walrus">
                    <img src="{{ url('/')}}/img/walrus/phone_walrus.jpg" alt="" class="specs__phone">
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                </div>
                <div class="specs--responsive__col"
                name="Leo">
                    <img src="{{ url('/')}}/img/leo/phone_leo.jpg" alt="" class="specs__phone">
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                    <div class="specs--responsive__row">
                        <p class="specs__spec">
                            {{ __('onyx.comparisonIpRating') }}
                        </p>
                        <p class="specs__info">
                            {{ __('onyx.comparisonIpRatingOnyx') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>