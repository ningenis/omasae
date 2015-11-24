@extends('admin.master')

@section('active-dashboard')
active
@stop

@section('judul-halaman')
Dashboard
@stop

@section('deskripsi-halaman')
Overview status bangunan
@stop

@section('konten')

<div class="portlet box red">
  <div class="portlet-title">
     <div class="caption"><i class="icon-reorder"></i>Interactive Chart</div>
     <div class="tools">
        <a href="javascript:;" class="collapse"></a>
        <a href="#portlet-config" data-toggle="modal" class="config"></a>
        <a href="javascript:;" class="reload"></a>
        <a href="javascript:;" class="remove"></a>
     </div>
  </div>
  <div class="portlet-body">
     <div id="chart_2" class="chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="1064" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1064px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 66px; top: 285px; left: 56px; text-align: center;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 66px; top: 285px; left: 127px; text-align: center;">4</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 66px; top: 285px; left: 198px; text-align: center;">6</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 66px; top: 285px; left: 269px; text-align: center;">8</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 66px; top: 285px; left: 338px; text-align: center;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 66px; top: 285px; left: 409px; text-align: center;">12</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 66px; top: 285px; left: 480px; text-align: center;">14</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 66px; top: 285px; left: 551px; text-align: center;">16</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 66px; top: 285px; left: 623px; text-align: center;">18</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 66px; top: 285px; left: 694px; text-align: center;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 66px; top: 285px; left: 765px; text-align: center;">22</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 66px; top: 285px; left: 836px; text-align: center;">24</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 66px; top: 285px; left: 908px; text-align: center;">26</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 66px; top: 285px; left: 979px; text-align: center;">28</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 66px; top: 285px; left: 1050px; text-align: center;">30</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 273px; left: 12px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 252px; left: 6px; text-align: right;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 231px; left: 6px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 210px; left: 6px; text-align: right;">30</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 189px; left: 6px; text-align: right;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 168px; left: 6px; text-align: right;">50</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 147px; left: 6px; text-align: right;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 126px; left: 6px; text-align: right;">70</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 105px; left: 6px; text-align: right;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 84px; left: 6px; text-align: right;">90</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 63px; left: 0px; text-align: right;">100</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 42px; left: 0px; text-align: right;">110</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 21px; left: 0px; text-align: right;">120</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 0px; text-align: right;">130</div></div></div><canvas class="flot-overlay" width="1064" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1064px; height: 300px;"></canvas><div class="legend"><div style="position: absolute; width: 86px; height: 34px; top: 13px; right: 13px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:13px;right:13px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(209,38,16);overflow:hidden"></div></div></td><td class="legendLabel">Unique Visits</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(55,183,243);overflow:hidden"></div></div></td><td class="legendLabel">Page Views</td></tr></tbody></table></div></div>
  </div>
</div>

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