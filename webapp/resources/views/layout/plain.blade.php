@include('general.headers.plain-header')
<body>
  <nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">STATION CONNECT</a>
    </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="auth/login">Log In</a></li>
        <li><a href="auth/register" class="btn-join">Get Started</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	@yield('content')
</body>
@yield('javascript')
</html>