@extends('layouts.footer');
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Vacinometro São Leopoldo</title>
        <link rel="icon" href="{{asset('brasao.ico')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">


        <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <!-- Custom fonts for this template-->
        <link rel="stylesheet" href="{{ asset('/css/estiloPainel.css') }}">

   

    </head>


<body>

    <div id="content">
                    <nav class="navbar navbar-expand navbar-light topbar static-top shadow navMobile">
                        <div class="w-25 tituloMobile ">
                            <img class="brasao" src="{{asset('assets/img/logoPMSL.png')}}" alt="">
                        </div>

                        <div class="w-50 header tituloMobile" style="color: #bac0d4;">
                            VACINÔMETRO SÃO LEOPOLDO
                        </div>
                        <div class="w-25 tituloMobile logo ">
                            <img class="logo" src="{{asset('assets/img/logo_governo.png')}}" alt="">
                      </div>

                        <!-- Topbar Navbar -->
                    </nav>
                </div>
                
  <div class="row infos" style="justify-content: center!important" >
    @foreach ($vacinacao as $vacinacao)

  <div class="py-3 text-center" >
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>Informações das vacinas de Covid em São Leopoldo</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-3 col-6 p-4"> <i class="d-block fa fa-circle fa-3x mb-2 text-muted"></i>
          <h4> <b>Doses Recebidas</b> </h4>
          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" style="color: #007bff!important;">
            {{ $vacinacao->dosesRecebidas }}</div>        </div>
        <div class="col-lg-3 col-6 p-4"> <i class="d-block fa fa-stop-circle-o fa-3x mb-2 text-muted"></i>
          <h4> <b>Doses Aplicadas</b> </h4>
          <p></p>
        </div>
        <div class="col-lg-3 col-6 p-4"> <i class="d-block fa fa-stop-circle fa-3x mb-2 text-muted"></i>
          <h4> <b>Primeira Dose Aplicada</b> </h4>
          <p></p>
        </div>
        <div class="col-lg-3 col-6 p-4"> <i class="d-block fa fa-circle-o fa-3x mb-2 text-muted"></i>
          <h4> <b>Segunda Dose Aplicada</b> </h4>
          <p></p>
        </div>
      </div>
    </div>
  </div>

  </div>

    <div class="col-xl-4 col-lg-7 col-md-12 mb-4 infos2" >
                        <div class="card border-left-warning shadow h-100 py-2" >
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" style="color: #007bff!important;">
                                          {{ $vacinacao->dosesRecebidas }}</div>
                                          <div class="h5 mb-0 font-weight-bold text-gray-400" style="margin-bottom: 5px!important;">
                                        
                                </div>
                            </div>
                        </div>
            </div>
    @endforeach
    </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>