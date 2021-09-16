@extends('adminlte::page')

@section('title', 'Inventario')


@section('content_header')
     
@stop


@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Inventario</h1>
    <a href="nuevoproducto.blade.php" class="btn btn-primary">Nuevo Registro</a>
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">HTML</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">JavaScript</a></li>
  </ul>
</div>

<div class="row">
    <div class="col-lg-12">

        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>PRODUCTO</th>
                        <th>PRECIO</th>
                        <th>STOCK</th>
                        <th>FECHA INTRODUCCIÓN</th>
                        <th>FECHA CADUCIDAD</th>
                        <th>FECHA MODIFICACIÓN</th>
                        <th>TIPO PRODUCTO</th>
                        <th>ACCIONES</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                            <tr>
                                <td>001</td>
                                <td>Bolsa café 226g/8 oz</td>
                                <td>25.00</td>
                                <td>40</td>
                                <td>06-07-2021</td>
                                <td>22-12-2021</td>
                                <td>05-07-2021</td>
                                <td>Granos</td>
                                <td>
                                   <a class="btn btn-success"><i class='fas fa-edit'></i></a>
                                   <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Cartón de huevos</td>
                                <td>70.00</td>
                                <td>55</td>
                                <td>06-07-2021</td>
                                <td>22-07-2022</td>
                                <td>06-07-2021</td>
                                <td>Huevos</td>
                                <td>
                                   <a class="btn btn-success"><i class='fas fa-edit'></i></a>
                                   <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Limones unidad</td>
                                <td>3.50</td>
                                <td>30</td>
                                <td>06-07-2021</td>
                                <td>06-08-2021</td>
                                <td>07-07-2021</td>
                                <td>Frutas</td>
                                <td>
                                   <a class="btn btn-success"><i class='fas fa-edit'></i></a>
                                   <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>Medida de Frijoles</td>
                                <td>60.00</td>
                                <td>30</td>
                                <td>05-07-2021</td>
                                <td>12-12-2021</td>
                                <td>06-07-2021</td>
                                <td>Granos</td>
                                <td>
                                   <a class="btn btn-success"><i class='fas fa-edit'></i></a>
                                   <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td>005</td>
                                <td>Durazno unidad</td>
                                <td>4.00</td>
                                <td>30</td>
                                <td>05-07-2021</td>
                                <td>20-07-2021</td>
                                <td>06-07-2021</td>
                                <td>Frutas</td>
                                <td>
                                   <a class="btn btn-success"><i class='fas fa-edit'></i></a>
                                   <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td>006</td>
                                <td>Papaya unidad</td>
                                <td>22.00</td>
                                <td>20</td>
                                <td>05-07-2021</td>
                                <td>20-07-2021</td>
                                <td>06-07-2021</td>
                                <td>Frutas</td>
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