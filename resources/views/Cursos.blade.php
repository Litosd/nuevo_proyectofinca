@extends('adminlte::page')

@section('title', 'Cursos')


@section('content_header')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cursos</h1>
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
                        <th>HORARIO</th>
                        <th>INICIO DEL CURSO</th>
                        <th>FIN DEL CURSO</th>
                        <th>DESCRIPCION</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    
                            <tr>
                                <td>001</td>
                                <td>Trabajo en equipo</td>
                                <td>10am - 12pm</td>
                                <td>6/7/2021</td>
                                <td>6/8/2021</td>
                                <td>Capacitacion para aprender a trabajar en equipo</td>
                                <td>
                                   <a class="btn btn-success"><i class='fas fa-edit'></i></a>
                                   <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Comunicación Efectiva</td>
                                <td>2pm - 4pm</td>
                                <td>6/7/2021</td>
                                <td>6/8/2021</td>
                                <td>Capacitación para manejar la comunicación de manera efectiva </td>
                                <td>
                                   <a class="btn btn-success"><i class='fas fa-edit'></i></a>
                                   <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Liderazgo</td>
                                <td>4pm -6pm</td>
                                <td>6/7/2021</td>
                                <td>26/7/2021</td>
                                <td>Curso para conseguir el liderazgo ideal</td>
                                <td>
                                   <a class="btn btn-success"><i class='fas fa-edit'></i></a>
                                   <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>Educación Financiera</td>
                                <td>4pm - 6pm</td>
                                <td>6/7/2021</td>
                                <td>6/7/2021</td>
                                <td>Aprendizaje sobre el mundo financiero y sus reglas</td>
                                <td>
                                   <a class="btn btn-success"><i class='fas fa-edit'></i></a>
                                   <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td>005</td>
                                <td>Desarrollo Sostenible y Sustentable</td>
                                <td>2pm - 4pm</td>
                                <td>6/7/2021</td>
                                <td>6/8/2021</td>
                                <td>Curso para el entendimiento del desarrollo sostenible </td>
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