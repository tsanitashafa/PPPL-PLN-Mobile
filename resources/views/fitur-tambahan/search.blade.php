<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLN Mobile - Jelajahi Layanan</title>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" sizes="any">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/fitur-tambahan/search.css') }}">
</head>

<body>

    <header class="pln-header">
        <img src="{{ asset('assets/img/wave.svg') }}" class="wave">

        <div class="header-content">
            <div class="nav-title">
                <a href="{{ route('homepage') }}"><i class="fa-solid fa-arrow-left"></i></a>
                <p>Jelajahi Semua Layanan PLN Mobile</p>
            </div>

            <div class="search-bar">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search Fitur">
            </div>
        </div>
    </header>

    <main class="container mt-4">
        <div class="row row-cols-3">
            <div class="col text-center mb-4">
                <a href="{{ route('beli-token') }}" class="menu-link text-decoration-none">

                    <div class="icon-card">
                        <img src="{{ asset('assets/img/beli-token.png') }}" alt="Beli Token">
                    </div>
                    <p class="menu-label">Beli Token</p>
                </a>
            </div>

            <div class="col text-center mb-4">
                <a href="{{ route('masukkan-token') }}" class="menu-link text-decoration-none">
                    <div class="icon-card">
                        <img src="/assets/img/masukkan-token.png" alt="Masukkan Token">
                    </div>
                    <p class="menu-label">Masukkan Token</p>
                </a>
            </div>

            <div class="col text-center mb-4">
                <a href="{{ route('cek-token') }}" class="menu-link text-decoration-none">
                    <div class="icon-card">
                        <img src="/assets/img/cek-token.png" alt="Cek Token">
                    </div>
                    <p class="menu-label">Cek Token</p>
                </a>
            </div>
        </div>
    </main>

</body>

</html>
