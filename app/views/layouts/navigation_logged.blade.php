<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Personal Diablo Assistant</a>
            <div class="nav-collapse collapse">
                @if( Sentry::check() )
                <ul class="nav">
                    <li {{ (Request::is('dashboard') ? 'class=active' : '') }}><a href="{{ URL::to('dashboard') }}">Dashboard</a></li>
                    @if ( isset($characters) )
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle {{ (Request::is('character') ? 'class=active' : '') }}" data-toggle="dropdown" data-hover="dropdown">Characters<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                @foreach($characters as $character)
                                    <li><a class="" href="{{ URL::action('CharacterController@getProfile', [$character->id]) }}" >{{ $character->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                    <li {{ (Request::is('ahtool') ? 'class=active' : '') }}><a href="{{ URL::to('ah') }}">AH Tools</a></li>
                </ul>
                @else
                    <ul class="nav">
                        <li {{{ (Request::is('/') ? 'class=active' : '') }}}><a href="{{{ URL::to('') }}}">Home</a></li>
                        <li><a href="#about">Features</a></li>
                    </ul>
                @endif
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
