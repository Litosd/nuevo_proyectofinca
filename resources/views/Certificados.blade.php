@extends('adminlte::page')

@section('title', 'Certificados')


@section('content_header')
     
@stop

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Creación de Certificado</h1>
    </div>
    <div class="row">
    <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Información para validar Certificado
                    </div>
                    <div class="card-body">
                        <form action="empresa.php" method="post" id="frmEmpresa" class="p-3">
                            <div class="form-group">
                                <label>Inserte el codigo de alumno:</label>
                                <input type="number" name="txtDni" value="" id="txtDni" placeholder="Codigo del alumno..." required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nombre Completo:   </label>
                                <input type="text" name="txtNombre" class="form-control" value="" id="txtNombre" placeholder="Nombre completo del alumno..." >
                            </div>
                            
                            <div class="form-group">
                                <label>Instructor a cargo:</label>
                                <input type="text" name="txtRSocial" class="form-control" value="" id="txtRSocial" placeholder="Seleccione el instructor...">
                            </div>
                            <div class="form-group">
                                <label>Empresa u Organizacion:</label>
                                <input type="text" name="txtTelEmpresa" class="form-control" value="" id="txtTelEmpresa" placeholder="Empresa a la afiliado..." required>
                            </div>
                            <div class="form-group">
                                
                                <label for="exampleSelect1">Taller Completado: </label>
                                    <select class="form-control" name="Taller" id="Taller">
                                    <option></option>
                                    <option>Trabajo en Equipo</option>
                                    <option>Comunicación Efectiva</option>
                                    <option>Liderazgo</option>
                                    <option>Educación Financiera</option>
                                    <option>Desarrollo Sostenible y Sustentable</option>

                                  </select>
                            </div>
                            <div class="form-group">
                               <label class="col-lg-3">Progreso del Curso:</label>
                               <input type="text" class="knob" value="100" data-width="90" data-height="90" data-fgColor="#008f39">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary btnChangePass"><i class="fas fa-print"></i> Crear Certificado</button>
                            </div> 
                            
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Fotografia del Graduado
                    </div>
                    <div class="card-body">
                        <div class="p-3">
                            <div class="form-group">
                                <img src="vendor/adminlte/dist/img/Silueta.jpg" class="img-fluid img-rounded">
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
   <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
@stop


@section ('js')

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/jquery-knob/jquery.knob.min.js"></script>
  <script src="/vendor/sparklines/sparkline.js"></script>
  <script>
  Swal.fire(
    '!Guardado con Exito!',
    'Dar click para continuar!',
    'success'
  )
  </script>

  <!-- Page specific script -->
<script>
  $(function () {
    /* jQueryKnob */

    $('.knob').knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a   = this.angle(this.cv)  // Angle
            ,
              sa  = this.startAngle          // Previous start angle
            ,
              sat = this.startAngle         // Start angle
            ,
              ea                            // Previous end angle
            ,
              eat = sat + a                 // End angle
            ,
              r   = true

          this.g.lineWidth = this.lineWidth

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3)

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value)
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3)
            this.g.beginPath()
            this.g.strokeStyle = this.previousColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
            this.g.stroke()
          }

          this.g.beginPath()
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
          this.g.stroke()

          this.g.lineWidth = 2
          this.g.beginPath()
          this.g.strokeStyle = this.o.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
          this.g.stroke()

          return false
        }
      }
    })
    /* END JQUERY KNOB */

    //INITIALIZE SPARKLINE CHARTS
    var sparkline1 = new Sparkline($('#sparkline-1')[0], { width: 240, height: 70, lineColor: '#92c1dc', endColor: '#92c1dc' })
    var sparkline2 = new Sparkline($('#sparkline-2')[0], { width: 240, height: 70, lineColor: '#f56954', endColor: '#f56954' })
    var sparkline3 = new Sparkline($('#sparkline-3')[0], { width: 240, height: 70, lineColor: '#3af221', endColor: '#3af221' })

    sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021])
    sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921])
    sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21])

  })

</script>
@endsection