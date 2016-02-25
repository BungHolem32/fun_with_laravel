
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only capitalize">@ln(Toggle navigation)</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="capitalize btn btn-brand" href="{{ $page->openAccountLink }}">@ln(open account) &nbsp; <i class="fa fa-angle-double-right"></i></a>
</div>
<div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav capitalize">
        {{--class="active"--}}
        <li><a href="{{ $page->brandTradeLink }}">@ln(trade)</a></li>
        <li><a href="/contact-us">@ln(contact us)</a></li>
        <li><a href="/privacy">@ln(privacy policy)</a></li>
    </ul>
</div>
