<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light mb-5" style="box-shadow: 0 0 35px 0 rgb(154 161 171 / 15%)">

    {{-- 0 0 35px 0 rgb(154 161 171 / 15%) --}}
<!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" style="color: #4a4b53;" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <div class="btn-group" role="group">
                <a id="btnGroupDrop1" style="color: #4a4b53; margin-right: 40px;" type="button" class="dropdown-toggle text-capitalize" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="nav-icon fas fa-user-circle"></i> &nbsp; {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu mt-4" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item mb-1" href="{{ route('profile') }}"><i class="nav-icon fas fa-user"></i> &nbsp; My Profile</a>
                    <a class="dropdown-item mt-1" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="nav-icon fas fa-sign-out-alt"></i> &nbsp; Log Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </div>
                </div>
              </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
