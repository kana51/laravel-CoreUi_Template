<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ url('/home') }}">
        Header LOGO
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Settings</a>
        </li>
    </ul>

    <!-- md以下から表示 -->
    <ul class="nav navbar-nav d-lg-none d-xl-none d-md mx-2">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                SUB MENU
            </a>
            <div class="dropdown-menu dropdown-menu-left shadow mt-2">
                <a class="dropdown-item" href="#">
                    <i class="nav-icon icon-speedometer"></i> Dashboard
                </a>
                <div class="divider"></div>
                <a class="dropdown-item" href="#">
                    <i class="nav-icon icon-user"></i> Users
                </a>
                <div class="divider"></div>
                <div class="divider"></div>
                <a class="dropdown-item" href="#">
                    <i class="nav-icon icon-settings"></i> Settings
                </a>
                
            </div>
        </li>
    </ul>

    <ul class="nav navbar-nav ml-auto mr-3">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img class="img-avatar mx-1" src="img/avatars/6.jpg">
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow mt-2">
                <a class="dropdown-item">
                    {{ Auth::user()->name }}<br>
                    <small class="text-muted">{{ Auth::user()->email }}</small>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user"></i> Profile
                </a>
                <div class="divider"></div>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-key"></i> Password
                </a>
                <div class="divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</header>