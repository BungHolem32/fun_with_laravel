@section('head')
    <style>
        .componentsEmailPopCom{
            display: none;
            position: fixed;
            z-index: 100;
            transform: translateX(-50%) translateY(-50%);
            top: 50%;
            left: 50%;

            width: 300px;
            height: 200px;
            background: darkgreen;
        }
    </style>
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
    {!! $page->componentsEmailPopCom->content !!}
</div>
