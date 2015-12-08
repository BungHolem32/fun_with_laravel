/**
 * Some functions to run on ready.
 */
$('input[type=checkbox]').each(function(i, el){
    var el = $(el);
    el.after('<input type="hidden" name="' + el.prop('name') + '" value="' + el.prop('value') + '" />').removeAttr('name');
    el.after('<i class="fa fa-'+ ((el.prop('value') == 1) ? 'check-' : '') +'square-o"></i>');
});
var refreshFlashMsg = function(){
    if($( ".flash-msg" ).length){
        setTimeout(function(){
            $( ".flash-msg").removeClass('slideInRight');
            $( ".flash-msg").addClass('fadeOutDown');
        }, 4000);
        $( ".flash-msg").addClass('slideInRight');
    }
};

var flashMsg = function(alert, msg, index){
    var icon = '';
    if(alert == 'danger')
        icon = '<i class="fa fa-fw fa-2x fa-exclamation-triangle"></i>';
    else if(alert == 'success')
        icon = '<i class="fa fa-fw fa-2x fa-check"></i>';

    var html = '<div class="flash-msg animated"><div class="alert alert-'+ alert +'">'+icon+' '+msg+'</div></div>';
    $('nav#topBar .msgWrapper').append(html);
    refreshFlashMsg();
    //console.log('new msg flash - runed');
};
var newFlashMsg = function(alert, msg){
    flashMsg(alert, msg, 0);
};
var newFlashMsgs = function(msgs){
    $('nav#topBar .msgWrapper').html('');
    if(msgs !== undefined && msgs.length > 0){
        $.each(msgs, function(i, m){
            flashMsg(m.alert, m.msg, i);
        });
    }

};

var fullSerialize = function(el) {
    var serialized = $(el).serialize();
    if (!serialized) // if not a form
        serialized = $(el).find('input[name],select[name],textarea[name]').serialize();
    return serialized;
};



$(window).on('refresh', function() {
    // change value change color script
    $.each($('input,select,textarea'), function () {
        $(this).removeClass('changed');
        $(this).prop('defVal', $(this).val());
        $(this).on('change', function () {
            if ($(this).prop('defVal') != $(this).val())
                $(this).addClass('changed');
            else
                $(this).removeClass('changed');
        });
    });


    $.each($('.multiple [data-num]'), function(i, e){
        var num = $(e).data('num');
        var name = $(e).data('name');
        $.each($(e).find('input, select, textarea'), function(j, el){
            var thisName = $(el).data('name');
            var newName = name +'['+num+']['+thisName+']';
            $(el).attr('name', newName);
        });
    });


});

$( document ).ready(function() {

    /**
     * Trigger events
     */
    refreshFlashMsg();

    // Menu Toggle Script
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    // save page fixed button
    $('.fa-floppy-o').on('click',function(){
        $('.btn.btn-primary').trigger('click');
        return false;
    });


    /**
     * Deleting a page !!!
     */
    $('.pageDelete').on('click', function(){
        if (confirm('Delete this page and ALL of its Children?')) {
            var page_id = $(this).data("page_id");
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "delete",
                dataType : "json",
                url: '/admin/delete-page/' + page_id, //resource
                success: function(res) {
                    if(res.status == 1)
                        window.location = '/admin/' + res.parent_id;
                    else
                        console.log(res.msg);
                },
                error: function(req){
                    console.log(req);
                }
            });
        }
    });


    /**
     * Adding Routes to a Page
     */
    $('.addRoute').on('click', function(event){
        event.preventDefault();
        var routeRow = $('.route.selected').html();
        $('.allPageRoutes').append('<div class="form-group route">'+routeRow+'</div>');
    });


    $('.addForm-group').on('click', function(){
        event.preventDefault();
        var newFormGroup = $(this).closest('.multiple').find('.repeat').last().clone();

        //console.log($(newFormGroup));
        newFormGroup.find('.innerRepeat').remove();

        var mongoGroup = parseInt(newFormGroup.data('mongogroup')) + 1;
        newFormGroup.attr('data-mongogroup',mongoGroup);
        var mongoName = newFormGroup.data('mongoname');

        $.each(newFormGroup.find('[name]'), function(i, element){
            var oldNameAttr = $(element).attr('name');
            var re = new RegExp("\\["+mongoName+"\\]\\[(.[0-9]?)\\]");
            var newNameAttr = oldNameAttr.replace(re, "["+mongoName+"]["+mongoGroup+"]");
            //var newNameAttr = oldNameAttr.replace(/\[rubriks\]\[(.[0-9]?)\]/, "["+mongoName+"]["+mongoGroup+"]");
            $(element).attr('name', newNameAttr);
        });

        newFormGroup.insertAfter($(this).closest('.multiple').find('.repeat').last());
        $(window).trigger('refresh');
    });

    $('#saveRoutes').on('click', function(event){
        event.preventDefault();
        //$('#saveRoutes').closest('form').submit();
        //var form = $('#saveRoutes').closest('form');
        //var action = form.attr('action');
        var form = $('#saveRoutesForm');
        var action = '/admin/add-route';
        var page_id = $(this).data("page_id");
        //console.log(action+'/'+page_id);

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "post",
            dataType : "json",
            url: action + '/' + page_id, //resource
            //data: form.fullSerialize(),
            data: fullSerialize('#saveRoutesForm'),
            success: function(res) {
                newFlashMsg(res.alert, res.msg);
                $.each(res.langAdded, function(index, langCode){
                    if(!$('.allLangs a').hasClass(langCode)){
                        $('.allLangs').append('<a href="/admin/'+langCode+'/'+page_id+'" class="'+langCode+' btn btn-default">'+langCode+'</a>');
                    }
                });
            },
            error: function(req){
                console.log(req);
            }
        });
    });


    $(function() {
        var pageList = [];
        $(".sortablePages").sortable({
            stop: function( ) {
                pageList = [];
                $.each($(this).find('li'), function(index, el){
                    tempId = $(el).data('id');
                    if(tempId !== undefined)
                        pageList[index] = tempId;
                });
                console.log(pageList);

                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: "POST",
                    dataType : "json",
                    url: "/admin/pages-order",
                    data: 'list='+pageList,
                    success: function(res) {
                        newFlashMsgs(res.msgs);
                        $(window).trigger('refresh');
                    },
                    error: function(req){
                        console.log(req);
                    }
                });
            }
        });
    });

    $(function() {
        var pageList = [];
        $(".sortableMongo").sortable({
            stop: function( ) {
                pageList = [];
                $.each($(this).find('tr'), function(index, el){
                    tempId = $(el).data('id');
                    if(tempId !== undefined)
                        pageList[index] = tempId;
                });
                console.log(pageList);

                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: "POST",
                    dataType : "json",
                    url: "/admin/mongo-order",
                    data: 'list='+pageList,
                    success: function(res) {
                        newFlashMsgs(res.msgs);
                        $(window).trigger('refresh');
                    },
                    error: function(req){
                        console.log(req);
                    }
                });
            }
        });
    });


    $(function() {

        $('.del-mongo').on('click', function(event){
            event.preventDefault();
            var mongo = $(this).closest('.mongo');
            var mongo_id = mongo.data('id');
            //console.log(mongo_id);
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                dataType : "json",
                url: "/admin/mongo-delete",
                data: 'mongo_id='+mongo_id,
                success: function(res) {
                    newFlashMsgs(res.msgs);
                    mongo.remove();
                    //$(window).trigger('refresh');
                },
                error: function(req){
                    console.log(req);
                }
            });
        });

    });


    // ** Ajax Search ** //
    $('.searchPage').keyup(function(key){
        console.log(key);
        if(key.keyCode == 27 || $(this).val().length == 0){
            $(this).val('');
            $('.searchResults').hide();
            $('.sideList').show();
        }
        else if ($(this).val().length > 3){
            console.log('do search');
            searchPages($(this).val(), function(pages){
                $('.sideList').hide();
                $('.searchResults').show();
                $('.searchResults').html(pages);
            });
        }
    });
    function searchPages(q, cb){
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "post",
            dataType : "json",
            url: '/admin/search-pages/' + q, //resource
            //data: form.serialize(),
            success: function(res) {
                //console.log(res.searchResult);
                cb(res.searchResult);
            },
            error: function(req){
                console.log(req);
            }
        });
    }


    $('.addNewRow').on('click', function(event){
        event.preventDefault();
        var multiple = $(this).closest('.multiple-mother').find('.multiple');
        var template = multiple.children('[data-name]').last().clone();
        var number   = parseInt(template.data('num')) + 1;
        template.attr('data-num', number);
        template.find('input').each(function() {$(this).attr('value', '');});
        multiple.append(template[0].outerHTML);
        $(window).trigger('refresh');
    });



    $('.form-group>i.fa').on('click', function(){
        if($(this).hasClass('fa-check-square-o'))
            $(this).attr('class','fa fa-square-o').next().val(0);
        else
            $(this).attr('class','fa fa-check-square-o').next().val(1);
    });

    $(window).trigger('refresh');
});

