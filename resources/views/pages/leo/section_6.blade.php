<div class="camera">
    <section class="getnord_leo--technology mount_section camera_section">
        <div class="camera_top"
             style="background: url({{asset('img/outstanding_camera.png')}}) center no-repeat;background-size: cover">
            <div class="page_center" style="padding: 0">

                <div class="section_heading">{{ __('leo.leoCameraTitle') }}</div>
                <div class="section_text">
                    <p>{{ __('leo.leoCameraText') }}</p>
                </div>
                <div class="section_text anim ">
                    <div class="leo_features anim1 delay2 ">
                        <img src="{{asset('/img/camera.svg')}}" alt="">
                        <p>{!! __('leo.leoCameraIconText') !!}</p>
                    </div>
                    <div class="leo_features anim1 delay4 ">
                        <img src="{{asset('/img/led_flash.svg')}}" alt="">
                        <p>{!! __('leo.leoLedFlashText') !!}</p>
                    </div>
                    <div class="leo_features anim1 delay6 ">
                        <img src="{{asset('/img/autofocus.svg')}}" alt="">
                        <p>{!! __('leo.leoFocusText') !!}</p>
                    </div>
                    <div class="leo_features anim1 delay8 ">
                        <img src="{{asset('/img/full_hg.svg')}}" alt="">
                        <p>{!! __('leo.leoVideoText') !!}</p>
                    </div>

                </div>
            </div>

            <div class="camera_image">
                <img src="{{asset('img/outstanding_camera_block.png')}}" alt="">
            </div>

        </div>
        <div class="lightbox_section">
            @foreach($images as $image)
                <a href="{{url(app()->getLocale().'/'.'leo').'/'.$image}}" target="_blank"><img
                        src="{{asset('img/leo/camera/thumb').'/'.$image.'.png'}}" alt=""></a>
            @endforeach
        </div>
        <div class="camera_images">
            <div class="image_text">
                <p>{!! __('leo.leoCameraImagesText') !!}</p>
            </div>
        </div>


    </section>
</div>
