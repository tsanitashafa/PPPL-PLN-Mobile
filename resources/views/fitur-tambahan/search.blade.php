<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLN Mobile - Jelajahi Layanan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/fitur-tambahan/search.css">
</head>

<body>

    <header class="header-container">
        <img src="assets/img/wave.svg" alt="Wave Background" class="wave-bg">

        <div class="header-content">
            <div class="back-nav">
                <div style="font-size:20px; color: white; cursor: pointer;" onclick="history.back()">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <h1 class="header-title">Jelajahi Semua Layanan PLN Mobile</h1>
            </div>

            <div class="search-container">
                <div class="search-bar">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search Fitur">
                </div>
            </div>
        </div>
    </header>

    <main class="container mt-4">
        <div class="row row-cols-3">
            <div class="col text-center mb-4">
                <a href="{{ route('beli-token') }}" class="menu-link text-decoration-none">

                    <div class="icon-card">
                        <img src="assets/img/beli-token.svg" alt="Beli Token">
                    </div>
                    <p class="menu-label">Beli Token</p>
                </a>
            </div>

            <div class="col text-center mb-4">
                <a href="{{ route('masukkan-token') }}" class="menu-link text-decoration-none">
                    <div class="icon-card">
                        <img src="/images/masukkan-token.png" alt="Masukkan Token">
                    </div>
                    <p class="menu-label">Masukkan Token</p>
                </a>
            </div>

            <div class="col text-center mb-4">
                <a href="{{ route('cek-token') }}" class="menu-link text-decoration-none">
                    <div class="icon-card">
                        <img src="/images/cek-token.png" alt="Cek Token">
                    </div>
                    <p class="menu-label">Cek Token</p>
                </a>
            </div>
        </div>
    </main>

</body>

</html>
