@section('head')
    {!! $page->appendAsset(url('/css/dreamprofits/style.css')) !!}
    {!! $page->appendAsset(url('/css/dreamprofits/normalize.css')) !!}
    {!! $page->appendAsset(url('/css/dreamprofits/webflow.css')) !!}
    {!! $page->appendAsset(url('/css/dreamprofits/signUpForm.css')) !!}
    {!! $page->appendAsset(url('/css/dreamprofits/dreamprofit.webflow.css')) !!}
    {!! $page->appendAsset(url('/js/dreamprofits/webfont.js')) !!}
    {!! $page->appendAsset(url('/js/dreamprofits/script.js')) !!}
    {!! $page->appendAsset(url('/js/dreamprofits/modernizr.js')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/dreamprofits/form.js')) !!}
@append

@section('page-layout')
    <div class="w-section w-clearfix popup" style="display: block; transition: opacity 500ms; opacity: 1;">
        <div class="w-container popup-container">
            <div class="w-row">
                <p style="text-align: center">
                    Register Now and Start Making Auto Pilot Cash in the next 8 Minutes<br> Fill in The Form For Insant Access to Your Dream Profits Software
                </p>
                <div id="popVID" class="w-col w-col-8 video-clm">
                    @include('funnels.layouts._partials._video',  ['w'=>'100%', 'h'=>'100%'])
                </div>
                <div id="regPopUp" class="w-col w-col-4">
                    <div class="w-form form">
                        <label id="fields-error" class="error">Required fields are missing.</label>
                        @include('funnels.layouts._partials._form-mobile', ['funnelId' => $page->getParent()->id])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection