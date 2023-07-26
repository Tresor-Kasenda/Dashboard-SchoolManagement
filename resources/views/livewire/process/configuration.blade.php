<div>
    <form class="nk-stepper stepper-init is-alter" wire:submit.prevent="UpdateUser" id="stepper-survey-v2">
        <div class="nk-stepper-content">
            <div class="nk-stepper-progress stepper-progress mb-4">
                <div class="stepper-progress-count mb-2"></div>
                <div class="progress progress-md">
                    <div class="progress-bar stepper-progress-bar"></div>
                </div>
            </div>
            <div class="nk-stepper-steps stepper-steps">
                <div class="nk-stepper-step">
                    <div class="nk-stepper-step-head mb-4">
                        <h5 class="title">Quel est votre situation?</h5>
                        <p>Selectionner la situation qui vous convients</p>
                    </div>
                    <ul class="row g-3">
                        <li class="col-6">
                            <div
                                class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                <input
                                    type="radio"
                                    class="custom-control-input"
                                    name="sv2-preference"
                                    wire:change="student"
                                    id="sv2-student"
                                    value="sv2-student"
                                    required>
                                <label class="custom-control-label" for="sv2-student">
                                    <span class="d-flex flex-column text-center py-1 py-sm-2">
                                        <span class="icon-wrap xl">
                                            <img class="img" src="{{ asset('images/account-secure.svg') }}" alt="">
                                        </span>
                                        <span class="lead-text mb-1 mt-3">Etudiant</span>
                                        <span class="sub-text">
                                            Tu veux apprendre et accquerir de l'experience
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </li>

                        <li class="col-6">
                            <div
                                class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                <input
                                    type="radio"
                                    class="custom-control-input"
                                    name="sv2-preference"
                                    wire:model="school"
                                    id="sv2-school"
                                    value="sv2-school"
                                    required>
                                <label class="custom-control-label" for="sv2-school">
                                    <span
                                        class="d-flex flex-column text-center py-1 py-sm-2">
                                        <span class="icon-wrap xl">
                                            <img class="img" src="{{ asset('images/profile.svg') }}" alt="">
                                        </span>
                                        <span class="lead-text mb-1 mt-3">Responsable d'une ecole</span>
                                        <span class="sub-text">
                                            Gerer votre ecole en toute simplicite
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="nk-stepper-step">
                    <div class="nk-stepper-step-head mb-4">
                        <h5 class="title">Formulaire d'etudiants ?</h5>
                        <p>Si tu es responsable d'une ecole veillez ingorer ce formulaire ?</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="domain">
                                    Selection le domaine qui vous convient
                                </label>
                                <div class="form-control-wrap">
                                    <select
                                        class="form-select js-select2"
                                        id="domain"
                                        name="domain"
                                        wire:model="domain"
                                        data-placeholder="Selectionner le domain"
                                    >
                                        <option value=""></option>
                                        @foreach($domains as $domain)
                                            <option value="{{ $domain->id ?? "" }}">
                                                {{ $domain->name ?? "" }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="contact">
                                    Numero de contact
                                </label>
                                <div class="form-control-wrap">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="contact"
                                        name="contact"
                                        wire:model="contact"
                                        placeholder="Numero de contact"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-stepper-step">
                    <div class="nk-stepper-step-head mb-4">
                        <h5 class="title">Si vous avez une ecole</h5>
                        <p>
                            Si vous avez une ecole veillez remplir ce formulaire
                        </p>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="name">
                                    Nom de l'ecole
                                </label>
                                <div class="form-control-wrap">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="name"
                                        wire:model="name"
                                        placeholder="Le nom de l'ecole"
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="address">
                                    Adresse de l'ecole
                                </label>
                                <div class="form-control-wrap">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="address"
                                        name="address"
                                        wire:model="address"
                                        placeholder="L'adresse de l'ecole"
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="email">
                                    Adresse email de l'ecole
                                </label>
                                <div class="form-control-wrap">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        wire:model="email"
                                        placeholder="Adresse email de l'ecole"
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="phone">
                                    Numero de telephone de l'ecole
                                </label>
                                <div class="form-control-wrap">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="phone"
                                        name="phone"
                                        wire:model="phone"
                                        placeholder="Numero de telephone de l'ecole"
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label">Upload Documents</label>
                                <livewire:upload-image-component
                                    wire:model="images"
                                    multiple
                                    allowImagePreview
                                    imagePreviewMaxHeight="200"
                                    allowFileTypeValidation
                                    acceptedFileTypes="['image/png', 'image/jpg', 'image/jpeg']"
                                    allowFileSizeValidation
                                    maxFileSize="4mb"
                                />

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                <li class="step-prev">
                    <button class="btn btn-dim btn-primary">Back</button>
                </li>
                <li class="step-next">
                    <button class="btn btn-primary">Continue</button>
                </li>
                <li class="step-submit">
                    <button class="btn btn-primary">Submit</button>
                </li>
            </ul>
        </div>
    </form>
</div>


