<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>
        @section('title')
        Personal Diablo Assistant
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="{{{ asset('assets/css/bootstrap.css') }}}" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="{{{ asset('assets/css/bootstrap-responsive.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/alertify.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/bootstrap-modal.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/main.css') }}}" rel="stylesheet">
    @section('styles')
    @show
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset( 'assets/js/jquery-1.9.1.min.js' )}}"></script>


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
                    <link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
                                   <link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Diablo 3</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li {{{ (Request::is('/') ? 'class="active"' : '') }}}><a href="{{{ URL::to('') }}}">Home</a></li>
              <li><a href="#about">Features</a></li>
            </ul>

            <div class="pull-right">
                <ul class="nav pull-right">
                  @if( Sentry::check() )
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="username">
                      <?php echo ( empty( Sentry::getUser()->first_name ) ) ? '{John Doe}' : Sentry::getUser()->first_name; ?></span>
                       <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="" data-toggle="modal" href="#modal" ><i class="icon-cog"></i> Preferences</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ URL::action('AuthController@getLogout') }}"><i class="icon-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    @else
                    <li class="dropdown">
                      <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
                      <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                        {{ Form::open(array('action' => 'AuthController@postLogin')) }}
                          <input style="margin-bottom: 15px;" type="text" placeholder="Email" id="email" name="email">
                          <input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
                          <input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">
                          <small>Don't have an account yet? <a href="{{ URL::action('AuthController@getRegister') }}">Create one.</a></small>
                        </form>
                      </div>
                    </li>
                    @endif
                </ul><!-- end nav -->
              </div><!-- end pull-right -->
              @if( Sentry::check() )
              <div class="btn-group pull-right">
                <a class="btn" href="{{ URL::to('dashboard') }}">
                  <i class="icon-user"></i> Dashboard</span>
                </a>
              </div>
              @endif

          </div><!--/.nav-collapse -->
        </div><!-- end container -->
      </div>
    </div>

    <div class="container">
      @include('layouts.notifications')
      @yield('content')
      @if( Sentry::check() )
        @include('layouts.modals')
      @endif
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="{{{ asset('assets/js/bootstrap/bootstrap.min.js') }}}"></script>
    <script src="{{{ asset('assets/js/bootstrap/bootstrap-ajax.js') }}}"></script>
    <script src="{{{ asset('assets/js/bootstrap/bootstrap-modalmanager.js') }}}"></script>
    <script src="{{{ asset('assets/js/bootstrap/bootstrap-modal.js') }}}"></script>
    <script src="{{{ asset('assets/js/alertify.min.js') }}}"></script>
    <script src="{{{ asset('assets/js/main.js') }}}"></script>
    <script type="text/javascript">
      $('.alert-warning').on('click', function() {
        $('.alert-warning').fadeOut();
      });
    </script>
    @section('scripts')
    @show

  </body>
</html>
