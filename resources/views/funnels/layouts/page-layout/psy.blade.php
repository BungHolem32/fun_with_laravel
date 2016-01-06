@section('head')
    {!! $page->appendAsset(url('/css/psy-'.Request::local()->dir.'.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
@append

@section('page-layout')
    {!! $page->htmlHeader !!}

    <div class="wrap">
        <div class="ppl">
            @include('funnels.layouts._partials._video')
        </div>

        {!! Form::open(['url' => url('postEmailForm').'?'.$_SERVER["QUERY_STRING"], 'method'=>'post']) !!}
        <input type="hidden" name="pageId" value="{{ $page->id }}">
        <button class="submit en"><span>@ln(FREE DOWNLOAD)</span></button>
        {!! Form::close() !!}
    </div>
    <img class="cer" src="/img/psy/cer.png" />
@endsection

