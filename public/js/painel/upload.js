$(document).ready(function() { 
    $('#uploadModal').on('hide.bs.modal', function (e) {
        var name = $('#selectedImage').val();

        $('#image-uploaded').attr('src', name);
        $('#image').val(name);
    });
});