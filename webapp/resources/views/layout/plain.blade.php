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
      <a class="navbar-brand" href="/">STATION CONNECT</a>
    </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="{{MenuHelper::isActive('auth/login')}}"><a href="/auth/login">Log In</a></li>
        <li class="{{MenuHelper::isActive('auth/register')}}"><a href="/auth/register">Get Started</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	@yield('content')
</body>
<script type="text/javascript" src="/theme/startbootstrap-creative/js/jquery.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
@yield('javascript')
</html>