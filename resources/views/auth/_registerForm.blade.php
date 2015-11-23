<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    <label class="col-md-4 control-label">Name</label>
    <div class="col-md-6">
        {!! Form::text('name', @$edit->name, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">E-Mail Address</label>
    <div class="col-md-6">
        {!! Form::email('email', @$edit->email, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Password</label>
    <div class="col-md-6">
        {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Confirm Password</label>
    <div class="col-md-6">
        {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">User Group</label>
    <div class="col-md-6">
        {!! Form::select('group_id', App\RankedGroups::getList(), @$edit->group_id, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            Register
        </button>
    </div>
</div>