<div class="dropdown-item item-2 item-1 item-6">
    <div class="item-6-container">
        <div class="desc-section">
            <h3>@lang('lock.item-6-top-title')</h3>
            <p>@lang('lock.item-6-top-text')</p>
        </div>
        <div class="tab-1">
            <div class="tab-left">
                @php $i = 0 @endphp
                @foreach(__('lock.item-6-tab-1') as $item)
                    <div class="tab-item @if($i === 0) active @endif" data-idx="{{$i}}">
                        <div class="tab-item--header">
                            <h4>
                                {!! $item['title'] !!}
                            </h4>
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <div class="tab-item--message">
                            <p>
                                {!! $item['text'] !!}
                            </p>
                        </div>
                    </div>
                    @php $i++ @endphp
                @endforeach

            </div>
            <div class="tab-right">
                <div class="tab-images">
                    @php $j = 0 @endphp
                    @foreach(__('lock.item-6-tab-1') as $item)
                        <div class="tab-image @if($j === 0) active @endif">
                            <img src="{{asset('img/lock').'/'.$item['img']}}" alt="">
                        </div>
                        @php $j++ @endphp
                    @endforeach
                </div>
            </div>
        </div>
        <div class="desc-section">
            <h3>@lang('lock.item-6-middle-title')</h3>
            <p>@lang('lock.item-6-middle-text')</p>
        </div>
        <div class="tab-2">
            <div class="tab-content">
                @php $k = 0 @endphp
                @foreach(__('lock.item-6-tab-2') as $item)
                    <div class="tab-content--image @if($k === 0) active @endif">
                        <img src="{{asset('img/lock').'/'.$item['img']}}" alt="">
                    </div>
                    @php $k++ @endphp
                @endforeach
            </div>
            <div class="tab-2-header">
                @php $f = 0 @endphp
                @foreach(__('lock.item-6-tab-2') as $item)
                    <div class="tab-2-header--item @if($f === 0) active @endif" data-index="{{$f}}">
                        <h4>
                            {!! $item['title'] !!}
                        </h4>
                        <p>
                            {!! $item['text'] !!}
                        </p>
                    </div>
                    @php $f++ @endphp
                @endforeach
            </div>
        </div>

    </div>
    <div class="item-6-bottom">
        <div class="desc-section">
            <h3>@lang('lock.item-6-bottom-title')</h3>
            <p>@lang('lock.item-6-bottom-text')</p>
        </div>
        <img src="{{asset('img/lock/item-6-bottom.png')}}" alt="">
    </div>
</div>

