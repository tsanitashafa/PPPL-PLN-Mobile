{{-- 5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH  --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopePay</title>
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

    <link rel="stylesheet" href="css/hubungkan-ewallet/ewallet.css">
</head>

<body>

    <div class="fixed-top bg-white custom-header-border">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between header-content">
                <a href='{{ url('/pembayaran') }}' class="text-decoration-none text-dark back-button">
                    <i class="fa-solid fa-arrow-left fa-xl"></i>
                </a>
                <h1 class="h5 m-0 font-weight-bold text-center w-100 text-dark header-title">
                    <span>shopePay</span>
                </h1>
                <div class="placeholder-space"></div>
            </div>
        </div>
    </div>

    <div class="container main-content-padding">

        <div class="d-flex justify-content-center align-items-center py-4 logo-section">
            <div class="d-flex justify-content-center align-items-center rounded logo-wrapper">
                <img src="assets/img/e-wallete/pln.svg" alt="PLN Mobile Logo" class="img-fluid">
            </div>

            <div class="vertical-divider"></div>

            <div class="d-flex justify-content-center align-items-center rounded logo-wrapper">
                <img src="assets/img/e-wallete/shopee.svg" alt="shopePay Logo" class="img-fluid">
            </div>
        </div>

        <h6 class="font-weight-bold mt-3 mb-3 section-title">Syarat & Ketentuan</h6>
        <ol class="pl-4 requirement-list">
            <li class="mb-2">
                Sudah memiliki Akun shopePay , dan aktivasi shopePay payment.
            </li>
            <li class="mb-2">
                Saldo shopePay cukup untuk membeli produk di PLN Mobile.
            </li>
            <li class="mb-2">
                Anda akan menghubungkan akun shopePay anda dengan PLN Mobile dan setelah dihubungkan ShopePay baru bisa
                digunakan sebagai pembayaran di PLN Mobile.
            </li>
        </ol>

    </div>

    <div class="container connect-button-container">
        <button class="btn btn-block connect-button poppins-regular"
            onclick="window.location.href='{{ url('/hubungkan-shopepay') }}'">
            Sambungkan Akun shopePay
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
