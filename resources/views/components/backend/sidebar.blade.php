<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="" class="logo-link nk-sidebar-logo">
                <img
                    class="logo-light logo-img"
                    src=""
                    srcset=" 2x"
                    alt="logo">
                <img
                    class="logo-dark logo-img"
                    src=""
                    srcset=" 2x"
                    alt="logo-dark">
                <img
                    class="logo-small logo-img logo-img-small"
                    src=""
                    srcset=" 2x"
                    alt="logo-small">
            </a>
        </div>
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
                    <li class="nk-menu-item">
                        <a href="" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-alt-fill"></em></span>
                            <span class="nk-menu-text">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
