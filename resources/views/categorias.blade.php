@extends('layouts.app_grafico')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorias</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="card container">
    <div class="card border ">
        <div class="card-body">
            <h5 class="card-title">Lista de Dispositivos</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Local do dispositivo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
            @foreach($disp as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->nome_dispositivo}}</td>
                        <td>
                            <a href="/listar_dados/{{$d->id}}" class="btn btn-sm btn-primary">Ver dados</a>
                            <a href="/apagar/{{$d->id}}" class="btn btn-sm btn-danger">Excluir</a>
                        </td>

                    </tr>
            @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <div class="card-footer">
                <a href="/adicionar_dispositivo" class="btn btn-sm btn-primary" role="button">Novo Dispositivo</a>
            </div>
        </div>
    </div>
    </div>
</body>

@endsection