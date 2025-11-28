<!-- Haliza Putri Amelliani - 5026231213 -->
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

        /* Hero Image Section */
        .hero-container {
            position: relative;
            width: 100%;
            height: 220px; /* Tinggi gambar disesuaikan agar tidak mendominasi layar kecil */
        }

        .hero-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Tombol Back di atas gambar */
        .back-btn-circle {
            position: absolute;
            top: 20px;
            left: 15px;
            width: 35px;
            height: 35px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: #000;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            z-index: 10;
        }
        
        .back-btn-circle:hover {
            background-color: white;
        }

        /* Kartu Floating (Overlapping) */
        .overlap-card {
            background-color: #e3f6f7;
            margin: -40px 15px 0 15px;
            border-radius: 12px;
            padding: 15px;
            position: relative;
            z-index: 5;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .news-title {
            font-size: 0.95rem;
            font-weight: 600;
            line-height: 1.4;
            color: #222;
            margin-bottom: 10px;
        }

        .divider {
            height: 1px;
            background-color: #b0bec5;
            margin-bottom: 10px;
        }

        .news-date {
            text-align: right;
            font-size: 0.8rem;
            color: #555;
            font-weight: 500;
        }

        /* Konten Artikel */
        .article-content {
            padding: 20px 20px 40px 20px;
            font-size: 0.9rem;
            line-height: 1.6;
            color: #333;
            text-align: justify;
        }

        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-thumb { background-color: #ccc; }
    </style>
</head>
<body>

    <div class="mobile-frame">
        
        <div class="hero-container">
            <a href="{{ route('berita') }}" class="back-btn-circle">
                <i class="bi bi-arrow-left fs-6"></i>
            </a>
            
            <img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="hero-image" alt="Event PLN">
        </div>

        <div class="overlap-card">
            <h2 class="news-title">PLN Luncurkan Program Loyalti Gelegar PLN Mobile 2025, Hadiah Menarik untuk Pelanggan Setia</h2>
            <div class="divider"></div>
            <div class="d-flex justify-content-between align-items-center">
                <span style="font-size: 0.8rem; color: #555;">Tanggal</span>
                <span class="news-date">11 May 2025</span>
            </div>
        </div>

        <div class="article-content">
            <p>
                Jakarta, 11 Mei 2025 – PT PLN (Persero) resmi meluncurkan Gelegar PLN Mobile 2025 pada Kamis (8/5) di Jakarta. Program ini merupakan bentuk apresiasi kepada pelanggan setia PLN Mobile yang telah aktif bertransaksi dan berinteraksi melalui aplikasi PLN Mobile.
            </p>
            <p>
                Melalui program ini, pelanggan akan mendapatkan reward point yang dapat ditukarkan dengan berbagai hadiah menarik, mulai dari produk digital, hadiah langsung, hingga kupon undian berhadiah.
            </p>
            <p>
                Direktur Utama PLN menyatakan bahwa transformasi digital ini bertujuan untuk meningkatkan pengalaman pelanggan dalam menikmati layanan kelistrikan yang lebih mudah dan terjangkau.
            </p>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>