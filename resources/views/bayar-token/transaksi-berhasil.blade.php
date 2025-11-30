{{-- 5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH  --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Berhasil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/bayar-token/transaksi-berhasil.css">
</head>

<body class="bg-white">

    <div
        class="container transaction-success-card text-center d-flex flex-column justify-content-center align-items-center">

        <div class="success-icon-wrapper d-flex justify-content-center align-items-center mb-4">
            <i class="fas fa-check fa-4x text-white"></i>
        </div>

        <h5 class="font-weight-bold mb-2">Selamat!</h5>

        <div class="transaction-id-box d-inline-flex align-items-center mb-3 p-2 border rounded">
            <strong class="text-dark">{{ session('token', 'Token Tidak Ada') }}</strong>
        </div>

        <p class="mb-1">Transaksi berhasil diproses.</p>
        <p class="font-weight-bold text-success mb-5">+{{ session('poin', 0) }} poin</p>
    </div>

    <div class="container button-container text-center d-flex flex-column justify-content-center align-items-center">
        <button class="btn btn-block back-button" onclick="window.history.back()">
            Kembali
        </button>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</body>

</html>
