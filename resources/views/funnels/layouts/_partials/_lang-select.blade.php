<?php
    $langCode = Request::local()->code;
    $languages = \App\Languages::getAllCode();
    $uri = Request::getRequestUri();
    $uri = substr($uri,3 );
?>
<li class="languages">
    <div class="selectedLang">
        <a href="#"><img src="/img/flags/{{ $langCode }}.png" alt=""/> <span>{{ $langCode }}</span> <i class="fa fa-caret-down"></i></a>
    </div>
    <div class="cover"></div>
    <ul class="selectLangs">
        @foreach($languages as $key => $lang)
            <li class="lang"><a href="/{{ $key }}{{ $uri }}"><img src="/img/flags/{{ $key }}.png" alt=""/> <span>{{ $lang }}</span></a></li>
        @endforeach
    </ul>
</li>
