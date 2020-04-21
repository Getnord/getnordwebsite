<section id="monitoring" class="track-software">
    <div class="section_heading">
        <h2 class="section-title">@lang('active_track.softwareTitle')</h2>
        <p class="section-subtitle">@lang('active_track.softwareSubtitle')</p>
    </div>

    <div class="monitoring__items bordered">
        <div class="software_items-header">
            <img src="{{asset('/img/track').'/'.__('active_track.softwareActiveViewImg')}}" alt="">
            <h3>{{__('active_track.softwareActiveViewTitle')}}</h3>
        </div>
        @foreach( __('active_track.softwareActiveViewItems') as $item)
            <div class="monitoring__item">
                <div class="item__img">
                    <img src="{{asset('/img/track').'/'.$item['img']}}" alt="">
                </div>
                <div class="item__text">
                    <p>{!! $item['text'] !!}</p>
                </div>
            </div>
        @endforeach

    </div>
    <div class="monitoring__items bordered">
        <div class="software_items-header">
            <img src="{{asset('/img/track').'/'.__('active_track.serverImg')}}" alt="">
            <h3>{{__('active_track.serverTitle')}}</h3>
        </div>
        @foreach( __('active_track.serverItems') as $item)
            <div class="monitoring__item">
                <div class="item__img">
                    <img src="{{asset('/img/track').'/'.$item['img']}}" alt="">
                </div>
                <div class="item__text">
                    <p>{!! $item['text'] !!}</p>
                </div>
            </div>
        @endforeach

    </div>
    <div class="monitoring__items">
        <div class="software_items-header">
            <img src="{{asset('/img/track').'/'.__('active_track.visionImg')}}" alt="">
            <h3>{{__('active_track.visionTitle')}}</h3>
        </div>
        @foreach( __('active_track.visionItems') as $item)
            <div class="monitoring__item">
                <div class="item__img">
                    <img src="{{asset('/img/track').'/'.$item['img']}}" alt="">
                </div>
                <div class="item__text">
                    <p>{!! $item['text'] !!}</p>
                </div>
            </div>
        @endforeach

    </div>
</section>
