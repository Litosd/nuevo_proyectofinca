@extends('adminlte::page')

@section('title', 'Inscripciones')


@section('content_header')
     
@stop


@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Capacitación</h1>
          <p>Nuevo Alumno: * campos requeridos</p>
        
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                <form action="cliente_agregar_2.php" method="post" name="form">
                <h4>Datos del Alumno</h4>
                <div class="form-group">
                    <label for="exampleSelect1">Tipo de persona</label>
                    <select class="form-control" name="TipoPersona" id="TipoPersona">
                      <option></option>
                      <option>Cliente</option>
                      <option>Empleado</option>
                      <option>Agente Externo</option>
                    </select>
                  </div> 

                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Id Cliente</label>
                    <input class="form-control" name="identidad" id="identidad" type="text" placeholder="Introduzca solo si es cliente ">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Id Empleado</label>
                    <input class="form-control" name="identidad" id="identidad" type="text" placeholder="Introduzca solo si es empleado " >
                  </div>

                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Identidad</label>
                    <input class="form-control" name="identidad" id="identidad" type="text">
                  </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Nombre</label>
                    <input class="form-control" required name="primernombre"  id="primernombre" type="text">
                  </div>
                  
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Edad</label>
                    <input class="form-control" required name="Edad"  id="Edad" type="text">
                  </div>
                  
                  
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Telefono de contacto</label>
                    <input class="form-control" required name="telefono" id="telefono" type="text">
                  </div>
                  
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Telefono de emergencia</label>
                    <input class="form-control" required name="telefono" id="telefono" type="text">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Organizacion o empresa a la que pertenece</label>
                    <input class="form-control" required name="telefono" id="telefono" type="text">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">* Correo</label>
                    <input class="form-control" required name="correo" id="correo" type="correo" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">* Comentario</label>
                    <input class="form-control" required name="comentario" id="comentario" type="text" aria-describedby="emailHelp" placeholder="Preferencias alimenticias o advertencia medica">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">FOTOGRAFIA DEL ALUMNO</label>
                       <input class="form-control" type="file" name="foto" id="foto" required>
                   </div>
                  <div class="tile-footer">
                    <button class="btn btn-primary" type="submit">Matricular</button>
                    <button class="btn btn-danger" type="submit">Cancelar</button>
                  </div>
                </div>
                  <div class="col-lg-4 offset-lg-1">
                  <h4>Datos del Taller</h4>
                  <div class="form-group">
                    <label for="exampleSelect1">Selecione el Taller o Curso a matricular</label>
                    <select class="form-control" name="TipoPersona" id="TipoPersona">
                      <option></option>
                      <option>Liderazgo</option>
                      <option>Trabajo en equipo</option>
                      <option>Comunicacion Efectiva</option>
                      <option>Educación Finaciera</option>
                      <option>Desarrollo Sostenible y Sustentable</option>
                    </select>
                  </div> 
                  <label for="exampleSelect1">Horario del Curso</label>
                    <select class="form-control" name="TipoPersona" id="TipoPersona">
                      <option></option>
                      <option>10 am - 12 pm</option>
                      <option>2 pm - 4 pm</option>
                      <option>4 pm- 6 pm</option>
                    </select>
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