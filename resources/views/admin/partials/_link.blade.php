@if(isset($page))
    <a @if(isset($class))class="{{$class}}" @endif href="@include('admin.partials._url',['page_id'=>$page->id])@if(isset($edit))?edit @endif">
        @if(isset($text))
            {!! $text !!}
        @else
            {{ $page->title }}
        @endif
    </a>
@endif