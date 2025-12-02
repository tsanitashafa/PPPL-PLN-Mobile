<!-- Haliza Putri Amelliani - 5026231213 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Bantuan</title>
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
            overflow-y: auto;
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
            display: flex;
            flex-direction: column;
            border-radius: 0px;
        }

        .app-header {
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: sticky;
            top: 0;
            background: white;
            z-index: 100;
        }

        .app-header h5 {
            font-weight: 600;
            margin: 0;
            font-size: 1.2rem;
            color: #000;
        }

        .back-btn {
            position: absolute;
            left: 20px;
            font-size: 1.6rem;
            color: #000;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .content-area {
            padding: 10px 25px;
        }

        .help-card {
            background: white;
            border-radius: 15px;
            padding: 30px 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            text-decoration: none;
            color: #000;
            display: block;
            text-align: center;
            font-weight: 500;
            font-size: 0.95rem;
            line-height: 1.4;
            transition: transform 0.2s, box-shadow 0.2s;
            border: 1px solid #f9f9f9;
        }

        .help-card:active, .help-card:hover {
            transform: scale(0.98);
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            background-color: #fafafa;
            color: #000;
        }

        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-thumb { background-color: #ccc; }
    </style>
</head>
<body>

    <div class="mobile-frame">

        <div class="app-header">
            <a href="{{ route('artikel') }}" class="back-btn">
                <i class="bi bi-arrow-left"></i>
            </a>
            <h5>Bantuan</h5>
        </div>

        <div class="content-area">
            @foreach($bantuan as $item)
            <a href="{{ route('bantuan.detail', ['id' => $item->bantuanid]) }}" class="help-card">
                {{ $item->judul }}
            </a>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
