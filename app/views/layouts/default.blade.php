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
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href="{{{ asset('assets/css/bootstrap/bootstrap.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/bootstrap/bootstrap-responsive.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/bootstrap/bootstrap-modal.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/bootstrap/bootstrap-editable.css') }}}" rel="stylesheet">

    <link href="{{{ asset('assets/css/vendor/alertify.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/vendor/m-buttons.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/vendor/entypo16.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/vendor/m-forms.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/vendor/tablecloth.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/vendor/jquery.qtip.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/vendor/select2.css') }}}" rel="stylesheet">
    <!-- <link href="{{{ asset('assets/css/vendor/superslides.css') }}}" rel="stylesheet"> -->
    <link href="{{{ asset('assets/css/bootstrap/select2-bootstrap.css') }}}" rel="stylesheet">
    <link href="{{{ asset('assets/css/main.css') }}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://us.battle.net/d3/static/css/tooltips.css">

    @section('styles')
    @show
    <script src="http://us.battle.net/d3/static/js/tooltips.js"></script>
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
    @yield('slider')
    <div class="container">
        @include('layouts.notifications')
        @yield('content')
        @if( Sentry::check() )
            @include('layouts.modals')
        @endif
    </div> <!-- /container -->
    @yield('cta')
    <div id="footer">
      <div class="container">
        <p class="muted credit">© Personal Diablo Assistant</p>
      </div>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="{{{ asset('assets/js/bootstrap/bootstrap.min.js') }}}"></script>
    <script src="{{{ asset('assets/js/bootstrap/bootstrap-ajax.js') }}}"></script>
    <script src="{{{ asset('assets/js/bootstrap/bootstrap-modalmanager.js') }}}"></script>
    <script src="{{{ asset('assets/js/bootstrap/twitter-bootstrap-hover-dropdown.min.js') }}}"></script>
    <script src="{{{ asset('assets/js/bootstrap/bootstrap-modal.js') }}}"></script>
    <script src="{{{ asset('assets/js/bootstrap/jquery.metadata.js') }}}"></script>
    <script src="{{{ asset('assets/js/bootstrap/jquery.tablecloth.js') }}}"></script>
    <script src="{{{ asset('assets/js/bootstrap/jquery.tablesorter.min.js') }}}"></script>
    <script src="{{{ asset('assets/js/bootstrap/bootstrap-editable.min.js') }}}"></script>
    <script src="{{{ asset('assets/js/vendor/alertify.min.js') }}}"></script>
    <script src="{{{ asset('assets/js/vendor/jquery.superslides.min.js') }}}"></script>
    <script src="{{{ asset('assets/js/vendor/unslider.min.js') }}}"></script>
    <script src="{{{ asset('assets/js/vendor/jquery.qtip.js') }}}"></script>
    <script src="{{{ asset('assets/js/vendor/select2.js') }}}"></script>
    <script src="{{{ asset('assets/js/main.js') }}}"></script>
    <script type="text/javascript">
    $(document).ready(function()
    {
        $('body').tooltip({
          selector: "a[data-toggle=tooltip]",
          container: 'body'
        });
    });
    </script>
    @section('scripts')
    @show

  </body>
</html>
