<div id="page-content-wrapper">
    <nav id="topBar">
        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
        @yield('options')
        <div class="msgWrapper"></div>
    </nav>

    <div class="container-fluid">
        @yield('content')
    </div>
</div>