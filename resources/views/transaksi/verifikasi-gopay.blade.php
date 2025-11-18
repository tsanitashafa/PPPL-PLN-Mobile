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

    <style>
        /* CSS Eksternal minimal hanya untuk body font */
        body {
            font-family: 'Inter', 'Poppins', sans-serif;
            background-color: #f8f9fa;
            /* Latar belakang abu-abu muda di luar kontainer */
            overflow-x: hidden;
        }

        /* Kelas untuk menempatkan pop-up di tengah dan mengatur shadow */
        .card-popup {
            margin-top: -80px;
            /* Tarik ke atas agar masuk ke area gelombang */
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 50;
            /* Lebih tinggi dari latar belakang gelombang */
        }

        /* Inline CSS untuk Input PIN */
        .pin-input {
            width: 40px;
            /* Ukuran kotak PIN */
            height: 40px;
            text-align: center;
            font-size: 1.2rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0 5px;
            padding: 0;
        }

        /* Style untuk modal/overlay agar muncul sesuai gambar */
        .modal-overlay {
            background-color: rgba(0, 0, 0, 0.3);
            /* Latar belakang gelap transparan */
            display: block;
            /* Tampilkan modal secara default (tanpa JS) */
            opacity: 1;
            overflow: hidden;
        }

        /* Style untuk konten modal agar fixed di bawah dan memiliki rounded corner atas */
        .modal-content-bottom {
            border-radius: 20px 20px 0 0;
            /* Corner bulat di atas */
            margin-top: auto;
            /* Dorong ke bawah */
            height: auto;
        }
    </style>
</head>

<body>


    <div style="position: relative;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 180px; z-index: 1;">
            <img src="assets/img/wave.svg" alt="Latar Belakang Gelombang"
                style="width: 100%; height: 100%; object-fit: cover; ">
        </div>
    </div>


    <div class=" bg-transparant" style="padding: 15px 0; z-index: 100; position: relative;">
        <div class="container" style="margin-top: 20px">
            <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="text-decoration-none text-dark" style="padding-right: 15px;">
                    <i class="fa-solid fa-arrow-left fa-xl"></i>
                </a>
                <h1 class="h5 m-0 font-weight-bold text-center w-100 text-dark">
                    <span
                        style="font-size: 1.1rem; font-weight: 600; padding-bottom: 5px; display: inline-block; line-height: 1.5;">Hubungkan
                        Gopay</span>
                </h1>
                <div style="width: 24px;"></div>
            </div>
        </div>
    </div>
    <div class="container" style="padding-top: 100px;">



        <div class="card bg-white p-4 card-popup border-0">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div style="width: 50px; height: 50px;">
                    <img src="assets/img/e-wallete/gopay-2.svg" alt="Gopay Icon" class="img-fluid"
                        style="width: 100%; height: 100%;">
                </div>

                <div class="d-flex mx-3">
                    <span class="rounded-circle bg-info"
                        style="width: 8px; height: 8px; margin: 0 4px; opacity: 1;"></span>
                    <span class="rounded-circle bg-secondary"
                        style="width: 8px; height: 8px; margin: 0 4px; opacity: 0.5;"></span>
                    <span class="rounded-circle bg-secondary"
                        style="width: 8px; height: 8px; margin: 0 4px; opacity: 0.5;"></span>
                    <span class="rounded-circle bg-secondary"
                        style="width: 8px; height: 8px; margin: 0 4px; opacity: 0.5;"></span>
                </div>

                <div style="width: 50px; height: 50px;">
                    <img src="assets/img/e-wallete/pln.svg" alt="PLN Mobile Logo" class="img-fluid"
                        style="width: 100%; height: 100%;">
                </div>
            </div>

            <p class="text-secondary small mb-2">Masukkan nomor HP sebagai ID Gopay</p>
            <div class="input-group mb-4 border rounded" style="border-color: #ccc !important;">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white border-0">
                        <i class="fa-solid fa-phone text-secondary"></i>
                    </span>
                </div>
                <input type="tel" class="form-control border-0" placeholder="+62213129328" aria-label="Nomor HP"
                    style="font-size: 1rem;">
            </div>


            <h6 class="font-weight-bold mb-3" style="font-size: 1rem;">Syarat & Ketentuan</h6>
            <ol class="pl-3" style="list-style-type: decimal;">
                <li class="mb-2" style="font-size: 0.85rem; line-height: 1.4; color: #555;">
                    Sudah memiliki Akun Gopay , dan aktivasi Gopay payment.
                </li>
                <li class="mb-2" style="font-size: 0.85rem; line-height: 1.4; color: #555;">
                    Saldo Gopay cukup untuk membeli produk di PLN Mobile.
                </li>
                <li class="mb-2" style="font-size: 0.85rem; line-height: 1.4; color: #555;">
                    Anda akan menghubungkan akun Gopay anda dengan PLN Mobile dan setelah dihubungkan Gopay baru bisa
                    digunakan sebagai pembayaran di PLN Mobile.
                </li>
            </ol>

        </div>
    </div>
    <div class="modal fade show d-flex align-items-end modal-overlay" tabindex="-1" role="dialog" aria-modal="true"
        aria-labelledby="verificationModalLabel" style="z-index: 1050; position: fixed;">
        <div class="modal-dialog w-100 m-0" role="document" style="max-width: none !important; width: 100% !important;">

            <div class="modal-content modal-content-bottom border-0">

                <div class="text-center pt-2 pb-3">
                    <div style="width: 40px; height: 4px; background-color: #ddd; border-radius: 2px; margin: 0 auto;">
                    </div>
                </div>

                <div class="modal-body text-center px-4 pt-0 pb-4">
                    <h5 class="modal-title font-weight-bold mb-4" id="verificationModalLabel">
                        Proses Verifikasi
                    </h5>

                    <p class="mb-4">Masukkan **6 digit PIN Gopay**</p>

                    <div class="d-flex justify-content-center mb-3">
                        <input type="password" maxlength="1" class="pin-input mx-2" style="box-shadow: none;">
                        <input type="password" maxlength="1" class="pin-input mx-2" style="box-shadow: none;">
                        <input type="password" maxlength="1" class="pin-input mx-2" style="box-shadow: none;">
                        <input type="password" maxlength="1" class="pin-input mx-2" style="box-shadow: none;">
                        <input type="password" maxlength="1" class="pin-input mx-2" style="box-shadow: none;">
                        <input type="password" maxlength="1" class="pin-input mx-2" style="box-shadow: none;">
                    </div>

                    <a href="#" class="text-info small mb-4 d-block">Lupa PIN?</a>

                    <button class="btn btn-block font-weight-bold"
                        style="background-color: #4aa3b3; color: #fff; border-radius: 10px; padding: 12px 0; border: none; font-size: 1.1rem; margin-top: 15px;">
                        Masukkan
                    </button>
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
</body>

</html>
