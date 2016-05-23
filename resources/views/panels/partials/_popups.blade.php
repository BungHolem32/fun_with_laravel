<?php $c = \Session::get('spotCustomer'); ?>
<div class="modal animated fadeInDown" id="thanku" tabindex="-1" role="dialog" aria-labelledby="depositModalLabel"
     aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header depositTitle">
                <button onclick="" type="image" class="xclose close">×</button>
            </div>
            <div class="center">
                <br>
                <br>
                <i class="fa fa-check-circle fa-2x"></i>
                <br>
                <br>
                @ln(Thank you for investing at) {{$page->brand->name}}.
                <br><br>
                <img src="{{$page->brand->logo}}" alt="{{$page->brand->name}}">
                <br><br>
                {{--<button  class="close">@ln(Close)</button>--}}
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal animated fadeInDown" id="welcomeModal" tabindex="-1" role="dialog" aria-labelledby="depositModalLabel"
     aria-hidden="true" data-backdrop="static" style="display:block">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header depositTitle">
                <button onclick="" type="image" class="close">×</button>
                Welcome to {{ $page->title_h1 }} Method!
            </div>
            <div class="modal-body">
                <div class="welcome-top-content">
                    This Software cannot do anything until your account has a positive balance to run trades,
                    so make sure to deposit some money into your {{ $page->title_h1 }} Method trading account to get
                    started.
                    <br><span
                            style="">(Remember, this is your money &amp; you can always withdraw it at any time.)</span>
                </div>
                <div style="margin: 0 auto;">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="col-md-6 col-sm-6 ">
                            <div class="col-md-12 col-sm-12 "
                                 style="padding: 0px !important; font-size: 20px; text-align:center; background: rgb(239, 244, 255);">
                                <div style="color: #54bcc8;font-size: 18px;font-weight: 600;-moz-border-radius: 2px;padding: .5em 1em;line-height: 1;text-align: left;">
                                    Step 1 - Fund Your {{ $page->brand->name }} Broker Account.
                                </div>
                                <a href="{{ $page->brand->link }}" target="_blank">
                                    <img src="{{ $page->brand->logo }}" class="brokerlogo">
                                </a>
                            </div>
                            <div class="col-md-12  col-sm-12"
                                 style="padding: 0px !important;font-size: 20px;text-align: center;border-top: 1px dashed black;background: rgb(236, 240, 241);">
                                <div style="color: #54bcc8;font-size: 18px;font-weight: 600;-moz-border-radius: 2px;padding: .5em 1em;line-height: 1;text-align: left;">
                                    Step 2 - Activate your {{ $page->title_h1 }} Method software.
                                </div>
                                <img src="/img/aussie/panel/rocket.gif"
                                     style="width: 120px; display: block; margin: 0 auto;">
                            </div>
                            <div class="col-md-12  col-sm-12"
                                 style="padding: 0px !important;font-size: 20px;text-align: center;background: rgb(252, 251, 237);border-top: 1px dashed black;">
                                <div style="color: #54bcc8;font-size: 18px;font-weight: 600;-moz-border-radius: 2px;padding: .5em 1em;line-height: 1;text-align: left;">
                                    Step 3 - Relax And Watch Your Profit Grow.
                                </div>
                                <img src="/img/aussie/panel/money.gif"
                                     style="width: 120px; display: block; margin: 0 auto;">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div id="videoc">
                                @include('funnels.layouts._partials._video', ['video_url'=>$page->welcomePopup->video,'w'=>'100%','controls'=>1])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Get Started</button>
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
                <h2 class="modal-title" id="myModalLabel">{{ $page->title_h1 }} Method FAQ</h2>
            </div>
            <div class="modal-body" style="background: white;">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#">
                                    <i class="fa fa-bullseye" style="color: black;"></i> How much
                                    does {{ $page->title_h1 }} Method cost?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p> {{ $page->title_h1 }} Method is completely free of charge. As we said before, we
                                    don’t need nor want your credit card or Paypal details.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#">
                                    <i class="fa fa-bullseye" style="color: black;"></i> How much money can I make
                                    with {{ $page->title_h1 }} Method?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p> Your profits are unlimited and are dependent on how much you are prepared to
                                    invest. </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#">
                                    <i class="fa fa-bullseye" style="color: black;"></i> How can I make a profit
                                    using {{ $page->title_h1 }} Method?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p> In 3 easy steps, you will be on your way to riches with {{ $page->title_h1 }}Method:<br>
                                    1. Make a deposit.<br>
                                    2. Start using {{ $page->title_h1 }} Method.<br>
                                    3. Watch your profits grow.<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#">
                                    <i class="fa fa-bullseye" style="color: black;"></i> How much does it cost to open
                                    an account with the recommended binary options broker?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p> There is no extra charge to open a trading account, and once you have completed the
                                    short registration form, your trading account will be open. We have managed to
                                    select the better and most reliable brokers, so you will never have to experience
                                    any delays or bad experiences.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#">
                                    <i class="fa fa-bullseye" style="color: black;"></i> Do I need to have previous
                                    experience with binary options trading in order to use {{ $page->title_h1 }} Method?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p> No, you do not. {{ $page->title_h1 }} Method is designed to work fully automated and
                                    100% hands free, so even a complete newbie can make a profit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#">
                                    <i class="fa fa-bullseye" style="color: black;"></i> Do I need to download any other
                                    software in order to trade binary options?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSeven" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p> No, the trading interface is 100% web-based so no software download is required. So,
                                    there aren’t any messy downloads or installations everything is ready for you to
                                    start making money.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#">
                                    <i class="fa fa-bullseye" style="color: black;"></i> What is the minimum investment
                                    amount per trade?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseEight" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p> The minimum investment amount per trade is only $25.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#">
                                    <i class="fa fa-bullseye" style="color: black;"></i> How do I withdraw my profits
                                    from my trading account?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseNine" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p> Withdrawals are simple and our preferred binary options broker provides a selection
                                    of withdrawal options. All withdrawal requests are processed within 1-2 business
                                    days. Again, we have consistently tested all brokers, and we only choose the ones
                                    that perform the better and processed withdrawls easily and without any delays.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#">
                                    <i class="fa fa-bullseye" style="color: black;"></i> What can I trade in when I
                                    trade binary options?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseEleven" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p> You can trade in a variety of underlying assets including stocks, currency pairs,
                                    indices and commodities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#">
                                    <i class="fa fa-bullseye" style="color: black;"></i> My question is not answered
                                    here, what do I do?

                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwelve" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p> Please, don’t hesitate to contact your Personal Profit Consultant and our amazing
                                    support system. Both are available 24/7 to ensure that you will make the most
                                    possible money. You can reach them here at
                                    <a href="{{ $page->brand->contactLink }}"
                                       style="color:green">{{ $page->brand->name }}</a></p>
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
                                    <div class="value-self" style="display: inline"><span class="value">0</span></div>
                                </div>
                                <div class="value-block">
                                    <div class="value-sub"><span class="content"></span>
                                        <div class="dynamicbars">Loading..</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                        <div class="widget-content-blue-wrapper changed-up">
                            <div class="widget-content-blue-inner padded">
                                <div class="pre-value-block"><i class="fa fa-check"></i> Bot Won Trades:
                                    <div class="value-self" style="display: inline;"><span class="value">0</span></div>
                                </div>
                                <div class="value-block">
                                    <div class="value-sub"><span class="content"></span>
                                        <div class="dynamicsparkline">Loading..</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center ">
                        <div class="widget-content-blue-wrapper changed-up">
                            <div class="widget-content-blue-inner padded">
                                <div class="pre-value-block"><i class="fa fa-times"></i> Bot Lost Trades:
                                    <div class="value-self" style="display: inline;"><span class="value">0</span></div>
                                </div>
                                <div class="value-block">
                                    <div class="value-sub"><span class="content"></span>
                                        <div class="dynamicsparklinelost">Loading..</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="depositModal" tabindex="-1" role="dialog" aria-labelledby="depositModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" style="border: none;">
        <div class="modal-content">
            <div class="modal-header depositTitle bg-brand-title">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-size:30px;">×
                </button>
                <h4 class="modal-title " id="myModalLabel">Deposit Now Into Your {{ $page->brand->name }} Broker
                    Account </h4>
                <p style="font-size: 15px; padding-top: 8px; margin-bottom: 0;">
                    <a class="cant-deposit" href="{{$c->getAutologinLink()}}" style="font-weight: bold; color: black;">Can't
                        See This Page Correct? Click Here </a></p>
            </div>
            <div class="modal-footer">
                                                <span class="pull-left ajax-loader">
                                                     <span style="color: green; font-size: 15px; display: none;">Deposit found, Click on Finish.</span>
                                                </span>
                <button type="button" style="position: absolute; bottom: 2%; right: 2%;" onclick=""
                        id="deposit-finish-btn" class="btn btn-success" disabled="">Finish
                </button>
                <span style="color :black; font-size: 13px; ">Deposit funds into your {{ $page->brand->name }} trading account. (Finish button will automatically be available once you've funded your account)</span>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal {{ \App\Customer::get()->balance < 100 ? 'showen hidden-ref':'hidden hidden-on hidden-ref' }}"
     id="formDepositModal" tabindex="-1" role="dialog" aria-labelledby="depositModalLabel" aria-hidden="true"
     style="outline: none; overflow-y: auto; top: 0px; height: 100%; width: 100%; display: none;">
    <div class="modal-dialog" style="border: none;">
        <div class="modal-content">
            <div class="modal-header depositTitle">
                <button type="button" class="close" aria-hidden="true" style="font-size:30px;">×</button>
                <h4 class="modal-title " id="myModalLabel">Deposit Now Into Your {{ $page->brand->name }} Broker
                    Account </h4>
            </div>
            <div class="modal-body" style="padding: 0 !important;">
                <div class="boa-deposit-form-container">
                    <div id="formDepositIframe" class="boaforms-deposit theme-undefined container higher">
                        <div class="deposit-form">
                            <div class="row mainheader">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-24 broker-logo-box">
                                    <span>Your Broker: </span>
                                    <img src="{{$page->brand->logo}}" class="broker-logo img-responsive">
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
                                        Fill in the necessary information in order to open your
                                        The {{ $page->title_h1 }} Method account and just watch it fill with you
                                        earnings.
                                    </p>
                                </div>
                            </div>
                            <div class="row" id="form_container">
                                <div class="error-message hidden-xs hidden-sm">
                                    <span class="error-text"></span>
                                </div>
                                <form class="form-horizontal" role="form" id="deposit-form" novalidate="novalidate">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-24 jumbotron" id="left_form">
                                        <div class="text-left fheader">
                                            <h2>Personal Information</h2>
                                        </div>
                                        <div class="form-group new-card-required">
                                            <label for="first_name" class="col-xs-4 control-label"><i
                                                        class="fa fa-user"></i> First Name</label>
                                            <div class="col-xs-8">
                                                <input type="text" name="first_name" class="form-control input-sm"
                                                       id="first_name" value="{{ App\Customer::get()->firstName }}"
                                                       required aria-required="true">
                                            </div>
                                        </div>
                                        <div class="form-group new-card-required">
                                            <label for="last_name" class="col-xs-4 control-label"><i
                                                        class="fa fa-user"></i> Last Name</label>

                                            <div class="col-xs-8">
                                                <input type="text" class="form-control input-sm" name="last_name"
                                                       id="last_name" value="{{ App\Customer::get()->lastName }}"
                                                       required aria-required="true">
                                            </div>
                                        </div>
                                        <div class="form-group new-card-required">
                                            <label for="email" class="col-xs-4 control-label"><i
                                                        class="fa fa-envelope-o"></i> Email</label>

                                            <div class="col-xs-8">
                                                <input type="text" class="form-control input-sm" name="email" id="email"
                                                       value="{{ App\Customer::get()->email }}" required email
                                                       aria-required="true">
                                            </div>
                                        </div>
                                        <div class="form-group new-card-required">
                                            <label for="phone" class="col-xs-4 control-label"><i
                                                        class="fa fa-phone"></i> Phone</label>

                                            <div class="col-xs-8">
                                                <input type="text" class="form-control input-sm" name="phone" id="phone"
                                                       required value="{{ \App\Customer::get()->phone}}">
                                            </div>
                                        </div>
                                        <div class="form-group new-card-required">
                                            <label for="country_id" class="col-xs-4 control-label"><i
                                                        class="fa fa-globe"></i> Country</label>
                                            <div class="col-xs-8">
                                                <select name="country_id" id="country_id" class="form-control input-sm"
                                                        required>
                                                    @include('funnels.layouts._partials._countries')
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group new-card-required">
                                            <label for="city" class="col-xs-4 control-label"><i class="fa fa-road"></i>
                                                City</label>

                                            <div class="col-xs-8">
                                                <input type="text" class="form-control input-sm" id="city" name="city"
                                                       required placeholder="City..">
                                            </div>
                                        </div>
                                        <div class="form-group new-card-required">
                                            <label for="address" class="col-xs-4 control-label"><i
                                                        class="fa fa-home"></i> Address</label>

                                            <div class="col-xs-8">
                                                <input type="text" class="form-control input-sm" name="address"
                                                       id="address" required placeholder="Address..">
                                            </div>
                                        </div>
                                        <div class="form-group new-card-required">
                                            <label for="zip_code" class="col-xs-4 control-label"><i
                                                        class="fa fa-location-arrow"></i> Zip Code</label>

                                            <div class="col-xs-8">
                                                <input type="text" class="form-control input-sm" name="zip_code"
                                                       id="zip_code" required placeholder="Zip Code..">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-24 jumbotron" id="right_form">
                                        <div class="text-left fheader">
                                            <h2>Your Payment Details</h2>
                                        </div>
                                        <div id="deposit-loading-region"></div>
                                        <div class="form-group saved-cards-group hidden">
                                            <label for="fundId" class="col-xs-4 control-label"><i
                                                        class="fa fa-credit-card"></i> Saved Cards</label>

                                            <div class="col-xs-8">
                                                <select name="fundId" id="fundId" class="form-control input-sm">
                                                    <option value="-1">Loading Credit Cards...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group new-card-required">
                                            <label for="card_type" class="col-xs-4 control-label"><i
                                                        class="fa fa-cc-visa"></i> Card Type</label>
                                            <div class="col-xs-8">
                                                <select name="card_type" id="card_type" class="form-control input-sm"
                                                        aria-required="true">
                                                    <option value="1">Visa</option>
                                                    <option value="2">Master Card</option>
                                                    <option value="3">CarteBleue</option>
                                                    <option value="4">Maestro</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group new-card-required">
                                            <label for="card_number" class="col-xs-4 control-label"><i
                                                        class="fa fa-cog fa-spin"></i> Card Number</label>

                                            <div class="col-xs-8">
                                                <input type="text" class="form-control input-sm" name="card_number"
                                                       id="card_number" required placeholder="Card Number..">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="amount" class="col-xs-4 control-label">(<i
                                                        class="fa fa-usd"></i>) Amount</label>

                                            <div class="col-xs-8">
                                                <input type="text" class="form-control input-sm" name="amount"
                                                       id="amount" required placeholder="Amount..">
                                            </div>
                                        </div>
                                        <div class="form-group new-card-required">
                                            <label for="expires_month" class="col-xs-4 control-label"><i
                                                        class="fa fa-clock-o"></i> Expiration Date</label>

                                            <div class="col-xs-3 phone-50 expires-month-container">
                                                <select name="expires_month" id="expires_month"
                                                        class="form-control input-sm">
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-5 pad phone-50">
                                                <select name="expires_year" id="expires_year"
                                                        class="form-control input-sm big">
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2029">2029</option>
                                                    <option value="2030">2030</option>
                                                    <option value="2031">2031</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group new-card-required cvv-group">
                                            <label for="cvv" class="col-xs-4 control-label"><i class="fa fa-shield"></i>
                                                CVV</label>
                                            <div class="col-xs-8 phone-50">
                                                <div class="input-group">
                                                    <input type="text" class="form-control " name="cvv" id="cvv"
                                                           required placeholder="CVV..">
                                                    <div id="cvv-popover" class="input-group-addon" tabindex="0"
                                                         role="button" data-trigger="focus" title=""><span
                                                                class="fa fa-question-circle"></span></div>
                                                    <div class="popover fade top in"
                                                         style="display:none;top:-144px;left:233px;">
                                                        <div class="arrow"></div>
                                                        <h3 class="popover-title">CVV EXAMPLE</h3>
                                                        <div class="popover-content"><img
                                                                    src="/img/aussie/panel/cvv.gif"
                                                                    style="    max-width: 179px;"/></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group depositBtnSect">
                                            <button type="submit" id="depositBtn"
                                                    class="btn btn-primary deposit-fund-btn">Get Me Started
                                            </button>
                                            <div class="loadingForm"><i class="fa fa-refresh fa-spin"></i>Proccessing...
                                            </div>
                                        </div>
                                        <div class="ajax-loader bottomDeposit">
                                            <div style="color: red;font-size: 12px;font-weight: bold;"><span>Deposit funds into your {{ $page->brand->name }}
                                                    trading account.</span><span> (Finish button will automatically be available once you've funded your account)</span>
                                            </div>
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
                In order to unlock your The {{ $page->title_h1 }}
                Method Account, You have to fund your {{ $page->brand->name }} broker account.
            </span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-24 height">
                                    <i class="fa fa-check"></i>
            <span class="button_box">
                Your {{ $page->brand->name }} account is fully connected to your The {{ $page->title_h1 }} Method. Once you get started within 3 short minutes you will see your cash flow straight to your account!
            </span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-24 height">
                                    <i class="fa fa-briefcase"></i>
            <span class="button_box deposit-link-box">
                Deposit Form Is Currently Not Working?
                <a href="{{ $c->getAutologinLink() }}" class="broker-login js-broker-login animated bounce"
                   target="_blank">Click Here</a>
                To Deposit In Your {{ $page->brand->name }} Broker Website.
            </span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-24 height" style="height: 50px;">
                                    <img src="//binarypromos.com/regforms_iframeV2/general/media/images/ssl-three.png"
                                         alt="" class="img-responsive pull-left ssl-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="deposit-loading"
                 style="position: absolute; right: 1%; top: 11%; height: 680px; width: 450px; display: none; background: rgba(0, 0, 0, 0.498039);">
                <img src="img/loading.gif" alt="loader" style="margin-top:50%;">
            </div>
            {{-- <div class="modal-footer">

             </div>--}}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->