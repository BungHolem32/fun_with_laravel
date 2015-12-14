@section('head')
    <link rel="stylesheet" href="/css/aussie/panel/style.css" />
    <link rel="stylesheet" href="/css/aussie/panel/custom.css" />
@append

@section('bottom-scripts')
    <script src="/js/aussie/panel/custom.js"></script>
    {!! $page->appendAsset(url('/js/panel-common/panel.js')) !!}
@append

@section('page-layout')

    {{-- TOP BANNER --}}
    <div id="top-panel-cover">
        <div id="top-panel" class="row">
            <div id="account-details">
                <div class="inside">
                    <h4 style="font-size: 15px; font-weight: bold;margin-top: 4px;margin-bottom: 3px;" id="toggleProfileDetailsLink">Account Details</h4>
                    <span style="font-size:13px;">Email: rotem@test.com</span><br>
                    <span style="font-size:13px;">Broker Name: Big Option</span><br>
                    <span id="balanceStatus" style="font-size:13px;"><i class="getLoading fa fa-refresh fa-spin"></i>Balance: $ 0.00</span><br>
                    <span style="font-size:13px;">Account Id: 20832933</span>
                </div>
            </div>
            <div id="aussiemethod_logo_img" style="width: 268px;margin: 0 auto;">
                <img src="/img/aussie/panel/logo.png" alt="aussiemethod_logo" id="logo">
            </div>
        </div>
    </div>


    {{-- TOP MENU --}}
    <div>
        <div id="menu_row">
            <nav class="horizontal-menu">
                <div id="accountdetailz" style="width: 22px; height: 22px; display: none; background: blue;"></div>
                <ul class="side-menu">
                    <li>
                        <a href="javascript:;" data-toggle="modal" data-target="#welcomeModal" data-backdrop="false">
                            <i class="fa fa-bookmark-o"></i> View Welcome Message
                        </a>
                    </li>
                    <li id="guided-tour">
                        <a class="guided-tour-start" href="javascript:;" id="manual">
                            <i class="fa fa-info-circle"></i> Guided Tour
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <i class="fa fa-home"></i> HomePage
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="#" id="manualTrading" rv-on-click="allowManualTrading">
                            <i class="fa fa-wrench"></i> Broker Trading Area
                        </a>
                    </li>
                    <li class="signal-modal-link hidden">
                        <a class="menulink" href="javascript:;" data-toggle="modal" onclick="showSignalModal();" data-backdrop="false">
                            <i class="fa fa-cogs"></i>Trading Signals
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="modal" data-target="#faqModal" data-backdrop="false">
                            <span class="badge pull-right"></span>
                            <i class="fa fa-comments-o "></i> FAQ
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="modal" data-target="#StatisticsModal" data-backdrop="false">
                            <span class="badge pull-right"></span>
                            <i class="fa fa-signal"></i> View Statistics
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="badge pull-right"></span>
                            <i class="fa fa-envelope"></i> Contact Us
                        </a>
                    </li>
                    <li>
                        <a href="/logout">
                            <span class="badge pull-right"></span>
                            <i class="fa fa-sign-out"></i> Log Out
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    {{-- WRAPPER --}}
    <div id="wrapper"><h1 id="site-logo">
            <a href="/">
            </a>
        </h1>
        <div class="all-wrapper"> <!-- /#bootstrap wrapper -->
            <!-- /#start of side-nav-bar -->
            <div class="row">
                <!-- /#end of side-nav-bar -->
                <div class="col-md-12 col-md-offset-0">
                    <div class="content-wrapper wood-wrapper">
                        <div class="content-inner">
                            <div class="page-header" style="display: none;">
                                <h1><i class="icon-bar-chart"></i>  <img src="img/logo.png" alt="aussiemethod" id="logo" width="22%"> <span rv-show="data.0.firstDepositDate | date | eq 0000-00-00"> </span>
                                </h1>
                            </div>
                            <div class="main-content">
                                <div id="rv-content">
                                    {{-- Guide POPUPS --}}
                                    <div id="guiders_overlay" style="display: none;"></div>
                                    <div class="guider" id="_1" style="width: 400px; position: fixed; top: 195.333px; left: 597.5px; display: none;">  <div class="guiders_content">    <h1 class="guiders_title">Welcome to the Aussie Method Trading App!</h1>    <div class="guiders_close"></div>    <p class="guiders_description">We will now guide you briefly on how to use The automatic Aussie Method Trading App that will take the trading sessions for you.</p>    <div class="guiders_buttons_container">    <a class="guiders_button" href="javascript:void(0);">Close</a><a class="guiders_button" href="javascript:void(0);">Let's Start</a></div>  </div>  <div class="guiders_arrow">  </div></div>
                                    <div class="guider" id="_2" style="width: 400px; display: none; position: absolute; top: 398.8px; left: 96px;">  <div class="guiders_content">    <h1 class="guiders_title">Deposit &amp; Activation</h1>    <div class="guiders_close"></div>    <p class="guiders_description">First click on the deposit button and fund your trading account with Big Option.</p>    <div class="guiders_buttons_container">    <a class="guiders_button" href="javascript:void(0);">Close</a><a class="guiders_button" href="javascript:void(0);">Next</a><a class="guiders_button" href="javascript:void(0);">Previous</a></div>  </div>  <div class="guiders_arrow guiders_arrow_up" style="left: 169px;">  </div></div>
                                    <div class="guider" id="_3" style="width: 400px; display: none; position: absolute; top: 399.8px; left: 597.156px;">  <div class="guiders_content">    <h1 class="guiders_title">Deposit &amp; Activation</h1>    <div class="guiders_close"></div>    <p class="guiders_description">Then make sure your App status is on activated.</p>    <div class="guiders_buttons_container">    <a class="guiders_button" href="javascript:void(0);">Close</a><a class="guiders_button" href="javascript:void(0);">Next</a><a class="guiders_button" href="javascript:void(0);">Previous</a></div>  </div>  <div class="guiders_arrow guiders_arrow_up" style="left: 169px;">  </div></div>
                                    <div class="guider" id="_4" style="width: 400px; display: none; position: absolute; top: -83.5px; left: 59.8px;">  <div class="guiders_content">    <h1 class="guiders_title">Balance Info</h1>    <div class="guiders_close"></div>    <p class="guiders_description">This is your balance with Big Option, Your balance is updated automatically.</p>    <div class="guiders_buttons_container">    <a class="guiders_button" href="javascript:void(0);">Close</a><a class="guiders_button" href="javascript:void(0);">Next</a><a class="guiders_button" href="javascript:void(0);">Previous</a></div>  </div>  <div class="guiders_arrow guiders_arrow_left" style="top: 73.5px;">  </div></div>
                                    <div class="guider" id="_5" style="width: 400px; display: none; position: absolute; top: 389.8px; left: 1099.31px;">  <div class="guiders_content">    <h1 class="guiders_title">Amount</h1>    <div class="guiders_close"></div>    <p class="guiders_description">Please choose your preferred amount per each trade.</p>    <div class="guiders_buttons_container">    <a class="guiders_button" href="javascript:void(0);">Close</a><a class="guiders_button" href="javascript:void(0);">Next</a><a class="guiders_button" href="javascript:void(0);">Previous</a></div>  </div>  <div class="guiders_arrow guiders_arrow_up" style="left: 169px;">  </div></div>
                                    <div class="guider" id="_6" style="width: 400px; display: none; position: absolute; top: 188.2px; left: 596.5px;">  <div class="guiders_content">    <h1 class="guiders_title">Running Positions</h1>    <div class="guiders_close"></div>    <p class="guiders_description">Here you can see Aussie Method Trading App searching for the best opportunity to trade for you. Once our system will find a good opportunity it will automatically execute the trading for you.</p>    <div class="guiders_buttons_container">    <a class="guiders_button" href="javascript:void(0);">Close</a><a class="guiders_button" href="javascript:void(0);">Next</a><a class="guiders_button" href="javascript:void(0);">Previous</a></div>  </div>  <div class="guiders_arrow guiders_arrow_down" style="left: 169px;">  </div></div>
                                    <div class="guider" id="_7" style="width: 400px; display: none; position: absolute; top: 381.2px; left: 596.5px;">  <div class="guiders_content">    <h1 class="guiders_title">Trading History Panel</h1>    <div class="guiders_close"></div>    <p class="guiders_description">Here you can see the latest open and closed position made by the Aussie Method Trading App ONLY! Also you can see if the sessions expired in the money or not.</p>    <div class="guiders_buttons_container">    <a class="guiders_button" href="javascript:void(0);">Close</a><a class="guiders_button" href="javascript:void(0);">Next</a><a class="guiders_button" href="javascript:void(0);">Previous</a></div>  </div>  <div class="guiders_arrow guiders_arrow_down" style="left: 169px;">  </div></div>
                                    <div class="guider" id="_8" style="width: 400px; display: none; position: absolute; top: 178.8px; left: 626.688px;">  <div class="guiders_content">    <h1 class="guiders_title">Broker Trading Area</h1>    <div class="guiders_close"></div>    <p class="guiders_description">If you wish to go to the official Big Option site, you can click on this button. On the broker's site you can find more information about the binary options industry, promotions, and more assets you can trade on by yourself without using Aussie Method Trading App recommendations.</p>    <div class="guiders_buttons_container">    <a class="guiders_button" href="javascript:void(0);">Close</a><a class="guiders_button" href="javascript:void(0);">Next</a><a class="guiders_button" href="javascript:void(0);">Previous</a></div>  </div>  <div class="guiders_arrow guiders_arrow_up" style="left: 169px;">  </div></div>
                                    <div class="guider" id="_9" style="width: 400px; display: none; position: absolute; top: -110.5px; left: 59.8px;">  <div class="guiders_content">    <h1 class="guiders_title">Account Details</h1>    <div class="guiders_close"></div>    <p class="guiders_description">Here you can see your profile details, if you would like to change your details, please contact Aussie Method Trading App support.</p>    <div class="guiders_buttons_container">    <a class="guiders_button" href="javascript:void(0);">Done</a><a class="guiders_button" href="javascript:void(0);">Previous</a></div>  </div>  <div class="guiders_arrow guiders_arrow_left" style="top: 100.5px;">  </div></div>
                                    {{-- Modal POPUPS --}}
                                    <div class="modal animated fadeInDown" id="welcomeModal" tabindex="-1" role="dialog" aria-labelledby="depositModalLabel" aria-hidden="true" data-backdrop="static" style="display:block">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header depositTitle">
                                                    <button onclick="" type="image" class="close" data-dismiss="modal" aria-hidden="true" data-toggle="modal" data-target="#formDepositModal" data-backdrop="false" rv-on-click="deposit">×</button>
                                                    Welcome to Aussie Method!
                                                </div>
                                                <div class="modal-body">
                                                    <div class="welcome-top-content">
                                                        This Software cannot do anything until your account has a positive balance to run trades,
                                                        so make sure to deposit some money into your Aussie Method trading account to get started.
                                                        <br><span style="">(Remember, this is your money &amp; you can always withdraw it at any time.)</span>
                                                    </div>
                                                    <div style="margin: 0 auto;">
                                                        <div class="col-md-12 col-sm-12 ">
                                                            <div class="col-md-6 col-sm-6 ">
                                                                <div class="col-md-12 col-sm-12 " style="padding: 0px !important; font-size: 20px; text-align:center; background: rgb(239, 244, 255);">
                                                                    <div style="color: #54bcc8;font-size: 18px;font-weight: 600;-moz-border-radius: 2px;padding: .5em 1em;line-height: 1;text-align: left;">
                                                                        Step 1 - Fund Your Big Option Broker Account.
                                                                    </div>
                                                                    <a href="//binarybonus.net/https_login_proxy.php?url=http://www.bigoption.com/bigoptionsignin.php&amp;extRedir=http://www.bigoption.com/my-account/deposit/&amp;token=&amp;email=te2323st1@test.com&amp;password=sdfasdas" target="_blank">
                                                                        <img src="https://binarypromos.com/regforms_iframeV2/general/media/images/brokers/dark/bigoption.png" class="brokerlogo">
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-12  col-sm-12" style="padding: 0px !important;font-size: 20px;text-align: center;border-top: 1px dashed black;background: rgb(236, 240, 241);">
                                                                    <div style="color: #54bcc8;font-size: 18px;font-weight: 600;-moz-border-radius: 2px;padding: .5em 1em;line-height: 1;text-align: left;">
                                                                        Step 2 - Activate your Aussie Method software.
                                                                    </div>
                                                                    <img src="/img/aussie/panel/rocket.gif" style="width: 120px; display: block; margin: 0 auto;">
                                                                </div>
                                                                <div class="col-md-12  col-sm-12" style="padding: 0px !important;font-size: 20px;text-align: center;background: rgb(252, 251, 237);border-top: 1px dashed black;">
                                                                    <div style="color: #54bcc8;font-size: 18px;font-weight: 600;-moz-border-radius: 2px;padding: .5em 1em;line-height: 1;text-align: left;">
                                                                        Step 3 - Relax And Watch Your Profit Grow.
                                                                    </div>
                                                                    <img src="/img/aussie/panel/money.gif" style="width: 120px; display: block; margin: 0 auto;">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div id="videoc"></div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success" data-dismiss="modal" rv-on-click="dismissWelcome">Get Started</button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    <div class="modal fade" id="spotfnModal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content box">
                                                <div class="modal-header bg-brand-title box-head depositTitle">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h2 class="modal-title" id="myModalLabel">Spot FN account authentication</h2>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>In order to complete your registration with us, please provide the following</h4>
                                                    <p>A clear scanned or photograph copies of:</p>
                                                    <p>A) Government issued ID, Driver's License or Passport: Please make sure your name is clearly visible. Military cards with photographs will also be accepted.</p>
                                                    <p class="note">*Feel free to cover your license or ID number.</p>
                                                    <p>B) Credit Card(s) you used for this transaction: Be sure to cover the first 12 digits of the card. DO NOT send your full credit card number. Name and last 4 digits must be visible</p>
                                                    <p class="note">*Front and back copies. Please cover your CVV number.</p>
                                                    <p>Please send these required document to:  <a href="mailto:verification@spotfn.com">verification@spotfn.com</a></p>
                                                    <p>For further information please feel free to contact us via <a href="mailto:support@spotfn.com">support@spotfn.com</a></p>
                                                    <div class="spotfn-logo">
                                                        <img src="https://bot2test.binarybonus.net/img/logos/spotfn.png" alt="spotFN">
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    <!-- FAQ MODAL -->
                                    <div class="modal fade" id="faqModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content box">
                                                <div class="modal-header bg-brand-title box-head depositTitle">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h2 class="modal-title" id="myModalLabel">Aussie Method FAQ</h2>
                                                </div>
                                                <div class="modal-body" style="background: white;">
                                                    <div class="panel-group" id="accordion">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                                        <i class="fa fa-bullseye" style="color: black;"></i> How much does Aussie Method cost?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <p> Aussie Method is completely free of charge. As we said before, we don’t need nor want your credit card or Paypal details.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                                        <i class="fa fa-bullseye" style="color: black;"></i> How much money can I make with Aussie Method?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <p>  Your profits are unlimited and are dependent on how much you are prepared to invest. </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                                        <i class="fa fa-bullseye" style="color: black;"></i> How can I make a profit using Aussie Method?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFour" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <p> In 3 easy steps, you will be on your way to riches with Aussie Method:<br>
                                                                        1. Make a deposit.<br>
                                                                        2. Start using Aussie Method.<br>
                                                                        3. Watch your profits grow.<br>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                                        <i class="fa fa-bullseye" style="color: black;"></i> How much does it cost to open an account with the recommended binary options broker?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFive" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <p>  There is no extra charge to open a trading account, and once you have completed the short registration form, your trading account will be open. We have managed to select the better and most reliable brokers, so you will never have to experience any delays or bad experiences.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                                                        <i class="fa fa-bullseye" style="color: black;"></i> Do I need to have previous experience with binary options trading in order to use Aussie Method?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseSix" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <p> No, you do not. Aussie Method is designed to work fully automated and 100% hands free, so even a complete newbie can make a profit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                                                                        <i class="fa fa-bullseye" style="color: black;"></i> Do I need to download any other software in order to trade binary options?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseSeven" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <p>   No, the trading interface is 100% web-based so no software download is required. So, there aren’t any messy downloads or installations everything is ready for you to start making money.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                                                                        <i class="fa fa-bullseye" style="color: black;"></i> What is the minimum investment amount per trade?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseEight" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <p>  The minimum investment amount per trade is only $25.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
                                                                        <i class="fa fa-bullseye" style="color: black;"></i> How do I withdraw my profits from my trading account?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseNine" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <p>  Withdrawals are simple and our preferred binary options broker provides a selection of withdrawal options. All withdrawal requests are processed within 1-2 business days. Again, we have consistently tested all brokers, and we only choose the ones that perform the better and processed withdrawls easily and without any delays.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">
                                                                        <i class="fa fa-bullseye" style="color: black;"></i> What can I trade in when I trade binary options?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseEleven" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <p>   You can trade in a variety of underlying assets including stocks, currency pairs, indices and commodities.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">
                                                                        <i class="fa fa-bullseye" style="color: black;"></i> My question is not answered here, what do I do?

                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTwelve" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <p>  Please, don’t hesitate to contact your Personal Profit Consultant and our amazing support system. Both are available 24/7 to ensure that you will make the most possible money. You can reach them here at
                                                                        <a href="mailto:support@aussiemethod.com" style="color:green">support@aussiemethod.com</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    <!-- STATISTICS MODAL -->
                                    <div class="modal fade" id="StatisticsModal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content box">
                                                <div class="modal-header bg-brand-title box-head depositTitle">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h2 class="modal-title" id="myModalLabel">Your Statistics </h2>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row statistics-block">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                                                            <div class="widget-content-blue-wrapper changed-up">
                                                                <div class="widget-content-blue-inner padded">
                                                                    <div class="pre-value-block"><i class="fa fa-signal"></i> Bot Total Trades:
                                                                        <div class="value-self" style="display: inline"><span class="value" rv-text="summary.total | default 0">0</span></div>
                                                                    </div>
                                                                    <div class="value-block" rv-class-secondary="user.WasActivated">
                                                                        <div class="value-sub"><span class="content"></span><div class="dynamicbars">Loading..</div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                                                            <div class="widget-content-blue-wrapper changed-up">
                                                                <div class="widget-content-blue-inner padded">
                                                                    <div class="pre-value-block"><i class="fa fa-check"></i> Bot Won Trades:
                                                                        <div class="value-self" style="display: inline;"><span class="value" rv-text="summary.won | default 0">0</span></div>
                                                                    </div>
                                                                    <div class="value-block" rv-class-tertiary="user.WasActivated">
                                                                        <div class="value-sub"><span class="content"></span> <div class="dynamicsparkline">Loading..</div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 text-center ">
                                                            <div class="widget-content-blue-wrapper changed-up">
                                                                <div class="widget-content-blue-inner padded">
                                                                    <div class="pre-value-block"><i class="fa fa-times"></i> Bot Lost Trades:
                                                                        <div class="value-self" style="display: inline;"><span class="value" rv-text="summary.lost | default 0">0</span></div>
                                                                    </div>
                                                                    <div class="value-block">
                                                                        <div class="value-sub"><span class="content"></span>  <div class="dynamicsparklinelost">Loading..</div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    <div class="modal fade" id="depositModal" tabindex="-1" role="dialog" aria-labelledby="depositModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" style="border: none;">
                                            <div class="modal-content">
                                                <div class="modal-header depositTitle bg-brand-title">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-size:30px;">×</button>
                                                    <h4 class="modal-title " id="myModalLabel">Deposit Now Into Your Big Option Broker Account </h4>
                                                    <p style="font-size: 15px; padding-top: 8px; margin-bottom: 0;">
                                                        <a class="cant-deposit" href="//binarybonus.net/https_login_proxy.php?url=http://www.bigoption.com/bigoptionsignin.php&amp;extRedir=http://www.bigoption.com/my-account/deposit/&amp;token=&amp;email=te2323st1@test.com&amp;password=sdfasdas" target="a_blank" style="font-weight: bold; color: black;">Can't See This Page Correct?  Click Here </a> </p>
                                                </div>
                                                <div class="modal-body" style="padding:0;">
                                                    <iframe height="700" width="100%" name="depositFrame" id="depositFrame" frameborder="0">
                                                    </iframe>
                                                </div>
                                                <div class="modal-footer">
                                                <span class="pull-left ajax-loader" rv-show="lastDepositDate | eq 0000-00-00">
                                                     <span style="color: green; font-size: 15px; display: none;" rv-show="data.0.firstDepositDate | date | not_eq 0000-00-00">Deposit found, Click on Finish.</span>
                                                </span>
                                                    <button type="button" style="position: absolute; bottom: 2%; right: 2%;" onclick="" id="deposit-finish-btn" class="btn btn-success" data-dismiss="modal" rv-enabled="data.0.firstDepositDate | date | not_eq 0000-00-00" disabled="">Finish</button>
                                                    <span style="color :black; font-size: 13px; " rv-show="data.0.firstDepositDate | date | eq 0000-00-00">Deposit funds into your Big Option trading account. (Finish button will automatically be available once you've funded your account)</span>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    <div class="modal" id="formDepositModal" tabindex="-1" role="dialog" aria-labelledby="depositModalLabel" aria-hidden="true" style="outline: none; overflow-y: auto; top: 0px; height: 100%; width: 100%; display: none;">
                                        <div class="modal-dialog" style="border: none;">
                                            <div class="modal-content">
                                                <div class="modal-header depositTitle">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-size:30px;">×</button>
                                                    <h4 class="modal-title " id="myModalLabel">Deposit Now Into Your Big Option Broker Account </h4>
                                                    <p id="formDepositModal_cantdep">
                                                        <a class="cant-deposit" style="color:black;" href="//binarybonus.net/https_login_proxy.php?url=http://www.bigoption.com/bigoptionsignin.php&amp;extRedir=http://www.bigoption.com/my-account/deposit/&amp;token=&amp;email=te2323st1@test.com&amp;password=sdfasdas" target="a_blank">Can't See This Page Correct?  Click Here </a> </p>
                                                </div>
                                                <div class="modal-body" style="padding: 0 !important;">
                                                    <div class="boa-deposit-form-container"><div id="formDepositIframe" class="boaforms-deposit theme-undefined container higher"><div class="deposit-form">
                                                                <div class="row mainheader">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-24 broker-logo-box">
                                                                        <span>Your Broker: </span>
                                                                        <img src="//binarypromos.com/regforms_iframeV2/general/media/images/brokers/light/bigoption.png" class="broker-logo img-responsive">
                                                                    </div>
                                                                </div>
                                                                <div class="row underheader text-center">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <h3 class="text-center welcome">
                                                                            START RAKING IN MONEY!!
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 text-center lead">
                                                                        <p>
                                                                            Fill in the necessary information in order to open your The Aussie Method account and just watch it fill with you earnings.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="row" id="form_container">
                                                                    <div class="error-message hidden-xs hidden-sm">
                                                                        <span class="error-text"></span>
                                                                    </div>
                                                                    <form class="form-horizontal" role="form" id="registration-form" novalidate="novalidate">
                                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-24 jumbotron" id="left_form">
                                                                            <div class="text-left fheader">
                                                                                <h2>Personal Information</h2>
                                                                            </div>
                                                                            <div class="form-group new-card-required">
                                                                                <label for="first_name" class="col-xs-4 control-label"><i class="fa fa-user"></i> First Name</label>
                                                                                <div class="col-xs-8">
                                                                                    <input type="text" name="first_name" class="form-control input-sm" id="first_name" placeholder="First Name.." aria-required="true" aria-invalid="false">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group new-card-required">
                                                                                <label for="last_name" class="col-xs-4 control-label"><i class="fa fa-user"></i> Last Name</label>

                                                                                <div class="col-xs-8">
                                                                                    <input type="text" class="form-control input-sm" name="last_name" id="last_name" placeholder="Last Name.." aria-required="true" aria-invalid="false">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group new-card-required">
                                                                                <label for="email" class="col-xs-4 control-label"><i class="fa fa-envelope-o"></i> Email</label>

                                                                                <div class="col-xs-8">
                                                                                    <input type="text" class="form-control input-sm" name="email" id="email" placeholder="Email Address.." aria-required="true" aria-invalid="false">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group new-card-required">
                                                                                <label for="phone" class="col-xs-4 control-label"><i class="fa fa-phone"></i> Phone</label>

                                                                                <div class="col-xs-8">
                                                                                    <input type="text" class="form-control input-sm" name="phone" id="phone" placeholder="Phone Number.." form="registration-form" aria-required="true" aria-invalid="false">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group new-card-required">
                                                                                <label for="country_id" class="col-xs-4 control-label"><i class="fa fa-globe"></i> Country</label>

                                                                                <div class="col-xs-8">
                                                                                    <select name="country_id" id="country_id" class="form-control input-sm"><option value="1">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="4">American Samoa</option><option value="5">Andorra</option><option value="6">Angola</option><option value="7">Anguilla</option><option value="8">Antarctica</option><option value="9">Antigua and Barbuda</option><option value="10">Argentina</option><option value="11">Armenia</option><option value="12">Aruba</option><option value="13">Australia</option><option value="14">Austria</option><option value="15">Azerbaijan</option><option value="16">Bahamas</option><option value="17">Bahrain</option><option value="18">Bangladesh</option><option value="19">Barbados</option><option value="20">Belarus</option><option value="21">Belgium</option><option value="22">Belize</option><option value="23">Benin</option><option value="24">Bermuda</option><option value="25">Bhutan</option><option value="26">Bolivia</option><option value="27">Bosnia and Herzegovina</option><option value="28">Botswana</option><option value="29">Bouvet Island</option><option value="30">Brazil</option><option value="31">British Indian Ocean Territory</option><option value="32">Brunei Darussalam</option><option value="33">Bulgaria</option><option value="34">Burkina Faso</option><option value="35">Burundi</option><option value="36">Cambodia</option><option value="37">Cameroon</option><option value="38">Canada</option><option value="39">Cape Verde</option><option value="40">Cayman Islands</option><option value="41">Central African Republic</option><option value="42">Chad</option><option value="43">Chile</option><option value="44">China</option><option value="45">Christmas Island</option><option value="46">Cocos (Keeling) Islands</option><option value="47">Colombia</option><option value="48">Comoros</option><option value="49">Congo</option><option value="50">Congo, the Democratic Republic of the</option><option value="51">Cook Islands</option><option value="52">Costa Rica</option><option value="53">Cote D'Ivoire</option><option value="54">Croatia</option><option value="55">Cuba</option><option value="56">Cyprus</option><option value="57">Czech Republic</option><option value="58">Denmark</option><option value="59">Djibouti</option><option value="60">Dominica</option><option value="61">Dominican Republic</option><option value="62">Ecuador</option><option value="63">Egypt</option><option value="64">El Salvador</option><option value="65">Equatorial Guinea</option><option value="66">Eritrea</option><option value="67">Estonia</option><option value="68">Ethiopia</option><option value="69">Falkland Islands (Malvinas)</option><option value="70">Faroe Islands</option><option value="71">Fiji</option><option value="72">Finland</option><option value="73">France</option><option value="74">French Guiana</option><option value="75">French Polynesia</option><option value="76">French Southern Territories</option><option value="77">Gabon</option><option value="78">Gambia</option><option value="79">Georgia</option><option value="80">Germany</option><option value="81">Ghana</option><option value="82">Gibraltar</option><option value="83">Greece</option><option value="84">Greenland</option><option value="85">Grenada</option><option value="86">Guadeloupe</option><option value="87">Guam</option><option value="88">Guatemala</option><option value="89">Guinea</option><option value="90">Guinea-Bissau</option><option value="91">Guyana</option><option value="92">Haiti</option><option value="93">Heard Island and Mcdonald Islands</option><option value="94">Holy See (Vatican City State)</option><option value="95">Honduras</option><option value="96">Hong Kong</option><option value="97">Hungary</option><option value="98">Iceland</option><option value="99">India</option><option value="100">Indonesia</option><option value="101">Iran, Islamic Republic of</option><option value="102">Iraq</option><option value="103">Ireland</option><option selected="selected" value="104">Israel</option><option value="105">Italy</option><option value="106">Jamaica</option><option value="107">Japan</option><option value="108">Jordan</option><option value="109">Kazakhstan</option><option value="110">Kenya</option><option value="111">Kiribati</option><option value="112">Korea, Democratic People's Republic of</option><option value="113">Korea, Republic of</option><option value="114">Kuwait</option><option value="115">Kyrgyzstan</option><option value="116">Lao People's Democratic Republic</option><option value="117">Latvia</option><option value="118">Lebanon</option><option value="119">Lesotho</option><option value="120">Liberia</option><option value="121">Libyan Arab Jamahiriya</option><option value="122">Liechtenstein</option><option value="123">Lithuania</option><option value="124">Luxembourg</option><option value="125">Macao</option><option value="126">Macedonia, the Former Yugoslav Republic of</option><option value="127">Madagascar</option><option value="128">Malawi</option><option value="129">Malaysia</option><option value="130">Maldives</option><option value="131">Mali</option><option value="132">Malta</option><option value="133">Marshall Islands</option><option value="134">Martinique</option><option value="135">Mauritania</option><option value="136">Mauritius</option><option value="137">Mayotte</option><option value="138">Mexico</option><option value="139">Micronesia, Federated States of</option><option value="140">Moldova, Republic of</option><option value="141">Monaco</option><option value="142">Mongolia</option><option value="143">Montserrat</option><option value="144">Morocco</option><option value="145">Mozambique</option><option value="146">Myanmar</option><option value="147">Namibia</option><option value="148">Nauru</option><option value="149">Nepal</option><option value="150">Netherlands</option><option value="151">Netherlands Antilles</option><option value="152">New Caledonia</option><option value="153">New Zealand</option><option value="154">Nicaragua</option><option value="155">Niger</option><option value="156">Nigeria</option><option value="157">Niue</option><option value="158">Norfolk Island</option><option value="159">Northern Mariana Islands</option><option value="160">Norway</option><option value="161">Oman</option><option value="162">Pakistan</option><option value="163">Palau</option><option value="164">Palestinian Territory</option><option value="165">Panama</option><option value="166">Papua New Guinea</option><option value="167">Paraguay</option><option value="168">Peru</option><option value="169">Philippines</option><option value="170">Pitcairn</option><option value="171">Poland</option><option value="172">Portugal</option><option value="173">Puerto Rico</option><option value="174">Qatar</option><option value="175">Reunion</option><option value="176">Romania</option><option value="177">Russia</option><option value="178">Rwanda</option><option value="179">Saint Helena</option><option value="180">Saint Kitts and Nevis</option><option value="181">Saint Lucia</option><option value="182">Saint Pierre and Miquelon</option><option value="183">Saint Vincent and the Grenadines</option><option value="184">Samoa</option><option value="185">San Marino</option><option value="186">Sao Tome and Principe</option><option value="187">Saudi Arabia</option><option value="188">Senegal</option><option value="189">Serbia and Montenegro</option><option value="190">Seychelles</option><option value="191">Sierra Leone</option><option value="192">Singapore</option><option value="193">Slovakia</option><option value="194">Slovenia</option><option value="195">Solomon Islands</option><option value="196">Somalia</option><option value="197">South Africa</option><option value="198">South Georgia and the South Sandwich Islands</option><option value="199">Spain</option><option value="200">Sri Lanka</option><option value="201">Sudan</option><option value="202">Suriname</option><option value="203">Svalbard and Jan Mayen</option><option value="204">Swaziland</option><option value="205">Sweden</option><option value="206">Switzerland</option><option value="207">Syrian Arab Republic</option><option value="208">Taiwan, Province of China</option><option value="209">Tajikistan</option><option value="210">Tanzania, United Republic of</option><option value="211">Thailand</option><option value="212">Timor-Leste</option><option value="213">Togo</option><option value="214">Tokelau</option><option value="215">Tonga</option><option value="216">Trinidad and Tobago</option><option value="217">Tunisia</option><option value="218">Turkey</option><option value="219">Turkmenistan</option><option value="220">Turks and Caicos Islands</option><option value="221">Tuvalu</option><option value="222">Uganda</option><option value="223">Ukraine</option><option value="224">United Arab Emirates</option><option value="225">United Kingdom</option><option value="226">United States</option><option value="227">United States Minor Outlying Islands</option><option value="228">Uruguay</option><option value="229">Uzbekistan</option><option value="230">Vanuatu</option><option value="231">Venezuela</option><option value="232">Viet Nam</option><option value="233">Virgin Islands, British</option><option value="234">Virgin Islands, U.s.</option><option value="235">Wallis and Futuna</option><option value="236">Western Sahara</option><option value="237">Yemen</option><option value="238">Zambia</option><option value="239">Zimbabwe</option><option value="240">Kosovo</option></select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group new-card-required">
                                                                                <label for="city" class="col-xs-4 control-label"><i class="fa fa-road"></i> City</label>

                                                                                <div class="col-xs-8">
                                                                                    <input type="text" class="form-control input-sm" id="city" name="city" placeholder="City..">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group new-card-required">
                                                                                <label for="address" class="col-xs-4 control-label"><i class="fa fa-home"></i> Address</label>

                                                                                <div class="col-xs-8">
                                                                                    <input type="text" class="form-control input-sm" name="address" id="address" placeholder="Address..">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group new-card-required">
                                                                                <label for="zip_code" class="col-xs-4 control-label"><i class="fa fa-location-arrow"></i> Zip Code</label>

                                                                                <div class="col-xs-8">
                                                                                    <input type="text" class="form-control input-sm" name="zip_code" id="zip_code" placeholder="Zip Code..">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-24 jumbotron" id="right_form">
                                                                            <div class="text-left fheader">
                                                                                <h2>Your Payment Details</h2>
                                                                            </div>
                                                                            <div id="deposit-loading-region"></div>
                                                                            <div class="form-group saved-cards-group hidden">
                                                                                <label for="fund_id" class="col-xs-4 control-label"><i class="fa fa-credit-card"></i> Saved Cards</label>

                                                                                <div class="col-xs-8">
                                                                                    <select name="fund_id" id="fund_id" class="form-control input-sm">
                                                                                        <option value="-1">Loading Credit Cards...</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group new-card-required">
                                                                                <label for="card_type" class="col-xs-4 control-label"><i class="fa fa-cc-visa"></i> Card Type</label>
                                                                                <div class="col-xs-8">
                                                                                    <select name="card_type" id="card_type" class="form-control input-sm" aria-required="true" aria-invalid="false">
                                                                                        <option value="1">Visa</option>
                                                                                        <option value="2">Master Card</option>
                                                                                        <option value="3">CarteBleue</option>
                                                                                        <option value="4">Maestro</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group new-card-required">
                                                                                <label for="card_number" class="col-xs-4 control-label"><i class="fa fa-cog fa-spin"></i> Card Number</label>

                                                                                <div class="col-xs-8">
                                                                                    <input type="text" class="form-control input-sm" name="card_number" id="card_number" placeholder="Card Number..">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="amount" class="col-xs-4 control-label">(<i class="fa fa-usd"></i>) Amount</label>

                                                                                <div class="col-xs-8">
                                                                                    <input type="text" class="form-control input-sm" name="amount" id="amount" placeholder="Amount..">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group new-card-required">
                                                                                <label for="expires_month" class="col-xs-4 control-label"><i class="fa fa-clock-o"></i> Expiration Date</label>

                                                                                <div class="col-xs-3 phone-50 expires-month-container">
                                                                                    <select name="expires_month" id="expires_month" class="form-control input-sm"><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>
                                                                                </div>
                                                                                <div class="col-xs-5 pad phone-50">
                                                                                    <select name="expires_year" id="expires_year" class="form-control input-sm big"><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option></select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group new-card-required cvv-group">
                                                                                <label for="cvv" class="col-xs-4 control-label"><i class="fa fa-shield"></i> CVV</label>
                                                                                <div class="col-xs-8 phone-50">
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control " name="cvv" id="cvv" placeholder="CVV..">
                                                                                        <div id="cvv-popover" class="input-group-addon" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-html="true" data-placement="top" data-content="<img src='//splitter.binarypromos.com/boaform/img/cvv.gif' class='img-responsive' >" data-original-title="CVV Example"><span class="fa fa-question-circle"></span></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <button type="submit" id="reg-btn" class="btn btn-primary deposit-fund-btn">Get Me Started </button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                    <div class="error-message hidden visible-xs visible-sm">
                                                                        <span class="error-text"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="row" style="padding:33px;">
                                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-24 height">
                                                                        <i class="fa fa-wrench"></i>
            <span class="button_box">
                In order to unlock your The Aussie Method Account, You have to fund your Big Option broker account.
            </span>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-24 height">
                                                                        <i class="fa fa-check"></i>
            <span class="button_box">
                Your Big Option account is fully connected to your The Aussie Method. Once you get started within 3 short minutes you will see your cash flow straight to your account!
            </span>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-24 height">
                                                                        <i class="fa fa-briefcase"></i>
            <span class="button_box deposit-link-box">
                Deposit Form Is Currently Not Working?
                <a href="https://binarybonus.net/https_login_proxy.php?url=http://www.bigoption.com/bigoptionsignin.php&amp;email=te2323st1@test.com&amp;password=sdfasdas&amp;token=587937&amp;extRedir=http://www.bigoption.com/my-account/deposit/" class="broker-login js-broker-login animated bounce" target="_blank">Click Here</a>
                To Deposit In Your Big Option Broker Website.
            </span>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-24 height" style="height: 50px;">
                                                                        <img src="//binarypromos.com/regforms_iframeV2/general/media/images/ssl-three.png" alt="" class="img-responsive pull-left ssl-center">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div></div>
                                                </div>
                                                <div id="deposit-loading" style="position: absolute; right: 1%; top: 11%; height: 680px; width: 450px; display: none; background: rgba(0, 0, 0, 0.498039);">
                                                    <img src="img/loading.gif" alt="loader" style="margin-top:50%;">
                                                </div>
                                                <div class="modal-footer">
                        <span class="ajax-loader" rv-show="lastDepositDate | eq 0000-00-00">
                             <span style="color: red;font-size: 12px;" rv-show="data.0.firstDepositDate | date | eq 0000-00-00">Deposit funds into your Big Option trading account.  <br> (Finish button will automatically be available once you've funded your account)</span>
                             <span style="color: green; font-size: 13px; display: none;" rv-show="data.0.firstDepositDate | date | not_eq 0000-00-00">Deposit found, Click on Finish.</span>
                        </span>
                                                    <button id="formDepositModal_finishBTN" type="button" class=" btn btn-success" data-dismiss="modal" rv-enabled="data.0.firstDepositDate | date | not_eq 0000-00-00" disabled="">Finish</button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    <p style="" rv-show="data.0.firstDepositDate | date | eq 0000-00-00" class="alert alert-danger note" data-toggle="modal" data-target="#formDepositModal" data-backdrop="false" rv-on-click="deposit">
                                        <span>To Activate Aussie Method System, Your Big Option  Broker Account Will Need Your Deposit.</span><br>

                                        Start Earning Money In 3 Easy Steps:
                                    </p>
                                    <div rv-show="user.Activated" style="display: none;">
                                        <p rv-show="data.0.accountBalance | number | lt 25" class="alert alert-danger note" data-toggle="modal" data-target="#formDepositModal" data-backdrop="false" rv-on-click="deposit">
                                            Attention: Your Aussie Method account is activated but your Big Option
                                            balance is running low, CLICK HERE to deposit.
                                        </p>
                                    </div>
                                    <div id="spotfn-message" rv-show="user.WasActivated" class="alert alert-danger sfnhide" style="display: none;">
                                        <a href="javascript:;" data-toggle="modal" data-target="#spotfnModal" data-backdrop="false">
                                            Attention: Spot FN account setup is still incomplete, please ClICK HERE to finalize.</a>
                                    </div>
                                    <!-- AUTO TRADING PANEL -->
                                    <div class="widget">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 text-align-center">
                                                <h5 class="subsectionheader-stat">1: Deposit Into Your Account:</h5>
                                                <a href="javascript:;" id="depositBtn" class="center glower huge mbb deposit-btn" data-toggle="modal" data-target="#formDepositModal" data-backdrop="false" rv-on-click="deposit">
                                                    <!-- /.visual -->
               		<span class="text">
						Deposit Now at
						</span>
                                                    <span class="broker-text">Big Option</span>
                                                    <!-- /.details -->
                                                </a> <!-- /.dashboard-stat -->
                                                <p style="margin-top: 5px;" class="alert alert-danger" rv-show="user.WasActivated | negate">
                                                    Your account balance is running low <br>
                                                    <span data-toggle="modal" data-target="#formDepositModal" data-backdrop="false" rv-on-click="deposit">Click To Deposit Now. </span>
                                                </p>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 text-align-center" id="activationStatus">
                                                <h5 class="subsectionheader-stat">2: Activate Auto Trading:</h5>
                                                <p>
                                                </p><div class="btn-group-md">
                                                    <div class="btn btn-default startTrade">On<span rv-show="user.Activated" style="display: none;"></span></div>
                                                    <div class="btn btn-danger stopTrade">Off<span rv-show="user.Activated | negate"></span></div>
                                                </div>
                                                <p></p>
                                                <p class="alert alert-success" rv-show="user.Activated" style="display: none;">
                                                    Aussie Method searching for new winning trades...<i class="fa fa-cog fa-spin"></i>
                                                </p>
                                                <div rv-show="user.WasActivated" style="display: none;">
                                                    <p class="alert alert-warning" rv-show="user.Activated | negate">
                                                        Click "ON" to activate your Aussie Method Trading System.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 text-center" id="amountOfTrade">
                                                <h5 class="subsectionheader-stat">3: Select Amount of Trade:</h5>

                                                <div class="btn-group-md" style="cursor: pointer;">
                                                    <div class="btn disabled btn-success" data-amount="25-50" style="cursor: pointer;"><span rv-text="currencySign">$</span> 25 - 50</div>
                                                    <div class="btn disabled btn-default" data-amount="50-100" style="cursor: pointer;"><span rv-text="currencySign">$</span> 50 - 100</div>
                                                    <div class="btn disabled btn-default" data-amount="100-150" style="cursor: pointer;"><span rv-text="currencySign">$</span> 100 - 150</div>
                                                </div>

                                            </div>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                    <div class="widget">

                                        <div class="clearfix"></div>
                                        <div class="row">

                                            <div class="text-center">
                                                <div class="subsectionheader" id="runningPositionsHeader">Aussie Method Open Trades<div class="getLoading"><i class="fa fa-refresh fa-spin"></i><div class="inside"></div></div></div>

                                                <table id="runningPositionsTable" maxpid="" class="table table-striped table-bordered shadowed table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Asset</th>
                                                        <th>Position</th>
                                                        <th>Amount</th>
                                                        <th class="hidden-mobile">Entry Rate</th>
                                                        <th class="hidden-mobile">Current Rate</th>
                                                        <th>Expiration Date</th>
                                                        <th>Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <!-- rivets: each-position -->
                                                    <tr class="odd openTrades"><td valign="top" colspan="9" class="dataTables_empty">No data available in table</td></tr>
                                                    </tbody>
                                                </table>{{--<p class="alert alert-warning table_warn_msg">There are no open positions</p>--}}
                                            </div>
                                            <div class="table-margin text-center">
                                                <div class="subsectionheader">Aussie Method Trades History<div class="getLoading"><i class="fa fa-refresh fa-spin"></i><div class="inside"></div></div></div>
                                                <div id="positionsHistoryTable_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="dt-top-row"></div><div class="dt-wrapper"><table id="positionsHistoryTable" class="table table-striped table-bordered shadowed table-hover dataTable" aria-describedby="positionsHistoryTable_info">
                                                            <thead>
                                                            <tr class="white" role="row"><th class="sorting" role="columnheader" tabindex="0" aria-controls="positionsHistoryTable" rowspan="1" colspan="1" aria-label="Asset: activate to sort column ascending" style="width: 117px;">Asset</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="positionsHistoryTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 160px;">Position</th><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Amount" style="width: 153px;">Amount</th><th class="hidden-mobile sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Entry Rate" style="width: 195px;">Entry Rate</th><th class="hidden-mobile sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Closing Rate" style="width: 236px;">Closing Rate</th><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Payout" style="width: 139px;">Payout</th><th class="hidden-mobile sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Profit" style="width: 113px;">Profit</th><th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="positionsHistoryTable" rowspan="1" colspan="1" aria-sort="descending" aria-label="Date: activate to sort column ascending" style="width: 98px;">Date</th><th class="hidden-mobile sorting" role="columnheader" tabindex="0" aria-controls="positionsHistoryTable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 131px;">Status</th></tr>
                                                            </thead>

                                                            <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd historyTrades"><td valign="top" colspan="9" class="dataTables_empty">No data available in table</td></tr></tbody></table>{{--<p class="alert alert-warning table_warn_msg">There is no history of positions</p>--}}</div><div class="dt-row dt-bottom-row"><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="positionsHistoryTable_info">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-6 text-right"><div class="dataTables_paginate paging_bootstrap"><ul class="pagination pagination-sm"><li class="prev disabled"><a href="#"><i class="icon-double-angle-left"></i> Previous</a></li><li class="next disabled"><a href="#">Next <i class="icon-double-angle-right"></i></a></li></ul></div></div></div></div></div><form id="trader_param" method="post" action=""></form>
                                                <input id="maxpid" type="hidden" name="maxpid" value="">
                                                <input id="tid" type="hidden" name="tid" value="">
                                                <input id="currency" type="hidden" name="currency">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header id="header">

            <a href="javascript:;" data-toggle="collapse" data-target=".top-bar-collapse" id="top-bar-toggle" class="navbar-toggle collapsed">
                <i class="fa fa-cog"></i>
            </a>
            <a href="javascript:;" data-toggle="collapse" data-target=".sidebar-collapse" id="sidebar-toggle" class="navbar-toggle collapsed">
                <i class="fa fa-reorder"></i>
            </a>
        </header> <!-- header -->
        <div id="content">
            <div id="content-header">
            </div> <!-- #content-header -->
            <div id="content-container">
            </div> <!-- /#content-container -->
        </div> <!-- #content -->
    </div>

    {{-- COPYRIGHTS --}}
    <footer id="footer">
	<span class="text-center" style="color:black;">
			Copyright © Aussie Method.
	</span>
    </footer>

@endsection
