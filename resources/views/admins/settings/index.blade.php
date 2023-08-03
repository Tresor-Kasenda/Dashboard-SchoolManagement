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
                    <h4 class="nk-block-title">Information de votre ecole</h4>
                </div>
            </x-slot:title>

            <div class="nk-data data-list">
                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                    <div class="data-col">
                        <span class="data-label">Nom de votre ecole</span>
                        <span class="data-value">{{ auth()->user()->university->name ?? "" }}</span>
                    </div>
                </div>
                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                    <div class="data-col">
                        <span class="data-label">Email</span>
                        <span class="data-value">{{ auth()->user()->university->email ?? "" }}</span>
                    </div>
                </div>
                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                    <div class="data-col">
                        <span class="data-label">Numero de telephone</span>
                        <span class="data-value">{{ auth()->user()->university->phone ?? "" }}</span>
                    </div>
                </div>
                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                    <div class="data-col">
                        <span class="data-label">Initials</span>
                        <span class="data-value">{{ auth()->user()->university->initials ?? "" }}</span>
                    </div>
                </div>
                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit"
                     data-tab-target="#address">
                    <div class="data-col">
                        <span class="data-label">Address</span>
                        <span class="data-value">{{ auth()->user()->university->address ?? "" }}</span>
                    </div>
                </div>
            </div>
        </x-backend.settings.setting-container>
    </x-backend.container>
</x-learning>
