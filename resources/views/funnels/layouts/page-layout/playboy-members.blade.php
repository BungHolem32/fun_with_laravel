@section('head')
    {!! $page->appendAsset(url('/css/playboy/bootstrap.min.css')) !!}
    {!! $page->appendAsset(url('/css/playboy/custom2.css')) !!}
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,400italic,700" rel="stylesheet" type="text/css">
    {!! $page->appendAsset(url('/css/playboy/font-awesome.css')) !!}
    {!! $page->appendAsset(url('/css/playboy/form_style_en.css')) !!}
    {!! $page->appendAsset(url('/js/playboy/bootstrap.min.js')) !!}
    {!! $page->appendAsset(url('/js/playboy/members-script.js')) !!}
    {!! $page->appendAsset(url('/js/playboy/playboy.js')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/playboy/form.js')) !!}
@append

@section('page-layout')
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title"><span class="red">CONGRATULATIONS</span> WELCOME TO THE VIP AREA!</p>
                    <p class="regulartxt">YOU ARE NOW ON THE FAST TRACK OF MAKING REAL CASH!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 nonogutter">
                    <div class="movie">
                        <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                            <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                                @include('funnels.layouts._partials._video',  ['w'=>'100%', 'h'=>'100%'])
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 nonogutter">
                    <div class="form-bg">
                        <p class="sub">Register your<br>
                            <span class="red">free account</span> here
                        </p>
                        <p class="sub-little">Register your <span class="red">free account</span> here</p>
                        <div class="form">
                            <div class="row">
                                <div id="members-form" class="formholder form-group">
                                    @include('funnels.layouts._partials._form-mobile', ['funnelId' => $page->getParent()->id])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="img-trust">
                        <img src="/img/playboy/trust.png" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection