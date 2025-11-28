<!-- Haliza Putri Amelliani - 5026231213 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Bantuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .mobile-frame {
            width: 375px;
            height: 667px;
            background-color: #ffffff;
            position: relative;
            overflow: hidden; /* Penting biar popup ga keluar frame */
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
            display: flex;
            flex-direction: column;
            border-radius: 0px;
        }

        /* --- BACKGROUND CONTENT (Blurry/Dimmed) --- */
        /* Kita copy style dari halaman bantuan 1 biar backgroundnya sama */
        .app-header {
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            opacity: 0.3; /* Efek redup */
        }
        
        .app-header h5 {
            font-weight: 600;
            margin: 0;
            font-size: 1.2rem;
            color: #000;
        }

        .content-area {
            padding: 10px 25px;
            opacity: 0.3; /* Efek redup */
            pointer-events: none; /* Biar background gabisa diklik */
        }

        .help-card {
            background: white;
            border-radius: 15px;
            padding: 30px 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            display: block;
            text-align: center;
            font-weight: 500;
            font-size: 0.95rem;
            color: #000;
            border: 1px solid #f9f9f9;
        }

        /* --- MODAL / POPUP STYLE --- */
        .modal-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4); /* Layar hitam transparan */
            z-index: 50;
            display: flex;
            align-items: flex-end; /* Posisi di bawah */
        }

        .bottom-sheet {
            width: 100%;
            background-color: white;
            border-top-left-radius: 25px; /* Lengkungan atas kiri */
            border-top-right-radius: 25px; /* Lengkungan atas kanan */
            padding: 25px 30px 50px 30px;
            position: relative;
            animation: slideUp 0.3s ease-out;
        }

        @keyframes slideUp {
            from { transform: translateY(100%); }
            to { transform: translateY(0); }
        }

        .drag-handle {
            width: 50px;
            height: 5px;
            background-color: #e0e0e0;
            border-radius: 10px;
            margin: 0 auto 25px auto; /* Posisi tengah atas */
        }

        .sheet-title {
            font-weight: 700;
            font-size: 1rem;
            margin-bottom: 20px;
            color: #000;
            line-height: 1.4;
        }

        .sheet-body {
            font-size: 0.95rem;
            color: #333;
            line-height: 1.5;
        }
    </style>
</head>
<body>

    <div class="mobile-frame">
        
        <!-- Background Layer (Isinya sama kayak Halaman Bantuan 1 tapi diredupkan) -->
        <div class="app-header">
            <i class="bi bi-arrow-left fs-4"></i>
            <h5>Bantuan</h5>
        </div>

        <div class="content-area">
            <div class="help-card">Apakah ada minimum transaksi untuk mendapatkan poin?</div>
            <div class="help-card">Apakah ada minimum transaksi untuk mendapatkan poin?</div>
            <div class="help-card">Apakah ada minimum transaksi untuk mendapatkan poin?</div>
        </div>

        <!-- OVERLAY & BOTTOM SHEET (POPUP) -->
        <!-- Link pembungkus overlay ini berfungsi kalau diklik area gelap akan kembali (back) -->
        <a href="{{ route('bantuan') }}" class="modal-overlay text-decoration-none">
            
            <!-- Stop propagation biar kalau klik kertas putihnya ga ikut ke-close -->
            <div class="bottom-sheet" onclick="event.stopPropagation()">
                <!-- Garis Handle -->
                <div class="drag-handle"></div>

                <!-- Judul Pertanyaan -->
                <h6 class="sheet-title">Apakah ada minimum transaksi untuk mendapatkan poin?</h6>

                <!-- Jawaban -->
                <p class="sheet-body">
                    Tidak ada. Setiap transaksi kelipatan Rp100 tetap akan mendapatkan poin.
                </p>
            </div>
        </a>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>