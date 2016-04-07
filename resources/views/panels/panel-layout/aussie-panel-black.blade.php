@section('head')
    <link rel="stylesheet" href="/css/panels/black/style.css" />
@append

@section('bottom-scripts')
    {!! $page->appendAsset(url('/js/jquery.validate.js')) !!}
    <script type="text/javascript" src="//sst-super-c-nl.spotoption.com/socket.io/socket.io.js"></script>
    {!! $page->appendAsset(url('/js/panel-common/panel.js')) !!}
@append

@section('page-layout')


    {{--PANEL TOP STATIC ACOUNT DETAILS--}}
    <section class="container">
        <div class="ac-details pull-right">
            <div class="title">
                <img src="/img/panel/black/icon-human.png" alt="" /> ACCOUNT DETAILS
            </div>
            <div class="inside">
                <label>Email</label><span>youremail@gmail.com</span>
                <label>Broker</label><span><img src="/img/panel/black/icon-rboptions.png" alt="" />RBoptions</span>
                <label>Balance</label><span>$1532.63</span>
                <label>Account ID</label><span>432563</span>
            </div>
        </div>
    </section>

    {{--NAV BAR --}}
    <header class="navbar-panel">
        <nav class="collapse navbar-collapse">
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </nav>
    </header>



@endsection
