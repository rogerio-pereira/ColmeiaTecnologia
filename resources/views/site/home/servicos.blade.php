<div class='container'>
    <a name='servicos'></a>
    <h1 class='text-center '>
        Serviços
    </h1>

    <div class='row'>
        @foreach ($services as $service)
            <div class='col-md-4 col-sm-6 text-center containerServices' data-scroll-reveal='enter left move 20px'>
                {!! $service->icon !!}
                <h3>{{$service->name}}</h3>
            </div>
        @endforeach
    </div>
</div>