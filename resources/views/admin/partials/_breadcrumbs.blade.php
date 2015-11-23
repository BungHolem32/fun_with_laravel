<i class="fa fa-home"></i>
@foreach($page->getBreadcrumbs() as $k => $ancestor)
    @if($k>0)<i class="fa fa-caret-right"></i>@endif @include('admin.partials._link', ['page'=>$ancestor])
@endforeach
<i class="fa fa-caret-right"></i> {{ $page->title }}