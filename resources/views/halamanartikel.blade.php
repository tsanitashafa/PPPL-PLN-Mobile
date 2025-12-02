<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* --- RESET & BODY --- */
        body {
            background-color: #f0f2f5;
            margin: 0;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            display: flex;
            justify-content: center;
            min-height: 100vh;
        }

        /* --- CONTAINER UTAMA (SIMULASI HP) --- */
        .mobile-frame {
            width: 100%;
            max-width: 480px;
            background-color: #ffffff;
            min-height: 100vh;
            position: relative;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
        }

        /* --- HEADER --- */
        .app-header {
            padding: 20px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .app-header h5 {
            font-weight: 700;
            margin: 0;
            font-size: 1.1rem;
            color: #212529;
        }

        .back-btn {
            position: absolute;
            left: 20px;
            font-size: 1.4rem;
            color: #212529;
            cursor: pointer;
            text-decoration: none;
        }

        /* --- SCROLLABLE CONTENT --- */
        .content-scroll {
            flex: 1;
            padding: 10px 20px 120px 20px;
            overflow-y: auto;
        }

        .section-title {
            font-weight: 700;
            margin: 10px 0 15px 0;
            color: #212529;
            font-size: 1rem;
        }

        /* --- CARDS STYLE --- */
        .custom-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 16px;
            padding: 15px;
            text-decoration: none;
            color: inherit;
            display: flex;
            align-items: center;
            border: 1px solid #f0f0f0;
            transition: transform 0.2s;
        }

        .custom-card:active {
            transform: scale(0.98);
        }

        /* Style Khusus News (Ada Gambar) */
        .news-img {
            width: 80px;
            height: 60px;
            border-radius: 10px;
            object-fit: cover;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .news-title {
            font-size: 0.9rem;
            font-weight: 600;
            line-height: 1.4;
            color: #333;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Style Khusus Bantuan (Teks Saja) */
        .bantuan-text {
            font-size: 0.95rem;
            font-weight: 500;
            color: #333;
            margin: 0;
            width: 100%;
        }

        .see-all {
            display: block;
            text-align: center;
            font-size: 0.85rem;
            color: #6c757d;
            text-decoration: none;
            margin-bottom: 25px;
            font-weight: 500;
        }

        /* --- BOTTOM NAVIGATION (CURVED) --- */
        .bottom-nav-container {
            position: fixed;
            bottom: 0;
            width: 100%;
            max-width: 480px;
            height: 90px;
            z-index: 100;
            pointer-events: none;
        }

        .nav-bg {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 70px;
            background: white;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.08);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            pointer-events: auto;
            -webkit-mask-image: radial-gradient(circle at 50% 0, transparent 35px, black 36px);
            mask-image: radial-gradient(circle at 50% 0, transparent 35px, black 36px);
        }

        .nav-item {
            text-align: center;
            color: #adb5bd;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 0.75rem;
            width: 60px;
        }

        .nav-item i {
            font-size: 1.4rem;
            margin-bottom: 2px;
        }

        .nav-item.active {
            color: #00aeb6;
            font-weight: 600;
        }

        .scan-btn-wrapper {
            position: absolute;
            bottom: 35px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 101;
            pointer-events: auto;
            background: white;
            border-radius: 50%;
            padding: 5px;
        }

        .scan-btn {
            width: 55px;
            height: 55px;
            background-color: #00aeb6;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            box-shadow: 0 4px 10px rgba(0, 174, 182, 0.4);
        }

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

        <div class="content-scroll">

            <h6 class="section-title">News</h6>
            @forelse($news as $item)
                <a href="{{ route('berita.detail', ['id' => $item->beritaid]) }}" class="custom-card">
                    <img src="{{ asset('assets/img/Image placeholder.png') }}" class="news-img" alt="news">
                    <div class="news-title">{{ $item->judul }}</div>
                </a>
            @empty
                <div class="text-center py-3 text-muted small">Belum ada berita terbaru.</div>
            @endforelse

            <a href="{{ route('berita') }}" class="see-all">
                Lihat Semua <i class="bi bi-chevron-down"></i>
            </a>


            <h6 class="section-title mt-4">Bantuan</h6>
            @forelse($bantuan as $item)
                <a href="{{ route('bantuan.detail', ['id' => $item->bantuanid]) }}" class="custom-card">
                    <div class="bantuan-text">{{ $item->judul }}</div>
                </a>
            @empty
                <div class="text-center py-3 text-muted small">Belum ada bantuan tersedia.</div>
            @endforelse

            <a href="{{ route('bantuan') }}" class="see-all">
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
                <div style="width: 50px;"></div>
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
