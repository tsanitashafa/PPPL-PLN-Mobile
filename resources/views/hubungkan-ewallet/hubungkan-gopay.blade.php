{{-- 5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH  --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungkan Gopay</title>
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

    <link rel="stylesheet" href="css/hubungkan-ewallet/hubungkan-ewallet.css">
</head>

<body>

    <div class="background-wave">
        <img src="assets/img/wave.svg" alt="Latar Belakang Gelombang" class="wave-image">
    </div>

    <div class="header-container bg-transparant">
        <div class="container header-content-wrapper">
            <div class="d-flex align-items-center justify-content-between">
                <a href='{{ url('/gopay') }}' class="text-decoration-none text-dark back-button">
                    <i class="fa-solid fa-arrow-left fa-xl"></i>
                </a>
                <h1 class="h5 m-0 font-weight-bold text-center w-100 text-dark header-title">
                    <span>Hubungkan Gopay</span>
                </h1>
                <div class="placeholder-space"></div>
            </div>
        </div>
    </div>

    <div class="container main-content-wrapper">
        <div class="card bg-white p-4 card-popup border-0">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="logo-wrapper">
                    <img src="assets/img/e-wallete/gopay-2.svg" alt="Gopay Icon" class="img-fluid logo-image">
                </div>

                <div class="d-flex mx-3 step-indicator-wrapper">
                    <span class="rounded-circle bg-info step-active"></span>
                    <span class="rounded-circle bg-secondary step-inactive"></span>
                    <span class="rounded-circle bg-secondary step-inactive"></span>
                    <span class="rounded-circle bg-secondary step-inactive"></span>
                </div>

                <div class="logo-wrapper">
                    <img src="assets/img/e-wallete/pln.svg" alt="PLN Mobile Logo" class="img-fluid logo-image">
                </div>
            </div>

            <p class="text-secondary small mb-2">Masukkan nomor HP sebagai ID Gopay</p>
            <div class="input-group mb-4 custom-input-group border-2">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white ">
                        <i class="fa-solid fa-phone text-secondary"></i>
                    </span>
                </div>
                <input type="tel" class="form-control phone-input" placeholder="+62213129328" aria-label="Nomor HP">
            </div>

            <h6 class="font-weight-bold mb-3 terms-title">Syarat & Ketentuan</h6>
            <ol class="pl-3 terms-list">
                <li class="mb-2 terms-item">
                    Sudah memiliki Akun Gopay , dan aktivasi Gopay payment.
                </li>
                <li class="mb-2 terms-item">
                    Saldo Gopay cukup untuk membeli produk di PLN Mobile.
                </li>
                <li class="mb-2 terms-item">
                    Anda akan menghubungkan akun Gopay anda dengan PLN Mobile dan setelah dihubungkan Gopay baru
                    bisa
                    digunakan sebagai pembayaran di PLN Mobile.
                </li>
            </ol>
            {{-- <div class="fixed-bottom
                bg-transparent
                bottom-button-bar">
                    <div class="container p-0">
                        <button class="btn btn-block font-weight-bold continue-button" type="submit">
                            Lanjutkan
                        </button>
                    </div>
                </div> --}}

            <div class="fixed-bottom bg-transparent bottom-button-bar">
                <div class="container p-0">
                    <x-button type="submit" variant="continue-button" class="font-weight-bold">
                        Lanjutkan
                    </x-button>
                </div>
            </div>

            </form>


        </div>
    </div>

    <div class="fixed-bottom bg-transparent bottom-button-bar">
        <div class="container p-0">
            <button class="btn btn-block font-weight-bold continue-button"
                onclick="window.location.href='{{ url('/verifikasi-gopay') }}'">
                Lanjutkan
            </button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>
