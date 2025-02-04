@extends('layouts.app_grafico')

@section('content')

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        
        
        <!-- <link href="{asset('css/app.css')}}" rel="stylesheet" type="text/css"> -->
        
    </head>



    


    <div class="sb-nav-fixed">
        <div id="layoutSidenav">
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    
                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Última atualização</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="small text-white"><h4>{{$temp_data}}</h4></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Temperatura média</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="small text-white"><h3>{{$temp_media}}{{$simbolo_unidade}}</h3></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Menor valor do período</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="small text-white"><h3>{{$temp_min}}{{$simbolo_unidade}}</h3></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Maior valor do período</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="small text-white"><h3>{{$temp_max}}{{$simbolo_unidade}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Gráfico de Temperatura</div>
                                    {{-- <div class="card-body"><canvas id="canvas"></canvas>
                                        </div> --}}
                                        
                                        <div id="chart_div" style="width: 850px; height: 400px;"></div>

                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Periodo do gráfico</div>
                                    <div class="card-body"><form action="/data_grafico/{{$id_dispositivo}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="enviaData">Digite a data inicial</label>
                                            <input type="text" class="form-control" name="data_inicio" id="data_inicio"
                                            placeholder="ex: 20/02/2020">
                                            <label for="enviaData">Digite a data final</label>
                                            <input type="text" class="form-control" name="data_final" id="data_final"
                                            placeholder="ex: 20/03/2020">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm">Selecionar</button>
                                    </form></div>
                                    <div class="card-header">Periodo exibido no gráfico:</div>
                                    <div class="card-body bg-success text-white  mb-4">
                                        <center><h3>{{$data_inicio}} {{$data_final}}</h3></center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-bell mr-1"></i>Alarme</div>
                                    <div class="card-body"><form action="/data_grafico/{{$id_dispositivo}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="enviaData">Temperatura máxima</label>
                                            <table>
                                                <tr>
                                                  <td><h4 id="linha_temperatura">{{$temp_max_db}}</h4></td>
                                                  <td><h4>{{$simbolo_unidade}}</h4></td>
                                                </tr>  
                                              </table>
                                            <label for="enviaData">Email de notificação</label>
                                            <h4 id="linha_email_notificacao">{{$email_notifi}}</h4>
                                            
                                        </div>
                                        
                                    </form></div>

<!-- modal -->
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
                            <input type="text" class="form-control" id="temp_max" placeholder="Temperatura:">
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
                                    
<!-- Default checked -->
<div class="custom-control custom-switch">
    <input type="checkbox" data-id="{{$id_dispositivo}}" name="status" class="js-switch" {{ $alarme_status == 1 ? 'checked' : '' }}>
    <button style="margin-left: 8vw;" type="submit" class="btn btn-primary btn-sm" onClick="mostra_modal()">Editar</button>
  </div>
                                      
                                </div>
                            </div>
    
                            <div class="col-xl-4">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-thermometer-half mr-1"></i>Unidade de temperatura</div>
                                    <div class="card-body">
                                        <div class="dropdown">
                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Unidade de temperatura
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              <a class="dropdown-item" href="{{ route('unidade.temperatura',['id' => $id_dispositivo, 'unidade' => "1"]) }}">Celsius</a>
                                              <a class="dropdown-item" href="{{ route('unidade.temperatura',['id' => $id_dispositivo, 'unidade' => "2"]) }}">Fahrenheit</a>
                                            </div>
                                          </div>
                                          <div class="card-body">
                                            <h3>Unidade selecionada:</h3>
                                            <br>
                                            <h3>{{$nome_unidade}}</h3>
                                          </div>
                                          

                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script> --}}
        {{-- <script>
        var id = {{$id_dispositivo}};
        var id2 = id.toString();
        var unidade_temp = {{$unidade_temperatura}};
        var unidade_temp2 = unidade_temp.toString();
        var url = `{{url('stock/chart/${id2}')}}`;
        var Data = new Array();
        var Temp = new Array();
        $(document).ready(function(){
          $.get(url, function(response){
              if(unidade_temp2 == "2"){
                response.forEach(function(data){ //                         fazer aqui a convesao de unidade
                Temp.push((Number(data.temperatura) * (9/5)) + 32);         // formula   (1 °C × 9/5) + 32 = 33,8 °F
                Data.push(data.created_at);
            });   
              }
              else {
                response.forEach(function(data){ //                        
                Temp.push(data.temperatura);                                
                Data.push(data.created_at);
            }); 
              }
                                          //acaba aqui
            var ctx = document.getElementById("canvas").getContext('2d');
                var myChart = new Chart(ctx, {
                  type: 'line',
                  
                  data: {
                      labels:Data,
                      datasets: [{
                           label: 'Temperatura',
                          data: Temp,
                          borderWidth: 3,
                          borderColor: 'rgb(77,166,253)',
                          backgroundColor: 'rgba(70,166,253,0.35)',
                      }]
                  },
                  options: {
                    explorer: { 
                        actions: ['dragToZoom', 'rightClickToReset'],
        axis: 'horizontal',
        keepInBounds: true,
        maxZoomIn: 4.0 }
        
                  }
                    
    
              });
          });
        });
        </script>
        <script>let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

            elems.forEach(function(html) {
                let switchery = new Switchery(html,  { size: 'small' });
                $(document).ready(function(){
        $('.js-switch').change(function () {
            let status = $(this).prop('checked') === true ? 1 : 0;
            let userId = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route('users.update.status') }}',
                data: {'status': status, 'user_id': userId},
                success: function (data) {
                    toastr.options.closeButton = true;
                    toastr.options.closeMethod = 'fadeOut';
                    toastr.options.closeDuration = 100;
                    if(status == 1){
                        toastr.success("Alarme ativado");
                    }
                    else{
                        toastr.success("Alarme desativado");
                    }
                  //  toastr.success(data.message);
                }
            });
        });
    });
            });
            // codigo do modal
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

    // alterar o valor do campos na pagina
    $('#linha_temperatura').html(dados.temp);
    $('#linha_email_notificacao').html(dados.email);


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
            
            
            
            </script> --}}
            {{-- <script type="text/javascript">
var id = {{$id_dispositivo}};
        var id2 = id.toString();
        var unidade_temp = {{$unidade_temperatura}};
        var unidade_temp2 = unidade_temp.toString();
        var url = `{{url('stock/chart/${id2}')}}`;
        var Data = new Array();
        var Temp = new Array();
        $(document).ready(function(){
          $.get(url, function(response){
              if(unidade_temp2 == "2"){
                response.forEach(function(data){ //                         fazer aqui a convesao de unidade
                Temp.push((Number(data.temperatura) * (9/5)) + 32);         // formula   (1 °C × 9/5) + 32 = 33,8 °F
                Data.push(data.created_at);
            });   
              }
              else {
                response.forEach(function(data){ //                        
                Temp.push(data.temperatura);                                
                Data.push(data.created_at);
            }); 
              }

              google.charts.load('current', {
                    'packages': ['corechart']
                  });
                  google.charts.setOnLoadCallback(drawChart);
            
                  function drawChart() {

                      models = ['tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff',
                      'tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff',
                      'tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff',
                      'tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff',
                      'tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff',
                      'tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff',
                      'tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff',
                      'tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff',
                      'tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff',
                      'tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff',
                      'tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff',
                      'tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff',
                      'tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff',
                      'tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff',
                      'tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff',
                      'tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff','tesla','fusca','bmw','ds','ff'];
                      cars = [10,20,30,1,5,67,34,1,2,8,4,54,23,21,14,17,10,1,56,17,10,20,30,1,5,67,34,1,2,8,4,54,23,21,14,17,10,1,56,17,
                      10,20,30,1,5,67,34,1,2,8,4,54,23,21,14,17,10,1,56,17,10,20,30,1,5,67,34,1,2,8,4,54,23,21,14,17,10,1,56,17,
                      10,20,30,1,5,67,34,1,2,8,4,54,23,21,14,17,10,1,56,17,10,20,30,1,5,67,34,1,2,8,4,54,23,21,14,17,10,1,56,17,
                      10,20,30,1,5,67,34,1,2,8,4,54,23,21,14,17,10,1,56,17,10,20,30,1,5,67,34,1,2,8,4,54,23,21,14,17,10,1,56,17,
                      10,20,30,1,5,67,34,1,2,8,4,54,23,21,14,17,10,1,56,17,10,20,30,1,5,67,34,1,2,8,4,54,23,21,14,17,10,1,56,17,
                      10,20,30,1,5,67,34,1,2,8,4,54,23,21,14,17,10,1,56,17,10,20,30,1,5,67,34,1,2,8,4,54,23,21,14,17,10,1,56,17,
                      10,20,30,1,5,67,34,1,2,8,4,54,23,21,14,17,10,1,56,17,10,20,30,1,5,67,34,1,2,8,4,54,23,21,14,17,10,1,56,17,
                      10,20,30,1,5,67,34,1,2,8,4,54,23,21,14,17,10,1,56,17,10,20,30,1,5,67,34,1,2,8,4,54,23,21,14,17,10,1,56,17];

                    var dataArray = [['Dia','Temperatura']];
                    

                        /* for (var n =0; n < Temp.length; n++) { 
                        dataArray.push ([Data[n], Number(Temp[n])])
                            } */
                            for (var n =0; n < models.length; n++) { 
                        dataArray.push ([models[n], cars[n]])
                            }
                                
                    
                    var data = new google.visualization.arrayToDataTable(dataArray);
                        
                    
            
                    var options = {
                      
                        title: 'Company Performance',
          hAxis: {
            title: 'Year',
            titleTextStyle: {
              color: '#333'
            },
            slantedText: true,
            slantedTextAngle: 80
          },
          vAxis: {
            minValue: 0
          },
          explorer: {
            actions: ['dragToZoom', 'rightClickToReset'],
            axis: 'horizontal',
            keepInBounds: true,
            maxZoomIn: 4.0
          },
          colors: ['#D44E41'],
        };
            
                    var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
                    chart.draw(data, options);
                  }
                                          //acaba aqui
            /* var ctx = document.getElementById("canvas").getContext('2d');
                var myChart = new Chart(ctx, {
                  type: 'line',
                  
                  data: {
                      labels:Data,
                      datasets: [{
                           label: 'Temperatura',
                          data: Temp,
                          borderWidth: 3,
                          borderColor: 'rgb(77,166,253)',
                          backgroundColor: 'rgba(70,166,253,0.35)',
                      }]
                  },
                  options: {
                    explorer: { 
                        actions: ['dragToZoom', 'rightClickToReset'],
        axis: 'horizontal',
        keepInBounds: true,
        maxZoomIn: 4.0 }
        
                  }
                    
    
              }); */
          });
        });


               





        
                
                </script> --}}
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <div id="chart_div" style="width: 500px; height: 300px;"></div>
            
                <script type="text/javascript">


var id = {{$id_dispositivo}};
        var id2 = id.toString();
        var unidade_temp = {{$unidade_temperatura}};
        var unidade_temp2 = unidade_temp.toString();
        var url = `{{url('stock/chart/${id2}')}}`;
        var Data = new Array();
        var Temp = new Array();
        $(document).ready(function(){
          $.get(url, function(response){
              if(unidade_temp2 == "2"){
                response.forEach(function(data){ //                         fazer aqui a convesao de unidade
                Temp.push((Number(data.temperatura) * (9/5)) + 32);         // formula   (1 °C × 9/5) + 32 = 33,8 °F
                Data.push(data.created_at);
            });   
              }
              else {
                response.forEach(function(data){ //                        
                Temp.push(data.temperatura);                                
                Data.push(data.created_at);
            }); 
              }
              google.charts.load('current', {
                    'packages': ['corechart']
                  });
                  google.charts.setOnLoadCallback(drawChart);
            
                  
            
                  function drawChart() {
                   /*  var data = google.visualization.arrayToDataTable([
                   
                    ]); */
                     var dataArray = [['teste','teste2']];
                     var teste = [['ano','temperatura']];
                    

                    for (var n =0; n < Temp.length; n++) { 
                        teste.push ([new Date(Data[n]), Number(Temp[n])]);
                        // novo teste
                        } 
                      
          
                        var data = google.visualization.arrayToDataTable(teste);
                
                /* var data = google.visualization.arrayToDataTable(dataArray); */
              //  var data =  google.visualization.arrayToDataTable(dataArray);

        /* [new Date(2086, 01, 01), 13] */
            
                    var options = {
                      legend: {position: 'top', maxLines: 1},
                      hAxis: {
                        title: 'Data',
                        titleTextStyle: {
                          color: '#333'
                        },
                        slantedText: true,
                        slantedTextAngle: 80
                      },
                      vAxis: {
                        
                      },
                      explorer: {
                        actions: ['dragToZoom', 'rightClickToReset'],
                        axis: 'horizontal',
                        keepInBounds: false,
                        maxZoomIn: 4.0
                      },
                      colors: ['#D44E41'],
                    };
            
                    var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
                    chart.draw(data, options);
                  }
              
                                          //acaba aqui
            


          });
        });
               /*  google.charts.load('current', {
                    'packages': ['corechart']
                  });
                  google.charts.setOnLoadCallback(drawChart);
            
                  
            
                  function drawChart() {
                   /*  var data = google.visualization.arrayToDataTable([
                   
                    ]); */
                     /* var dataArray = [['teste','teste2']];
                     var teste = [['year','sales'],[1000,30],[1500,50],[2000,70]];
                    

                    for (var n =0; n < 200; n++) { 
                        teste.push ([n*3 + 2000, Math.floor(Math.random() * 100) + 1]);
                        } 
                      
          
                        var data = google.visualization.arrayToDataTable(teste); */
                
                /* var data = google.visualization.arrayToDataTable(dataArray); */
              //  var data =  google.visualization.arrayToDataTable(dataArray);

        /* [new Date(2086, 01, 01), 13] */
            
                    /* var options = {
                      title: 'Company Performance',
                      hAxis: {
                        title: 'Year',
                        titleTextStyle: {
                          color: '#333'
                        },
                        slantedText: true,
                        slantedTextAngle: 80
                      },
                      vAxis: {
                        minValue: 0
                      },
                      explorer: {
                        actions: ['dragToZoom', 'rightClickToReset'],
                        axis: 'horizontal',
                        keepInBounds: true,
                        maxZoomIn: 4.0
                      },
                      colors: ['#D44E41'],
                    };
            
                    var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
                    chart.draw(data, options);
                  }  */
                
                </script>
</div>


@endsection