<section id="monitoring">
    <h2>@lang('active_track.monitoringTitle')</h2>

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
