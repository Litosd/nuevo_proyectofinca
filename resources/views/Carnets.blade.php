@extends('adminlte::page')

@section('title', 'Gafete')


@section('content_header')
     
@stop

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Datos generales</h1>
    </div>
    <div class="row">
        <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Datos para el Carnet de Identificacion
                    </div>
                    <div class="card-body">
                        <form action="empresa.php" method="post" id="frmEmpresa" class="p-3">
                            <div class="form-group">
                                <label>Codigo de Alumno:</label>
                                <input type="number" name="txtDni" value="" id="txtDni" placeholder="Codigo del alumno..." required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nombre Completo:</label>
                                <input type="text" name="txtNombre" class="form-control" value="" id="txtNombre" placeholder="Nombre completo del alumno..." required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Equipo:</label>
                                <input type="text" name="txtRSocial" class="form-control" value="" id="txtRSocial" placeholder="Equipo asignado ...">
                            </div>
                            <div class="form-group">
                                <label>Empresa u Organizacion:</label>
                                <input type="number" name="txtTelEmpresa" class="form-control" value="" id="txtTelEmpresa" placeholder="Empresa a la afiliado..." required>
                            </div>
                            <div class="form-group">
                                
                                <label for="exampleSelect1">Taller</label>
                                    <select class="form-control" name="sexo" id="sexo">
                                    <option></option>
                                    <option>Trabajo en Equipo</option>
                                    <option>Comunicación Efectiva</option>
                                    <option>Liderazgo</option>
                                    <option>Educación Financiera</option>
                                    <option>Desarrollo Sostenible y Sustentable</option>

                                  </select>
                            </div>
                            
                            
                            <div>
                                <button type="submit" class="btn btn-primary btnChangePass"><i class="fas fa-print"></i> Imprimir Carnet</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Fotografia del Alumno
                    </div>
                    <div class="card-body">
                        <div class="p-3">
                            <div class="form-group">
                                <img src="vendor/adminlte/dist/img/Perfil.jpg" class="img-fluid img-rounded">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        
        

        
        
    </div>       

        
    
</div>
@stop

@section('css')
   <link rel="stylesheet" href="css/admin_custom.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
@stop


@section ('js')

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
  
  <script>
  Swal.fire(
    '!Guardado con Exito!',
    'Dar click para continuar!',
    'success'
  )
  </script>
@endsection