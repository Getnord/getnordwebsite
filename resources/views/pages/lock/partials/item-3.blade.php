<div class="dropdown-item item-3">
    <div class="item-list">
        @foreach(__('lock.item-1-desc') as $item)
            <div class="single-item">
                <div class="item-header">
                    <img src="{{asset('img/lock').'/'.$item['image']}}" alt="">
                    <p>{!! $item['title']!!}</p>
                </div>
                <div class="item-content">
                    <p>{!!$item['text']!!}</p>
                    <ul>
                        @foreach($item['list'] as $list)
                            <li>{!!$list!!}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach

    </div>

</div>
