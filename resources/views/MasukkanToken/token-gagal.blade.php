<!--Tiara Aulia Azadirachta Indica | 5026231148 -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukses</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #ffffff;
        }

        /* Circle kuning persis Figma */
        .success-circle {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            background-color: #F4E63A; /* warna kuning Figma */
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 25px auto;
            font-size: 60px;
            color: white;
            font-weight: bold;
        }

        /* Tombol style Figma */
        .btn-figma {
            background-color: #0AA3BB;
            color: white;
            border: none;
            border-radius: 22px;
            padding: 14px;
            font-size: 18px;
            width: 100%;
            box-shadow: 0px 3px 6px rgba(0,0,0,0.15);
        }

        .btn-figma:hover {
            opacity: 0.9;
        }

    </style>
</head>

<body>

<div class="container text-center py-5">

    <!-- Lingkaran Kuning -->
    <!--<div class="success-circle">
        ✓
    </div>-->
    <div class="container text-center py-5"> 
        <img src="{{ asset('images/gagal.png') }}" 
        alt="Gagal" width="140" class="mx-auto mb-4 d-block">
    

    <h4 class="fw-bold">Gagal</h4>
    <p class="text-muted mb-4">Gagal memasukkan token</p>

    <!-- Tombol kembali -->
    <button 
        class="btn-figma"
        onclick="window.location.href='{{ url('/masukkan-token') }}'">
        Kembali
    </button>

</div>

</body>
</html>
