@extends('adminlte::page')

@section('title', 'Alumnos')


@section('content_header')
     
@stop

@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Alumnos</h1>
    <a href="clientenuevo.blade.php" class="btn btn-primary">Nuevo</a>
</div>

<div class="row">
    <div class="col-lg-12">

        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>TIPO</th>
                        <th>TALLER</th>
                        <th>TEL. CONTACTO</th>
                        <th>TEl. EMERGENCIA</th>
                        <th>ORGANIZACION</th>
                        <th>CORREO</th>
                        <th>COMENTARIO</th>
                        <th>ACCIONES</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                            <tr>
                                <td>001</td>
                                <td>Carlos Alvarez</td>
                                <td>Cliente</td>
                                <td>Liderazgo</td>
                                <td>33459734</td>
                                <td>223-3333</td>
                                <td>Lacteos Sula</td>
                                <td>carlosa@yahoo.com </td>
                                <td>Se recomienda frutas y granos básicos </td>
                                <td>
                                   <a class="btn btn-success"><i class='fas fa-edit'></i></a>
                                   <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Wilson Ramirez</td>
                                <td>Empleado</td>
                                <td>Trabajo en Equipo</td>
                                <td>94284924</td>
                                <td>33679945</td>
                                <td>Finca La Familia</td>
                                <td>wilsonr@gmail.com </td>
                                <td>Recomienda no acercarse a las granjas de abejas por alergias </td>
                                <td>
                                   <a class="btn btn-success"><i class='fas fa-edit'></i></a>
                                   <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Milton Roger Lagos Nuñez</td>
                                <td>Cliente</td>
                                <td>Comunicacion Efectiva</td>
                                <td>34543521</td>
                                <td>97325245</td>
                                <td>Barroteria Los Tres Hermanos</td>
                                <td>miltonr@gmail.com </td>
                                <td>No tiene nada que añadir </td>
                                <td>
                                   <a class="btn btn-success"><i class='fas fa-edit'></i></a>
                                   <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
                                </td>
                            </tr>
                   
                </tbody>
               
            </table>
        </div>

    </div>
</div>


</div>
<!-- /.container-fluid -->
 @stop   

@section('css')
   <link rel="stylesheet" href="css/admin_custom.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
@stop


@section ('js')

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
  
  <script>
  Swal.fire(
    '!Bienvenido!',
    'Dar click para continuar!',
    'success'
  )
  </script>
@endsection