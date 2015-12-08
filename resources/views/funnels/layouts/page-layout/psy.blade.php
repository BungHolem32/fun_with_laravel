@section('head')
    {!! $page->appendAsset(url('/css/psy.css')) !!}
@append

@section('bottom-scripts')
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
@append

@section('page-layout')
    {!! $page->htmlHeader !!}
    <div class="ppl">
        @include('funnels.layouts._partials._video')
    </div>

    {!! Form::open(['url' => url('postEmailForm').'?'.$_SERVER["QUERY_STRING"], 'method'=>'post']) !!}
        <input type="hidden" name="pageId" value="{{ $page->id }}">
        <button class="submit ltr en"><span>@ln(FREE DOWNLOAD)</span></button>
    {!! Form::close() !!}

    <img class="cer" src="/img/psy/cer.png" />
@endsection

