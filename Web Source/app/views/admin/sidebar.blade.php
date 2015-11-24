<!-- BEGIN SIDEBAR -->
<div class="page-sidebar navbar-collapse collapse">
	 <!-- BEGIN SIDEBAR MENU -->        
	 <ul class="page-sidebar-menu">
			<li>
				 <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				 <div class="sidebar-toggler hidden-phone"></div>
				 <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			</li>
			<li>
				 <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
				 <form class="sidebar-search" action="extra_search.html" method="POST">
						<div class="form-container">
							 <div class="input-box">
									<a href="javascript:;" class="remove"></a>
									<input type="text" placeholder="Search..."/>
									<input type="button" class="submit" value=" "/>
							 </div>
						</div>
				 </form>
				 <!-- END RESPONSIVE QUICK SEARCH FORM -->
			</li>
			<li class="start  @yield('active-dashboard') ">
				 <a href="{{ url('admin/dashboard') }}">
				 <i class="icon-home"></i> 
				 <span class="title">Dashboard</span>
				 </a>
			</li>
			<li class="tooltips @yield('active-energy') " data-placement="left" data-original-title="Frontend&nbsp;Theme For&nbsp;Metronic&nbsp;Admin">
				 <a href="{{ url('admin/energy-management') }}">
				 <i class="icon-gift"></i> 
				 <span class="title">Energy Management</span>
				 </a>
			</li>
			<li class="tooltips @yield('active-temperature')" data-placement="left" data-original-title="Frontend&nbsp;Theme For&nbsp;Metronic&nbsp;Admin">
				 <a href="{{ url('admin/temperature-control') }}">
				 <i class="icon-gift"></i> 
				 <span class="title">Temperature Control</span>
				 </a>
			</li>
			<li class="tooltips @yield('active-security')" data-placement="left" data-original-title="Frontend&nbsp;Theme For&nbsp;Metronic&nbsp;Admin">
				 <a href="{{ url('admin/security-system') }}">
				 <i class="icon-gift"></i> 
				 <span class="title">Security System</span>
				 </a>
			</li>
			<li class="tooltips last @yield('active-surveillance') " data-placement="left" data-original-title="Frontend&nbsp;Theme For&nbsp;Metronic&nbsp;Admin">
				 <a href="{{ url('admin/surveillance-system') }}">
				 <i class="icon-gift"></i> 
				 <span class="title">Surveillance System</span>
				 </a>
			</li>
	 </ul>
	 <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->