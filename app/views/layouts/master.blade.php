<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

     <link href="/css/signin.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>The Blog of Barry Niemuth</title>
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="{{{ action('PostsController@index') }}}">Home</a>
          <a class="blog-nav-item" href="#">Portfolio</a>
          <a class="blog-nav-item" href="layouts/resume">Resume</a>
          <!-- <a class="blog-nav-item" href="#">Ongoing Projects</a> -->
          <a class="blog-nav-item" href="#">About</a>

          @if (Auth::check())
          <a class="blog-nav-item" href="{{{ action('HomeController@logout') }}}">Log Out ({{{ Auth::user()->email }}})</a>
          @else
          <a class="blog-nav-item" href="{{{ action('HomeController@showLogin') }}}">Log In</a>
          

          @endif
        </nav>
      </div>
    </div>

    @yield('header')

    <div class="container">

		  @if (Session::has('successMessage'))
		    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
		  @endif
		  @if (Session::has('errorMessage'))
		    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
		  @endif

      @yield('content')
     
<!--           <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="https://github.com/BNiemuth">GitHub</a></li>
              <li><a href="https://twitter.com/BNiemuth37">Twitter</a></li>
              <li><a href="https://linkedin.com/in/bniemuth">LinkedIn</a></li>
            </ol>
          </div> -->

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    @yield('bottomscript')

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50275415-1', 'barryniemuth.com');
  ga('send', 'pageview');

</script>

  </body>
</html>