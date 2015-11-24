@extends('admin.master')

@section('active-temperature')
active
@stop

@section('judul-halaman')
Temperature
@stop

@section('deskripsi-halaman')
Modul temperatur rumah Anda
@stop

@section('konten')
<script src="{{ url('assets/js/Chart.js') }}"></script>

<canvas id="canvas" height="450" width="600"></canvas>
  <script>
    var lineChartData = {
      labels :
      [0,
        <?php for($i = 1; $i <= 30; $i++): ?>
          "<?php echo $i ?>"
          <?php if ($i < 30): ?>
            ,
          <?php endif ?>
        <?php endfor ?>
      ],
      datasets : [
        {
          fillColor : "rgba(224,34,34,0.3)",
          strokeColor : "rgba(220,220,220,1)",
          pointColor : "rgba(224,34,34,1)",
          pointStrokeColor : "#fff",
          data :
          [0,
            <?php $hitungan = 1 ?>
            <?php foreach($temperatur as $tmp): ?>
              <?php echo substr($tmp->suhu, 0, 5) ?>
              <?php if($hitungan < 29): ?>
                ,
              <?php endif ?>
            <?php endforeach ?>
          ]
        }
      ]
      
    }
    var opsi = {

    };
  var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData, opsi);
  </script>

@stop

@section('include-js')
<script src="{{ url('assets/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ url('assets/plugins/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ url('assets/plugins/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ url('assets/plugins/flot/jquery.flot.stack.js') }}"></script>
<script src="{{ url('assets/plugins/flot/jquery.flot.crosshair.js') }}"></script>
<script src="{{ url('assets/scripts/app.js') }}"></script>
<script src="{{ url('assets/scripts/charts.js') }}"></script>      
<script>
  jQuery(document).ready(function() {       
     // initiate layout and plugins
     App.init();
     Charts.init();
     Charts.initCharts();
     Charts.initPieCharts();
  });
</script>
@stop