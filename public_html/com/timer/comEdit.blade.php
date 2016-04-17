<h4>
    <i class="fa fa-clock-o" aria-hidden="true"></i>
    {!! Form::label('timerCom', 'Timer:') !!}
</h4>
{!! Form::text('timerCom_start', $page['timerCom_start'], ['name'=>'mongo[timerCom_start]', 'class'=>'direction form-control']) !!}

{!! Form::text('timerCom_interval', $page['timerCom_interval'], ['name'=>'mongo[timerCom_interval]', 'class'=>'direction form-control']) !!}
