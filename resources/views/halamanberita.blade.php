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

        /* --- HEADER --- */
        .app-header {
            padding: 20px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: sticky;
            top: 0;
            background: white;
            z-index: 100;
            /* Tidak ada border bottom di foto */
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

        /* --- CARD STYLE --- */
        .help-card {
            background: white;
            /* UPDATE: Sudut lebih bulat */
            border-radius: 20px;
            /* UPDATE: Padding disesuaikan agar rapi saat rata kiri */
            padding: 25px;
            margin-bottom: 20px;
            /* UPDATE: Shadow lebih lembut dan lebar seperti di foto */
            box-shadow: 0 8px 25px rgba(0,0,0,0.07);
            text-decoration: none;
            color: #000;
            display: block;
            /* UPDATE PENTING: Teks rata kiri sesuai foto */
            text-align: left;
            font-weight: 500;
            font-size: 0.95rem;
            line-height: 1.5;
            transition: transform 0.2s, box-shadow 0.2s;
            /* UPDATE: Hapus border garis */
            border: none;
        }

        .help-card:active, .help-card:hover {
            transform: scale(0.98);
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            background-color: #fafafa;
        }

        ::-webkit-scrollbar { width: 0px; }
    </style>
</head>
<body>

    <div class="mobile-frame">

        <div class="app-header">
            <a href="{{ route('artikel') }}" class="back-btn">
                <i class="bi bi-arrow-left"></i>
            </a>
            <h5>Berita</h5>
        </div>

        <div class="content-area pt-2">
            @foreach($news as $item)
            <a href="{{ route('berita.detail', ['id' => $item->beritaid]) }}" class="help-card">
                {{ $item->judul }}
            </a>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
