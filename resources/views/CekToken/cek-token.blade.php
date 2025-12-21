<!--Tiara Aulia Azadirachta Indica | 5026231148 -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Token</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #ffffff;
        }
        .token-card, .usage-card{
            border-radius: 16px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            background: #fff;
            margin-bottom: 20px;
        }
        .carbon-card {
            border-radius: 16px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            background: #E7F6F9; /* <-- warna sesuai permintaan */
            margin-bottom: 20px;
            display: flex;
            justify-content: center;  /* posisi horizontal */
            align-items: center;      /* posisi vertical */
        }
        .progress-bar-custom {
            background-color: #0A7B8C;
            height: 18px;
            border-radius: 10px;
        }
        .progress-bg {
            background-color: #D7EEF2;
            border-radius: 10px;
            height: 18px;
        }
        .alert-token {
            padding: 10px 14px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
        }

        /* hijau */
        .alert-success {
            background-color: #3c970bff;
            color: #ffffffff;
        }

        /* kuning */
        .alert-warning {
            background-color: #e17f08ff;
            color: #ffffffff;
        }

        /* merah */
        .alert-danger {
            background-color: #EA4E4E;
            color: #ffffffff;
        }

        /* belum ada data */
        .alert-notif {
            background-color: #ece6a9ff;
            color: #000000ff;
        }
    </style>
</head>
<body>

<!-- Header Template -->
    <x-templatenavbar 
        title="Cek Token"
        backUrl="{{ url('/homepage') }}"
    />

<div class="container mt-4">

        {{-- DATA TOKEN DINAMIS BERDASARKAN LOKASI --}}
    <div class="token-card">
        <h6 class="fw-bold text-center">
            Sisa Token {{ $pelangganAktif->tandaisebagai }}
        </h6>

        <p class="text-center mb-2">
            {{ number_format($sisaToken, 2) }} kWh /
            {{ number_format($totalToken, 2) }} kWh
        </p>

        <div class="progress-bg w-100 mb-3">
            <div class="progress-bar-custom"
                style="width: {{ $persentase }}%;">
            </div>
        </div>

        @if(empty($dataPemakaian) || count($dataPemakaian) === 0)

            <div class="alert alert-notif text-center">
                 Belum ada data pemakaian
            </div>
        @else
            @php
                if ($sisaToken <= 0) {
                    $statusText = 'Token habis';
                    $statusClass = 'alert-danger';
                } elseif ($sisaToken <= 20) {
                    $statusText = 'Token cukup untuk 1 hari';
                    $statusClass = 'alert-warning';
                } else {
                    $statusText = 'Token masih tersedia';
                    $statusClass = 'alert-success';
                }
            @endphp
            <div class="alert-token text-center {{ $statusClass }}">
                ⚠ {{ $statusText }}
            </div>
        @endif

        <div class="text-center mt-2">
            <a href="{{ url('/detail-pelanggan') }}"
            class="text-decoration-none text-dark">
            Lihat Detail ▼
            </a>
        </div>
    </div>

    <!-- DASHBOARD PEMAKAIAN CARD -->
    <div class="usage-card text-center">
        <h6 class="fw-bold">Dashboard Pemakaian</h6>

        <div class="w-100" style="height: 220px;">
            <canvas id="usageChart"></canvas>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            const ctx = document.getElementById('usageChart').getContext('2d');

            const usageData = {
                labels: @json($labels),
                datasets: [{
                    data: @json($dataPemakaian),
                    tension: 0.4,
                    borderColor: '#000000',
                    pointRadius: 5,
                    pointBackgroundColor: '#000000',
                    borderWidth: 2,
                    fill: false
                }]
            };

            new Chart(ctx, {
                type: 'line',
                data: usageData,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: { stepSize: 10 }
                        }
                    }
                }
            });
        </script>

       <button class="btn btn-outline-dark w-100 mt-3 py-2"
            onclick="window.location.href='{{ url('/history-pemakaian?pelangganid=' . $pelangganAktif->pelangganid) }}'">
            Lihat History Pemakaian ▼
        </button>
    </div>

    <!-- CARBON TRACKING CARD -->
    <div class="carbon-card d-flex align-items-center">
        <img src="{{ asset('images/carbon.png') }}" width="55" class="me-3">
        <div>
            <h6 class="fw-bold mb-1">Traking Karbon</h6>
            <p class="text-muted mb-0">Perkiraan emisi karbon <b>17kg CO2</b></p>
        </div>
    </div>

</div>

</body>
</html>
