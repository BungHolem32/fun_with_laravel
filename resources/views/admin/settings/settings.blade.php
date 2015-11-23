@extends('admin.layouts.html')

@section('content')
    <h1>settings page</h1>
    <h2>CMS means Content Mengment System, just so you know.</h2>

    <div class="list-group">
        <a href="{{ route('languages') }}" class="list-group-item list-group-item-warning">Languages Table</a>
        <a href="{{ route('translations') }}" class="list-group-item list-group-item-warning">Translations Table</a>
        <a href="{{ action('Admin\UsersController@getIndex') }}" class="list-group-item list-group-item-warning">User management</a>
        <a href="{{ route('languages') }}" class="list-group-item list-group-item-warning">Redirect Table 301, 302</a>
    </div>
@endsection
