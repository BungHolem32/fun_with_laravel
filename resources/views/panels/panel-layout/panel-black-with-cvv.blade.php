<?php $c = \Session::get('spotCustomer');
?>


@section('head')
    <link rel="stylesheet" href="/css/panels/black/libs/toggles-full.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="apple-mobile-web-app-capable" content="yes"/>

    {{--ADD FONTAWSOME LIBARARY--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.css">
    <link rel="stylesheet" href="/css/panels/black/libs/font-awesome.min.css">

    {{--REMMBER TO ADD IT AFTER  GETTING TRANSLATION--}}
    {{--BASE STYLE SHEET--}}
    {{--<link rel="stylesheet" href="/css/panels/black/style-{{Request::local()->dir}}.css"/>--}}

    {{--REMMBER TO REMOVE IT AFTER  GETTING TRANSLATION--}}
    <style>
        html{
            direction:ltr !important;
        }
    </style>
    <link rel="stylesheet" href="/css/panels/black/style-0.css"/>
    {{--REMMBER TO REMOVE IT AFTER  GETTING TRANSLATION--}}

@append
@section('bottom-scripts')
    {{--SOCKETIO SCRIPTS--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

    {{--BOOTSTRAP LIBARY--}}
    <script src="/js/panels/black/libs/bootstrap.min.js"></script>

    {{--TOGGLES BUTTON--}}
    <script src="/js/panels/black/libs/toggles.js"></script>

    {{--VALIDATE SCRIPT--}}
    {!! $page->appendAsset(url('/js/jquery.validate.js')) !!}

    {{--PANEL BASE SCRIPT--}}
    {!! $page->appendAsset(url('/js/panels/black/black-script.js')) !!}

    {{--Main JS--}}
    <script src="/js/panels/black/main.js"></script>

    {{--SPOTOPTIONS SOCKET--}}
    <script type="text/javascript" src="//sst-super-c-nl.spotoption.com/socket.io/socket.io.js"></script>
@append

{{--BASE HTML LAYOUT--}}
@section('page-layout')

    {{--WRAPPER FOR ALL CONTENT--}}
    <div class="content-wrapper">
        {{--<a href="#"  data-toggle="modal"--}}
        {{--data-target=".modal-thanku">what</a>--}}


        {{--ACCOUNT DETAILS  DESKTOP VIEW--}}
        <div class="aside">


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
                        @ln(account details)
                    </div>
                </header>

                {{--PERSONAL INFO  (BASE CONTENT FO THE TAB)--}}
                <div class="account-detail-personal-info">
                    <p class="info-tab">
                        <span class="text-capitalize">@ln(email):</span>
                        <strong>{{ App\Customer::get()->email }}</strong>
                    </p>
                    <p class="info-tab">
                        <span class="text-capitalize">@ln(broker name):</span>

                        {{--@if(isMongoNotEmpty($page->brand->logo))--}}
                            {{--<img src="{{$page->brand->logo}}" alt="rb-option logo">--}}
                        {{--@endif--}}
                        <strong>{{ $page->brand->name }}</strong>
                    </p>
                    <p class="info-tab">
                        <span class="text-capitalize">@ln(balance):</span>
                        <strong class="info-result text-bold balance getLoading "><i
                                    class="fa fa-refresh fa-spin"></i></strong>
                    </p>
                    <p class="info-tab">
                        <span class="text-capitalize">@ln(account)</span>
                        <span class="text-uppercase">id: </span>
                        <strong class="info-result">{{ App\Customer::get()->id }}</strong>
                    </p>
                </div>
            </aside>
        </div>

        <aside class="logo-brand">
            @if(isMongoNotEmpty($page->panel_logo))
                <img src="{{ $page->panel_logo }}" alt="method_logo" class="logo-brand-img">
            @endif
        </aside>

        {{--NAVBAR DESKTOP--}}
        <nav class="navbar-desktop navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle pull-left icon-menu" {{--data-toggle="collapse" data-target=".navbar-header"--}}>
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                {{--NAV BAR CONTENT IN COLLAPSE IT CHANGE HIS APPERIANCE--}}
                <div class="collapse navbar-collapse  navbar-header text-center">
                    {{--NAV BAR CONENT--}}
                    <ul class="nav navbar-nav">
                        <li class="text-uppercase navbar-part">
                            <a href="#" class="navbar-text" data-toggle="modal"
                               data-target=".modal-welcome">@ln(view welcome message)
                            </a>
                        </li>
                        {{--<li class="text-uppercase  navbar-part">--}}
                            {{--<a href="javascript:;" class="navbar-text">@ln(guided tour)--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        <li class="text-uppercase  navbar-part">
                            <a href="@include('funnels.layouts._partials._url', ['url'=>$page->getParent()->fullSlug()])"
                               class="navbar-text">@ln(home page)
                            </a>
                        </li>
                        <li class="text-uppercase navbar-part">
                            <a href="{{ $c->getAutologinLink() }}" class="navbar-text">@ln(broker trading area)
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

                        <li class="text-uppercase logout-wrapper  navbar-part">
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
                {{--<li class="navbar-li-wrapper">--}}
                    {{--<a href="javascript:;" class="navbar-text-mobile">--}}
                        {{--@ln(guided tour)--}}
                    {{--</a>--}}
                {{--</li>--}}
                <li class="navbar-li-wrapper">
                    <a href="@include('funnels.layouts._partials._url', ['url'=>$page->getParent()->fullSlug()])"
                       class="navbar-text-mobile">@ln(home page)
                    </a>
                </li>
                <li class="navbar-li-wrapper">
                    <a
                            href="{{ $c->getAutologinLink() }}"
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

        {{--ACCOUNT DETAILS MOBILE--}}
        <aside class="account-details-mobile visible-sm-block visible-xs-block">
            <div class="container">
                {{--TITLE PART--}}
                <div class="row">

                    {{--TITLE PART --}}
                    <header class="account-details-title col-sm-12 col-xs-12 text-center">

                        {{--HUMAN AVATAR--}}
                        <div class="img-human col-sm-2 col-xs-2 col-xs-push-2">
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
                    {{--PERSONAL INFO  (BASE CONTENT FOR THE TAB)--}}
                    <div class="account-detail-personal-info col-sm-12">

                        {{--EMAIL--}}
                        <p class="info-tab col-sm-8 col-xs-7">
                            <span class="text-capitalize">@ln(email):</span>
                            <strong>{{ App\Customer::get()->email }}</strong>
                        </p>


                        {{--BALANCE--}}
                        <p class="info-tab col-sm-4 col-xs-5">
                            <span class="text-capitalize">@ln(balance):</span>

                            <strong class="info-result text-bold balance getLoading "><i
                                        class="fa fa-refresh fa-spin"></i></strong>
                        </p>

                        {{--BROKER--}}
                        <p class="info-tab col-sm-7 col-xs-7">
                            <span class="text-capitalize">@ln(broker):</span>
                            {{--dynamic change for the brand name--}}
                            {{--@if(isMongoNotEmpty($page->brand->logo))
                                <img src="{{$page->brand->logo}}" alt="brand logo">
                            @endif--}}
                            <strong>{{ $page->brand->name }}</strong>
                        </p>

                        {{--ACCOUNT DETAILS--}}
                        <p class="info-tab col-sm-5 col-sm-push-1 col-xs-5">
                            <span class="text-capitalize">@ln(account) </span>
                            <span class="text-uppercase">@ln(id): </span>
                            <strong class="info-result">{{ App\Customer::get()->id }}</strong>
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
                    <h3 class="text-uppercase method-title">
                        @if(isMongoNotEmpty($page->body))
                            {!! $page->body !!} </h3>
                    @endif
                </header>

                {{--SUBTITLE WRAPPER--}}
                <div class="active-method-subtitle-wrapper  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4 class="text-capitalize method-subtitle text-center">
                        <i class="fa fa-arrow-down"></i>
                        <span class="active-method-text">@ln(start earning money in 3 easy steps)</span>
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
                        <p class="tab-title text-uppercase text-center">@ln(deposit into your account)</p>
                    </div>
                    <div class="bottom-part">
                        <button type="button" class="tab-big-button btn btn-lg center-block text-uppercase"
                                data-toggle="modal"
                                data-target=".modal-deposit">
                            @ln(deposit now at) {{$page->brand->name}}
                        </button>
                    </div>
                    <div class="tab-shadow-first">
                        <img class="tab-shadow-1" src="/img/panel/black/desktop/tab-h-big.png"
                             alt="shadow of the tab (lighten)">
                    </div>
                </div>

                {{--SECOND TAB (CENTER)--}}
                <div class="tab-wrapper auto-trading col-lg-3 col-md-12 col-sm-12 col-xs 12">
                    <div class="top-part">
                        <span class="tab-number-in-circle text-center">2</span>
                        <p class="tab-title text-uppercase text-center  low-alert">@ln(activate auto trading)</p>
                    </div>
                    <div class="bottom-part">
                        <div class="tab-switch-button startTrade text-uppercase ">
                            <div class="toggles toggle-iphone startTrade toggle-light" data-on="ON" data-off="OFF"
                                 style="height: 50px; width: 110px;">
                            </div>
                        </div>
                    </div>
                    <div class="tab-shadow-second">
                        <img class="tab-shadow-2" src="/img/panel/black/desktop/tab-h-big.png"
                             alt="shadow of the tab (lighten)">
                    </div>
                </div>

                {{--THIRD TAB (RIGHT)--}}
                <div class="tab-wrapper amount col-lg-4 col-md-12 col-sm-12 col-xs 12">
                    <div class="top-part">
                        <span class="tab-number-in-circle text-center">3</span>
                        <p class="tab-title text-uppercase text-center">@ln(select amount of trading)</p>
                    </div>
                    <div class="bottom-part">
                        <div class="tab-four-buttons text-uppercase col-md-12 text-center ">
                            <?php
                            if (!isset($bot_settings['minAmount']) || $bot_settings['minAmount'] == 25 && $bot_settings['maxAmount'] == 50)
                                $btnClass = 'active-btn';
                            else
                                $btnClass = 'btn-default';

                            ?>

                            {{--{{$bot_settings['maxAmount']}}--}}
                            <button class="btn {{$btnClass}}  btn-lg amount-btn amount-button1 btn-amount-selected"
                                    data-amount="25-50">$25 -
                                $50
                            </button>
                            <button class="btn  {{ ($bot_settings['minAmount'] == 50 && $bot_settings['maxAmount'] == 100) ? 'active-btn' : 'btn-default'}} btn-lg amount-btn amount-button2 btn-amount-selected"
                                    data-amount="50-100">$50 -
                                $100
                            </button>
                            <button class="btn {{ ($bot_settings['minAmount'] == 100 && $bot_settings['maxAmount'] == 150) ? 'active-btn' : 'btn-default'}} btn-lg amount-btn amount-button3 btn-amount-selected"
                                    data-amount="100-150">$100 -
                                $150
                            </button>
                            <button class="btn {{ ($bot_settings['minAmount'] == 150) ? 'active-btn' : 'btn-default'}}  btn-lg amount-btn amount-button4 btn-amount-selected "
                                    data-amount="150-1000">$150
                                +
                            </button>
                        </div>
                    </div>
                    <div class='tab-third'>
                        <img class="tab-shadow-3" src="/img/panel/black/desktop/tab-h-big.png"
                             alt="shadow of the tab (lighten)">
                    </div>
                </div>

            </div>
            <div class="arrow-rotate visible-lg-block">
                <img src="/img/panel/black/tab-arrow.png" alt="rotate arrow" class="flip-able">
            </div>
        </section>

        {{--TABLE WITH THE OPEN TRADE--}}
        <section class="table-responsive rb-options-open-trade">
            <div class="container">
                <table class="table col-sm-12 col-xs-12">

                    {{--TABLE TITLE (RBOPTIONS OPEN TRADE)--}}
                    <caption class="table-title text-center text-uppercase">{{ $page->brand->name }} @ln(open trades) <i
                                class="getLoading fa fa-refresh fa-spin"></i></caption>

                    {{--FIRST TABLE ROW WITH ALL THE HEADERS--}}
                    <thead class="table-headers table-row">
                    <th class="table-header-th text-capitalize text-center">@ln(assets)</th>
                    <th class="table-header-th text-capitalize text-center">@ln(position)</th>
                    <th class="table-header-th text-capitalize text-center">@ln(amount)</th>
                    <th class="table-header-th text-capitalize text-center ">@ln(entry rate)</th>
                    <th class="table-header-th text-capitalize text-center ">@ln(current rate)</th>
                    <th class="table-header-th text-capitalize text-center ">@ln(expiration date)</th>
                    <th class="table-header-th text-capitalize text-center showed hidden-sm hidden-xs">@ln(status)</th>
                    </thead>


                    {{--TABLE DATA FOR OPEN TRADE TABLE--}}
                    <tr class="table-tr-content table-row text-center">

                        {{--ASSET NAME--}}
                        <td class="table-data td-name  text-capitalize text-center">
                            <span
                                    class="text-uppercase"> {{  $page->brand->name }}
                            </span>
                        </td>

                        {{--POSITION--}}
                        <td class="table-data td-position text-uppercase text-center">@ln(put)</td>

                        {{--AMOUNT--}}
                        <td class="table-data td-amount  text-center"></td>

                        {{--ENTRY RATE--}}
                        <td class="table-data td-entryRate text-center"></td>

                        {{--CURRNET RATE --}}
                        <td class="hide-td-in-history-trade table-data td-assets current-rate  text-center text-center">
                            <span class='rate'></span></td>

                        {{--END RATE--}}
                        <td class="table-data td-endRate hide-td-in-open-trade text-center "></td>

                        {{--END DATE EXPERATION DATE--}}
                        <td class="table-data td-endDate  text-center"></td>

                        {{--STATUS--}}
                        <td class="table-data td-status text-capitalize text-center hidden-sm hidden-xs"></td>
                    </tr>
                </table>
            </div>
        </section>

        {{--TABLE  HISTORY TRADE--}}
        <section class="table-responsive rb-options-history">
            <div class="container">
                <table class="table">

                    {{--TABLE TITLE (RBOPTIONS HISTORY TRADE)--}}
                    <caption class="table-title text-center text-uppercase">{{$page->brand->name}} @ln(Trades History)
                        <i class="getLoading fa fa-refresh fa-spin"></i></caption>

                    {{--FIRST TABLE ROW WITH ALL THE HEADERS--}}
                    <thead class="table-headers table-row">
                    <th class="text-capitalize text-center table-header-th">@ln(assets)</th>
                    <th class="text-capitalize text-center table-header-th">@ln(position)</th>
                    <th class="text-capitalize text-center table-header-th">@ln(amount)</th>
                    <th class="text-capitalize text-center table-header-th hidden-sm hidden-xs">@ln(entry rate)</th>
                    <th class="text-capitalize text-center table-header-th hidden-sm hidden-xs">@ln(closing rate)</th>
                    <th class="text-capitalize text-center table-header-th hidden-sm hidden-xs ">@ln(payout)</th>
                    <th class="text-capitalize text-center table-header-th hidden-sm hidden-xs">@ln(profit)</th>
                    <th class="text-capitalize text-center table-header-th hidden-sm hidden-xs">@ln(date)</th>
                    <th class="text-capitalize text-center table-header-th ">@ln(status)</th>
                    </thead>

                    {{--TABLE DATA FOR TABLE RB OPTIONS HISTORY--}}
                    <tr class="table-tr-content table-row  text-center">

                        {{--ASSET NAME--}}
                        <td class="table-data td-name  text-capitalize text-center">
                            <span class="text-uppercase">
                            </span>
                        </td>

                        {{--POSITION--}}
                        <td class="table-data td-position text-uppercase text-center"></td>

                        {{--AMOUNT--}}
                        <td class="table-data td-amount  text-center"></td>

                        {{--ENTRY RATE--}}
                        <td class="table-data td-entryRate text-center hidden-sm hidden-xs"></td>

                        {{--CLOSING RATE--}}
                        <td class="table-data td-endRate hide-td-in-open-trade text-center hidden-sm hidden-xs"></td>

                        {{--PAYOUT--}}
                        <td class="table-data td-payout hide-td-in-open-trade text-center hidden-sm hidden-xs"></td>

                        {{--PROFIT--}}
                        <td class="table-data td-profit hide-td-in-open-trade text-center hidden-sm hidden-xs"></td>

                        {{--END DATE EXPERATION DATE--}}
                        <td class="table-data td-endDate  text-center hidden-sm hidden-xs"></td>

                        {{--STATUS--}}
                        <td class="table-data td-status text-capitalize text-center "></td>
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

                {{--MODAL CONTENT WELCOME--}}
                <div class="modal-content modal-welcome-content">
                    <div class="modal-header-welcome modal-header">
                        <img src="/img/panel/black/desktop/close.png" alt="close square-logo" class="square-logo"
                             data-dismiss="modal">
                        <h3 class="modal-title-h3 text-uppercase text-center">welcome to {{ $page->title_h1 }}
                            method!</h3>
                    </div>

                    {{--MODAL BODY WELOCME--}}
                    <div class="modal-body-welcome modal-body">
                        <p class="modal-welcome-text-p">
                            This Software cannot do anything until your account has a positive balance to run trades, so
                            make sure to deposit some money into your {{ $page->title_h1 }} Method trading account to
                            get started.
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
                                        {{ $page->brand->name }} broker account</h3>
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
                                    <h3 class="text-uppercase step-content">activate your {{ $page->title_h1 }} method
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
        <div class="modal-deposit modal fade  {{ \App\Customer::get()->balance < 100 ? 'showen hidden-ref':'hidden hidden-on hidden-ref' }}"
             role="dialog">
            <div class="modal-dialog-deposit modal-dialog">

                <!-- MODAL CONTENT-->
                <div class="modal-content modal-deposit-content">
                    <div class="modal-header-deposit modal-header">

                        {{--EXIT ICON--}}
                        <img src="/img/panel/black/desktop/close.png" alt="close square-logo" class="square-logo"
                             data-dismiss="modal">

                        {{--TITLE OF THE MODAL--}}
                        <h4 class="modal-title text-center text-uppercase">Deposit Now Into
                            Your {{ $page->brand->name }} Broker
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
                        <header class="deposit-title-wrapper text-center ">

                            {{--TEXT TITLE--}}
                            <h2 class="deposit-title text-uppercase"><strong>start raking in money!!</strong></h2>

                            {{--SUBTITLE SMALL TEXT--}}
                            <small>Fill in the necessary information in order to open your {{ $page->title_h1 }} Method
                                account and just watch it fill with you earnings.
                            </small>
                        </header>

                        {{--FORM OUTER WRAPPER--}}
                        <div class="form-wrapper">

                            {{--FORM INPUTS (FORM TAG)--}}
                            <form class="form-deposit" role="form" id="form-deposit" novalidate="novalidate">

                                {{--FIRST ROW FORM WAPPER--}}
                                <div class="col-lg-6 first-part-form">

                                    {{--FORM TITLE PERSONAL INFO INPUT WRAPPER--}}
                                    <div class="form-title-wrapper">
                                        <h3 class="form-title text-uppercase col-md-8 col-sm-12 col-xs-12">personal
                                            information</h3>
                                        <img src="/img/panel/black/desktop/yellow-arrow.png"
                                             alt="arrow that points to the inputs"
                                             class="yellow-arrow visible-lg-inline-block visible-md-inline-block flip-able">
                                    </div>

                                    <div class="clearfix"></div>

                                    {{--FIRST NAME INPUT WRAPPER--}}
                                    <div class="form-group ">
                                        <label for="first-name" class="text-capitalize col-md-4 label-form"> first
                                            name</label>
                                        <input type="text" name="first_name" class="form-control col-md-8"
                                               id="first_name" value="{{ App\Customer::get()->firstName }}" required
                                               aria-required="true">
                                    </div>

                                    {{--LAST NAME INPUT WRAPPER--}}
                                    <div class="form-group ">
                                        <label for="last-name" class="text-capitalize col-md-4 label-form"> last
                                            name</label>
                                        <input type="text" class="form-control col-md-8" id="last_name" name="last_name"
                                               value="{{ App\Customer::get()->lastName }}" required
                                               aria-required="true">
                                    </div>


                                    {{--EMAIL INPUT WRAPPER--}}
                                    <div class="form-group ">
                                        <label for="email" class="text-capitalize col-md-4 label-form"> email</label>
                                        <input type="email" class="form-control col-md-8" id="email" name="email"
                                               value="{{ App\Customer::get()->email }}" required aria-required="true">
                                    </div>

                                    {{--PHONE INPUT WRAPPER--}}
                                    <div class="form-group ">
                                        <label for="phone" class="text-capitalize col-md-4 label-form">phone</label>
                                        <input type="phone" class="form-control col-md-8" id="phone" name="phone"
                                               required value="{{ \App\Customer::get()->phone}}">
                                    </div>

                                    {{--COUNTRY INPUT WRAPPER--}}
                                    <div class="form-group ">
                                        <label for="country" class="text-capitalize col-md-4 label-form">
                                            country</label>
                                        <select name="country_id" id="country_id" type="text"
                                                class="form-control col-md-8 input-sm" required>
                                            @include('funnels.layouts._partials._countries')
                                        </select>
                                    </div>

                                    {{--CITY INPUT WRAPPER--}}
                                    <div class="form-group ">
                                        <label for="city" class="text-capitalize col-md-4 label-form"> city</label>
                                        <input type="text" class="form-control col-md-8" id="city" name="city" required
                                               placeholder="City..">
                                    </div>

                                    {{--ADDRESS INPUT WRAPPER--}}
                                    <div class="form-group ">
                                        <label for="address" class="text-capitalize col-md-4 label-form">
                                            address</label>
                                        <input type="text" class="form-control col-md-8" id="address" name="address"
                                               id="address" required placeholder="Address..">
                                    </div>

                                    {{--ZIP CODE INPUT  WRAPPER--}}
                                    <div class="form-group ">
                                        <label for="zip-code" class="text-capitalize col-md-4 label-form"> zip
                                            code</label>
                                        <input type="text" class="form-control col-md-8" id="zip_code" name="zip_code"
                                               required placeholder="Zip Code..">
                                    </div>
                                </div>

                                {{--SECOND ROW FORM (DIV) --}}
                                <div class="col-lg-6 second-part-form">

                                    {{--TITLE WRAPPER INPUT WRAPPER--}}
                                    <div class="form-title-wrapper">
                                        <h3 class="form-title text-uppercase col-md-8 col-sm-12 col-xs-12 label-form">
                                            @ln(your payment details)</h3>
                                        <img src="/img/panel/black/desktop/yellow-arrow.png"
                                             alt="arrow that points to the inputs"
                                             class="yellow-arrow visible-lg-block visible-md-block flip-able">
                                    </div>
                                    {{--CLEAR FIX AFTER TITLE--}}
                                    <div class="clearfix"></div>



                                    {{--CARD-TYPE INPUT WRAPPER--}}
                                    @if(!empty($c->creditCards))
                                        <div class="form-group ">
                                            <div class="col-md-4 card-type-title-wrapper">
                                                <label for="fundId"
                                                       class="label-form text-capitalize">@ln(use credit card)</label>
                                            </div>
                                            <select name="fundId" id="fundId" class="form-control col-md-8 card-type-selectbox"
                                                    aria-required="true" >
                                                @foreach($c->creditCards as $card)
                                                    <option value="{{$card['fundId']}}" @if($card['fundId']==1) selected @endif>
                                                        <span class="text-capitalize">{{$card['ccType']}}</span>  xxxx-xxxx-xxxx-{{$card['cardNum']}}
                                                    </option>
                                                @endforeach
                                                <option value="-1" class="text-capitalize">@ln(add new credit card)</option>
                                            </select>
                                        </div>
                                        <div class="clearfix"></div>
                                    @else
                                        <input name="fundId" type="hidden" value="-1">
                                        <div class="clearfix"></div>
                                    @endif

                                    <div class="form-group newCardFields @if(!empty($c->creditCards)) hideField @endif">
                                        <div class="col-md-4 card-type-title-wrapper">
                                            <label for="card-type"
                                                   class="label-form text-capitalize">@ln(card type)</label>
                                            <img src="/img/panel/black/desktop/credit-cards.png" alt="card type images"
                                                 class="card-type-img visible-lg-inline-block visible-md-inline-block">
                                        </div>
                                        <select name="card_type" id="card_type"
                                                class="form-control text-capitalize col-md-8 card-type-selectbox"
                                                aria-required="true">
                                            <option value="" selected>choose type</option>
                                            <option value="1">visa</option>
                                            <option value="2">mastercard</option>
                                            <option value="3">CarteBleue</option>
                                            <option value="4">Maestro</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>

                                    {{--CARD NUMBER INPUT WRAPPER--}}
                                    <div class="form-group card-number-after-clear-fix  @if(!empty($c->creditCards)) hideField @endif">
                                        <label for="card-number" class="label-form text-capitalize col-md-4"> card
                                            number</label>
                                        <input type="text" class="form-control col-md-8" name="card_number"
                                               id="card_number" required placeholder="Card Number..">
                                    </div>
                                    <div class="clearfix"></div>

                                    {{--AMOUNT INPUT WRAPPER--}}
                                    <div class="form-group ">
                                        <label for="amount" class="text-capitalize col-md-4 label-form"> amount</label>
                                        <input type="text" class="form-control col-md-8" id="amount" name="amount"
                                               required placeholder="Amount..">
                                    </div>
                                    <div class="clearfix"></div>

                                    {{--EXPIRATION INPUT WRAPPER--}}
                                    <div class="form-group  col-md-12 col-sm-12 col-xs-12 @if(!empty($c->creditCards)) hideField @endif">
                                        {{--LABEL FOR THE EXPERAION DATE--}}
                                        <label for="expiration-date" class="label-form text-capitalize col-md-4">expiration
                                            date</label>
                                        {{--SELECT BOX  FOR MONTH EXPERATION INPUT--}}
                                        <select id="month-exp"
                                                class="pull-left col-lg-3 col-md-3 col-sm-6 col-xs-6 month-exp-selectbox text-capitalize"
                                                name="expires_month">

                                            <option value="" selected class="text-capitalize">month</option>
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

                                        {{--SELECT BOX FOR YEAR EXPERATION INPUT--}}
                                        <select id="year-exp"
                                                class="pull-right col-lg-5 col-md-4  col-sm-6 col-xs-6 year-exp-selectbox"
                                                name="expires_year">
                                            <option value="" selected class="text-capitalize col-md-4">year</option>
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
                                    <div class="clearfix"></div>

                                    {{--CVV INPUT--}}
                                    <div class="form-group cvv-wrapper">
                                        <label for="cvv" class="label-form text-uppercase col-md-4"> cvv</label>
                                        <input type="text" class="form-control col-md-8" id="cvv" name="cvv" required
                                               placeholder="CVV..">
                                        <img src="/img/panel/black/desktop/info.png" alt="info logo png"
                                             class="info-logo visible-lg-block visible-md-block">
                                    </div>

                                    {{--FIX THE HEIGHTS DEFRENCE AND CLEAR THE FLOAT--}}
                                    <div class="clearfix"></div>

                                    {{--SUBMIT BUTTON --}}
                                    <button type="submit" id="depositBtn" class="btn form-button text-uppercase">@ln(get me started -
                                        deposit funds)
                                    </button>

                                    {{--WARNING MESSAGE COMMENT AT THE BOTTOM OF THE FORM--}}
                                    <div class="warning-massage-beneath-the-button text-center text-capitalize col-xs-11">
                                        @ln(deposit funds into your) {{ $page->brand->name }} @ln(trading account. <br>
                                        (Finish button will automatically be available once you've funded your account))
                                    </div>
                                </div>
                            </form>
                            <div class="error-message hidden visible-xs visible-sm">
                                <span class="error-text"></span>
                            </div>
                        </div>
                    </div>

                    {{--FIX THE HEIGHTS DEFRENCE AND CLEAR THE FLOAT--}}
                    <div class="clearfix end-content"></div>

                    {{--MODEL FOOTER--}}
                    <div class="modal-footer-deposit modal-footer">

                        {{--THREE STEPS WRAPPER--}}
                        <div class="three-steps-for-register-wrapper text-center">

                            {{--ONE STEP WRAPPER LOCKER--}}
                            <div class="step-wrapper col-md-4">

                                {{--LOCK LOGO IMG--}}
                                <img src="/img/panel/black/desktop/lock.png" alt="locker-sign">

                                {{--TEXT LOCKER--}}
                                <p class="text-step step-locker">In order to unlock your The {{ $page->title_h1 }}
                                    Method
                                    Account, You have to fund your
                                    {{ $page->brand->name }} broker account.</p>
                            </div>

                            {{--ONE STEP WRAPPER ALERT--}}
                            <div class="step-wrapper col-md-4">

                                {{--LOCK ALERT IMG--}}
                                <img src="/img/panel/black/desktop/alert.png" alt="alert-sign">

                                {{--TEXT ALERT LOGO--}}
                                <p class="text-step step-alert  text-capitalize">deposit form is currently not working?
                                    click
                                    <a href="{{ $c->getAutologinLink() }}"
                                       class="broker-login js-broker-login animated bounce"
                                       target="_blank"> here </a>to
                                    deposit in your {{ $page->brand->name }} broker
                                    website.</p>
                            </div>

                            {{--ONE STEP WRAPPER V SIGN--}}
                            <div class="step-wrapper col-md-4">

                                {{--IMG V LOGO--}}
                                <img src="/img/panel/black/desktop/v.png" alt="v-sign">

                                {{--TEXT V LOGO--}}
                                <p class="text-step step-v">Your {{ $page->brand->name }} account is fully connected to
                                    your The {{ $page->title_h1 }} Method. Once you
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

                {{--MODAL CONTENT--}}
                <div class="modal-content modal-faq-content">

                    {{--HEADER-TAG--}}
                    <div class="modal-header-faq modal-header">

                        {{--EXIT ICON--}}
                        <img src="/img/panel/black/desktop/close.png" alt="close square-logo"
                             class="square-logo pull-right"
                             data-dismiss="modal">

                        {{--TITLE OF THE MODAL--}}
                        <h4 class="modal-title text-center text-uppercase">{{ $page->title_h1 }} method faq </h4>
                    </div>


                    {{--BODY PART --}}
                    <div class="modal-body-faq modal-body">

                        {{--QUESTION AND ANSWER WRAPPER 1--}}
                        <div class="question-n-answer-wrapper">

                            {{--QUESTION WRAPPER--}}
                            <div class="question-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <i class="fa fa-chevron-circle-down question-button" aria-hidden="true"></i>
                                <h3 class="question-text text-uppercase">How much
                                    does {{ $page->title_h1 }} Method cost?</h3>
                            </div>

                            {{--ANSWER WRPPER--}}
                            <div class="answer-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p class="answer text-capitalize">
                                    {{ $page->title_h1 }} Method is completely free of charge. As we said before, we
                                    don’t need nor want your credit card or Paypal details.
                                </p>
                            </div>
                        </div>

                        {{--QUESTION AND ANSWER WRAPPER 2--}}
                        <div class="question-n-answer-wrapper ">

                            {{--QUESTION WRAPPER--}}
                            <div class="question-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <i class="fa fa-chevron-circle-right question-button" aria-hidden="true"></i>
                                <h3 class="question-text text-uppercase">How much money can I make
                                    with {{ $page->title_h1 }} Method?</h3>
                            </div>

                            {{--ANSWER WRPPER--}}
                            <div class="answer-wrapper hide col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p class="answer text-capitalize">
                                    Your profits are unlimited and are dependent on how much you are prepared to
                                    invest.
                                </p>
                            </div>
                        </div>

                        {{--QUESTION AND ANSWER WRAPPER 3--}}
                        <div class="question-n-answer-wrapper ">

                            {{--QUESTION WRAPPER--}}
                            <div class="question-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <i class="fa fa-chevron-circle-right question-button" aria-hidden="true"></i>
                                <h3 class="question-text text-uppercase"> How can I make a profit
                                    using {{ $page->title_h1 }} Method?</h3>
                            </div>

                            {{--ANSWER WRPPER--}}
                            <div class="answer-wrapper hide col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p class="answer text-capitalize">
                                    In 3 easy steps, you will be on your way to riches with {{ $page->title_h1 }}Method:<br>
                                    1. Make a deposit.<br>
                                    2. Start using {{ $page->title_h1 }} Method.<br>
                                    3. Watch your profits grow.<br>
                                </p>
                            </div>
                        </div>

                        {{--QUESTION AND ANSWER WRAPPER 4--}}
                        <div class="question-n-answer-wrapper ">

                            {{--QUESTION WRAPPER--}}
                            <div class="question-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <i class="fa fa-chevron-circle-right question-button" aria-hidden="true"></i>
                                <h3 class="question-text text-uppercase">How much does it cost to open
                                    an account with the recommended binary options broker?</h3>
                            </div>

                            {{--ANSWER WRPPER--}}
                            <div class="answer-wrapper hide col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p class="answer text-capitalize">
                                    There is no extra charge to open a trading account, and once you have completed the
                                    short registration form, your trading account will be open. We have managed to
                                    select the better and most reliable brokers, so you will never have to experience
                                    any delays or bad experiences.
                                </p>
                            </div>
                        </div>

                        {{--QUESTION AND ANSWER WRAPPER 5--}}
                        <div class="question-n-answer-wrapper ">

                            {{--QUESTION WRAPPER--}}
                            <div class="question-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <i class="fa fa-chevron-circle-right question-button" aria-hidden="true"></i>
                                <h3 class="question-text text-uppercase">Do I need to have previous
                                    experience with binary options trading in order to use {{ $page->title_h1 }}
                                    Method?</h3>
                            </div>

                            {{--ANSWER WRPPER--}}
                            <div class="answer-wrapper hide col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p class="answer text-capitalize">
                                    No, you do not. {{ $page->title_h1 }} Method is designed to work fully automated and
                                    100% hands free, so even a complete newbie can make a profit.
                                </p>
                            </div>
                        </div>

                        {{--QUESTION AND ANSWER WRAPPER 6--}}
                        <div class="question-n-answer-wrapper ">

                            {{--QUESTION WRAPPER--}}
                            <div class="question-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <i class="fa fa-chevron-circle-right question-button" aria-hidden="true"></i>
                                <h3 class="question-text text-uppercase">Do I need to download any other
                                    software in order to trade binary options?</h3>
                            </div>

                            {{--ANSWER WRPPER--}}
                            <div class="answer-wrapper hide col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p class="answer text-capitalize">
                                    No, the trading interface is 100% web-based so no software download is required. So,
                                    there aren’t any messy downloads or installations everything is ready for you to
                                    start making money.
                                </p>
                            </div>
                        </div>

                        {{--QUESTION AND ANSWER WRAPPER 7 --}}
                        <div class="question-n-answer-wrapper ">

                            {{--QUESTION WRAPPER--}}
                            <div class="question-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <i class="fa fa-chevron-circle-right question-button" aria-hidden="true"></i>
                                <h3 class="question-text text-uppercase">What is the minimum investment
                                    amount per trade?</h3>
                            </div>

                            {{--ANSWER WRPPER--}}
                            <div class="answer-wrapper hide col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p class="answer text-capitalize">
                                    The minimum investment amount per trade is only $25.
                                </p>
                            </div>
                        </div>

                        {{--QUESTION AND ANSWER WRAPPER 8--}}
                        <div class="question-n-answer-wrapper">

                            {{--QUESTION WRAPPER--}}
                            <div class="question-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <i class="fa fa-chevron-circle-right question-button" aria-hidden="true"></i>
                                <h3 class="question-text text-uppercase">How do I withdraw my profits
                                    from my trading account?</h3>
                            </div>

                            {{--ANSWER WRPPER--}}
                            <div class="answer-wrapper hide col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p class="answer text-capitalize">
                                    Withdrawals are simple and our preferred binary options broker provides a selection
                                    of withdrawal options. All withdrawal requests are processed within 1-2 business
                                    days. Again, we have consistently tested all brokers, and we only choose the ones
                                    that perform the better and processed withdrawls easily and without any delays.
                                </p>
                            </div>
                        </div>

                        {{--QUESTION AND ANSWER WRAPPER 9--}}
                        <div class="question-n-answer-wrapper">

                            {{--QUESTION WRAPPER--}}
                            <div class="question-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <i class="fa fa-chevron-circle-right question-button" aria-hidden="true"></i>
                                <h3 class="question-text text-uppercase">What can I trade in when I
                                    trade binary options?</h3>
                            </div>

                            {{--ANSWER WRPPER--}}
                            <div class="answer-wrapper hide col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p class="answer text-capitalize">
                                    You can trade in a variety of underlying assets including stocks, currency pairs,
                                    indices and commodities.
                                </p>
                            </div>
                        </div>

                        {{--QUESTION AND ANSWER WRAPPER 10--}}
                        <div class="question-n-answer-wrapper">

                            {{--QUESTION WRAPPER--}}
                            <div class="question-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <i class="fa fa-chevron-circle-right question-button" aria-hidden="true"></i>
                                <h3 class="question-text text-uppercase">My question is not answered
                                    here, what do I do?</h3>
                            </div>

                            {{--ANSWER WRPPER--}}
                            <div class="answer-wrapper hide col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p class="answer text-capitalize">
                                    Please, don’t hesitate to contact your Personal Profit Consultant and our amazing
                                    support system. Both are available 24/7 to ensure that you will make the most
                                    possible money. You can reach them here at
                                    <a href="{{ $page->brand->contactLink }}"
                                       style="color:green">{{ $page->brand->name }}</a>
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


    {{--<div class="modal-thanku modal fade thanku" role="dialog">--}}
    {{--<div class="modal-dialog-thanku modal-dialog">--}}

    {{--<!-- MODAL CONTENT-->--}}
    {{--<div class="modal-content modal-thanku-content">--}}

    {{--HEADER-TAG--}}
    {{--<div class="modal-header-thanku modal-header">--}}
    {{--<button type="image" class="xclose close" data-dismiss="modal">×</button>--}}

    {{--</div>--}}
    {{--BODY PART--}}
    {{--<div class="modal-body-thanku modal-body">--}}
    {{--<div class="center">--}}
    {{--<br>--}}
    {{--<br>--}}
    {{--<i class="fa fa-check-circle fa-2x"></i>--}}
    {{--<br>--}}
    {{--<br>--}}
    {{--@ln(Thank you for investing at) {{$page->brand->name}}.--}}
    {{--<br><br>--}}
    {{--<img src="{{$page->brand->logo}}" alt="{{$page->brand->name}}">--}}
    {{--<br><br>--}}
    {{--<button class="close text-capitalize" data-dismiss="modal">@ln(close)</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    </div>
@endsection
