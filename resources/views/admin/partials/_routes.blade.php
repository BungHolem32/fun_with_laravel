@if($user->allowed('routes'))
    <div class="row">
        <h3><i class="fa fa-sitemap fa-fw"></i> Routes</h3>
        {{--{!! Form::open(['url' => '/admin/add-route']) !!}--}}
        <div id="saveRoutesForm">

            <div class="form-group col-lg-3">{!! Form::label('language', 'lang:') !!}</div>
            <div class="form-group col-lg-3">{!! Form::label('controller', 'Controller:') !!}</div>
            <div class="form-group col-lg-6">{!! Form::label('slug', 'Friendly url:') !!}</div>

            <div class="allPageRoutes">
                @foreach($page->routes()->get(['slug','lang_id','controller']) as $i => $route)
                    <div class="form-group route @if($route->lang_id == Request::local()->id) selected @endif" data-index="{{$i}}">
                        <div class="col-lg-3">{!! Form::select('language', App\Languages::getAll(), $route->lang_id, ['name'=>'route[lang_id][]', 'class'=>'form-control']) !!}</div>
                        <div class="col-lg-3">{!! Form::select('controller', $page->getControllers(), $route->controller, ['name'=>'route[controller][]', 'class'=>'form-control']) !!}</div>
                        <div class="col-lg-6">{!! Form::text('slug', $route->slug, ['name'=>'route[slug][]', 'class'=>'form-control']) !!}</div>
                    </div>
                @endforeach
            </div>

            <div class="form-group route">
                <div class="col-lg-10">
                    {!! Form::submit('Save Routes', ['id'=>'saveRoutes', 'class'=>'form-control', 'data-page_id'=>$page->id]) !!}
                </div>
                <div class="col-lg-2">
                    <button class="btn btn-primary form-control addRoute"><i class="fa fa-plus-square "></i></button>
                </div>
            </div>

        </div>
        {{--{!! Form::close() !!}--}}
    </div>
@endif