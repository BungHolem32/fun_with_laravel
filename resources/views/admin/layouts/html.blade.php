<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts._head')
</head>
<body>
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
