<x-layout>
    <x-slot name="title">
        Chi Siamo | Edil Pro
    </x-slot>
    <main class="flex-grow-1">

        <section class="hero-section text-center py-5 bg-nero-opaco text-white">
            <div class="container">
                <h1 class="display-3 fw-bold uppercase-text">Solida Esperienza, <span class="text-sabbia">Posa Perfetta</span></h1>
                <p class="lead opacity-75">Dal 2026, trasformiamo superfici grezze in capolavori di design e durabilità.</p>
            </div>
        </section>

        <section class="py-5 bg-custom-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="fw-bold mb-4 text-nero-opaco">Perché scegliere Edil Pro?</h2>
                        <p>Non siamo solo posatori, siamo consulenti tecnici. La nostra missione è garantire che ogni pavimentazione, dal marciapiede condominiale alla resina per interni di lusso, sia eseguita seguendo i più alti standard della **normativa UNI**.</p>
                        <p>Dalla preparazione del <strong>massetto</strong> alla scelta della <strong>finitura</strong>, seguiamo ogni fase del cantiere per assicurarci che il risultato sia impeccabile e privo di vizi futuri.</p>
                        
                        <ul class="list-unstyled mt-4">
                            <li class="mb-2"><i class="bi bi-patch-check-fill text-sabbia me-2"></i> Sopralluoghi tecnici gratuiti e dettagliati</li>
                            <li class="mb-2"><i class="bi bi-patch-check-fill text-sabbia me-2"></i> Maestranze specializzate e aggiornate</li>
                            <li class="mb-2"><i class="bi bi-patch-check-fill text-sabbia me-2"></i> Rispetto rigoroso dei tempi di consegna</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('storage/images/edil_pro_logo.jpg')}}" alt="Cantiere Edile"
                            class="img-fluid rounded shadow-lg grayscale-filter">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-white">
            <div class="container text-center">
                <h2 class="fw-bold mb-2 text-nero-opaco">Il Nostro Staff Tecnico</h2>
                <p class="text-muted mb-5">Professionalità al servizio del tuo progetto.</p>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="team-card">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=300&h=300&auto=format&fit=crop" alt="Founder"
                                class="team-img mb-3 border-sabbia-thick">
                            <h5 class="fw-bold mb-0">Marco Rossi</h5>
                            <p class="text-sabbia small fw-bold text-uppercase">Fondatore & Geometra</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="team-card">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=300&h=300&auto=format&fit=crop" alt="Technical"
                                class="team-img mb-3 border-sabbia-thick">
                            <h5 class="fw-bold mb-0">Giulia Bianchi</h5>
                            <p class="text-sabbia small fw-bold text-uppercase">Specialista Resine & Design</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="team-card">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=300&h=300&auto=format&fit=crop" alt="Cantiere"
                                class="team-img mb-3 border-sabbia-thick">
                            <h5 class="fw-bold mb-0">Luca Verdi</h5>
                            <p class="text-sabbia small fw-bold text-uppercase">Capocantiere & Posa Esterni</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <x-slot name="extrajs">
        
    </x-slot>
</x-layout>