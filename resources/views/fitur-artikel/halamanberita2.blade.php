{{--5026231213 Haliza Putri Amelliani--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita</title>
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
        }
        
        
        
        .back-link {
            text-decoration: none;
            color: #212529;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: color 0.2s;
        }

        .back-link:hover {
            color: #00aeb6;
        }

        
        .main-container {
            max-width: 960px;
            margin: 0 auto;
            padding-bottom: 50px;
        }

        
        .content-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            overflow: hidden; 
            border: 1px solid #e9ecef;
        }

        
        .hero-image-container {
            width: 100%;
            height: 400px; 
            position: relative;
        }

        .hero-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        
        .info-card {
            background-color: #e3f6f7;
            margin: -60px 40px 0 40px; 
            border-radius: 12px;
            padding: 25px 30px;
            position: relative;
            z-index: 10;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .news-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 15px;
        }

        .divider {
            height: 1px;
            background-color: #b0bec5;
            margin-bottom: 15px;
        }

        .news-meta {
            font-size: 0.95rem;
            color: #555;
            display: flex;
            justify-content: space-between;
            font-weight: 500;
        }

        /* --- ARTICLE CONTENT --- */
        .article-body {
            padding: 40px 40px 60px 40px;
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
            text-align: justify;
        }

    </style>
</head>
<body>

    <nav class="web-navbar">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="{{ route('berita') }}" class="back-link">
                <i class="bi bi-arrow-left fs-4"></i>
            </a>
            
            <div style="width: 80px;"></div>
        </div>
    </nav>

    <div class="container main-container">
        
        <div class="content-card">
            <div class="hero-image-container">
                <img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" class="hero-image" alt="Berita PLN">
            </div>

            <div class="info-card">
                <h1 class="news-title">{{ $newsItem->judul }}</h1>
                <div class="divider"></div>
                <div class="news-meta">
                    <span>Tanggal Rilis</span>
                    <span>{{ $newsItem->tglrilis ? \Carbon\Carbon::parse($newsItem->tglrilis)->format('d F Y') : 'N/A' }}</span>
                </div>
            </div>

            <div class="article-body">
                {!! nl2br(e($newsItem->konten)) !!}
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>