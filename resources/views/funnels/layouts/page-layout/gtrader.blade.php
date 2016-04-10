@section('head')
    {!! "<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,900,500,700' rel='stylesheet' type='text/css'>" !!}
    {!! "<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>" !!}
    {!! $page->appendAsset(url('/css/gtrader/style.min38943894.css')) !!}
    {!! $page->appendAsset(url('/css/gtrader/default.min38943894.css')) !!}
    {!! $page->appendAsset(url('/css/gtrader/prettyPhoto.min38943894.css')) !!}
    {!! $page->appendAsset(url('/css/gtrader/style.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
    {!! $page->appendAsset(url('/js/gtrader/jquery-migrate.min15761576.js')) !!}
{{--    {!! $page->appendAsset(url('/js/gtrader/op-jquery-base-all.min38943894.js')) !!}--}}
{{--    {!! $page->appendAsset(url('/js/gtrader/popup.min38943894.js')) !!}--}}
{{--    {!! $page->appendAsset(url('/js/gtrader/comment-reply.min9c929c92.js')) !!}--}}
{{--    {!! $page->appendAsset(url('/js/gtrader/op-front-all.min38943894.js')) !!}--}}
    {{--{!! $page->appendAsset(url('/js/gtrader/menus.min38943894.js')) !!}--}}
{{--    {!! $page->appendAsset(url('/js/gtrader/jquery.prettyPhoto.min38943894.js')) !!}--}}
    {!! $page->appendAsset(url('/js/gtrader/script.js')) !!}
@append

@section('page-layout')
    <div class="container main-content">
        <div id="content_area" class="">
            <div style='display:none;background:#fbfbfb;border-top-width:px;border-top-style:solid;border-top-color:;border-bottom-width:px;border-bottom-style:solid;border-bottom-color:;'
                 class="row three-columns cf ui-sortable" id="le_body_row_1"
                 data-style="eyJiYWNrZ3JvdW5kQ29sb3JTdGFydCI6IiNmYmZiZmIiLCJib3JkZXJUb3BXaWR0aCI6IiIsImJvcmRlclRvcENvbG9yIjoiIiwiYm9yZGVyQm90dG9tV2lkdGgiOiIiLCJib3JkZXJCb3R0b21Db2xvciI6IiIsImFkZG9uIjp7fX0=">
                <div class="fixed-width">
                    <div class="one-third column cols narrow" id="le_body_row_1_col_1">
                        <div class="element-container cf" data-style="" id="le_body_row_1_col_1_el_1">
                            <div class="element">
                                <div class="image-caption"
                                     style='width:532px;margin-top:0px;margin-bottom:px;margin-right:auto;margin-left:auto;'>
                                    <img alt="" src="/img/gtrader/logo1.png" border="0" class="full-width"/></div>
                            </div>
                        </div>
                    </div>
                    <div class="one-third column cols narrow" id="le_body_row_1_col_2"></div>
                    <div class="one-third column cols narrow" id="le_body_row_1_col_3"></div>
                </div>
            </div>
            <div style='background:#263238;padding-top:5px;padding-bottom:65px;border-top-width:7px;border-top-style:solid;border-top-color:;border-bottom-width:px;border-bottom-style:solid;border-bottom-color:;'
                 class="row one-column cf ui-sortable section" id="le_body_row_2"
                 data-style="eyJiYWNrZ3JvdW5kQ29sb3JTdGFydCI6IiMyNjMyMzgiLCJwYWRkaW5nVG9wIjoiMjUiLCJwYWRkaW5nQm90dG9tIjoiNjUiLCJib3JkZXJUb3BXaWR0aCI6IjciLCJib3JkZXJUb3BDb2xvciI6IiIsImJvcmRlckJvdHRvbVdpZHRoIjoiIiwiYm9yZGVyQm90dG9tQ29sb3IiOiIiLCJhZGRvbiI6e319">
                <div class="fixed-width">
                    <div class="one-column column cols" id="le_body_row_2_col_1">
                        <div class="element-container cf roboto-500 no-margin"
                             data-style="eyJhZHZhbmNlZENsYXNzIjoicm9ib3RvLTUwMCBuby1tYXJnaW4ifQ=="
                             id="le_body_row_2_col_1_el_1">
                            <div class="element"><h2
                                        style='font-size:27px;font-family:"Lato", sans-serif !important;font-weight:bold;color:#ffffff;text-align:center;line-height:42px;margin-top:10px;'>
                                    Let The BIGGEST Search Engine in The World Do The Hard Work For YOU...</h2></div>
                        </div>
                        <div class="element-container cf roboto-500"
                             data-style="eyJhZHZhbmNlZENsYXNzIjoicm9ib3RvLTUwMCJ9" id="le_body_row_2_col_1_el_2">
                            <div class="element"><h2
                                        style='font-size:44px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:300;color:#ffffff;text-align:center;line-height:42px;margin-bottom:30px;'>
                                    "Google Has Made Me Over <span style="color: #f25565;"><strong>$6,000,000</strong> </span>in
                                    The Last Year"</h2></div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_2_col_1_el_3">
                            <div class="element">
                                <div class="video-plugin-new"
                                     style="max-width:100%; width:853px; height:auto; padding-top:0; padding-bottom:0; margin:0 auto;margin:0 auto; border: 0px solid #fff;margin-bottom: 25px;">
                                    <div style="width:853px;height:0;  padding-bottom: 56.271981242673%; padding-top:0;">
                                        <div id="my-video">
{{--                                            @include('funnels.layouts._partials._video')--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_2_col_1_el_4">
                            <div class="element">
                                <div class="my-button">
                                    <div style="text-align:center">
                                        {!! Form::open(['url' => url('postEmailForm'.'/'.session('local')->code), 'method'=>'post']) !!}
                                        <input type="hidden" name="pageId" value="{{ $page->id }}">
                                        <div style="text-align:center">
                                            @if($page->switches->showEmailField)
                                                {{--<button id="btn_1_fe858d0f077104def637c2e97de7f84b" class="css-button style-1" type="submit"><span class="text">INSTANT ACCESS</span><span class="hover"></span><span class="active"></span></button>--}}
                                                <button id="btn_1_fe858d0f077104def637c2e97de7f84b" class="css-button style-1 first-submit" type="submit"><span class="text">INSTANT ACCESS</span><span class="hover"></span><span class="active"></span></button>
                                            @endif
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_2_col_1_el_5">
                            <div class="element">
                                <div class="op-text-block"
                                     style="width:100%;margin: 0 auto;text-align:center;padding-top:10px;"><p style='font-size:14px;color:#ffffff;'>We respect your privacy and your information is 100% secure</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style='background:#455A64;border-top-width:px;border-top-style:solid;border-top-color:;border-bottom-width:px;border-bottom-style:solid;border-bottom-color:; padding-top: 20px;' class="row two-columns cf ui-sortable" id="le_body_row_3" data-style="eyJiYWNrZ3JvdW5kQ29sb3JTdGFydCI6IiM0NTVBNjQiLCJib3JkZXJUb3BXaWR0aCI6IiIsImJvcmRlclRvcENvbG9yIjoiIiwiYm9yZGVyQm90dG9tV2lkdGgiOiIiLCJib3JkZXJCb3R0b21Db2xvciI6IiIsImFkZG9uIjp7fX0=">
                <div class="fixed-width">
                    <div class="one-half column cols" id="le_body_row_3_col_1">
                        <div class="element-container cf roboto-500"
                             data-style="eyJhZHZhbmNlZENsYXNzIjoicm9ib3RvLTUwMCJ9" id="le_body_row_3_col_1_el_1">
                            <div class="element"><h2 style='font-size:50px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:300;color:#fafafa;text-align:center;line-height:42px;margin-bottom:30px;'>
                                    Total Members:</h2></div>
                        </div>
                        <div class="element-container cf roboto-500"
                             data-style="eyJhZHZhbmNlZENsYXNzIjoicm9ib3RvLTUwMCJ9" id="le_body_row_3_col_1_el_2">
                            <div class="element"><h2
                                        style='font-size:3em !important;font-family:"Lato", sans-serif !important;font-weight:bold;color:#f25565;text-align:center;line-height:42px;margin-bottom:30px;'>
                                    1,231</h2></div>
                        </div>
                    </div>
                    <div class="one-half column cols" id="le_body_row_3_col_2">
                        <div class="element-container cf roboto-500"
                             data-style="eyJhZHZhbmNlZENsYXNzIjoicm9ib3RvLTUwMCJ9" id="le_body_row_3_col_2_el_1">
                            <div class="element"><h2
                                        style='font-size:50px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:300;color:#fafafa;text-align:center;line-height:42px;margin-bottom:30px;'>
                                    Total Members Profits:</h2></div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_3_col_2_el_2">
                            <div class="element">
                                <div class="op-custom-html-block">
                                    <center><h1 id="Profit" style="font-size:3em !important; color:#38bfff;">$128,221,776!</h1>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="element-container cf roboto-500"
                             data-style="eyJhZHZhbmNlZENsYXNzIjoicm9ib3RvLTUwMCJ9" id="le_body_row_3_col_2_el_3">
                            <div class="element"><h2
                                        style='font-size:21px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:300;color:#fafafa;text-align:center;line-height:42px;margin-bottom:30px;'>
                                    Live Updating Trade Account History</h2></div>
                        </div>
                    </div>
                </div>
            </div>
            <div style='background:#ffffff;border-top-width:px;border-top-style:solid;border-top-color:;border-bottom-width:px;border-bottom-style:solid;border-bottom-color:;'
                 class="row one-column cf ui-sortable" id="le_body_row_4"
                 data-style="eyJiYWNrZ3JvdW5kQ29sb3JTdGFydCI6IiNmZmZmZmYiLCJib3JkZXJUb3BXaWR0aCI6IiIsImJvcmRlclRvcENvbG9yIjoiIiwiYm9yZGVyQm90dG9tV2lkdGgiOiIiLCJib3JkZXJCb3R0b21Db2xvciI6IiIsImFkZG9uIjp7fX0=">
                <div class="fixed-width">
                    <div class="one-column column cols" id="le_body_row_4_col_1">
                        <div class="element-container cf" data-style="" id="le_body_row_4_col_1_el_1">
                            <div class="element">
                                <div style="height:26px"></div>
                            </div>
                        </div>
                        <div class="element-container cf roboto-500"
                             data-style="eyJhZHZhbmNlZENsYXNzIjoicm9ib3RvLTUwMCJ9" id="le_body_row_4_col_1_el_2">
                            <div class="element"><h2
                                        style='font-size:69px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:300;color:#212121;text-align:center;line-height:42px;margin-bottom:30px;'>
                                    Welcome To GoogleTrader</h2></div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_4_col_1_el_3">
                            <div class="element">
                                <div class="image-caption"
                                     style='width:1089px;margin-top:0px;margin-bottom:px;margin-right:auto;margin-left:auto;'>
                                    <img alt="" src="/img/gtrader/display1.png" border="0" class="full-width"/></div>
                            </div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_4_col_1_el_4">
                            <div class="element"><h2
                                        style='font-size:45px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:normal;color:#f25565;text-align:center;'>
                                    Few Facts About GoogleTrader</h2></div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_4_col_1_el_5">
                            <div class="element">
                                <ul class="bullet-list 1">
                                    <li style='background-image:url("/img/gtrader/0.png");background-repeat:no-repeat;font-size:26px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:300;'>
                                        GoogleTrader makes 59.3% LESS trades than the average trading software because
                                        it not taking risks!
                                    </li>
                                    <li style='background-image:url("/img/gtrader/0.png");background-repeat:no-repeat;font-size:26px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:300;'>
                                        GoogleTrader ONLY trades when it KNOWS it’s going to win, When it KNOWS with
                                        absolute certainty that a trade WILL make big money profits for you.
                                    </li>
                                    <li style='background-image:url("/img/gtrader/0.png");background-repeat:no-repeat;font-size:26px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:300;'>
                                        Over 1,000 Beta-Testers - 100% Proven &amp; Tested
                                    </li>
                                    <li style='background-image:url("/img/gtrader/0.png");background-repeat:no-repeat;font-size:26px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:300;'>
                                        The average user of GoogleTrader makes at least $1,800 in pure profits per DAY!
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_4_col_1_el_6">
                            <div class="element"><h2 style='font-size:110px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:normal;color:#a3d468;text-align:center;'>LIVE TRADES</h2></div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_4_col_1_el_8">
                            <div class="element">
                                <div class="op-custom-html-block">
                                    <div id="live-trades"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style='background:#F5F5F5;padding-top:20px;border-top-width:px;border-top-style:solid;border-top-color:;border-bottom-width:px;border-bottom-style:solid;border-bottom-color:;'
                 class="row one-column cf ui-sortable" id="le_body_row_5"
                 data-style="eyJiYWNrZ3JvdW5kQ29sb3JTdGFydCI6IiNGNUY1RjUiLCJwYWRkaW5nVG9wIjoiMjAiLCJib3JkZXJUb3BXaWR0aCI6IiIsImJvcmRlclRvcENvbG9yIjoiIiwiYm9yZGVyQm90dG9tV2lkdGgiOiIiLCJib3JkZXJCb3R0b21Db2xvciI6IiIsImFkZG9uIjp7fX0=">
                <div class="fixed-width">
                    <div class="one-column column cols" id="le_body_row_5_col_1">
                        <div class="element-container cf roboto-500"
                             data-style="eyJhZHZhbmNlZENsYXNzIjoicm9ib3RvLTUwMCJ9" id="le_body_row_5_col_1_el_1">
                            <div class="element"><h2
                                        style='font-size:50px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:300;color:#212121;text-align:center;line-height:42px;margin-bottom:30px;'>
                                    Things That You Need To Know</h2></div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_5_col_1_el_2">
                            <div class="element">
                                <ul class="feature-block feature-block-style-4 feature-block-four-col cf">
                                    <li>
                                        <div>
                                            <span class="feature-block-4-img-container"
                                                  style="background-color: #eddaba;"><img class="feature-block-4"
                                                                                          src="/img/gtrader/Web-Development.png"/></span>
                                            <h2 style='font-size:21px;font-family:"Lato", sans-serif !important;font-weight:bold;color:#4681a8;'>
                                                Google Algorithm</h2>
                                            <p style='font-size:19px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:300;color:#4f4f4f;'>
                                                GoogleTrader is an Auto-Trading software that based on Google&#8217;s
                                                Search Engine algorithm!</p>

                                        </div>
                                    </li>

                                    <li>
                                        <div>
                                            <span class="feature-block-4-img-container"
                                                  style="background-color: #b3e2ef;"><img class="feature-block-4"
                                                                                          src="/img/gtrader/Target-Keywords.png"/></span>
                                            <h2 style='font-size:21px;font-family:"Lato", sans-serif !important;font-weight:bold;color:#4681a8;'>
                                                96.47% Accurate</h2>
                                            <p style='font-size:19px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:300;color:#4f4f4f;'>
                                                GoogleTrader trades ONLY when it KNOWS it’s going to make profit!</p>

                                        </div>
                                    </li>

                                    <li>
                                        <div>
                                            <span class="feature-block-4-img-container"
                                                  style="background-color: #fbe6e5;"><img class="feature-block-4"
                                                                                          src="/img/gtrader/374.png"/></span>
                                            <h2 style='font-size:21px;font-family:"Lato", sans-serif !important;font-weight:bold;color:#4681a8;'>
                                                Auto-Trading Software</h2>
                                            <p style='font-size:19px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:300;color:#4f4f4f;'>
                                                100% Proven Auto Trading Software &#8211; verified by brokers!</p>

                                        </div>
                                    </li>

                                    <li>
                                        <div>
                                            <span class="feature-block-4-img-container"
                                                  style="background-color: #e8e8e8;"><img class="feature-block-4"
                                                                                          src="/img/gtrader/445.png"/></span>
                                            <h2 style='font-size:21px;font-family:"Lato", sans-serif !important;font-weight:bold;color:#4681a8;'>
                                                Private Community</h2>
                                            <p style='font-size:19px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:300;color:#4f4f4f;'>
                                                Watch our live results all verified by an independent party</p>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row one-column cf ui-sortable" id="le_body_row_6" data-style="">
                <div class="fixed-width">
                    <div class="one-column column cols" id="le_body_row_6_col_1">
                        <div class="element-container cf" data-style="" id="le_body_row_6_col_1_el_1">
                            <div class="element"><h2
                                        style='font-size:50px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:300;color:#3379bb;text-align:center;'>
                                    Success Stories</h2></div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_6_col_1_el_2">
                            <div class="element"><h2
                                        style='font-size:22px;font-family:Arial, sans-serif;font-style:normal;font-weight:300;color:#9d9494;text-align:center;'>
                                    It doesn't matter where you come from - meet some of our users who making REAL
                                    money!</h2></div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_6_col_1_el_3">
                            <div class="element">
                                <div class="styled-hr hr-style-10">
                                    <div class="hr-1">
                                    </div>
                                    <div class="hr-2">
                                        <hr/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row four-columns cf ui-sortable" id="le_body_row_7" data-style="">
                <div class="fixed-width videos-container">
                    <div class="one-fourth column cols narrow" id="le_body_row_7_col_2">
                        <div class="element-container cf" data-style="" id="le_body_row_7_col_2_el_1">
                            <div class="element">
                                <div class="video-lightbox-link video-lightbox-style-1  video-type-embed"
                                     style="width:1684px; margin:0 auto;">
                                    <div class="frame-style-inner">
                                        <a title="Click to play" onclick="openStories('https://www.youtube.com/embed/Q9oDNyCkYiE')" rel="prettyPhoto">
                                            <img src="/img/gtrader/blon.jpg" style="width:1684px; height: 947px;"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="one-fourth column cols narrow" id="le_body_row_7_col_3">
                        <div class="element-container cf" data-style="" id="le_body_row_7_col_3_el_1">
                            <div class="element">
                                <div class="video-lightbox-link video-lightbox-style-1  video-type-embed"
                                     style="width:1683px; margin:0 auto;">
                                    <div class="frame-style-inner">
                                        <a title="Click to play" onclick="openStories('https://www.youtube.com/embed/ebTKmldHEWI')" rel="prettyPhoto" data-width="560" data-height="315">
                                            <img src="/img/gtrader/tammy.jpg" style="width:1683px; height: 947px;"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="one-fourth column cols narrow" id="le_body_row_7_col_4">
                        <div class="element-container cf" data-style="" id="le_body_row_7_col_4_el_1">
                            <div class="element">
                                <div class="video-lightbox-link video-lightbox-style-1  video-type-embed"
                                     style="width:1683px; margin:0 auto;">
                                    <div class="frame-style-inner">
                                        <a title="Click to play" onclick="openStories('https://www.youtube.com/embed/rqNjgmcsQk0')" rel="prettyPhoto">
                                            <img src="/img/gtrader/xavia.jpg" style="width:1683px; height: 947px;"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="stories_videos">
                    <div class="gray-background" onclick="closeStories()"></div>
                    <div class="content">
                        <div id="op-asset-video_lightbox-2">
                            <iframe src="" frameborder="0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row one-column cf ui-sortable" id="le_body_row_8" data-style="">
                <div class="fixed-width">
                    <div class="one-column column cols" id="le_body_row_8_col_1">
                        <div class="element-container cf" data-style="" id="le_body_row_8_col_1_el_1">
                            <div class="element">
                                <div class="image-caption" style='width:1047px;margin-top:0px;margin-bottom:px;margin-right:auto;margin-left:auto;'>
                                    <img alt="" src="/img/gtrader/fb-coment-side-change4.png" border="0" class="full-width"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style='background:#F5F5F5;padding-top:20px;border-top-width:px;border-top-style:solid;border-top-color:;border-bottom-width:px;border-bottom-style:solid;border-bottom-color:;'
                 class="row one-column cf ui-sortable" id="le_body_row_9"
                 data-style="eyJiYWNrZ3JvdW5kQ29sb3JTdGFydCI6IiNGNUY1RjUiLCJwYWRkaW5nVG9wIjoiMjAiLCJib3JkZXJUb3BXaWR0aCI6IiIsImJvcmRlclRvcENvbG9yIjoiIiwiYm9yZGVyQm90dG9tV2lkdGgiOiIiLCJib3JkZXJCb3R0b21Db2xvciI6IiIsImFkZG9uIjp7fX0=">
                <div class="fixed-width">
                    <div class="one-column column cols" id="le_body_row_9_col_1">
                        <div class="element-container cf roboto-500"
                             data-style="eyJhZHZhbmNlZENsYXNzIjoicm9ib3RvLTUwMCJ9" id="le_body_row_9_col_1_el_1">
                            <div class="element"><h2
                                        style='font-size:50px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:300;color:#212121;text-align:center;line-height:42px;margin-bottom:30px;'>
                                    Why GoogleTrader Works?</h2></div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_9_col_1_el_2">
                            <div class="element">
                                <ul class="feature-block feature-block-style-4 feature-block-three-col cf">
                                    <li>
                                        <div>
                                            <span class="feature-block-4-img-container"
                                                  style="background-color: #b3e2ef;"><img class="feature-block-4" src="/img/gtrader/2.png"/></span>
                                            <h2 style='font-size:21px;font-family:"Lato", sans-serif !important;font-weight:bold;color:#4681a8;'>
                                                No Risks!</h2>
                                            <p style='font-size:19px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:300;color:#4f4f4f;'>
                                                Trades will be placed only if GoogleTrader knows it&#8217;s going to
                                                profit!</p>

                                        </div>
                                    </li>

                                    <li>
                                        <div>
                                            <span class="feature-block-4-img-container"
                                                  style="background-color: #fbe6e5;"><img class="feature-block-4" src="/img/gtrader/374.png"/></span>
                                            <h2 style='font-size:21px;font-family:"Lato", sans-serif !important;font-weight:bold;color:#4681a8;'>
                                                100% Guaranteed</h2>
                                            <p style='font-size:19px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:300;color:#4f4f4f;'>
                                                GoogleTrader is the Most Advanced trading bot in the history and
                                                guaranteed to make money!</p>

                                        </div>
                                    </li>

                                    <li>
                                        <div>
                                            <span class="feature-block-4-img-container"
                                                  style="background-color: #e8e8e8;"><img class="feature-block-4" src="/img/gtrader/424.png"/></span>
                                            <h2 style='font-size:21px;font-family:"Lato", sans-serif !important;font-weight:bold;color:#4681a8;'>
                                                Updates & News</h2>
                                            <p style='font-size:19px;font-family:"Lato", sans-serif !important;font-style:normal;font-weight:300;color:#4f4f4f;'>
                                                GoogleTrader database is updated every 10 seconds in order to always
                                                have the most profitable market opportunities!</p>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_9_col_1_el_3">
                            <div class="element">
                                <div class="cf">
                                    <div class="my-button">
                                        <a id="btn_1_fe858d0f077104def637c2e97de7f84b" class="css-button style-1 second-submit">
                                            <span class="text">INSTANT ACCESS</span>
                                            <span class="hover"></span>
                                            <span class="active"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-width footer small-footer-text">
            <div class="row">
                <div class="fixed-width">
                    <small class="footer-disclaimer">This site and the products and services offered on this site are
                        not associated, affiliated, endorsed, or sponsored by Google, Clickbank, eBay, Amazon, Yahoo or
                        Bing.
                    </small>
                    <nav class="footer-navigation">
                        <ul id="nav-footer" class="inline-nav">
                            {{--<li id="menu-item-592" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-592"><a href="#">Disclaimer</a></li>--}}
                            {{--<li id="menu-item-593" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-593"><a href="#">TOS</a></li>--}}
                        </ul>
                    </nav>
                    <p class="footer-copyright">Copyright 2015 - GoogleTrader - All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
@endsection