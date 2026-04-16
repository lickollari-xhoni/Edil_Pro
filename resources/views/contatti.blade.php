<x-layout>
    <x-slot name="title">
        Richiedi Preventivo | Edil Pro
    </x-slot>

    <main class="container my-5 min-vh-100">
        <div class="row g-4">

            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm p-4 bg-white">
                    <h3 class="fw-bold mb-4 text-nero-opaco">Ufficio Tecnico</h3>

                    <div class="d-flex mb-4">
                        <i class="bi bi-geo-fill text-sabbia fs-3 me-3"></i>
                        <div>
                            <h5 class="mb-1 fw-bold">Sede Operativa</h5>
                            <p class="text-muted small">Via dell'Artigianato 45, <br>00100 - Roma (Zona Industriale)</p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <i class="bi bi-telephone-outbound-fill text-sabbia fs-3 me-3"></i>
                        <div>
                            <h5 class="mb-1 fw-bold">Contatto Diretto</h5>
                            <p class="text-muted small">+39 06 987 6543<br>Lun - Ven: 08:00 - 18:00</p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <i class="bi bi-calculator-fill text-sabbia fs-3 me-3"></i>
                        <div>
                            <h5 class="mb-1 fw-bold">Area Preventivi</h5>
                            <p class="text-muted small">tecnico@edilpro.it<br>info@edilpro.it</p>
                        </div>
                    </div>

                    <hr class="text-muted opacity-25">

                    <h5 class="fw-bold mb-3">Segui i nostri Cantieri</h5>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-social-custom"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="btn btn-social-custom"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="btn btn-social-custom"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card border-0 shadow-sm p-4 bg-white">
                    <h3 class="fw-bold mb-2 text-nero-opaco">Inviaci i dettagli del progetto</h3>
                    <p class="text-muted mb-4">Riceverai una risposta tecnica entro 24/48 ore lavorative.</p>

                    @if (session()->has('success'))
                        <div class="alert alert-custom-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('invia-al-server') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold small text-uppercase">Email di riferimento</label>
                                <input type="email" class="form-control custom-input" placeholder="nome@esempio.it"
                                    name="email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold small text-uppercase">Tipo di Lavoro</label>
                                <select class="form-select custom-input" name="tipo_lavoro">
                                    <option selected>Pavimenti Esterni</option>
                                    <option>Resina / Microcemento</option>
                                    <option>Grandi Formati</option>
                                    <option>Altro</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold small text-uppercase">Descrizione dell'intervento</label>
                            <textarea class="form-control custom-input" rows="6"
                                placeholder="Descrivi la superficie, i mq stimati e il tipo di supporto attuale..." name="message">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn-custom-primary px-5 py-3">Invia Richiesta
                                Sopralluogo</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </main>

    <x-slot name="extrajs">
    </x-slot>
</x-layout>