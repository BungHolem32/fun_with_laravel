@section('page-layout')
<div class="container pageWrap">
    <div class="row">
        <div class="col-md-3 col-sm-4 hidden-xs">
            <aside>

            </aside>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
            <article>
                @ln({{ $page->title_h1 }})
                @yield('content')
            </article>
        </div>
    </div>
</div>
@endsection
