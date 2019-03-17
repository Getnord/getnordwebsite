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
                    <div class="social_icons">
                        <a href="https://www.facebook.com/getnordinternational/" target="_blank"><img src="{{ url('/') }}/img/facebook.png" alt=""></a>
                        <a href="https://twitter.com/getnord" target="_blank"><img src="{{ url('/') }}/img/twitter.png" alt=""></a>
                        <a href="https://www.instagram.com/getnord/" target="_blank"><img src="{{ url('/') }}/img/instagram.png" alt=""></a>
                        <a href="https://www.pinterest.com/getnord/getnord-phones/" target="_blank"><img src="{{ url('/') }}/img/pinterest.png" alt=""></a>
                        <a href="https://plus.google.com/108396757180962407946" target="_blank"><img src="{{ url('/') }}/img/google-plus.png" alt=""></a>
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
                    <h3>Are you unhappy? </h3>
                    <p>Our friendly and professional support team work hard to put a smile back on your face. Just let us know what are you worried about. Here are the ways how you can reach us:</p>
                </div> 
            </div>
            <div class="row">
                <div class="col_1">
                    <p>-<a href="#contact_form">Click here</a>, send us a message and we will get in touch with you as soon as possible</p>
                    <p>-If your phone is defected, apply for repair using this <a href="http://rma.getnord.com/" target="_blank">online form</a>. The team will process the form and send a courier for pickup your phone. For in-warranty repairs we will return your phone fixed free of charge. For non-warranty cases we will get in touch with you and offer competitive repair price.</p>
                    <img src="{{ url('/') }}/img/flow.jpg" alt="" class="process-img">
                    <p>- Prefer texting or talking? Here are both ways to reach us:</p>
                    <ul>
                        <li><p>call us +1 (xxx) xxx-xxxx</p></li>
                        <li><p>use online chat</p></li>
                    </ul>
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
                    <h3>Interested?</h3>
                    <p>Didn’t find in this website what you were searching for? Yes, Google knows everything, but please give us a chance to answer your question too!</p>
                </div> 
            </div>
            <div class="row">
                <h3>Contact us:</h3>
            </div>
            <div class="row">
                <form id="contact_form" class="section_form" action="{{ action('ContactFormController')}}" method="POST">
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
                                <label class="form_label" for="name">Name*</label>
                            </div>
                            <input type="text" class="textbox" maxlength="100" name="name" placeholder="Your name" /></div>
                        </div>
                        <div class="form_row clearfix">
                            <div class="form_col col_1 bbox">
                            <div class="label_wrapper">
                                <label class="form_label" for="email">Email*</label>
                            </div>
                            <input type="text" class="textbox" maxlength="100" name="email" placeholder="Your email address" /></div>
                        </div>
                        <div class="form_row clearfix">
                            <div class="form_col clearfix">
                                <div class="label_wrapper">
                                    <label class="form_label"  for="subject">Subject*</label>
                                </div>
                                <input type="text" class="textbox" maxlength="100" name="subject" placeholder="Your subject" />
                            </div>
                        </div>
                        <!-- this field is user to tell the php script what mailchimp list to use -->
                        <input type="hidden" name="mail_list" value="list_id_us">
                        <div class="form_row clearfix">
                            <div class="form_col col_1 bbox">
                            <div class="label_wrapper">
                                <label class="form_label" for="message">Message*</label>
                            </div>
                            <textarea class="textarea" name="message" placeholder="Your message"></textarea></div>
                        </div>
                        <div class="form_row clearfix">
                            <div class="form_col col_1 bbox"><button type="button" id="send_button" class="button">Send Now</button></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="divider_line">
                <img src="{{ url('/') }}/img/horizontal-line.png" alt="">
            </div>
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
        </div>
    </section>
@endsection