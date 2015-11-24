@include('admin.head')
<!-- BEGIN BODY -->
<body class="page-header-fixed">
	 @include('admin.top-nav-menu')
	 <div class="clearfix"></div>
	 <!-- BEGIN CONTAINER -->   
	 <div class="page-container">
			@include('admin.sidebar')
			<!-- BEGIN PAGE -->
			<div class="page-content">
				 @include('admin.portlet-conf')
				 @include('admin.page-header')
				 <!-- BEGIN PAGE CONTENT-->
				 <div class="row">
						<div class="col-md-12">
							 @yield('konten')
						</div>
				 </div>
				 <!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE -->    
	 </div>
	 <!-- END CONTAINER -->
	 @include('admin.footer')
	 @include('admin.end-of-page-js')

	 @yield('include-halaman')
</body>
<!-- END BODY -->
</html>