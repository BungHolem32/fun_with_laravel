@section('head')

    <style>
        .popupWrapper {
            position   : absolute;
            z-index    : 100000;
            background : url('/img/popup/Popup.png') no-repeat top center;
            height     : 490px;
            top        : 20%;
            left       : 0;
            right      : 0;
            display    : none;
        }

        .popupWrapper .form-group {
            position : absolute;
            bottom   : 123px;
            left     : 0;
            right    : 5%;
            margin   : 0 auto;
            width    : 24.6%;
        }

        .popupWrapper .form-control {
            display       : block;
            width         : 100%;
            height        : 52px;
            padding       : 6px 12px;
            font-size     : 25px;
            line-height   : 1.42857143;
            color         : #555555;
            background    : #eaeaea none;
            border        : #ccc;
            border-radius : 4px;
            box-shadow    : inset 0 1px 1px rgba(0, 0, 0, 0.075);
            transition    : border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            border        : none;
        }

        .popupWrapper .submit-wrapper {
            position : absolute;
            top      : 357px;
            left     : 0;
            right    : 139px;
            margin   : 0 auto;
            width    : 33%;
        }

        .submit-btn {
            background : transparent !important;
            border     : none !important;
            box-shadow : none !important;
        }

        .closeBtn {
            width    : 52px;
            height   : 48px;
            z-index  : 1000000;
            position : absolute;
            right    : 146px;
            cursor   : pointer;
        }

        .rectangle {
            position : absolute;
            height   : 59px;
            bottom   : 143px;
            left     : 322px;
            right    : 0;
            width    : 32.5%;
        }

        .overlay {
            width      : 100%;
            height     : 100%;
            background : black;
            position   : fixed;
            border     : 1px solid black;
            top        : 0;
            left       : 0;
            right      : 0;
            bottom     : 0;
            opacity    : 0.6;
            z-index    : 100000;
            display    : none;
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

            })({{$page->componentsEmailPopCom->firstTrigger * 1000}}, {{$page->componentsEmailPopCom->interval * 1000}});
        });
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

        <div class="rectangle"></div>

        <div class="form-group email">
            <input id="emailFieldPopUp" type="email" name="email"
                   placeholder="Verify email address"
                   required="required" class="form-control emailInputPopup"/>
        </div>

        <div class="submit-wrapper">
            <input type="submit" class="align-center col-md-12 col-sm-12 submit-btn form-control" value=""/>
        </div>
        {!! Form::close() !!}

    </div>
</div>
