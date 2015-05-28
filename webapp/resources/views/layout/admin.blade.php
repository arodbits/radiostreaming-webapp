@include('general.headers.admin-header')
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-toggle"></span>
			</button>
			<a class="navbar-brand text-danger" href="/"><span class="text-danger"> Station Connect</span></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				
				<li class="dropdown">
					<a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
						<i class="glyphicon glyphicon-user"></i> {{Auth::user()->name}} <span class="caret"></span></a>
						<ul id="g-account-menu" class="dropdown-menu" role="menu">
							<li><a href="#">My Profile</a></li>
							<li><a href="/auth/logout"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /container -->
	</div>
	<!-- Main -->
	<div class="container">
		
		<!-- upper section -->
		<div class="row">
			<div class="col-sm-3">
				<!-- left -->
				<h3><i class="glyphicon glyphicon-briefcase"></i> Options</h3>
				<hr>
				
				<ul class="nav nav-stacked">
					<li><a href="/radio/{{$radioId}}"><i class="glyphicon glyphicon-flash"></i>My Radio</a></li>
					<li><a href="/promotions"><i class="glyphicon glyphicon-link"></i>Promotions</a></li>
				</ul>
				
			</div><!-- /span-3 -->
			<div class="col-sm-9">
				
				<!-- column 2 -->   
				
				@yield('title') 
				
				
				@yield('dashboard')
				
				
			</div>
		</div>
	</div>
	<!-- script references -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="{{asset('theme/admin/js/bootstrap.min.js')}}"></script>
	</body>
</html>