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
                <div class="container col col-xs-8 col-md-10">
                    <div class="pull-left col-xs-3"><div class="logo"></div></div>
                    <div class="pull-right-childs col-sm-9 col-xs-2 npads">
                        <div class="navbar-header">
                            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
                                <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
                        <nav id="bs-navbar" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav pull-right">
                                <li><a class="col-md-2" href="mailto:cs@rboptions.com"><i class="fa fa-envelope"></i>@ln(Email): cs@rboptions.com</a></li>
                                <li><a class="col-md-1" href=""><i class="fa fa-circle"></i>@ln(Live chat)</a></li>
                                <li><a class="col-md-2" href="tel:1-647-846-8231"><i class="fa fa-phone"></i>@ln(Call us): 1-647-846-8231</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 bg">
                <h1>@ln(Try a Binary Platform) <span>@ln(That's Simple& Exciting!)</span></h1>
                <h2>@ln(Free education & More options Help You succeed)</h2>
                <div class="form">
                    <h3>@ln(Complete This Form & Start Trading Binary Options Now)</h3>
                    @include('funnels.layouts._partials._form-horizontal', ['funnelId' => $page->id])
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="container col col-xs-12 col-sm-7">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="per">
                        <div class="title"><img class="icon" src="/img/lp/generalbinary/icon-1.png"/>
                            text text text text text text text text </div>
                        <div class="text">
                            text tex ttex ttex ttext  ttex ttex ttext
                            ttex ttex ttext ttex ttex ttext ttex ttex ttext
                            ttex ttex ttext ttex ttex ttext ttex ttex ttext
                            ttex ttex ttext ttex ttex ttext ttex ttex ttext
                            ttex ttex ttext ttex ttex ttext
                        </div>
                    </div>
                    <div class="per">
                        <div class="title"><img class="icon" src="/img/lp/generalbinary/icon-2.png"/> text text text text text text text text </div>
                        <div class="text">
                            text tex ttex ttex ttext  ttex ttex ttext
                            ttex ttex ttext ttex ttex ttext ttex ttex ttext
                            ttex ttex ttext ttex ttex ttext ttex ttex ttext
                            ttex ttex ttext ttex ttex ttext ttex ttex ttext
                            ttex ttex ttext ttex ttex ttext
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="per">
                        <div class="title"><img class="icon" src="/img/lp/generalbinary/icon-3.png"/> text text text text text text text text </div>
                        <div class="text">
                            text tex ttex ttex ttext  ttex ttex ttext
                            ttex ttex ttext ttex ttex ttext ttex ttex ttext
                            ttex ttex ttext ttex ttex ttext ttex ttex ttext
                            ttex ttex ttext ttex ttex ttext ttex ttex ttext
                            ttex ttex ttext ttex ttex ttext
                        </div>
                    </div>
                    <div class="per">
                        <div class="title"><img class="icon" src="/img/lp/generalbinary/icon-4.png"/> text text text text text text text text </div>
                        <div class="text">
                            text tex ttex ttex ttext  ttex ttex ttext
                            ttex ttex ttext ttex ttex ttext ttex ttex ttext
                            ttex ttex ttext ttex ttex ttext ttex ttex ttext
                            ttex ttex ttext ttex ttex ttext ttex ttex ttext
                            ttex ttex ttext ttex ttex ttext
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
