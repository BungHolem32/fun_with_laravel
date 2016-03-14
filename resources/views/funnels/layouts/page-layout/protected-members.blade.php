@section('head')
    {{--<script src="/js/lp/lp.js"></script>--}}
    {!! $page->appendAsset(url('/css/lp/protected.css')) !!}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {{--<script src="/js/lp/binary-currencies.js"></script>--}}
@append

@section('page-layout')

    <!-- Body Common Code -->		<div class="container">
        <!-- HEADER !-->
        <div class="page-header">
            <img src="{{ $page->logo_pic }}" alt="" />
        </div>
        <!-- HEADER !-->

        <!-- TITLE !-->
        <p>
        <h1>You Are 100% <span style="color:#F8C750">Protected</span></h1>
        <br />
        </p>

        <!-- TITLE !-->

        <div class="row">
            <!-- PARAGRAPH !-->
            <div class="col-xs-12 col-sm-6 col-lg-8">
                <p class="main-text">Only at Huge Options you get a head start in binary options trading with 10 risk-free trades bonus!
                    <br /> <br />
                    Whatever you win is yours and whatever you lose, well... you don’t lose! </p>
                <p><img src="img/lp/protected/bg.png" class="img-responsive" alt="" /></p>
            </div>

            <!-- END PARAGRAPH !-->
            <!-- FORM !-->
            <div class="col-xs-12 col-sm-6 col-lg-4">
                @include('funnels.layouts._partials._form', ['funnelId' => $page->id])
                <div class="logos"><img src="img/lp/protected/iconos.png" alt="" /></div>
                <div class="logos"><img src="img/lp/protected/logos.png" alt="" /></div>
            </div><!-- end form !-->


        </div><!-- End Container !-->
@endsection
