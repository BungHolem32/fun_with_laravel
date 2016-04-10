@section('head')
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
    {!! $page->appendAsset(url('/js/panel-common/panel.js')) !!}

    <script src="/js/panels/black/black-script.js"></script>
    {{--Main JS--}}
    <script src="js/panels/black/main.js"></script>

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
                    <i></i>
                    <strong class="info-result text-bold">1532.63</strong>
                </p>
                <p class="info-tab">
                    <span class="text-capitalize">account </span>
                    <span class="text-uppercase">id: </span>
                    <strong class="info-result">432563</strong>
                </p>
            </div>
        </aside>

        {{--TOP NAVBAR--}}
        <nav class="top-navbar navbar navbar-default" role="navigation">
            <div class="container">
                <button class="navbar-toggle pull-left" data-toggle="collapse" data-target=".navbar-header">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                {{--NAV BAR CONTENT IN COLLAPSE IT CHANGE HIS APPERIANCE--}}
                <div class="collapse navbar-collapse  navbar-header text-center">
                    {{--NAV BAR CONENT--}}
                    <ul class="nav navbar-nav">
                        <li class="text-uppercase  navbar-part"><a href="javascript:;"
                                                                   class="navbar-text" data-toggle="modal" data-target="#myModal">@ln(view welcome message)</a>
                        </li>
                        <li class="text-uppercase  navbar-part"><a href="javascript:;"
                                                                   class="navbar-text">@ln(guided tour)</a></li>
                        <li class="text-uppercase  navbar-part"><a
                                    href="@include('funnels.layouts._partials._url', ['url'=>$page->getParent()->fullSlug()])"
                                    class="navbar-text">@ln(home page)</a></li>
                        <li class="text-uppercase  navbar-part"><a
                                    href="{{--{{ $c->getAutologinLink() }}--}}"
                                    class="navbar-text">@ln(broker trading area)</a>
                        </li>
                        <li class="text-uppercase  navbar-part"><a href="{{ $page->brand->contactLink }}"
                                                                   class="navbar-text">@ln(contact us)</a></li>
                        <li class="text-uppercase  navbar-part"><a href="/logout" class="navbar-text">@ln(log out)</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

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
                            <i></i>
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
                        <button type="button" class="tab-big-button btn btn-lg center-block text-uppercase">
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
                            <div class="wait-ref ">
                                <i class="fa fa-refresh fa-spin"></i>
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
                            <button class="btn {{ ($bot_settings['minAmount'] == 50 && $bot_settings['maxAmount'] == 100) ? 'btn-success' : 'btn-default'}} btn-lg amount-btn amount-button2 btn-space"
                                    data-amount="50-100">$50 -
                                $100
                            </button>
                            <button class="btn {{ ($bot_settings['minAmount'] == 100 && $bot_settings['maxAmount'] == 150) ? 'btn-success' : 'btn-default'}} btn-lg amount-btn amount-button3 btn-space" data-amount="100-150">$100 -
                                $150
                            </button>
                            <button class="btn {{ ($bot_settings['minAmount'] == 150) ? 'btn-success' : 'btn-default'}}  btn-lg amount-btn amount-button4 btn-space" data-amount="150-1000">$150
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
                        <th class="text-capitalize text-center">assets</th>
                        <th class="text-capitalize text-center">position</th>
                        <th class="text-capitalize text-center">amount</th>
                        <th class="text-capitalize text-center">entry rate</th>
                        <th class="text-capitalize text-center">current rate</th>
                        <th class="text-capitalize text-center">expiration date</th>
                        <th class="text-capitalize text-center">status</th>
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
                <p>Copyright © {{ $page->title_h1 }} Method. </p>

            </div>
        </footer>

        <!-- Modal Welcome Page -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Welcome To</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
