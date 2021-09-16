@extends('adminlte::page')

@section('title', 'Movimientos de TC')


@section('content_header')
     <h1>Movimientos de mis Tarjetas de Crédito</h1>
@stop


@section('content')
<div class="card">
<div class="container-fluid">
        <h5 class="mb-2">Movimientos</h5>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Compras</span>
                <span class="info-box-number">1,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="far fa-lightbulb"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pagos</span>
                <span class="info-box-number">410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Devoluciones</span>
                <span class="info-box-number">13,648</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="fas fa-spinner"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sobregiros</span>
                <span class="info-box-number">93,139</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
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
    
 </div>
 

 <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Movimientos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Tipo de movimiento</th>
                    <th>Saldo acreedor</th>
                    <th>Saldo deudor</th>
                    <th>Fecha registro</th>
                    <th>Detalle</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Compra</td>
                    <td>0
                    </td>
                    <td>3400</td>
                    <td> 6/12/20</td>
                    <td>Compra de un articulo de joyeria</td>
                  </tr>
                  <tr>
                    <td>Devolucion</td>
                    <td>3400</td>
                    <td>0</td>
                    <td>7/12/20</td>
                    <td>Devolucion de un articulo de joyeria</td>
                  </tr>
                  <tr>
                    <td>Servicio</td>
                    <td>0</td>
                    <td>1000</td>
                    <td>8/12/2020</td>
                    <td>Pago de servicio de internet</td>
                  </tr>                                    
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Tipo de movimiento</th>
                    <th>Saldo acreedor</th>
                    <th>Saldo deudor</th>
                    <th>Fecha registro</th>
                    <th>Detalle</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
   

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    </div>
    <strong>Copyright &copy; 2019-2020 <a href="http://adminlte.io">VirtualBank</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


               
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

