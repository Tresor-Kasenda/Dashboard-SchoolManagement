<div>
    <form method="post" wire:submit.prevent="save">
        @csrf
        <div class="form-group">
            <x-backend.forms.label for="name" :value="__('Nom de l\'ecole')"/>
            <x-backend.forms.input-text
                id="name"
                name="name"
                placeholder="Entrer le nom de l'ecole"
                :value="old('name')"
                required
                wire:model.defer="form.name"
                autocomplete="name"/>
            @error('name') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <x-backend.forms.label for="email" :value="__('Email address')"/>
            <x-backend.forms.input-text
                id="email"
                name="email"
                placeholder="Email address"
                :value="old('email')"
                required
                wire:model.defer="form.email"
                autocomplete="email"/>
            @error('email') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <x-backend.forms.label for="phone" :value="__('Numero Telephone')"/>
            <x-backend.forms.input-text
                id="phone"
                name="phone"
                placeholder="Numero Telephone"
                :value="old('phone')"
                required
                wire:model.defer="form.phone"
                autocomplete="phone"/>
            @error('phone') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <x-backend.forms.label for="address" :value="__('L\'addresse de l\'ecole')"/>
            <x-backend.forms.input-text
                id="address"
                name="address"
                placeholder="L'addresse de l'ecole"
                :value="old('address')"
                required
                wire:model.defer="form.address"
                autocomplete="address"/>
            @error('address') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <x-backend.forms.label for="initials" :value="__('Initial de l\'ecole')"/>
            <x-backend.forms.input-text
                id="initials"
                name="initials"
                placeholder="Initial de l'ecole"
                :value="old('initials')"
                required
                wire:model.defer="form.initials"
                autocomplete="initials"/>
            @error('initials') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <x-backend.forms.label for="code" :value="__('Code de l\'ecole')"/>
            <x-backend.forms.input-text
                id="code"
                name="code"
                placeholder="Code de l'ecole"
                :value="old('code')"
                required
                wire:model.defer="form.code"
                autocomplete="code"/>
            @error('code') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <x-backend.forms.label for="website" :value="__('Site web')"/>
            <x-backend.forms.input-text
                id="website"
                name="website"
                placeholder="https://example.com"
                :value="old('website')"
                required
                wire:model.defer="form.website"
                autocomplete="website"/>
            @error('website') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
        </div>
        <div class="form-group" wire:loading.remove>
            <button type="submit" class="btn btn-outline-primary" wire:loading.attr="disabled">
                <x-backend.icon icons="ni-save" wire:ignore/>
                <span>Soumettre</span>
            </button>
        </div>

        <span wire:loading class="text-sm">Saving...</span>
    </form>
</div>
