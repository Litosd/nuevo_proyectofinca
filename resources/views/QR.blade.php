@extends('adminlte::page')

@section('title', 'App QR')


@section('content_header')
<h1>Estadísticas</h1>
@stop

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>




    
<div class= "d-sm-flex align-items-center justify-content-between mb-4">
<canvas id="myChart" style="width:300%;max-width:700px"></canvas>

<script>
var xValues = ["Mango", "Frijoles", "Café", "Durazno", "Mandarina"];
var yValues = [55, 35, 40, 24, 15];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#ffff1a",
  "#4dff88",
  "#4da6ff"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Productos Más Vendidos Primer Semestre 2020"
    }
  }
});     

  
  






</script>
@endsection