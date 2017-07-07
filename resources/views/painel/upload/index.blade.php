<div class="modal-header">
    <h1>Upload</h1>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <i class="fa fa-times-circle" aria-hidden="true"></i>
    </button>
</div>

<div class="modal-body">
    <div class='row'>
        <div class='col-md-12 text-center'>
            <h1>Imagens</h1>
        </div>
    
        <div class='col-md-12'>
            {!! Form::open(['route' => 'upload.upload']) !!}
                @include('painel.upload._form')
            {!! Form::close() !!}
        </div>


        {!! Form::input('hidden', 'image', null, ['id' => 'selectedImage']) !!}

        @foreach ($files as $file)
            <div class='col-md-3 margin-top'>
                <div class='upload-image'>
                    <img src='{{asset($file)}}' class='img-responsive'>
                </div>
                
                <div class='col-md-12 text-center margin-top-p'>
                    <a class='btn btn-default uploadSelectImage' data-name='{{asset($file)}}'>
                        Selecionar
                    </a>
                </div>
            </div>
        @endforeach

        <div class='col-md-3 margin-top'>
                <div class='upload-image'>
                    <img src='{{asset('img/template/painel/sem-imagem.jpg')}}' class='img-responsive'>
                </div>
                
                <div class='col-md-12 text-center margin-top-p'>
                    <a class='btn btn-default uploadSelectImage' data-name='{{asset('img/template/painel/sem-imagem.jpg')}}'>
                        Selecionar
                    </a>
                </div>
            </div>
    </div>
</div>

<script>
    $('.uploadSelectImage').click(function(){
        var name = $(this).attr('data-name');
        name = name.split('://painel.').join('://');
        $('#selectedImage').val(name);

        $('#uploadModal').modal('hide');
    });
</script>