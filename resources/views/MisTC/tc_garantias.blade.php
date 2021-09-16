@extends('adminlte::page')

@section('title', 'Garantias de TC')


@section('content_header')
     <h1>Garantias del plan de la Tarjeta de Crédito</h1>
@stop


@section('content')


  <!-- Small Box (Stat card) -->
  <h5 class="mb-2 mt-4">Plan de tarjeta</h5>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>5$</h3>

                <p>Estudiantes</p>
              </div>
              <div class="icon">
                <i class="fas fa-graduation-cap"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>5$ <sup style="font-size: 10px"></sup></h3>

                <p>Clasica</p>
              </div>
              <div class="icon">
                <i class="fas fa-thumbs-up"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>10$</h3>

                <p>Oro</p>
              </div>
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-gray">
              <div class="inner">
                <h3>20$</h3>

                <p>Platinum</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>10$</h3>

                <p>Negocios</p>
              </div>
              <div class="icon">
                <i class="fas fa-newspaper"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        <!-- /.row -->
        <h4 class="mb-2 mt-4">Cobertura</h4>
        <h5 class="mb-2">Disponibles</h5>
        <div class="row">
          <div class="col-md-3">
            <div class="card card-primary collapsed-card">
              <div class="card-header">
                <h3 class="card-title">ROBOS</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                plan Negocios por 12 meses, 
                plan Oro por 18 meses y
                plan Platinum por 24 meses
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-3">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">PERDIDAS</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                plan Clasica por 6 meses,
                plan Negocios por 12 meses, 
                plan Oro por 12 meses y
                plan Platinum por 24 meses
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-3">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">DETERIORO</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                plan Estudiantes por 6 meses
                plan Clasica por 12 meses,
                plan Negocios por 18 meses, 
                plan Oro por 18 meses y
                plan Platinum por 24 meses
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
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
  <script>
  Swal.fire(
    '!Bienvenido!',
    'Dar click para continuar!',
    'success'
  )
  </script>
@endsection