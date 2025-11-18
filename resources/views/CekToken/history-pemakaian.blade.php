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
    backUrl="{{ url('/cek-token') }}" 
/>

<div class="container mt-3 mb-5">

    <!-- MAR -->
    <h6 class="fw-bold mb-3">Maret 2025</h6>
    <div class="history-card d-flex justify-content-between align-items-center mb-4">
        <span class="label-title">Pemakaian Listrik</span>
        <span class="value-red">-11.0 kWh</span>
    </div>

    <!-- FEB -->
    <h6 class="fw-bold mb-3 mt-4">Februari 2025</h6>
    <div class="history-card d-flex justify-content-between align-items-center mb-4">
        <span class="label-title">Pemakaian Listrik</span>
        <span class="value-red">-44.3 kWh</span>
    </div>

    <!-- JAN -->
    <h6 class="fw-bold mb-3 mt-4">Januari 2025</h6>
    <div class="history-card d-flex justify-content-between align-items-center mb-4">
        <span class="label-title">Pemakaian Listrik</span>
        <span class="value-red">-34.0 kWh</span>
    </div>

    <!-- DEC -->
    <h6 class="fw-bold mb-3 mt-4">Desember 2024</h6>
    <div class="history-card d-flex justify-content-between align-items-center mb-4">
        <span class="label-title">Pemakaian Listrik</span>
        <span class="value-red">-31.6 kWh</span>
    </div>

    <!-- NOV -->
    <h6 class="fw-bold mb-3 mt-4">November 2024</h6>
    <div class="history-card d-flex justify-content-between align-items-center mb-4">
        <span class="label-title">Pemakaian Listrik</span>
        <span class="value-red">-62.5 kWh</span>
    </div>

    <!-- OCT -->
    <h6 class="fw-bold mb-3 mt-4">Oktober 2024</h6>
    <div class="history-card d-flex justify-content-between align-items-center mb-4">
        <span class="label-title">Pemakaian Listrik</span>
        <span class="value-red">-35.0 kWh</span>
    </div>

</div>

</body>
</html>
