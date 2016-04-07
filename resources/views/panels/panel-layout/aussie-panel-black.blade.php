@section('head')
    <link rel="stylesheet" href="/css/panels/black/style.css"/>
@append

@section('bottom-scripts')
    {!! $page->appendAsset(url('/js/jquery.validate.js')) !!}
    <script type="text/javascript" src="//sst-super-c-nl.spotoption.com/socket.io/socket.io.js"></script>
    {!! $page->appendAsset(url('/js/panel-common/panel.js')) !!}
@append

@section('page-layout')
    <div class="container-fluid content-wrapper">
        <aside class="container account-details">
            <div class="row">
                <header class="col-md-4">
                    <div class="img-human col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        <img src="" alt="" class="img-responsive block-center">
                    </div>
                    <div class="title"></div>
                </header>
            </div>
        </aside>

        <header>

        </header>

    </div>

@endsection
