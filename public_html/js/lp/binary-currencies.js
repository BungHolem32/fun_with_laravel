$(document).ready(function(){
   $('.select').on('mousedown',function(){
      $(this).addClass('focus');
   }).on('mouseup',function(){
       $(this).removeClass('focus');
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