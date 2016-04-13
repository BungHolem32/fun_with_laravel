@section('head')
    {{--FONT INCLUDE--}}
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300,300italic' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="/css/panels/black/libs/toggles-full.css">
    {{--BASE STYLE SHEET--}}
    <link rel="stylesheet" href="/css/panels/black/style.css"/>

@append
@section('bottom-scripts')

    {{--VALIDATE SCRIPT--}}
    {!! $page->appendAsset(url('/js/jquery.validate.js')) !!}

    {{--SOCKETIO SCRIPTS--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

    {{--BOOTSTRAP LIBARY--}}
    <script src="/js/panels/black/libs/bootstrap.min.js"></script>

    {{--TOGGLES BUTTON--}}
    <script src="/js/panels/black/libs/toggles.js"></script>

    {{--SPOTOPTIONS SOCKET--}}
    <script type="text/javascript" src="//sst-super-c-nl.spotoption.com/socket.io/socket.io.js"></script>

    {{--PANEL BASE SCRIPT--}}
    {!! $page->appendAsset(url('/js/panels/black/panel.js')) !!}

    <script src="/js/panels/black/black-script.js"></script>
    {{--Main JS--}}
    <script src="/js/panels/black/main.js"></script>

@append

{{--BASE HTML LAYOUT--}}
@section('page-layout')

    {{--WRAPPER FOR ALL CONTENT--}}
    <div class="content-wrapper">

        {{--ACCOUNT DETAILS  DESKTOP VIEW--}}
        <aside class="account-details-desktop visible-md-block visible-lg-block">

            {{--TITLE PART--}}
            <header class="account-details-title">

                {{--human avatar--}}
                <div class="img-human">
                    <img src="/img/panel/black/icon-human.png" alt="img-responsive"
                         class="icon-human-pic img-responsive block-center">
                </div>

                {{--title place--}}
                <div class="title text-uppercase">
                    account details
                </div>
            </header>

            {{--PERSONAL INFO  (BASE CONTENT FO THE TAB)--}}
            <div class="account-detail-personal-info">
                <p class="info-tab">
                    <span class="text-capitalize">email:</span>
                    <strong>youremail@gmail.com</strong>
                </p>
                <p class="info-tab">
                    <span class="text-capitalize">broker:</span>
                    <img src="/img/panel/black/icon-rboptions.png" alt="rboption logo">
                    <strong class="info-result text-uppercase">rb</strong><strong class="info-result">options</strong>
                </p>
                <p class="info-tab">
                    <span class="text-capitalize">balance:</span>

                    <strong class="info-result text-bold">1532.63</strong>
                </p>
                <p class="info-tab">
                    <span class="text-capitalize">account </span>
                    <span class="text-uppercase">id: </span>
                    <strong class="info-result">432563</strong>
                </p>
            </div>
        </aside>

        {{--NAVBAR DESKTOP--}}
        <nav class="navbar-desktop navbar navbar-default" role="navigation">
            <div class="container">
                <button class="navbar-toggle pull-left icon-menu" {{--data-toggle="collapse" data-target=".navbar-header"--}}>
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                {{--NAV BAR CONTENT IN COLLAPSE IT CHANGE HIS APPERIANCE--}}
                <div class="collapse navbar-collapse  navbar-header text-center">
                    {{--NAV BAR CONENT--}}
                    <ul class="nav navbar-nav">
                        <li class="text-uppercase navbar-part">
                            <a href="#" class="navbar-text" data-toggle="modal"
                               data-target=".modal-welcome">@ln(view welcome message)
                            </a>
                        </li>
                        <li class="text-uppercase  navbar-part">
                            <a href="javascript:;" class="navbar-text">@ln(guided tour)
                            </a>
                        </li>
                        <li class="text-uppercase  navbar-part">
                            <a href="@include('funnels.layouts._partials._url', ['url'=>$page->getParent()->fullSlug()])"
                               class="navbar-text">@ln(home page)
                            </a>
                        </li>
                        <li class="text-uppercase  navbar-part">
                            <a
                                    href="{{--{{ $c->getAutologinLink() }}--}}"
                                    class="navbar-text">@ln(broker trading area)
                            </a>
                        </li>
                        <li class="text-uppercase  navbar-part">
                            <a href="{{ $page->brand->contactLink }}" class="navbar-text">
                                @ln(contact us)
                            </a>
                        </li>
                        {{--need to change the href to the proper one--}}
                        <li class="text-uppercase  navbar-part">
                            <a href="{{ $page->brand->contactLink }}" class="navbar-text" data-toggle="modal"
                               data-target=".modal-faq">
                                @ln(faq)
                            </a>
                        </li>

                        <li class="text-uppercase logout  navbar-part">
                            <a href="/logout" class="navbar-text logout">@ln(log out)</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        {{--NAV FOR MOBILE CUSTIMIZE --}}
        <div class="navbar-mobile">

            <!-- Menu -->
            <ul class="navbar-ul-wrapper">
                <li class="navbar-li-wrapper" class="navbar-li-wrapper">
                    <a href="javascript:;" class="navbar-text-mobile" data-toggle="modal"
                       data-target=".modal-welcome">@ln(view welcome message)
                    </a>
                </li>
                <li class="navbar-li-wrapper">
                    <a href="javascript:;" class="navbar-text-mobile">
                        @ln(guided tour)
                    </a>
                </li>
                <li class="navbar-li-wrapper">
                    <a href="@include('funnels.layouts._partials._url', ['url'=>$page->getParent()->fullSlug()])"
                       class="navbar-text-mobile">@ln(home page)
                    </a>
                </li>
                <li class="navbar-li-wrapper">
                    <a
                            href="{{--{{ $c->getAutologinLink() }}--}}"
                            class="navbar-text-mobile">@ln(broker trading area)
                    </a>
                </li>
                <li class="navbar-li-wrapper">
                    <a href="{{ $page->brand->contactLink }}" class="navbar-text-mobile">
                        @ln(contact us)
                    </a>
                </li>
                <li class="navbar-li-wrapper">
                    <a href="{{ $page->brand->contactLink }}" class="navbar-text-mobile" data-toggle="modal"
                       data-target=".modal-faq">
                        @ln(faq)
                    </a>
                </li>
                <li class="navbar-li-wrapper">
                    <a href="/logout" class="navbar-text-mobile logout">@ln(log out)</a>
                </li>

            </ul>
        </div>

        {{--ACCOUNT DETAILS --}}
        <aside class="account-details-mobile visible-sm-block visible-xs-block">
            <div class="container">
                {{--TITLE PART--}}
                <div class="row">

                    {{--TITLE PART --}}
                    <header class="account-details-title col-sm-12 col-xs-12 text-center">

                        {{--HUMAN AVATAR--}}
                        <div class="img-human col-sm-2 col-xs-2 col-xs-push-3">
                            <img src="/img/panel/black/icon-human.png" alt="img-responsive"
                                 class="icon-human-pic img-responsive block-center">
                        </div>

                        {{--TITLE PLACE--}}
                        <div class="title text-uppercase col-sm-5 col-xs-push-1 col-xs-7">
                            account details
                        </div>
                    </header>

                </div>

                <div class="row">
                    {{--PERSONAL INFO  (BASE CONTENT FO THE TAB)--}}
                    <div class="account-detail-personal-info col-sm-12">

                        {{--EMAIL--}}
                        <p class="info-tab col-sm-8 col-xs-7">
                            <span class="text-capitalize">email:</span>
                            <strong>youremail@gmail.com</strong>
                        </p>

                        {{--BALANCE--}}
                        <p class="info-tab col-sm-4 col-xs-5">
                            <span class="text-capitalize">balance:</span>

                            <strong class="info-result text-bold">1532.63</strong>
                        </p>

                        {{--BROKER--}}
                        <p class="info-tab col-sm-7 col-xs-7">
                            <span class="text-capitalize">broker:</span>
                            <img src="/img/panel/black/icon-rboptions.png" alt="rboption logo">
                            <strong class="info-result text-uppercase">rb</strong><strong
                                    class="info-result ">options</strong>
                        </p>
                        {{--AOCCOUNT DETAILS--}}
                        <p class="info-tab col-sm-5 col-sm-push-1 col-xs-5">
                            <span class="text-capitalize">account </span>
                            <span class="text-uppercase">id: </span>
                            <strong class="info-result">432563</strong>
                        </p>
                    </div>
                </div>
            </div>
        </aside>


        {{--ACTIVE METHOD SYSTEM--}}
        <section class="activate-method-system container">

            <div class="row">

                {{--TITLE WRAPPER--}}
                <header class="active-method-title-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="text-uppercase method-title">to activate method system, your rboptions broker account
                        will need your
                        deposit</h3>
                </header>

                {{--SUBTITLE WRAPPER--}}
                <div class="active-method-subtitle-wrapper  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4 class="text-capitalize method-subtitle text-center">
                        <i class="fa fa-arrow-down"></i>
                        <span class="active-method-text ">start eraning money in 3 easy steps</span>
                        <i class="fa fa-arrow-down"></i>
                    </h4>
                </div>
            </div>
        </section>

        {{--ARROW AT THE BOTTOM OF THE TOP BAR--}}
        <section class="arrow-img-wrapper container">
            <div class="row">
                <img src="/img/panel/black/cont-arrow.png" alt="arrow picture"
                     class=" arrow-img col-lg-offset-1 col-md-offset-1">
            </div>
        </section>

        {{--3 TABS WITH THE STEPS--}}
        <section class="tabs-wrapper container">

            <div class="row">

                {{--FIRST TAB (LEFT)--}}
                <div class="tab-wrapper deposit col-lg-4 col-lg-offset-1 col-md-12 col-sm-12 col-xs 12">
                    <div class="top-part">
                        <span class="tab-number-in-circle text-center">1</span>
                        <p class="tab-title text-uppercase text-center">deposit into your account</p>
                    </div>
                    <div class="bottom-part">
                        <button type="button" class="tab-big-button btn btn-lg center-block text-uppercase"
                                data-toggle="modal"
                                data-target=".modal-deposit">
                            deposit now at rboptions
                        </button>
                    </div>
                </div>

                {{--SECOND TAB (CENTER)--}}
                <div class="tab-wrapper auto-trading col-lg-3 col-md-12 col-sm-12 col-xs 12">
                    <div class="top-part">
                        <span class="tab-number-in-circle text-center">2</span>
                        <p class="tab-title text-uppercase text-center">activate auto trading</p>
                    </div>
                    <div class="bottom-part">
                        <div class="tab-switch-button startTrade text-uppercase ">
                            <div class="toggles toggle-light" data-on="ON" data-off="OFF"
                                 style="height: 50px; width: 110px;">
                            </div>
                        </div>
                    </div>
                </div>

                {{--THIRD TAB (RIGHT)--}}
                <div class="tab-wrapper amount col-lg-4 col-md-12 col-sm-12 col-xs 12">
                    <div class="top-part">
                        <span class="tab-number-in-circle text-center">3</span>
                        <p class="tab-title text-uppercase text-center">select amount of trading</p>
                    </div>
                    <div class="bottom-part">
                        <div class="tab-four-buttons text-uppercase col-md-12 text-center">
                            <?php
                            if (!isset($bot_settings['minAmount']) || $bot_settings['minAmount'] == 25 && $bot_settings['maxAmount'] == 50)
                                $btnClass = 'btn-success';
                            else
                                $btnClass = 'btn-default';
                            ?>
                            <button class="btn {{$btnClass}}  btn-lg amount-btn amount-button1 btn-space"
                                    data-amount="25-50">$25 -
                                $50
                            </button>
                            <button class="btn  {{ ($bot_settings['minAmount'] == 50 && $bot_settings['maxAmount'] == 100) ? 'btn-success' : 'btn-default'}} btn-lg amount-btn amount-button2 btn-space active-btn"
                                    data-amount="50-100">$50 -
                                $100
                            </button>
                            <button class="btn {{ ($bot_settings['minAmount'] == 100 && $bot_settings['maxAmount'] == 150) ? 'btn-success' : 'btn-default'}} btn-lg amount-btn amount-button3 btn-space"
                                    data-amount="100-150">$100 -
                                $150
                            </button>
                            <button class="btn {{ ($bot_settings['minAmount'] == 150) ? 'btn-success' : 'btn-default'}}  btn-lg amount-btn amount-button4 btn-space"
                                    data-amount="150-1000">$150
                                +
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arrow-rotate visible-lg-block">
                <img src="/img/panel/black/tab-arrow.png" alt="rotate arrow">
            </div>
        </section>

        {{--TABLE WITH THE OPEN TRADE--}}
        <section class="table-responsive rb-options-open-trade">
            <div class="container">
                <table class="table col-sm-12 col-xs-12">

                    {{--TABLE TITLE (RBOPTIONS OPEN TRADE)--}}
                    <caption class="table-title text-center text-uppercase">rboptions open trades</caption>

                    {{--FIRST TABLE ROW WITH ALL THE HEADERS--}}
                    <tr class="table-headers table-row">
                        <th class="table-data text-capitalize text-center">assets</th>
                        <th class="table-data text-capitalize text-center">position</th>
                        <th class="table-data text-capitalize text-center">amount</th>
                        <th class="table-data text-capitalize text-center">entry rate</th>
                        <th class="table-data text-capitalize text-center">current rate</th>
                        <th class="table-data text-capitalize text-center">expiration date</th>
                        <th class="table-data text-capitalize text-center">status</th>
                    </tr>

                    {{--TABLE DATA--}}
                    <tr class="table-tr-content table-row text-center">
                        <td class="table-data td-assets text-capitalize"><span class="text-uppercase">s&p</span> future
                        </td>
                        <td class="table-data td-position text-uppercase"><i class="fa fa-arrow-down"></i> put</td>
                        <td class="table-data td-amount text-success">$3955</td>
                        <td class="table-data td-entry-rate">2035.632</td>
                        <td class="table-data td-current-rate text-danger">2036</td>
                        <td class="table-data td-expiration-date">2016-01-25</td>
                        <td class="table-data td-status text-capitalize">open</td>
                    </tr>
                    <tr class="table-tr-content table-row text-center">
                        <td class="table-data td-assets text-capitalize"><span class="text-uppercase">s&p</span> future
                        </td>
                        <td class="table-data td-position text-uppercase"><i class="fa fa-arrow-down"></i> put</td>
                        <td class="table-data td-amount text-success">$3955</td>
                        <td class="table-data td-entry-rate">2035.632</td>
                        <td class="table-data td-current-rate text-danger">2036</td>
                        <td class="table-data td-expiration-date">2016-01-25</td>
                        <td class="table-data td-status text-capitalize">open</td>
                    </tr>
                    <tr class="table-tr-content table-row text-center">
                        <td class="table-data td-assets text-capitalize"><span class="text-uppercase">s&p</span> future
                        </td>
                        <td class="table-data td-position text-uppercase"><i class="fa fa-arrow-down"></i> put</td>
                        <td class="table-data td-amount text-success">$3955</td>
                        <td class="table-data td-entry-rate">2035.632</td>
                        <td class="table-data td-current-rate text-danger">2036</td>
                        <td class="table-data td-expiration-date">2016-01-25</td>
                        <td class="table-data td-status text-capitalize">open</td>
                    </tr>
                    <tr class="table-tr-content table-row text-center">
                        <td class="table-data td-assets text-capitalize"><span class="text-uppercase">s&p</span> future
                        </td>
                        <td class="table-data td-position text-uppercase"><i class="fa fa-arrow-up"></i> pull</td>
                        <td class="table-data td-amount text-success">$3955</td>
                        <td class="table-data td-entry-rate">2035.632</td>
                        <td class="table-data td-current-rate text-danger">2036</td>
                        <td class="table-data td-expiration-date">2016-01-25</td>
                        <td class="table-data td-status text-capitalize">open</td>
                    </tr>

                </table>
            </div>
        </section>

        {{--TABLE WITH THE OPEN TRADE HISTORY--}}
        <section class="table-responsive rb-options-history">
            <div class="container">
                <table class="table">

                    {{--TABLE TITLE (RBOPTIONS OPEN TRADE)--}}
                    <caption class="table-title text-center text-uppercase">rboptions trade history</caption>

                    {{--FIRST TABLE ROW WITH ALL THE HEADERS--}}
                    <tr class="table-headers table-row">
                        <th class="text-capitalize text-center table-header-th">assets</th>
                        <th class="text-capitalize text-center table-header-th">position</th>
                        <th class="text-capitalize text-center table-header-th">amount</th>
                        <th class="text-capitalize text-center table-header-th">entry rate</th>
                        <th class="text-capitalize text-center table-header-th">current rate</th>
                        <th class="text-capitalize text-center table-header-th">expiration date</th>
                        <th class="text-capitalize text-center table-header-th">status</th>
                    </tr>

                    {{--TABLE DATA--}}
                    <tr class="table-tr-content table-row text-center">
                        <td class="table-data td-assets text-capitalize"><span class="text-uppercase">s&p</span> future
                        </td>
                        <td class="table-data td-position text-uppercase"><i class="fa fa-arrow-down"></i> put</td>
                        <td class="table-data td-amount text-success">$3955</td>
                        <td class="table-data td-entry-rate">2035.632</td>
                        <td class="table-data td-current-rate text-danger">2036</td>
                        <td class="table-data td-expiration-date">2016-01-25</td>
                        <td class="table-data td-status text-capitalize">close</td>
                    </tr>
                </table>
            </div>
        </section>

        {{--FOOTER WITH ALL THE LOGOS --}}
        <footer class="footer-certificate-logos">
            <div class="container">
                <img src="/img/panel/black/cartificate-321.png" alt="3 icons of guaranty"
                     class="img-responsive center-block">
                <p class="footer-copyrights text-center">Copyright © {{ $page->title_h1 }} Method. </p>

            </div>
        </footer>

        {{-- MODAL WELCOME PAGE --}}
        <div class="modal-welcome modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-welcome">

                <!-- Modal content-->
                <div class="modal-content modal-welcome-content">
                    <div class="modal-header-welcome modal-header">
                        <img src="/img/panel/black/desktop/close.png" alt="close square-logo" class="square-logo"
                             data-dismiss="modal">
                        <h3 class="modal-title-h3 text-uppercase text-center">welcome to xxx panel method!</h3>
                    </div>
                    <div class="modal-body-welcome modal-body">
                        <p class="modal-welcome-text-p">This Software cannot do anything until your account has a
                            positive balance to run trades, so
                            make sure to deposit some money into your Aussie Panel Method trading account to get
                            started.
                            <span class="model-welcome-text-ps-span">(Remember, this is your money & you can always withdraw it at any time.)</span>
                        </p>
                        <div class="steps-wrapper">

                            {{--FIRST STEP--}}
                            <div class="step-wrapper money-wrapper">

                                {{--STEP WRAPPER CIRCLE--}}
                                <div class="step-img-wrapper">
                                    <img src="/img/panel/black/desktop/step-1.png" alt="step-1 logo">
                                </div>


                                {{--TEXT INSIDE THE ELEMENT--}}
                                <header class="step-content-wrapper">
                                    <h3 class="text-uppercase step-content">fund your
                                        <span class="text-uppercase">rb</span>options broker account</h3>
                                </header>
                            </div>

                            {{--SECOND STEP--}}
                            <div class="step-wrapper activate-wrapper">
                                <div class="row">
                                    {{--STEP WRAPPER CIRCLE--}}
                                    <div class="step-img-wrapper">
                                        <img src="/img/panel/black/desktop/step-2.png" alt="step-2 logo">
                                    </div>
                                </div>
                                <header class="step-content-wrapper">
                                    <h3 class="text-uppercase step-content">activate your aussie panel method
                                        software</h3>
                                </header>
                            </div>

                            {{--THIRD STEP--}}
                            <div class="step-wrapper relax-wrapper">
                                {{--STEP WRAPPER CIRCLE--}}
                                <div class="step-img-wrapper">
                                    <img src="/img/panel/black/desktop/step-3.png" alt="step-3 logo">
                                </div>

                                <header class="step-content-wrapper">
                                    <h3 class="text-uppercase step-content ">relaxing and watch your profit
                                        grow</h3>
                                </header>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer-welcome modal-footer">
                        <button type="button" class="btn text-uppercase info text-center button-welcome-footer"
                                data-dismiss="modal">get
                            started
                        </button>
                    </div>
                </div>

            </div>
        </div>

        {{--MODAL DEPOSIT PAGE WRAPPER --}}
        <div class="modal-deposit modal fade" role="dialog">
            <div class="modal-dialog-deposit modal-dialog">

                <!-- MODAL CONTENT-->
                <div class="modal-content modal-deposit-content">
                    <div class="modal-header-deposit modal-header">

                        {{--EXIT ICON--}}
                        <img src="/img/panel/black/desktop/close.png" alt="close square-logo" class="square-logo"
                             data-dismiss="modal">

                        {{--TITLE OF THE MODAL--}}
                        <h4 class="modal-title text-center text-uppercase">Deposit Now Into Your RBoptions Broker
                            Account</h4>
                    </div>

                    {{--BODY PART --}}
                    <div class="modal-body-deposit modal-body">

                        {{--BROKER NAME WRAPPER--}}
                        <div class="broker-name text-center">

                            {{--DEPOSIT TEXT WRAPPER--}}
                            <div class="deposit-broker-text-wrapper col-md-12">

                                {{--HAND LEFT-IMG--}}
                                <img src="/img/panel/black/desktop/header-hand-left.png" alt=""
                                     class="left-hand-header">
                                {{--TEXT (H2)--}}
                                <h2 class='deposit-broker-text text-center text-uppercase col-'>Your Broker: </h2>
                                {{--HAND LEFT-IMG--}}
                                <img src="/img/panel/black/desktop/header-hand-right.png" alt=""
                                     class="right-hand-header">
                            </div>
                        </div>

                        {{--DEPOSITE TITLE WRAPPER--}}
                        <header class="deposit-title-wrapper text-center">

                            {{--TEXT TITLE--}}
                            <h2 class="deposite-title text-uppercase"><strong>start raking in money!!</strong></h2>

                            {{--SUBTITLE SMALL TEXT--}}
                            <small>Fill in the necessary information in order to open your The Aussie Panel Method
                                account and just watch it fill with you earnings.
                            </small>
                        </header>

                        {{--FORM OUTER WRAPPER--}}
                        <div class="form-wrapper">

                            {{--FORM INPUTS (FORM TAG)--}}
                            <form class="form-deposit" role="form">

                                {{--FIRST ROW FORM WAPPER--}}
                                <div class="col-lg-6 first-part-form">

                                    {{--FORM TITLE PERSONAL INFO INPUT WRAPPER--}}
                                    <div class="form-title-wrapper">
                                        <h3 class="form-title text-uppercase col-md-6 col-sm-12 col-xs-12">personal
                                            information</h3>
                                        <img src="/img/panel/black/desktop/yellow-arrow.png"
                                             alt="arrow that points to the inputs"
                                             class="yellow-arrow visible-lg-inline-block visible-md-inline-block">
                                    </div>

                                    <div class="clearfix"></div>

                                    {{--FIRST NAME INPUT WRAPPER--}}
                                    <div class="form-group ">
                                        <label for="first-name" class="text-capitalize col-md-4 label-form"> first
                                            name</label>
                                        <input type="text" class="form-control col-md-8" id="first-name">
                                    </div>

                                    {{--LAST NAME INPUT WRAPPER--}}
                                    <div class="form-group ">
                                        <label for="last-name" class="text-capitalize col-md-4 label-form"> last
                                            name</label>
                                        <input type="text" class="form-control col-md-8" id="last-name">
                                    </div>
                                    {{--EMAIL INPUT WRAPPER--}}
                                    <div class="form-group ">
                                        <label for="email" class="text-capitalize col-md-4 label-form"> email</label>
                                        <input type="email" class="form-control col-md-8" id="email">
                                    </div>

                                    {{--PHONE INPUT WRAPPER--}}
                                    <div class="form-group ">
                                        <label for="phone" class="text-capitalize col-md-4 label-form">phone</label>
                                        <input type="phone" class="form-control col-md-8" id="phone">
                                    </div>

                                    {{--COUNTRY INPUT WRAPPER--}}
                                    <div class="form-group ">
                                        <label for="country" class="text-capitalize col-md-4 label-form">
                                            country</label>
                                        <input type="text" class="form-control col-md-8" id="country">
                                    </div>

                                    {{--CITY INPUT WRAPPER--}}
                                    <div class="form-group ">
                                        <label for="city" class="text-capitalize col-md-4 label-form"> city</label>
                                        <input type="text" class="form-control col-md-8" id="city">
                                    </div>

                                    {{--ADDRESS INPUT WRAPPER--}}
                                    <div class="form-group ">
                                        <label for="address" class="text-capitalize col-md-4 label-form">
                                            address</label>
                                        <input type="text" class="form-control col-md-8" id="address">
                                    </div>

                                    {{--ZIP CODE INPUT  WRAPPER--}}
                                    <div class="form-group ">
                                        <label for="zip-code" class="text-capitalize col-md-4 label-form"> zip
                                            code</label>
                                        <input type="text" class="form-control col-md-8" id="zip-code">
                                    </div>
                                </div>

                                {{--SECOND ROW FORM (DIV) --}}
                                <div class="col-lg-6 second-part-form">

                                    {{--TITLE WRAPPER INPUT WRAPPER--}}
                                    <div class="form-title-wrapper">
                                        <h3 class="form-title text-uppercase col-md-6 col-sm-12 col-xs-12 label-form">
                                            your payment
                                            details</h3>
                                        <img src="/img/panel/black/desktop/yellow-arrow.png"
                                             alt="arrow that points to the inputs"
                                             class="yellow-arrow visible-lg-block visible-md-block">
                                    </div>
                                    {{--CLEAR FIX AFTER TITLE--}}
                                    <div class="clearfix"></div>

                                    {{--CARD-TYPE INPUT WRAPPER--}}
                                    <div class="form-group ">
                                        <div class="col-md-4 card-type-title-wrapper">
                                            <label for="card-type" class="label-form text-capitalize"> card
                                                type</label>
                                            <img src="/img/panel/black/desktop/credit-cards.png" alt="card type images"
                                                 class="card-type-img visible-lg-inline-block visible-md-inline-block">
                                        </div>
                                        <select class="form-control text-capitalize col-md-8 card-type-selectbox"
                                                name="" id="card-type">
                                            <option value="-1">choose type</option>
                                            <option value="1">visa</option>
                                            <option value="2">mastercard</option>
                                            <option value="3">CarteBleue</option>
                                            <option value="4">Maestro</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>

                                    {{--CARD NUMBER INPUT WRAPPER--}}
                                    <div class="form-group card-number-after-clear-fix">
                                        <label for="card-number" class="label-form text-capitalize col-md-4"> card
                                            number</label>
                                        <input type="text" class="form-control col-md-8" id="card-number">
                                    </div>

                                    {{--AMOUNT INPUT WRAPPER--}}
                                    <div class="form-group ">
                                        <label for="amount" class="text-capitalize col-md-4 label-form"> amount</label>
                                        <input type="text" class="form-control col-md-8" id="amount">
                                    </div>

                                    {{--EXPIRATION INPUT WRAPPER--}}
                                    <div class="form-group  col-md-12 col-sm-12 col-xs-12">

                                        {{--LABEL FOR THE EXPERAION DATE--}}
                                        <label for="expiration-date" class="label-form text-capitalize col-md-4">expiration
                                            date</label>
                                        {{--SELECT BOX  FOR MONTH EXPERATION INPUT--}}
                                        <select name="month-exp" id="month-exp"
                                                class="pull-left col-lg-3 col-md-3 col-sm-6 col-xs-6 month-exp-selectbox text-capitalize">
                                            <option value="-1" class="text-capitalize">month</option>
                                            <option value="1">01</option>
                                            <option value="2">02</option>
                                            <option value="3">03</option>
                                            <option value="4">04</option>
                                            <option value="5">05</option>
                                            <option value="6">06</option>
                                            <option value="7">07</option>
                                            <option value="8">08</option>
                                            <option value="9">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>

                                        {{--SELECT BOX FOR YEAR EXPERATION INPUT--}}
                                        <select name="year-exp" id="year-exp"
                                                class="pull-right col-lg-5 col-md-4  col-sm-6 col-xs-6 year-exp-selectbox">
                                            <option value="-1" class="text-capitalize col-md-4">year</option>
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
                                            <option value="2032">2032</option>
                                            <option value="2033">2033</option>
                                            <option value="2034">2034</option>
                                        </select>
                                    </div>

                                    {{--CVV INPUT--}}
                                    <div class="form-group cvv-wrapper ">
                                        <label for="cvv" class="label-form text-uppercase col-md-4"> cvv</label>
                                        <input type="text" class="form-control col-md-8" id="cvv">
                                        <img src="/img/panel/black/desktop/info.png" alt="info logo png"
                                             class="info-logo visible-lg-block visible-md-block">
                                    </div>

                                    {{--FIX THE HEIGHTS DEFRENCE AND CLEAR THE FLOAT--}}
                                    <div class="clearfix"></div>

                                    {{--SUBMIT BUTTON --}}
                                    <button type="submit" class="btn form-button text-uppercase">get me started -
                                        deposit funds
                                    </button>

                                    {{--WARNING MESSAGE COMMENT AT THE BOTTOM OF THE FORM--}}
                                    <div class="warning-massage-beneath-the-button text-center">
                                        Deposit funds into your RBoptions trading account. <br>
                                        (Finish button will automatically be available once you've funded your account)
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{--FIX THE HEIGHTS DEFRENCE AND CLEAR THE FLOAT--}}
                    <div class="clearfix"></div>

                    {{--MODEL FOOTER--}}
                    <div class="modal-footer-deposit modal-footer">

                        {{--THREE STEPS WRAPPER--}}
                        <div class="three-steps-for-register-wrapper text-center">

                            {{--ONE STEP WRAPPER LOCKER--}}
                            <div class="step-wrapper col-md-4">

                                {{--LOCK LOGO IMG--}}
                                <img src="/img/panel/black/desktop/lock.png" alt="locker-sign">

                                {{--TEXT LOCKER--}}
                                <p class="text-step step-locker">In order to unlock your The Aussie Panel Method
                                    Account, You have to fund your
                                    RBoptions broker account.</p>
                            </div>

                            {{--ONE STEP WRAPPER ALERT--}}
                            <div class="step-wrapper col-md-4">

                                {{--LOCK ALERT IMG--}}
                                <img src="/img/panel/black/desktop/alert.png" alt="alert-sign">

                                {{--TEXT ALERT LOGO--}}
                                <p class="text-step step-alert">Deposit Form Is Currently Not Working? Click Here To
                                    Deposit In Your RBoptions Broker
                                    Website.</p>
                            </div>

                            {{--ONE STEP WRAPPER V SIGN--}}
                            <div class="step-wrapper col-md-4">

                                {{--IMG V LOGO--}}
                                <img src="/img/panel/black/desktop/v.png" alt="v-sign">

                                {{--TEXT V LOGO--}}
                                <p class="text-step step-v">Your RBoptions account is fully connected to your The Aussie
                                    Panel Method. Once you
                                    get started within 3 short minutes you will see your cash flow straight to your
                                    account!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--MODAL FAQ PAGE WRAPPER --}}
        <div class="modal-faq modal fade" role="dialog">
            <div class="modal-dialog-faq modal-dialog">

                <!-- MODAL CONTENT-->
                <div class="modal-content modal-faq-content">

                    {{--HEADER-TAG--}}
                    <div class="modal-header-faq modal-header">

                        {{--EXIT ICON--}}
                        <img src="/img/panel/black/desktop/close.png" alt="close square-logo"
                             class="square-logo pull-right"
                             data-dismiss="modal">

                        {{--TITLE OF THE MODAL--}}
                        <h4 class="modal-title text-center text-uppercase">aussie panel method faq </h4>
                    </div>
                    {{--BODY PART --}}
                    <div class="modal-body-faq modal-body">

                        {{--QUESTION AND ANSWER WRAPPER--}}
                        <div class="question-n-answer-wrapper">

                            {{--QUESTION WRAPPER--}}
                            <div class="question-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <img src="/img/panel/black/desktop/m-q-open.png" alt="open close pics" class="question-button">
                                    <h3 class="question-text text-uppercase">what is the aussie method?</h3>
                            </div>

                            {{--ANSWER WRPPER--}}
                            <div class="answer-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p class="answer text-capitalize">
                                    the aussie method is a 100% free software that will trade on the binary options
                                    markets with just 1 click! it's fully automated and places the winning trades for
                                    you!
                                </p>
                            </div>
                        </div>

                        {{--QUESTION AND ANSWER WRAPPER--}}
                        <div class="question-n-answer-wrapper">

                            {{--QUESTION WRAPPER--}}
                            <div class="question-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <img src="/img/panel/black/desktop/m-q-open.png" alt="open close pics" class="question-button">
                                <h3 class="question-text text-uppercase">How much money can I make with this software?</h3>
                            </div>

                            {{--ANSWER WRPPER--}}
                            <div class="answer-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p class="answer text-capitalize">
                                    to put it in short, there's no limit. to put it more technically, it really depends
                                    on how much money you fund your account with. most of our members fund their account
                                    with $300, and make about $800-1000 daily. those who fund their account with $1,000 or
                                    over make over $2,500 per day!
                                </p>
                            </div>
                        </div>

                        {{--QUESTION AND ANSWER WRAPPER--}}
                        <div class="question-n-answer-wrapper">

                            {{--QUESTION WRAPPER--}}
                            <div class="question-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <img src="/img/panel/black/desktop/m-q-open.png" alt="open close pics" class="question-button">
                                <h3 class="question-text text-uppercase">how long does each trade last??</h3>
                            </div>

                            {{--ANSWER WRPPER--}}
                            <div class="answer-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p class="answer text-capitalize">
                                    Anywhere from a minute to an hour. So you will see your profits right
                                    away, no more waiting for long periods of time.
                                </p>
                            </div>
                        </div>

                        {{--QUESTION AND ANSWER WRAPPER--}}
                        <div class="question-n-answer-wrapper">

                            {{--QUESTION WRAPPER--}}
                            <div class="question-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <img src="/img/panel/black/desktop/m-q-open.png" alt="open close pics" class="question-button">
                                <h3 class="question-text text-uppercase">do i need to use my credit card when i signup?</h3>
                            </div>

                            {{--ANSWER WRPPER--}}
                            <div class="answer-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p class="answer text-capitalize">
                                    NO WAY. The Aussie Method App is 100% FREE. You will NOT be asked for your credit
                                    card or paypal or bank information when you download the Aussie Method System!
                                    Once you are in the members area, we will recommend a binary options broker that
                                    you can exploit. For this, you'll need funds to deposit in order to start making
                                    profits. This is YOUR money that you are just depositing to trade with, and you can
                                    withdraw it at any time!
                                </p>
                            </div>
                        </div>

                    </div>
                    {{--FIX THE HEIGHTS DEFRENCE AND CLEAR THE FLOAT--}}
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
