@if(Session::has('flash_msg'))
    {{-- THIS IS EDITABLE IN main.js--}}
    <script>$( document ).ready(function() {newFlashMsg("{{ Session::get('flash_msg')[0] }}", "{{ Session::get('flash_msg')[1] }}");});</script>
    {{--<div class="flash-msg animated">
        <div class="alert alert-{{ Session::get('flash_msg')[0] }}">
            {{ Session::get('flash_msg')[1] }}
        </div>
    </div>--}}
@endif