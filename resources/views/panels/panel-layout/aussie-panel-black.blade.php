@section('head')
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300,300italic' rel='stylesheet'
          type='text/css'>
    {{--BOOTSTRAP SWITCH CSS--}}
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
                <button  class="navbar-toggle pull-left" data-toggle="collapse" data-target=".navbar-header">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                {{--NAV BAR CONTENT IN COLLAPSE IT CHANGE HIS APPERIANCE--}}
                <div class="collapse navbar-collapse  navbar-header text-center" >
                    {{--NAV BAR CONENT--}}
                    <ul class="nav navbar-nav">
                        <li class="text-uppercase  navbar-part"><a href="#" class="navbar-text">view welcome message</a>
                        </li>
                        <li class="text-uppercase  navbar-part"><a href="#" class="navbar-text">guided tour</a></li>
                        <li class="text-uppercase  navbar-part"><a href="#" class="navbar-text">home page</a></li>
                        <li class="text-uppercase  navbar-part"><a href="#" class="navbar-text">broker trading area</a>
                        </li>
                        <li class="text-uppercase  navbar-part"><a href="#" class="navbar-text">contact us</a></li>
                        <li class="text-uppercase  navbar-part"><a href="#" class="navbar-text">log out</a></li>
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
                            <strong class="info-result text-uppercase">rb</strong><strong class="info-result ">options</strong>
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
                        <div class="tab-switch-button text-uppercase ">
                            <div class="toggle toggle-light" data-on="ON" data-off="OFF" style="height: 50px; width: 110px;">

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
                            <button class="btn  btn-lg amount-btn amount-button2 btn-space">$50 - $100</button>
                            <button class="btn  btn-lg amount-btn amount-button1 btn-space">$25 - $50</button>
                            <button class="btn  btn-lg amount-btn amount-button3 btn-space">$100 - $150</button>
                            <button class="btn  btn-lg amount-btn amount-button4 btn-space">$150 +</button>
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
            </div>
        </footer>
    </div>
@endsection
