<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Gagal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff;
            height: 100vh;
        }

        .status-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .status-icon {
            width: 100px;
            height: 100px;
            background-color: #dc3545;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .status-icon i {
            color: white;
            font-size: 50px;
        }

        .btn-back {
            background-color: #4aa3b3;
            color: white;
            border-radius: 25px;
            padding: 10px 50px;
            font-weight: 500;
            margin-top: 30px;
        }

        .btn-back:hover {
            background-color: #3b8c9a;
            color: white;
        }
    </style>
</head>

<body>
    <div class=" d-block" style="z-index: 1050;">
        <img src="assets/img/top-bar.png" alt="Status Bar Mobile" style="width: 100%;">
    </div>

    <div class="container status-container">
        <div class="status-icon">
            <i class="fas fa-times"></i>
        </div>
        <h5 class="font-weight-bold">Gagal!</h5>
        <p class="text-muted mb-4">Transaksi Gagal</p>
        <button class="btn btn-back">Kembali</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
