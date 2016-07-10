@section('head')

    <style>

        .componentsEmailPopCom {
            position: relative;
        }

        .componentsEmailPopCom .overlay {
            position : fixed;
            top: 0;
            left: 0;
            z-index: 100000;
            height: 100%;
            width: 100%;
            background: #000000;
            opacity: 0.6;
            border: 1px solid #000000;
            display: none;
        }
        .popupWrapper {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100000;
            display: none;

        }

        .popupWrapper .closeBtn {
            cursor: pointer;
        }

        .popupWrapper .form-control {
            margin:0 0 0  24%;
            color: #555555;
            background: #eaeaea none;
            /*box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);*/
            /*transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;*/
            box-shadow: none;
            transition: none;
            border: none;
            display: block;
        }
        .popupWrapper label.error {
            display: none !important;
        }

        .popupWrapper  .submit-btn.form-control {
            padding: 0;
            background: none;
            box-shadow: none;
            border: none;
            display: block;
        }

        @media (min-width : 890px) {

            .popupWrapper {
                height: 490px;
                width:882px;
                background: url('/img/popup/Popup.png') no-repeat top center;
            }
            .popupWrapper .closeBtn {
                height: 40px;
                width: 40px;
                margin: 1px 0 0 820px;
            }

            .popupWrapper .form-group {
                height: 59px;
                width: 377px;
                margin: 248px 0 10px 19.4%;
            }


            .popupWrapper .form-control {
                height: 52px;
                width: 76%;
                padding: 6px 12px 5px 0;
                font-size: 24px;
            }

            .popupWrapper  .submit-btn.form-control {
                height: 59px;
                width: 378px;
                margin-left: 19.4%;
            }

        }
        @media (min-width : 469px) and (max-width : 889px) {
            .popupWrapper {
                height: 853px;
                background: url('/img/popup/Mobile-Popup.png') no-repeat top center;
                background-size: 90%;
            }
            .popupWrapper .closeBtn {
                width: 9%;
                height: 6%;
                margin : 1% 3% 57% 88%;
            }
            .popupWrapper .form-group {
                height: 12%;
                width: 88.5%;
                margin: 64.5% 0 0 6%;

            }

            .popupWrapper .form-control {
                height: 56%;
                width: 74%;
                padding: 0;
                font-size: 20px;
            }

            .popupWrapper  .submit-btn.form-control {
                width: 92%;
                height: 8%;
                margin: 3% 0 0 4%;
            }

        }
        @media (min-width : 554px) and (max-width :659px) {
            .popupWrapper .form-group {
                margin: 63.5% 0 0 6%;
                height: 8%;

            }

            .popupWrapper .form-control {
                height: 77%;
            }

        }
        @media (min-width : 469px) and (max-width :553px) {
            .popupWrapper .form-group {
                margin: 62.5% 0 0 6%;
                height:6%;
            }

            .popupWrapper .form-control {
                height: 82%;
            }
            .popupWrapper  .submit-btn.form-control {
                height: 11%;
            }
        }
        @media (min-width : 310px) and (max-width : 468px) {
            .popupWrapper {
                height: 853px;
                background: url('/img/popup/Mobile-Popup.png') no-repeat top center;
                background-size: 90%;
            }
            .popupWrapper .closeBtn {
                width: 9%;
                height: 4%;
                margin : 1% 3% 57% 80%;
            }
            .popupWrapper .form-group {
                height: 6%;
                width: 92%;
                margin: 62.5% 4% 0 4%;

            }

            .popupWrapper .form-control {
                height: 100%;
                width: 76%;
                padding: 0;
                font-size: inherit;
            }

            .popupWrapper  .submit-btn.form-control {
                width: 92%;
                height: 6%;
                margin: 3% 0 0 4%;
            }

        }





    </style>
@append

<div class="componentsEmailPopCom">
    {{--POPUP TAG--}}
    <div class="overlay"></div>
    <div class="popupWrapper container">
        {{--closeBtn Button--}}
        <div class="closeBtn"></div>

        {!! Form::open(['url' => url('postEmailForm'.'/'.session('local')->code), 'method'=>'post','align'=>'center']) !!}
        <input class="form-control" type="hidden" name="pageId" value="{{ $page->id }}">

        {{--<div class="rectangle"></div>--}}

        <div class="form-group email">
            <input id="emailFieldPopUp" type="email" name="email"
                   placeholder="Verify email address"
                   required="required" class="form-control emailInputPopup"/>
        </div>

        {{--<div class="submit-wrapper">--}}
            <input type="submit" class="align-center col-md-12 col-sm-12 submit-btn form-control" value=""/>
        {{--</div>--}}
        {!! Form::close() !!}

    </div>
</div>

@section('bottom-scripts')
    <script>
        $(document).ready(function(){
            (function(firstTimePop, Interval){
                var el = $('.popupWrapper');
                var openedOnExit = false;
                var showPopup = function(){
                    el.show();
                    $('.overlay').show();
                };
                var hidePopup = function(){
                    el.hide();
                    $('.overlay').hide();
                };
                $(document).on('click', function(e){
                    if(!el.is(e.target) // if the target of the click isn't the container...
                            &&el.has(e.target).length===0){ // ... nor a descendant of the container
                        hidePopup();
                    }
                }).mouseout(function(){
                    if(openedOnExit===false){
                        openedOnExit = true;
                        showPopup();
                    }
                });
                setTimeout(function(){
                    if(Interval!=0){ // if interval equals zero no interval
                        setInterval(showPopup, Interval);
                    }
                    showPopup();
                }, firstTimePop);

            })({{$page->componentsEmailPopCom->firstTrigger * 1000}}, {{$page->componentsEmailPopCom->interval * 1000}});
        });
    </script>
    <script>
        $('.submit-btn').on('click', function(){
            var val = $('.emailInputPopup').val();

                $('#firstPageSignUpMail').val(val);
                $('#submit-aussie').click();
                $('.popupWrapper,.overlay').hide();
        })

        $('.closeBtn').on('click', function(){
            $(this).parent().hide();
            $('.overlay').hide();
        })

    </script>

@append






{{--@section('head')--}}

    {{--<style>--}}
        {{--@media (min-width : 310px) and (max-width : 759px) {--}}
            {{--.popupWrapper {--}}
                {{--position        : absolute;--}}
                {{--z-index         : 100000;--}}
                {{--background      : url('/img/popup/Mobile-Popup.png') no-repeat top center;--}}
                {{--height          : 853px;--}}
                {{--top             : 20%;--}}
                {{--left            : 0;--}}
                {{--right           : 0;--}}
                {{--display         : none;--}}
                {{--background-size : 90%;--}}
            {{--}--}}
            {{--.popupWrapper .form-group {--}}
                {{--width       : 67.7%;--}}
                {{--margin-top  : 70.1%;--}}
                {{--margin-left : 27%;--}}
            {{--}--}}

            {{--.popupWrapper label.error {--}}
                {{--display : none !important;--}}
            {{--}--}}

            {{--.popupWrapper .form-control {--}}
                {{--display       : block;--}}
                {{--width         : 100%;--}}
                {{--height        : 98px;--}}
                {{--padding       : 6px 12px;--}}
                {{--font-size     : 48px;--}}
                {{--line-height   : 1.42857143;--}}
                {{--color         : #555555;--}}
                {{--background    : #eeeeee none;--}}
                {{--border        : #ccc;--}}
                {{--border-radius : 4px;--}}
                {{--box-shadow    : inset 0 1px 1px rgba(0, 0, 0, 0.075);--}}
                {{--transition    : border-color ease-in-out .15s, box-shadow ease-in-out .15s;--}}
                {{--border        : none;--}}
            {{--}--}}

            {{--.popupWrapper .submit-wrapper {--}}
                {{--position : absolute;--}}
                {{--left     : 0;--}}
                {{--height   : 45px;--}}
                {{--right    : 4px;--}}
                {{--margin   : 0 auto;--}}
                {{--width    : 95%;--}}
                {{--bottom   : 0;--}}
                {{--top      : 272px;--}}
            {{--}--}}

            {{--.submit-btn {--}}
                {{--background : transparent !important;--}}
                {{--border     : none !important;--}}
                {{--box-shadow : none !important;--}}
            {{--}--}}

            {{--.closeBtn {--}}
                {{--width    : 9%;--}}
                {{--height   : 9%;--}}
                {{--z-index  : 1000000;--}}
                {{--position : absolute;--}}
                {{--right    : 2.8%;--}}
                {{--cursor   : pointer;--}}
            {{--}--}}

            {{--.rectangle {--}}
                {{--height      : 11.6%;--}}
                {{--width       : 89%;--}}
                {{--margin-top  : 70%;--}}
                {{--margin-left : 5.6%;--}}
            {{--}--}}
        {{--}--}}

        {{--.componentsEmailPopCom {--}}
            {{--position : relative;--}}
        {{--}--}}

        {{--@media (min-width : 760px) {--}}
            {{--.popupWrapper {--}}
                {{--position   : absolute;--}}
                {{--z-index    : 100000;--}}
                {{--background : url('/img/popup/Mobile-Popup.png') no-repeat top center;--}}
                {{--height     : 853px;--}}
                {{--top        : 20%;--}}
                {{--left       : 0;--}}
                {{--right      : 0;--}}
                {{--display    : none;--}}
            {{--}--}}

            {{--.popupWrapper .form-group {--}}
                {{--position : absolute;--}}
                {{--bottom   : 250px;--}}
                {{--left     : 0;--}}
                {{--right    : -152px;--}}
                {{--margin   : 0 auto;--}}
                {{--width    : 480px;--}}
            {{--}--}}

            {{--.popupWrapper label.error {--}}
                {{--display : none !important;--}}
            {{--}--}}

            {{--.popupWrapper .form-control {--}}
                {{--display       : block;--}}
                {{--width         : 100%;--}}
                {{--height        : 93px;--}}
                {{--padding       : 6px 12px;--}}
                {{--font-size     : 40px;--}}
                {{--line-height   : 1.42857143;--}}
                {{--color         : #555555;--}}
                {{--background    : #eeeeee none;--}}
                {{--border        : #ccc;--}}
                {{--border-radius : 4px;--}}
                {{--box-shadow    : inset 0 1px 1px rgba(0, 0, 0, 0.075);--}}
                {{--transition    : border-color ease-in-out .15s, box-shadow ease-in-out .15s;--}}
                {{--border        : none;--}}
            {{--}--}}

            {{--.popupWrapper .submit-wrapper {--}}
                {{--position : absolute;--}}
                {{--top      : 633px;--}}
                {{--left     : 0;--}}
                {{--right    : 4px;--}}
                {{--margin   : 0 auto;--}}
                {{--width    : 86%;--}}
            {{--}--}}

            {{--.submit-btn {--}}
                {{--background : transparent !important;--}}
                {{--border     : none !important;--}}
                {{--box-shadow : none !important;--}}
            {{--}--}}

            {{--.closeBtn {--}}
                {{--width    : 52px;--}}
                {{--height   : 70px;--}}
                {{--z-index  : 1000000;--}}
                {{--position : absolute;--}}
                {{--right    : 42px;--}}
                {{--cursor   : pointer;--}}
            {{--}--}}

            {{--.rectangle {--}}
                {{--position : absolute;--}}
                {{--height   : 101px;--}}
                {{--bottom   : 244px;--}}
                {{--left     : 53px;--}}
                {{--right    : 0;--}}
                {{--width    : 85.9%;--}}
            {{--}--}}
        {{--}--}}

        {{--@media (min-width : 990px) {--}}
            {{--.popupWrapper {--}}
                {{--position   : absolute;--}}
                {{--z-index    : 100000;--}}
                {{--background : url('/img/popup/Popup.png') no-repeat top center;--}}
                {{--height     : 490px;--}}
                {{--top        : 20%;--}}
                {{--left       : 0;--}}
                {{--right      : 0;--}}
                {{--display    : none;--}}
            {{--}--}}

            {{--.popupWrapper .form-group {--}}
                {{--position : absolute;--}}
                {{--bottom   : 30.2%;--}}
                {{--left     : 0;--}}
                {{--right    : 55px;--}}
                {{--margin   : 0 auto;--}}
                {{--width    : 282px;--}}
            {{--}--}}

            {{--.popupWrapper label.error {--}}
                {{--display : none !important;--}}
            {{--}--}}

            {{--.popupWrapper .form-control {--}}
                {{--display       : block;--}}
                {{--width         : 100%;--}}
                {{--height        : 52px;--}}
                {{--padding       : 6px 12px;--}}
                {{--font-size     : 25px;--}}
                {{--line-height   : 1.42857143;--}}
                {{--color         : #555555;--}}
                {{--background    : #eaeaea none;--}}
                {{--border        : #ccc;--}}
                {{--border-radius : 4px;--}}
                {{--box-shadow    : inset 0 1px 1px rgba(0, 0, 0, 0.075);--}}
                {{--transition    : border-color ease-in-out .15s, box-shadow ease-in-out .15s;--}}
                {{--border        : none;--}}
            {{--}--}}

            {{--.popupWrapper .submit-wrapper {--}}
                {{--position : absolute;--}}
                {{--top      : 357px;--}}
                {{--left     : 0;--}}
                {{--right    : 139px;--}}
                {{--margin   : 0 auto;--}}
                {{--width    : 33%;--}}
            {{--}--}}

            {{--.submit-btn {--}}
                {{--background : transparent !important;--}}
                {{--border     : none !important;--}}
                {{--box-shadow : none !important;--}}
            {{--}--}}

            {{--.closeBtn {--}}
                {{--width    : 52px;--}}
                {{--height   : 48px;--}}
                {{--z-index  : 1000000;--}}
                {{--position : absolute;--}}
                {{--right    : 41px;--}}
                {{--cursor   : pointer;--}}
            {{--}--}}

            {{--.rectangle {--}}
                {{--position : absolute;--}}
                {{--height   : 59px;--}}
                {{--bottom   : 143px;--}}
                {{--left     : 224px;--}}
                {{--right    : 0;--}}
                {{--width    : 39%;--}}
            {{--}--}}

        {{--}--}}

        {{--@media (min-width : 1200px) {--}}
            {{--.popupWrapper {--}}
                {{--position   : absolute;--}}
                {{--z-index    : 100000;--}}
                {{--background : url('/img/popup/Popup.png') no-repeat top center;--}}
                {{--height     : 490px;--}}
                {{--top        : 20%;--}}
                {{--left       : 0;--}}
                {{--right      : 0;--}}
                {{--display    : none;--}}
            {{--}--}}

            {{--.popupWrapper .form-group {--}}
                {{--position : absolute;--}}
                {{--bottom   : 30.3%;--}}
                {{--left     : 0;--}}
                {{--right    : 55px;--}}
                {{--margin   : 0 auto;--}}
                {{--width    : 282px;--}}
            {{--}--}}

            {{--.popupWrapper label.error {--}}
                {{--display : none !important;--}}
            {{--}--}}

            {{--.popupWrapper .form-control {--}}
                {{--display       : block;--}}
                {{--width         : 100%;--}}
                {{--height        : 52px;--}}
                {{--padding       : 6px 12px;--}}
                {{--font-size     : 25px;--}}
                {{--line-height   : 1.42857143;--}}
                {{--color         : #555555;--}}
                {{--background    : #eaeaea none;--}}
                {{--border        : #ccc;--}}
                {{--border-radius : 4px;--}}
                {{--box-shadow    : inset 0 1px 1px rgba(0, 0, 0, 0.075);--}}
                {{--transition    : border-color ease-in-out .15s, box-shadow ease-in-out .15s;--}}
                {{--border        : none;--}}
            {{--}--}}

            {{--.popupWrapper .submit-wrapper {--}}
                {{--position : absolute;--}}
                {{--top      : 357px;--}}
                {{--left     : 0;--}}
                {{--right    : 139px;--}}
                {{--margin   : 0 auto;--}}
                {{--width    : 33%;--}}
            {{--}--}}

            {{--.submit-btn {--}}
                {{--background : transparent !important;--}}
                {{--border     : none !important;--}}
                {{--box-shadow : none !important;--}}
            {{--}--}}

            {{--.closeBtn {--}}
                {{--width    : 52px;--}}
                {{--height   : 48px;--}}
                {{--z-index  : 1000000;--}}
                {{--position : absolute;--}}
                {{--right    : 146px;--}}
                {{--cursor   : pointer;--}}
            {{--}--}}

            {{--.rectangle {--}}
                {{--position : absolute;--}}
                {{--height   : 59px;--}}
                {{--bottom   : 143px;--}}
                {{--left     : 322px;--}}
                {{--right    : 0;--}}
                {{--width    : 32.5%;--}}
            {{--}--}}

        {{--}--}}

        {{--.overlay {--}}
            {{--width      : 100%;--}}
            {{--height     : 100%;--}}
            {{--background : black;--}}
            {{--position   : fixed;--}}
            {{--border     : 1px solid black;--}}
            {{--top        : 0;--}}
            {{--left       : 0;--}}
            {{--right      : 0;--}}
            {{--bottom     : 0;--}}
            {{--opacity    : 0.6;--}}
            {{--z-index    : 100000;--}}
            {{--display    : none;--}}
        {{--}--}}
    {{--</style>--}}
{{--@append--}}

{{--@section('bottom-scripts')--}}
    {{--<script>--}}
        {{--$(document).ready(function(){--}}
            {{--(function(firstTimePop, Interval){--}}
                {{--var el = $('.popupWrapper');--}}
                {{--var openedOnExit = false;--}}
                {{--var showPopup = function(){--}}
                    {{--el.show();--}}
                    {{--$('.overlay').show();--}}
                {{--};--}}
                {{--var hidePopup = function(){--}}
                    {{--el.hide();--}}
                    {{--$('.overlay').hide();--}}
                {{--};--}}
                {{--$(document).on('click', function(e){--}}
                    {{--if(!el.is(e.target) // if the target of the click isn't the container...--}}
                            {{--&&el.has(e.target).length===0){ // ... nor a descendant of the container--}}
                        {{--hidePopup();--}}
                    {{--}--}}
                {{--}).mouseout(function(){--}}
                    {{--if(openedOnExit===false){--}}
                        {{--openedOnExit = true;--}}
                        {{--showPopup();--}}
                    {{--}--}}
                {{--});--}}
                {{--setTimeout(function(){--}}
                    {{--if(Interval!=0){ // if interval equals zero no interval--}}
                        {{--setInterval(showPopup, Interval);--}}
                    {{--}--}}
                    {{--showPopup();--}}
                {{--}, firstTimePop);--}}

            {{--})({{$page->componentsEmailPopCom->firstTrigger * 1000}}, {{$page->componentsEmailPopCom->interval * 1000}});--}}
        {{--});--}}
    {{--</script>--}}
    {{--<script>--}}
        {{--$('.submit-btn').on('click', function(){--}}
            {{--var val = $('.emailInputPopup').val();--}}

            {{--if(val!=''){--}}
                {{--$('.rectangle').css('border', 'none');--}}
                {{--$('#firstPageSignUpMail').val(val);--}}
                {{--$('#submit-aussie').click();--}}
                {{--$('.popupWrapper,.overlay').hide();--}}
            {{--}--}}
            {{--else{--}}
                {{--$('.rectangle').css('border', '1px solid red');--}}
            {{--}--}}
        {{--})--}}

        {{--$('.closeBtn').on('click', function(){--}}
            {{--$(this).parent().hide();--}}
            {{--$('.overlay').hide();--}}
        {{--})--}}

    {{--</script>--}}

{{--@append--}}


{{--<div class="componentsEmailPopCom">--}}
    {{--POPUP TAG--}}
    {{--<div class="overlay"></div>--}}
    {{--<div class="popupWrapper container">--}}
        {{--closeBtn Button--}}
        {{--<div class="closeBtn"></div>--}}

        {{--{!! Form::open(['url' => url('postEmailForm'.'/'.session('local')->code), 'method'=>'post','align'=>'center']) !!}--}}
        {{--<input class="form-control" type="hidden" name="pageId" value="{{ $page->id }}">--}}

        {{--<div class="rectangle"></div>--}}

        {{--<div class="form-group email">--}}
            {{--<input id="emailFieldPopUp" type="email" name="email"--}}
                   {{--placeholder="Verify email address"--}}
                   {{--required="required" class="form-control emailInputPopup"/>--}}
        {{--</div>--}}

        {{--<div class="submit-wrapper">--}}
            {{--<input type="submit" class="align-center col-md-12 col-sm-12 submit-btn form-control" value=""/>--}}
        {{--</div>--}}
        {{--{!! Form::close() !!}--}}

    {{--</div>--}}
{{--</div>--}}
