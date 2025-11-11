@php
  // dummy data (nanti ganti dari DB)
  $title = 'Voucher Diskon Up to 25% Token Listrik';
  $image = asset('img/imginfovoucher.png'); // 750x420 atau bebas
@endphp
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Voucher</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="css/info.css" rel="stylesheet">

</head>
<body>
    <div class="container container-app px-3">
        <!-- App Bar -->
        <div class="app-bar position-relative mb-2">
            <a href="reward" class="back-btn text-dark position-absolute start-0">
                <i class="bi bi-arrow-left fs-4"></i>
            </a>
            <h5 class="app-title text-center m-0">Voucher</h5>
        </div>
     <!-- Banner -->
    <div class="ratio ratio-16x9 banner mb-3">
      <img src="{{ $image }}" alt="Banner Voucher" class="rounded-3">
    </div>

    <!-- Judul -->
    <h5 class="fw-semibold mb-5">{{ $title }}</h5>
  </div>

  <!-- Fixed CTA -->
  <div class="cta-wrap">
  <button class="btn btn-cta w-100"
          data-bs-toggle="modal"
          data-bs-target="#redeemModal">
    Pakai
  </button>
</div>
<!-- Bottom Sheet: Konfirmasi -->
<div class="modal fade bottom-sheet" id="redeemModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content confirm-sheet">
      <div class="sheet-handle"></div>

      <h5 class="text-center fw-semibold mb-3">Konfirmasi Redeem</h5>

      <div class="d-grid gap-3">
        <!-- YA -->
        <button type="button" class="btn btn-pill btn-yes"
                onclick="window.location.href='{{ url('/voucher/redeem') }}'">
          Ya
        </button>
        <!-- TIDAK -->
        <button type="button" class="btn btn-pill btn-no" data-bs-dismiss="modal">
          Tidak
        </button>
      </div>
    </div>
  </div>
</div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
