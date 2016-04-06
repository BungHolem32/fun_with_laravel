@section('head')
    {!! $page->appendAsset(url('/css/profitmax-de/reset.css')) !!}
    {!! $page->appendAsset(url('/css/profitmax-de/font-awesome.min.css')) !!}
    {!! $page->appendAsset(url('/css/profitmax-de/bootstrap.min.css')) !!}
    {!! "<link href='http://fonts.googleapis.com/css?family=Exo:500italic' rel='stylesheet' type='text/css'>" !!}
    {!! "<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900,300italic,700italic,900italic,300italic' rel='stylesheet' type='text/css'>" !!}
    {!! "<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700,400italic' rel='stylesheet' type='text/css'>" !!}
    {!! $page->appendAsset(url('/css/profitmax-de/lightbox.min.css')) !!}
    {!! $page->appendAsset(url('/css/profitmax-de/form.css')) !!}
    {!! $page->appendAsset(url('/css/profitmax-de/style.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/profitmax-de/bootstrap.min.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax-de/jquery.plugin.min.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax-de/jquery.countdown.min.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax-de/lightbox.min.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax-de/form.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax-de/script.js')) !!}
@append
@section('page-layout')
    <div class="members_page">
    <div id="wrapper">
        <div id="header">
            <div class="header_inner">
                <div class="header_content">
                    <div id="logo"><a href=""></a></div>
                    <div class="header_slogan">
                        <div class="trim_spaces">
                            <div class="scalable">
                                <div class="header_slogan_inner">
                                    <div><span>Herzlichen Glückwunsch!</span> Sie nur einen Schritt davon entfernt pro Tag</div>
                                    <div><span>$<span>1,671.32</span> Zu Verdienen...</span> mit nur ein paar Mausklicks</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="container">
            <div class="section section_video_members">
                <div class="section_container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="video">
                                <div class="embed-responsive embed-responsive-16by9">
                                    @include('funnels.layouts._partials._video',  ['w'=>'100%', 'h'=>'100%'])
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div action="" class="reg_form">
                                <div id="boa-regform" class="boaforms theme-undefined"><div class="form-container theme-default">
                                        <div class="logos-container">
                                        </div>
                                        @include('funnels.layouts._partials._form-mobile', ['funnelId' => $page->getParent()->id])
                                    </div>
                                </div>
                            </div>
                            <div class="safe"><img src="/img/profitmax-de/safe.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section_countdown">
                <div class="section_container">
                    <div class="secure_countdown_wrapper">
                        <div class="secure_countdown_container">
                            <div class="secure_countdown_inner" id="countdownText">
                                <div class="title">Ihr Gewinn Maximizer Mitgliedsantrag erlischt</div>
                                <div class="description">In nur wenigen Minuten:</div>
                            </div>
                        </div>
                        <div class="countdown" id="secure_countdown">06:53:00</div>
                    </div>
                </div>
            </div>

            <div class="section section_testimonials">
                <div class="section_container">
                    <div class="section_title">"An nur einem Tag, habe ich $1022.13 verdient"</div>

                    <ul class="testimonials_list">
                        <li><img src="/img/profitmax-de/testimonial1.png" alt="">

                            <div class="description">
                                <div class="meta">
                                    <div class="name">Maria S.</div>
                                    <img src="/img/profitmax-de/stars4.png" alt=""></div>
                                <div class="desc">
                                    Ich kann immer noch nicht glauben, dass ich das Glück hatte die Software zu testen. Ich verdiene mehr in einem Monat, als ich im gesamten letzten Jahr verdient habe. Hätte man mir nur früher gesagt, dass ich in nur einem einzigen Monat € 41.581 verdienen kann! Ich bin überglücklich und sprachlos"
                                </div>
                            </div>
                        </li>
                        <li><img src="/img/profitmax-de/testimonial2.png" alt="">

                            <div class="description">
                                <div class="meta">
                                    <div class="name">Christian W.</div>
                                    <img src="/img/profitmax-de/stars45.png" alt=""></div>
                                <div class="desc">
                                    Unglaublich, ich weiß gar nicht wie ich meine Gefühle beschrieben soll! Deine Software ist fantastisch, sie vollbringt wahre Wunder! Ich habe im Traum nicht daran gedacht, dass ich durch einen Beta Software Test meine finanzielle Unabhängigkeit erreichen werde. Ich habe mit Deiner Software soviel Geld verdient, dass ich mein Studienkredit auf einmal und sofort zurückzahlen konnte! Ich werde Dir ewig dankbar sein!"
                                </div>
                            </div>
                        </li>
                        <li><img src="/img/profitmax-de/testimonial3.png" alt="">

                            <div class="description">
                                <div class="meta">
                                    <div class="name">Wolfgang S.</div>
                                    <img src="/img/profitmax-de/stars5.png" alt=""></div>
                                <div class="desc">
                                    Krass! Ich habe schon früher online getradet, aber leider nie wirklich erfolgreich, es war eher eine Geldverschwendung. Nach nur 10 Minuten mit Deiner Software, habe ich sofort gemerkt, dass ich konstante Gewinne einfahren kann. Nach meiner ersten Auszahlung wollte ich zunächst aufhören, das System hat aber einfach weiter Gewinne eingefahren und ich verdiene jetzt jede Woche mindesten stolze €11.862!"
                                </div>
                            </div>
                        </li>
                        <li><img src="/img/profitmax-de/testimonial4.png" alt="">

                            <div class="description">
                                <div class="meta">
                                    <div class="name">Monika H.</div>
                                    <img src="/img/profitmax-de/stars4.png" alt=""></div>
                                <div class="desc">
                                    Vielen Dank dafür, dass Du meiner Schwester meinem Vater und mir fast einen Herzinfarkt beschert hast. Wir sind fast gestorben, als wir die Gewinne nach dem ersten Monat gesehen haben. Gestaffelt - also von uns allen zusammen - mehr als wir uns jemals erträumt hätten, um genau zu sein: €40.012! Wir können den nächsten Monat gar nicht abwarten."
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>

            <div class="section section_steps">
                <div class="section_container">

                    <div class="row">

                        <div class="col-md-8">
                            <div class="steps_wrapper">

                                <ul class="steps">
                                    <li>Füllen Sie das Anmeldeformular aus um Ihr KOSTENLOSES <span>Profit Maximizer Konto zu eröffnen.</span>.</li>
                                    <li>Zahlen Sie auf Ihr <span>Profit Maximizer Konto</span> den vom Broker geforderten Mindestbetrag ein um das System sofort zu aktivieren. </li>
                                    <li>
                                        Sobald Sie in Ihr Konto einzahlen, steigen Ihre Gewinne mit dem <span>Profit Maximizer System</span>.
                                        <br>Heben Sie Ihren Gewinn ab zu jeder Zeit, an jedem Tag.
                                        <p><span>Keine Gebühren!
                                    <br>Keine Kommission! Keine Überraschungen!</span></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section section_live">
                <div class="section_container">
                    <div class="section_title">Aktuelle Live-Trades von Profit Maximizer</div>

                </div>
            </div>


            <div class="section section_map">

                <div class="section_container">
                    <div class="map_item">
                        <div class="meta"><img src="/img/profitmax-de/map1.png" alt="">

                            <div class="name">Felix Wirtz</div>
                            <div class="flag">
                                <img src="/img/profitmax-de/flag_austria_mini.gif" alt=""> Österreich
                            </div>
                        </div>
                        <div class="description">
                            <div class="start">Startguthaben: <span>€750</span></div>
                            <div class="profit">Gewinn: <span>€221,807,53</span></div>

                        </div>
                        <div class="buttons"><a href="/img/profitmax-de/FelixWirtz-men.png" class="button_view" data-lightbox="image-1" data-title="Robert Syverson Results">SCHAUEN ÜBERPRÜFT KONTO</a></div>
                    </div>
                    <div class="map_item">
                        <div class="meta"><img src="/img/profitmax-de/map2.png" alt="">

                            <div class="name">Kerstin Baader</div>
                            <div class="flag">
                                <img src="/img/profitmax-de/flag_germany_mini-50x33.gif" alt=""> Deutschland
                            </div>
                        </div>
                        <div class="description">
                            <div class="start">Startguthaben: <span>€500</span></div>
                            <div class="profit">Gewinn: <span>€50,335.12</span></div>
                        </div>
                        <div class="buttons"><a href="/img/profitmax-de/KerstinBaader-Female.png" class="button_view" data-lightbox="image-1" data-title="Michael  Results">SCHAUEN ÜBERPRÜFT KONTO</a></div>
                    </div>
                    <div class="map_item">
                        <div class="meta"><img src="/img/profitmax-de/map3.png" alt="">

                            <div class="name">Jonas Freitag</div>
                            <div class="flag">
                                <img src="/img/profitmax-de/flag_switzerland_mini-50x33.gif" alt=""> Schweiz
                            </div>
                        </div>
                        <div class="description">
                            <div class="start">Startguthaben: <span>€300</span></div>
                            <div class="profit">Gewinn:<span>€35,174.22</span></div>
                        </div>
                        <div class="buttons"><a href="/img/profitmax-de/JonasFreitag-men.png" class="button_view" data-lightbox="image-1" data-title="Jack  Results">SCHAUEN ÜBERPRÜFT KONTO</a></div>
                    </div>
                    <div class="map_item">
                        <div class="meta"><img src="/img/profitmax-de/map4.png" alt="">

                            <div class="name">Antje Koehler</div>
                            <div class="flag">
                                <img src="/img/profitmax-de/flag_germany_mini-50x33.gif" alt=""> Deutschland
                            </div>
                        </div>
                        <div class="description">
                            <div class="start">Startguthaben:<span>€10,0000</span></div>
                            <div class="profit">Gewinn: <span>€16,593,25</span></div>
                        </div>
                        <div class="buttons"><a href="/img/profitmax-de/AntjeKoehler-female.png" class="button_view" data-lightbox="image-1" data-title="Amelie Results">SCHAUEN ÜBERPRÜFT KONTO</a></div>
                    </div>
                </div>

            </div>

            <div class="section section_support">
                <div class="section_container">
                    <div class="support_wrapper">
                        <div class="section_title">24/7 Kundendienst</div>

                        <div class="description">
                            Als Mitglied von <span>Profit Maximizer</span>, haben Sie Zugang zu unserer <span>24/7 support line</span>.
                        </div>

                        <div class="contact">
                            <span>Haben Sie noch Fragen? Kontaktieren Sie uns einfach:</span>
                            support@derprofitmaximizer.co

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div id="footer">
        <div class="footer_content">
            <div class="footer_note">
                <p>Wichtiger Risiko Hinweis: Das Handeln von Binären Optionen kann neben hohen Gewinnen auch ein Risiko darstellen, sowie den teilweisen oder vollständigen Verlust Ihres monetären Einsatzes. Dies sollte unerfahren Anleger wissen. Wir empfehlen daher dringend, dass Sie unsere Allgemeinen Geschäftsbedingungen und unseren Haftungsausschluss vor jeder Geldanlage lesen. Kunden müssen in ihrem Wohnsitzland prüfen ob eine Kapitalertragssteuer anfällt.</p>
                <p>Es ist illegal, U.S. Amerikanischen Staatsbürgern dabei zu helfen mit Rohstoffen zu handeln, auch wenn es sich nur um die Vorhersage von Optionen handelt, sofern sie kein CFTC registrierter Händler sind oder gesetzlich befugt sind.</p>
            </div>
        </div>
    </div>
    <div id="footer_nav">
        <ul class="footer_nav">
            <li><a href="">Haftungsausschluss</a></li>
            <li><a href="">Allgemeine Geschäftsbedingungen</a></li>
            <li><a href="">Datenschutzbestimmungen</a></li>
            <li><a href="">Partnerprogramm</a></li>
            <li><a href="">Support</a></li>
        </ul>
    </div>
@endsection