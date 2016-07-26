@section('head')
    <meta name="viewport" content="width=640px, initial-scale=.5, maximum-scale=.5"/>
    <link rel="stylesheet" href="/css/rb-options/style-{{Request::local()->dir}}.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="/js/jquery.validate.min.js"></script>
@stop

@section('page-layout')


    {{--Strip-logo--}}
    <section class="top-elem">
        <div class="container">
            <div class="row strip-top-logo-wrapper">
                <img src="/img/rboptions/logo.png" alt="" class="img-responsive center-block">
                <div class="img">
                    <img src="/img/rboptions/icon.png" alt="" class="img-responsive">
                </div>
            </div>
            <div class="row strip-center-wrapper">
                <div class="content">
                    <header>
                        <h2 class="text-uppercase text-center">@ln(our advantages)</h2>
                    </header>
                    <div class="pull-left  col-md-3 col-sm-4 col-xs-4 text-center">
                        <p class="text-capitalize"><img src="/img/rboptions/v.png" alt=""> @ln(same day withdrawal)</p>
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-sm-4 col-xs-4 text-center">
                        <p class="text-capitalize"><img src="/img/rboptions/v.png" alt=""> 100% @ln(bonus)</p>
                    </div>
                    <div class="pull-right col-md-3 col-sm-4 col-xs-4 text-center">
                        <p class="text-capitalize"><img src="/img/rboptions/v.png" alt=""> @ln(education center)</p>
                    </div>
                </div>
            </div>
            <div class="row strip-bottom-wrapper">
                <h2 class="text-center  text-capitalize">@ln(open an account with rboptions)</h2>
                <div class="bottom-arrow">
                    <img src="/img/rboptions/arrow.png" alt="">
                </div>
            </div>

        </div>
    </section>



    {{--FORM PART --}}
    <section class="form-wrapper container">
        @include('funnels.layouts._partials._form-brand', ['funnelId' => $page->id])
    </section>

    {{--BOTTOM  SIGNS--}}
    <section class="bottom-signs">
        <div class="container">
            <img src="/img/rboptions/icons.png" alt="" class="img-responsive center-block">
        </div>
    </section>
@stop
@section('bottom-scripts')
    <script>
        $('.rc-anchor-normal').css('width', 'auto');
    </script>
@stop
