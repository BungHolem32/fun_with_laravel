@if(isset($page))
    <?php
        if (get_class($page) == 'App\Page' && !isset($url)) {
            //$url = $page->getParent()->slug() .'/'. $page->slug();
            $url = $page->fullSlug();
        }
        else if (!isset($url)) {
            $url = '#';
        }

        if(isset($target))
            $target = 'target="'.$target.'"';
        else
            $target = '';

    ?>
    <a @if(isset($class))class="{{$class}}" @endif href="@include('funnels.layouts._partials._url',['url'=>$url])" {{$target}}>@if(isset($text)){!! $text !!}@else{{ $page->title_h1 }}@endif </a>
@endif