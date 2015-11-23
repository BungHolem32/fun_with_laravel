@extends('admin.layouts.html')

@section('content')

    <?php
    if(isset($edit)){
        $title = 'Edit '.$edit->name;
        $action = action('Admin\UsersController@postEdit');
    } else{
        $title = 'Register new user';
        $action = action('Admin\UsersController@postRegister');
    }
    ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
                    {{ $title }}
                </div>
				<div class="panel-body">
                    @include('errors._errorBag')
					<form class="form-horizontal" role="form" method="POST" action="{{ $action }}">
                        @include('auth._registerForm')
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
