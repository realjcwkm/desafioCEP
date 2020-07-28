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
    <script src="{{asset('js/javascript.js')}}"> </script>
    <h1 class="text-center">Editar local visitado - ibiJus</h1>

    <div class="col-6 m-auto">
        <form name="formEdit" id="formEdit" method="post" action="{{url('local/'.$locais->id)}}">
            @method('PUT')
            @csrf
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome" value="{{$locais->nome ?? ''}}" required><br>
            <div class="input-group mb-4">
                <input class="form-control" type="text" name="cep" id="cep" placeholder="Cep" value="{{$locais->cep ?? ''}}" required>
                <div class="input-group-append ml-2">
                    <a href="#" onclick="buscarCEP();">
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
            <a href="javascript:{}" onclick="document.getElementById('formEdit').submit();">
                <button class="btnEnviar">Salvar</button>
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