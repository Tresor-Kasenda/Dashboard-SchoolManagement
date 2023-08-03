<x-learning title="Administration">
    <x-backend.container>
        <x-slot:brandcrumb>
            @if(auth()->user()->university_id === null)
                <x-backend.notification>
                    <x-backend.icon icons="ni-alert-circle"/>
                    Votre compte ne pas lier a une ecote veillez ajouter votre ecole.
                </x-backend.notification>
            @endif
            <x-backend.bradcrumb>
                <x-slot:title>
                    <h3 class="nk-block-title page-title">Dashboard</h3>
                    <div class="nk-block-des text-soft">
                        <p>Welcome back {{ auth()->user()->name }}.</p>
                    </div>
                </x-slot:title>
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu">
                        <em class="icon ni ni-more-v"></em>
                    </a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li>
                                <div class="drodown">
                                    <a href="#"
                                       class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                       data-bs-toggle="dropdown">
                                        <em class="d-none d-sm-inline icon ni ni-calender-date"></em>
                                        <span><span class="d-none d-md-inline">Last</span> 30 Days</span>
                                        <em class="dd-indc icon ni ni-chevron-right"></em>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#"><span>Last 30 Days</span></a></li>
                                            <li><a href="#"><span>Last 6 Months</span></a></li>
                                            <li><a href="#"><span>Last 1 Years</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nk-block-tools-opt">
                                <a href="#" class="btn btn-primary">
                                    <em class="icon ni ni-reports"></em>
                                    <span>Reports</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </x-backend.bradcrumb>
        </x-slot:brandcrumb>

    </x-backend.container>
</x-learning>
