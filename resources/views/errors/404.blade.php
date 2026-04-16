<x-layout>
    <x-slot name="title">
        Pagina Non Trovata
    </x-slot>

    <main class="flex-grow-1 d-flex align-items-center justify-content-center text-center py-5 min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <i class="bi bi-cone-striped text-sabbia" style="font-size: 5rem;"></i>

                    <h1 class="display-1 fw-bold text-nero-opaco">404</h1>
                    <h2 class="display-5 fw-bold mb-4">Lavoro in corso... o rotta smarrita?</h2>

                    <p class="lead text-muted mb-5">
                        La pagina che stai cercando non è presente nel nostro progetto. 
                        Potrebbe essere stata spostata o il "cantiere" è ancora in fase di allestimento.
                    </p>

                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a href="/" class="btn-custom-primary px-4 gap-3 shadow-sm">
                            <i class="bi bi-house-door me-2"></i>Torna alla Home
                        </a>
                        
                        <a href="/destination" class="btn-custom-outline px-4">
                            <i class="bi bi-grid-3x3-gap me-2"></i>Guarda i Lavori
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>