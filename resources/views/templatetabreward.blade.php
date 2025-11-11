
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reward</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="css/reward.css" rel="stylesheet">
  <link href="css/navbar.css" rel="stylesheet">
</head>

<body>
<div class="container container-app px-3">
  <!-- App Bar -->
  <div class="app-bar position-relative mb-3">
    <a href="{{ url()->previous() }}" class="back-btn text-dark position-absolute start-0">
      <i class="bi bi-arrow-left fs-4"></i>
    </a>
    <h5 class="app-title text-center m-0">Reward</h5>
  </div>

  <!-- Tier Card -->
  <div class="card tier-card p-3 mb-5">
    <div class="d-flex align-items-center justify-content-between">
      <div class="flex-grow-1 pe-2">
        <div class="tier-badge fw-semibold">{{ $tier ?? 'Silver' }} · {{ number_format($points ?? 3000) }} Poin</div>
        <div class="progress-wrap mt-3">
          <div class="progress-track">
            <div class="bar-olive"></div>
            <div class="bar-yellow" style="width: {{ $progress ?? 30 }}%;"></div>
          </div>
        </div>
      </div>
      <div class="ms-2">
        <img src="{{ asset('img/silver.png') }}" alt="Silver Coin" class="tier-coin">
      </div>
    </div>
  </div>

  <!-- Chips navigasi antar halaman -->
  <ul class="nav nav-pills nav-chips-split mb-5" role="navigation">
    <li class="nav-item flex-fill">
      <a class="nav-link chip {{ $activeTab === 'voucher' ? 'active' : '' }}" href="{{ url('voucher') }}">
        Voucher
      </a>
    </li>
    <li class="nav-item flex-fill">
      <a class="nav-link chip {{ $activeTab === 'tukar' ? 'active' : '' }}" href="{{ url('tukar') }}">
        Tukar
      </a>
    </li>
    <li class="nav-item flex-fill">
      <a class="nav-link chip {{ $activeTab === 'riwayat' ? 'active' : '' }}" href="{{ url('riwayat') }}">
        Riwayat
      </a>
    </li>
  </ul>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
