<div id="sidebar-wrapper">
    <ul class="sidebar-nav sortablePages ">
        <li class="sidebar-brand">
            <a href="/admin">
                RB OPTIONS
            </a>
        </li>
        <li class="nav-circle-btns">
            <div class="col-lg-4">
                <a href="/admin/">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-sitemap fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="{{ route('settings') }}">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-cog fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="{{ route('newPage', ['parent_id'=>null]) }}">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
            </div>
        </li>
        <li class="search">
            <div class="col-lg-12">
                <input class="searchPage form-control" type="text" placeholder="Search..."/>
            </div>
            <ul class="searchResults">

            </ul>
        </li>
        @include('admin.partials._pagesNav', ['pages'=>App\Page::getRootPages()])
    </ul>

    <ul class="sideBar-footer">
        <li>
            <a href="{{ url('/auth/logout') }}" title="Logout"><i class="fa fa-sign-out"></i></a>
        </li>
        <li class="time">
            Logged as {{ $user->name }}<br/>
            {{ \Carbon\Carbon::now() }} GMT
        </li>
    </ul>
</div>