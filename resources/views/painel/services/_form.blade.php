<div class='col-md-6'>
    <div class="input-group">
        <span class="input-group-addon" id="name">Nome</span>
        {!! Form::input('text', 'name', null, ['class' => 'form-control', 'aria-describedby' => 'name']) !!}
    </div>
</div>

<div class='col-md-6'>
    <div class="input-group">
        <span class="input-group-addon" id="icon">Ícone</span>
        {!! Form::input('text', 'icon', null, ['class' => 'form-control', 'aria-describedby' => 'icon']) !!}
    </div>
</div>

<div class='col-md-12 text-center margin-top'>
    {!! Form::button('<i class="fa fa-check" aria-hidden="true"></i> Salvar&nbsp;', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
</div>