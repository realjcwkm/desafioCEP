<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus locais</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <script src="{{asset('js/javascript.js')}}"> </script>
    <h1 class="text-center">Meus locais visitados - ibiJus</h1>
    <hr>
    <div class="col-8 m-auto">
        <table class="table text-center">
            <thead class="thead-primary">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Data da visita</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($locais as $local)
                <tr>
                    <td>{{ $local->nome }}</td>
                    <td>{{ $local->data }}</td>
                    <td>
                        <a href="{{ url('local/'.$local->id.'/edit') }}">
                            <button class="btn btn-warning">Editar</button>
                        </a>
                        <!-- <a href="{{url('local/'.$local->id)}}" class="js-del"> -->
                        <!-- <a data-confirm="Deseja mesmo excluir?" data-method="delete" href="{{url('local/'.$local->id)}}" rel="nofollow">
                            <button class="btn btn-danger">Excluir</button>
                        </a> -->
                        <a data-confirm="Are you sure?" data-method="destroy" href="{{url('local/'.$local->id)}}" rel="nofollow">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="text-left col-8 m-auto">
        <a href="{{ url('local/create') }}">
            <button class="btn btn-success">Cadastrar novo local</button>
        </a>
    </div>


</body>

</html>