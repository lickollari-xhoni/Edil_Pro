<nav class="navbar navbar-expand-lg sticky-top custom-navbar py-2">
    <div class="container-fluid px-lg-5">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('storage/images/logo_navbar.png') }}" alt="EdilPro Logo" class="logo-custom">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">HomePage</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="/about">Chi Siamo</a>
                </li>
                
                <li class="nav-item ms-lg-3">
                    <a class="nav-link btn-contact-nav px-4" href="/contacts">Contatti</a>
                </li>
            </ul>
        </div>
    </div>
</nav>