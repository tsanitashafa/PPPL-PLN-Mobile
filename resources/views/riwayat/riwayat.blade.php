<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reward</title>

  <!-- Bootstrap Icons untuk ikon panah dan navbar -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- CSS kustom -->
  <link href="css/riwayat.css" rel="stylesheet">
</head>
<body>

  <!-- App Bar -->
  <header class="app-bar">
    <button class="back-btn" aria-label="Kembali" onclick="history.back()">
      <i class="bi bi-arrow-left"></i>
    </button>
    <h1 class="app-title">Reward</h1>
  </header>

  <!-- Konten -->
  <main class="container-app">
    <!-- Tier Card -->
    <section class="tier-card">
      <div class="tier-left">
        <div class="tier-line">
          <span class="tier-name">Silver</span>
          <span class="tier-point">· 3000 Poin</span>
        </div>
        <div class="tier-progress">
          <div class="tier-progress-fill" style="width:30%"></div>
        </div>
      </div>
      <div class="tier-coin" aria-hidden="true"></div>
    </section>

    <!-- Tabs -->
    <nav class="chips">
      <button class="chip">Voucher</button>
      <button class="chip">Tukar</button>
      <button class="chip active">Riwayat</button>
    </nav>

    <!-- List Riwayat -->
    <section class="list">
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

      <div class="see-more">
        <button class="see-more-btn">
          Lihat Semua <i class="bi bi-chevron-down"></i>
        </button>
      </div>
    </section>
  </main>

  <!-- Bottom Navbar dengan FAB tengah -->
  <nav class="bottom-bar">
    <a href="#" class="tab">
      <i class="bi bi-house-door"></i>
      <span>Home</span>
    </a>
    <a href="#" class="tab active">
      <i class="bi bi-gift"></i>
      <span>Reward</span>
    </a>

    <!-- FAB pemindai -->
    <button class="fab" aria-label="Scan">
      <i class="bi bi-qr-code-scan"></i>
    </button>

    <a href="#" class="tab">
      <i class="bi bi-newspaper"></i>
      <span>Artikel</span>
    </a>
    <a href="#" class="tab">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </nav>

</body>
</html>
