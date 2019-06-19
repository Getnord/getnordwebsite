<section class="specs_section">
    <div class="page_center">
        <div class="section_header"><a id="specs_link" class="hover" href="javascript:void(0)"><p class="specs__title__small">{{ __('onyx.comparisonTitleSmall') }}</p><p class="specs__title__big">{{ __('onyx.comparisonTitleBig') }}</p>&emsp;<svg class="icon"><use id="specs_link_icon" xlink:href="{{ url('/') }}/img/icons.svg#icon_plus"></use></svg></a></div>
        
         
        {{-- We need to show different specs phones depending on the locale --}}
        @if ( app()->getLocale() == 'us')
            <div class="specs" id="specs">
                <div class="row">
                    <div class="specs__col specs__col--15"></div>
                    @foreach ($phones as $phone_name)
                        @if (strtolower($phone_name) != 'walrus' AND strtolower($phone_name) != 'onyx')
                            <div class="specs__col specs__col--42">
                                <img src="{{ url('/') . '/img/' . strtolower($phone_name) .'/phone_'. strtolower($phone_name) . '.jpg'}}" alt="" class="specs__phone">
                            </div>    
                        @endif
                    @endforeach
                </div>
                @foreach ($specs_section_rows_names as $row)
                    {{-- Row --}}
                    <div class="row">
                        <div class="specs__col specs__col--15">
                            <p class="specs__spec">{{ __('specs.' . $row) }}</p>
                        </div>
                        @foreach ($phones as $phone_name)
                            @if (strtolower($phone_name) != 'walrus' AND strtolower($phone_name) != 'onyx')
                                <div class="specs__col specs__col--42">
                                    <p class="specs__spec-info">{{ __('specs.' . $row . $phone_name) }}</p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endforeach
                {{-- add to cart rows --}}
                <div class="row">
                    <div class="specs__col specs__col--no-border specs__col--15"></div>
                    <div class="specs__col  specs__col--no-border specs__col--42">
                        {{-- lynx --}}
                        <buy-btn product-id="50" @buy-btn-clicked="buybtnclicked" :product-has-options="false">
                            {{ __('onyx.addToCart') }}
                        </buy-btn>
                    </div>
                    <div class="specs__col specs__col--no-border specs__col--42">
                        {{-- leo --}}
                        <buy-btn product-id="68" @buy-btn-clicked="buybtnclicked" :product-has-options="false">
                            {{ __('onyx.addToCart') }}
                        </buy-btn>
                    </div>
                </div> 
            </div>
            <div class="specs--responsive" id="specs--responsive">
                <h2 class="specs--responsive__title">
                    {{ __('onyx.getnordPhonesComparison') }}
                </h2>
                <div class="specs__dots"></div>
                <div class="specs__slider">
                    @foreach ($phones as $phone_name)
                        @if (strtolower($phone_name) != 'onyx' AND strtolower($phone_name) != 'walrus')
                            < class="specs--responsive__col" name="{{ strtoupper($phone_name) }}">
                            <img src="{{ url('/') . '/img/' . strtolower($phone_name) .'/phone_'. strtolower($phone_name) . '.jpg'}}" alt="" class="specs__phone">
                            @foreach ($specs_section_rows_names as $row)
                                <div class="specs--responsive__row">
                                    <p class="specs__spec">
                                        {{ __('specs.' . $row ) }}
                                    </p>
                                    <p class="specs__info">
                                        {{ __('specs.' . $row . $phone_name) }}
                                    </p>
                                </div>
                            @endforeach
                            <div class="sepcs--responsive__row">
                                <div class="specs__info">
                                   @if (strtolower($phone_name) == 'lynx')
                                        <buy-btn product-id="50" @buy-btn-clicked="buybtnclicked" :product-has-options="false">
                                            {{ __('onyx.addToCart') }}
                                        </buy-btn>
                                    @endif
                                    @if (strtolower($phone_name) == 'onyx')
                                        <buy-btn product-id="67" @buy-btn-clicked="buybtnclicked" :product-has-options="false">
                                            {{ __('onyx.addToCart') }}
                                        </buy-btn>
                                    @endif
                                    @if (strtolower($phone_name) == 'walrus')
                                        <buy-btn product-id="69" @buy-btn-clicked="buybtnclicked" :product-has-options="false">
                                            {{ __('onyx.addToCart') }}
                                        </buy-btn>
                                    @endif
                                    @if (strtolower($phone_name) == 'leo')
                                        <buy-btn product-id="68" @buy-btn-clicked="buybtnclicked" :product-has-options="false">
                                            {{ __('onyx.addToCart') }}
                                        </buy-btn>
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @else
            <div class="specs" id="specs">
                <div class="row">
                    <div class="specs__col specs__col--15"></div>
                    @foreach ($phones as $phone_name)
                        <div class="specs__col specs__col--27">
                            <img src="{{ url('/') . '/img/' . strtolower($phone_name) .'/phone_'. strtolower($phone_name) . '.jpg'}}" alt="" class="specs__phone">
                        </div>
                    @endforeach
                </div>

                @foreach ($specs_section_rows_names as $row)
                    {{-- Row --}}
                    <div class="row">
                        <div class="specs__col specs__col--15">
                            <p class="specs__spec">{{ __('specs.' . $row) }}</p>
                        </div>
                        @foreach ($phones as $phone_name)
                            <div class="specs__col specs__col--27">
                                <p class="specs__spec-info">{{ __('specs.' . $row . $phone_name) }}</p>
                            </div>
                        @endforeach
                    </div>
                @endforeach
                    

                {{-- add to cart rows --}}
                <div class="row">
                    <div class="specs__col specs__col--no-border specs__col--15"></div>
                    @foreach ($phones as $phone_name)
                        <div class="specs__col  specs__col--no-border specs__col--27">
                            @if (strtolower($phone_name) == 'lynx')
                                <buy-btn product-id="50" @buy-btn-clicked="buybtnclicked" :product-has-options="false">
                                    {{ __('onyx.addToCart') }}
                                </buy-btn>
                            @endif
                            @if (strtolower($phone_name) == 'onyx')
                                <buy-btn product-id="67" @buy-btn-clicked="buybtnclicked" :product-has-options="false">
                                    {{ __('onyx.addToCart') }}
                                </buy-btn>
                            @endif
                            @if (strtolower($phone_name) == 'walrus')
                                <buy-btn product-id="69" @buy-btn-clicked="buybtnclicked" :product-has-options="false">
                                    {{ __('onyx.addToCart') }}
                                </buy-btn>
                            @endif
                            @if (strtolower($phone_name) == 'leo')
                                <buy-btn product-id="68" @buy-btn-clicked="buybtnclicked" :product-has-options="false">
                                    {{ __('onyx.addToCart') }}
                                </buy-btn>
                            @endif
                        </div>
                    @endforeach
                </div>   
            </div>
            <div class="specs--responsive" id="specs--responsive">
                <h2 class="specs--responsive__title">
                    {{ __('onyx.getnordPhonesComparison') }}
                </h2>
                <div class="specs__dots"></div>
                <div class="specs__slider">
                    @foreach ($phones as $phone_name)
                        <div class="specs--responsive__col" name="{{ strtoupper($phone_name) }}">
                        <img src="{{ url('/') . '/img/' . strtolower($phone_name) .'/phone_'. strtolower($phone_name) . '.jpg'}}" alt="" class="specs__phone">
                        @foreach ($specs_section_rows_names as $row)
                            <div class="specs--responsive__row">
                                <p class="specs__spec">
                                    {{ __('specs.' . $row ) }}
                                </p>
                                <p class="specs__info">
                                    {{ __('specs.' . $row . $phone_name) }}
                                </p>
                            </div>
                        @endforeach
                            <div class="sepcs--responsive__row">
                                <div class="specs__info">
                                    @if (strtolower($phone_name) == 'lynx')
                                        <buy-btn product-id="50" @buy-btn-clicked="buybtnclicked" :product-has-options="false">
                                            {{ __('onyx.addToCart') }}
                                        </buy-btn>
                                    @endif
                                    @if (strtolower($phone_name) == 'onyx')
                                        <buy-btn product-id="67" @buy-btn-clicked="buybtnclicked" :product-has-options="false">
                                            {{ __('onyx.addToCart') }}
                                        </buy-btn>
                                    @endif
                                    @if (strtolower($phone_name) == 'walrus')
                                        <buy-btn product-id="69" @buy-btn-clicked="buybtnclicked" :product-has-options="false">
                                            {{ __('onyx.addToCart') }}
                                        </buy-btn>
                                    @endif
                                    @if (strtolower($phone_name) == 'leo')
                                        <buy-btn product-id="68" @buy-btn-clicked="buybtnclicked" :product-has-options="false">
                                            {{ __('onyx.addToCart') }}
                                        </buy-btn>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> 
        @endif
    </div>
</section>