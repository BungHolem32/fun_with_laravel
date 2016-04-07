@section('head')
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
        <aside class="account-details">

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

        <nav class="top-navbar navbar navbar-default">
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="text-uppercase navbar-part"><a href="#" class="navbar-text">view welcome message</a></li>
                        <li class="text-uppercase navbar-part"><a href="#" class="navbar-text">guided tour</a></li>
                        <li class="text-uppercase navbar-part"><a href="#" class="navbar-text" >home page</a></li>
                        <li class="text-uppercase navbar-part"><a href="#" class="navbar-text">broker trading area</a></li>
                        <li class="text-uppercase navbar-part"><a href="#" class="navbar-text">contact us</a></li>
                        <li class="text-uppercase navbar-part"><a href="#" class="navbar-text">log out</a></li>
                    </ul>
                </div>
            </div>
        </nav>


    </div>
@endsection
