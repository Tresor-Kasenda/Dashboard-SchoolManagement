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
                <livewire:process.configuration/>
            </div>
        </div>
    </div>
</x-app-layout>
