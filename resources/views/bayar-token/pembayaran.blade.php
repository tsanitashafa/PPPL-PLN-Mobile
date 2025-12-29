{{-- //5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH  --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" sizes="any">
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
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Jost:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poetsen+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/bayar-token/pembayaran.css">

</head>

<body>
    <x-templatenavbar title="Pembayaran" backUrl="{{ url('/beli-token') }}" />
    <div class="container pb-5 " data-spy="scroll">

        <div class="text-center mb-4 card p-4 mt-2"
            style="border-radius: 20px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15)">
            <p class="nunito-sans mb-1" style="font-size: 0.9rem;">Total Pembayaran</p>
            <h2 class="h5 mb-0 nunito-sans-semibold">
                <span class="poppins-regular">
                    @php
                        // Ambil nilai 'total' dari query string
                        $total = request('total') ?? 0;
                    @endphp

                    <span class="poppins-regular">Rp {{ number_format($total, 0, ',', '.') }}</span>
                </span>

            </h2>
        </div>

        <div class="mb-4" style="border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15)">




            <div class="payment-card p-3 ">
                <h3 class="h6 font-weight-bold " style="color: #333;">Metode Pembayaran</h3>
                <div class="payment-method-item pembayaran"
                    style="border-radius: 20px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15)">
                    <div class="payment-method-left">
                        <img src="assets/img/pembayaran/pln.svg" alt="PLN">
                        <span class="payment-method-name">PLN</span>
                    </div>
                </div>

                <div class="payment-method-item pembayaran"
                    style="border-radius: 20px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15)">
                    <div class="payment-method-left">
                        <img src="assets/img/pembayaran/qris.svg" alt="QRIS">
                        <span class="payment-method-name">QRIS</span>
                    </div>
                </div>



                <div class="payment-method-item pembayaran justify-content-between"
                    style="border-radius: 20px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15)">
                    <div class="payment-method-left">
                        <img src="assets/img/pembayaran/gopay.svg" alt="gopay">
                        <span class="payment-method-name">Gopay</span>
                    </div>
                    <a href='{{ url('/gopay') }}'class="text-decoration-none link-text d-flex align-items-center">
                        Hubungkan <i class="fas fa-chevron-right ml-2" style="font-size: 0.8rem;"></i>
                    </a>
                </div>






                <div class="payment-method-item pembayaran justify-content-between"
                    style="border-radius: 20px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15)">
                    <div class="payment-method-left">
                        <img src="assets/img/pembayaran/shope.svg" alt="shope">
                        <span class="payment-method-name">shopePay</span>
                    </div>
                    <a href='{{ url('/shopePay') }}' class="text-decoration-none link-text d-flex align-items-center">
                        Hubungkan <i class="fas fa-chevron-right ml-2" style="font-size: 0.8rem;"></i>
                    </a>
                </div>


                <div class="payment-method-item pembayaran"
                    style="border-radius: 20px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15)">
                    <div class="payment-method-left">
                        <img src="assets/img/pembayaran/bri.svg" alt="BRI Logo">
                        <span class="payment-method-name">BRI</span>
                    </div>
                </div>

                <div class="payment-method-item pembayaran"
                    style="border-radius: 20px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15)">
                    <div class="payment-method-left">
                        <img src="assets/img/pembayaran/bca.svg" alt="QRIS">
                        <span class="payment-method-name">BCA</span>
                    </div>
                </div>

            </div>
        </div>



        <div class="p-3 card p-4 shadow" style="border-radius: 12px; margin-top: 10px; background-color: white;"
            style="border-radius: 20px; ">
            <div class="d-flex justify-content-between mb-2">
                <span class="poppins-regular">Total Listrik PLN</span>
                <span class="poppins-regular">Rp {{ number_format(request('total') ?? 0, 0, ',', '.') }}</span>
            </div>
            <div class="d-flex justify-content-between mb-3">
                @php
                    $nominal_beli = request('nominal') ?? 0; // Nominal token
                    $total_setelah_diskon = request('total') ?? 0; // Total setelah diskon
                    $diskon = $nominal_beli - $total_setelah_diskon;
                    $biayaLayanan = 1500;
                    $totalAkhir = $total_setelah_diskon + $biayaLayanan;
                @endphp

                <span class="poppins-regular">Biaya Layanan</span>
                <span class="poppins-regular">Rp 1.500</span>
            </div>
            <hr class="my-2">
            <div class="d-flex justify-content-between pt-2">
                <span class="text-danger font-weight-bold poppins-regular">Total Pembayaran</span>
                <span class="text-danger font-weight-bold">
                    Rp {{ number_format($totalAkhir, 0, ',', '.') }}
                </span>

            </div>
        </div>

    </div>


    <div class="container">

        <form id="formBayar" method="POST" action="{{ route('bayar-token') }}">
            @csrf

            <input type="hidden" name="meter" id="meterInput">
            <input type="hidden" name="nominal" id="nominalInput">
            <input type="hidden" name="total" id="totalInput">
            <input type="hidden" name="voucher" id="voucherInput">
        </form>

        {{--
        <button class="btn btn-primary btn-block poppins-regular btn-pay" type="button" id="btnBayar"
            data-meter="{{ request('meter', 0) }}" data-nominal="{{ request('nominal', 0) }}"
            data-total="{{ request('total', 0) }}" data-voucher="{{ request('voucher', 0) }}">
            Bayar
        </button> --}}

        <x-button id="btnBayar" variant="pay" data-meter="{{ request('meter', 0) }}"
            data-nominal="{{ request('nominal', 0) }}" data-total="{{ request('total', 0) }}"
            data-voucher="{{ request('voucher', 0) }}">
            Bayar
        </x-button>



    </div>
    <br />

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    {{-- <script src="js/bayar-token/pembayaran.js"></script> --}}


    <script>
        document.getElementById("btnBayar").addEventListener("click", function() {
            document.getElementById("meterInput").value = this.dataset.meter;
            document.getElementById("nominalInput").value = this.dataset.nominal;
            document.getElementById("totalInput").value = this.dataset.total;
            document.getElementById("voucherInput").value = this.dataset.voucher;

            document.getElementById("formBayar").submit();
        });
    </script>


</body>


</html>
