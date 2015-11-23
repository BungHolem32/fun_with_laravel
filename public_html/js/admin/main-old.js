/**
 * Some functions to run on ready.
 */
var refreshFlashMsg = function(){
    if($( ".flash-msg" ).length){
        setTimeout(function(){
            $( ".flash-msg").removeClass('slideInRight');
            $( ".flash-msg").addClass('fadeOutDown');
        }, 4000);
        $( ".flash-msg").addClass('slideInRight');
    }
};

var newFlashMsg = function(alert, msg){
    var icon = '';
    if(alert == 'danger')
        icon = '<i class="fa fa-fw fa-2x fa-exclamation-triangle"></i>';
    else if(alert == 'success')
        icon = '<i class="fa fa-fw fa-2x fa-check"></i>';

    var html = '<div class="flash-msg animated"><div class="alert alert-'+ alert +'">'+icon+' '+msg+'</div></div>';
    $('nav#topBar').append(html);
    refreshFlashMsg();

    console.log('new msg flash - runed');
};




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

    // change value change color script
    $.each($('input,select,textarea'), function(){
        $(this).prop('defVal',$(this).val());
        $(this).on('change', function(){
            //console.log('is ' + $(this).prop('defVal') + ' == ' + $(this).val());
            //console.log('is ' + $(this).val() + ' == ' + $(this).prop('defaultValue'));
            if($(this).prop('defVal') != $(this).val()){
                //console.log($(this));
                $(this).addClass('changed');
            }
            else
                $(this).removeClass('changed');
        });
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
    $('#saveRoutes').on('click', function(event){
        event.preventDefault();
        //$('#saveRoutes').closest('form').submit();
        var form = $('#saveRoutes').closest('form');
        var action = form.attr('action');
        var page_id = $(this).data("page_id");
        console.log(action+'/'+page_id);

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "post",
            dataType : "json",
            url: action + '/' + page_id, //resource
            data: form.serialize(),
            success: function(res) {
                newFlashMsg(res.alert, res.msg);
            },
            error: function(req){
                console.log(req);

            }
        });
    });

});
