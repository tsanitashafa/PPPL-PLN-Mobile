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
    <style>
        /* Mengatur agar tinggi body setidaknya 100% dari viewport height */
        html,
        body {
            height: 100%;
        }

        /* Mengatur ikon sukses */
        .icon-success {
            width: 120px;
            height: 120px;
            /* Warna latar belakang: Kuning */
            background-color: #f2e66c;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
            /* Shadow ringan untuk estetika */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Mengatur tombol Kembali */
        .btn-back {
            /* Warna latar belakang: Biru Tosca */
            background-color: #4aa3b3;
            color: #fff;
            border-radius: 25px;
            padding: 10px 50px;
            /* Pastikan border tidak terlihat */
            border: none;
            /* Lebar penuh pada layar sangat kecil */
            width: 90%;
            max-width: 300px;
            /* Batasi lebar maksimum */
            transition: background-color 0.3s ease;
            /* Transisi untuk hover */
        }

        .btn-back:hover {
            background-color: #3b8c9a;
            /* Warna hover sedikit lebih gelap */
            color: #fff;
            /* Pastikan teks tetap putih saat hover */
        }

        /* Gaya untuk card/kontainer hasil transaksi */
        .transaction-card {
            max-width: 400px;
            width: 90%;
            padding: 20px;
            /* Menggunakan flexbox untuk memposisikan konten di tengah layar */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /* Gaya untuk info ID Transaksi */
        .transaction-id-box {
            background-color: #f8f9fa;
            /* Latar belakang abu-abu muda */
            border: 1px solid #dee2e6;
            border-radius: .25rem;
            padding: .5rem 1rem;
            display: inline-flex;
            align-items: center;
        }
    </style>
</head>

<body class="bg-white ">
    <div class=" d-block" style="z-index: 1050;">
        <img src="assets/img/top-bar.png" alt="Status Bar Mobile" style="width: 100%;">
    </div>
    <div class=" container transaction-card text-center d-flex justify-content-center align-items-center"
        style = "margin-top: 50px">

        <div class="icon-success">
            <i class="fas fa-check fa-4x text-white"></i>
        </div>

        <h5 class="font-weight-bold mb-2">Selamat!</h5>

        <div class="transaction-id-box mb-3">
            <strong class="text-dark">312154156040</strong>
            <i class="fas fa-copy ml-2 text-secondary" style="cursor: pointer;" title="Salin ID Transaksi"></i>
        </div>

        <p class="mb-1">Transaksi berhasil diproses.</p>
        <p class="font-weight-bold text-success mb-4">+78 poin</p>

        <button class="btn btn-back" onclick="window.history.back()">Kembali</button>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</body>

</html>
