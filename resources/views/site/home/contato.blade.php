<div class='container' data-scroll-reveal="enter left move 20px">
    <a name='contato'></a>
    <h1 class='text-center'>
        Contato
    </h1>

    <div class='row'>
        <div class='col-sm-6 col-sm-push-6'>
            <div class='row'>
                {!! Form::open(['route' => 'contato.send',  'class' => 'form']) !!}
                    {{--Nome--}}
                    {!! Form::input('text', 'name', null, ['placeholder' => 'Nome', 'class' => 'form-control', 'autofocus', 'required']) !!}

                    {{--Email--}}
                    {!! Form::input('email', 'email', null, ['placeholder' => 'E-mail', 'class' => 'form-control', 'required']) !!}

                    {{--Assunto--}}
                    {!! Form::input('text', 'subject', null, ['placeholder' => 'Assunto', 'class' => 'form-control', 'required']) !!}

                    {{--Telefone--}}
                    {!! Form::input('text', 'telephone', null, ['placeholder' => 'Telefone', 'class' => 'form-control telefone']) !!}

                    {{--Mensagem--}}
                    {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Mensagem', 'required']) !!}

                    {{--Submit--}}
                    <div class='text-center margin-bottom'>
                        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>

        <div class='col-sm-6 col-sm-pull-6'>
            <div class='col-md-12 responsive-iframe'>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d7409.777184292312!2d-46.570385219135424!3d-21.784572373161815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x94c9dd2ce18f1b13%3A0x48d036f80c8cbd41!2scolmeia+tecnologia+po%C3%A7os+de+caldas!3m2!1d-21.78382!2d-46.567164!5e0!3m2!1spt-BR!2sbr!4v1494865518477" 
                    width="600" 
                    height="450" 
                    frameborder="0" 
                    style="border:0" 
                    allowfullscreen
               ></iframe>
            </div>

            <div class='col-md-12 social-media text-center'>
                <a href='https://www.facebook.com/colmeiatecnologia/' alt='Facebook' title='Facebook' target='_blank'>
                    <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
                </a>

                {{--
                <a href='#' alt='' title=''>
                    <i class="fa fa-github fa-3x" aria-hidden="true"></i>
                </a>
                --}}

                {{--
                <a href='#' alt='' title=''>
                    <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                </a>

                <a href='#' alt='Skype' title='Skype'>
                    <i class="fa fa-skype fa-3x" aria-hidden="true"></i>
                </a>
                --}}

                <a href='tel:3537134137' alt='Telefone +55 35 3713 4137' title='Telefone +55 35 3713 4137'>
                    <i class="fa fa-phone fa-3x" aria-hidden="true"></i>
                </a>

                <a href='tel:35991090906' alt='WhatsApp +55 35 99109-0906' title='WhatsApp +55 35 99109-0906'>
                    <i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i>
                </a>

                {{--
                <a href='#' alt='' title=''>
                    <i class="fa fa-youtube-play fa-3x" aria-hidden="true"></i>
                </a>
                --}}
            </div>
        </div>
    </div>
</div>

@section('post-script')
    {!! Html::script('/js/jsMascaras.min.js') !!}
    {!! Html::script('/js/jsContato.min.js') !!}
@endsection