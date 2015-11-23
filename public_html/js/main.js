
/*$('.login').on('click', function(){
   $('div.loginForm').show();
});*/






$(window).scroll(function () {
    if($(window).scrollTop() > 100)
        $('header.navbar').addClass('minimal');
    else{
        $('header.navbar').removeClass('minimal');
    }
});


var clickOutReset = function(el){
    $(document).on('click', function (e) {
        var container = $(el);
        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0){ // ... nor a descendant of the container
            container.removeClass('active');
        }
    });
};

var ajaxForm = function(form){
    var method = $(form).attr('method');
    var url = $(form).attr('action');
    var data = $(form).serialize();

    $.ajax({
        type: method,
        url: url,
        data: data,
        dataType: 'json',
        success: function( res ) {
            if(res.redirect.length > 0 )
                window.location = res.redirect;
        }
    });

};

var validateForm = function(form){
    $(form).validate({
        highlight: function(element) {
            $(element).closest('.form-group').addClass('error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('error');
            $(element).closest('.form-group').addClass('valid');
        },
        submitHandler: function(form2) {
            ajaxForm(form2);
        }
    });
};

$(window).on('refresh', function() {
    // change value change color script
    $.each($('form.ajax-api'), function (i, form) {
        //var form = $(form);
        validateForm(form);
        /*var btn = $(form.find('[type=submit]'));
        btn.on('click', function(event){
            //event.preventDefault();
        });*/
    });

    $('.dropdown').on('click', function(){
        var parent = $(this).parent().parent();
        if(parent.hasClass('active'))
            parent.removeClass('active');
        else
            parent.addClass('active');
    });
    clickOutReset('.logged');


    $('input').on('click', function(){
        if($(this).is(":focus")){
            $(this).closest('form').addClass('active');
        }
    });
    clickOutReset('.loginForm');
});


$(document).ready(function(){

    $('.select .switch').on('click', function(){
        var parent = $(this).parent().parent();
        if(parent.hasClass('active'))
            parent.removeClass('active');
        else
            parent.addClass('active');
    });
    clickOutReset('.vert');

    $('.select li.option').on('click', function(){
        var parent = $(this).parent().parent();
        var lang = $(this).attr('lang');

        var phone = '';
        if ($(this).attr('phone') !== undefined && $(this).attr('phone') !== false)
            phone = '<a class="phone" href="tel:'+$(this).attr('phone')+'">'+$(this).attr('phone')+'</a>';

        var email = '';
        if ($(this).attr('email') !== undefined && $(this).attr('email') !== false)
            email = '<a href="mailto:'+$(this).attr('email')+'">'+$(this).attr('email')+'</a>';

        var img = '';
        if ($(this).find('img').length >0)
            img = $(this).find('img')[0].outerHTML;

        var skype = '';
        if ($(this).attr('skype') !== undefined && $(this).attr('skype') !== false)
            skype = '<br/><a href="skype:'+skype+'?call"><img src="/img/skype.png" /> Chat on Skype</a>';

        parent.find('.result').html('<div>' + lang + ':<br/>'+img+' ' + phone + email + skype + '</div>');
        parent.find('.result').show();
        parent.parent().parent().parent().addClass('active');
        parent.removeClass('active');
    });

    $('#systemClock').on('change', function(){
       console.log('asd');
    });

    $(window).trigger('refresh');
});
