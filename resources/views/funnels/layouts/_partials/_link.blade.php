@if(isset($page))
    <?php
        if (get_class($page) == 'App\Page' && !isset($url)) {
            //$url = $page->getParent()->slug() .'/'. $page->slug();
            $url = $page->fullSlug();
        }
        else if (!isset($url)) {
            $url = '#';
        }
    ?>
    <a @if(isset($class))class="{{$class}}" @endif href="@include('funnels.layouts._partials._url',['url'=>$url])">
        @if(isset($text))
            {!! $text !!}
        @else
            {{ $page->title_h1 }}
        @endif
    </a>
@endif