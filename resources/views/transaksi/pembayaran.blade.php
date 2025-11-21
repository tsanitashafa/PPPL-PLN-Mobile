<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
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
        /* Menggunakan font Poppins atau Inter sebagai default */
        body {
            font-family: 'Poppins', 'Inter', sans-serif;
            background-color: #f8f8f8;
            /* Background color */
        }

        /* Style untuk card metode pembayaran */
        .payment-card {
            border-radius: 15px;
            /* Sudut membulat pada card */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            /* Sedikit shadow */
        }

        /* Style untuk setiap item metode pembayaran */
        .payment-method-item {
            padding: 15px 20px;
            margin-bottom: 10px;
            border-radius: 12px;
            background-color: #fff;
            cursor: pointer;
            border: 1px solid #e0e0e0;
            transition: all 0.2s;
        }

        /* Style khusus untuk PLN Mobile yang terpilih */
        .payment-method-item.selected {
            background-color: #2a88a0;
            /* Warna biru sesuai gambar */
            color: #fff;
            border-color: #2a88a0;
        }

        /* Style untuk tombol utama di bawah */
        .btn-pay {
            background-color: #2a88a0;
            border-color: #2a88a0;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 12px;
            padding: 15px 0;
        }

        /* Style untuk teks "Hubungkan" */
        .link-text {
            color: #2a88a0;
            font-weight: 500;
        }

        /* Style untuk logo placeholder */
        .logo-placeholder {
            width: 30px;
            height: 30px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 0.8rem;
            font-weight: bold;
            color: #fff;
        }

        /* Warna logo khusus */
        .logo-pln {
            background-color: #2a88a0;
        }

        .logo-qris {
            background-color: #3f6848;
        }

        .logo-gopay {
            background-color: #00AA13;
        }

        .logo-shopeepay {
            background-color: #ee4d2d;
        }

        .logo-bri {
            background-color: #00529c;
        }

        .logo-bca {
            background-color: #00457c;
        }
    </style>
</head>

<body>


    <div class="bg-white pt-2 pb-3 mb-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <a href='{{ url()->previous() }}' class="text-decoration-none text-dark">
                    <i class="fa-solid fa-arrow-left fa-lg"></i>
                </a>

                <h1 class="h5 m-0  font-weight-bold text-center w-100" style="color: #333;">
                    Pembayaran
                </h1>
                <div style="width: 24px;"></div>
            </div>
        </div>
    </div>
    <div class="container pb-5 " data-spy="scroll">


        <div class="text-center mb-4   card p-4"
            style="border-radius: 20px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15)">
            <p class="text-muted mb-1" style="font-size: 0.9rem;">Total Pembayaran</p>
            <h2 class="h3 font-weight-bold mb-0">
                Rp 10.000
            </h2>
        </div>


        <div class="mb-4">
            <h3 class="h6 font-weight-bold mb-3" style="color: #333;">Metode Pembayaran</h3>

            <div class="payment-card p-3 bg-white">
                <div class="payment-method-item d-flex align-items-center selected">
                    <div class="logo-placeholder logo-pln">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <span class="font-weight">PLN Mobile</span>
                </div>

                <div class="payment-method-item d-flex align-items-center">
                    <div class="logo-placeholder logo-qris" style="background-color: #00AA13;">
                        <i class="fas fa-qrcode"></i>
                    </div>
                    <span>QRIS</span>
                </div>

                <div class="payment-method-item d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="logo-placeholder logo-gopay">G</div>
                        <span>Gopay</span>
                    </div>
                    <a
                        href='{{ url('/menyambungkan-gopay') }}'class="text-decoration-none link-text d-flex align-items-center">
                        Hubungkan <i class="fas fa-chevron-right ml-2" style="font-size: 0.8rem;"></i>
                    </a>
                </div>


                <div class="payment-method-item d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="logo-placeholder logo-shopeepay">S</div>
                        <span>ShopeePay</span>
                    </div>
                    <a href='{{ url('/ menyambungkan-shopeePay') }}'
                        class="text-decoration-none link-text d-flex align-items-center">
                        Hubungkan <i class="fas fa-chevron-right ml-2" style="font-size: 0.8rem;"></i>
                    </a>
                </div>

                <div class="payment-method-item d-flex align-items-center">
                    <div class="logo-placeholder logo-bri">BRI</div>
                    <span>BRI</span>
                </div>

                <div class="payment-method-item d-flex align-items-center mb-0">
                    <div class="logo-placeholder logo-bca">BCA</div>
                    <span>BCA</span>
                </div>

            </div>
        </div>


        <div class="p-3 bg-white" style="border-radius: 12px; margin-top: 10px;">
            <div class="d-flex justify-content-between mb-2">
                <span class="text-muted">Total Listrik PLN</span>
                <span class="font-weight-medium">Rp 10.000</span>
            </div>
            <div class="d-flex justify-content-between mb-3">
                <span class="text-muted">Biaya Layanan</span>
                <span class="font-weight-medium">Rp 1.500</span>
            </div>
            <hr class="my-2">
            <div class="d-flex justify-content-between pt-2">
                <span class="text-danger font-weight-bold">Total Pembayaran</span>
                <span class="text-danger font-weight-bold">Rp 11.500</span>
            </div>
        </div>
    </div>


    <div class="container">
        <button class="btn btn-primary btn-block btn-pay"
            onclick="window.location.href='{{ url('/transaksi-berhasil') }}'">
            Bayar
        </button>
    </div>
    <br />

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>
