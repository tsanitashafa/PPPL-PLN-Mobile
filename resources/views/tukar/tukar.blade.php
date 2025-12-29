{{--5026231088 Tsanita Shafa Hadinanda--}}
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tukar Poin</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('css/reward.css') }}" rel="stylesheet">
</head>

<body>
    <x-templatenavbar
        title="Tukar Poin"
        backUrl="{{ url('/reward') }}"
    />

    @foreach($tukarItems as $t)
        <button class="voucher-card w-100 text-start mb-4"
                onclick="window.location.href='{{ url('tukar/'.$t->tukarid) }}'">
            <div class="card-body d-flex align-items-center justify-content-between">

                {{-- kiri: gambar + teks --}}
                <div class="d-flex align-items-center">
                    <div class="thumb">
                        <img src="{{ asset('img/tukarpoin.png') }}" class="img-fluid">
                    </div>

                    <div class="ms-3">
                        <div class="fw-semibold">
                            Token Listrik Senilai
                        </div>
                        <div class="text-muted">
                            Rp{{ number_format($t->nilai, 0, ',', '.') }}
                        </div>
                    </div>
                </div>

                {{-- kanan: poin yang dibutuhkan --}}
                <div class="fw-semibold" style="margin-top: 45px; margin-right: 10px;">
                    {{ number_format($t->poindibutuhkan, 0, ',', '.') }} Poin
                </div>

            </div>
        </button>
    @endforeach

</div>

@include('components/template')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
