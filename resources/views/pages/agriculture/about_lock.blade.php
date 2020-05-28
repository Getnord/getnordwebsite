<section id="about-lock">
    <div class="section__img">
        <img src="{{asset('img/track/about-lock.png')}}" alt="">
    </div>
    <div class="section__text">
        <div class="text__wrapper">
            <h3>@lang('active_track.lockTitle')</h3>
            <p>@lang('active_track.lockText')</p>
            <a href="{{route('lock',app()->getLocale())}}" class="button--yellow" type="button">@lang('active_track.lockButtonText')</a>
        </div>
    </div>
</section>
