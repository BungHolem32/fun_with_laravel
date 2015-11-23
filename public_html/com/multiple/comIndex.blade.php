@foreach($pics->getChildrenKeys() as $k => $v)
    {{ $html }}
    {{ $pics->{$k}->pic }}
@endforeach


