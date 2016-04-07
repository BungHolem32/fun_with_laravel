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
                        <img src="/img/panel/black/icon-human.png" alt="img-responsive" class="img-responsive block-center">
                    </div>

                    {{--title place--}}
                    <div class="title text-uppercase">
                        account details
                    </div>
                </header>
        </aside>
    </div>
@endsection
