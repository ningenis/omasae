<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->   
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->   
<script src="{{ url('assets/plugins/jquery-1.10.2.min.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{ url('assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}" type="text/javascript"></script>      
<script src="{{ url('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js') }}" type="text/javascript" ></script>
<script src="{{ url('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>  
<script src="{{ url('assets/plugins/jquery.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript" ></script>
<!-- END CORE PLUGINS -->
<!-- END JAVASCRIPTS -->
@yield('include-js')