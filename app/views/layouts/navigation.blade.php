<div class="navbar navbar-inverse navbar-top">
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
                        <li class="dropdown {{ (Request::is('character/profile/*') ? 'active' : '') }}">
                            <a href="#" class="dropdown-toggle {{ (Request::is('character/profile/*') ? 'active' : '') }}" data-toggle="dropdown" data-hover="dropdown">Characters<b class="caret"></b></a>
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
            <div class="pull-right">
                <ul class="nav pull-right">
                    @if( Sentry::check() )
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                            <span class="username">
                            <?php echo ( empty( Sentry::getUser()->first_name ) ) ? '{John Doe}' : Sentry::getUser()->first_name; ?></span>
                            <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a class="" data-toggle="modal" href="#modal" ><i class="icon-cog"></i> Preferences</a></li>
                                <li><a href="{{ URL::action('AuthController@getLogout') }}"><i class="icon-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    @else
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown">Sign In <strong class="caret"></strong></a>
                            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                                {{ Form::open(array('action' => 'AuthController@postLogin')) }}
                                    <input style="margin-bottom: 15px;" type="text" placeholder="Email" id="email" name="email">
                                    <input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
                                    <input class="m-btn blue rnd btn-block" type="submit" id="sign-in" value="Sign In">
                                    <small>Don't have an account yet? <a href="{{ URL::action('AuthController@getRegister') }}">Create one.</a></small>
                                </form>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
