<!--Tiara Aulia Azadirachta Indica | 5026231148 -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Pemakaian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background: #ffffff; }

        .history-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            padding: 18px;
            margin-bottom: 18px;
        }
        .label-title {
            font-size: 15px;
            font-weight: 600;
        }
        .value-red { color: #D9534F; font-weight: 600; }
        .value-blue { color: #1BA7B5; font-weight: 600; }
    </style>
</head>
<body>

<!-- NAVBAR TEMPLATE -->
<x-templatenavbar 
    title="History" 
    backUrl="{{ route('cek-token', ['pelangganid' => $pelangganAktif->pelangganid]) }}"
/>

<div class="container mt-3 mb-5">

    @foreach($historyPemakaian as $row)
    <h6 class="fw-bold mb-3 mt-4">
        {{ \Carbon\Carbon::create()->month($row->bulan)->translatedFormat('F') }}
        {{ $row->tahun }}
    </h6>

    <div class="history-card d-flex justify-content-between align-items-center mb-4">
        <span class="label-title">Pemakaian Listrik</span>
        <span class="value-red">
            -{{ number_format($row->total_pemakaian, 2) }} kWh
        </span>
    </div>
@endforeach

</div>

</body>
</html>
