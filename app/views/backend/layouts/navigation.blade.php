<div class="navbar navbar-inverse navbar-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="{{URL::to('/')}}">Personal Diablo Assistant</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li{{ (Request::is('admin') ? ' class="active"' : '') }}><a href="{{ URL::to('admin') }}"><i class="icon-home icon-white"></i> Home</a></li>
                    <li{{ (Request::is('admin/characters') ? ' class="active"' : '') }}><a href="{{ URL::to('admin/characters') }}"><i class="icon-user icon-white"></i> Characters</a></li>
                    <li class="dropdown{{ (Request::is('admin/users*') ? ' active' : '') }}">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="{{ URL::to('admin/users') }}" data-hover="dropdown">
                            <i class="icon-user icon-white"></i> Users <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li{{ (Request::is('admin/users*') ? ' class="active"' : '') }}><a href="{{ URL::to('admin/users') }}"><i class="icon-user"></i> Users</a></li>
                            <li{{ (Request::is('admin/groups*') ? ' class="active"' : '') }}><a href="{{ URL::to('admin/groups') }}"><i class="icon-user"></i> Groups</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
            <div class="pull-right">
                <ul class="nav pull-right">
                    <li><a href="{{ URL::to('/') }}">View Homepage</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                        <span class="username">
                        <?php echo ( empty( Sentry::getUser()->first_name ) ) ? '{John Doe}' : Sentry::getUser()->first_name; ?></span>
                        <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="" data-toggle="modal" href="#modal" ><i class="icon-cog"></i> Preferences</a></li>
                            <li><a href="{{ URL::action('AuthController@getLogout') }}"><i class="icon-off"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
