@extends('adminlte::page')

@section('title', 'Nuevos Clientes')


@section('content_header')
     
@stop


@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Cliente</h1>
          <p>Agregar Cliente: * campos requeridos</p>
        
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                <form action="cliente_agregar_2.php" method="post" name="form">
                <h4>Datos Generales</h4>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Identidad</label>
                    <input class="form-control" name="identidad" id="identidad" type="text">
                  </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Primer Nombre</label>
                    <input class="form-control" required name="primernombre"  id="primernombre" type="text">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Segundo Nombre</label>
                    <input class="form-control" required name="segundonombre"  id="segundonombre" type="text">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Primer Apellido</label>
                    <input class="form-control" required name="primerapellido"  id="primerapellido" type="text">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Segundo Apellido</label>
                    <input class="form-control" required name="segundoapellido"  id="segundoapellido" type="text">
                  </div>
                  
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Edad</label>
                    <input class="form-control" required name="Edad"  id="Edad" type="text">
                  </div>
                  <div class="form-group">
                    <label for="exampleSelect1">Sexo</label>
                    <select class="form-control" name="sexo" id="sexo">
                      <option></option>
                      <option>Femenino</option>
                      <option>Masculino</option>
                    </select>
                  </div> 
                  
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">* Telefono</label>
                    <input class="form-control" required name="telefono" id="telefono" type="text">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">* Correo</label>
                    <input class="form-control" required name="correo" id="correo" type="correo" aria-describedby="emailHelp" placeholder="Enter email"><small class="form-text text-muted" id="emailHelp">Uso exclusivo de Tech Hunters</small>
                  </div>
                  <h4>Direccion</h4>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Pais</label>
                    <input class="form-control" name="pais" id="pais"  type="text">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Departamento</label>
                    <input class="form-control" name="departamento" type="text">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Ciudad</label>
                    <input class="form-control" name="ciudad" id="ciudad" type="text">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Colonia</label>
                    <input class="form-control" name="colonia" id="colonia" type="text">
                  </div>
                </div>
                  <div class="col-lg-4 offset-lg-1">
                  <h4>Datos del cliente</h4>
                  <div class="form-group">
                  <label for="exampleSelect1">Tipo de Cliente</label>
                    <select class="form-control" name="sexo" id="sexo">
                      <option></option>
                      <option>Compra productos</option>
                      <option>Adquiere Servicios</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">* Descripcion del cliente</label>
                    <input class="form-control" required name="Descripcion" id="Descripcion" type="text" placeholder="Describa ...">
                  </div>
                  <div class="tile-footer">
                    <button class="btn btn-primary" type="submit">Agregar Cliente</button>
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