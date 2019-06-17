<section class="specs_section">
    <div class="page_center">
        <div class="section_header"><a id="specs_link" class="hover" href="javascript:void(0)"><p class="specs__title__small">{{ __('onyx.comparisonTitleSmall') }}</p><p class="specs__title__big">{{ __('onyx.comparisonTitleBig') }}</p>&emsp;<svg class="icon"><use id="specs_link_icon" xlink:href="{{ url('/') }}/img/icons.svg#icon_plus"></use></svg></a></div>
        
        <div class="specs" id="specs">
            <div class="row">
                <div class="specs__col specs__col--15"></div>
                @foreach ($phones as $phone_name)
                    <div class="specs__col specs__col--42">
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
                        <div class="specs__col specs__col--42">
                            <p class="specs__spec-info">{{ __('specs.' . $row . $phone_name) }}</p>
                        </div>
                    @endforeach
                    
                </div>
            @endforeach
                
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
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>