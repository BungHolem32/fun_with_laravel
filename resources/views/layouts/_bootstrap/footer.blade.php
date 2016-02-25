<footer>
    <p class="pull-right"><a href="#"><i class="fa fa-arrow-up"></i> Back to top</a></p>
    <nav class="uppercase">
        <a href="{{ $page->openAccountLink }}">@ln(open account)</a> &middot;
        <a href="{{ $page->brandTradeLink }}">@ln(trade)</a> &middot;
        <a href="/contact-us">@ln(contact us)</a> &middot;
        <a href="/privacy">@ln(privacy policy)</a>
    </nav>
</footer>
<div class="risk padd-t padd-b">
    <p>{!! $page->risk !!}</p>
</div>