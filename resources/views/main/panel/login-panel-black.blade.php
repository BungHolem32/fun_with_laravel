@section('head')
    {{--FONT AWSOME ADDON--}}
    <link rel="stylesheet" href="/css/panels/black/libs/font-awesome.min.css">

    {{--REQUEST THE CSS--}}
    <link rel="stylesheet" href="/css/panels/black/style-{{Request::local()->dir}}.css"/>

        <style>
            @if(isMongoNotEmpty($page->background_panel))
            .bg-login {
                background: url(../../../img/aussie/panel/{{$page->background_panel}}.jpg) center center fixed;
            }
            @endif
        </style>
@append

@section('bottom-scripts')
    {!! $page->appendAsset(url('/js/jquery.validate.js')) !!}
    {{--VALIDATE SCRIPT FOR LOGIN--}}
    <script src="/js/panels/black/login-page/login.js"></script>
@append

@section('page-layout')

    {{--ALL PAGE WRAPPER--}}
    <div class="wrapper-login">

        {{--BRAND LOGO--}}
        <div class="wrapper-img-logo">
            <a href="/login" class="logo logo-login">

                {{--LOGO DYNAMIC MANAGED IN THE PAGE MANAGEMNT--}}
                <img src="{{ $page->panel_logo }}" alt="aussiemethod" id="logo_login">
            </a>
        </div>

        {{--WRAPPER OF THE LOGIN CONTENT--}}
        <div class="content-wrapper-login container"> <!-- /#bootstrap wrapper -->

            <div class="row">

                <div class="col-md-12 col-md-offset-0">

                    {{--FIRST INNER CONTENT WRAPPER--}}
                    <div class="inner-first-content-wrapper-login wood-wrapper">

                        {{--SECOND CONTENT WRAPPER--}}
                        <div class="inner-second-content-inner title-wrapper">

                            {{--LOGIN TITLE--}}
                            <h3 class="form-title form-title-first" align="center"><i class="icon-lock"></i> @ln(Login)
                            </h3>


                            {!! Form::open(['action'=>'OpenAccountController@login','class'=>'loginForm ajax-api']) !!}

                            {{--CHECK IF THERES A FLASH MESSAGE (IF THERE IS --}}
                            @if(isMongoNotEmpty(\Session::get('flashMsg')))
                                <div class="alert alert-danger" role="alert">
                                    @ln(Oh snap)! {{ \Session::get('flashMsg') }}
                                </div>
                            @endif

                            {{--CONTAINER FOR THE FORM--}}
                            <div class="container">

                                <div class="row">

                                    {{--FORM LOGIN--}}
                                    <div class="form login-form center-block col-md-4 ">

                                        {{--USER NAME INPUT--}}
                                        <div class="form-group">
                                            <label for="text" class="sr-only">Email address:</label>
                                            <i class="fa fa-user"></i>
                                            <input type="text" value="{{\Request::get('email')}}"
                                                   class="form-control" type="text" placeholder="user name"
                                                   required name="email">
                                        </div>

                                        {{--PASSWORD INPUT--}}
                                        <div class="form-group">
                                            <label for="pwd" class="sr-only">Password:</label>
                                            <i class="fa fa-lock"></i>
                                            <input name="password" value="{{\Request::get('password')}}"
                                                   class="form-control" type="password"
                                                   placeholder="password" required>
                                        </div>

                                        {{--SUBMIT && FORGOT PASSWORD --}}
                                        <div class="form-options">

                                            {{--BUTTON SUBMIT--}}
                                            <button type="submit"
                                                    class="btn btn-success btn-lg text-center center-block">@ln(Login)</button>

                                            {{-- LOADING DIV--}}
                                            <div class="btn btn-success btn-lg loading" style="display: none;"><i
                                                        class="fa fa-spinner fa-spin"></i></div>

                                            {{--FORGOT PASSWORD--}}
                                            <a href="{{ $page->brand->forgotPassLink }}"
                                               class=" btn-lg bfloat forgotpass">@ln(Forgot Password)</a>
                                        </div>
                                    </div>
                                </div>
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

