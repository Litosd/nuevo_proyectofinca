@extends('adminlte::page')

@section('title', 'Reportes')

@section('plugins.Sweetalert2', true)

@section('content_header')
     <h1>Información de Productos</h1>
@stop


@section('content')
     <!-- Small Box (Stat card) -->


    <div class= "d-sm-flex align-items-center justify-content-between mb-4">
       <h5> Búsqueda: <input type="search-between" name="busquedamusica" placeholder="Tipo de Producto">
<input type="submit" value="Buscar"> </h5>
<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Exportar
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">PDF</a></li>
    <li><a href="#">xlsm</a></li>
    
  </ul>
</div>
<div>
                 <label  for="start">Fecha Caducidad:</label>
                  <input type="date" id="start" name="trip-start"
                  value="2021-07-4"
                  min="2021-01-01" max="2025-12-31">   
                  
                 
                  
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
                    </tr>
                </thead>
                <tbody>
                    
                            <tr>
                                <td>001</td>
                                <td>Limón Unidad unidad</td>
                                <td>3.00</td>
                                <td>30</td>
                                <td>06-07-2021</td>
                                <td>22-08-2021</td>
                                <td>05-07-2021</td>
                                
</tr>
<tr>
                                <td>002</td>
                                <td>Durazno Unidad</td>
                                <td>4.00</td>
                                <td>25</td>
                                <td>06-06-2021</td>
                                <td>21-07-2021</td>
                                <td>05-07-2021</td>
                                
</tr>
<tr>
                                <td>003</td>
                                <td>Mango Pespire Unidad</td>
                                <td>13.00</td>
                                <td>25</td>
                                <td>06-06-2020</td>
                                <td>21-07-2021</td>
                                <td>08-06-2021</td>
                                
</tr>

</script>
@endsection