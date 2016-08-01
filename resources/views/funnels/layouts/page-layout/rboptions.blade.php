@section('head')
    <meta name="viewport" content="width=640px, initial-scale=.5, maximum-scale=.5"/>
    <link rel="stylesheet" href="/css/rb-options/style-{{Request::local()->dir}}.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="/js/jquery.validate.min.js"></script>
@stop
{{--*/ $openAccount = '@ln(open account)'; /*--}}
@section('page-layout')


    <div class="wrapper">


        {{--Strip-logo--}}
        <section class="top-elem">
            <div class="container">
                <div class="row strip-top-logo-wrapper">
                    <img src="/img/rboptions/logo.png" alt="" class="img-responsive center-block">
                    <div class="img">
                        @if(isMongoNotEmpty($page->switches->stamp))
                            <img src="{{$page->switches->stamp}}" alt="" class="img-responsive">
                        @else
                            <img src="/img/rboptions/en/icon.png" alt="" class="img-responsive">
                        @endif
                    </div>
                </div>

                <div class="row strip-center-wrapper">
                    <div class="content">
                        <header>
                            <h2 class="text-uppercase text-center">@ln(our advantages)</h2>
                        </header>

                        <div class="prop-wrapper container">
                            <div class="col-md-4 col-sm-4 col-xs-4 text-center">
                                <p class="text-capitalize"><img src="/img/rboptions/v.png" alt="">
                                    @ln(same day withdrawal)</p>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-4 text-center">
                                <p class="text-capitalize">
                                    <img src="/img/rboptions/v.png" alt="">
                                    @ln(bonus) 100%
                                </p>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-4 text-center">
                                <p class="text-capitalize">
                                    <img src="/img/rboptions/v.png" alt="">
                                    @ln(education center)
                                </p>
                            </div>

                            {{--*/ $var = ['same day withdrawal','bonus','education center'] /*--}}
                            {{--@foreach($var as $key => $prop)--}}
                            {{--<div class="col-md-4 col-sm-4 col-xs-4 text-center">--}}
                            {{--<p class="text-capitalize">--}}
                            {{--<img src="/img/rboptions/v.png" alt=""> @ln({{$prop}}) {{$key == 1? '100%' :''}}--}}
                            {{--</p>--}}
                            {{--</div>--}}
                            {{--@endforeach--}}

                        </div>
                    </div>
                </div>

                <div class="row strip-bottom-wrapper">
                    <h2 class="text-center  text-capitalize">@ln(open an account with rboptions)</h2>
                </div>
            </div>
        </section>
        <section class="bottom-arrow container">
            <img src="/img/rboptions/arrow.png" alt="">
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

    </div>
@stop
@section('bottom-scripts')
    <script>
        $('.rc-anchor-normal').css('width', 'auto');
    </script>
@stop
