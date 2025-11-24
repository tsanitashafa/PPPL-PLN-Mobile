<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reward</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('css/reward.css') }}" rel="stylesheet">

</head>

<body>

<div class="container container-app px-3">

    <div class="app-bar position-relative mb-2">
        <a href="#" class="back-btn text-dark position-absolute start-0">
            <i class="bi bi-arrow-left fs-4"></i>
        </a>
        <h5 class="app-title text-center m-0">Reward</h5>
    </div>

    <div class="card tier-card p-3 mb-5">
        <div class="d-flex align-items-center justify-content-between">
            <div class="flex-grow-1 pe-2">
                <div class="tier-badge fw-semibold">{{ $tier }}  {{ number_format($points) }} Poin</div>

                <div class="progress-wrap mt-3">
                    <div class="progress-track">
                        <div class="bar-olive"></div>
                        <div class="bar-yellow" style="width: {{ $progress }}%;"></div>
                    </div>
                </div>
            </div>

            <div class="ms-2">
                <img src="{{ asset('img/silver.png') }}" alt="Silver Coin" class="tier-coin">
            </div>
        </div>
    </div>

    <ul class="nav nav-pills nav-chips-split mb-5" role="tablist">
        <li class="nav-item flex-fill">
            <a class="nav-link chip active" data-bs-toggle="pill" href="#tab-voucher">Voucher</a>
        </li>
        <li class="nav-item flex-fill">
            <a class="nav-link chip" data-bs-toggle="pill" href="#tab-tukar">Tukar</a>
        </li>
        <li class="nav-item flex-fill">
            <a class="nav-link chip" data-bs-toggle="pill" href="#tab-riwayat">Riwayat</a>
        </li>
    </ul>

    <div class="tab-content">

        <div class="tab-pane fade show active" id="tab-voucher">
            @foreach($vouchers as $v)
                <button class="voucher-card w-100 text-start mb-4"
                        onclick="window.location.href='{{ url('infovoucher/'.$v->rewardid) }}'">
                    <div class="card-body d-flex align-items-center">
                        <div class="thumb">
                            <img src="{{ asset('img/img25off.png') }}" alt="voucher" class="img-fluid">
                        </div>

                        <div class="ms-4 me-2">
                            <div class="fw-semibold">{{ $v->rewardname }}</div>
                        </div>
                    </div>
                </button>
            @endforeach

            <div class="text-center">
                <a href="{{ url('voucher') }}" class="text-decoration-none see-more">
                    Lihat Semua
                    <i class="bi bi-chevron-down"></i>
                </a>
            </div>
        </div>

        <div class="tab-pane fade" id="tab-tukar">
            @foreach($vouchers as $v)
                <button class="voucher-card w-100 text-start mb-4"
                        onclick="window.location.href='{{ url('infovoucher/'.$v->rewardid) }}'">
                    <div class="card-body d-flex align-items-center">
                        <div class="thumb">
                            <img src="{{ asset('img/img25off.png') }}" class="img-fluid">
                        </div>

                        <div class="ms-4 me-2">
                            <div class="fw-semibold">{{ $v->rewardname }}</div>
                        </div>
                    </div>
                </button>
            @endforeach
        </div>

        <div class="tab-pane fade" id="tab-riwayat">
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

            <div class="text-center">
                <a href="{{ url('riwayatpoin') }}" class="text-decoration-none see-more">
                    Lihat Semua
                    <i class="bi bi-chevron-down"></i>
                </a>
            </div>
            </section>
        </div>

    </div>
</div>

@include('templatenavbar')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
