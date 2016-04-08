@section('head')
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300,300italic' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="/css/panels/black/style.css"/>
@append
@section('bottom-scripts')
    {!! $page->appendAsset(url('/js/jquery.validate.js')) !!}
    <script type="text/javascript" src="//sst-super-c-nl.spotoption.com/socket.io/socket.io.js"></script>
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
                <div class="collapse navbar-collapse">
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

        <section class="tabs-wrapper container">
            <div class="row">

                {{--FIRST TAB (LEFT)--}}
                <div class="tab-wrapper deposit col-lg-5 col-md-4 col-sm-12 col-xs 12">
                    <div class="top-part">
                        <span class="tab-number-in-circle text-center">1</span>
                        <p class="tab-title text-uppercase">deposit into your account</p>
                    </div>
                    <div class="bottom-part">
                        <button type="button" class="tab-big-button btn btn-default btn-lg center-block text-uppercase">
                            deposit now at rboptions
                        </button>
                    </div>
                </div>

                {{--SECOND TAB (CENTER)--}}
                <div class="tab-wrapper auto-trading col-lg-3 col-md-4 col-sm-12 col-xs 12">
                    <div class="top-part">
                        <span class="tab-number-in-circle text-center">2</span>
                        <p class="tab-title text-uppercase">activate auto trading</p>
                    </div>
                    <div class="bottom-part">
                        <div class="tab-switch-button text-uppercase">

                        </div>
                    </div>
                </div>

                {{--THIRD TAB (RIGHT)--}}
                <div class="tab-wrapper amount col-lg-4 col-md-4 col-sm-12 col-xs 12">
                    <div class="top-part">
                        <span class="tab-number-in-circle text-center">3</span>
                        <p class="tab-title text-uppercase">select amount of trading</p>
                    </div>
                    <div class="bottom-part">
                        <div class="tab-four-buttons text-uppercase">
                            <div class="amount-button1">$25 - $50</div>
                            <div class="amount-button2">$50 - $100</div>
                            <div class="amount-button3">$100 - $150</div>
                            <div class="amount-button4">$150 +</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
