@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    {!! $page->appendAsset(url('/css/generalbinary-'.Request::local()->dir.'.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
@append

@section('page-layout')
    {!! $page->htmlHeader !!}
    <div class="head">
        <div class="container">
            <div class="col-xs-12">
                <div class="pull-left"><div class="col-xs-3 logo"></div></div>
                <div class="pull-right">
                    <a class="col-xs-3 email" href="mailto:cs@rboptions.com">Email: cs@rboptions.com</a>
                    <a class="col-xs-1 lchat" href=""></a>
                    <a class="col-xs-3 call" href="tel:1-647-846-8231">1-647-846-8231</a>
                </div>
            </div>
        </div>
    </div>



        <div class="form">
            {{--@include('funnels.layouts._partials._form-horizontal', ['funnelId' => $page->id])--}}
        </div>
@endsection
