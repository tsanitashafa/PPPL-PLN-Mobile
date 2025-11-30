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
            background-color: #EA4E4E;
            color: white;
            border-radius: 12px;
            padding: 8px;
            font-size: 14px;
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
    @if(isset($pelanggan))
        <div class="token-card mb-3">
            <h6 class="fw-bold">
                Cek Token — {{ $pelanggan->tandaisebagai ?? 'Lokasi' }}
            </h6>
            <p class="text-muted mb-2">{{ $pelanggan->alamat }}</p>

            @if($tokens->isEmpty())
                <p class="text-center text-danger mb-0">Tidak ada data token untuk alamat ini.</p>
            @else
                <table class="table table-bordered mt-2">
                    <thead>
                        <tr>
                            <th>Tanggal Beli</th>
                            <th>Jumlah Token</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tokens as $t)
                        <tr>
                            <td>{{ $t->tanggal_beli }}</td>
                            <td>{{ $t->token }} kWh</td>
                            <td>
                                <span class="badge {{ $t->is_used ? 'bg-danger' : 'bg-success' }}">
                                    {{ $t->is_used ? 'Sudah Dipakai' : 'Belum Dipakai' }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    @endif

    <!-- TOKEN CARD -->
    <div class="token-card">
        <h6 class="fw-bold text-center">Sisa Token Rumah</h6>
        <p class="text-center mb-2">5.26 kWh / 62.23 kWh</p>

        <div class="progress-bg w-100 mb-3">
            <div class="progress-bar-custom" style="width: 8%;"></div>
        </div>

        <div class="alert-token text-center">⚠ Token Cukup Untuk 1 Hari</div>

        <div class="text-center mt-2">
            <div class="text-center mt-2">
                <a href="{{ url('/detail-pelanggan') }}" 
                    class="text-decoration-none text-dark">Lihat Detail ▼
                </a>
            </div>
        </div>
    </div>

    <!-- DASHBOARD PEMAKAIAN CARD -->
    <div class="usage-card text-center">
        <h6 class="fw-bold">Dashboard Pemakaian</h6>

        <div class="w-100" style="height: 220px;">
            <canvas id="usageChart" style="max-height: 220px !important;"></canvas>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <button class="btn btn-outline-dark w-100 mt-3 py-2" 
                style="border-radius:12px; font-weight:600; font-size:14px;" 
                onclick="window.location.href='{{ url('/history-pemakaian') }}'">Lihat History Pemakaian ▼
            </button>
        <script>
            const ctx = document.getElementById('usageChart').getContext('2d');

            const usageData = {
                labels: ['OCT', 'NOV', 'DEC', 'JAN', 'FEB', 'MAR'],
                datasets: [{
                    data: [35.0, 62.5, 31.6, 34.0, 44.3, 11.0],
                    tension: 0.4,
                    borderColor: '#000000',
                    pointRadius: 5,
                    pointBackgroundColor: '#000000',
                    borderWidth: 2
                }]
            };

            new Chart(ctx, {
                type: 'line',
                data: usageData,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false }},
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: { stepSize: 10 }
                        }
                    },
                    layout: {
                        padding: { top: 10, bottom: 10 }
                    }
                }
            });(ctx, {
                type: 'line',
                data: usageData,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false }},
                    scales: {
                        y: { beginAtZero: true }
                    }
                }
            });
        </script>
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
