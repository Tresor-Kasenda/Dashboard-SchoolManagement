<x-learning title="Ajouter une ecole">
    <x-backend.container>
        <x-backend.settings.setting-container>
            <x-slot:title>
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Cree votre ecole</h4>
                </div>
            </x-slot:title>

            <div class="nk-data data-list">
                <livewire:admins.schools.store-school/>
            </div>
        </x-backend.settings.setting-container>
    </x-backend.container>
</x-learning>
