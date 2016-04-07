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
        <aside class="account-details container">

            <div class="row">
                {{--title Part--}}
                <header class="account-details-title">
                    {{--human avatar--}}
                    <div class="img-human col-lg-1">
                        <img src="" alt="img-responsive" class="img-responsive block-center">
                    </div>
                    {{--title place--}}
                    <div class="title text-uppercase col-lg-11">
                        account details
                    </div>
                </header>
            </div>
        </aside>
    </div>
@endsection
