$(document).ready(function(){
    print("pasa");
    $('.btn-delete-project').click(function(){
        $(this).prop('disabled',true);
        let projectImageId = $(this).data('projectImageId');
        $.post('delete-project-image', {id: projectImageId})
        .done(function(){
            $("#project-form__image-conainer-"+projectImageId).remove();
        })
        .fall(function(){
            $('.btn-delete-project').prop('disabled', false);
            $("#projecto-form__image-error-message-"+projectImageId).text('Failed to delete image');
        })
    });
});