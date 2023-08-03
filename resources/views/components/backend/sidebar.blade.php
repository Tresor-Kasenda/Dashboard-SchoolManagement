<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <x-backend.logo route="{{ route('dashboard') }}"/>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu">
                <em class="icon ni ni-arrow-left"></em>
            </a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu">
                <em class="icon ni ni-menu"></em>
            </a>
        </div>
    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <x-backend.link route="{{ route('dashboard') }}">
                        <x-backend.icon icons=" ni ni-dashboard-fill"/>
                        <span class="nk-menu-text">Dashboard</span>
                    </x-backend.link>

                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Parametre</h6>
                    </li>

                    <x-backend.link route="{{ route('setting.index') }}">
                        <x-backend.icon icons=" ni ni-setting-alt-fill"/>
                        <span class="nk-menu-text">Parametre</span>
                    </x-backend.link>
                </ul>
            </div>
        </div>
    </div>
</div>
