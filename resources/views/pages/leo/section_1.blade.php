<section class="intro_section intro_section--leo intro_section--onyx" >
    <video autoplay loop muted playsinline class="section_video" inline>
        <source src="{{ url('/') }}/img/leo_video.mp4" type="video/mp4">
    </video>
    <div class="section_content">
        <div class="section_center">
            <div class="section_heading">{!!  __('leo.heroPhoneName')  !!}<br /><p>{!!  __('leo.heroPhoneTitle')  !!}</p></div>
            <div class="section_form">
                <a href="#product_section" class="button button_yellow">{{ __('leo.heroFindOutMore') }}</a>
            </div>
        </div>
        <div class="section_phone">
            <img src="{{asset('img/leo/phone_leo_hero.png')}}" alt="">
        </div>
    </div>

</section>
{{--
<section id="banner">
    <div class="banner__video">
        <video autoplay="autoplay" loop="loop" muted="muted" playsinline="">
            <source src="{{ url('/') }}/img/leo_video.mp4" type="video/mp4">
        </video>
    </div>
    <div class="banner__info">
        <div class="container">
            <div class="row">
                <div class="col-md-6 banner__text">
                    <h1 class="main_text">
                        {!!  __('leo.heroPhoneTitle')  !!}
                    </h1>

                    <button class="btn btn-yellow mt-lg-5 btn-yellow--lg"><span>{{ __('leo.heroFindOutMore') }}</span></button>
                </div>
                <div class="col-md-6 banner__image">
                    <img src="{{asset('img/leo/phone_leo_hero.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
--}}
