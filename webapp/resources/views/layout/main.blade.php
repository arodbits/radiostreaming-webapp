@include('general.headers.plain-header')
<body id='page-top'>
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="/">Station Connect</a>
			</div>
			@yield('menu')
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header>
		<div class="header-content">
			<div class="header-content-inner">
				@yield('content')
			</div>
		</div>
	</header>
	@yield('sections')
</body>
@yield('javascript')
</html>