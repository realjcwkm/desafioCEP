<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus locais</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <h1 class="text-center">
        @if(isset($locais)) Editar
        @else Cadastrar
        @endif
        local visitado - ibiJus
    </h1>

    <div class="col-6 m-auto">
        @if(isset($locais))
            <form name="formEdit" id="formEdit" method="post" action="{{url('local/$locais->id')}}">
            @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{url('local')}}">
        @endif
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome" value="{{$locais->nome ?? ''}}" required><br>
            <div class="input-group mb-4">
                <input class="form-control" type="text" name="cep" id="cep" placeholder="Cep" value="{{$locais->cep ?? ''}}" required>
                <div class="input-group-append ml-2">
                    <a href="">
                        <button class="btn btn-info">Buscar cep</button>
                    </a>
                </div>
            </div>
            <input class="form-control" type="text" name="logradouro" id="logradouro" placeholder="Logradouro" value="{{$locais->logradouro ?? ''}}" required><br>
            <input class="form-control" type="text" name="complemento" id="complemento" placeholder="Complemento" value="{{$locais->complemento ?? ''}}"><br>
            <input class="form-control" type="text" name="numero" id="numero" placeholder="Numero" value="{{$locais->numero ?? ''}}"><br>
            <input class="form-control" type="text" name="bairro" id="bairro" placeholder="Bairro" value="{{$locais->bairro ?? ''}}" required><br>
            <input class="form-control" type="text" name="uf" id="uf" placeholder="UF" value="{{$locais->uf ?? ''}}" required><br>
            <input class="form-control" type="text" name="cidade" id="cidade" placeholder="Cidade" value="{{$locais->cidade ?? ''}}" required><br>
            <input class="form-control" type="date" name="data" id="data" placeholder="Data da visita" value="{{$locais->data ?? ''}}" required><br>
        </form>
        <div class="text-center input-group col-6 m-auto">
            <a href="{{ url('local/create') }}" >
                <button class="btnEnviar">@if(isset($locais)) Editar @else Cadastrar @endif</button>
            </a>
            <div class="input-group-append ml-5">
                <a href="{{ url('local') }}">
                    <button class="btn btn-link" style="border-color: black;">Voltar</button>
                </a>
            </div>
        </div>
    </div>


</body>

</html>