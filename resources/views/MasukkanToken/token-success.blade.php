<!--Tiara Aulia Azadirachta Indica | 5026231148 -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sukses</title>
  <link rel="icon" href="{{ asset('assets/img/logo.png') }}" sizes="any">

  <link rel="stylesheet" href="{{ asset('css/token-success.css') }}">
</head>

<body>
  <div class="success-page">
    <div class="success-content">
      <img
        src="{{ asset('assets/img/Selamat.png') }}"
        alt="Sukses"
        class="success-icon"
      />

      <h4 class="success-title">Selamat!</h4>
      <p class="success-subtitle">Berhasil memasukkan token</p>
    </div>

    <button class="btn-figma" onclick="window.location.href='{{ url('/homepage') }}'">
      Kembali
    </button>
  </div>
</body>
</html>
