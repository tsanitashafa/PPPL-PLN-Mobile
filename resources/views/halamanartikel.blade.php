<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Artikel</title>
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
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; /* 
        }

        .mobile-frame {
            width: 375px;
            height: 667px;
            background-color: #ffffff; /* Background aplikasi putih bersih */
            position: relative;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
            display: flex;
            flex-direction: column;
        }

        .content-scroll {
            flex: 1;
            overflow-y: auto;
            padding-bottom: 100px;
            background-color: #fff; /* Pastikan background putih */
        }

        /* --- WARNA --- */
        :root {
            --primary-cyan: #00aeb6;
            --text-dark: #212529;
            --card-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Shadow lembut seperti di foto */
        }

        /* --- HEADER --- */
        .app-header {
            padding: 20px 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            background: white;
            /* Header di foto terlihat menyatu dengan body, border tipis atau tidak ada */
        }
        
        .app-header h5 {
            font-weight: 600;
            margin: 0;
            font-size: 1.2rem;
            color: black;
        }

        .back-btn {
            position: absolute;
            left: 20px;
            font-size: 1.5rem;
            color: black;
            cursor: pointer;
            text-decoration: none;
        }

        /* --- SECTION TITLE --- */
        .section-title {
            font-weight: 500;
            margin: 10px 0 15px 0;
            color: #000;
            font-size: 1rem;
        }

        /* --- CARD STYLE (NEWS & BANTUAN) --- */
        .custom-card {
            background: white;
            border: none; /* Hilangkan border garis */
            border-radius: 16px; /* Sudut lebih bulat seperti di foto */
            box-shadow: var(--card-shadow); /* Efek melayang */
            margin-bottom: 16px;
            padding: 15px;
            text-decoration: none;
            color: inherit;
            display: flex;
            align-items: center;
            transition: transform 0.1s;
        }

        .custom-card:active {
            transform: scale(0.98);
        }

        /* --- NEWS SPECIFIC --- */
        .news-img {
            width: 70px;
            height: 70px;
            border-radius: 8px;
            object-fit: cover;
            flex-shrink: 0;
            margin-right: 15px;
        }

        .news-title {
            font-size: 0.9rem;
            font-weight: 500;
            line-height: 1.4;
            color: #333;
            /* Membatasi teks maksimal 3 baris */
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* --- BANTUAN SPECIFIC --- */
        .bantuan-card {
            display: block; /* Agar full width */
            padding: 20px; /* Padding lebih besar */
        }

        .bantuan-text {
            font-size: 0.95rem;
            font-weight: 400;
            color: #333;
            text-align: left; /* PENTING: Sesuai foto, teks rata kiri */
            margin: 0;
            line-height: 1.5;
        }

        /* --- LIHAT SEMUA --- */
        .see-all {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 0.9rem;
            color: #555;
            text-decoration: none;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .see-all i {
            margin-left: 5px;
        }

        /* --- BOTTOM NAVIGATION --- */
        .bottom-nav-container {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 85px; /* Sedikit lebih tinggi */
            z-index: 10;
            pointer-events: none; /* Agar klik tembus ke area kosong */
        }

        .nav-bg {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 70px;
            background: white;
            border-top-left-radius: 30px; /* Lengkungan sudut atas lebih besar */
            border-top-right-radius: 30px;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            padding: 0 15px 15px 15px;
            pointer-events: auto;
            
            /* Masking lengkungan tengah */
            -webkit-mask-image: radial-gradient(circle at 50% 0px, transparent 38px, black 39px);
            mask-image: radial-gradient(circle at 50% 0px, transparent 38px, black 39px);
        }

        .nav-item {
            flex: 1;
            text-align: center;
            font-size: 0.75rem;
            color: #ccc; /* Warna non-aktif abu muda */
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 5px;
        }

        .nav-item i {
            font-size: 1.5rem;
            margin-bottom: 4px;
        }

        .nav-item.active {
            color: var(--primary-cyan);
            font-weight: 500;
        }

        .scan-btn-wrapper {
            position: absolute;
            bottom: 35px; /* Naik sedikit */
            left: 50%;
            transform: translateX(-50%);
            z-index: 20;
            background: white; /* Lingkaran putih di balik tombol */
            border-radius: 50%;
            padding: 6px;
            box-shadow: 0 -2px 5px rgba(0,0,0,0.05);
            pointer-events: auto;
        }

        .scan-btn {
            width: 60px;
            height: 60px;
            background-color: var(--primary-cyan);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
            box-shadow: 0 4px 15px rgba(0, 174, 182, 0.4);
        }

        /* Scrollbar hide */
        ::-webkit-scrollbar { width: 0px; background: transparent; }
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

        <div class="content-scroll px-4"> <h6 class="section-title">News</h6>

            @forelse($news as $item)
                <a href="{{ route('berita.detail', ['id' => $item->beritaid]) }}" class="custom-card">
                    <img src="{{ asset('assets/img/Image placeholder.png') }}" class="news-img" alt="news">
                    <div class="news-title">
                        {{ $item->judul }}
                    </div>
                </a>
            @empty
                <div class="text-center py-3 text-muted small">Belum ada berita terbaru.</div>
            @endforelse

            <a href="{{ route('berita') }}" class="see-all">
                Lihat Semua <i class="bi bi-chevron-down"></i>
            </a>


            <h6 class="section-title mt-2">Bantuan</h6>

            @forelse($bantuan as $item)
                <a href="{{ route('bantuan.detail', ['id' => $item->bantuanid]) }}" class="custom-card bantuan-card">
                    <p class="bantuan-text">
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
                
                <div style="width: 70px;"></div> <a href="#" class="nav-item active">
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