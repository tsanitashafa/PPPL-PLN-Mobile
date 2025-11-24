<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Token</title>
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

    <link rel="stylesheet" href="css/beli-token/beli-token.css">
    <script src="js/bayar-token/pembayaran.js"></script>

</head>

<body>

    <div class="fixed-top custom-header">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-arrow-left fa-xl"></i>
                </a>

                <h1 class="h5 m-0 font-weight-bold text-center w-100 header-title">
                    <span>Beli Token</span>
                </h1>




                <div class="empty-space"></div>
            </div>
        </div>
    </div>


    <div style="height: 54px;"></div>

    <div class="container" style="padding-bottom: 10px;">
        <div class="mt-3">
            <label for="meter-id" class="text-black" style="font-weight: 400;">ID Pelanggan/Nomor Meter</label>
            <input type="text" class="form-control meter-input" id="nomor-meter" value="" maxlength="8"
                name="meter" data-url="{{ route('cari-pelanggan') }}">
        </div>
        <div class="mt-2 text-black customer-name-display" id="nama-pelanggan-display">
            Nama Pelanggan: **(Masukkan 8 digit Nomor Meter)**
        </div>

        <div class="mt-4">
            <label class="token-amount-label">Jumlah Bayar</label>
            <div class="row" id="token-list">
                <div class="col-6">
                    <button class="btn btn-block mb-3 token-btn active shadow p-3 " data-nominal="10000">
                        Rp 10.000
                    </button>
                </div>
                <div class="col-6">
                    <button class="btn btn-block mb-3 token-btn shadow p-3 " data-nominal="20000">
                        Rp 20.000
                    </button>
                </div>
                <div class="col-6">
                    <button class="btn btn-block mb-3 token-btn shadow p-3 " data-nominal="50000">
                        Rp 50.000
                    </button>
                </div>
                <div class="col-6">
                    <button class="btn btn-block mb-3 token-btn shadow p-3 " data-nominal="100000">
                        Rp 100.000
                    </button>
                </div>
                <div class="col-6">
                    <button class="btn btn-block mb-3 token-btn shadow p-3 " data-nominal="200000">
                        Rp 200.000
                    </button>
                </div>
                <div class="col-6">
                    <button class="btn btn-block mb-3 token-btn shadow p-3 " data-nominal="500000">
                        Rp 500.000
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="container content-padding">
        <div class="voucher-box p-3 mb-3 shadow p-3 voucher-btn" style="cursor: pointer;">
            <i class="fa-solid fa-ticket-simple mr-2"></i>
            Gunakan Voucher

            <div id="voucher-list" class="p-3 bg-light shadow mt-2 d-none">
                <h5>Pilih Voucher</h5>
                <div id="voucher-items"></div>
            </div>
        </div>


        <div class="summary-detail-box p-3 shadow p-3 ">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="popins-regular">Total Listrik PLN</span>
                <span class="total-pln">Rp 10.000</span>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="popins-regular">Voucher & Diskon</span>
                <span class="discount-amount">-Rp 0</span>
            </div>
            <div class="d-flex justify-content-between align-items-center popins-regular total-payment-row">
                <span class="total-payment-label ">Total Pembayaran</span>
                <span class="total-payment-amount">Rp 10.000</span>
            </div>
        </div>

        <div class="fixed-bottom-summary p-3 ">
            <div class="container p-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-column">
                        <small class="text-secondary total-label">Total</small>
                        <span class="total-amount">Rp 10.000</span>
                    </div>
                    {{-- <button class="btn w-50 shadow p-3 btn-lanjutkan card" id="btnLanjutkan"
                        data-url="{{ route('pembayaran') }}">
                        Lanjutkan Pembayaran
                    </button> --}}

                    <button class="btn w-50 shadow p-3 btn-lanjutkan card" id="btnLanjutkan"
                        data-url="{{ route('pembayaran') }}" data-meter="" data-nominal="" data-total=""
                        data-voucher="">



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

    <script src="js/beli-token/beli-token.js"></script>


</body>

</html>
