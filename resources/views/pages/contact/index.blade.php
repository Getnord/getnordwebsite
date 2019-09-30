@extends('layouts.app')

@section('content')
    <section class="section_contact">
        <div class="page_center">
            <div class="row">
                <div class="section_text section_welcome">
                    <p>{{ __('contact.welcome') }}</p>
                </div>
            </div>
            <div class="divider_line">
                <img src="{{ url('/') }}/img/horizontal-line.png" alt="">
            </div>
            <div class="row">
                <div class="col_1_4_xl col_1_m image_wrapper">
                    <img src="{{ url('/') }}/img/getnord_sun.jpg" alt="">
                </div>
                <div class="col_2_3_xl col_1_s">
                    <h3>{{ __('contact.question_happy') }}</h3>
                    <p>{{ __('contact.text_happy') }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col_1">
                    <p>-{{ __('contact.enjoy_phone') }}</p>
                    <p>-{{ __('contact.social_networks') }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col_1">
                    <div class="social_icons footer__social__links">
                        {{--<a href="https://www.facebook.com/getnordinternational/" target="_blank"><img
                                src="{{ url('/') }}/img/facebook.png" alt=""></a>
                        <a href="https://twitter.com/getnord" target="_blank"><img src="{{ url('/') }}/img/twitter.png"
                                                                                   alt=""></a>
                        <a href="https://www.instagram.com/getnord/" target="_blank"><img
                                src="{{ url('/') }}/img/instagram.png" alt=""></a>
                        <a href="https://www.pinterest.com/getnord/getnord-phones/" target="_blank"><img
                                src="{{ url('/') }}/img/pinterest.png" alt=""></a>
                        <a href="https://plus.google.com/108396757180962407946" target="_blank"><img
                                src="{{ url('/') }}/img/google-plus.png" alt=""></a>--}}
                        <a href="{{ __('footer.youtube')}}" class="footer__social__links__link--yt" target="_blank">
                            <svg class="icon">
                                <use xlink:href="{{ url('/') }}/img/icons.svg#icon_yt"></use>
                            </svg>
                        </a>

                        <a href="{{ __('footer.facebook')}}" class="footer__social__links__link--fb" target="_blank">
                            <svg class="icon">
                                <use xlink:href="{{ url('/') }}/img/icons.svg#icon_fb"></use>
                            </svg>
                        </a>

                        <a href="{{ __('footer.instagram')}}" class="footer__social__links__link--in" target="_blank">
                            <svg class="icon">
                                <use xlink:href="{{ url('/') }}/img/icons.svg#icon_in"></use>
                            </svg>
                        </a>

                        <a href="{{ __('footer.pinterest')}}" class="footer__social__links__link--pt" target="_blank">
                            <svg class="icon">
                                <use xlink:href="{{ url('/') }}/img/icons.svg#icon_pt"></use>
                            </svg>
                        </a>

                        <a href="{{ __('footer.twitter')}}" class="footer__social__links__link--tw" target="_blank">
                            <svg class="icon">
                                <use xlink:href="{{ url('/') }}/img/icons.svg#icon_tw"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="divider_line">
                <img src="{{ url('/') }}/img/horizontal-line.png" alt="">
            </div>
            <div class="row">
                <div class="col_1_4_xl col_1_m image_wrapper">
                    <img src="{{ url('/') }}/img/getnord_raining.jpg" alt="">
                </div>
                <div class="col_2_3_xl col_1_s">
                    <h3>{{ __('contact.test_unhappy')}}</h3>
                    <p>{{ __('contact.text_unhappy')}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col_1">
                    <p>{!!  __('contact.click_here') !!}</p>
                    <p>{!!  __('contact.rmaLinkText') !!}</p>
                    <img src="{{ url('/') }}/img/flow.jpg" alt="" class="process-img">
                    {{--@if (app()->getLocale() == 'us')
                        <p>- Prefer texting or talking? Here are both ways to reach us:</p>
                        <ul>
                            <li><p>call us (888) 303-7271</p></li>
                        </ul>
                    @endif--}}
                </div>
            </div>
            <div class="divider_line">
                <img src="{{ url('/') }}/img/horizontal-line.png" alt="">
            </div>
            <div class="row">
                <div class="col_1_4_xl col_1_m image_wrapper">
                    <img src="{{ url('/') }}/img/getnord_questions.jpg" alt="">
                </div>
                <div class="col_2_3_xl col_1_s">
                    <h3>{{ __('contact.question_interested')}}</h3>
                    <p>{{ __('contact.interested_text')}}</p>
                </div>
            </div>
            <div class="row">
                <h3>{{ __('contact.contact_us')}}</h3>
            </div>
            <div class="row">
                <form id="contact_form" class="section_form" action="{{ action('ContactFormController')}}"
                      method="POST">
                    @csrf

                    <div class="form_result hidden"></div>
                    <div class="form_error hidden"></div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ( count($errors) > 0 )
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger w-100">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success w-100">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger w-100">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="form_data">
                        <div class="form_row clearfix">
                            <div class="form_col col_1 bbox">
                                <div class="label_wrapper">
                                    <label class="form_label" for="name">{{ __('contact.form_name')}}*</label>
                                </div>
                                <input type="text" class="textbox" maxlength="100" name="name"
                                       placeholder="{{ __('contact.form_name_placeholder')}}"/>
                            </div>
                        </div>
                        <div class="form_row clearfix">
                            <div class="form_col col_1 bbox">
                                <div class="label_wrapper">
                                    <label class="form_label" for="email">{{ __('contact.form_email')}}*</label>
                                </div>
                                <input type="text" class="textbox" maxlength="100" name="email"
                                       placeholder="{{ __('contact.form_email_placeholder')}}"/></div>
                        </div>
                        <div class="form_row clearfix">
                            <div class="form_col clearfix">
                                <div class="label_wrapper">
                                    <label class="form_label" for="subject">{{ __('contact.form_subject')}}*</label>
                                </div>
                                <input type="text" class="textbox" maxlength="100" name="subject"
                                       placeholder="{{ __('contact.form_subject_placeholder')}}"/>
                            </div>
                        </div>
                        <!-- this field is user to tell the php script what mailchimp list to use -->
                        <input type="hidden" name="mail_list" value="list_id_us">
                        <div class="form_row clearfix">
                            <div class="form_col col_1 bbox">
                                <div class="label_wrapper">
                                    <label class="form_label" for="message">{{ __('contact.form_message')}}*</label>
                                </div>
                                <textarea class="textarea" name="message"
                                          placeholder="{{ __('contact.form_message_placeholder')}}"></textarea></div>
                        </div>
                        <div class="form_row clearfix">
                            <div class="g-recaptcha" data-sitekey="{{env('RECAPTCHA_KEY')}}"></div>
                            <div class="form_col col_1 bbox">
                                <button type="button" id="send_button" class="button g-recaptcha"
                                        data-sitekey="6LfeHx4UAAAAAAKUx5rO5nfKMtc9-syDTdFLftnm"
                                        data-callback="onSubmit">{{ __('contact.form_button_text')}}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="divider_line">
                <img src="{{ url('/') }}/img/horizontal-line.png" alt="">
            </div>
            {{-- @if (app()->getLocale() == 'us')
                 <div class="row">
                     <div class="col_1_4_xl col_1_m image_wrapper">
                         <img src="{{ url('/') }}/img/icons8-location-500.png" alt="">
                     </div>
                     <div class="col_2_3_xl col_1_s">
                         <h3>Our address</h3>
                         <ul>
                             <li>GETNORD TECHNOLOGIES</li>
                             <li>62 Main St., </li>
                             <li>Van Buren, </li>
                             <li>ME 04785</li>
                             <li>USA</li>
                         </ul>
                     </div>
                 </div>
             @endif--}}
        </div>
    </section>
@endsection
