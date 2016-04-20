@section('head')
    {{--FONT AWSOME ADDON--}}
    <link rel="stylesheet" href="/css/panels/black/libs/font-awesome.min.css">

    {{--REQUEST THE CSS--}}
    <link rel="stylesheet" href="/css/panels/black/style-{{Request::local()->dir}}.css"/>

    @if(isMongoNotEmpty($page->background_panel))
        {{123}}
        <style>
            .bg-login {
                background: url(../../../img/panel/{{$page->background_panel}}-login.jpg) center center fixed;
            }
        </style>
    @endif
@append

@section('bottom-scripts')
    {!! $page->appendAsset(url('/js/jquery.validate.js')) !!}
    {{--VALIDATE SCRIPT FOR LOGIN--}}
    <script src="/js/panels/black/login-page/login.js"></script>
@append

@section('page-layout')



    <div class="login-wrapper">

        <div class="logo-wrapper">
            <a href="/login" class="logo logo-login">
                {{--LOGO DYNAMIC MANAGED IN THE PAGE MANAGEMNT--}}
                <img src="{{ $page->panel_logo }}" alt="logo-login" id="logo_login">
            </a>
        </div>


        <div class="login-title-wrapper">
            <h3 class="login-title" align="center"><i class="icon-lock"></i> @ln(Login)
            </h3>
        </div>

        <div class="login-form-wrapper col-md-4 col-md-offset-4 col-sm-12 col-xs-12">

            {{--form opening--}}
            {!! Form::open(['action'=>'OpenAccountController@login','class'=>'loginForm ajax-api']) !!}

            {{--CHECK IF THERES A FLASH MESSAGE (IF THERE IS --}}
                             @if(isMongoNotEmpty(\Session::get('flashMsg')))
                                 <div class="alert alert-danger" role="alert">
                                     @ln(Oh snap)! {{ \Session::get('flashMsg') }}
                                 </div>
                             @endif

            {{--USER NAME INPUT = EMAIL FIELD--}}
            <div class="form-group user-input">
                <label for="text" class="sr-only">@ln(email address):</label>
                <img src="/img/panel/black/login-account-ico.png" alt="" class="account-login-image">
                <input type="text" value="{{\Request::get('email')}}"
                       class="form-control" type="text" placeholder="user name"
                       required name="email">
            </div>

            {{--PASSWORD INPUT = PASSWORD FIELD--}}
            <div class="form-group pasword-input">
                <label for="pwd" class="sr-only">@ln(Password):</label>
                <img src="/img/panel/black/login-password-ico.png" alt="" class="password-login-image">
                <input name="password" value="{{\Request::get('password')}}"
                       class="form-control" type="password"
                       placeholder="password" required>
            </div>
            <div class="form-options">

                <button type="submit"
                        class="btn btn-success btn-lg text-center center-block btn-login">@ln(Login)</button>
                <a href="http://www.rboptions.com/ForgotPassword" class=" btn-lg bfloat forgotpass">@ln(Forgot Password)</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>




@endsection

