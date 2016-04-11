@section('head')
    {!! $page->appendAsset(url('/css/psy-'.Request::local()->dir.'.css')) !!}
    {!! $page->appendAsset(url('/css/goutcome/style.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
@append

@section('page-layout')
    {!! $page->htmlHeader !!}

    <div class="wrap">
        <div>
            <img id="logo-img" src="/img/goutcome/gologo6.png" alt="" width="262" height="126">
            <h2>CHANGE YOUR LIFE TODAY!</h2>
        </div>
        <div class="ppl">
            @include('funnels.layouts._partials._video')
        </div>

        {!! Form::open(['url' => url('postEmailForm'.'/'.session('local')->code), 'method'=>'post']) !!}
            <input type="hidden" name="pageId" value="{{ $page->id }}">
            <input name="button" type="submit" class="ff-btn" id="button" value=" ">
        {!! Form::close() !!}
    </div>
    <img class="cer" src="/img/psy/cer.png" />
@endsection

