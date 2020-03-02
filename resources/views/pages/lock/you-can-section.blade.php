<section id="you-can__section">
    <h3 class="you-can__title">@lang('lock.canTitle')</h3>

    <div class="section__container">
        <div class="can__item">
            <div class="can__item-top">
                <div class="can__item-text">
                    <p>@lang('lock.item-1')</p>
                    <button class="button_yellow show-button">
                        <svg class="icon icon--plus"><use class="specs_link_icon" xlink:href="{{ url('/') }}/img/icons.svg#icon_plus"></use></svg>
                        <svg class="icon icon--minus"><use class="specs_link_icon" xlink:href="{{ url('/') }}/img/icons.svg#icon_minus"></use></svg>
                        <span>@lang('lock.item-1-button')</span>
                    </button>
                </div>
                <img src="{{asset('img/mobile-app.png')}}" alt="">
            </div>
            <div class="can__item-description">
                @include('pages.lock.partials.item-1')
            </div>
        </div>
        <div class="can__item">
            <div class="can__item-top">
                <div class="can__item-text">
                    <p>@lang('lock.item-2')</p>
                    <button class="button_yellow show-button">
                        <svg class="icon icon--plus"><use class="specs_link_icon" xlink:href="{{ url('/') }}/img/icons.svg#icon_plus"></use></svg>
                        <svg class="icon icon--minus"><use class="specs_link_icon" xlink:href="{{ url('/') }}/img/icons.svg#icon_minus"></use></svg>
                        <span>@lang('lock.item-2-button')</span>
                    </button>
                </div>
                <img src="{{asset('img/remote-cast.png')}}" alt="">
            </div>
            <div class="can__item-description">
                @include('pages.lock.partials.item-2')
            </div>
        </div>
        <div class="can__item">
            <div class="can__item-top">
                <div class="can__item-text">
                    <p>@lang('lock.item-3')</p>
                    <button class="button_yellow show-button">
                        <svg class="icon icon--plus"><use class="specs_link_icon" xlink:href="{{ url('/') }}/img/icons.svg#icon_plus"></use></svg>
                        <svg class="icon icon--minus"><use class="specs_link_icon" xlink:href="{{ url('/') }}/img/icons.svg#icon_minus"></use></svg>
                        <span>@lang('lock.item-3-button')</span>
                    </button>
                </div>
                <img src="{{asset('img/automated-device.png')}}" alt="">
            </div>
            <div class="can__item-description">
                @include('pages.lock.partials.item-3')
            </div>
        </div>
        <div class="can__item">
            <div class="can__item-top">
                <div class="can__item-text">
                    <p>@lang('lock.item-4')</p>
                    <button class="button_yellow show-button">
                        <svg class="icon icon--plus"><use class="specs_link_icon" xlink:href="{{ url('/') }}/img/icons.svg#icon_plus"></use></svg>
                        <svg class="icon icon--minus"><use class="specs_link_icon" xlink:href="{{ url('/') }}/img/icons.svg#icon_minus"></use></svg>
                        <span>@lang('lock.item-4-button')</span>
                    </button>
                </div>
                <img src="{{asset('img/deepDive.png')}}" alt="">
            </div>
            <div class="can__item-description">
                @include('pages.lock.partials.item-4')
            </div>
        </div>
        <div class="can__item">
            <div class="can__item-top">
                <div class="can__item-text">
                    <p>@lang('lock.item-5')</p>
                    <button class="button_yellow show-button">
                        <svg class="icon icon--plus"><use class="specs_link_icon" xlink:href="{{ url('/') }}/img/icons.svg#icon_plus"></use></svg>
                        <svg class="icon icon--minus"><use class="specs_link_icon" xlink:href="{{ url('/') }}/img/icons.svg#icon_minus"></use></svg>
                        <span>@lang('lock.item-5-button')</span>
                    </button>
                </div>
                <img src="{{asset('img/fileDock.png')}}" alt="">
            </div>
            <div class="can__item-description">
                @include('pages.lock.partials.item-5')
            </div>
        </div>
        <div class="can__item">
            <div class="can__item-top">
                <div class="can__item-text">
                    <p>@lang('lock.item-6')</p>
                    <button class="button_yellow show-button">
                        <svg class="icon icon--plus"><use class="specs_link_icon" xlink:href="{{ url('/') }}/img/icons.svg#icon_plus"></use></svg>
                        <svg class="icon icon--minus"><use class="specs_link_icon" xlink:href="{{ url('/') }}/img/icons.svg#icon_minus"></use></svg>
                        <span>@lang('lock.item-6-button')</span>
                    </button>
                </div>
                <img src="{{asset('img/eva.png')}}" alt="">
            </div>
            <div class="can__item-description">
                @include('pages.lock.partials.item-6')
            </div>
        </div>
    </div>
</section>
