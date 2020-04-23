@extends('layouts.app_grafico')

@section('content')
<div class="w-50 p-3">
<div class="card border">
    <div class="card-body">
        <h1>teste</h1>
        <br>
            <button type="submit" class="btn btn-primary btn-sm" onClick="mostra_modal()">Salvar</button>
    </div>

</div>

</div>

<div class="modal" tabindex="-1" role="dialog" id="alarme_form">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-horizontal" id="formAlarme">
                <div class="modal-header">
                    <h5 class="modal-title">Configuração do Alarme</h5>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" class="form-control">
                    <div class="form-group">
                        <label for="nomeEmail" class="control-label">Email de notificação</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="nomeEmail" placeholder="Email:">
                        </div>
                        <label for="temp_max" class="control-label">Valor máximo de temperatura</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="temp_max" placeholder="Email:">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="cancel" class="btn btn-secondary" data-dissmiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

</div>

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN' : "{{ csrf_token() }}"
    }
})
function mostra_modal(){
   // $('#nomeEmail').val('')
  //  $('#temp_max').val('')
    $('#alarme_form').modal('show')
}
function pegar_dados_formulario(){
    var dados = {
        email: $('#nomeEmail').val(),
        temp: $('#temp_max').val()
    }
    console.log(dados);
    $('#alarme_form').modal('hide')
}

$('#alarme_form').submit( function(event){
    event.preventDefault();
    $('#alarme_form').modal('hide')
    var dados = {
        email: $('#nomeEmail').val(),
        temp: $('#temp_max').val(),
        id: 1
    }


    $.ajax({
        type: "PUT",
        url: "/api/alarme/" + dados.id,
        context: this,
        data: dados,
        success: function(){
            console.log("Salvou");
        },
        error: function(error){
            console.log(error);
        }

    });

})  
</script>

@endsection

