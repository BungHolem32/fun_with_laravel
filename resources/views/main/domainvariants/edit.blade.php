@extends('admin.edit-page')

@section('options')
@include('admin.partials._pageOptions')
@endsection

@section('edit')
<h1>Domain Variants:</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Domain</th>
            <th>Page</th>
        </tr>
    </thead>
    <tbody>
        @foreach($page->getChildren() as $child)
            <tr>
                <td>{{ $child->domain }}</td>
                <td>@include('admin.partials._link', ['page'=>$child, 'class'=>'link'])</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection

