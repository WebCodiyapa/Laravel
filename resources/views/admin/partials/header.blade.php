<header class="main-header">

    <nav class="navbar navbar-static-top">
        <div class="">

            <a class="navbar-brand" href="{{ url('/admin') }}">
                <img src="{{url('images/LOGO.png')}}">
            </a>
        </div>
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <div class="header-prof">
                        <a href="#" class="dropdown" data-toggle="dropdown">
                            @if (Auth::user()->details != NULL)
                                <img src="{{ Auth::user()->details->image_path }}" class="user-image"
                                     alt="">
                            @else
                                <img src="http://placehold.it/160x160" class="user-image" alt="User Image">
                            @endif
                            <span class="hidden-xs">{{ Auth::user()->lastname }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                @if (Auth::user()->details != NULL)
                                    <img src="{{ Auth::user()->details->image_path }}" class="img-circle"
                                         alt="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }} profile picture">
                                @else
                                    <img src="http://placehold.it/160x160" class="img-circle" alt="User Image">
                                @endif
                                <p>
                                    {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}

                                </p>
                            </li>

                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href=""
                                       class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="header-logout">
                        <a href=""><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                    </div>

                </li>

            </ul>
        </div>
    </nav>
</header>
