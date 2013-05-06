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
    <link href="{{{ asset('assets/css/bootstrap-responsive.css') }}}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href="{{{ asset('assets/css/alertify.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/bootstrap-modal.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/m-buttons.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/entypo16.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/m-forms.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/tablecloth.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/main.css') }}}" rel="stylesheet">
    @section('styles')
    @show
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset( 'assets/js/jquery-1.9.1.min.js' )}}"></script>


    <!--[if IE 7]>
    <link href="{{{ asset('assets/css/entypo16-ie7.css') }}}" rel="stylesheet"><![endif]-->
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

    @include('layouts.navigation')

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
    <script src="{{{ asset('assets/js/bootstrap/twitter-bootstrap-hover-dropdown.min.js') }}}"></script>
    <script src="{{{ asset('assets/js/bootstrap/bootstrap-modal.js') }}}"></script>
    <script src="{{{ asset('assets/js/alertify.min.js') }}}"></script>
    <script src="{{{ asset('assets/js/unslider.min.js') }}}"></script>
    <script src="{{{ asset('assets/js/bootstrap/jquery.metadata.js') }}}"></script>
    <script src="{{{ asset('assets/js/bootstrap/jquery.tablecloth.js') }}}"></script>
    <script src="{{{ asset('assets/js/bootstrap/jquery.tablesorter.min.js') }}}"></script>
    <script src="{{{ asset('assets/js/main.js') }}}"></script>
    <script type="text/javascript">
      $('.alert-warning').on('click', function() {
        $('.alert-warning').fadeOut();
      });
        $('body').tooltip({
          selector: "a[data-toggle=tooltip]",
          container: 'body'
        })
      // $('a[data-toggle="tooltip"]').on('mouseenter', function() {
      //   console.log(this);
      //   this.tooltip('toggle');
      // });
    </script>
    @section('scripts')
    @show

  </body>
</html>
