<div {{ $attributes->class(['nk-block']) }}>
    <div class="card">
        <div class="card-aside-wrap">
            <div class="card-inner card-inner-lg">
                <div class="nk-block-head nk-block-head-lg">
                    <div class="nk-block-between">
                        {{ $title }}
                        <div class="nk-block-head-content align-self-start d-lg-none">
                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1"
                               data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    {{ $slot }}
                </div>
            </div>
            <div
                class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg toggle-screen-lg"
                data-toggle-body="true" data-content="userAside" data-toggle-screen="lg"
                data-toggle-overlay="true">
                <div class="card-inner-group" data-simplebar="init">
                    <div class="simplebar-wrapper" style="margin: 0px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                     aria-label="scrollable content"
                                     style="height: auto; overflow: hidden;">
                                    <div class="simplebar-content" style="padding: 0px;">
                                        <div class="card-inner p-0">
                                            <ul class="link-list-menu">
                                                @if(auth()->user()->university_id === null)
                                                    <x-backend.settings.setting-link
                                                        route="{{ route('setting.school-create') }}">
                                                        <x-backend.icon icons="ni-bell-fill"/>
                                                        <span>Add university</span>
                                                    </x-backend.settings.setting-link>
                                                @endif
                                                <x-backend.settings.setting-link route="{{ route('setting.index') }}">
                                                    <x-backend.icon icons="ni-user-fill-c"/>
                                                    <span>Information de votre ecole</span>
                                                </x-backend.settings.setting-link>
                                                <li>
                                                    <a href="html/user-profile-notification.html">
                                                        <em class="icon ni ni-bell-fill"></em>
                                                        <span>Notifications</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="html/user-profile-activity.html">
                                                        <em class="icon ni ni-activity-round-fill"></em>
                                                        <span>Account Activity</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="html/user-profile-setting.html">
                                                        <em class="icon ni ni-lock-alt-fill"></em>
                                                        <span>Security Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: auto; height: 451px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
