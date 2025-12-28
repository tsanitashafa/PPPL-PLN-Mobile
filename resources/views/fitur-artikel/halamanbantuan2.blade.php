{{--5026231213 Haliza Putri Amelliani--}}

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
            background-color: #f8f9fa;
            margin: 0;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            min-height: 100vh;
            overflow: hidden; 
        }

        
        .background-layer {
            filter: blur(4px); 
            opacity: 0.6;      
            pointer-events: none; 
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        
        .web-navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 15px 0;
            margin-bottom: 30px;
        }
        
        .web-navbar .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: #212529;
        }

        .back-link {
            text-decoration: none;
            color: #212529;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

       
        .main-container {
            max-width: 960px;
            margin: 0 auto;
        }

        
        .help-card {
            background: white;
            border-radius: 12px;
            padding: 25px 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            text-decoration: none;
            color: #000;
            display: block;
            text-align: center;
            font-weight: 500;
            font-size: 1rem;
            line-height: 1.4;
            border: 1px solid #e9ecef;
        }

        
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); 
            z-index: 1000;
            display: flex;
            justify-content: center; 
            align-items: flex-end;   
            text-decoration: none;
        }

        .bottom-sheet {
            background-color: white;
            width: 100%;
            max-width: 800px; 
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
            padding: 40px 50px 60px 50px;
            position: relative;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            animation: slideUp 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            cursor: default;
        }

        @keyframes slideUp {
            from { transform: translateY(100%); }
            to { transform: translateY(0); }
        }

        .drag-handle {
            width: 60px;
            height: 6px;
            background-color: #e0e0e0;
            border-radius: 10px;
            margin: 0 auto 30px auto;
        }

        .sheet-title {
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 25px;
            color: #212529;
            line-height: 1.4;
            text-align: center;
        }

        .sheet-body {
            font-size: 1.1rem;
            color: #333;
            line-height: 1.8;
            text-align: justify;
        }
    </style>
</head>
<body>

    <div class="background-layer">
        <nav class="web-navbar">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="back-link">
                    <i class="bi bi-arrow-left fs-4"></i>
                </div>
                
                <span class="navbar-brand">Bantuan</span>
                
                <div style="width: 80px;"></div>
            </div>
        </nav>

        <div class="container main-container">
            <div class="row">
                <div class="col-12">
                    <div class="help-card">Keamanan Akun</div>
                    <div class="help-card">Cek Riwayat</div>
                    <div class="help-card">Cara Top Up</div>
                    <div class="help-card">Lupa Password</div>
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('bantuan') }}" class="modal-overlay">
        
        <div class="bottom-sheet" onclick="event.stopPropagation()">
            
            <div class="drag-handle"></div>

            <h2 class="sheet-title">{{ $bantuanItem->judul }}</h2>

            <div class="sheet-body">
                {!! nl2br(e($bantuanItem->konten)) !!}
            </div>

        </div>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>