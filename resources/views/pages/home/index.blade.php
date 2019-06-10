@extends('layouts.app')
@section('pageTitle', __('home.pageTitle'))
@section('content')  
    <section class="intro_section">
        <video autoplay loop muted playsinline class="section_video" inline>
            <source src="{{ url('/') }}/img/intro.mp4" type="video/mp4">
        </video>
        <div class="section_content">
            <div class="section_center">
                <div class="section_heading">GETNORD LYNX<br />{{ __('home.heroIntro') }}</div>
                <div class="section_form">
                    <a href="#product_section2" class="button button_blue">{{ __('home.heroBtn') }}</a>
                </div>
            </div>
        </div>
    </section>
    <section class="product_section" id="product_section">
        <div class="page_center">
            <div class="row anim">
                <div class="col_2_3_xl col_1_m">
                    <figure class="section_figure anim3"><img alt="Product" src="{{ url('/') }}/img/product.jpg" /></figure>
                </div>
                <div class="col_1_3_xl col_1_m">
                    <div class="section_content">
                        <div class="section_heading">All-rounder with variety of Wireless accessories, largest battery and strongest screen in the market</div>
                        <div class="section_text">
                            <ul>
                            <li>4.5'' 1.8mm Corning Gorilla Screen</li>
                            <li>6000mAh battery</li>
                            <li>Android 8.1 Oreo</li>
                            <li>Price <strong>$299</strong></li>
                            </ul>
                        </div>
                        <div class="section_form">
                            {{-- <button
                                class="snipcart-add-item "
                                data-item-id="Getnord lynx"
                                data-item-name="Getnord Lynx Smartphone"
                                data-item-url="https://lynx.getnord.com/"
                                data-item-price='{"usd": 299.00}'
                                data-item-image="{{ url('/') }}/img/Lynx_with_screen_cart.png"
                                data-item-description="Getnord Lynx Smartphone"
                                >Buy</button> --}}
                                <buy-btn product-id="50" @buy-btn-clicked="buybtnclicked" :product-has-options="true">
                                    Buy
                                </buy-btn>
                            @if (!( app()->getLocale() == 'lt' || app()->getLocale() == 'pl' ))
                                <p>Or</p>
                            @endif
                        </div>
                        <div class="section_text2">
                            @if (!(app()->getLocale() == 'lt' || app()->getLocale() == 'pl'))
                                <p>Shop at your favorite stores</p>
                            @endif
                        </div>
                        
                        @if (app()->getLocale() == 'us' || app()->getLocale() == 'ca')
                            <div class="section_cta">
                                <a href="https://www.amazon.com/dp/B07MMTFHBX" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/amazon.png" alt="">
                                </a>
                                <a href="https://www.amazon.com/dp/B07MMTFHBX" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/ebay.png" alt="">
                                </a>
                            </div>
                        @endif
                        @if (app()->getLocale() == 'uk')
                            <div class="section_cta">
                                <a href="https://www.amazon.co.uk/stores/page/8C405FAC-1B98-4B97-AA2F-EA7F87FB6FA7" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/amazon.png" alt="">
                                </a>
                                <a href="https://www.amazon.co.uk/stores/page/8C405FAC-1B98-4B97-AA2F-EA7F87FB6FA7" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/ebay.png" alt="">
                                </a>
                            </div>
                        @endif
                        @if (app()->getLocale() == 'fr')
                            <div class="section_cta">
                                <a href="https://www.amazon.fr/stores/node/3743971031" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/amazon.png" alt="">
                                </a>
                                <a href="https://ebay.us/oXQIHj" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/ebay.png" alt="">
                                </a>
                            </div>
                            <div class="section_cta">
                                <a href="https://www.bol.com/nl/p/getnord-lynx-robuuste-telefoon-rugged-smartphone-solide-gsm-dual-sim-simlockvrij-waterproof-shockproof-ruggedized/9200000104427027/?country=NL&approved=true" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/Bol.com_logo.png" alt="">
                                </a>
                                <a href="https://www.cdiscount.com/bricolage/electricite/getnord-lynx-smartphone-4g-outdoor-double-sim-16-g/f-1661416-get0722512456525.html" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/Cdiscount-logo.png" alt="">
                                </a>
                            </div>
                        @endif
                        @if (app()->getLocale() == 'it')
                            <div class="section_cta">
                                <a href="https://www.amazon.it/stores/node/3724762031" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/amazon.png" alt="">
                                </a>
                                <a href="https://ebay.us/UIbe3S" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/ebay.png" alt="">
                                </a>
                            </div>
                        @endif
                        @if (app()->getLocale() == 'lt' || app()->getLocale() == 'pl')
                            
                        @endif
                        @if (app()->getLocale() == 'nl' )
                            <div class="section_cta">
                                <a href="https://www.bol.com/nl/p/getnord-lynx-robuuste-telefoon-rugged-smartphone-solide-gsm-dual-sim-simlockvrij-waterproof-shockproof-ruggedized/9200000104427027/?country=NL&approved=true" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/Bol.com_logo.png" alt="">
                                </a>
                            </div>
                        @endif
                        @if (app()->getLocale() == 'es')
                            <div class="section_cta">
                                <a href="https://www.amazon.es/stores/node/3736323031" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/amazon.png" alt="">
                                </a>
                                <a href="https://ebay.us/dPCydx" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/ebay.png" alt="">
                                </a>
                            </div>
                        @endif

                        {{-- We only want this link to show up in the us and ca page --}}
                        @if (app()->getLocale() == 'us' || app()->getLocale() == 'ca')
                            <div class="section_text2">
                                <a href="{{ route('compatibility', ['locale' => app()->getLocale()]) }}" style="text-decoration:none">*Check carrier compatibility</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery_section">
        <div class="section_header">Made For Work And Adventures</div>
        <div class="section_body clearfix anim">
            <div class="item col_3_xl col_2_m col_1_xs anim1 delay1">
                <figure class="item_figure"><img src="{{ url('/') }}/img/mil_std.jpg" alt="MIL-STD-810G" /></figure>
                <div class="item_content">
                    <div class="item_heading">MIL-STD-810G</div>
                    <div class="item_description">Toughest Military testing standards</div>
                </div>
            </div>
            <div class="item col_3_xl col_2_m col_1_xs anim1 delay2">
                <figure class="item_figure"><img src="{{ url('/') }}/img/waterproof.jpg" alt="WATERPROOF" /></figure>
                <div class="item_content">
                    <div class="item_heading">WATERPROOF</div>
                    <div class="item_description">IP68 rating. Submerged for 30 minutes in water of 2 meters deep.</div>
                </div>
            </div>
            <div class="item col_3_xl col_2_m col_1_xs anim1 delay3">
                <figure class="item_figure"><img src="{{ url('/') }}/img/shockproof.jpg" alt="SHOCKPROOF" /></figure>
                <div class="item_content">
                    <div class="item_heading">SHOCKPROOF</div>
                    <div class="item_description">Dual moulding technology housing made for withstanding seriuous abuse</div>
                </div>
            </div>
            <div class="item col_3_xl col_2_m col_1_xs anim1 delay4">
                <figure class="item_figure"><img src="{{ url('/') }}/img/dustproof.jpg" alt="DUSTPROOF" /></figure>
                <div class="item_content">
                    <div class="item_heading">DUSTPROOF</div>
                    <div class="item_description">IP68 rating. Completely repels dust of any particle size.</div>
                </div>
            </div>
            <div class="item col_3_xl col_2_m col_1_xs anim1 delay5">
                <figure class="item_figure"><img src="{{ url('/') }}/img/your_passion.jpg" alt="YOUR PASSION" /></figure>
                <div class="item_content">
                    <div class="item_heading">YOUR PASSION</div>
                    <div class="item_description">No longer requires you to leave your phone in safe place. Take it with you!</div>
                </div>
            </div>
            <div class="item col_3_xl col_2_m col_1_xs anim1 delay6">
                <figure class="item_figure"><img src="{{ url('/') }}/img/running.jpg" alt="RUNNING" /></figure>
                <div class="item_content">
                    <div class="item_heading">RUNNING</div>
                    <div class="item_description">Simple and convienient. Getnord LYNX Chest Mount.</div>
                </div>
            </div>
            <div class="item col_3_xl col_2_m col_1_xs anim1 delay7">
                <figure class="item_figure"><img src="{{ url('/') }}/img/adventures.jpg" alt="ADVENTURES" /></figure>
                <div class="item_content">
                    <div class="item_heading">ADVENTURES</div>
                    <div class="item_description">Rugged phone. Tough like you. Take it with you.</div>
                </div>
            </div>
            <div class="item col_3_xl col_2_m col_1_xs anim1 delay8">
                <figure class="item_figure"><img src="{{ url('/') }}/img/ram_mounts.jpg" alt="RAM MOUNTS" /></figure>
                <div class="item_content">
                    <div class="item_heading">RAM MOUNTS</div>
                    <div class="item_description">Compatible with the largest range of vehicle mounts made by RAM, USA.</div>
                </div>
            </div>
            <div class="item col_3_xl col_2_m col_1_xs anim1 delay9">
                <figure class="item_figure"><img src="{{ url('/') }}/img/cycling.jpg" alt="CYCLING" /></figure>
                <div class="item_content">
                    <div class="item_heading">CYCLING</div>
                    <div class="item_description">A cradle without charging function for any type of bikes</div>
                </div>
            </div>
            <div class="item col_3_xl col_2_m col_1_xs anim1 delay10">
                <figure class="item_figure"><img src="{{ url('/') }}/img/dashcam.jpg" alt="DASHCAM MODE" /></figure>
                <div class="item_content">
                    <div class="item_heading">DASHCAM MODE</div>
                    <div class="item_description">Mount your phone horizontally. Record your trip while driving.</div>
                </div>
            </div>
            <div class="item col_3_xl col_2_m col_1_xs anim1 delay11">
                <figure class="item_figure"><img src="{{ url('/') }}/img/tough_job.jpg" alt="TOUGH JOB" /></figure>
                <div class="item_content">
                    <div class="item_heading">TOUGH JOB</div>
                    <div class="item_description">Communicate. Do not worry. It will survive.</div>
                </div>
            </div>
            <div class="item col_3_xl col_2_m col_1_xs anim1 delay12">
                <figure class="item_figure"><img src="{{ url('/') }}/img/navigation.jpg" alt="NAVIGATION" /></figure>
                <div class="item_content">
                    <div class="item_heading">NAVIGATION</div>
                    <div class="item_description">Place your phone in front of you. Just snap it on. No cables required.</div>
                </div>
            </div>
        </div>
    </section>
    <section class="mount_section">
        <div class="page_center">
            <video autoplay loop muted playsinline  class="section_video" inline>
                <source src="{{ url('/') }}/img/mount.mp4" type="video/mp4">
            </video>
            <div class="section_heading">Charging Mount Concept</div>
            <div class="section_text">
            Wireless charging cradle with magnetic lock. Patented RAM ball and socket system.<br />
            Tough and Waterproof. Can be used for offroad, ATV and UTV.
            </div>
            <div class="section_icons anim"><span class="icon_qi anim1 delay2"></span><span class="icon_compatible anim1 delay3"></span><span class="icon_magnetic anim1 delay4"></span></div>
        </div>
    </section>
    <section id="ram_section" class="ram_section">
        <div id="ram_section_bg" class="section_bg">
            <div class="section_icons_ram">
                <img src="{{ url('/') }}/img/icon_ram.png" alt="">
                <img src="{{ url('/') }}/img/icon_usa.png" alt="">
            </div>
        </div>
        <div class="page_center">
            <div class="section_content">
                <div class="section_heading">Partnership with RAM Mounts</div>
                <div class="section_icons anim"><span class="icon_ram anim1 delay2"></span><span class="icon_usa anim1 delay3"></span></div>
                <div class="section_text">We do what we do best and we partnership with those who know best. RAM is the revolutionary universal ball and socket mounting SYSTEM that allows you to mount practically anything anywhere. RAM's family of more than 900 interchangeable accessories will provide you solutions to your most challenging mounting problems. Recognized and accepted by the U.S. Patent Office, RAM is the only universal ball-and-socket SYSTEM that will hold tremendous amounts of weight in high vibration applications for military, commercial and private use. <strong>Just RAM It!</strong></div>
            </div>
        </div>
    </section>
    <section class="screen_section">
        <div class="page_center anim">
            <figure class="section_figure anim4"><img alt="Screen" src="{{ url('/') }}/img/screen.jpg" /></figure>
            <div class="section_heading">Strongest Screen</div>
            <div class="section_text">
                Lynx has the thickest (<strong>1.8mm</strong>) hence the strongest screen in the market + Asahi Glass protector.<br />
                We don't believe in any special technology when it comes to the strength of a breakable screen -<br />
                <strong>thickness is essential</strong>.<br />
            </div>
            <div class="section_chart">
                <img src="{{ url('/') }}/img/screen_chart.png" alt="Screen chart" />
            </div>
        </div>
    </section>
    <section id="battery_section" class="battery_section">
        <div id="battery_section_bg" class="section_bg"></div>
        <div class="page_center">
            <div class="section_content">
                <div class="section_heading">Largest Battery</div>
                <div class="section_text"><strong>6000mAh</strong> - the battery capacity that will give many hours of battery live even when doing the most energy consuming tasks. Will last for days without charging when used normally and provides weeks of standby connectivity.</div>
                <figure class="section_figure anim"><img alt="Battery" src="{{ url('/') }}/img/battery1.png" /><img class="overlay anim2 delay2" src="{{ url('/') }}/img/battery2.png" /></figure>
            </div>
        </div>
    </section>
    <section class="specs_section">
        <div class="page_center">
            <div class="section_header"><a id="specs_link" class="hover" href="javascript:void(0)">View full technical specs&emsp;<svg class="icon"><use id="specs_link_icon" xlink:href="{{ url('/') }}/img/icons.svg#icon_plus"></use></svg></a></div>
            <div id="specs" class="section_body clearfix">
                <div class="item col_2_xl col_1_s">
                    <div class="specs_table">
                        <div class="table_row clearfix">
                            <div class="table_col1">IP Rating</div>
                            <div class="table_col2">IP68</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Waterproof</div>
                            <div class="table_col2">Tested in water of 2 meters depth for 30 minutes, according to IP68 requirements</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Shockproof</div>
                            <div class="table_col2">Tested in water of 2 meters depth for 30 minutes, according to IP68 requirements</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Dustproof</div>
                            <div class="table_col2">Tested in a small dust particles chamber, according to IP68 and MIL-STD-810G requirements. Completely repels dust of any size.</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Temperature range</div>
                            <div class="table_col2">Tested in a low temperature chamber, a high temperature chamber, and for temperature shock, according MIL-STD-810G requirements. Temperature range from -25˚C to +55˚C.</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Color</div>
                            <div class="table_col2">Black with red inserts</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Housing</div>
                            <div class="table_col2">Dual mould technology of hard polycarbonate and rubberised soft plastic with stainless steel inserts</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Display Type</div>
                            <div class="table_col2">Super bright 4.5” TN Type TFT, 480 x 854</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Display Technology</div>
                            <div class="table_col2">G-F-F</div>
                        </div>

                        <div class="table_row clearfix">
                            <div class="table_col1">Display Colors</div>
                            <div class="table_col2">Full sRGB standard</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Display Material</div>
                            <div class="table_col2">Specal Heavy-duty 1.8mm Glass made by Corning Gorilla™</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Display Protection</div>
                            <div class="table_col2">Asahi Glass 9H renewable scratch protector</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Height</div>
                            <div class="table_col2">155mm (6.10 inches)</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Width</div>
                            <div class="table_col2">81mm (3.19 inches)</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Thickness</div>
                            <div class="table_col2">19mm (0.75 inches)</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Weight</div>
                            <div class="table_col2">280g (9.88 ounces)</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Weight</div>
                            <div class="table_col2">280g (9.88 ounces)</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">SIM Cards</div>
                            <div class="table_col2">Two SIM cards operating in Dual-Standby technology</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">2G Frequencies</div>
                            <div class="table_col2">850/900/1800/1900 Mhz (Worldwide)</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">3G Frequencies (North America)</div>
                            <div class="table_col2">B2 (1900PCS), B5(850), B4 (1700/2100AWS)</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">3G Frequencies (Europe and Australia)</div>
                            <div class="table_col2">UMTS 900, UMTS 2100, UMTS 850</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">4G Frquencies (North America)</div>
                            <div class="table_col2">B2, B4, B5, B12, B17, B30, B66, B71</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">4G Frquencies (Europe and Australia)</div>
                            <div class="table_col2">B1, B3, B7, B8, B20, B28</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Weight</div>
                            <div class="table_col2">280g (9.88 ounces)</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Wireless Charging </div>
                            <div class="table_col2">Qi Standard, 1.4A</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Languages</div>
                            <div class="table_col2">55 languages</div>
                        </div>
                    </div>
                </div>
                <div class="item col_2_xl col_1_s">
                    <div class="specs_table clearfix">
                        <div class="table_row clearfix">
                            <div class="table_col1">Chipset</div>
                            <div class="table_col2">MT6737 QuadCore 1.1</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Graphical Processing Unit</div>
                            <div class="table_col2">MALI-T720</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">ROM Flash</div>
                            <div class="table_col2">16 GB</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">RAM Memory</div>
                            <div class="table_col2">2 GB</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Extended Memory</div>
                            <div class="table_col2">up to 128GB MicroSD</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Platform/OS</div>
                            <div class="table_col2">Android 8.1 Oreo</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Battery Type</div>
                            <div class="table_col2">Non removable Lithium Ion</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Capacity</div>
                            <div class="table_col2">6000mAh</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Talk Time</div>
                            <div class="table_col2">Up to 40hours</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Standby Time</div>
                            <div class="table_col2">Up to 50days</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">WiFi</div>
                            <div class="table_col2">802.11b/g/n</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Maximum Data speed Download</div>
                            <div class="table_col2">up to 150mbps</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Maximum Data speed Upload</div>
                            <div class="table_col2">up to 50mbps</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Bluetooth</div>
                            <div class="table_col2">v4.1</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">USB Connector</div>
                            <div class="table_col2">Type-C OTG</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">WiFi Hotspot</div>
                            <div class="table_col2">Yes. Sharing the internet with other devices</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">NFC</div>
                            <div class="table_col2">YES</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Navigation</div>
                            <div class="table_col2">A-GPS and Glonass GPS sensors</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Integrated Compass Sensor</div>
                            <div class="table_col2">YES</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Integrated Accelerometer</div>
                            <div class="table_col2">YES</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Proximity Sensor</div>
                            <div class="table_col2">YES</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Ambient Light Sensor</div>
                            <div class="table_col2">YES</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Front Camera</div>
                            <div class="table_col2">5 Mpx resolution front camera optimized for Video calls and selfies</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Rear Camera</div>
                            <div class="table_col2">8 Mpx rear camera with CMOS sensor</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Aperture</div>
                            <div class="table_col2">f/2.0</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Max Picture Size</div>
                            <div class="table_col2">3264 x 2448 px</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Max Video Format</div>
                            <div class="table_col2">HD Video 720p</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Geotagging</div>
                            <div class="table_col2">YES</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Red Eye Reductio Filter</div>
                            <div class="table_col2">YES</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Color Filters</div>
                            <div class="table_col2">YES</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Scene efects</div>
                            <div class="table_col2">YES</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Improved Face Detection</div>
                            <div class="table_col2">YES</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">HDR Mode</div>
                            <div class="table_col2">Images only</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Auto LED Flash</div>
                            <div class="table_col2">YES</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Burst mode</div>
                            <div class="table_col2">YES</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Slo-Mo Video</div>
                            <div class="table_col2">YES</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Electronic Video Stabilisation</div>
                            <div class="table_col2">YES</div>
                        </div>
                        <div class="table_row clearfix">
                            <div class="table_col1">Time-Lapse Video</div>
                            <div class="table_col2">YES</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="charging_section">
        <div class="page_center">
            <div class="row anim">
                <div class="col_2_xl col_1_s">
                    <div class="section_content">
                        <div class="section_heading">Wireless charging</div>
                        <div class="section_text">
                            Charge the phone wirelessly. Qi certified. You can buy geuine Getnord charging pad in accessories or use any Qi certified charging device with <strong>no less than 2A output</strong>.
                        </div>
                        <div class="section_icons anim"><span class="icon_qi anim1 delay2"></span></div>
                    </div>
                </div>
                <div class="col_2_xl col_1_s">
                    <figure class="section_figure anim5"><img alt="Charging" src="{{ url('/') }}/img/charging.jpg" /></figure>
                </div>
            </div>
        </div>
    </section>
    <section class="video_section">
        <div class="section_center">
            <video id="designed_video" class="section_video" controls="controls">
                <source src="{{ url('/') }}/img/designed.mp4" type="video/mp4">
            </video>
            <div id="designed_overlay" class="section_overlay">
                <div class="overlay_text">Designed In Barcelona</div>
            </div>
        </div>
    </section>
        
    <section class="product_section product_section2" id="product_section2">
        <div class="page_center">
            <div class="row anim">
                <div class="col_1_3_xl col_1_m">
                    <div class="section_content section_info">
                        <div class="section_heading">GETNORD LYNX</div>
                        <div class="section_text">
                            <p>The "No-worries" Phone</p>
                        </div>
                        <div class="section_text">
                            <ul>
                                <li>4.5'' 1.8mm Corning Gorilla Screen</li>
                                <li>6000mAh battery</li>
                                <li>Wireless Charging</li>
                                <li>MIL-STD-810G</li>
                                <li>Android 8.1 Oreo</li>
                                <li>IP68</li>
                                <li>Waterproof</li>
                                <li>Dustproof</li>
                                <li>Shockproof</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col_1_3_xl col_1_m">
                    <div><h2>GET YOUR OWN</h2></div>
                    <figure class="section_figure anim3"><img alt="Product" src="{{ url('/') }}/img/Lynx_with_screen.png" /></figure>
                </div>
                <div class="col_1_3_xl col_1_m call_to_actions">
                    <div class="section_content">
                        <div class="section_text2">
                            <p>Buy From Getnord</p>
                        </div>
                        <div class="section_cta">
<!--						    <a href="#" class="store_cta getnord_store"><img src="./{{ url('/') }}/img/getnord_logo.png" alt=""></a>-->
                            <button
                                class="snipcart-add-item getnord_btn"
                                data-item-id="Getnord lynx"
                                data-item-name="Getnord Lynx Smartphone"
                                data-item-url="https://lynx.getnord.com/"
                                data-item-price='{"usd": 299.00}'
                                data-item-image="{{ url('/') }}/img/Lynx_with_screen_cart.png"
                                data-item-description="Getnord Lynx Smartphone"
                                >
                                    <img src="{{ url('/') }}/img/getnord_logo.png" alt="">
                            </button>
                        </div>
                        @if (!( app()->getLocale() == 'lt' || app()->getLocale() == 'pl' ))
                            <div class="section_text2">
                                <p>Shop at your favorite stores</p>
                            </div>
                        @endif
                        @if (app()->getLocale() == 'us' || app()->getLocale() == 'ca')
                            <div class="section_cta">
                                <a href="https://www.amazon.com/dp/B07MMTFHBX" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/amazon.png" alt="">
                                </a>
                                <a href="https://www.amazon.com/dp/B07MMTFHBX" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/ebay.png" alt="">
                                </a>
                            </div>
                        @endif
                        @if (app()->getLocale() == 'uk')
                            <div class="section_cta">
                                <a href="https://www.amazon.co.uk/stores/page/8C405FAC-1B98-4B97-AA2F-EA7F87FB6FA7" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/amazon.png" alt="">
                                </a>
                                <a href="https://www.amazon.co.uk/stores/page/8C405FAC-1B98-4B97-AA2F-EA7F87FB6FA7" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/ebay.png" alt="">
                                </a>
                            </div>
                        @endif
                        @if (app()->getLocale() == 'fr')
                            <div class="section_cta">
                                <a href="https://www.amazon.fr/stores/node/3743971031" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/amazon.png" alt="">
                                </a>
                                <a href="https://ebay.us/oXQIHj" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/ebay.png" alt="">
                                </a>
                            </div>
                            <div class="section_cta">
                                <a href="https://www.bol.com/nl/p/getnord-lynx-robuuste-telefoon-rugged-smartphone-solide-gsm-dual-sim-simlockvrij-waterproof-shockproof-ruggedized/9200000104427027/?country=NL&approved=true" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/Bol.com_logo.png" alt="">
                                </a>
                                <a href="https://www.cdiscount.com/bricolage/electricite/getnord-lynx-smartphone-4g-outdoor-double-sim-16-g/f-1661416-get0722512456525.html" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/Cdiscount-logo.png" alt="">
                                </a>
                            </div>
                        @endif
                        @if (app()->getLocale() == 'it')
                            <div class="section_cta">
                                <a href="https://www.amazon.it/stores/node/3724762031" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/amazon.png" alt="">
                                </a>
                                <a href="https://ebay.us/UIbe3S" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/ebay.png" alt="">
                                </a>
                            </div>
                        @endif
                        @if (app()->getLocale() == 'lt' || app()->getLocale() == 'pl')
                            
                        @endif
                        @if (app()->getLocale() == 'nl' )
                            <div class="section_cta">
                                <a href="https://www.bol.com/nl/p/getnord-lynx-robuuste-telefoon-rugged-smartphone-solide-gsm-dual-sim-simlockvrij-waterproof-shockproof-ruggedized/9200000104427027/?country=NL&approved=true" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/Bol.com_logo.png" alt="">
                                </a>
                            </div>
                        @endif
                        @if (app()->getLocale() == 'es')
                            <div class="section_cta">
                                <a href="https://www.amazon.es/stores/node/3736323031" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/amazon.png" alt="">
                                </a>
                                <a href="https://ebay.us/dPCydx" class="store_cta" target="_blank">
                                    <img src="{{ url('/') }}/img/ebay.png" alt="">
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection('content')
