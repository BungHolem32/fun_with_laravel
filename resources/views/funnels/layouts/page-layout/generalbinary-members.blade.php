@section('head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    {!! $page->appendAsset(url('/css/generalbinary-'.Request::local()->dir.'.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
@append

@section('page-layout')
    {!! $page->htmlHeader !!}
    <div class="head">
        <div class="col-xs-12 npad">
            <div class="col-xs-12 texts">
                <div class="container">
                    <div class="pull-left col-xs-3"><div class="logo"></div></div>
                    <div class="pull-right-childs col-sm-9 col-xs-2 npads">
                        <div class="navbar-header">
                            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
                            <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
                        <nav id="bs-navbar" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav pull-right">
                                <li><a class="col-md-2 email" href="mailto:cs@rboptions.com">Email: cs@rboptions.com</a></li>
                                <li><a class="col-md-1 lchat" href="">Live chat</a></li>
                                <li><a class="col-md-2 call" href="tel:1-647-846-8231">1-647-846-8231</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 bg"></div>
        </div>
    </div>



        <div class="form">
            {{--@include('funnels.layouts._partials._form-horizontal', ['funnelId' => $page->id])--}}
        </div>
@endsection
