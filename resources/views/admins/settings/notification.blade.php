<x-learning title="Parametre">
    <x-backend.container>
        @if(auth()->user()->university_id === null)
            <x-backend.notification>
                <x-backend.icon icons="ni-alert-circle"/>
                Votre compte administrateur ne pas lier a une ecole veillez ajouter votre ecole.
            </x-backend.notification>
        @endif
        <x-backend.settings.setting-container>
            <x-slot:title>
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Notification Settings</h4>
                </div>
            </x-slot:title>

            <div class="nk-block-head-content">
                <h6>Security Alerts</h6>
                <p>You will get only those email notification what you want.</p>
            </div>

            <div class="gy-3 mt-4">
                <div class="g-item">
                    <div class="custom-control custom-switch checked">
                        <input type="checkbox" class="custom-control-input" checked="" id="unusual-activity">
                        <label class="custom-control-label" for="unusual-activity">
                            Email me whenever encounter unusual activity
                        </label>
                    </div>
                </div>
                <div class="g-item">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="new-browser">
                        <label class="custom-control-label" for="new-browser">
                            Email me if new browser is used to sign in
                        </label>
                    </div>
                </div>
            </div>
        </x-backend.settings.setting-container>
    </x-backend.container>
</x-learning>
