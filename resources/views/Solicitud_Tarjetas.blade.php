@extends('adminlte::page')

@section('title', 'Solicitud de TC')


@section('content_header')
     <h1>Solicitud para la creacion de una tarjeta de credito</h1>
@stop


@section('content')
<div class="card">

    <div class="card-body">
       <p>En el siguiente formulario debera de llenar los campos necesarios para hacer la solicitud valida</p>
    </div>
    
    <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>3%</h3>

                <p>Mensual</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>10%</h3>

                <p>Trimestral</p>
              </div>
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>12%</h3>

                <p>Cuatrimestral</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        
         
    <div class="creditCardForm">
    <div class="card-body">
      <div class="heading">
        <h3>Datos de la tarjeta</h3>
      </div>
    </div>   
    <div class="container-fluid">
      <div class="card-body">
        <form>
            <div class="form-group owner">
                <p for="owner">  Ingrese el codigo de cliente</p>
                <input type="text" class="form-control" id="owner">
            </div>
            <div class="form-group" id="Tipo-Tarjeta">
                <p>  Elija el tipo de tarjeta de credito</p>
                <select>
                    <option value="01">Clásica</option>
                    <option value="02">Estudiantes </option>
                    <option value="03">Oro</option>
                    <option value="04">Platinum</option>
                    <option value="05">Negocios</option>   
                </select>
            </div>
                <p>                                                 </p>
                <div class="form-group" id="card-number-field">
                <p for="cardNumber">Codigo de la tarjeta</p>
                <input type="text" class="form-control" id="cardNumber">
                </div>

                <div class="form-group" id="tipo-Cobertura">
                <p>Tipo de cobertura de la tarjeta de credito </p>
                     <select>
                         <option value="01">Nacional</option>
                         <option value="02">Internacional </option>  
                     </select>
                </div>
                <div class="form-group" id="cuota-pago">
                <p>Cuota de pago </p>
                   <select>
                        <option value="01">Mensual</option>
                        <option value="02">Trimestral </option>
                        <option value="03">Cuatrimestral </option>   
                   </select>
                </div>

            <div class="form-group CVV">
                <p for="interes">Tipo de Interes efectivo Anual</p>
                <input type="text" class="form-control" id="interes">
            </div>
            
            <div class="form-group" id="Limite-credito">
                <p for="Limite-credito">Limite de Crédito</p>
                <input type="text" class="form-control" id="Limite-credito">
            </div>

            <div class="row">
                <div class="form-group" id="expiration-date">
                   <p>Fecha de Expiración</p>
                   <select>
                       <option value="01">Enero</option>
                       <option value="02">Febrero </option>
                       <option value="03">Marzo</option>
                       <option value="04">Abril</option>
                       <option value="05">Mayo</option>
                       <option value="06">Junio</option>
                       <option value="07">Julio</option>
                       <option value="08">Augosto</option>
                       <option value="09">Septiembre</option>
                       <option value="10">Octubre</option>
                       <option value="11">Noviembre</option>
                       <option value="12">Diciembre</option>
                   </select>
                   <select>
                       <option value="20"> 2020</option>
                       <option value="21"> 2021</option>
                       <option value="22"> 2022</option>
                       <option value="23"> 2023</option>
                       <option value="24"> 2024</option>
                       <option value="25"> 2025</option>
                   </select>
                </div>
            </div>  

            <div class="form-group" id="emisor-tarjeta">
                <p>Emisor de la tarjeta</p>
                <select>
                    <option value="01">Mastercard</option>
                    <option value="02">Visa </option>
                  
                </select>
            </div>
            
            <div class="form-group" id="pay-now">
                <button type="submit" class="btn btn-primary" id="confirm-purchase">Confirmar</button>
            </div>
        </form>
    </div>
</div>
</div>

<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    </div>
    <strong>Copyright &copy; 2019-2020 <a href="http://adminlte.io">VirtualBank</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
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