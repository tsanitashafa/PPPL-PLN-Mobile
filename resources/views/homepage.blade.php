<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>

    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f6fafc; }

        /* NAV BOTTOM */
        :root {
            --nav-bg: white;
            --qr-color: #0AA3BB;
            --qr-size: 62px;
            --nav-height: 72px;
        }

        #bottom-nav {
            height: var(--nav-height);
            background: var(--nav-bg);
            border-top-left-radius: 22px;
            border-top-right-radius: 22px;
            box-shadow: 0 -6px 22px rgba(0,0,0,0.12);
            padding-bottom: env(safe-area-inset-bottom);
        }

        .navbar-nav { width: 100%; display: flex; justify-content: space-between; align-items: flex-end; padding: 0 8px; }

        .menu-link { color: #9aa0a6; text-align: center; text-decoration: none; display: flex; flex-direction: column; align-items: center; }
        .menu-link i { font-size: 1.5rem; }
        .menu-link span { font-size: 0.75rem; }
        .menu-link.active { color: var(--qr-color); }

        /* QR Center */
        .qr-btn-container { position: absolute; left: 50%; transform: translateX(-50%); top: -32px; z-index: 20; }
        .qr-btn { width: var(--qr-size); height: var(--qr-size); background: var(--qr-color); border-radius: 50%; display: flex; justify-content: center; align-items: center; border: 4px solid var(--nav-bg); }
        .qr-btn i { color: white; font-size: 1.9rem; }

        .spacer-qr { width: var(--qr-size); }

        /* PROFILE AREA */
        .wave-bg img { width: 100%; height: 180px; object-fit: cover; }

        /* CARD NUMBER */
        .token-card { border-radius: 16px; }

        .menu-card { background: #16A1BA; border-radius: 14px; padding: 14px; }
        .menu-card img { width: 44px; height: 44px; }

        /* Artikel */
        .artikel-card { background: #e7f5f9; border-radius: 14px; }
    </style>
</head>

<body>
    <!-- TOP BAR IMG -->
    <div><img src="assets/img/top-bar.png" style="width: 100%;"></div>

    <!-- HEADER WAVE BG -->
    <div class="wave-bg" style="position: absolute; top: 0; left:0; z-index:1;">
        <img src="assets/img/wave.svg">
    </div>

    <div class="container py-5" style="position: relative; z-index:2;">

        <!-- PROFILE + SEARCH -->
        <div class="d-flex justify-content-between align-items-center mb-4 text-white">
            <div class="d-flex align-items-center">
                <img src="assets/img/image-profile.png" class="rounded-circle mr-3" style="width:50px;height:50px;border:2px solid #fff;">
                <div>
                    <h6 class="m-0 font-weight-bold">Hi, Abyan</h6>
                    <small>Silver - 3000 Poin</small>
                </div>
            </div>

            <div class="d-flex align-items-center">
                <div class="position-relative mr-3" style="width:150px;">
                    <i class="fa fa-search position-absolute" style="left:14px;top:50%;transform:translateY(-50%);color:#6c757d;"></i>
                    <input type="text" class="form-control rounded-pill" placeholder="Search" style="padding-left:38px; height:38px;">
                </div>

                <a href="#" class="text-white"><i class="fa-solid fa-bell fa-lg"></i></a>
            </div>
        </div>

        <!-- CARD TOKEN -->
        <div class="card shadow-lg border-0 token-card p-3 mb-4">
            <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-3">
                <h4 class="m-0">18437249224</h4>
                <i class="fa-solid fa-chevron-right text-info"></i>
            </div>

            <div class="row">
                <div class="col-6 border-right">
                    <p class="text-muted small mb-1">Saldo</p>
                    <h4 class="m-0 font-weight-bold">Rp 15.300 <i class="fa-solid fa-circle-plus text-info ml-1"></i></h4>
                </div>
                <div class="col-6">
                    <p class="text-muted small mb-1">Token Listrik</p>
                    <h4 class="m-0 font-weight-bold">5.26 kWh <i class="fa-solid fa-circle-plus text-info ml-1"></i></h4>
                </div>
            </div>
        </div>

        <!-- MENU GRID -->
        <div class="card shadow-lg p-3 border-0 mb-4" style="border-radius:14px;">
            <div class="row row-cols-4 text-center">

                <div class="col">
                    <a href="#" class="text-dark text-decoration-none">
                        <div class="menu-card"><img src="images/beli-token.png"></div>
                        <p class="small mt-2 mb-0">Beli Token</p>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="text-dark text-decoration-none">
                        <div class="menu-card"><img src="images/masukkan-token.png"></div>
                        <p class="small mt-2 mb-0">Masukkan Token</p>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="text-dark text-decoration-none">
                        <div class="menu-card"><img src="images/cek-token.png"></div>
                        <p class="small mt-2 mb-0">Cek Token</p>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="text-dark text-decoration-none">
                        <div class="menu-card"><img src="images/lihat-semua.png"></div>
                        <p class="small mt-2 mb-0">Lainnya</p>
                    </a>
                </div>

            </div>
        </div>

        <!-- ARTIKEL TITLE -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="font-weight-bold">Artikel</h4>
            <i class="fa-solid fa-chevron-right"></i>
        </div>

        <!-- ARTIKEL LIST -->
        <div class="card artikel-card p-4 shadow-lg border-0 mb-3">
            <div class="row">
                <div class="col-8">
                    <h5 class="font-weight-bold">PLN Luncurkan Program Loyalti Gelegar PLN Mobile 2025</h5>
                    <small class="text-muted d-block mt-2">Tanggal 11 May 2025</small>
                </div>
                <div class="col-4 text-right">
                    <img src="images/Image_placeholder.svg" style="width:100px;height:100px;border-radius:10px;object-fit:cover;">
                </div>
            </div>
        </div>

        <div class="card artikel-card p-4 shadow-lg border-0 mb-5">
            <div class="row">
                <div class="col-8">
                    <h5 class="font-weight-bold">PLN Luncurkan Program Loyalti Gelegar PLN Mobile 2025</h5>
                    <small class="text-muted d-block mt-2">Tanggal 11 May 2025</small>
                </div>
                <div class="col-4 text-right">
                    <img src="images/Image_placeholder.svg" style="width:100px;height:100px;border-radius:10px;object-fit:cover;">
                </div>
   