{{--5026231088 Tsanita Shafa Hadinanda--}}
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tukar Poin</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('css/info.css') }}" rel="stylesheet">
</head>

<body>

<div class="container container-app px-3">

    <div class="app-bar position-relative mb-3">
        <a href="{{ url()->previous() }}" class="back-btn text-dark position-absolute start-0">
            <i class="bi bi-arrow-left fs-4"></i>
        </a>
        <h5 class="app-title text-center m-0">Tukar</h5>
    </div>

    {{-- banner promo --}}
    <div class="ratio ratio-16x9 mb-3">
        <img src="{{ asset('img/tukarpoin.png') }}"
             alt="Banner Tukar"
             class="rounded-3 w-100 h-100"
             style="object-fit: cover;">
    </div>

    {{-- judul, harga, poin --}}
    <div class="d-flex justify-content-between align-items-start mt-3">
        <div>
            <h5 class="fw-semibold m-0" style="width: 80%">Token Listrik Senilai Rp50.000</h5>
            <!-- Harga di bawah dihapus sesuai permintaan -->
        </div>

        <div class="fw-semibold text-end"
            style="margin-top: 25px; white-space: nowrap;">
            {{ number_format($tukar->poindibutuhkan, 0, ',', '.') }} Poin
        </div>

    </div>


</div>

{{-- tombol Tukar di bawah --}}
<div class="cta-wrap">
    <button class="btn btn-cta w-100"
        data-bs-toggle="modal"
        data-bs-target="#redeemModal">
        Tukar
    </button>
</div>

{{-- Modal Konfirmasi --}}
<div class="modal fade bottom-sheet" id="redeemModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content confirm-sheet">

      <div class="sheet-handle"></div>

      <h5 class="text-center fw-semibold mb-3">Konfirmasi Redeem</h5>

      <div class="d-grid gap-3">

        {{-- Tombol YA --}}
        <button class="btn btn-pill btn-yes"
                onclick="window.location.href='{{ url('/tukar/redeem/'.$tukar->tukarid) }}'">
          Ya
        </button>

        {{-- Tombol Tidak --}}
        <button type="button" class="btn btn-pill btn-no" data-bs-dismiss="modal">
          Tidak
        </button>

      </div>

    </div>
  </div>
</div>


    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
