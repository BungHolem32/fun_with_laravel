<div class="form-group">
    <h3><i class="fa fa-filter"></i> {!! Form::label('funnelType', 'Chose Funnel Type:') !!}</h3>
    {!! Form::select('funnelType', $page->controller->getPageLayouts(),
                        $page['funnelType'],
                        ['name'=>'mongo[funnelType]',
                        'class'=>'form-control']) !!}
</div>