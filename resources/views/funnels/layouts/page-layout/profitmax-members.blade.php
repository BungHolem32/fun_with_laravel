@section('head')
    {!! $page->appendAsset(url('/css/profitmax/reset.css')) !!}
    {!! $page->appendAsset(url('/css/profitmax/font-awesome.min.css')) !!}
    {!! $page->appendAsset(url('/css/profitmax/bootstrap.min.css')) !!}
    {!! "<link href='http://fonts.googleapis.com/css?family=Exo:500italic' rel='stylesheet' type='text/css'>" !!}
    {!! "<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900,300italic,700italic,900italic,300italic' rel='stylesheet' type='text/css'>" !!}
    {!! "<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700,400italic' rel='stylesheet' type='text/css'>" !!}
    {!! $page->appendAsset(url('/css/profitmax/lightbox.min.css')) !!}
    {!! $page->appendAsset(url('/css/profitmax/style.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/profitmax/bootstrap.min.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax/jquery.plugin.min.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax/jquery.countdown.min.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax/lightbox.min.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax/script.js')) !!}
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
                                    <!--<iframe width="620" height="370" src="https://www.youtube.com/embed/D-KLe_6Vo-w?rel=0&autoplay=1" frameborder="0" allowfullscreen> https://www.youtube.com/embed/D-KLe_6Vo-w </iframe>-->
                                    <iframe width="620" height="370" src="https://www.youtube.com/embed/wSBrK2FDwDo?modestbranding=1&amp;autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;title=0&amp;autohide=1&amp;wmode=transparent&amp;hd=1" frameborder="0" allowfullscreen=""></iframe>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-4">
                            <div action="" class="reg_form">

                                <div id="boa-regform" class="boaforms theme-undefined"><div class="form-container theme-default">
                                        <div class="logos-container">

                                        </div>
                                        <form class="form" novalidate="novalidate">
                                            <div class="clearfix"></div>
                                            <div class="col-md-6"></div>
                                            <div class="col-md-12 registration-error"></div>
                                            <div class="form-group col-xs-6">
                                                <label for="first_name-derprofitmaximizer" class="sr-only">Vorname</label>
                                                <input data-placement="bottom" type="text" name="first_name" id="first_name-derprofitmaximizer" class="form-control" placeholder="Vorname">
                                                <img class="input-checkmark" src="//splitter.binarypromos.com/boaform/img/checkmark.png" alt="">
                                            </div>
                                            <div class="form-group col-xs-6">
                                                <label for="last_name-derprofitmaximizer" class="sr-only">Nachname</label>
                                                <input data-placement="bottom" type="text" name="last_name" id="last_name-derprofitmaximizer" class="form-control" placeholder="Nachname">
                                                <img class="input-checkmark" src="//splitter.binarypromos.com/boaform/img/checkmark.png" alt="">
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="form-group col-xs-12">
                                                <label for="email-derprofitmaximizer" class="sr-only">Email</label>
                                                <input data-toggle="tooltip" type="email" name="email" id="email-derprofitmaximizer" class="form-control" placeholder="Email">
                                                <img class="input-checkmark" src="//splitter.binarypromos.com/boaform/img/checkmark.png" alt="">
                                            </div>
                                            <div class="form-group col-xs-12">
                                                <label for="password-derprofitmaximizer" class="sr-only">Passwort wählen</label>
                                                <input data-toggle="tooltip" type="password" name="password" id="password-derprofitmaximizer" class="form-control" placeholder="Passwort wählen">
                                                <img class="input-checkmark" src="//splitter.binarypromos.com/boaform/img/checkmark.png" alt="">
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="form-group col-xs-4 area-code-group">
                                                <label for="area_code-derprofitmaximizer" class="sr-only">Vorwahl</label>
                                                <input data-toggle="tooltip" type="text" name="area_code" id="area_code-derprofitmaximizer" class="form-control area-code" placeholder="Vorwahl" disabled="disabled">

                                            </div>
                                            <div class="form-group col-xs-8 phone-group">
                                                <label for="phone-derprofitmaximizer" class="sr-only">Telefonnummer</label>
                                                <input data-toggle="tooltip" type="text" name="phone" id="phone-derprofitmaximizer" class="form-control" placeholder="Telefonnummer">
                                                <img class="input-checkmark" src="//splitter.binarypromos.com/boaform/img/checkmark.png" alt="">
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="form-group col-md-12 submit-button-group">

                                                <button type="submit" id="js-registration-btn" class="btn btn-sm register-btn">KOMPLETE REGISTRIERUNG</button>

                                            </div>
                                        </form>
                                    </div></div>
                            </div>

                            <div class="safe"><img src="../images/safe.png" alt=""></div>


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
                        <li><img src="../images/testimonial1.png" alt="">

                            <div class="description">
                                <div class="meta">
                                    <div class="name">Maria S.</div>
                                    <img src="../images/stars4.png" alt=""></div>
                                <div class="desc">
                                    Ich kann immer noch nicht glauben, dass ich das Glück hatte die Software zu testen. Ich verdiene mehr in einem Monat, als ich im gesamten letzten Jahr verdient habe. Hätte man mir nur früher gesagt, dass ich in nur einem einzigen Monat € 41.581 verdienen kann! Ich bin überglücklich und sprachlos"
                                </div>
                            </div>
                        </li>
                        <li><img src="../images/testimonial2.png" alt="">

                            <div class="description">
                                <div class="meta">
                                    <div class="name">Christian W.</div>
                                    <img src="../images/stars45.png" alt=""></div>
                                <div class="desc">
                                    Unglaublich, ich weiß gar nicht wie ich meine Gefühle beschrieben soll! Deine Software ist fantastisch, sie vollbringt wahre Wunder! Ich habe im Traum nicht daran gedacht, dass ich durch einen Beta Software Test meine finanzielle Unabhängigkeit erreichen werde. Ich habe mit Deiner Software soviel Geld verdient, dass ich mein Studienkredit auf einmal und sofort zurückzahlen konnte! Ich werde Dir ewig dankbar sein!"
                                </div>
                            </div>
                        </li>
                        <li><img src="../images/testimonial3.png" alt="">

                            <div class="description">
                                <div class="meta">
                                    <div class="name">Wolfgang S.</div>
                                    <img src="../images/stars5.png" alt=""></div>
                                <div class="desc">
                                    Krass! Ich habe schon früher online getradet, aber leider nie wirklich erfolgreich, es war eher eine Geldverschwendung. Nach nur 10 Minuten mit Deiner Software, habe ich sofort gemerkt, dass ich konstante Gewinne einfahren kann. Nach meiner ersten Auszahlung wollte ich zunächst aufhören, das System hat aber einfach weiter Gewinne eingefahren und ich verdiene jetzt jede Woche mindesten stolze €11.862!"
                                </div>
                            </div>
                        </li>
                        <li><img src="../images/testimonial4.png" alt="">

                            <div class="description">
                                <div class="meta">
                                    <div class="name">Monika H.</div>
                                    <img src="../images/stars4.png" alt=""></div>
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
                        <div class="meta"><img src="../images/map1.png" alt="">

                            <div class="name">Felix Wirtz</div>
                            <div class="flag">
                                <img src="../images/flag_austria_mini.gif" alt=""> Österreich
                            </div>
                        </div>
                        <div class="description">
                            <div class="start">Startguthaben: <span>€750</span></div>
                            <div class="profit">Gewinn: <span>€221,807,53</span></div>

                        </div>
                        <div class="buttons"><a href="../images/FelixWirtz-men.png" class="button_view" data-lightbox="image-1" data-title="Robert Syverson Results">SCHAUEN ÜBERPRÜFT KONTO</a></div>
                    </div>
                    <div class="map_item">
                        <div class="meta"><img src="../images/map2.png" alt="">

                            <div class="name">Kerstin Baader</div>
                            <div class="flag">
                                <img src="../images/flag_germany_mini-50x33.gif" alt=""> Deutschland
                            </div>
                        </div>
                        <div class="description">
                            <div class="start">Startguthaben: <span>€500</span></div>
                            <div class="profit">Gewinn: <span>€50,335.12</span></div>
                        </div>
                        <div class="buttons"><a href="../images/KerstinBaader-Female.png" class="button_view" data-lightbox="image-1" data-title="Michael  Results">SCHAUEN ÜBERPRÜFT KONTO</a></div>
                    </div>
                    <div class="map_item">
                        <div class="meta"><img src="../images/map3.png" alt="">

                            <div class="name">Jonas Freitag</div>
                            <div class="flag">
                                <img src="../images/flag_switzerland_mini-50x33.gif" alt=""> Schweiz
                            </div>
                        </div>
                        <div class="description">
                            <div class="start">Startguthaben: <span>€300</span></div>
                            <div class="profit">Gewinn:<span>€35,174.22</span></div>
                        </div>
                        <div class="buttons"><a href="../images/JonasFreitag-men.png" class="button_view" data-lightbox="image-1" data-title="Jack  Results">SCHAUEN ÜBERPRÜFT KONTO</a></div>
                    </div>
                    <div class="map_item">
                        <div class="meta"><img src="../images/map4.png" alt="">

                            <div class="name">Antje Koehler</div>
                            <div class="flag">
                                <img src="../images/flag_germany_mini-50x33.gif" alt=""> Deutschland
                            </div>
                        </div>
                        <div class="description">
                            <div class="start">Startguthaben:<span>€10,0000</span></div>
                            <div class="profit">Gewinn: <span>€16,593,25</span></div>
                        </div>
                        <div class="buttons"><a href="../images/AntjeKoehler-female.png" class="button_view" data-lightbox="image-1" data-title="Amelie Results">SCHAUEN ÜBERPRÜFT KONTO</a></div>
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

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="../js/jquery.plugin.min.js" type="text/javascript"></script>
    <script src="../js/jquery.countdown.min.js" type="text/javascript"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.1/js/lightbox.min.js"></script><div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div><div id="lightbox" class="lightbox" style="display: none;"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="><div class="lb-nav"><a class="lb-prev" href=""></a><a class="lb-next" href=""></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div>
    <!--scripts-->
    <script xsrc="../js/scripts.js"></script>

    <script>
        $(document).ready(function(){
            /*
             $('#secure_countdown').countdown({
             until: 600, format: 'H:M:S', compact: true,
             onExpiry: function(){
             $('#countdownText').html('<div class="title">Timeout please try again, your spot is not secured anymore.</div>');
             }
             });
             */



            var minutes = 10;
            var seconds = 0;
            var centiseconds = 0;
            var timer = setInterval(function() {
                if(minutes == 0 && seconds == 0 && centiseconds == 0) $('#countdownText').html('<div class="title">Timeout please try again, your spot is not secured anymore.</div>');
                centiseconds -= 9;

                if (centiseconds < 0) {
                    centiseconds = 99;
                    seconds--;
                }

                if (seconds < 0) {
                    seconds = 59;
                    minutes--;
                }

                if (minutes < 0) {
                    minutes = 0;
                    seconds = 0;
                    centiseconds = 0;
                    clearInterval(timer);
                }

                if ((minutes + "").length < 2) minutes = "0" + minutes;
                if ((seconds + "").length < 2) seconds = "0" + seconds;
                if ((centiseconds + "").length < 2) centiseconds = "0" + centiseconds;

                //console.log(minutes+':'+seconds+':'+centiseconds);
                $("#secure_countdown").html(minutes+':'+seconds+':'+centiseconds);

            }, 90);




        });
    </script>



    <script type="text/javascript">
        /* <![CDATA[ */
        (function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
        /* ]]> */
    </script>


    <!--!&#45;&#45;  BOA tracking &ndash;&gt;-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://splitter.binarypromos.com/api/v1/form.min.js?v=1.1&amp;product=derprofitmaximizer"></script>
    <script type="text/javascript">
        BOA.setConfigKey('dbl_decode', true);
        var form = $('#boa-regform').BOAForm({
            language: 'de',
            animation: {
                name: 'dialog',
                loader: 'loading-green2'
            },
            translations: {
                de: {
                    Register_Now: 'KOMPLETE REGISTRIERUNG'
                }
            }
        });
        var form = $('#boa-regform2').BOAForm({
            language: 'de',
            animation: {
                name: 'dialog',
                loader: 'loading-green2'
            },
            translations: {
                de: {
                    Register_Now: 'KOMPLETE REGISTRIERUNG'
                }
            }
        });
    </script>
    <!-- END BOA tracking -->


    <iframe src="//tracking.binarypromos.com/aff_c?offer_id=2113&amp;aff_id=6725&amp;url_id=18847&amp;aff_sub1=de&amp;aff_sub2=fdsj@fdnkjs.com" id="tracking-link-1459867341844" style="display:none"></iframe><iframe src="http://52.19.76.95:3003/analytic/derprofitmaximizer/members/0bc34fg7891011121459752049377?lead.offer_id=2113&amp;lead.aff_id=6725&amp;lead.transaction_id=102566a9634f56d5303487fd4327e2&amp;lead.broker=&amp;lead.campaign_id=&amp;aff_subs%5Baff_sub1%5D=de&amp;aff_subs%5Baff_sub2%5D=fdsj%40fdnkjs.com&amp;geo.country=Israel&amp;geo.iso=IL&amp;lead.email=fdsj%40fdnkjs.com" style="display: none"></iframe></div>
@endsection