<!--Tiara Aulia Azadirachta Indica | 5026231148 -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gagal</title>
  <link rel="icon" href="{{ asset('assets/img/logo.png') }}" sizes="any">

  <!-- CSS dipisah -->
  <link rel="stylesheet" href="{{ asset('css/token-gagal.css') }}">
</head>

<body>
  <div class="result-page">
    <div class="result-content">
      <img src="{{ asset('assets/img/gagal.png') }}"
           alt="Gagal"
           class="result-icon">

      <h4 class="result-title">Gagal</h4>
      <p class="result-subtitle">Gagal memasukkan token</p>
    </div>

    <button class="btn-figma" onclick="window.location.href='{{ url('/masukkan-token') }}'">
      Kembali
    </button>
  </div>
</body>
</html>
