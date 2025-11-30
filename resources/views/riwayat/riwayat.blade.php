{{--5026231088 Tsanita Shafa Hadinanda--}}
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Riwayat Poin</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('css/reward.css') }}" rel="stylesheet">
</head>

<body>

<div class="container container-app px-3">

    <div class="app-bar position-relative mb-3">
        <a href="{{ url()->previous() }}" class="back-btn text-dark position-absolute start-0">
            <i class="bi bi-arrow-left fs-4"></i>
        </a>
        <h5 class="app-title text-center m-0">Riwayat Poin</h5>
    </div>

    {{-- Loop Bulan --}}
    @foreach ($grouped as $month => $items)

        <h6 class="fw-bold ms-1 mt-4">{{ $month }}</h6>

        @foreach ($items as $r)
            @php
                $poin = (int) $r->riwayatpoin;
                $neg = $poin < 0;
            @endphp

            <article class="item-card">
                <div class="item-left">
                    <div class="item-title">{{ $r->deskaktivitas }}</div>

                    @if($r->detailaktivitas)
                        <div class="item-sub" style="margin-top: 4px;">
                            {{ $r->detailaktivitas }}
                        </div>
                    @endif
                </div>

                <div class="item-point {{ $neg ? 'negative' : 'positive' }}">
                    {{ $poin > 0 ? '+' : '-' }}
                    {{ number_format(abs($poin), 0, ',', '.') }} Poin
                </div>
            </article>

        @endforeach

    @endforeach

</div>

@include('template')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
