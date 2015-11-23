
var list = [];
$(".sortable").sortable({
    stop: function( ) {
        $.each($(this).find('tr'), function(index, el){
            //console.log($(el).data('id'));
            list[index] = $(el).data('id');
        });
        console.log(list);
    }
});
$.each($('.multiple').children(), function(index, row){
    var id = $(row).data('id');
    $.each($(row).find('[name]'), function(i, element) {
        var oldNameAttr = $(element).attr('name');
        $(element).attr('name', 'u[' + id + ']' + '['+oldNameAttr+']');
    });
});
$('#saveAjax').on('click', function(event){
    event.preventDefault();

    var form = $(this).closest('form');
    var action = form.attr('action');

    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: "POST",
        dataType : "json",
        url: action,
        data: $('.changed').serialize()+'&list='+list,
        success: function(res) {
            newFlashMsgs(res.msgs);
            //list=[];
            $(window).trigger('refresh');
        },
        error: function(req){
            console.log(req);
        }
    });
});
if(addRowIndex === undefined)
    var addRowIndex = 0;
$('.addRow').on('click', function(){
    event.preventDefault();

    var addToClass = $(this).attr('addTo');
    var templateClass = $(this).attr('template');
    var template = $('.'+templateClass).html();

    template = template.replace(/name=\"(.+?)\"/g, 'name="n[' + addRowIndex + '][$1]');

    $('.'+addToClass).append(template);
    addRowIndex++;
    $(window).trigger('refresh');
});