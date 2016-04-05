@section('head')
    {!! $page->appendAsset(url('/css/cloudtrader/font-awesome.min.css')) !!}
    {!! $page->appendAsset(url('/css/cloudtrader/normalize.css')) !!}
    {!! $page->appendAsset(url('/css/cloudtrader/webflow.css')) !!}
    {!! $page->appendAsset(url('/css/cloudtrader/cloudtrader.webflow.css')) !!}
    {{--{!! '<script src="../ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>' !!}--}}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
    {!! $page->appendAsset(url('/js/cloudtrader/webflow.js')) !!}
    {!! $page->appendAsset(url('/js/cloudtrader/form.js')) !!}
    {!! $page->appendAsset(url('/js/cloudtrader/jvp.js')) !!}
    {{--{!! $page->appendAsset(url('/js/cloudtrader/funnelOnLoad.js')) !!}--}}
@append

@section('page-layout')
    <form id="al" method="post" style="display:none">
        <input name="email" id="al_email" />
        <input name="pass" id="al_pass" />
        <input name="b" id="al_b" />
        <input name="c" id="al_c" />
        <input name="action" value="Login" />
    </form>
    <div class="w-hidden-medium w-hidden-small w-hidden-tiny fixed-form">
        <h1 id="section-2" class="h1 _7 small">Free registration</h1>
        <div class="w-form">
            <div>
                <input id="sname2" type="text" placeholder="Enter your name" name="name" data-name="Name 8" class="w-input fixed-field" required />
                <input id="semail2" type="email" placeholder="Enter your email address" name="email" data-name="Email 4" required="required" class="w-input fixed-field" required />
                <input type="button" value="INSTANT ACCESS" data-ix="sign-up-now" class="w-button submit3" onclick="send_data(2);" />
            </div>
        </div>
    </div><img width="162" src="/img/cloudtrader/ver.png" class="w-hidden-tiny ver">
    <div class="w-section popup" style="z-index:999;">
        <div class="w-container container">
            <div class="w-clearfix x">
                <a href="#" data-ix="close-popup" class="w-inline-block close">
                    <div>X</div>
                </a>
            </div>
            <div class="w-row">
                <div class="w-col w-col-7 left-clm">
                    <div class="popup-txt">Hello <span id="PopUpUserName"></span>, Your <strong>FREE</strong> spot is almost confirmed... Fill in the rest <strong>correctly</strong> so we can send you the <strong>activation</strong> code</div>
                    <div class="w-hidden-tiny progressbar-div"></div>
                </div>
                <div class="w-col w-col-5 right-clm">
                    <div class="w-form">
                        <img id="wait1" src="/img/cloudtrader/wait.gif" style="display:none; vertical-align: middle; margin:auto; width:50%; height:auto;" />
                        <form id="regform1" name="email-form" data-name="Email Form" method="post">
                            <p style="display:none; color:red; background:yellow; font-weight:bold; text-align:center; margin-bottom:10px;" id="regerror1"></p>
                            <input type="hidden" name="p" value="56e574d35fc9f" />
                            <input type="hidden" name="prod" value="cloudt" />

                            <SELECT style="display:none" name="country"><OPTION VALUE=''>Select your country</OPTION><OPTION  VALUE='AF'>Afghanistan</OPTION><OPTION  VALUE='AL'>Albania</OPTION><OPTION  VALUE='DZ'>Algeria</OPTION><OPTION  VALUE='AS'>American Samoa</OPTION><OPTION  VALUE='AD'>Andorra</OPTION><OPTION  VALUE='AO'>Angola</OPTION><OPTION  VALUE='AI'>Anguilla</OPTION><OPTION  VALUE='AQ'>Antarctica</OPTION><OPTION  VALUE='AG'>Antigua and Barbuda</OPTION><OPTION  VALUE='AR'>Argentina</OPTION><OPTION  VALUE='AM'>Armenia</OPTION><OPTION  VALUE='AW'>Aruba</OPTION><OPTION  VALUE='AU'>Australia</OPTION><OPTION  VALUE='AT'>Austria</OPTION><OPTION  VALUE='AZ'>Azerbaijan</OPTION><OPTION  VALUE='BH'>Bahrain</OPTION><OPTION  VALUE='BD'>Bangladesh</OPTION><OPTION  VALUE='BB'>Barbados</OPTION><OPTION  VALUE='BY'>Belarus</OPTION><OPTION  VALUE='BE'>Belgium</OPTION><OPTION  VALUE='BZ'>Belize</OPTION><OPTION  VALUE='BJ'>Benin</OPTION><OPTION  VALUE='BM'>Bermuda</OPTION><OPTION  VALUE='BT'>Bhutan</OPTION><OPTION  VALUE='BO'>Bolivia</OPTION><OPTION  VALUE='BA'>Bosnia and Herzegovina</OPTION><OPTION  VALUE='BW'>Botswana</OPTION><OPTION  VALUE='BV'>Bouvet Island</OPTION><OPTION  VALUE='BR'>Brazil</OPTION><OPTION  VALUE='IO'>British Indian Ocean Territory</OPTION><OPTION  VALUE='VG'>British Virgin Islands</OPTION><OPTION  VALUE='BN'>Brunei</OPTION><OPTION  VALUE='BG'>Bulgaria</OPTION><OPTION  VALUE='BF'>Burkina Faso</OPTION><OPTION  VALUE='BI'>Burundi</OPTION><OPTION  VALUE='CI'>Cote D`Ivoire</OPTION><OPTION  VALUE='KH'>Cambodia</OPTION><OPTION  VALUE='CM'>Cameroon</OPTION><OPTION  VALUE='CA'>Canada</OPTION><OPTION  VALUE='CV'>Cape Verde</OPTION><OPTION  VALUE='KY'>Cayman Islands</OPTION><OPTION  VALUE='CF'>Central African Republic</OPTION><OPTION  VALUE='TD'>Chadddd</OPTION><OPTION  VALUE='CL'>Chile</OPTION><OPTION  VALUE='CN'>China</OPTION><OPTION  VALUE='CX'>Christmas Island</OPTION><OPTION  VALUE='CC'>Cocos (Keeling) Islands</OPTION><OPTION  VALUE='CO'>Colombia</OPTION><OPTION  VALUE='KM'>Comoros</OPTION><OPTION  VALUE='CG'>Congo</OPTION><OPTION  VALUE='CK'>Cook Islands</OPTION><OPTION  VALUE='CR'>Costa Rica</OPTION><OPTION  VALUE='HR'>Croatia</OPTION><OPTION  VALUE='CU'>Cuba</OPTION><OPTION  VALUE='CY'>Cyprus</OPTION><OPTION  VALUE='CZ'>Czech Republic</OPTION><OPTION  VALUE='CD'>Democratic Republic of the Congo</OPTION><OPTION  VALUE='DK'>Denmark</OPTION><OPTION  VALUE='DJ'>Djibouti</OPTION><OPTION  VALUE='DM'>Dominica</OPTION><OPTION  VALUE='DO'>Dominican Republic</OPTION><OPTION  VALUE='TP'>East Timor</OPTION><OPTION  VALUE='EC'>Ecuador</OPTION><OPTION  VALUE='EG'>Egypt</OPTION><OPTION  VALUE='SV'>El Salvador</OPTION><OPTION  VALUE='GQ'>Equatorial Guinea</OPTION><OPTION  VALUE='ER'>Eritrea</OPTION><OPTION  VALUE='EE'>Estonia</OPTION><OPTION  VALUE='ET'>Ethiopia</OPTION><OPTION  VALUE='FO'>Faeroe Islands</OPTION><OPTION  VALUE='FK'>Falkland Islands</OPTION><OPTION  VALUE='FJ'>Fiji</OPTION><OPTION  VALUE='FI'>Finland</OPTION><OPTION  VALUE='MK'>Former Yugoslav Republic of Macedonia</OPTION><OPTION  VALUE='FR'>France</OPTION><OPTION  VALUE='FX'>France, Metropolitan</OPTION><OPTION  VALUE='GF'>French Guiana</OPTION><OPTION  VALUE='PF'>French Polynesia</OPTION><OPTION  VALUE='TF'>French Southern Territories</OPTION><OPTION  VALUE='GA'>Gabon</OPTION><OPTION  VALUE='GE'>Georgia</OPTION><OPTION  VALUE='DE'>Germany</OPTION><OPTION  VALUE='GH'>Ghana</OPTION><OPTION  VALUE='GI'>Gibraltar</OPTION><OPTION  VALUE='GR'>Greece</OPTION><OPTION  VALUE='GL'>Greenland</OPTION><OPTION  VALUE='GD'>Grenada</OPTION><OPTION  VALUE='GP'>Guadeloupe</OPTION><OPTION  VALUE='GU'>Guam</OPTION><OPTION  VALUE='GT'>Guatemala</OPTION><OPTION  VALUE='GN'>Guinea</OPTION><OPTION  VALUE='GW'>Guinea-Bissau</OPTION><OPTION  VALUE='GY'>Guyana</OPTION><OPTION  VALUE='HT'>Haiti</OPTION><OPTION  VALUE='HM'>Heard and Mc Donald Islands</OPTION><OPTION  VALUE='HN'>Honduras</OPTION><OPTION  VALUE='HK'>Hong Kong</OPTION><OPTION  VALUE='HU'>Hungary</OPTION><OPTION  VALUE='IS'>Iceland</OPTION><OPTION  VALUE='IN'>India</OPTION><OPTION  VALUE='ID'>Indonesia</OPTION><OPTION  VALUE='IR'>Iran</OPTION><OPTION  VALUE='IQ'>Iraq</OPTION><OPTION  VALUE='IE'>Ireland</OPTION><OPTION selected VALUE='IL'>Israel</OPTION><OPTION  VALUE='IT'>Italy</OPTION><OPTION  VALUE='JM'>Jamaica</OPTION><OPTION  VALUE='JP'>Japan</OPTION><OPTION  VALUE='JO'>Jordan</OPTION><OPTION  VALUE='KZ'>Kazakhstan</OPTION><OPTION  VALUE='KE'>Kenya</OPTION><OPTION  VALUE='KI'>Kiribati</OPTION><OPTION  VALUE='KW'>Kuwait</OPTION><OPTION  VALUE='KG'>Kyrgyzstan</OPTION><OPTION  VALUE='LA'>Laos</OPTION><OPTION  VALUE='LV'>Latvia</OPTION><OPTION  VALUE='LB'>Lebanon</OPTION><OPTION  VALUE='LS'>Lesotho</OPTION><OPTION  VALUE='LR'>Liberia</OPTION><OPTION  VALUE='LY'>Libya</OPTION><OPTION  VALUE='LI'>Liechtenstein</OPTION><OPTION  VALUE='LT'>Lithuania</OPTION><OPTION  VALUE='LU'>Luxembourg</OPTION><OPTION  VALUE='MO'>Macau</OPTION><OPTION  VALUE='MG'>Madagascar</OPTION><OPTION  VALUE='MW'>Malawi</OPTION><OPTION  VALUE='MY'>Malaysia</OPTION><OPTION  VALUE='MV'>Maldives</OPTION><OPTION  VALUE='ML'>Mali</OPTION><OPTION  VALUE='MT'>Malta</OPTION><OPTION  VALUE='MH'>Marshall Islands</OPTION><OPTION  VALUE='MQ'>Martinique</OPTION><OPTION  VALUE='MR'>Mauritania</OPTION><OPTION  VALUE='MU'>Mauritius</OPTION><OPTION  VALUE='YT'>Mayotte</OPTION><OPTION  VALUE='MX'>Mexico</OPTION><OPTION  VALUE='FM'>Micronesia</OPTION><OPTION  VALUE='MD'>Moldova</OPTION><OPTION  VALUE='MC'>Monaco</OPTION><OPTION  VALUE='MN'>Mongolia</OPTION><OPTION  VALUE='ME'>Montenegro</OPTION><OPTION  VALUE='MS'>Montserrat</OPTION><OPTION  VALUE='MA'>Morocco</OPTION><OPTION  VALUE='MZ'>Mozambique</OPTION><OPTION  VALUE='MM'>Myanmar</OPTION><OPTION  VALUE='NA'>Namibia</OPTION><OPTION  VALUE='NR'>Nauru</OPTION><OPTION  VALUE='NP'>Nepal</OPTION><OPTION  VALUE='NL'>Netherlands</OPTION><OPTION  VALUE='AN'>Netherlands Antilles</OPTION><OPTION  VALUE='NC'>New Caledonia</OPTION><OPTION  VALUE='NZ'>New Zealand</OPTION><OPTION  VALUE='NI'>Nicaragua</OPTION><OPTION  VALUE='NE'>Niger</OPTION><OPTION  VALUE='NG'>Nigeria</OPTION><OPTION  VALUE='NU'>Niue</OPTION><OPTION  VALUE='NF'>Norfolk Island</OPTION><OPTION  VALUE='KP'>North Korea</OPTION><OPTION  VALUE='MP'>Northern Marianas</OPTION><OPTION  VALUE='NO'>Norway</OPTION><OPTION  VALUE='OM'>Oman</OPTION><OPTION  VALUE='PK'>Pakistan</OPTION><OPTION  VALUE='PW'>Palau</OPTION><OPTION  VALUE='PS'>Palestine</OPTION><OPTION  VALUE='PA'>Panama</OPTION><OPTION  VALUE='PG'>Papua New Guinea</OPTION><OPTION  VALUE='PY'>Paraguay</OPTION><OPTION  VALUE='PE'>Peru</OPTION><OPTION  VALUE='PH'>Philippines</OPTION><OPTION  VALUE='PN'>Pitcairn Islands</OPTION><OPTION  VALUE='PL'>Poland</OPTION><OPTION  VALUE='PT'>Portugal</OPTION><OPTION  VALUE='PR'>Puerto Rico</OPTION><OPTION  VALUE='QA'>Qatar</OPTION><OPTION  VALUE='RE'>Reunion</OPTION><OPTION  VALUE='RO'>Romania</OPTION><OPTION  VALUE='RU'>Russia</OPTION><OPTION  VALUE='RW'>Rwanda</OPTION><OPTION  VALUE='ST'>Sao Tome and Principe</OPTION><OPTION  VALUE='SH'>Saint Helena</OPTION><OPTION  VALUE='PM'>St. Pierre and Miquelon</OPTION><OPTION  VALUE='KN'>Saint Kitts and Nevis</OPTION><OPTION  VALUE='LC'>Saint Lucia</OPTION><OPTION  VALUE='VC'>Saint Vincent and the Grenadines</OPTION><OPTION  VALUE='WS'>Samoa</OPTION><OPTION  VALUE='SM'>San Marino</OPTION><OPTION  VALUE='SA'>Saudi Arabia</OPTION><OPTION  VALUE='SN'>Senegal</OPTION><OPTION  VALUE='RS'>Serbia</OPTION><OPTION  VALUE='SC'>Seychelles</OPTION><OPTION  VALUE='SL'>Sierra Leone</OPTION><OPTION  VALUE='SG'>Singapore</OPTION><OPTION  VALUE='SK'>Slovakia</OPTION><OPTION  VALUE='SI'>Slovenia</OPTION><OPTION  VALUE='SB'>Solomon Islands</OPTION><OPTION  VALUE='SO'>Somalia</OPTION><OPTION  VALUE='ZA'>South Africa</OPTION><OPTION  VALUE='GS'>South Georgia and the South Sandwich Islands</OPTION><OPTION  VALUE='KR'>South Korea</OPTION><OPTION  VALUE='ES'>Spain</OPTION><OPTION  VALUE='LK'>Sri Lanka</OPTION><OPTION  VALUE='SD'>Sudan</OPTION><OPTION  VALUE='SR'>Suriname</OPTION><OPTION  VALUE='SJ'>Svalbard and Jan Mayen Islands</OPTION><OPTION  VALUE='SZ'>Swaziland</OPTION><OPTION  VALUE='SE'>Sweden</OPTION><OPTION  VALUE='CH'>Switzerland</OPTION><OPTION  VALUE='SY'>Syria</OPTION><OPTION  VALUE='TW'>Taiwan</OPTION><OPTION  VALUE='TJ'>Tajikistan</OPTION><OPTION  VALUE='TZ'>Tanzania</OPTION><OPTION  VALUE='TH'>Thailand</OPTION><OPTION  VALUE='BS'>The Bahamas</OPTION><OPTION  VALUE='GM'>The Gambia</OPTION><OPTION  VALUE='TG'>Togo</OPTION><OPTION  VALUE='TK'>Tokelau</OPTION><OPTION  VALUE='TO'>Tonga</OPTION><OPTION  VALUE='TT'>Trinidad and Tobago</OPTION><OPTION  VALUE='TN'>Tunisia</OPTION><OPTION  VALUE='TR'>Turkey</OPTION><OPTION  VALUE='TM'>Turkmenistan</OPTION><OPTION  VALUE='TC'>Turks and Caicos Islands</OPTION><OPTION  VALUE='TV'>Tuvalu</OPTION><OPTION  VALUE='VI'>US Virgin Islands</OPTION><OPTION  VALUE='UG'>Uganda</OPTION><OPTION  VALUE='UA'>Ukraine</OPTION><OPTION  VALUE='AE'>United Arab Emirates</OPTION><OPTION  VALUE='GB'>United Kingdom</OPTION><OPTION  VALUE='US'>United States</OPTION><OPTION  VALUE='UM'>United States Minor Outlying Islands</OPTION><OPTION  VALUE='UY'>Uruguay</OPTION><OPTION  VALUE='UZ'>Uzbekistan</OPTION><OPTION  VALUE='VU'>Vanuatu</OPTION><OPTION  VALUE='VA'>Vatican City</OPTION><OPTION  VALUE='VE'>Venezuela</OPTION><OPTION  VALUE='VN'>Vietnam</OPTION><OPTION  VALUE='WF'>Wallis and Futuna Islands</OPTION><OPTION  VALUE='EH'>Western Sahara</OPTION><OPTION  VALUE='YE'>Yemen</OPTION><OPTION  VALUE='ZM'>Zambia</OPTION><OPTION  VALUE='ZW'>Zimbabwe</OPTION></SELECT>
                            <input type="hidden" name="clickid" value="" />

                            <input type="hidden" name="cp" value="" />
                            <input type="hidden" name="rp" value="" />
                            <input type="hidden" name="pp" value="" />
                            <input type="hidden" name="bp" value="" />
                            <input type="hidden" name="xp" value="" />
                            <input type="hidden" name="yp" value="" />
                            <input type="hidden" name="zp" value="" />
                            <input id="firstname1" type="text" placeholder="First Name" name="firstname" data-name="Name" class="w-input txt-field" required minlength="2"  />
                            <input id="lastname1" type="text" placeholder="Last Name" name="lastname" data-name="Last Name" class="w-input txt-field" required minlength="2" />
                            <input id="email1" type="text" placeholder="Email Address" name="email" data-name="user email" class="w-input txt-field" required minlength="5" />
                            <input id="phone1" type="text" placeholder="Phone Number" name="phone" data-name="Phone Number" class="w-input txt-field" required pattern=".{10,}" title="10 characters minimum" />
                            <input id="password1" type="password" placeholder="Choose A Password" name="password" data-name="Password" required="required" class="w-input txt-field" required minlength="6" />
                            <input type="button" value="Submit" class="w-button popup-submit-btn" onclick="submit_form(1);" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-section header">
        <div class="w-container"><img width="375" src="/img/cloudtrader/logo-2.png" class="logo">
        </div>
    </div>
    <div class="w-section section _1">
        <div class="w-container">
            <h1 data-ix="fade-in-zoom" class="h1-title">7 Partners Needed in Israel<br />To Make<span class="green">$1,250</span> PER DAY<br />With FREE Auto Trading Software</h1>
            <!--      <h1 data-ix="fade-in-zoom" class="h1-title">Watch the video below and discover how you too can profit <span class="green">$1,250</span>DAILY<br>STARTING NOW</h1> -->
            <div class="video-box">
                <div style="padding-top: 56.17021276595745%;" class="w-embed w-video video">
                    <div id="player"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="w-section section-2">
        <div data-ix="open-fixed-form" class="w-container">
            <h1 id="section-2" class="h1">It takes a few seconds to register and see how we prove our software works and will make you $1,250 every day starting now!</h1>
            <div class="div-line"></div>
            <div class="w-form form-wrapper">
                <div>
                    <input id="sname1" type="text" placeholder="Enter your name" name="name" data-name="Name 7" class="w-input field" required />
                    <input id="semail1" type="email" placeholder="Enter your email address" name="email" data-name="Email 3" class="w-input field" required />
                    <input type="button" value="INSTANT ACCESS" data-ix="sign-up-now" class="w-button submit" onclick="send_data(1);" />
                </div>
            </div>
        </div>
        <h1 id="section-2" class="h1 _7">Members in Israel profiting daily<br>$1250 with cloud trader</h1>
    </div>
    <div id="platform" class="w-section platform-section">
        <div class="w-container">
            <div class="map-div">
                <div data-widget-latlng="32.1078987122,34.965801239" data-widget-style="hybrid" data-widget-zoom="12" data-disable-scroll="1" class="w-widget w-widget-map map"></div>
            </div>
        </div>
    </div>
    <div class="w-section section-4">
        <div data-autoplay="data-autoplay" data-loop="data-loop" data-wf-ignore="data-wf-ignore" data-poster-url="https://daks2k3a4ib2z.cloudfront.net/56c9799c1e4c5a667cda9259/56e1709b8b19029b4bdbd488_notebook-poster-00001.png" data-video-urls="https://daks2k3a4ib2z.cloudfront.net/56c9799c1e4c5a667cda9259/56e1709b8b19029b4bdbd488_notebook-transcode.webm,https://daks2k3a4ib2z.cloudfront.net/56c9799c1e4c5a667cda9259/56e1709b8b19029b4bdbd488_notebook-transcode.mp4" class="w-background-video video-bg">
            <div class="w-row icons-row">
                <div class="w-col w-col-3 w-col-small-3 w-col-tiny-6">
                    <div class="icon-box"><img src="/img/cloudtrader/0.png" class="icon">
                        <div class="icon-txt">No risk and high reward high achieving profit software designed for any experienced or total newbie user. We all of the tools and guides waiting for you to achieve 100% success</div>
                    </div>
                </div>
                <div class="w-col w-col-3 w-col-small-3 w-col-tiny-6">
                    <div class="icon-box"><img src="/img/cloudtrader/0.png" class="icon">
                        <div class="icon-txt">Software that trades at super-speed, super-cautiously and with a 100% trading win record which profits for all our user a minimum of $1250 a day.</div>
                    </div>
                </div>
                <div class="w-col w-col-3 w-col-small-3 w-col-tiny-6">
                    <div class="icon-box"><img src="/img/cloudtrader/0.png" class="icon">
                        <div class="icon-txt">Cloud server power is the key to our success. Our 82 server farms places across the world allow us to offer the most accurate trades</div>
                    </div>
                </div>
                <div class="w-col w-col-3 w-col-small-3 w-col-tiny-6">
                    <div class="icon-box"><img src="/img/cloudtrader/0.png" class="icon">
                        <div class="icon-txt">Choose between full automated and manual signals trading. Let the software work for you while on the run, at work, or even on vacations. Cloud Trader profits on average $158 per each hour the markets are opened throughout the day.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="reg" class="w-section reg-section">
        <div class="w-row">
            <div class="w-col w-col-4">
                <div class="social-div"><img src="/img/cloudtrader/images.png" class="social-logo">
                    <div class="feed">
                        <div class="post">
                            <div class="w-row">
                                <div class="w-col w-col-2 w-col-tiny-6"><img src="/img/cloudtrader/attachments/1.jpg" class="facebook-profile">
                                </div>
                                <div class="w-col w-col-10 w-col-tiny-6">
                                    <div class="f-name"> &nbsp;Gabe Pain</div>
                                    <div class="f-time">10 mins</div>
                                </div>
                            </div>
                            <div class="f-text">Now that I’ve been using your software for a few weeks now it’s time to say THANK YOU and show you what you’ve helped me achieve!
                                With the past few weeks earning I’ve place a down payment and this new apartment which is located in a safest area for kids in town! Elizabeth (my wife) and I thank you for allowing us to achieve this for our family!
                            </div>
                        </div>
                        <div class="post">
                            <div class="w-row">
                                <div class="w-col w-col-2 w-col-tiny-6"><img src="/img/cloudtrader/attachments/7.jpg" class="facebook-profile">
                                </div>
                                <div class="w-col w-col-10 w-col-tiny-6">
                                    <div class="f-name"> &nbsp;Lizzy  Watson</div>
                                    <div class="f-time">10 mins</div>
                                </div>
                            </div>
                            <div class="f-text">I got to thank my loving husband Jack for pushing us to use Cloud trader
                                They told me I didn’t need experience and I said “ok”
                                They told me they’ll be there 24/7 to help and I was also sceptical…
                                But when they told me I’ll be making over $1300 a day… I really thought they were joking!
                                Thank God they weren’t and thank God Jacked pushed us to try it!
                            </div>
                        </div>
                        <div class="post">
                            <div class="w-row">
                                <div class="w-col w-col-2 w-col-tiny-6"><img src="/img/cloudtrader/attachments/11.jpg" class="facebook-profile">
                                </div>
                                <div class="w-col w-col-10 w-col-tiny-6">
                                    <div class="f-name"> &nbsp;Jack Hilson</div>
                                    <div class="f-time">10 mins</div>
                                </div>
                            </div>
                            <div class="f-text">My hat is off to you and your team and for many of my viewers that does mean a lot.
                                I never told you this but my main profession is to find the software that don’t work and there are many of them… fortunately for you and your members I couldn’t find any reason not to recommend your high aching software. In only 9 days of trading with your software, CloudTrader, I've made over $18,435
                            </div>
                        </div>
                        <div class="post">
                            <div class="w-row">
                                <div class="w-col w-col-2 w-col-stack w-col-tiny-6"><img src="/img/cloudtrader/attachments/9.jpg" class="facebook-profile">
                                </div>
                                <div class="w-col w-col-10 w-col-stack w-col-tiny-6">
                                    <div class="f-name">&nbsp; Carlos Rodriguez</div>
                                    <div class="f-time">10 mins</div>
                                </div>
                            </div>
                            <div class="f-text">I’m not sure if you know of the situation here in Buenos Aires but it isn’t easy to find a good job and ESPECIALLY FOR STUDENTS!  Cloud trader has really saved me… I’m making over 8k a week and that’s not even an amount possible to make in a month here!  God bless you all</div>
                        </div>
                        <div class="post">
                            <div class="w-row">
                                <div class="w-col w-col-2 w-col-stack w-col-tiny-6"><img src="/img/cloudtrader/attachments/2.jpg" class="facebook-profile">
                                </div>
                                <div class="w-col w-col-10 w-col-stack w-col-tiny-6">
                                    <div class="f-name"> &nbsp;Johnny Vince</div>
                                    <div class="f-time">10 mins</div>
                                </div>
                            </div>
                            <div class="f-text">Now that I’ve tested this software for a few weeks I will make sure to get the word out on the how effective it has been! I have many followers and FB and on my blog and such software should not be left a secret. They will be happy to ready about how I have been making an average of 1133 Euros every trading day of the week.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-col w-col-4">
                <h1 id="time" class="update-txt dark">2016 Verified Member Profits<br>Last Updated: 04.04.16</h1>
                <div data-animation="slide" data-duration="500" data-infinite="1" data-delay="4000" data-autoplay="1" class="w-slider slider">
                    <div class="w-slider-mask mask">
                        <div class="w-slide">
                            <div class="members-div"><img src="/img/cloudtrader/pics/images1.jpg" class="pic">
                                <h1 class="name-profile">Joshua Ross</h1>
                                <div class="w-row row">
                                    <div class="w-col w-col-6 row-clm lt">
                                        <div class="profile-txt">Member: 892</div>
                                    </div>
                                    <div class="w-col w-col-6 row-clm rt">
                                        <div class="profile-txt">Joined: 03.02.2016</div>
                                    </div>
                                </div>
                                <div class="w-row row">
                                    <div class="w-col w-col-6 row-clm lb">
                                        <div class="profile-txt">Country: France</div>
                                    </div>
                                    <div class="w-col w-col-6 row-clm rb">
                                        <div class="profile-txt">Total Revenues: $13,682</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-slide">
                            <div class="members-div"><img src="/img/cloudtrader/pics/images2.jpg" class="pic">
                                <h1 class="name-profile">Mathias Gruber</h1>
                                <div class="w-row row">
                                    <div class="w-col w-col-6 row-clm lt">
                                        <div class="profile-txt">Member: 629</div>
                                    </div>
                                    <div class="w-col w-col-6 row-clm rt">
                                        <div class="profile-txt">Joined: 02.25.2016</div>
                                    </div>
                                </div>
                                <div class="w-row row">
                                    <div class="w-col w-col-6 row-clm lb">
                                        <div class="profile-txt">Country: England</div>
                                    </div>
                                    <div class="w-col w-col-6 row-clm rb">
                                        <div class="profile-txt">Total Revenues: $6,850</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-slide">
                            <div class="members-div"><img src="/img/cloudtrader/pics/images6.jpg" class="pic">
                                <h1 class="name-profile">Bruce Levik</h1>
                                <div class="w-row row">
                                    <div class="w-col w-col-6 row-clm lt">
                                        <div class="profile-txt">Member: 594</div>
                                    </div>
                                    <div class="w-col w-col-6 row-clm rt">
                                        <div class="profile-txt">Joined: 02.18.2016</div>
                                    </div>
                                </div>
                                <div class="w-row row">
                                    <div class="w-col w-col-6 row-clm lb">
                                        <div class="profile-txt">Country: Canada</div>
                                    </div>
                                    <div class="w-col w-col-6 row-clm rb">
                                        <div class="profile-txt">Total Revenues: $9,729</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-slide">
                            <div class="members-div"><img src="/img/cloudtrader/pics/images7.jpg" class="pic">
                                <h1 class="name-profile">Ronald Smit</h1>
                                <div class="w-row row">
                                    <div class="w-col w-col-6 row-clm lt">
                                        <div class="profile-txt">Member: 553</div>
                                    </div>
                                    <div class="w-col w-col-6 row-clm rt">
                                        <div class="profile-txt">Joined: 02.15.2016</div>
                                    </div>
                                </div>
                                <div class="w-row row">
                                    <div class="w-col w-col-6 row-clm lb">
                                        <div class="profile-txt">Country: Australia</div>
                                    </div>
                                    <div class="w-col w-col-6 row-clm rb">
                                        <div class="profile-txt">Total Revenues: $11,108</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-col w-col-4">
                <div class="social-div"><img src="/img/cloudtrader/tw.png" class="social-logo">
                    <div class="feed">
                        <div class="post t">
                            <div class="w-row">
                                <div class="w-col w-col-2">
                                    <img src="/img/cloudtrader/attachments/12.jpg">
                                </div>
                                <div class="w-col w-col-10">
                                    <div class="f-text t"><a class="t-link" href="#">&nbsp; Jeannie Tran</a>&nbsp;Another morning of 8 successful trades!. <a class="t-link" href="#">@cloudtrader</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post t">
                            <div class="w-row">
                                <div class="w-col w-col-2">
                                    <img src="/img/cloudtrader/attachments/8.jpg">
                                </div>
                                <div class="w-col w-col-10">
                                    <div class="f-text t"><a class="t-link" href="#"> &nbsp;Katie Alvarez</a> So far this week $9,030 in cash profits. <a class="t-link" href="#">@cloudtrader</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post t">
                            <div class="w-row">
                                <div class="w-col w-col-2">
                                    <img src="/img/cloudtrader/attachments/13.jpg">
                                </div>
                                <div class="w-col w-col-10">
                                    <div class="f-text t"><a class="t-link" href="#"> &nbsp;Bert Bailey</a> Loving the autopilot!  <a class="t-link" href="#">@cloudtrader</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post t">
                            <div class="w-row">
                                <div class="w-col w-col-2">
                                    <img src="/img/cloudtrader/attachments/14.jpg">
                                </div>
                                <div class="w-col w-col-10">
                                    <div class="f-text t"><a class="t-link" href="#"> &nbsp;Joan Richardson</a> Today, $1,545 and it just doesn’t stop growing!   <a class="t-link" href="#">@cloudtrader</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post t">
                            <div class="w-row">
                                <div class="w-col w-col-2">
                                    <img src="/img/cloudtrader/attachments/5.jpg">
                                </div>
                                <div class="w-col w-col-10">
                                    <div class="f-text t"><a class="t-link" href="#"> &nbsp;Jeremiah Carr</a>It's my first day, hope it goes well<a class="t-link" href="#">@cloudtrader</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="education" class="w-section section-3">
        <div class="w-container">
            <div class="w-row">
                <div class="w-col w-col-6">
                    <h1 id="section-2" data-ix="fade-from-top" class="h1">Total Members:</h1>
                    <div data-ix="fade-from-top-2" id="totalMembersAmount" class="number">1,231</div>
                </div>
                <div class="w-col w-col-6">
                    <h1 id="section-2" data-ix="fade-from-top" class="h1">Total Members Profits</h1>
                    <div data-ix="fade-from-top-2" class="number color">$<span id="totalMembersProfits">128,221,776</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-section footer">
        <div class="w-container">
            <div class="footer-txt">This site and the products and services offered on this site are not associated, affiliated, endorsed, or sponsored by Google, Clickbank, eBay, Amazon, Yahoo or Bing.
                <br>Copyright 2016 - CloudTrader - All Rights Reserved</div>
        </div>
    </div>
    {{--<div style="display:none">--}}
        {{--<iframe name="interiframe"></iframe>--}}
        {{--<form method="post" action="http://geniemail.net/mail/form.php?form=3" id="interform" target="interiframe">--}}
            {{--<input type="text" name="email" id="interemail" value="" />--}}
            {{--<input type="text" name="CustomFields[2]" id="intername" value="" />--}}
            {{--<input type="hidden" name="format" value="h" />--}}
        {{--</form>--}}

        {{--<iframe name="griframe"></iframe>--}}
        {{--<form action="http://www.untappedseo.net/add_subscriber.html" accept-charset="utf-8" method="post" target="griframe" id="grform">--}}
            {{--<input type="text" name="first_name" id="grname" /><br/>--}}
            {{--<input type="text" name="email" id="gremail" /><br/>--}}
            {{--<input type="hidden" name="campaign_token" value="b" />--}}
            {{--<input type="hidden" name="start_day" value="0" />--}}
        {{--</form>--}}
    {{--</div>--}}
@endsection