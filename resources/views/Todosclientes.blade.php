@extends('adminlte::page')

@section('title', 'Clientes')


@section('content_header')
     
@stop

@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Clientes</h1>
    <a href="clientenuevo.blade.php" class="btn btn-primary">Nuevo</a>
</div>

<div class="row">
    <div class="col-lg-12">

        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>DNI</th>
                        <th>NOMBRE</th>
                        <th>TELEFONO</th>
                        <th>DIRECCIÓN</th>
                        <th>CORREO</th>
                        <th>ACCIONES</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                            <tr>
                                <td>001</td>
                                <td>1601199400453</td>
                                <td>Carlos Alberto Alvarez Galvez</td>
                                <td>33459734</td>
                                <td>Comayaguela, Col.Brisas del norte</td>
                                <td>carlosa@yahoo.com </td>
                                <td>
                                   <a class="btn btn-success"><i class='fas fa-edit'></i></a>
                                   <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>1601199000043</td>
                                <td>Alexa Maria Alcerro Palma</td>
                                <td>98788904</td>
                                <td>Comayaguela, Col. El Country</td>
                                <td>amaria@gmail.com </td>
                                <td>
                                   <a class="btn btn-success"><i class='fas fa-edit'></i></a>
                                   <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>1601198300131</td>
                                <td>Milton Roger Lagos Nuñez</td>
                                <td>34543521</td>
                                <td>Teg, Col. Las Lomas</td>
                                <td>miltonr@gmail.com </td>
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