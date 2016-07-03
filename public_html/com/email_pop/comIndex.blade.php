@section('head')

@append

@section('bottom-scripts')
    <script>
        $(document).ready(function() {
            (function(firstTimePop, Interval){
                var el = $('.componentsEmailPopCom');
                var openedOnExit = false;
                var showPopup = function(){el.show();};
                var hidePopup = function(){el.hide();};
                $(document).on('click', function(e){
                    if(!el.is(e.target) // if the target of the click isn't the container...
                        && el.has(e.target).length===0) { // ... nor a descendant of the container
                        hidePopup();
                    }
                }).mouseout(function(){
                    if(openedOnExit === false){
                        openedOnExit = true;
                        showPopup();
                    }
                });
                setTimeout(function(){
                    if(Interval != 0) { // if interval equals zero no interval
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
