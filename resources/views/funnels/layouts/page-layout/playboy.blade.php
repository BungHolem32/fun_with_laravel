@section('head')
    {!! $page->appendAsset(url('/css/playboy/bootstrap.min.css')) !!}
    {!! $page->appendAsset(url('/css/playboy/custom.css')) !!}
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,400italic,700" rel="stylesheet" type="text/css">
    {!! $page->appendAsset(url('/js/playboy/bootstrap.min.js')) !!}
    {!! $page->appendAsset(url('/js/playboy/jquery.simple.timer.js')) !!}
    {!! $page->appendAsset(url('/js/playboy/playboy.js')) !!}
    {!! $page->appendAsset(url('/js/playboy/script.js')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
@append

@section('page-layout')
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-8 col-xs-12 title">LEARN HOW YOU CAN MAKE<br><span class="undered">A FORTUNE</span> MY WAY</div>
                <div class="col-md-4 timer_box visible-sm visible-md visible-lg">
                    <div class="box_center">
                        <div class="spot">JUST<br><span class="red">30 SPOTS</span><br>AVAILABLE</div>
                        <div class="timer" data-minutes-left="13.59"></div>
                        <div class="miss">DON'T MISS OUT!</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 title-sm">LEARN HOW YOU CAN MAKE <span class="undered">A FORTUNE</span>
                    MY WAY
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 visible-xs">
                    <div class="subtitle">JUST <span class="red">30 SPOTS</span> AVAILABLE<br>DON'T MISS OUT!</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bgblacksm">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="movie_res">
                        <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                            <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                                @include('funnels.layouts._partials._video',  ['w'=>'100%', 'h'=>'100%'])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    {!! Form::open(['url' => url('postEmailForm'.'/'.session('local')->code), 'method'=>'post']) !!}
                    <input type="hidden" name="pageId" value="{{ $page->id }}">
                        @if($page->switches->showEmailField)
                        <div class="form_holder">
                            <div class="activate">Activate Your Membership Now To Access The VIP Area</div>
                            <div class="col-md-4 col-sm-4 col-xs-12 nogutter">
                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Full Name" required>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 nogutter">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 nogutter">
                                <input type="submit" value="">
                            </div>
                        </div>
                        @endif
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="img-trust">
                        <img src="/img/playboy/trust.png" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection