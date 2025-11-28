<!-- Haliza Putri Amelliani - 5026231213 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Berita</title>
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
            /* UPDATE SIZE: Standar 375x667 */
            width: 375px;
            height: 667px;
            background-color: #ffffff;
            position: relative;
            overflow-y: auto; 
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
            border-radius: 0px; /* UPDATE: Sudut Kotak */
        }

        .app-header {
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: sticky;
            top: 0;
            background: white;
            z-index: 100;
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
            text-decoration: none; 
        }

        .custom-card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.06);
            margin-bottom: 12px;
            background: white;
            padding: 10px;
            transition: background-color 0.2s;
            border: 1px solid #f5f5f5;
        }
        
        .custom-card:active, .custom-card:hover {
            background-color: #f8f9fa;
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
            color: #333;
        }

        .news-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        ::-webkit-scrollbar {
            width: 4px;
        }
        ::-webkit-scrollbar-thumb {
            background-color: #ccc;
        }
    </style>
</head>
<body>

    <div class="mobile-frame">
        
        <div class="app-header">
            <a href="{{ route('artikel') }}" class="back-btn">
                <i class="bi bi-arrow-left"></i>
            </a>
            <h5>News</h5>
        </div>

        <div class="p-3"> 
            
            <a href="{{ route('berita.detail') }}" class="news-link">
                <div class="custom-card d-flex align-items-center">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" class="news-img" alt="news">
                    <div class="ps-3">
                        <p class="card-text mb-0">PLN Luncurkan Program Loyalti Gelegar PLN Mobile 2025</p>
                    </div>
                </div>
            </a>

            <a href="{{ route('berita.detail') }}" class="news-link">
                <div class="custom-card d-flex align-items-center">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" class="news-img" alt="news">
                    <div class="ps-3">
                        <p class="card-text mb-0">PLN Luncurkan Program Loyalti Gelegar PLN Mobile 2025</p>
                    </div>
                </div>
            </a>

            <a href="{{ route('berita.detail') }}" class="news-link">
                <div class="custom-card d-flex align-items-center">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" class="news-img" alt="news">
                    <div class="ps-3">
                        <p class="card-text mb-0">PLN Luncurkan Program Loyalti Gelegar PLN Mobile 2025</p>
                    </div>
                </div>
            </a>

            <a href="{{ route('berita.detail') }}" class="news-link">
                <div class="custom-card d-flex align-items-center">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" class="news-img" alt="news">
                    <div class="ps-3">
                        <p class="card-text mb-0">PLN Luncurkan Program Loyalti Gelegar PLN Mobile 2025</p>
                    </div>
                </div>
            </a>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>