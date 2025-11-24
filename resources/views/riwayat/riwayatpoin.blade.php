<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Riwayat</title>

  <!-- Bootstrap Icons untuk ikon panah -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- CSS kustom -->
  <link href="css/riwayat.css" rel="stylesheet">
  <link href="css/reward.css" rel="stylesheet">
</head>
<body>

  <!-- App Bar -->
    <div class="app-bar position-relative mb-2">
        <a href="{{ url('reward') }}" class="back-btn text-dark position-absolute start-0">
            <i class="bi bi-arrow-left fs-4"></i>
        </a>
        <h5 class="app-title text-center m-0">Riwayat</h5>
    </div>

  <!-- Konten -->
  <main class="container-app">
    <section class="group">
      <h2 class="group-title">Hari Ini</h2>

      <article class="item-card">
        <div class="item-left">
          <div class="item-title">Token Listrik Senilai</div>
          <div class="item-sub">Rp50.000</div>
        </div>
        <div class="item-point negative">-5.000 Poin</div>
      </article>

      <article class="item-card">
        <div class="item-left">
          <div class="item-title">Top Up Token</div>
        </div>
        <div class="item-point positive">+900 Poin</div>
      </article>
    </section>

    <section class="group">
      <h2 class="group-title">April 2025</h2>

      <article class="item-card">
        <div class="item-left">
          <div class="item-title">Token Listrik Senilai</div>
          <div class="item-sub">Rp50.000</div>
        </div>
        <div class="item-point negative">-5.000 Poin</div>
      </article>

      <article class="item-card">
        <div class="item-left">
          <div class="item-title">Top Up Token</div>
        </div>
        <div class="item-point positive">+900 Poin</div>
      </article>

      <article class="item-card">
        <div class="item-left">
          <div class="item-title">Top Up Token</div>
        </div>
        <div class="item-point positive">+450 Poin</div>
      </article>
    </section>
  </main>

</body>
</html>
