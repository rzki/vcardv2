<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="text-center sidebar-brand" href="{{ route('dashboard') }}">
            <span class="align-middle">{{ env('APP_NAME') }}</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-item {{ request()->routeIs('dashboard') ? 'active' : '' }}" wire:navigate>
                <a class="sidebar-link" href="{{ route('dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">{{ __('Dashboard') }}</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('users.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('users.index') }}" wire:navigate>
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">{{ __('Users') }}</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                    <i class="align-middle" data-feather="align-justify"></i> <span class="align-middle">Dropdown</span>
                </a>
                <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="">
                    <li class="sidebar-item active"><a class="sidebar-link" href="/">Analytics</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">E-Commerce</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Crypto</a></li>
                </ul>
            </li>
    </div>
</nav>
