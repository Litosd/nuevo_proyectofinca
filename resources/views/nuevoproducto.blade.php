@extends('adminlte::page')

@section('title', 'Nuevos Productos')


@section('content_header')
     
@stop


@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Agregar Producto</h1>
          <p>Agregar Productos: * campos requeridos</p>
        
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                <form action="cliente_agregar_2.php" method="post" name="form">
                <h4>Datos Generales</h4>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">ID</label>
                    <input class="form-control" name="identidad" id="identidad" type="text">
                  </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Producto</label>
                    <input class="form-control" required name="primernombre"  id="primernombre" type="text">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Precio</label>
                    <input class="form-control" required name="segundonombre"  id="segundonombre" type="text">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Cantidad</label>
                    <input class="form-control" required name="primerapellido"  id="primerapellido" type="text">
                  </div>

                  <div class="form-group">
                  <label for="start">Fecha de Introducción:</label>
                  <input type="date" id="start" name="trip-start"
                  value="2021-07-4"
                  min="2021-01-01" max="2025-12-31">
                    
                  </div>
                  
                  <div class="form-group">
                  <label for="start">Fecha de Caducidad:</label>
                  <input type="date" id="start" name="trip-start"
                  value="2021-07-4"
                  min="2021-01-01" max="2025-12-31">
                  </div>
                  <div class="form-group">
                    <label for="exampleSelect1">Tipo Producto </label>
                    <select type="text" class="form-control" placeholder="Ingrese nombre del producto" >
                      <option></option>
                      <option>Semilla</option>
                      <option>Frutas</option>
                      <option>Plantas</option>
                      <option>Granos</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Descripción</label>
                    <input class="form-control" required name="telefono" id="telefono" type="text">
                  </div>
      

                  <div class="tile-footer">
                    <button class="btn btn-primary" type="submit">Agregar Producto</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
	</main>
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