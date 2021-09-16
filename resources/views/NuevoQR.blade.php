@extends('adminlte::page')

@section('title', 'Gafete')


@section('content_header')
     
@stop

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Generar Codigo QR</h1>
    </div>
    <div class="row">
        <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Datos para generar el codigo QR
                    </div>
                    <div class="card-body">
                        <form action="empresa.php" method="post" id="frmEmpresa" class="p-3">
                            <div class="form-group">
                                <label>Inserte el código producto:</label>
                                <input type="number" name="txtDni" value="" id="txtDni" placeholder="codigo del elemento a generar QR..." required class="form-control">
                            </div>
                            
                            <div>
                                <button type="submit" class="btn btn-primary btnChangePass"><i class="fas fa-save"></i> Generar QR</button>
                                <button type="submit" class="btn btn-warning btnChangePass"><i class="fas fa-print"></i> Imprimir QR</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Nuevo Codigo QR
                    </div>
                    <div class="card-body">
                        <div class="p-3">
                            <div class="form-group">
                                <img src="vendor/adminlte/dist/img/QR.jpg" class="img-fluid img-rounded">
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