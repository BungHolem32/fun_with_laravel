var changeNameAttrGroup = function(el, index){
    var fieldName = el.closest('.repeat').data('mongoname');
    var groupName = el.closest('.repeat')[0].dataset.mongogroup;
    $.each(el.find('[name]'), function(i, element){
        var oldNameAttr = $(element).attr('name');
        var newNameAttr = oldNameAttr.replace(/\[pics\]\[(.[0-9]?)\]/, "[pics]["+index+"]");
        newNameAttr = newNameAttr.replace("[default]", "["+fieldName+"]");
        newNameAttr = newNameAttr.replace("[group]", "["+groupName+"]");
        $(element).attr('name', newNameAttr);
    });
};
var changeNameAttr = function(el, index){
    var fieldName = el.closest('ul').data('mongoname');
    console.log(fieldName);
    $.each(el.find('[name]'), function(i, element){
        var oldNameAttr = $(element).attr('name');
        var newNameAttr = oldNameAttr.replace(/\[pics\]\[(.[0-9]?)\]/, "[pics]["+index+"]");
        newNameAttr = newNameAttr.replace("[default]", "["+fieldName+"]");
        $(element).attr('name', newNameAttr);
    });
};

var changeNameAttrAll = function(element){
    if($(this).parents('.multiple').length){
        $.each($(element).find('li'), function(index, li){
            changeNameAttrGroup($(li), index);
        });
    }
    else{
        $.each($(element).find('li'), function(index, li){
            changeNameAttr($(li), index);
        });
    }
};


Dropzone.autoDiscover = false;
$(window).on('refresh', function(){

    //$(".dropzone").dropzone({
    /*$.each(".dropzone", function(){

    });*/
    $(".dropzone").dropzone({
        clickable: true,
        draggable: true,
        paramName: "file",
        maxFilesize: 2, // MB
        previewTemplate: $('.dropzoneTemplate').html(),
        //autoProcessQueue : false,
        success: function(res){
            var response = JSON.parse(res.xhr.response);
            var files = this.files;
            $.each(files, function(index, file){
                var el = $(files[index].previewElement);
                if(file.name == response.oldName){
                    el.find('.form-control.picurl').val(response.filename);
                    //changeNameAttr(el, index);
                }
            });

            changeNameAttrAll($(this.element));
        }
    });

    $(function() {
        $(".dropzone").sortable({
            placeholder: "dz-image-preview",
            stop: function( ) {
                changeNameAttrAll(this);
            }
        });
    });

    $('.dz-remove').on("click", function() {
        var mongokey = $(this).data('mongokey');
        var li = $(this).closest('li');
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            method: "DELETE",
            url: "/admin/dropzone/"+mongokey,
            dataType: "JSON",
            success: function(res){
                console.log(res.err);
                if(res.err === 0){
                    li.remove();
                }
            }
        })
    });

});

