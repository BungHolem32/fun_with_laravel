function cl(x) {
    console.log(x);
}

function mainFormBinding() {
    $("#af-submit-image-1059861972").submit();
    setTimeout(function () {
        $('#email-modal-form-error').html($('#awf_field-78362880-error').html());
    },800);
}

function openTerms() {
    $('#term-modal').show();
}

function closeTerms() {
    $('#term-modal').hide();
}

$('body').on('change paste keyup','#email-modal-form',function () {
    $('#awf_field-78362880').val($(this).val());
});