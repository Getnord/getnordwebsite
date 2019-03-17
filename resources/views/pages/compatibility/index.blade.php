@extends('layouts.app')

@section('content')
    {{-- The following section shows in US or CA locals --}}
    @if ($locale == 'us' || $locale == 'ca')
        <section>
            <div class="section_content compatibility_page">
                <div class="section_center">
                    <div class="section_heading">
                        <h2>
                            Phone compatibility in USA
                        </h2>
                    </div>
                    <div class="section_text">
                        <img src="{{ url('/') }}/img/canada_carriers.jpg" alt="">
                    </div>
                    <div class="section_heading">
                        <h2>
                            Phone compatibility in CANADA
                        </h2>
                    </div>
                    <div class="section_text">
                        <img src="{{ url('/') }}/img/usa_carriers.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
    @else
    
    {{-- The following section shows in non US or CA locals --}}
        <section>
            <div class="section_content compatibility_page">
                <div class="section_center">
                    <div class="row">
                        <div class="section_heading">
                        <h2>
                            United Kingdom
                        </h2>
                        </div>
                        <div class="section_text">
                            <img src="{{ url('/') }}/img/uk_operators.jpg" alt="">
                            <p>1pMobile    360Coms Telecom    365 Mobile    AfriMobile    Age UK My Phone    Airwave    Smart Mobile    AlwaysOnline Wireless    Anywhere Sim    Asda Mobile    Auracall Travel Talk    Axis Telecom    BT Mobile    BT Onephone (BTOP)    C4C Mobile    Call & Give    Champions    Mobile    CUniq    CMLink    CTExcel    Ctrl Mobile    Econet Mobile    Economy Mobile       Ecotalk    ETS Mobile    FreedomPop    Fonome Mobile    Gamma Telecom    Globalgig    HP    Mobile Connect   iD Mobile    JOi Telecom    Jump    KC Mobile    Lebara Mobile    Lycamobile    Meem Mobile    NordTelekom    Now PAYG    Our Telecom    Pebble Mobile Network    Plusnet Mobile    Rok Mobile    RWG Mobile    Sky Mobile    SMARTY    Superdrug Mobile    Talk Home Mobile    Talkmobile    TalkTalk Mobile    TalkXtra Mobile    Telecom Plus    Telfoni    Tesco Mobile    The People's Operator (TPO Mobile)    The Phone Co-op    Torica Mobile    Toggle Mobile    Truphone    Vectone Mobile    Virgin Mobile    Vivio    VOXI    White Mobile</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="section_heading">
                            <h2>
                                France
                            </h2>
                        </div>
                        <div class="section_text">
                            <img src="{{ url('/') }}/img/france_operators.jpg" alt="">
                            <p>Bell    CB Tel    Bazile Telecom    HB7 Telecom    Casino Mobile    Syma Mobile    U Mobile    Orange    Vivaction    Budget Mobile    Club Budget    Club Sérénité    Coriolis Télécom    Delight Mobile    La Poste Mobile    Réglo Mobile    Saint Hubert Mobile    Sim+    Vectone    Afone Mobile    FrenchConnection    Prixtel    Blu10    Alphalink    Futur Telecom    Keyyo    Legos13    LTI Telecom    Ti-Text    Lebara Mobile    Lycamobile    Netcom Group    SCT Telecom    Transatel    Auchan Telecom    Blancheporte Mobile    CIC Mobile    Crédit Mutuel Mobile    NRJ Mobile    Phenix Mobile    ANS-COM</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="section_heading">
                            <h2>
                                Deutschland
                            </h2>
                        </div>
                        <div class="section_text">
                            <img src="{{ url('/') }}/img/germany_operators.jpg" alt="">
                            <p>1&1 Internet    Aldi Talk mit Medionmobile    Ay Yildiz    BildMobil    Blau    callmobile    EasyMobile    Congstar    debitel-light    DeutschlandSIM    discoTEL    discoPLUS    Edeka smart    EXPRESSmobil    Fonic    freenetmobil    FYVE    GALERIAmobil    goood    hellomobil    ja! mobil    K-Classic Mobil    klarmobil    Lebara    Lidl Connect    maXXim    McSIM    M2M-mobil    NettoKOM    netzclub    Norma mobil    n-tv go!    Ortel    Otelo    Penny Mobil    PremiumSIM    Rossmann mobil    SimDiscount.de    simply    simquadrat     smartmobil.de    Tchibo Mobil    TELCAT mobil    WhatsApp SIM    winSim   Yourfone</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="section_heading">
                            <h2>
                                España
                            </h2>
                        </div>
                        <div class="section_text">
                            <img src="{{ url('/') }}/img/spain_operators.jpg" alt="">
                            <p>Simyo    Pirata Móvil    Carrefour Móvil     MovilDIA     Happy Móvil     Cable Móvil    Movi Data     MÁSmovil    Jazztel Móvil     Bankinter     Euphony     Talkout     MundiMóvil     XL MOVIL     Blau     Hablafácil     Hong Da     LlamaYa Móvil    Vozelia    Ocean's Network    ONO io    DIGI.Mobil    Barablu    Fonyou.com    ZeroMóvil   Amigophone    Vectone Móvil    Tu Móvil     Viva Mobile    Telecable    British Telecom    Lebara    Eroski Móvil     PepePhone    Hits Mobile     Midas Mobile    Ventaja Móvil     RACC Movil</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="section_heading">
                            <h2>
                                Italia
                            </h2>
                        </div>
                        <div class="section_text">
                            <img src="{{ url('/') }}/img/italy_operators.jpg" alt="">
                            <p>CoopVoce     UNOMobile     PosteMobile     A-Mobile     Conad INSIM     Enelmia     ERG Mobile     Fastweb     Lycamobile IT     MTV Mobile     PosteMobile     Tiscali Mobile</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="section_heading">
                            <h2>
                                Belgique
                            </h2>
                        </div>
                        <div class="section_text">
                            <img src="{{ url('/') }}/img/belgium_operators.jpg" alt="">
                            <p>Mobisud    Dommel    RSCA Mobile    Scarlet Telecom    EDPnet Mobile    IP Nexia    PostMobile    Lycamobile    Numericable    Opticall    Plug Mobile    Red Bull MOBILE    SIMPLY    Tellink Mobile    Transatel    Phonethic    5/5 Telecom    VOOmobile    Aldi Talk    Ayyildiz     Allo RTL    Carrefour 1 Mobile     Cherry Telecom    CHIAMA     City Life    Devenez Mobile     Ello Mobile    ERGATEL    Fuzer Mobile 4    Fun Mobile    Happy Many    HBVL Mobile    Jim Mobile    Join Experience    Lebara Mobile    M1Call    Medion Mobile / Aldi Talk    Mobile Vikings    Mobile World    Mondial Telecom    NormAction    NRJ Mobile    Ortel Mobile    Primus Mobile    Ramaphone    RCSC Mobile    Simyo    Sud Press Mobile    Sun Mobile    Transatel    Zoniq</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="section_heading">
                            <h2>
                                Nederlands
                            </h2>
                        </div>
                        <div class="section_text">
                            <img src="{{ url('/') }}/img/netherlands_operators.jpg" alt="">
                            <p>88 Mobile    AH Mobiel    Aldi Talk    BEN    Bliep    BudgetPhone    Cargofone    Dean One    Deka Mobiel    Dirk Mobiel    Eilie    Expat Mobile    Fieber    Galaxy Business Networks    Helder Telecom    Hema Telefonie    Hollandsnieuwe    Intercity Technology    Jumbo Mobiel    KPN    Kruidvat Mobiel    Lebara    Lycamobile    Mobicross    Ortel Mobile    Raffel    Redworks    Robin Mobile    Simpel    Simyo    Skilje    Socia-Telecom   SOS Mobiel    T-Mobile   Tele2    Telesur    Telfort    Telpa Mobile    Toggle    Trendcall    Truphone    Vodafone    Voiceworks    Yes Telecom    Youfone</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="section_heading">
                            <h2>
                                Polska
                            </h2>
                        </div>
                        <div class="section_text">
                            <img src="{{ url('/') }}/img/poland_operators.jpg" alt="">
                            <p>8Cyfrowy Polsat    Netia    FM GROUP Mobile    Inea    Diallo    Vectra    TOYAmobilna    Lycamobile    Virgin Mobile    Sat Film    IZZI mobile    Klucz Mobile    Lajt Mobile   Truphone    Mobile Vikings    multiMOBILE    Sferia    Premium Mobile   nc+ MOBiLE    Moja GSM</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection