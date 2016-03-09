$(document).ready(function(){
    $('.submit').on('click',function(){
        $('input#FirstName')[0].focus();
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

// select for hidden currency
    $('<div class="field"><div class="select"><select id="currency"><option value="USD">USD</option><option value="EUR">EUR</option><option value="GBP">GBP</option></select></div></div>').insertBefore('.fields .field:last-child');

    var setT = setInterval(function(){
        if($('form input[name=currency]').val() != '') {
            $('form select[id=currency]').val($('form input[name=currency]').val());
            clearInterval(setT);
        }
    },300);

    $('form select[id=currency]').on('change',function(){
        $('form input[name=currency]').val($('form select[id=currency]').find(":selected").text())
    });
});