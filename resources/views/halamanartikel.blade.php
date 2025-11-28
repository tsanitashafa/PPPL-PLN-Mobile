<!-- Haliza Putri Amelliani - 5026231213 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        /* --- LAYOUT UTAMA --- */
        body {
            background-color: #333; /* Background luar gelap agar fokus ke HP */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .mobile-frame {
            /* Ukuran Standar HP (375x667) - Kotak (Tidak Rounded) */
            width: 375px;
            height: 667px;
            background-color: #ffffff;
            position: relative;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
            display: flex;
            flex-direction: column;
            border-radius: 0px; 
        }

        /* Area Konten yang bisa di-scroll */
        .content-scroll {
            flex: 1;
            overflow-y: auto;
            padding-bottom: 90px; /* Supaya konten terbawah tidak tertutup navbar */
        }

        /* --- WARNA & TEKS --- */
        :root {
            --primary-cyan: #00aeb6;
        }

        .section-title {
            font-weight: 600;
            margin: 15px 0 10px 0;
            color: #000;
            font-size: 0.95rem;
        }

        /* --- HEADER --- */
        .app-header {
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            background: white;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .app-header h5 {
            font-weight: 600;
            margin: 0;
            font-size: 1.1rem;
        }

        .back-btn {
            position: absolute;
            left: 15px;
            font-size: 1.4rem;
            color: #000;
            cursor: pointer;
        }

        /* --- CARD STYLE (BERITA & BANTUAN) --- */
        .custom-card {
            border: 1px solid #f0f0f0;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.06);
            margin-bottom: 12px;
            background: white;
            padding: 10px;
            transition: transform 0.1s;
            cursor: pointer;
            display: block; /* Agar <a> berfungsi full width */
            text-decoration: none;
            color: inherit;
        }

        .custom-card:active {
            transform: scale(0.98);
        }

        .news-img {
            width: 65px;
            height: 65px;
            border-radius: 6px;
            object-fit: cover;
            flex-shrink: 0;
        }

        .card-text {
            font-size: 0.85rem;
            font-weight: 500;
            line-height: 1.3;
            margin-left: 12px;
            color: #333;
        }

        /* --- LINK LIHAT SEMUA --- */
        .see-all {
            text-align: center;
            font-size: 0.85rem;
            color: #666;
            display: block;
            text-decoration: none;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .see-all:hover {
            color: var(--primary-cyan);
        }

        /* --- BOTTOM NAVIGATION --- */
        .bottom-nav-container {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 75px;
            z-index: 10;
        }

        .nav-bg {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 65px;
            background: white;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            box-shadow: 0 -2px 15px rgba(0,0,0,0.05);
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            padding: 0 10px 10px 10px;
            
            /* Masking untuk lengkungan tengah */
            -webkit-mask-image: radial-gradient(circle at 50% 0px, transparent 35px, black 36px);
            mask-image: radial-gradient(circle at 50% 0px, transparent 35px, black 36px);
        }

        .nav-item {
            flex: 1;
            text-align: center;
            font-size: 0.7rem;
            color: #adb5bd;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .nav-item i {
            font-size: 1.3rem;
            margin-bottom: 2px;
        }

        .nav-item.active {
            color: var(--primary-cyan);
        }

        .scan-btn-wrapper {
            position: absolute;
            bottom: 25px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 20;
            background: white;
            border-radius: 50%;
            padding: 5px;
            box-shadow: 0 -2px 5px rgba(0,0,0,0.05);
        }

        .scan-btn {
            width: 55px;
            height: 55px;
            background-color: var(--primary-cyan);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.6rem;
            box-shadow: 0 4px 10px rgba(0, 174, 182, 0.3);
        }

        /* Scrollbar styling */
        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-thumb { background-color: #ccc; border-radius: 4px; }
    </style>
</head>
<body>

    <div class="mobile-frame">
        <div class="app-header">
            <a href="{{ url('/') }}" class="back-btn">
                <i class="bi bi-arrow-left"></i>
            </a>
            <h5>Artikel</h5>
        </div>

        <div class="content-scroll px-3">
            
            <h6 class="section-title">News</h6>

            @forelse($news as $item)
                <a href="{{ route('berita.detail') }}" class="custom-card d-flex align-items-center">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" class="news-img" alt="news">
                    
                    <p class="card-text mb-0">{{ $item->judul }}</p>
                </a>
            @empty
                <div class="text-center py-3 text-muted small">Belum ada berita terbaru.</div>
            @endforelse

            <a href="{{ route('berita') }}" class="see-all">
                Lihat Semua <i class="bi bi-chevron-down"></i>
            </a>


            <h6 class="section-title mt-4">Bantuan</h6>

            @forelse($bantuan as $item)
                <a href="{{ route('bantuan.detail') }}" class="custom-card py-3 d-block">
                    <p class="card-text text-center mb-0" style="margin-left:0;">
                        {{ $item->judul }}
                    </p>
                </a>
            @empty
                <div class="text-center py-3 text-muted small">Belum ada bantuan tersedia.</div>
            @endforelse

            <a href="{{ route('bantuan') }}" class="see-all mb-4">
                Lihat Semua <i class="bi bi-chevron-down"></i>
            </a>

        </div>

        <div class="bottom-nav-container">
            <div class="scan-btn-wrapper">
                <div class="scan-btn">
                    <i class="bi bi-qr-code-scan"></i>
                </div>
            </div>

            <div class="nav-bg">
                <a href="#" class="nav-item">
                    <i class="bi bi-house"></i>
                    <span>Home</span>
                </a>
                <a href="#" class="nav-item">
                    <i class="bi bi-gift"></i>
                    <span>Reward</span>
                </a>
                
                <div style="width: 60px;"></div>

                <a href="#" class="nav-item active">
                    <i class="bi bi-file-text"></i>
                    <span>Artikel</span>
                </a>
                <a href="#" class="nav-item">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>