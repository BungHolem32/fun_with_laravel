@extends('admin.edit-page')

@section('options')
    @include('admin.partials._pageOptions')
@endsection

@section('edit')

    <table class="table table-hover multiple-mother">
        <thead>
        <tr>
            <th>Field Type</th>
            <th>Field Name</th>
            <th>Field Placeholder</th>
        </tr>
        </thead>
        <tbody class="multiple sortableMongo">
        @forelse($page->membersFields->getChildren() as $i => $field)

            <tr class="mongo" data-id="{{ $field->id }}" data-num="{{ $i }}" data-name="mongo[membersFields]">
                <td>
                    <select data-name="fieldType" class="form-control">
                        @foreach($page->controller->getFieldsTypes() as $type)
                            <option @if($type == $field->fieldType) selected="selected" @endif value="{{$type}}">{{$type}}</option>
                        @endforeach
                    </select>
                </td>
                <td><input data-name="name" class="form-control" type="text" value="{{ $field->name }}"></td>
                <td><input data-name="placeholder" class="form-control" type="text" value="{{ $field->placeholder }}"></td>
                <td><button class="del-mongo">Delete</button></td>
            </tr>
        @empty
            <tr data-num="0" data-name="mongo[membersFields]">
                <td>
                    <select data-name="fieldType" class="form-control">
                        @foreach($page->controller->getFieldsTypes() as $type)
                            <option value="{{$type}}">{{$type}}</option>
                        @endforeach
                    </select>
                </td>
                <td><input data-name="name" class="form-control" type="text" value=""></td>
                <td><input data-name="placeholder" class="form-control" type="text" value=""></td>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
        <tr><td><button class="btn btn-primary addNewRow"><i class="fa fa-plus-square "></i></button></td></tr>
        </tfoot>
    </table>

@endsection


@section('editAside')
    <div class="row">
        <h3><i class="fa fa-check-square-o"></i> Switches</h3>
        <div class="form-group">
            {!! Form::checkbox('mongo[switches][locationFromIp]', $page['switches']['locationFromIp']) !!}
            {!! Form::label('locationFromIp', 'Get Location From IP') !!}
            <br>
            {!! Form::checkbox('mongo[switches][phoneLibCheck]', $page['switches']['phoneLibCheck']) !!}
            {!! Form::label('phoneLibCheck', 'phone Lib Check') !!}
        </div>
    </div>
@endsection