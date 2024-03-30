<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="menu-header">
        <!-- Logo -->
        <a href="{{ route('dashboard') }}" class="menu-logo">
            <img src="../assets/img/logo.png" alt="Logo">
        </a>
    </div>
    <div class="menu-content">
        <!-- Menu items -->
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="bx bx-home"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile.edit', ['id' => auth()->user()->id]) }}">
                    <i class="bx bx-user"></i>
                    <span class="menu-title">Profile</span>
                </a>
            </li>

            @if (auth()->user()->role == 'Administrator')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('modules.index') }}">
                    <i class="bx bx-box"></i>
                    <span class="menu-title">{{ __('Modules') }}</span>
                </a>
            </li>
            @endif
        </ul>
    </div>
</aside>
