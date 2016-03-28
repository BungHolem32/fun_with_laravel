@section('head')

    <link rel="stylesheet" href="/css/aussie/panel/style.css" />
    <link rel="stylesheet" href="/css/aussie-new/panel/style-new.css" />
    <link rel="stylesheet" href="/css/aussie/panel/custom.css" />
@append

@section('bottom-scripts')
    <script src="/js/aussie/panel/custom.js"></script>
    {!! $page->appendAsset(url('/js/jquery.validate.js')) !!}

    <script type="text/javascript" src="//sst-super-c-nl.spotoption.com/socket.io/socket.io.js"></script>
    {!! $page->appendAsset(url('/js/panel-common/panel.js')) !!}

@append

@section('page-layout')

    {{-- TOP BANNER --}}
    <div id="top-panel-cover">
        <div id="top-panel" class="row">

            <div id="account-details" class="">
                <div class="inside">
                    <h4 style="font-size: 15px; font-weight: bold;margin-top: 4px;margin-bottom: 3px;" id="toggleProfileDetailsLink" class="text-capitalize">
                        @ln(account details)
                    </h4>
                    <span class="" style="font-size:13px;">@ln(email): {{ App\Customer::get()->email }}</span><br>
                    <span style="font-size:13px;text-transform: capitalize">@ln(broker name): {{ $page->brand->name }}</span><br>
                    <span id="balanceStatus" style="font-size:13px;">
                        @ln(Balance): <span class="balance">$ 0.00</span>
                        <i class="getLoading fa fa-refresh fa-spin"></i>
                    </span><br>
                    <span style="font-size:13px;">@ln(Account Id): {{ App\Customer::get()->id }}</span>
                </div>
            </div>

            <div id="aussiemethod_logo_img" class="logo-pic-pannel"  style="margin: 0 auto;">
                <img src="{{ $page->panel_logo }}" alt="method_logo" id="logo">
            </div>
        </div>
    </div>

    {{-- TOP MENU --}}
    <div>
        <div id="menu_row">
            <nav class="horizontal-menu">
                <div id="accountdetailz" style="width: 22px; height: 22px; display: none; background: #0000ff;"></div>
                <ul class="side-menu">

                    <li class="col-xm-12 col-md-3 col-lg-3">
                        <a id="awelcomeModal"  class="text-capitalize" href="javascript:;">
                            <i class="fa fa-bookmark-o "></i> @ln(view welcome message)
                        </a>
                    </li>

                    <li id="guided-tour" class="col-xm-12 col-md-2 col-lg-2">
                        <a class="guided-tour-start" href="javascript:;" id="manual">
                            <i class="fa fa-info-circle text-capitalize"></i> @ln(guided tour)
                        </a>
                    </li>

                    <li class="col-xm-12 col-md-2 col-lg-2">
                        <?php $c = \Session::get('spotCustomer'); ?>
                        <a target="_blank" href="{{ $c->getAutologinLink() }}" id="manualTrading">
                            <i class="fa fa-wrench text-capitalize"></i>@ln(broker trading area)
                        </a>
                    </li>

                    <li class="signal-modal-link hidden">
                        <a class="menulink" href="javascript:;" onclick="showSignalModal();" data-backdrop="false">
                            <i class="fa fa-cogs text-capitalize"></i> @ln(trading signals)
                        </a>

                    </li>
                    <li class="col-xm-12 col-md-1 col-lg-1">
                        <a id="afaqModal" href="javascript:;" data-toggle="modal" data-target="#faqModal" data-backdrop="false">
                            <span class="badge pull-right"></span>
                            <i class="fa fa-comments-o text-uppercase"></i> @ln(faq)
                        </a>
                    </li>
                    <li class="hidden">
                        <a id="StatisticsModal" href="javascript:;">
                            <span class="badge pull-right"></span>
                            <i class="fa fa-signal text-capitalize"></i> @ln(view statistics)
                        </a>
                    </li>
                    <li class="col-xm-12 col-md-2 col-lg-2">
                        <a href="{{ $page->brand->contactLink }}">
                            <span class="badge pull-right"></span>
                            <i class="fa fa-envelope text-capitalize"></i> @ln(contact us)
                        </a>
                    </li>
                    <li class="col-xm-12 col-md-2 col-lg-2">
                        <a href="/logout" id="logout">
                            <span class="badge pull-right"></span>
                            <i class="fa fa-sign-out text-capitalize"></i> @ln(log out)
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    {{-- WRAPPER --}}
    <div id="wrapper">
        <div class="all-wrapper"> <!-- /#bootstrap wrapper -->
            <!-- /#start of side-nav-bar -->
            <div class="row">
                <!-- /#end of side-nav-bar -->
                <div class="col-md-12 col-md-offset-0">
                    <div class="content-wrapper wood-wrapper">
                        <div class="content-inner">
                            <div class="main-content">

                                {{-- Guide POPUPS --}}
                                @include('panels.partials._guidedtour')

                                {{-- Modal POPUPS --}}
                                @include('panels.partials._popups')

                                <p class="alert alert-danger note">
                                    {!! $page->body !!}
                                </p>
                                <div style="display: none;">
                                    <p class="alert alert-danger note" data-toggle="modal" data-target="#formDepositModal" data-backdrop="false">
                                        Attention: Your {{ $page->title_h1 }} Method account is activated but your {{ $page->title_h1 }}
                                        balance is running low, CLICK HERE to deposit.
                                    </p>
                                </div>
                                <div id="spotfn-message" class="alert alert-danger sfnhide" style="display: none;">
                                    <a href="javascript:;" data-toggle="modal" data-target="#spotfnModal" data-backdrop="false">
                                        Attention: Spot FN account setup is still incomplete, please ClICK HERE to finalize.</a>
                                </div>


                                <!-- AUTO TRADING PANEL -->
                                <div class="widget">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 text-align-center">
                                            <h5 class="subsectionheader-stat">1: Deposit Into Your Account:</h5>
                                            <a href="javascript:;" id="depositBtn" class="center glower huge mbb deposit-btn">
                                                <!-- /.visual -->
                                                <span class="text">Deposit Now at</span>
                                                <span class="broker-text">{{ $page->brand->name }}</span>
                                                <!-- /.details -->
                                            </a> <!-- /.dashboard-stat -->
                                            <p style="margin-top: 5px;" class="alert alert-danger low-alert">
                                                Your account balance is running low <br>
                                                <span>Click To Deposit Now. </span>
                                            </p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 text-align-center" id="activationStatus">
                                            <h5 class="subsectionheader-stat">2: Activate Auto Trading:</h5>
                                            <p>
                                            </p><div class="btn-group-md">
                                                <div class="wait-ref">
                                                    <i class="fa fa-refresh fa-spin"></i>
                                                </div>
                                                <div class="btn {{ $bot_settings['status'] == 'On' ? 'btn-success' : 'btn-default' }} startTrade">On<span style="display: none;"></span></div>
                                                <div class="btn {{ $bot_settings['status'] != 'On' ? 'btn-danger' : 'btn-default' }} stopTrade">Off<span></span></div>
                                            </div>
                                            <p></p>
                                            <p class="alert alert-success" style="display: none;">
                                                {{ $page->title_h1 }} Method searching for new winning trades...<i class="fa fa-cog fa-spin"></i>
                                            </p>
                                            <div style="display: none;">
                                                <p class="alert alert-warning">
                                                    Click "ON" to activate your {{ $page->title_h1 }} Method Trading System.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 text-center" id="amountOfTrade">
                                            <h5 class="subsectionheader-stat">3: Select Amount of Trade:</h5>

                                            <div class="btn-group-md" style="cursor: pointer;">
                                                <?php
                                                if(!isset($bot_settings['minAmount']) || $bot_settings['minAmount'] == 25 && $bot_settings['maxAmount'] == 50)
                                                    $btnClass = 'btn-success';
                                                else
                                                    $btnClass = 'btn-default';
                                                ?>
                                                <div class="btn {{$btnClass}}" data-amount="25-50" style="cursor: pointer;"><span>$</span> 25 - 50</div>
                                                <div class="btn {{ ($bot_settings['minAmount'] == 50 && $bot_settings['maxAmount'] == 100) ? 'btn-success' : 'btn-default'}}" data-amount="50-100" style="cursor: pointer;"><span>$</span> 50 - 100</div>
                                                <div class="btn {{ ($bot_settings['minAmount'] == 100 && $bot_settings['maxAmount'] == 150) ? 'btn-success' : 'btn-default'}}" data-amount="100-150" style="cursor: pointer;"><span>$</span> 100 - 150</div>
                                                <div class="btn {{ ($bot_settings['minAmount'] == 150) ? 'btn-success' : 'btn-default'}}" data-amount="150-1000" style="cursor: pointer;"><span>$</span> 150 +</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <!-- DATA TABLES -->
                                <div class="widget">

                                    <div class="clearfix"></div>
                                    <div class="row">

                                        <div class="text-center">
                                            <div class="subsectionheader text-capitalize" id="runningPositionsHeader">@ln({{ $page->title_h1 }} Method Open Trades) <i class="getLoading fa fa-refresh fa-spin"></i></div>

                                            <table id="runningPositionsTable" class="table table-striped table-bordered shadowed table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Asset</th>
                                                    <th>Position</th>
                                                    <th>Amount</th>
                                                    <th class="hidden-mobile">Entry Rate</th>
                                                    <th class="hidden-mobile">Current Rate</th>
                                                    <th>Expiration Date</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <!-- rivets: each-position -->
                                                <tr class="odd openTrades"><td valign="top" colspan="9" class="dataTables_empty">No data available in table</td></tr>
                                                </tbody>
                                            </table>{{--<p class="alert alert-warning table_warn_msg">There are no open positions</p>--}}
                                        </div>
                                        <div class="table-margin text-center">
                                            <div id="positionsHistoryTableTitle" class="subsectionheader text-capitalize">@ln({{ $page->title_h1 }} method trades history) <i class="getLoading fa fa-refresh fa-spin"></i></div>
                                            <div id="positionsHistoryTable_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="dt-top-row"></div><div class="dt-wrapper"><table id="positionsHistoryTable" class="table table-striped table-bordered shadowed table-hover dataTable" aria-describedby="positionsHistoryTable_info">
                                                        <thead>
                                                        <tr class="white" role="row"><th class="sorting" role="columnheader" tabindex="0" aria-controls="positionsHistoryTable" rowspan="1" colspan="1" aria-label="Asset: activate to sort column ascending" style="width: 117px;">Asset</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="positionsHistoryTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 160px;">Position</th><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Amount" style="width: 153px;">Amount</th><th class="hidden-mobile sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Entry Rate" style="width: 195px;">Entry Rate</th><th class="hidden-mobile sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Closing Rate" style="width: 236px;">Closing Rate</th><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Payout" style="width: 139px;">Payout</th><th class="hidden-mobile sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Profit" style="width: 113px;">Profit</th><th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="positionsHistoryTable" rowspan="1" colspan="1" aria-sort="descending" aria-label="Date: activate to sort column ascending" style="width: 98px;">Date</th><th class="hidden-mobile sorting" role="columnheader" tabindex="0" aria-controls="positionsHistoryTable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 131px;">Status</th></tr>
                                                        </thead>

                                                        <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd historyTrades"><td valign="top" colspan="9" class="dataTables_empty">No data available in table</td></tr></tbody></table>{{--<p class="alert alert-warning table_warn_msg">There is no history of positions</p>--}}</div><div class="dt-row dt-bottom-row"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6 text-right"><div class="dataTables_paginate paging_bootstrap"></div></div></div></div></div><form id="trader_param" method="post" action=""></form>
                                            <input id="maxpid" type="hidden" name="maxpid" value="">
                                            <input id="tid" type="hidden" name="tid" value="">
                                            <input id="currency" type="hidden" name="currency">

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- COPYRIGHTS --}}
    <footer id="footer">
            <span class="text-center" style="color:black;">
                    Copyright © {{ $page->title_h1 }} Method.
            </span>
    </footer>

    <script type="template/html" id="position-row">
        <tr class="position-row">
            <td class="name"></td>
            <td class="positionSection"><div class="position"></div></td>
            <td class="amount"></td>
            <td class="entryRate"></td>
            <td class="currentRate hide-history">
                <div class="asset" id="">
                    <span class="rate"></span>
                    <div class="change">
                    </div>
            </td>
            <td class="endRate hide-open"></td>
            <td class="payout hide-open"></td>
            <td class="profit hide-open"></td>
            <td class="endDate"></td>
            <td class="status"></td>
        </tr>
    </script>
    <style type="text/css">
        #runningPositionsTable .hide-open{
            display:none;
        }
        #positionsHistoryTable .hide-history{
            display:none;
        }
        label.error{ /*form validation*/
            color: #00273a;
            background: #f7f7f7;
        }
        .plus, .minus{
            display: none;
        }
        .up .plus{
            display: inline;
        }
        .down .minus{
            display: inline;
        }
    </style>

@endsection
