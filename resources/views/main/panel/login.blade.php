@section('head')
    <link rel="stylesheet" href="/css/aussie/panel/style.css" />
@append

@section('page-layout')

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
                            @ln(Login) <i class="fa fa-chevron-right"></i>
                            {!! Form::open(['action'=>'OpenAccountController@login','class'=>'loginForm ajax-api']) !!}
                            <input name="email" class="form-control" type="text" placeholder="Username"/>
                            <input name="password" class="form-control" type="password" placeholder="Password"/>
                            <div class="form-options">
                                <a class="forgot" href="#">@ln(Forgot Password?)</a>
                                <button class="login">@ln(Login)</button>
                                {{--<button class="callToAction-btn login" type="submit"><span>@ln(Login)</span><div class="btn-border"><i class="fa fa-angle-double-right"></i></div></button>--}}
                            </div>
                            <div class="or">
                                <span>@ln(or)</span>
                                <button><i class="fa fa-fw fa-facebook"></i>@ln(Login with Facebook)</button>
                            </div>
                            <div class="signup">
                                <span>@ln(Dont Have An Account?)</span> <a class="signupnow" href="#">@ln(sign up now)</a>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

