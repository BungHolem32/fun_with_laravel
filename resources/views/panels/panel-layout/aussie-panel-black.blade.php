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
    <script type="text/javascript" src="//sst-super-c-nl.spotoption.com/socket.io/socket.io.js"></script>
    {{--PANEL BASE SCRIPT--}}
    {!! $page->appendAsset(url('/js/panel-common/panel.js')) !!}

@append

@section('page-layout')

    <div class="content-wrapper">

        {{--Account Details--}}
        <aside class="account-details visible-md-block visible-lg-block">

            {{--title Part--}}
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
                    <i></i>
                    <strong class="info-result text-uppercase">rb</strong>
                    <strong class="info-result ">options</strong>
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
        <nav class="top-navbar navbar navbar-default">
            <div class="container">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbarContent">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse navbarContent text-center">
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
                <div class="tab-wrapper deposit  col-sm-12 col-xs 12">
                    <div class="top-part">
                        <span class="tab-number-in-circle text-center">1</span>
                        <p class="tab-title text-uppercase">deposit into your account</p>
                    </div>
                    <div class="bottom-part">
                        <button type="button" class="tab-big-button btn btn-lg center-block text-uppercase">
                            deposit now at rboptions
                        </button>
                    </div>
                </div>

                {{--SECOND TAB (CENTER)--}}
                <div class="tab-wrapper auto-trading col-sm-12 col-xs 12">
                    <div class="top-part">
                        <span class="tab-number-in-circle text-center">2</span>
                        <p class="tab-title text-uppercase text-center">activate auto trading</p>
                    </div>
                    <div class="bottom-part">
                        <div class="tab-switch-button text-uppercase ">
                            {{--<input type="checkbox" name="tab-switch" checked>--}}
                        </div>
                    </div>
                </div>

                {{--THIRD TAB (RIGHT)--}}
                <div class="tab-wrapper amount col-sm-12 col-xs 12">
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
        </section>

        {{--TABLE WITH THE OPEN TRADE--}}
        <section class="table-responsive rb-options-open-trade">
            <div class="container">
                <table class="table">

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


        <footer class="certificate-logos">
            <div class="container">
                <img src="/img/panel/black/cartificate-321.png" alt="3 icons of guaranty" class="img-responsive center-block">
            </div>
        </footer>

    </div>
@endsection
