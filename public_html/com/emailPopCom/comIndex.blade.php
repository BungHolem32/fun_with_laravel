@section('head')

    <style>

        .componentsEmailPopCom {
            position : relative;
        }

        .componentsEmailPopCom .overlay {
            position   : fixed;
            top        : 0;
            left       : 0;
            z-index    : 100000;
            height     : 100%;
            width      : 100%;
            background : #000000;
            opacity    : 0.6;
            border     : 1px solid #000000;
            display    : none;
        }

        .popupWrapper {
            position : fixed;
            top      : 0;
            left     : 0;
            right    : 0;
            z-index  : 100000;
            display  : none;
        }

        .popupWrapper .closeBtn {
            cursor : pointer;
        }

        .popupWrapper .form-control {
            margin     : 0 0 0 24%;
            color      : #555555;
            background : #eaeaea none;
            /*box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);*/
            /*transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;*/
            box-shadow : none;
            transition : none;
            border     : none;
            display    : block;
        }

        .popupWrapper label.error {
            display : none !important;
        }

        .popupWrapper .submit-btn.form-control {
            padding    : 0;
            background : none;
            box-shadow : none;
            border     : none;
            display    : block;
        }

        @media (min-width : 890px) {

            .popupWrapper {
                height     : 490px;
                width      : 882px;
                background : url('/img/popup/Popup.png') no-repeat top center;
            }

            .popupWrapper .closeBtn {
                height : 40px;
                width  : 40px;
                margin : 1px 0 0 820px;
            }

            .popupWrapper .form-group {
                height : 59px;
                width  : 377px;
                margin : 248px 0 10px 19.4%;
            }

            .popupWrapper .form-control {
                height    : 52px;
                width     : 76%;
                padding   : 6px 12px 5px 0;
                font-size : 24px;
            }

            .popupWrapper .submit-btn.form-control {
                height      : 59px;
                width       : 378px;
                margin-left : 19.4%;
            }

        }

        @media (min-width : 469px) and (max-width : 889px) {
            .popupWrapper {
                height          : 853px;
                background      : url('/img/popup/Mobile-Popup.png') no-repeat top center;
                background-size : 90%;
            }

            .popupWrapper .closeBtn {
                width  : 9%;
                height : 6%;
                margin : 1% 3% 57% 88%;
            }

            .popupWrapper .form-group {
                height : 12%;
                width  : 88.5%;
                margin : 64.5% 0 0 6%;
            }

            .popupWrapper .form-control {
                height    : 56%;
                width     : 74%;
                padding   : 0;
                font-size : 20px;
            }

            .popupWrapper .submit-btn.form-control {
                width  : 92%;
                height : 8%;
                margin : 3% 0 0 4%;
            }

        }

        @media (min-width : 554px) and (max-width : 659px) {
            .popupWrapper .form-group {
                margin : 63.5% 0 0 6%;
                height : 8%;
            }

            .popupWrapper .form-control {
                height : 77%;
            }

        }

        @media (min-width : 469px) and (max-width : 553px) {
            .popupWrapper .form-group {
                margin : 62.5% 0 0 6%;
                height : 6%;
            }

            .popupWrapper .form-control {
                height : 82%;
            }

            .popupWrapper .submit-btn.form-control {
                height : 11%;
            }
        }

        @media (min-width : 310px) and (max-width : 468px) {
            .popupWrapper {
                height          : 853px;
                background      : url('/img/popup/Mobile-Popup.png') no-repeat top center;
                background-size : 90%;
            }

            .popupWrapper .closeBtn {
                width  : 9%;
                height : 4%;
                margin : 1% 3% 57% 80%;
            }

            .popupWrapper .form-group {
                height : 6%;
                width  : 92%;
                margin : 62.5% 4% 0 4%;
            }

            .popupWrapper .form-control {
                height    : 100%;
                width     : 76%;
                padding   : 0;
                font-size : inherit;
            }

            .popupWrapper .submit-btn.form-control {
                width  : 92%;
                height : 6%;
                margin : 3% 0 0 4%;
            }

        }

    </style>

@append

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

            })({{$page->components->emailPopCom->firstTrigger * 1000}}, {{$page->components->emailPopCom->interval * 1000}});
        });

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
