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