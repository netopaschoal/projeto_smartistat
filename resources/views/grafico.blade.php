@extends('layouts.app_grafico')

@section('content')

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
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
                                        <div class="small text-white"><h3>{{$temp_media}}</h3></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Menor valor do período</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="small text-white"><h3>{{$temp_min}}</h3></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Maior valor do período</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="small text-white"><h3>{{$temp_max}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Gráfico de Temperatura</div>
                                    <div class="card-body"><canvas id="canvas"></canvas>
                                        </div>
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
                                            <h4>3° C</h4>
                                            <label for="enviaData">Email de notificação</label>
                                            <h4>neto_paschoal@hotmail.com</h4>
                                        </div>
                                        
                                    </form></div>
                                    <div class="switch">
                                        <!-- Material checked -->
<!-- Default checked -->
<div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
    <label class="custom-control-label" for="customSwitch1">Alarme ativado!</label>
    <center><button type="submit" class="btn btn-primary btn-sm">Editar</button></center>
  </div>
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
                                              <a class="dropdown-item" href="#">Celsius</a>
                                              <a class="dropdown-item" href="#">Fahrenheit</a>
                                            </div>
                                          </div>
                                          <div class="card-body">
                                            <h3>Unidade selecionada:</h3>
                                            <br>
                                            <h3>Graus Celsius</h3>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
        <script>
        var id = {{$id_dispositivo}};
        var id2 = id.toString();
        var url = `{{url('stock/chart/${id2}')}}`;
        var Years = new Array();
        var Prices = new Array();
        $(document).ready(function(){
          $.get(url, function(response){
            response.forEach(function(data){
                Prices.push(data.temperatura);
                Years.push(data.created_at);
            });
            var ctx = document.getElementById("canvas").getContext('2d');
                var myChart = new Chart(ctx, {
                  type: 'line',
                  
                  data: {
                      labels:Years,
                      datasets: [{
                           label: 'Temperatura',
                          data: Prices,
                          borderWidth: 3,
                          borderColor: 'rgb(77,166,253)',
                          backgroundColor: 'rgba(70,166,253,0.35)'
                          
                      }]
                  },
                  options: {
                    
                  }
              });
          });
        });
        </script>
    </div>


@endsection