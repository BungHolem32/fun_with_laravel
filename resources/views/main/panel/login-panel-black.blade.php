@section('head')
    <link rel="stylesheet" href="/css/panels/black/style-{{Request::local()->dir}}.css"/>
    {{--<link rel="stylesheet" href="/css/aussie/panel/custom.css" />--}}
    <link href='https://fonts.googleapis.com/css?family=Oswald:300,400,700|Open+Sans:400,700,300' rel='stylesheet'
          type='text/css'>
    {{--<style>--}}
    {{--.bg-login{--}}
    {{--background:url(../../../img/aussie/panel/{{$page->title_h1}}.jpg) center center fixed;--}}
    {{--}--}}
    {{--</style>--}}
@append

@section('bottom-scripts')
    {!! $page->appendAsset(url('/js/jquery.validate.js')) !!}
    <script>
        $(document).ready(function () {

            $('.loginForm').validate({
                submitHandler: function (form) {
                    var data = $('.loginForm').serialize();
                    $.ajax({
                        type: "POST",
                        url: "/ajaxLogin",
                        dataType: 'json',
                        data: data,
                        beforeSend: function () {
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

    {{--ALL PAGE WRAPPER--}}
    <div class="wrapper-login">

        {{--BRAND LOGO--}}
        <div class="wrapper-img-logo">
            <a href="/login" class="logo logo-login">
                <img src="{{ $page->panel_logo }}" alt="aussiemethod" id="logo_login">
            </a>
        </div>

        {{--WRAPPER OF THE LOGIN CONTENT--}}
        <div class="content-wrapper-login container"> <!-- /#bootstrap wrapper -->

            <!-- /#start of side-nav-bar -->
            <div class="row">

                <!-- /#end of side-nav-bar -->
                <div class="col-md-12 col-md-offset-0">

                    <div class="inner-first-content-wrapper-login wood-wrapper">

                        <div class="inner-second-content-inner">

                            <h3 class="form-title form-title-first" align="center"><i class="icon-lock"></i> @ln(Login)
                            </h3>
                            {!! Form::open(['action'=>'OpenAccountController@login','class'=>'loginForm ajax-api']) !!}

                            @if(!empty(\Session::get('flashMsg')))
                                <div class="alert alert-danger" role="alert">
                                    @ln(Oh snap)! {{ \Session::get('flashMsg') }}
                                </div>
                            @endif

                            <form role="form">
                                <div class="container">
                                    <div class="row">
                                        <div class="form center-block col-md-4 ">
                                        <div class="form-group">
                                            <label for="text" name="email" class="sr-only">Email address:</label>
                                            <input type="user-name" value="{{\Request::get('email')}}"
                                                   class="form-control" type="text" placeholder="user-name" required
                                                   placeholder="user-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd" class="sr-only">Password:</label>
                                            <input name="password" value="{{\Request::get('password')}}"
                                                   class="form-control" type="password" placeholder="Password" required>
                                        </div>

                                        <div class="form-options">
                                            <button type="submit"
                                                    class="btn btn-success btn-lg text-center center-block">@ln(Login)</button>
                                            <div class="btn btn-success btn-lg loading" style="display: none;"><i
                                                        class="fa fa-spinner fa-spin"></i></div>
                                            <a href="{{ $page->brand->forgotPassLink }}"
                                               class=" btn-lg pull-right forgotpass">@ln(Forgot Password)</a>
                                            {{--<button class="callToAction-btn login" type="submit"><span>@ln(Login)</span><div class="btn-border"><i class="fa fa-angle-double-right"></i></div></button>--}}
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

