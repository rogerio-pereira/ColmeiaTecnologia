$(document).ready(function() { 
    $('#uploadModal').on('hide.bs.modal', function (e) {
        var name = $('#selectedImage').val();

        if(name != '')
            name = name.split('://painel.').join('://');
        else
            name = "http://painel.colmeiatecnologia/img/template/painel/sem-imagem.jpg";

        $('#image-uploaded').attr('src', name);
        $('#image').val(name);
    });
});