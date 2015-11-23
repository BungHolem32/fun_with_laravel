@if(!empty($pages))
    @if (true === @$showBtns)
        @foreach($pages as $navPage)
            <li data-id="{{ $navPage->id }}">
                @include('admin.partials._link', ['page'=>$navPage, 'text'=>'<i class="fa fa-fw fa-pencil"></i>', 'edit'=>true])
                <a class="pageDelete" data-page_id="{{ $navPage->id }}"><i class="fa fa-fw fa-trash"></i></a>
                @include('admin.partials._link', ['page'=>$navPage, 'class'=>'link'])
            </li>
        @endforeach
    @else
        @foreach($pages as $navPage)
            <li class="sideList" data-id="{{ $navPage->id }}">
                @include('admin.partials._link', ['page'=>$navPage])
                @include('admin.partials._link', ['page'=>$navPage, 'text'=>'<i class="fa fa-fw fa-pencil"></i>', 'edit'=>true])
            </li>
        @endforeach
    @endif
@endif


{{--
@foreach(\App\Page::getRootPages() as $navPage)
    <li><a href="/admin/{{ Request::local()->code }}/{{ $navPage->slug() }}">{{ $navPage->title }}</a></li>
@endforeach--}}

