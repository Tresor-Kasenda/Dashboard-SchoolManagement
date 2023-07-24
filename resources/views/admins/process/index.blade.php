<x-app-layout title="Configuration">
    <div class="nk-split nk-split-page nk-split-lg">
        <div class="nk-split-content bg-dark is-dark p-5 d-flex justify-between flex-column text-center">
            <a href="{{ route('dashboard') }}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="" srcset=" 2x"
                     alt="logo">
                <img class="logo-dark logo-img" src=""
                     srcset=" 2x" alt="logo-dark">
            </a>
            <div class="text-block wide-xs mx-auto">
                <h3 class="text-white">Procedure de configuration</h3>
                <p>
                    Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu,
                    facete detracto patrioque an per, lucilius pertinacia eu vel.
                </p>
                <img class="nk-survey-gfx mt-5 w-60" src="{{ asset('images/gfx-a.png') }}" alt="">
            </div>
            <p>&copy; {{ now()->format('Y') }} {{ config('app.name') }} Management systems. </p>
        </div>
        <div
            class="nk-split-content nk-split-stretch bg-white p-5 d-flex justify-center align-center flex-column">
            <div class="wide-xs-fix">
                <form class="nk-stepper stepper-init is-alter" action="#" id="stepper-survey-v2">
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
                                                id="sv2-preference-fedev"
                                                value="sv2-preference-fedev"
                                                required>
                                            <label class="custom-control-label" for="sv2-preference-fedev">
                                                <span
                                                    class="d-flex flex-column text-center py-1 py-sm-2">
                                                    <span class="icon-wrap xl">
                                                        <img class="img" src=""
                                                             alt="">
                                                    </span>
                                                    <span class="lead-text mb-1 mt-3">Etudiant</span>
                                                    <span class="sub-text">Postea democritum mnesarchum ne nam, ad vim aperiri tractatos.</span>
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
                                                id="sv2-preference-uxdis"
                                                value="sv2-preference-uxdis"
                                                required>
                                            <label class="custom-control-label" for="sv2-preference-uxdis">
                                                <span
                                                    class="d-flex flex-column text-center py-1 py-sm-2">
                                                    <span class="icon-wrap xl">
                                                        <img class="img"
                                                             src=""
                                                             alt="">
                                                    </span>
                                                    <span class="lead-text mb-1 mt-3">Prorietaire d'une ecole</span>
                                                    <span class="sub-text">Prioritize and solve your tasks in short time cycles.</span>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="nk-stepper-step">
                                <div class="nk-stepper-step-head mb-4">
                                    <h5 class="title">How much time you work ?</h5>
                                    <p>Tation argumentum et usu, dicit viderer evertitur te has</p>
                                </div>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <ul class="custom-control-group flex-column align-start">
                                                    <li>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input"
                                                                   name="sv2-time-avilability"
                                                                   id="sv2-time-avilability-full" required>
                                                            <label class="custom-control-label"
                                                                   for="sv2-time-avilability-full">Full
                                                                time</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input"
                                                                   name="sv2-time-avilability"
                                                                   id="sv2-time-avilability-part" required>
                                                            <label class="custom-control-label"
                                                                   for="sv2-time-avilability-part">Part
                                                                time</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input"
                                                                   name="sv2-time-avilability"
                                                                   id="sv2-time-avilability-freelance"
                                                                   required>
                                                            <label class="custom-control-label"
                                                                   for="sv2-time-avilability-freelance">Freelance
                                                                / Contract</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-stepper-step">
                                <div class="nk-stepper-step-head mb-4">
                                    <h5 class="title">what are your expected benefits ?</h5>
                                    <p>Tation argumentum et usu, dicit viderer evertitur te has</p>
                                </div>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="sv2-select-position">Select
                                                Position</label>
                                            <div class="form-control-wrap">
                                                <select class="form-select js-select2"
                                                        id="sv2-select-position" name="sv2-select-position"
                                                        data-placeholder="Select Position" required>
                                                    <option value=""></option>
                                                    <option value="junior-developer">Junior Developer
                                                    </option>
                                                    <option value="mid-level-developer">Mid Level
                                                        Developer
                                                    </option>
                                                    <option value="senior-level-developer">Senior
                                                        Developer
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="sv1-asking-salary">Asking Salary
                                                (monthly)</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control"
                                                       id="sv1-asking-salary" name="sv1-asking-salary"
                                                       placeholder="eg:$1200" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Workplace preference ? </label>
                                            <div class="form-control-wrap">
                                                <ul class="custom-control-group">
                                                    <li>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input"
                                                                   name="sv2-work-place"
                                                                   id="sv2-work-place-office"
                                                                   value="in-ofice" required>
                                                            <label class="custom-control-label"
                                                                   for="sv2-work-place-office">In
                                                                Office</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input"
                                                                   name="sv2-work-place"
                                                                   id="sv2-work-place-remote"
                                                                   value="remote-home" required>
                                                            <label class="custom-control-label"
                                                                   for="sv2-work-place-remote">Remote / Home
                                                                office</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-stepper-step">
                                <div class="nk-stepper-step-head mb-4">
                                    <h5 class="title">Lets learn about yourself</h5>
                                    <p>Tation argumentum et usu, dicit viderer evertitur te has</p>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="sv1-first-name">First
                                                Name</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="sv1-first-name"
                                                       name="sv1-first-name" placeholder="First name"
                                                       required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="sv1-last-name">Last Name</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="sv1-last-name"
                                                       name="sv1-last-name" placeholder="Last name"
                                                       required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="sv1-email-address">Email
                                                Address</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control"
                                                       id="sv1-email-address" name="sv1-email-address"
                                                       placeholder="Email Address" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Gender </label>
                                            <div class="form-control-wrap">
                                                <ul class="custom-control-group">
                                                    <li>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input"
                                                                   name="sv2-gender" id="sv2-gender-male"
                                                                   value="gender-male" required>
                                                            <label class="custom-control-label"
                                                                   for="sv2-gender-male">Male</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input"
                                                                   name="sv2-gender" id="sv2-gender-female"
                                                                   value="gender-female" required>
                                                            <label class="custom-control-label"
                                                                   for="sv2-gender-female">Female</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Upload Documents</label>
                                            <span class="form-note mb-2">( Files accepted: .pdf. doc/docx - Max file size: 190k for demo limit )</span>
                                            <div class="form-control-wrap">
                                                <div class="form-file">
                                                    <input type="file" multiple class="form-file-input"
                                                           id="sv2-file-attachment">
                                                    <label class="form-file-label"
                                                           for="sv2-file-attachment">Choose
                                                        files....</label>
                                                </div>
                                            </div>
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
        </div>
    </div>
</x-app-layout>
