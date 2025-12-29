{{--5026231213 Haliza Putri Amelliani--}}

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        
        body {
            background-color: #f8f9fa;
            margin: 0;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            min-height: 100vh;
        }

        
        .web-navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 15px 0;
            margin-bottom: 30px;
            position: relative; 
        }
        
        
        .web-navbar .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem; 
            color: #000000;    
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            
            
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            margin: 0;
        }

        .back-link {
            text-decoration: none;
            color: #212529;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: color 0.2s;
            z-index: 10; 
            position: relative; 
        }

        .back-link:hover {
            color: #00aeb6;
        }

        
        .main-container {
            max-width: 960px;
            margin: 0 auto;
            padding-bottom: 50px;
        }

        
        .section-title {
            font-weight: 700;
            margin: 30px 0 15px 0;
            color: #212529;
            font-size: 1.1rem;
            text-transform: capitalize;
        }

        
        .custom-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            margin-bottom: 15px;
            padding: 15px;
            text-decoration: none;
            color: inherit;
            display: flex;
            align-items: center;
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
        }

        .custom-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border-color: #00aeb6;
        }

        
        .news-img {
            width: 70px;  
            height: 70px; 
            border-radius: 8px;
            object-fit: cover;
            margin-right: 15px;
            flex-shrink: 0;
        }

        
        .card-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .item-title {
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.3;
            color: #333;
            margin-bottom: 4px;
        }

        
        .item-excerpt {
            font-size: 0.85rem;
            color: #6c757d;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            margin: 0;
        }

        /* --- UPDATED SEE ALL STYLE --- */
        .see-all {
            display: inline-flex; 
            align-items: center;
            gap: 5px; 
            margin-top: 5px;
            font-size: 0.9rem;
            color: #000000; 
            text-decoration: none;
            font-weight: 600;
            transition: 0.2s;
        }
        
        .see-all:hover {
            color: #333; 
            text-decoration: none;
        }

    </style>
</head>

<body>

    <nav class="web-navbar">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="{{ url('/homepage') }}" class="back-link">
                <i class="bi bi-arrow-left fs-4"></i>
            </a>
            
            <span class="navbar-brand">Artikel</span>
            
            <div style="width: 80px;"></div>
        </div>
    </nav>

    <div class="container main-container">
        
        <h6 class="section-title">News</h6>
        
        <div class="row">
            <div class="col-12">
                @forelse($news as $item)
                    <a href="{{ route('berita.detail', ['id' => $item->beritaid]) }}" class="custom-card">
                        <img src="{{ asset('/img/artikel.png') }}" class="news-img" alt="news">
                        
                        <div class="card-content">
                            <div class="item-title">{{ $item->judul }}</div>
                        </div>
                    </a>
                @empty
                    <div class="alert alert-light text-center py-3 border small">Belum ada berita terbaru.</div>
                @endforelse

                <div class="text-center mb-4">
                    <a href="{{ route('berita') }}" class="see-all">
                        Lihat Semua <i class="bi bi-chevron-down"></i>
                    </a>
                </div>
            </div>
        </div>

        <h6 class="section-title mt-2">Bantuan</h6>
        
        <div class="row">
            <div class="col-12">
                @forelse($bantuan as $item)
                    <a href="{{ route('bantuan.detail', ['id' => $item->bantuanid]) }}" class="custom-card justify-content-between">
                        
                        <div class="d-flex align-items-center">
                            <div class="item-title mb-0">{{ $item->judul }}</div>
                        </div>
                        
                    </a>
                @empty
                    <div class="alert alert-light text-center py-3 border small">Belum ada bantuan tersedia.</div>
                @endforelse

                <div class="text-center mb-5">
                    <a href="{{ route('bantuan') }}" class="see-all">
                        Lihat Semua <i class="bi bi-chevron-down"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>

    @include('components.template')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>