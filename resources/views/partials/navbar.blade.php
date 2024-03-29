<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="container-xxl">
        <!-- Navbar brand -->
        <a href="{{ route('dashboard') }}" class="navbar-brand">
            <img src="../assets/img/logo.png" alt="Logo">
        </a>
        <!-- Navbar toggle button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#layout-navbar-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar collapse -->
        <div class="collapse navbar-collapse" id="layout-navbar-collapse">
            <!-- Navbar nav -->
            <ul class="navbar-nav">
                <li class="nav-item">
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <!-- User dropdown (optional) -->
                <li class="nav-item dropdown">
                    @auth
                        <a class="nav-link dropdown-toggle" href="#" id="userMenu" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                    @endauth
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </div>
                </li>
            </ul>
            <!-- Navbar nav end -->
        </div>
        <!-- Navbar collapse end -->
    </div>
</nav>
