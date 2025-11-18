<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gopay</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        /* CSS Eksternal minimal hanya untuk body font */
        body {
            font-family: 'Inter', 'Poppins', sans-serif;
            background-color: #fff;
        }
    </style>
</head>

<body>

    <div class="fixed-top bg-white border-bottom" style="padding: 15px 0; border-bottom-color: #eee !important;">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <a href='{{ url()->previous() }}' class="text-decoration-none text-dark" style="padding-right: 15px;">
                    <i class="fa-solid fa-arrow-left fa-xl"></i>
                </a>
                <h1 class="h5 m-0 font-weight-bold text-center w-100 text-dark">
                    <span
                        style="font-size: 1.1rem; font-weight: 600; padding-bottom: 5px; display: inline-block; line-height: 1.5;">Gopay</span>
                </h1>
                <div style="width: 24px;"></div>
            </div>
        </div>
    </div>

    <div class="container" style="padding-top: 55px; padding-bottom: 100px;">

        <div class="d-flex justify-content-center align-items-center py-4">
            <div class="d-flex justify-content-center align-items-center rounded"
                style="width: 100px; height: 100px; margin: 0 10px; padding: 10px;">
                <img src="assets/img/e-wallete/pln.svg" alt="PLN Mobile Logo" class="img-fluid">
            </div>

            <div style="height: 80px; width: 1px; background-color: #000000; margin: 0 10px;"></div>

            <div class="d-flex justify-content-center align-items-center rounded"
                style="width: 100px; height: 100px; margin: 0 10px; padding: 10px;">
                <img src="assets/img/e-wallete/gopay-2.svg" alt="Gopay Logo" class="img-fluid">
            </div>
        </div>

        <h6 class="font-weight-bold mt-3 mb-3" style="font-size: 1.1rem;">Syarat & Ketentuan</h6>
        <ol class="pl-4">
            <li class="mb-2" style="font-size: 0.95rem; line-height: 1.5;">
                Sudah memiliki Akun Gopay , dan aktivasi Gopay payment.
            </li>
            <li class="mb-2" style="font-size: 0.95rem; line-height: 1.5;">
                Saldo Gopay cukup untuk membeli produk di PLN Mobile.
            </li>
            <li class="mb-2" style="font-size: 0.95rem; line-height: 1.5;">
                Anda akan menghubungkan akun Gopay anda dengan PLN Mobile dan setelah dihubungkan Gopay baru bisa
                digunakan sebagai pembayaran di PLN Mobile.
            </li>
        </ol>

    </div>

    <div class="container">
        <button class="btn btn-block font-weight-bold"
            style="background-color: #4aa3b3; color: #fff; border-radius: 10px; padding: 20px 0; border: none;">
            Sambungkan Akun Gopay
        </button>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>
