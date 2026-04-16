<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title ?? 'Home' }} | Edil Pro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-custom-light">
    <x-navbar />

    <main class="min-vh-100">
        {{ $slot }}
    </main>

    <footer class="footer-custom text-center py-5">
        <div class="container">
            <h5 class="fw-bold text-uppercase mb-3">Edil <span class="text-sabbia">Pro</span></h5>
            <p class="mb-1 text-muted">Specialisti in posa pavimenti e rivestimenti esterni.</p>
            <p class="small opacity-75">&copy; 2026 Edil Pro - P.IVA 1234567890 - Tutti i diritti riservati</p>
            
            <div class="mt-3">
                <a href="#" class="text-sabbia me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-sabbia"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </footer>

    {{ $extrajs ?? '' }}
</body>