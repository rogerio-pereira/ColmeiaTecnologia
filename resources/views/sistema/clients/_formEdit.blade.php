<div class='col-md-6'>
    {!! Form::label('user[name]', 'Nome') !!}
    {!! Form::input('text', 'user[name]', $client->name, ['class' => 'form-control', 'id' => 'name']) !!}
</div>

<div class='col-md-6'>
    {!! Form::label('user[email]', 'E-mail') !!}
    {!! Form::input('email', 'user[email]', $client->email, ['class' => 'form-control', 'id' => 'email']) !!}
</div>

<div class='col-md-6'>
    {!! Form::label('user[password]', 'Senha') !!}
    {!! Form::input('password', 'user[password]', null, ['class' => 'form-control', 'id' => 'password']) !!}
</div>

<div class='col-md-6'>
    {!! Form::label('user[confirmPassword]', 'Confirmação') !!}
    {!! Form::input('password', 'user[confirmPassword]', null, ['class' => 'form-control', 'id' => 'confirmPassword']) !!}
</div>

<div class='col-md-12'>
    <hr>
</div>

<div class='col-md-6'>
    {!! Form::label('cpf_cnpj', 'CPF/CNPJ') !!}
    {!! Form::input('text', 'cpf_cnpj', $client->client->cpf_cnpj, ['class' => 'form-control cpf_cnpj', 'id' => 'cpf_cnpj']) !!}
</div>

<div class='col-md-6'>
    {!! Form::label('birthdate', 'Nascimento') !!}
    {!! Form::input('date', 'birthdate', $client->client->birthdate->format('d/m/Y'), ['class' => 'form-control date', 'id' => 'birthdate']) !!}
</div>

<div class='col-md-6'>
    {!! Form::label('phone', 'Telefone') !!}
    {!! Form::input('text', 'phone', $client->client->phone, ['class' => 'form-control phone', 'id' => 'phone']) !!}
</div>

<div class='col-md-6'>
    {!! Form::label('cellphone', 'Celular') !!}
    {!! Form::input('text', 'cellphone', $client->client->cellphone, ['class' => 'form-control phone', 'id' => 'cellphone']) !!}
</div>

<div class='col-md-12'>
    <hr>
</div>

<div class='col-md-6'>
    {!! Form::label('zipcode', 'CEP') !!}
    {!! Form::input('text', 'zipcode', $client->client->zipcode, ['class' => 'form-control zipcode', 'id' => 'zipcode']) !!}
</div>

<div class='col-md-6'>
    {!! Form::label('street', 'Rua') !!}
    {!! Form::input('text', 'street', $client->client->street, ['class' => 'form-control', 'id' => 'street', 'id' => 'street']) !!}
</div>

<div class='col-md-6'>
    {!! Form::label('number', 'Número') !!}
    {!! Form::input('number', 'number', $client->client->number, ['class' => 'form-control', 'id' => 'number', 'id' => 'number','min' => 1, 'step' => 1]) !!}
</div>

<div class='col-md-6'>
    {!! Form::label('complement', 'Complemento') !!}
    {!! Form::input('text', 'complement', $client->client->complement, ['class' => 'form-control', 'id' => 'complement']) !!}
</div>

<div class='col-md-6'>
    {!! Form::label('neighborhood', 'Bairro') !!}
    {!! Form::input('text', 'neighborhood', $client->client->neighborhood, ['class' => 'form-control', 'id' => 'neighborhood']) !!}
</div>

<div class='col-md-6'>
    {!! Form::label('city', 'Cidade') !!}
    {!! Form::input('text', 'city', $client->client->city, ['class' => 'form-control', 'id' => 'city']) !!}
</div>

<div class='col-md-6'>
    {!! Form::label('state', 'Estado') !!}
    {!! Form::select('state', $states, null, ['class' => 'form-control',  'id' => 'state']) !!}
</div>

<div class='col-md-12 text-center margin-top'>
    {!! Form::button('<i class="fa fa-check" aria-hidden="true"></i> Salvar&nbsp;', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
</div>

{!! Form::input('hidden', 'hidden[userId]', $client->id) !!}
{!! Form::input('hidden', 'hidden[clientId]', $client->client->id) !!}