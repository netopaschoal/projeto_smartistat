@extends('layouts.app_grafico')

@section('content')
<div class="w-50 p-3">
<div class="card border">
    <div class="card-body">
        <form action="/novo_disp" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeDisp">Nome do dispositivo</label>
                <input type="text" class="form-control" name="nomeDispositivo"
                id="nomeDispositivo" placeholder="Dispositivo">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        
        </form>

    </div>

</div>

</div>


@endsection