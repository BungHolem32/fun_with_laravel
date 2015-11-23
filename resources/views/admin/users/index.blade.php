@extends('admin.layouts.html')

@section('content')
    <h1><i class="fa fa-users"></i> Users</h1>

    <div class="row">
        <div class="col-lg-12">
            <ul class="pagesList">
                @foreach(\App\User::all() as $user)
                    <li>
                        <a href="{{ action('Admin\UsersController@getDelete') }}/{{ $user->id }}" class="confirm" onclick="return confirm('Are you sure?')">
                            <i class="fa fa-trash"></i></a>
                        <a href="{{ action('Admin\UsersController@getEdit') }}/{{ $user->id }}"><i class="fa fa-pencil"></i></a>
                        <a class="link" href="/admin/EN/5">
                            {{ $user->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <a href="/admin/users/register"><i class="fa fa-user-plus"></i> Add New User</a>
@endsection
