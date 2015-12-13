@section('page-layout')

    {{-- TOP BANNER --}}
    <div id="top-panel-cover">
        <div id="top-panel" class="row">
            <div id="account-details">
                <h4 style="font-size: 15px; font-weight: bold;margin-top: 4px;margin-bottom: 3px;" id="toggleProfileDetailsLink">Account Details</h4>
                <span style="font-size:13px;">Email: rotem@test.com</span><br>
                <span style="font-size:13px;">Broker Name: Big Option</span><br>
                <span id="balanceStatus" style="font-size:13px;">Balance: $ 0.00</span><br>
                <span style="font-size:13px;">Account Id: 20832933</span>

            </div>
            <div id="aussiemethod_logo_img" style="width: 268px;margin: 0 auto;">
                <img src="/img/aussie/panel/logo.png" alt="aussiemethod_logo" id="logo">
            </div>
        </div>
    </div>

    {{-- TOP MENU --}}
    <div>
        <div id="menu_row">
            <nav class="horizontal-menu">
                <div id="accountdetailz" style="width: 22px; height: 22px; display: none; background: blue;"></div>
                <ul class="side-menu">
                    <li>
                        <a href="javascript:;" data-toggle="modal" data-target="#welcomeModal" data-backdrop="false">
                            <i class="fa fa-bookmark-o"></i> View Welcome Message
                        </a>
                    </li>
                    <li id="guided-tour">
                        <a href="javascript:;" id="manual">
                            <i class="fa fa-info-circle"></i> Guided Tour
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <i class="fa fa-home"></i> HomePage
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="#" id="manualTrading" rv-on-click="allowManualTrading">
                            <i class="fa fa-wrench"></i> Broker Trading Area
                        </a>
                    </li>
                    <li class="signal-modal-link hidden">
                        <a class="menulink" href="javascript:;" data-toggle="modal" onclick="showSignalModal();" data-backdrop="false">
                            <i class="fa fa-cogs"></i>Trading Signals
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="modal" data-target="#faqModal" data-backdrop="false">
                            <span class="badge pull-right"></span>
                            <i class="fa fa-comments-o "></i> FAQ
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="modal" data-target="#StatisticsModal" data-backdrop="false">
                            <span class="badge pull-right"></span>
                            <i class="fa fa-signal"></i> View Statistics
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="badge pull-right"></span>
                            <i class="fa fa-envelope"></i> Contact Us
                        </a>
                    </li>
                    <li>
                        <a href="/logout">
                            <span class="badge pull-right"></span>
                            <i class="fa fa-sign-out"></i> Log Out
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


@endsection
