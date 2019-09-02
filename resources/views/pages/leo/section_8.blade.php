<section class="scratch_section battery_info_section" style="position: relative">
    <div class="cols">

        <div class="col_2_xl scratch_section_col--right" style="background: #232323 !important;">
            <div class="section_content">
                <img src="{{ url('/img/leo/battery.png') }}" alt="" class="leo_battery">
            </div>

        </div>
        <video autoplay loop muted playsinline class="scratch_img section_video" inline>
            <source src="{{ url('/') }}/img/girl_phone.mp4" type="video/mp4">
        </video>
    </div>
    <div class="scratch_section_col--right" style="width: 100%;text-align: center">
        <div class="section_content">
            <div class="battery_info">
                <div class="section_heading">{!!  __('leo.batteryTitle')  !!}</div>
                <div class="info_content">
                    <div class="info_item">
                        <img src="{{ url('/img/battery.svg') }}" alt="">
                        <p>{!!  __('leo.batteryMah')  !!}</p>
                    </div>
                    <div class="info_item">
                        <p class="sub_heading">{!!  __('leo.batteryEnvironment')  !!}</p>
                        <div class="info_points">
                            <div>
                                <p>{!!  __('leo.batteryContinous')  !!}</p>
                            </div>
                            <div>
                                <p>{!!  __('leo.batteryShort')  !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
