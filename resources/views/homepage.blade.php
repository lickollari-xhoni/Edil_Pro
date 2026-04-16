<x-layout>
    <x-slot name="title">Edil Pro | Eccellenza nelle Pavimentazioni Esterne</x-slot>

    <header class="hero-edil d-flex align-items-center" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                url('{{ asset('storage/images/pavimento_home.jpg') }}');">
        <div class="container text-center">
            <h6 class="text-sabbia fw-bold text-uppercase tracking-widest mb-3">Precisione Artigianale</h6>
            <h1 class="display-1 fw-bold text-white mb-4">L'Arte della <span class="text-sabbia">Posa</span></h1>
            <p class="lead text-white mx-auto mb-5 opacity-75" style="max-width: 700px;">
                Dalle fondamenta alla finitura: realizziamo pavimentazioni esterne progettate per durare una vita.
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="/contacts" class="btn-custom-primary btn-lg px-5">Richiedi Preventivo</a>
            </div>
        </div>
    </header>

    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="fw-bold text-nero-opaco mb-2">Il Nostro Standard Qualitativo</h2>
                    <p class="text-muted mb-5">Ogni centimetro è posato con strumenti laser e materiali di prima scelta.</p>
                    
                    <div class="position-relative shadow-lg rounded-3 overflow-hidden">
                        <img src="{{ asset('storage/images/pavimento_esterno.jpg')}}" 
                             class="img-fluid w-100 d-block" 
                             alt="Pavimentazione di pregio Edil Pro">
                        
                        <div class="position-absolute bottom-0 start-0 p-4 w-100 bg-gradient-dark text-start">
                            <span class="badge bg-sabbia text-dark px-3 py-2 mb-2">PROGETTO 2026</span>
                            <h4 class="text-white mb-0">Residenza Privata: Posa in Pietra Naturale</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-custom-light">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <h3 class="h1 fw-bold text-sabbia">100%</h3>
                    <p class="text-nero-opaco fw-bold text-uppercase small">Materiali Certificati</p>
                </div>
                <div class="col-md-4">
                    <h3 class="h1 fw-bold text-sabbia">10+</h3>
                    <p class="text-nero-opaco fw-bold text-uppercase small">Anni di Garanzia</p>
                </div>
                <div class="col-md-4">
                    <h3 class="h1 fw-bold text-sabbia">0</h3>
                    <p class="text-nero-opaco fw-bold text-uppercase small">Ristagni Idrici</p>
                </div>
            </div>
        </div>
    </section>

    <x-slot name="extrajs">
        
    </x-slot>
</x-layout>