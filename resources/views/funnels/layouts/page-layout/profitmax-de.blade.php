@section('head')
    {!! $page->appendAsset(url('/css/profitmax-de/reset.css')) !!}
    {!! $page->appendAsset(url('/css/profitmax-de/font-awesome.min.css')) !!}
    {!! $page->appendAsset(url('/css/profitmax-de/bootstrap.min.css')) !!}
    {!! "<link href='http://fonts.googleapis.com/css?family=Exo:500italic' rel='stylesheet' type='text/css'>" !!}
    {!! "<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900,300italic,700italic,900italic,300italic' rel='stylesheet' type='text/css'>" !!}
    {!! "<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700,400italic' rel='stylesheet' type='text/css'>" !!}
    {!! $page->appendAsset(url('/css/profitmax-de/style.css')) !!}
    {!! $page->appendAsset(url('/css/profitmax-de/custom.css')) !!}
    {!! $page->appendAsset(url('/css/profitmax-de/custom1.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax-de/bootstrap.min.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax-de/scripts-11.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax-de/script.js')) !!}
@append

@section('page-layout')
    <div id="popup" class="exit_popup" style="display: none;">
        <div class="exit_popup_overlay" ></div>
        <div class="popup_inner">
            <div class="popup_content">
                <div class="popup_content_inner">
                    <div class="title">
                        ACHTUNG!
                    </div>
                    <div class="description">
                        <span>DOWNLOADEN SIE</span>  Geld-Lawinen System welches unsere User benutzt haben um  <span>€2.1 Millionen einkommen in den letzten 90 Tagen zu genieren!</span>
                    </div>

                    <div class="popup_form" id="popform">
                        <div class="form-group">
                            <label for="" class="control-label"></label>
                            <input type="text" name="email" placeholder="Geben Sie Ihre Email-Adresse ein" id="email-pop" class="form-control" value=""/>
                        </div>
                        <div class="buttons">
                            <button type="submit" class="button" id="submit-pop">SOFORTIGEN ZUGRIFF</button>
                        </div>
                    </div>

                    <div class="for_free">
                        <span>Kein Kreditkarte. Kein PayPal. 100% kostenlos!</span>
                    </div>
                    <a class="close_button" style="" onclick="$('#popup').css('display','none');mousebottom = 0;setTimeout(function(){pu=1;},5000);"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="count left copies" style="width:290px;right:150px;">
        <div class="value" id="copies">38</div>
        <div class="desc">
            Gratis Exemplare erhältlich
        </div>
    </div>

    <div class="count right member_earn" style="width:290px;right:150px;">
        <img src="/img/profitmax-de/people1.png" alt="" id="member_img"/>

        <div class="desc">
            <div class="name"><span id="name">Levi G.</span> Gerade gemacht:</div>
            <div class="value">
                $<span id="money">253.89</span>
            </div>
        </div>
    </div>

    <div id="wrapper">
        <div id="header">
            <div class="header_inner">
                <div class="header_content">
                    <div id="logo"><a href="#"></a></div>

                    <div class="header_slogan">
                        <div class="trim_spaces">
                            <div class="scalable">
                                <div class="header_slogan_inner">
                                    <div>Verdienen Sie <span >$1,161</span> zusätzlich pro Tag</div>
                                    <div>durch "My Cash Avalanche System" - <span>kostenlos</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="container" >
            <div class="section section_video">
                <div class="section_container">
                    <div class="video_wrapper">
                        <div class="video_title">
                            <div class="trim_spaces">
                                <div class="scalable">
                                    <div class="scalable">
                                        <span id="watchers">1,693</span> Menschen in <b>Germany</b> schauen sich genau jetzt dieses video an
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video">
                                @include('funnels.layouts._partials._video',  ['w'=>'100%', 'h'=>'100%'])
                        </div>
                    </div>
                </div>
            </div>


            <div class="section section_lp_reg_form">
                <div class="section_container">
                    <div class="section_title">
                        Verdienen Sie noch heute! <span>100%-ig  kostenlos!</span>
                    </div>


                    <div id="main-page-form">
                    {!! Form::open(['url' => url('postEmailForm'.'/'.session('local')->code), 'method'=>'post']) !!}
                        <input type="hidden" name="pageId" value="{{ $page->id }}">
                            <div class="form-group">
                                @if($page->switches->showEmailField)
                                    <input type="text" name="email" id="email" class="form-control" value="" placeholder="Geben Sie Ihre Email-Adresse ein"/>
                                @endif
                            </div>
                            <div class="buttons">
                                <button type="submit" class="button">SOFORTIGEN ZUGRIFF</button>
                            </div>
                    {!! Form::close() !!}
                    </div>
                    <div class="images">
                        <img src="/img/profitmax-de/payment.png" alt=""/>
                        <img src="/img/profitmax-de/verified.png" alt=""/>
                        <img src="/img/profitmax-de/safe.png" alt=""/>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="footer">
        <div class="footer_content">
            <div class="footer_note">
                <p>Wichtiger Risiko Hinweis: Das Handeln von Binären Optionen kann neben hohen Gewinnen auch ein Risiko darstellen, sowie den teilweisen oder vollständigen Verlust Ihres monetären Einsatzes. Dies sollte unerfahren Anleger wissen. Wir empfehlen daher dringend, dass Sie unsere Allgemeinen Geschäftsbedingungen und unseren Haftungsausschluss vor jeder Geldanlage lesen. Kunden müssen in ihrem Wohnsitzland prüfen ob eine Kapitalertragssteuer anfällt.</p>

                <p>Es ist illegal, U.S. Amerikanischen Staatsbürgern dabei zu helfen mit Rohstoffen zu handeln, auch wenn es sich nur um die Vorhersage von Optionen handelt, sofern sie kein CFTC registrierter Händler sind oder gesetzlich befugt sind. </p>
            </div>
        </div>
    </div>
    <div id="footer_nav">
        <ul class="footer_nav">
            <li><a class="outyes" href="#">Haftungsausschluss</a></li>
            <li><a class="outyes" href="#">Allgemeine Geschäftsbedingungen</a></li>
            <li><a class="outyes" href="#">Datenschutzbestimmungen</a></li>
            <li><a class="outyes" href="#">Partnerprogramm</a></li>
            <li><a class="outyes" href="#">Support</a></li>
        </ul>
    </div>
@endsection