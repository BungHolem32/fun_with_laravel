@extends('admin.edit-page')

@section('options')
    @include('admin.partials._pageOptions')
@endsection

@section('edit')
    @include('funnels.layouts._partials._page-layout-selection')
    <div class="form-group">
        <h3><i class="fa fa-gg"></i> {!! Form::label('title_h1', 'Title:') !!}</h3>
        {!! Form::text('title_h1', $page['title_h1'], ['name'=>'mongo[title_h1]', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <h3><i class="fa fa-newspaper-o"></i> {!! Form::label('description', 'Description:') !!}</h3>
        {!! Form::text('description', $page['description'], ['name'=>'mongo[description]', 'class'=>'form-control']) !!}
    </div>

    {{--<div class="form-group">
        <h3><i class="fa fa-video-camera"></i> {!! Form::label('video', 'Video link:') !!}</h3>
        {!! Form::text('video', $page['video'], ['name'=>'mongo[video]', 'class'=>'form-control']) !!}
    </div>--}}

    <div class="form-group">
        <h3><i class="fa fa-link"></i> {!! Form::label('destinationSite', 'Destination Site:') !!}</h3>
        {!! Form::text('destinationSite', $page['destinationSite'], ['name'=>'mongo[destinationSite]', 'class'=>'form-control']) !!}
    </div>

    {{--<div class="form-group">
        <h3><i class="fa fa-code"></i> {!! Form::label('htmlHeader', 'Html Header:') !!}</h3>
        {!! Form::textarea('htmlHeader', $page['htmlHeader'], ['name'=>'mongo[htmlHeader]', 'class'=>'editor form-control']) !!}
    </div>
    <div class="form-group">
        <h3><i class="fa fa-code"></i> {!! Form::label('smallHeader', 'Below Header:') !!}</h3>
        {!! Form::textarea('smallHeader', $page['smallHeader'], ['name'=>'mongo[smallHeader]', 'class'=>'editor form-control']) !!}
    </div>--}}

    {{--<div class="form-group">
        {!! Form::label('body', 'Content:') !!}
        {!! Form::textarea('body', $page['body'], ['name'=>'mongo[body]', 'class'=>'editor form-control']) !!}
    </div>--}}

    @com('dropzone')
    <h3><i class="fa fa-flag"></i> Banners</h3>
    <div class="form-group">
        <ul action="/admin/dropzone" class="dropzone form-control" data-mongoname="banners">

            @foreach($page->banners->pics->getChildrenKeys() as $k => $v)
                <li class="documents_drop_file_thumb dz-image-preview">
                    <div>

                        <div class="documents_drop_file_thumb_image"><img src="/images/uploads/{{ $page->banners->pics->{$k}->pic }}" data-dz-thumbnail /></div>
                        <div class="documents_drop_file_thumb_progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                        {!! Form::hidden(null, $page->banners->pics->{$k}->pic, ['name'=>"mongo[banners][pics][{$k}][pic]", 'class'=>'form-control picurl', 'data-dz-pic'=>'']) !!}
                        {!! Form::text(null, $page->banners->pics->{$k}->link, ['name'=>"mongo[banners][pics][{$k}][link]", 'class'=>'form-control', 'data-dz-link'=>'', 'placeholder'=>'Link']) !!}
                        {!! Form::text(null, $page->banners->pics->{$k}->title, ['name'=>"mongo[banners][pics][{$k}][title]", 'class'=>'form-control', 'data-dz-title'=>'', 'placeholder'=>'Title']) !!}
                        {!! Form::text(null, $page->banners->pics->{$k}->alt, ['name'=>"mongo[banners][pics][{$k}][alt]", 'class'=>'form-control', 'data-dz-alt'=>'', 'placeholder'=>'Alt']) !!}
                        <div class="documents_drop_file_thumb_progress_status"><span data-dz-errormessage></span></div><div class="documents_drop_file_thumb_remove">
                            <a class="dz-remove" href="javascript:undefined;" data-dz-remove="" data-mongokey="{{$page->banners->pics->{$k}->id}}"><i class="fa fa-trash"></i></a>
                        </div>
                        <div class="dz-size" data-dz-size></div>
                    </div>
                </li>
            @endforeach
        </ul>
        <script type="template" class="dropzoneTemplate">
            <li class="documents_drop_file_thumb dz-image-preview innerRepeat ui-sortable-handle">
                <div>
                    <div class="documents_drop_file_thumb_image"><img src="" data-dz-thumbnail=""></div>
                    <div class="documents_drop_file_thumb_progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                    <input name="mongo[default][pics][0][pic]" class="form-control picurl" data-dz-pic="" type="hidden" >
                    <input name="mongo[default][pics][0][link]" class="form-control" data-dz-link="" type="text" placeholder="Link" value="">
                    <input name="mongo[default][pics][0][title]" class="form-control" data-dz-title="" type="text" placeholder="Title" value="">
                    <input name="mongo[default][pics][0][alt]" class="form-control" data-dz-alt="" type="text" placeholder="Alt" value="">
                    <div class="documents_drop_file_thumb_progress_status"><span data-dz-errormessage=""></span></div>
                    <div class="documents_drop_file_thumb_remove">
                        <a class="dz-remove" href="javascript:undefined;" data-dz-remove=""><i class="fa fa-trash"></i></a>
                    </div>
                    <div class="dz-size" data-dz-size=""></div>
                </div>
            </li>
        </script>
    </div>

    <h3><i class="fa fa-flag"></i> Banners Bottom</h3>
    <div class="form-group">
        <ul action="/admin/dropzone" class="dropzone form-control" data-mongoname="bannersBottom">

            @foreach($page->bannersBottom->pics->getChildrenKeys() as $k => $v)
                <li class="documents_drop_file_thumb dz-image-preview">
                    <div>
                        <div class="documents_drop_file_thumb_image"><img src="/images/uploads/{{ $page->bannersBottom->pics->{$k}->pic }}" data-dz-thumbnail /></div>
                        <div class="documents_drop_file_thumb_progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                        {!! Form::hidden(null, $page->bannersBottom->pics->{$k}->pic, ['name'=>"mongo[bannersBottom][pics][{$k}][pic]", 'class'=>'form-control picurl', 'data-dz-pic'=>'']) !!}
                        {!! Form::text(null, $page->bannersBottom->pics->{$k}->link, ['name'=>"mongo[bannersBottom][pics][{$k}][link]", 'class'=>'form-control', 'data-dz-link'=>'', 'placeholder'=>'Link']) !!}
                        {!! Form::text(null, $page->bannersBottom->pics->{$k}->title, ['name'=>"mongo[bannersBottom][pics][{$k}][title]", 'class'=>'form-control', 'data-dz-title'=>'', 'placeholder'=>'Title']) !!}
                        {!! Form::text(null, $page->bannersBottom->pics->{$k}->alt, ['name'=>"mongo[bannersBottom][pics][{$k}][alt]", 'class'=>'form-control', 'data-dz-alt'=>'', 'placeholder'=>'Alt']) !!}
                        <div class="documents_drop_file_thumb_progress_status"><span data-dz-errormessage></span></div><div class="documents_drop_file_thumb_remove">
                            <a class="dz-remove" href="javascript:undefined;" data-dz-remove="" data-mongokey="{{$page->bannersBottom->pics->{$k}->id}}"><i class="fa fa-trash"></i></a>
                        </div>
                        <div class="dz-size" data-dz-size></div>
                    </div>
                </li>
            @endforeach
        </ul>
        <script type="template" class="dropzoneTemplate">
            <li class="documents_drop_file_thumb dz-image-preview innerRepeat ui-sortable-handle">
                <div>
                    <div class="documents_drop_file_thumb_image"><img src="" data-dz-thumbnail=""></div>
                    <div class="documents_drop_file_thumb_progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                    <input name="mongo[default][pics][0][pic]" class="form-control picurl" data-dz-pic="" type="hidden" >
                    <input name="mongo[default][pics][0][link]" class="form-control" data-dz-link="" type="text" placeholder="Link" value="">
                    <input name="mongo[default][pics][0][title]" class="form-control" data-dz-title="" type="text" placeholder="Title" value="">
                    <input name="mongo[default][pics][0][alt]" class="form-control" data-dz-alt="" type="text" placeholder="Alt" value="">
                    <div class="documents_drop_file_thumb_progress_status"><span data-dz-errormessage=""></span></div>
                    <div class="documents_drop_file_thumb_remove">
                        <a class="dz-remove" href="javascript:undefined;" data-dz-remove=""><i class="fa fa-trash"></i></a>
                    </div>
                    <div class="dz-size" data-dz-size=""></div>
                </div>
            </li>
        </script>
    </div>


    <div class="form-group">
        <h3><i class="fa fa-info-circle"></i> {!! Form::label('article', 'Article:') !!}</h3><small></small>
        {!! Form::textarea('article', $page['article'], ['name'=>'mongo[article]', 'class'=>'editor form-control']) !!}
    </div>


    <div class="form-group">
        <h3><i class="fa fa-info-circle"></i> {!! Form::label('thankyoupage', 'Thank you page:') !!}</h3><small></small>
        {!! Form::textarea('thankyoupage', $page['thankyoupage'], ['name'=>'mongo[thankyoupage]', 'class'=>'editor form-control']) !!}
    </div>

    <div class="form-group">
        <h3><i class="fa fa-info-circle"></i> {!! Form::label('riskStatment', 'Risk Statment:') !!}</h3><small>pass rs=1 Param to display</small>
        {!! Form::textarea('riskStatment', $page['riskStatment'], ['name'=>'mongo[riskStatment]', 'class'=>'editor form-control']) !!}
    </div>

    <div class="form-group">
        <h3><i class="fa fa-bullhorn"></i> On Exit popup:</h3><small>epass=532 Param to disable</small>
        <br/>
        {!! Form::label('onExitPopupMsg', 'Message:') !!}
        {!! Form::textarea('onExitPopupMsg', $page['onExitPopup']['msg'], ['name'=>'mongo[onExitPopup][msg]', 'class'=>'editor form-control']) !!}

        {!! Form::label('onExitPopupLink', 'Link:') !!}
        {!! Form::text('onExitPopupLink', $page['onExitPopup']['link'], ['name'=>'mongo[onExitPopup][link]', 'class'=>'editor form-control']) !!}
    </div>

@endsection



@section('editAside')
    <div class="row">
        <h3><i class="fa fa-google"></i> Analytics & Scripts</h3>
        <div class="form-group">
            {!! Form::label('headScripts', 'before </head> Scripts:') !!}
            {!! Form::textarea('headScripts', $page['scripts']['headScripts'], ['name'=>'mongo[scripts][headScripts]', 'class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('afterBodyScripts', 'After <body> Scripts:') !!}
            {!! Form::textarea('afterBodyScripts', $page['scripts']['afterBodyScripts'], ['name'=>'mongo[scripts][afterBodyScripts]', 'class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('bodyEndScripts', 'before </body> Scripts:') !!}
            {!! Form::textarea('bodyEndScripts', $page['scripts']['bodyEndScripts'], ['name'=>'mongo[scripts][bodyEndScripts]', 'class'=>'form-control']) !!}
        </div>
    </div>
@endsection