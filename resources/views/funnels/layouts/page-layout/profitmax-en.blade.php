@section('head')
    {!! $page->appendAsset(url('/css/profitmax/reset.css')) !!}
    {!! $page->appendAsset(url('/css/profitmax/font-awesome.min.css')) !!}
    {!! $page->appendAsset(url('/css/profitmax/bootstrap.min.css')) !!}
    {!! "<link href='http://fonts.googleapis.com/css?family=Exo:500italic' rel='stylesheet' type='text/css'>" !!}
    {!! "<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900,300italic,700italic,900italic,300italic' rel='stylesheet' type='text/css'>" !!}
    {!! "<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700,400italic' rel='stylesheet' type='text/css'>" !!}
    {!! $page->appendAsset(url('/css/profitmax/style.css')) !!}
    {!! $page->appendAsset(url('/css/profitmax/custom.css')) !!}
    {!! $page->appendAsset(url('/css/profitmax/custom1.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax/bootstrap.min.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax/scripts-11.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax/script.js')) !!}
@append

@section('page-layout')
    <div id="popup" class="exit_popup" style="display: none;">
        <div class="exit_popup_overlay" ></div>
        <div class="popup_inner">
            <div class="popup_content">
                <div class="popup_content_inner">
                    <div class="title">
                        warning!
                        <span>don’t miss out...</span>
                    </div>
                    <div class="description">
                        <span>download</span> The same Cash Avalanche System Our Users Have Used To Rake In Over <span>$2.1 Million In The Past 90 Days!</span>
                    </div>

                    <div class="popup_form" id="popform">
                        <div class="form-group">
                            <label for="" class="control-label"></label>
                            <input type="text" name="email" placeholder="Enter Your Email" id="email-pop" class="form-control" value=""/>
                        </div>
                        <div class="buttons">
                            <button type="submit" class="button" id="exitsubmit">get instant access now</button>
                        </div>
                    </div>

                    <div class="for_free">
                        <span>No credit card. No PayPal. 100% FREE!</span>
                    </div>
                    <a class="close_button" style="" onclick="$('#popup').css('display','none');mousebottom = 0;setTimeout(function(){pu=1;},5000);"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="count left copies" style="width:290px;right:150px;">
        <div class="value" id="copies">38</div>
        <div class="desc">
            Free Copies Available
        </div>
    </div>

    <div class="count right member_earn" style="width:290px;right:150px;">
        <img src="/img/profitmax/people1.png" alt="" id="member_img"/>

        <div class="desc">
            <div class="name"><span id="name">Levi G.</span> just made</div>
            <div class="value">
                $<span id="money">253.89</span>
            </div>
        </div>
    </div>

    <div id="wrapper">
        <div id="header">
            <div class="header_inner">
                <div class="header_content">
                    <div id="logo"><a href="#"></a></div>

                    <div class="header_slogan">
                        <div class="trim_spaces">
                            <div class="scalable">
                                <div class="header_slogan_inner">
                                    <div>Make an extra <span >$1,193 Per Day</span> </div>
                                    <div>Using My Cash Avalanche System - <span>For FREE</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="container" >
            <div class="section section_video">
                <div class="section_container">
                    <div class="video_wrapper">
                        <div class="video_title">
                            <div class="trim_spaces">
                                <div class="scalable">
                                    <div class="scalable">
                                        <span id="watchers">1,693</span> people are watching this video right now
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video">
                                @include('funnels.layouts._partials._video',  ['w'=>'100%', 'h'=>'100%'])
                        </div>
                    </div>
                </div>
            </div>


            <div class="section section_lp_reg_form">
                <div class="section_container">
                    <div class="section_title">
                        START EARNING TODAY! <span>ALL 100% FREE!</span>
                    </div>


                    <div id="main-page-form">
                    {!! Form::open(['url' => url('postEmailForm'.'/'.session('local')->code), 'method'=>'post']) !!}
                        <input type="hidden" name="pageId" value="{{ $page->id }}">
                            <div class="form-group">
                                @if($page->switches->showEmailField)
                                    <input type="text" name="email" id="email" class="form-control" value="" placeholder="Enter Your Email"/>
                                @endif
                            </div>
                            <div class="buttons">
                                <button type="submit" class="button">get instant access</button>
                            </div>
                    {!! Form::close() !!}
                    </div>
                    <div class="images">
                        <img src="/img/profitmax/payment.png" alt=""/>
                        <img src="/img/profitmax/verified.png" alt=""/>
                        <img src="/img/profitmax/safe.png" alt=""/>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="footer">
        <div class="footer_content">
            <div class="footer_note">
                <p>Important Risk Note: Trading binary options can generate significant benefits but also involves a risk of partial or full funds loss and should be considered by initial investors. we strongly advise that you read our terms & conditions and disclaimer page before making any investment. customers must be aware of their individual capital gain tax liability in their country of residence.</p>

                <p>It is against the law to solicit U.S. persons to buy and sell commodity options, even if they are called \prediction' contracts, unless they are listed for trading and traded on a CFTC-registered exchange or unless legally exempt.</p>
            </div>
        </div>
    </div>
@endsection