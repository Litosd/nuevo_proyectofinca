@extends('adminlte::page')

@section('title', 'Perfil')


@section('content_header')
     
@stop

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Configuración</h1>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-success text-white">
                    Información Personal
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Nombre: Deiby Lainez</strong></label>
                    </div>
                    <div class="form-group">
                        <label>Correo: deibylainez@gmail.com</strong></label>
                    </div>
                    <div class="form-group">
                        <label>Rol: Administrador</strong></label>
                    </div>
                    <div class="form-group">
                        <label>Usuario: Deiby Lainez</strong></label>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item active">Cambiar Contraseña</li>
                        <form action="" method=" post" name="frmChangePass" id="frmChangePass" class="p-3">
                            <div class="form-group">
                                <label>Contraseña Actual</label>
                                <input type="password" name="actual" id="actual" placeholder="Clave Actual" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nueva Contraseña</label>
                                <input type="password" name="nueva" id="nueva" placeholder="Nueva Clave" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Confirmar Contraseña</label>
                                <input type="password" name="confirmar" id="confirmar" placeholder="Confirmar clave" required class="form-control">
                            </div>
                            <div class="alertChangePass" style="display:none;">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary btnChangePass">Cambiar Contraseña</button>
                            </div>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
        
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Cambiar Información de perfil
                    </div>
                    <div class="card-body">
                        <form action="empresa.php" method="post" id="frmEmpresa" class="p-3">
                            <div class="form-group">
                                <label>Nombre de perfil:</label>
                                <input type="text" name="txtDni" value="Deiby Lainez" id="txtDni" placeholder="Dni de la Empresa" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Rol:</label>
                                <select class="form-control" name="Rol" id="Rol">
                                    <option></option>
                                    <option>Administrador</option>
                                    <option>Empleado</option>
                                    <option>Instructor</option>
                                   

                                  </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Teléfono de Contacto:</label>
                                <input type="number" name="txtTelEmpresa" class="form-control" value="97453423" id="txtTelEmpresa" placeholder="teléfono de la Empresa" required>
                            </div>
                            <div class="form-group">
                                <label>Correo Electrónico:</label>
                                <input type="email" name="txtEmailEmpresa" class="form-control" value="deibylainez@gmail.com" id="txtEmailEmpresa" placeholder="Correo de la Empresa" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Cambiar imagen de perfil</label>
                                 <input class="form-control" type="file" name="foto" id="foto" required>
                            </div>
                        
                            <div>
                                <button type="submit" class="btn btn-primary btnChangePass"><i class="fas fa-save"></i> Guardar Datos</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Datos de la Empresa
                    </div>
                    <div class="card-body">
                        <div class="p-3">
                            <div class="form-group">
                                <strong>RTN:</strong>
                                <h6>14013456800431</h6>
                            </div>
                            <div class="form-group">
                                <strong>Nombre de la Empresa:</strong>
                                <h6>Finca La Familia</h6>
                            </div>
                            <div class="form-group">
                                <strong>Nombre Comercial:</strong>
                                <h6>Finca La Familia. D.R.</h6>
                            </div>
                            <div class="form-group">
                                <strong>Redes Sociales:</strong>
                                <h6>Instagram, Facebook y Whatsapp</h6>
                            </div>
                            <div class="form-group">
                                <strong>Teléfono de la Empresa:</strong>
                                <h6>97453423</h6>
                            </div>
                            <div class="form-group">
                                <strong>Fecha de Facturacion:</strong>
                                <h6>06/07/2021</h6>
                            </div>
                            <div class="form-group">
                                <strong>CAI:</strong>
                                <h6>35BDA6-0195F4-B3FB44-8B7F34-D1371B-3D</h6>
                            </div>
                            <div class="form-group">
                                <strong>Correo Electrónico:</strong>
                                <h6>carlos@fincalafamilia.com</h6>
                            </div>
                            <div class="form-group">
                                <strong>Dirección:</strong>
                                <h6>Aldea Cordoncillo, Yuscarán, El Paraíso</h6>
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