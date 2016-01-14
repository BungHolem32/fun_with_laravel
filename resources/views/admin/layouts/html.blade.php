<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts._head')
</head>
<body class="{{Request::local()->dir == '1' ? 'rtl' : 'ltr'}}"
      data-dir="{{Request::local()->dir == '1' ? 'rtl' : 'ltr'}}">
<div id="wrapper">

    <!-- Sidebar -->
    @include('admin.layouts._sideBar')

    <!-- Page Content -->
    @include('admin.layouts._body')

</div>

<!-- Scripts -->
@include('admin.layouts._scripts')
@include('admin.partials._flashMsg')
</body>
</html>
