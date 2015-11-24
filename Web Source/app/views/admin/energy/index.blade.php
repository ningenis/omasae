@extends('admin.master')

@section('active-energy')
active
@stop

@section('judul-halaman')
Energy
@stop

@section('deskripsi-halaman')
Modul energi bangunan Anda
@stop

@section('konten')
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
   <div class="dashboard-stat purple">
      <div class="visual">
         <i class="icon-globe"></i>
      </div>
      <div class="details">
         <div class="number">ON</div>
         <div class="desc">Relay 1 (Lampu)</div>
      </div>
      <a class="more" href="#">
      View more <i class="m-icon-swapright m-icon-white"></i>
      </a>                 
   </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
   <div class="dashboard-stat purple">
      <div class="visual">
         <i class="icon-globe"></i>
      </div>
      <div class="details">
         <div class="number">ON</div>
         <div class="desc">Relay 2 (Musik)</div>
      </div>
      <a class="more" href="#">
      View more <i class="m-icon-swapright m-icon-white"></i>
      </a>                 
   </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
   <div class="dashboard-stat purple">
      <div class="visual">
         <i class="icon-globe"></i>
      </div>
      <div class="details">
         <div class="number">OFF</div>
         <div class="desc">Relay 3 (Kipas)</div>
      </div>
      <a class="more" href="#">
      View more <i class="m-icon-swapright m-icon-white"></i>
      </a>                 
   </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
   <div class="dashboard-stat purple">
      <div class="visual">
         <i class="icon-globe"></i>
      </div>
      <div class="details">
         <div class="number">OFF</div>
         <div class="desc">Relay 4 (TV)</div>
      </div>
      <a class="more" href="#">
      View more <i class="m-icon-swapright m-icon-white"></i>
      </a>                 
   </div>
</div>
@stop