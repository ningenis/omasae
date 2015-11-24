@extends('admin.master')

@section('active-surveillance')
active
@stop

@section('judul-halaman')
Surveillance
@stop

@section('deskripsi-halaman')
Modul CCTV rumah Anda
@stop

@section('konten')

<div class="tab-pane active" id="tab_2">
    <!-- BEGIN FILTER -->           
    <div class="filter-v1 margin-top-10">
       <ul class="mix-filter">
          <li class="filter active" data-filter="all">Semua</li>
          <li class="filter" data-filter="category_1">Kamera1</li>
          <li class="filter" data-filter="category_2">Kamera2 (OFF)</li>
          <li class="filter" data-filter="category_3">Kamera3 (OFF)</li>
          <li class="filter" data-filter="category_3 category_1">Kamera4 (OFF)</li>
       </ul>
       <div class="row mix-grid thumbnails" style="     ">
          <?php
              $dir    = 'D:\wamp\www\omasae\public\cctv\video\SKNKT\grabs';
              $files1 = scandir($dir);
              $filearray = rsort($files1);
              for ($i = 0; $i < 30; $i++){
          ?>
                 <div class="col-md-4 col-sm-6 mix category_1 mix_all" style="  display: block; opacity: 1;">
                     <div class="mix-inner">
                        <img class="img-responsive" src="{{ url('cctv/video/SKNKT/grabs/') }}<?php echo "/$files1[$i]";?>" alt="">


                        <div class="mix-details">
                           <h3>Cascusamus et iusto odio</h3>
                           <p>At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium.</p>
                           <a class="mix-link"><i class="icon-link"></i></a>
                           <a class="mix-preview fancybox-button" href="{{ url('assets/img/works/img1.jpg') }}" title="Project Name" data-rel="fancybox-button"><i class="icon-search"></i></a>
                        </div>
                     </div>
                  </div>
            <?php
              }
            ?>
          
       </div>
    </div>
    <!-- END FILTER --> 
 </div>

@stop

@section('include-css')
<link href="{{ url('assets/css/pages/portfolio.css') }}" rel="stylesheet" type="text/css"/>
@stop

@section('include-js')
<script type="text/javascript" src="{{ url('assets/plugins/jquery-mixitup/jquery.mixitup.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>
<script src="{{ url('assets/scripts/app.js') }}"></script>
<script src="{{ url('assets/scripts/portfolio.js') }}"></script>
<script>
      jQuery(document).ready(function() {    
         App.init();
         Portfolio.init();
      });
   </script>
@stop