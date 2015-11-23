var changeNameAttr = function(el, index){
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

var changeNameAttrAll = function(element){
    //console.log($(element).find('li'));
    $.each($(element).find('li'), function(index, li){
        //console.log(index);
        changeNameAttr($(li), index);
    });
};


Dropzone.autoDiscover = false;

$(window).on('refresh', function(){
    $(".dropzone").dropzone({
        clickable: true,
        draggable: true,
        paramName: "file",
        maxFilesize: 2, // MB
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
});

