@section('head')
    {!! $page->appendAsset(url('/css/clean-styles.css')) !!}
@append

@section('bottom-scripts')
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
@append

@section('page-layout')
    <div align="center" id="firstP">

        {!! $page->htmlHeader !!}
        {!! $page->smallHeader !!}
        <div align="center" class="monitor">

            {{--<video width="640" height="360" autoplay style="padding-top: 17px;">
                <source src="http://cdnmediahosting.com/user29339cdn3/newproducts2014/freemoneynopromo.mp4" type="video/mp4" >
            </video>--}}
            @include('funnels.layouts._partials._video', ['w'=>655, 'h'=>391])

            {!! Form::open(['url' => url('postEmailForm').'?'.$_SERVER["QUERY_STRING"], 'method'=>'post']) !!}
            {{--<form method="post" action="{{url('postEmailForm').'?'.$_SERVER["QUERY_STRING"]}}" align="center">--}}
            {{--<form id="firstPage" action="@include('funnels.layouts._partials._url',['url'=>$page->getFirstChild()->fullSlug().'?'.$_SERVER["QUERY_STRING"]])" align="center">--}}
                <input type="hidden" name="pageId" value="{{ $page->id }}">
                    @if($page->switches->showEmailField)
                        <input id="firstPageSignUpMail" type="email" name="email" placeholder="@ln(Email):" required="required" />
                    @endif
                <input class="hov" type="submit" />
            {!! Form::close() !!}

            <p><img src="/img/clean/sealsgg9.png" width="412" height="60" /></p>
        </div>

        {{--@yield('content')--}}

        @if(Request::get('rs')==1)
            <div class="formwrap">
                <div class="container">
                    {!! $page->getRoot()->riskStatment !!}
                </div>
            </div>
        @endif

    </div>
@endsection