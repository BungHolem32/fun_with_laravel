@extends('admin.edit-page')

@section('options')
    @include('admin.partials._pageOptions')
@endsection

@section('edit')
    <div class="form-group">
        {!! Form::label('pic_logo', 'Logo:') !!}
        {!! Form::file('pic_logo', ['name'=>'files[pic_logo]', 'class'=>'form-control']) !!}
        @if($page->pic_logo) <img src="{{ $page->pic_logo }}" width='100%'> @endif
    </div>
    <div class="form-group">
        {!! Form::label('title_h1', 'H1 Title:') !!}
        {!! Form::text('title_h1', $page['title_h1'], ['name'=>'mongo[title_h1]', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('slogen', 'Slogen:') !!}
        {!! Form::textarea('slogen', $page['slogen'], ['name'=>'mongo[slogen]', 'class'=>'editor form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description', $page['description'], ['name'=>'mongo[description]', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', $page['body'], ['name'=>'mongo[body]', 'class'=>'editor form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('background', 'Background:') !!}
        {!! Form::file('background', ['name'=>'files[background]', 'class'=>'form-control']) !!}
        @if($page->background) <img src="{{ $page->background }}" width='100%'> @endif
    </div>

    <div class="row">
        <h3><i class="fa fa-link"></i> {!! Form::label('rubricks', 'Rubricks:') !!}</h3>
        <br>
        <div class="col-sm-4">
            <div class="form-group" style="background: #fff;">
            {!! Form::file('rub1_pic', ['name'=>"files[rub1_pic]", 'class'=>'form-control']) !!}
            @if($page['rub1_pic']) <img src="{{ $page['rub1_pic'] }}" width='100%'> @endif
            {!! Form::text('rub1_title', $page['rub1_title'], ['name'=>"mongo[rub1_title]", 'class'=>'form-control', 'placeholder'=>'Rubrick title']) !!}
            {!! Form::textarea('rub1_text', $page['rub1_text'], ['name'=>"mongo[rub1_text]", 'class'=>'form-control', 'placeholder'=>'Rubrick description']) !!}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group" style="background: #fff;">
                {!! Form::file('rub2_pic', ['name'=>"files[rub2_pic]", 'class'=>'form-control']) !!}
                @if($page['rub2_pic']) <img src="{{ $page['rub2_pic'] }}" width='100%'> @endif
                {!! Form::text('rub2_title', $page['rub2_title'], ['name'=>"mongo[rub2_title]", 'class'=>'form-control', 'placeholder'=>'Rubrick title']) !!}
                {!! Form::textarea('rub2_text', $page['rub2_text'], ['name'=>"mongo[rub2_text]", 'class'=>'form-control', 'placeholder'=>'Rubrick description']) !!}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group" style="background: #fff;">
                {!! Form::file('rub3_pic', ['name'=>"files[rub3_pic]", 'class'=>'form-control']) !!}
                @if($page['rub3_pic']) <img src="{{ $page['rub3_pic'] }}" width='100%'> @endif
                {!! Form::text('rub3_title', $page['rub3_title'], ['name'=>"mongo[rub3_title]", 'class'=>'form-control', 'placeholder'=>'Rubrick title']) !!}
                {!! Form::textarea('rub3_text', $page['rub3_text'], ['name'=>"mongo[rub3_text]", 'class'=>'form-control', 'placeholder'=>'Rubrick description']) !!}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group" style="background: #fff;">
                {!! Form::file('rub4_pic', ['name'=>"files[rub4_pic]", 'class'=>'form-control']) !!}
                @if($page['rub4_pic']) <img src="{{ $page['rub4_pic'] }}" width='100%'> @endif
                {!! Form::text('rub4_title', $page['rub4_title'], ['name'=>"mongo[rub4_title]", 'class'=>'form-control', 'placeholder'=>'Rubrick title']) !!}
                {!! Form::textarea('rub4_text', $page['rub4_text'], ['name'=>"mongo[rub4_text]", 'class'=>'form-control', 'placeholder'=>'Rubrick description']) !!}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group" style="background: #fff;">
                {!! Form::file('rub5_pic', ['name'=>"files[rub5_pic]", 'class'=>'form-control']) !!}
                @if($page['rub5_pic']) <img src="{{ $page['rub5_pic'] }}" width='100%'> @endif
                {!! Form::text('rub5_title', $page['rub5_title'], ['name'=>"mongo[rub5_title]", 'class'=>'form-control', 'placeholder'=>'Rubrick title']) !!}
                {!! Form::textarea('rub5_text', $page['rub5_text'], ['name'=>"mongo[rub5_text]", 'class'=>'form-control', 'placeholder'=>'Rubrick description']) !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('openAccountLink', 'Open Account Link:') !!}
        {!! Form::text('openAccountLink', $page['openAccountLink'], ['name'=>'mongo[openAccountLink]', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('brandTradeLink', 'Brand Trade Link:') !!}
        {!! Form::text('brandTradeLink', $page['brandTradeLink'], ['name'=>'mongo[brandTradeLink]', 'class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('risk', 'Risk Statement:') !!}
        {!! Form::textarea('risk', $page['risk'], ['name'=>'mongo[risk]', 'class'=>'editor form-control']) !!}
    </div>
@endsection