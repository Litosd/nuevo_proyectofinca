@extends('adminlte::page')

@section('title', 'Inicio')

@section('plugins.Sweetalert2', true)

@section('content_header')
     <h1>Finca La Familia</h1>
@stop


@section('content')
 <div class="card">
    <div class="card-header">
    <h1 class="h3 mb-0 text-gray-800">INICIO</h1>
    </div>

    <div class="card-body">
       <p>Sean bienvenidos al sistema de Finca La Familia, donde podra realizar sus gestiones de actividades dentro de la finca e indagar en los movimientos de los clientes,capacitaciones,inventario y además el acceso a una aplicacion QR.</p>
       <img src="/vendor/adminlte/dist/img/Inicio.jpg" class="img-fluid img-rounded">
    </div>
 </div>


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