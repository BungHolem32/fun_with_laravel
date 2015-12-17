@section('head')
    <link rel="stylesheet" href="/css/aussie/panel/style.css" />
    <link rel="stylesheet" href="/css/aussie/panel/custom.css" />
    <link href='https://fonts.googleapis.com/css?family=Oswald:300,400,700|Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
@append

@section('bottom-scripts')
    {!! $page->appendAsset(url('/js/jquery.validate.js')) !!}
    <script>
        $(document).ready(function(){

            $('.loginForm').validate({
                submitHandler: function (form) {
                    var data = $('.loginForm').serialize();
                    $.ajax({
                        type: "POST",
                        url: "/ajaxLogin",
                        dataType: 'json',
                        data: data,
                        beforeSend: function(){
                            $('.login_btns').hide();
                            $('.loading').show();
                        },
                        success: function (res) {
                            if (res.err === 0) {
                                window.location.reload();
                            }
                            else {
                                alert(res.errs.error);
                                $('.loading').hide();
                                $('.login_btns').show();
                            }
                        },
                        error: function (err) {
                            console.log(err);
                        }
                    });
                }
            });

        });
    </script>
@append

@section('page-layout')
    <div class="bg-login">
        <div class="login-logo-w">
            <a href="/login" class="logo logo-login">
                <img src="/img/aussie/panel/logo.png" alt="aussiemethod" id="logo_login">
            </a>
        </div>
        {{-- WRAPPER --}}
        <div id="wrapper">
            <h1 id="site-logo">
                <a href="/"></a>
            </h1>
            <div class="all-wrapper"> <!-- /#bootstrap wrapper -->
                <!-- /#start of side-nav-bar -->
                <div class="row">
                    <!-- /#end of side-nav-bar -->
                    <div class="col-md-12 col-md-offset-0">
                        <div class="content-wrapper wood-wrapper">
                            <div class="content-inner">
                                <h3 class="form-title form-title-first" align="center"><i class="icon-lock"></i> @ln(Login)</h3>
                                {!! Form::open(['action'=>'OpenAccountController@login','class'=>'loginForm ajax-api']) !!}
                                <input name="email" class="form-control" type="text" placeholder="Username" required/>
                                <input name="password" class="form-control" type="password" placeholder="Password" required/>
                                <div class="form-options">
                                    <input type="submit" class="btn btn-success btn-lg login_btns" value="@ln(Login)">
                                    <div class="btn btn-success btn-lg loading" style="display: none;"><i class="fa fa-spinner fa-spin"></i></div>
                                    <a href="/sendPassForm" class=" btn-lg bfloat forgotpass">@ln(Forgot Password?)</a>
                                    {{--<button class="callToAction-btn login" type="submit"><span>@ln(Login)</span><div class="btn-border"><i class="fa fa-angle-double-right"></i></div></button>--}}
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

