<!-- BEGIN PAGE HEADER-->
 <div class="row">
		<div class="col-md-12">
			 <!-- BEGIN PAGE TITLE & BREADCRUMB-->
			 <h3 class="page-title">
					@yield('judul-halaman') 
					<small> @yield('deskripsi-halaman') </small>
			 </h3>
			 <ul class="page-breadcrumb breadcrumb">
					<li class="btn-group">
						 <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
						 <span>Actions</span> <i class="icon-angle-down"></i>
						 </button>
						 <ul class="dropdown-menu pull-right" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
						 </ul>
					</li>
					<li>
						 <i class="icon-home"></i>
						 <a href="index.html">Home</a> 
						 <i class="icon-angle-right"></i>
					</li>
					<li>
						 <a href="#">Layouts</a>
						 <i class="icon-angle-right"></i>
					</li>
					<li><a href="#">Blank Page</a></li>
			 </ul>
			 <!-- END PAGE TITLE & BREADCRUMB-->
		</div>
 </div>
 <!-- END PAGE HEADER-->