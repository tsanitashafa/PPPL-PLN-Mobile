<!--Tiara Aulia Azadirachta Indica | 5026231148 -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukses</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS dipisah -->
    <link rel="stylesheet" href="{{ asset('css/token-success.css') }}">
</head>

<body>

<div class="container text-center py-5">

    <!-- Lingkaran Kuning -->
    <!--<div class="success-circle">
        ✓
    </div>-->
    <div class="container text-center py-5"> 
        <img src="{{ asset('images/Selamat.png') }}" 
        alt="Sukses" width="140" class="mx-auto mb-4 d-block">
    

    <h4 class="fw-bold">Selamat!</h4>
    <p class="text-muted mb-4">Berhasil memasukkan token</p>

    <!-- Tombol kembali -->
    <button 
        class="btn-figma"
        onclick="window.location.href='{{ url('/homepage') }}'">
        Kembali
    </button>

</div>

</body>
</html>
