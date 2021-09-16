@extends('adminlte::page')

@section('title', 'Estados TC')


@section('content_header')
     <h1>Estados de Cuenta</h1>
@stop


@section('content')
<div class="card">
    
    <div class= "container-fluid">
    <form>
    <div class="form-group" id="numero-tarjeta">
       <p for = "numero-tarjeta">Numero de la tarjeta de crédito </p>
       <input type="text" class="form-control" id="numero-tarjeta">
    </div>
    <div class="form-group" id="Buscar">
                <button type="submit" class="btn btn-primary" id="confirm-purchase">Buscar</button>
            </div>
    </form>
    </div>
 <h5 class="mt-4 mb-2">Parametros <code></code></h5>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-success">
              <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Saldo Disponible</span>
                <span class="info-box-number">7,000</span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% de disponibilidad
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
           <!-- /.col -->
           <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-info">
              <span class="info-box-icon"><i class="fas fa-comments"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Comentarios</span>
                <span class="info-box-number">4</span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  Caja de comentarios
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        
        <div class="row">
            <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-danger">
              <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Saldo en Mora</span>
                <span class="info-box-number">3,000</span>

                <div class="progress">
                  <div class="progress-bar" style="width: 30%"></div>
                </div>
                <span class="progress-description">
                  30% de endeudamiento
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </div>
        
        <div class="row">
             <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-warning">
              <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Fecha limite</span>
                <span class="info-box-number">30/12/2020</span>

                <div class="progress">
                  <div class="progress-bar" style="width: 50%"></div>
                </div>
                <span class="progress-description">
                  50% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </div>

        
        <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    </div>
    <strong>Copyright &copy; 2019-2020 <a href="http://adminlte.io">VirtualBank</a>.</strong> All rights
    reserved.
  </footer>


@stop

@section('css')
   <link rel="stylesheet" href="css/admin_custom.css">
@stop


@section ('js')

@endsection