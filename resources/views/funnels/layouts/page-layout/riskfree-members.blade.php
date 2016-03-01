@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300,300italic' rel='stylesheet' type='text/css'>
    <script src="/js/lp/lp.js"></script>
    {!! $page->appendAsset(url('/css/lp/risk-free.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {{--<script src="/js/lp/binary-currencies.js"></script>--}}
@append

@section('page-layout')

    <div id="wrap">
        <div class="header">
            <div class="logo"><img src="{{ $page->logo_pic }}" /></div>
            <img src="/img/lp/riskfree/header5.jpg" class="headerImg" style="display: none;" />
            <img src="/img/lp/riskfree/header4.jpg" class="mobileHed" style="display: none;" />
            <div class="center">
                <div class="form">
                    <img class="topForm" src="/img/lp/riskfree/topForm.png" />
                    <div class="formbg">
                        <table id="AjaxWait" align="center" cellpadding="0" cellspacing="0" style="position: absolute; z-index: 100; width: 100%; height: 100%; display: none; background: rgba(0, 0, 0, 0.498039);" height="100%" width="100%"> <tbody><tr> <td> <table align="center" cellpadding="0" cellspacing="0" style="position: absolute;top: 0;height: 100%;bottom: 0;left: 0;right: 0;text-align: center; margin: 0px auto; width:62px;"> <tbody><tr> <td> <div id="floatingBarsG"> <div class="blockG" id="rotateG_01"></div> <div class="blockG" id="rotateG_02"></div> <div class="blockG" id="rotateG_03"></div> <div class="blockG" id="rotateG_04"></div> <div class="blockG" id="rotateG_05"></div> <div class="blockG" id="rotateG_06"></div> <div class="blockG" id="rotateG_07"></div> <div class="blockG" id="rotateG_08"></div> </div> </td> </tr> </tbody></table> </td> </tr> </tbody></table>
                        <ul class="LeadCapture">
                            <h1>OPEN AN ACCOUNT NOW {!! $page->htmlHeader !!}</h1>
                            <fieldset>
                                @include('funnels.layouts._partials._form', ['funnelId' => $page->id])
                            </fieldset>
                        </ul>
                        <div class="sslIcons"><img src="/img/lp/riskfree/icons.png" /></div>
                    </div>
                </div>
            </div>
            <img class="prot" src="/img/lp/riskfree/prot.png" />
            <img class="mcafee" src="/img/lp/riskfree/mcafee.png" />
        </div>
        <div class="footer">
            <div class="footerText">
                {!! $page->smallHeader !!}
                Opinions and analysis on potential expected market movements contained within the uBinary website are not to be considered necessarily precise or timely, and due to the public nature of the Internet, uBinary cannot at any time guarantee the accuracy of such information. Trading online, no matter how convenient or efficient it may be, does not necessarily reduce the risks associated with foreign exchange trading, and uBinary does not accept any responsibility towards any customer, member or third party, acting on such information contained on the website as to the accuracy or delay of information such as quotations, news, and charts derived from quotations
            </div>
            <div class="testimonial1">
                <div class="person">
                    <img src="/img/lp/riskfree/testimonial.png" />
                    <div class="arrow"></div>
                    <p>
                        <b>I can't believe how easy it is,</b><br />
                        earning money while drinking my morning coffee! Social trading has enabled me to fulfill my dreams!  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <div class="details">
                    <div class="name">Andy Bennet | Liverpool, UK </div>
                </div>
            </div>
        </div>
    </div>
    <iframe src="http://www.cloudzonetrk.com/evpi?event=Pixel%20Registration" style="visibility:hidden"></iframe>
@endsection
