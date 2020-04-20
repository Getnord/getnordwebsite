<section id="monitoring" class="track-software">
    <h2 class="section-title">@lang('active_track.softwareTitle')</h2>
    <p class="section-subtitle">@lang('active_track.softwareSubtitle')</p>

    <div class="monitoring__items">
        @foreach( __('active_track.monitoringItems') as $item)
            <div class="monitoring__item">
                <div class="item__img">
                    <img src="{{asset('/img/track').'/'.$item['img']}}" alt="">
                </div>
                <div class="item__text">
                    <p>{!! $item['text'] !!}</p>
                    @if(isset($item['subItems']))
                        <div class="subitems">
                            <div class="subitem">
                                <img src="{{asset('/img/track/ebs-2.svg')}}" alt="">
                                <p>{!! $item['subItem1Text'] !!}</p>
                            </div>
                            <div class="subitem">
                                <img src="{{asset('/img/track/ebs-1.svg')}}" alt="">
                                <p>{!! $item['subItem2Text'] !!}</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach

    </div>
</section>
