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

    <style>
        body {
            /* Menggunakan font Inter/Poppins untuk tampilan aplikasi seluler */
            font-family: 'Inter', 'Poppins', sans-serif;
            background-color: #f0f2f5;
        }

        /* Padding bawah untuk mengatasi fixed footer/summary */
        .content-padding {
            /* Sesuaikan dengan tinggi kedua box summary: Voucher (60px) + Summary Detail (150px) */
            padding-bottom: 250px;
        }
    </style>
</head>

<body>

    <div class="fixed-top"
        style="background-color: #fff; padding: 15px 0; border-bottom: 1px solid #eee; z-index: 1000;">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-arrow-left fa-xl"></i>
                </a>
                <h1 class="h5 m-0 font-weight-bold text-center w-100" style="color: #333;">
                    <span
                        style="font-size: 1.1rem; font-weight: 600; padding-bottom: 5px; display: inline-block; line-height: 1.5;">Beli
                        Token</span>
                </h1>
                <div style="width: 24px;"></div>
            </div>
        </div>
    </div>

    <div style="height: 54px;"></div>

    <div class="container" style="padding-bottom: 10px;">
        <div class="mt-3">
            <label for="meter-id" class="text-secondary" style="font-weight: 400;">ID Pelanggan/Nomor Meter</label>
            <input type="text" class="form-control" id="meter-id" value="" maxlength="8"
                style="border-radius: 12px; padding: 20px 15px; border: 1px solid #ccc; font-size: 1.1rem; font-weight: 500;">
        </div>
        <div class="mt-2 text-secondary" style="font-size: 0.9rem; font-weight: 500;" id="nama-pelanggan-display">
            Nama Pelanggan: **(Masukkan 8 digit Nomor Meter)**
        </div>

        <div class="mt-4">
            <label style="font-weight: 500;">Pilih Token</label>
            <div class="row" id="token-list">
                <div class="col-6">
                    <button class="btn btn-block mb-3 token-btn active" data-nominal="10000"
                        style="border-radius: 12px; padding: 15px 10px; font-size: 1rem; font-weight: 500; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);">
                        Rp 10.000
                    </button>
                </div>
                <div class="col-6">
                    <button class="btn btn-block mb-3 token-btn" data-nominal="20000"
                        style="border-radius: 12px; padding: 15px 10px; font-size: 1rem; font-weight: 500; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);">
                        Rp 20.000
                    </button>
                </div>
                <div class="col-6">
                    <button class="btn btn-block mb-3 token-btn" data-nominal="50000"
                        style="border-radius: 12px; padding: 15px 10px; font-size: 1rem; font-weight: 500; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);">
                        Rp 50.000
                    </button>
                </div>
                <div class="col-6">
                    <button class="btn btn-block mb-3 token-btn" data-nominal="100000"
                        style="border-radius: 12px; padding: 15px 10px; font-size: 1rem; font-weight: 500; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);">
                        Rp 100.000
                    </button>
                </div>
                <div class="col-6">
                    <button class="btn btn-block mb-3 token-btn" data-nominal="200000"
                        style="border-radius: 12px; padding: 15px 10px; font-size: 1rem; font-weight: 500; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);">
                        Rp 200.000
                    </button>
                </div>
                <div class="col-6">
                    <button class="btn btn-block mb-3 token-btn" data-nominal="500000"
                        style="border-radius: 12px; padding: 15px 10px; font-size: 1rem; font-weight: 500; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);">
                        Rp 500.000
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="container content-padding">
        <div class="p-3 mb-3"
            style="background-color: #fff; border-radius: 12px; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);">
            <a href="#" class="btn btn-block text-dark text-decoration-none p-0"
                style="background-color: #fff; font-weight: 500; display: flex; align-items: center; justify-content: start; border: none;">
                <i class="fa-solid fa-ticket-simple mr-2" style="font-size: 1.2rem;"></i>
                Gunakan Voucher
            </a>
        </div>

        <div class="p-3"
            style="background-color: #fff; border-radius: 12px; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="text-secondary">Total Listrik PLN</span>
                <span style="font-weight: 500;">Rp 10.000</span>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="text-secondary">Voucher & Diskon</span>
                <span style="font-weight: 500; color: #dc3545;">-Rp 0</span>
            </div>
            <div class="d-flex justify-content-between align-items-center" style="margin-top: 15px;">
                <span style="color: #dc3545; font-weight: 600;">Total Pembayaran</span>
                <span style="color: #dc3545; font-weight: 600;">Rp 10.000</span>
            </div>
        </div>

        <div class="p-3 "
            style="background-color: #fff; margin-top:20px; border: 1px solid #eee; z-index: 999; border-radius: 12px; ">
            <div class="container p-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-column">
                        <small class="text-secondary" style="font-size: 0.9rem;">Total</small>
                        <span style="font-size: 1.5rem; font-weight: 600; color: #333;">Rp 10.000</span>
                    </div>
                    <button class="btn w-50" onclick="window.location.href = '{{ url('pembayaran') }}';"
                        style="background-color: #2a88a0; border-color: #2a88a0; color: #fff; font-size: 1rem; font-weight: 600; border-radius: 10px; padding: 12px 0;">
                        Lanjutkan Pembayaran
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
<style>
    /* ... (CSS yang sudah ada) ... */

    /* Style default untuk tombol yang TIDAK dipilih */
    .token-btn {
        border: 1px solid #e9ecef;
        background-color: #fff;
        color: #333;
        /* Tambahkan transisi agar terlihat halus saat berubah */
        transition: all 0.2s ease-in-out;
    }

    /* Style untuk tombol yang DIPILIH */
    .token-btn.active {
        border: 1px solid #2a88a0 !important;
        background-color: #2a88a0 !important;
        color: #fff !important;
        /* Sedikit efek shadow untuk menonjolkan */
        box-shadow: 0 4px 6px rgba(42, 136, 160, 0.2) !important;
    }

    /* Padding bawah untuk mengatasi fixed footer/summary */
    .content-padding {
        /* Sesuaikan dengan tinggi kedua box summary: Voucher (60px) + Summary Detail (150px) */
        padding-bottom: 250px;
    }
</style>

<script>
    // Fungsi untuk memformat angka menjadi format Rupiah
    function formatRupiah(angka) {
        var reverse = angka.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
        ribuan = ribuan.join('.').split('').reverse().join('');
        return 'Rp ' + ribuan;
    }

    // Fungsi untuk memperbarui tampilan Total Pembayaran
    function updateSummary(nominal) {
        var totalFormatted = formatRupiah(nominal);

        // Memperbarui Total Listrik PLN
        $('.container .p-3:nth-of-type(2) .d-flex:nth-of-type(1) span:nth-of-type(2)').text(totalFormatted);

        // Memperbarui Total Pembayaran (yang merah)
        $('.container .p-3:nth-of-type(2) .d-flex:nth-of-type(3) span:nth-of-type(2)').text(totalFormatted);

        // Memperbarui Total di fixed footer
        $('.p-3 .container .d-flex .d-flex:nth-of-type(1) span:nth-of-type(2)').text(totalFormatted);
    }

    $(document).ready(function() {
        // Inisialisasi: Terapkan nominal default (Rp 10.000)
        var defaultNominal = 10000;
        updateSummary(defaultNominal);


        // Event handler ketika salah satu tombol token diklik
        $('.token-btn').on('click', function() {
            // 1. Hapus kelas 'active' dari semua tombol
            $('.token-btn').removeClass('active');

            // 2. Tambahkan kelas 'active' hanya pada tombol yang diklik
            $(this).addClass('active');

            // 3. Ambil nominal dari atribut data
            var selectedNominal = parseInt($(this).data('nominal'));

            // 4. Perbarui rincian total pembayaran
            updateSummary(selectedNominal);
        });
    });

    // Fungsi untuk memformat angka menjadi format Rupiah (tetap sama)
    function formatRupiah(angka) {
        var reverse = angka.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
        ribuan = ribuan.join('.').split('').reverse().join('');
        return 'Rp ' + ribuan;
    }

    // Fungsi untuk memperbarui tampilan Total Pembayaran (tetap sama)
    function updateSummary(nominal) {
        var totalFormatted = formatRupiah(nominal);

        // Memperbarui Total Listrik PLN
        $('.container .p-3:nth-of-type(2) .d-flex:nth-of-type(1) span:nth-of-type(2)').text(totalFormatted);

        // Memperbarui Total Pembayaran (yang merah)
        $('.container .p-3:nth-of-type(2) .d-flex:nth-of-type(3) span:nth-of-type(2)').text(totalFormatted);

        // Memperbarui Total di fixed footer
        $('.p-3 .container .d-flex .d-flex:nth-of-type(1) span:nth-of-type(2)').text(totalFormatted);
    }

    $(document).ready(function() {
        // Inisialisasi: Terapkan nominal default (Rp 10.000)
        var defaultNominal = 10000;
        updateSummary(defaultNominal);


        // Event handler ketika salah satu tombol token diklik (tetap sama)
        $('.token-btn').on('click', function() {
            // 1. Hapus kelas 'active' dari semua tombol
            $('.token-btn').removeClass('active');

            // 2. Tambahkan kelas 'active' hanya pada tombol yang diklik
            $(this).addClass('active');

            // 3. Ambil nominal dari atribut data
            var selectedNominal = parseInt($(this).data('nominal'));

            // 4. Perbarui rincian total pembayaran
            updateSummary(selectedNominal);
        });

        // --- Bagian baru untuk mencari pelanggan ---
        $('#meter-id').on('input', function() {
            var nomorMeter = $(this).val();
            var displayElement = $('#nama-pelanggan-display');

            // Atur tampilan default saat mengetik
            displayElement.html('Nama Pelanggan: **Mencari...**');

            // Cek apakah panjang input sudah 8 digit
            if (nomorMeter.length === 8) {
                // Lakukan permintaan AJAX ke Controller Laravel
                $.ajax({
                    url: '{{ route('api.cari_pelanggan') }}', // Menggunakan route name Laravel
                    method: 'POST',
                    data: {
                        nomor_meter: nomorMeter,
                        // Laravel membutuhkan token CSRF untuk POST request
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        // Jika Controller mengembalikan success: true
                        if (response.success) {
                            displayElement.html('Nama Pelanggan: **' + response
                                .nama_pelanggan + '**');
                        }
                    },
                    error: function(xhr) {
                        // Jika ada error (misalnya 404 - tidak ditemukan)
                        var errorData = xhr.responseJSON;
                        var errorMessage = errorData && errorData.message ? errorData
                            .message : 'Terjadi kesalahan saat mencari.';

                        // Perbarui teks display dengan pesan error
                        displayElement.html('Nama Pelanggan: **' + errorMessage + '**');
                    }
                });
            } else if (nomorMeter.length < 8) {
                // Tampilan default jika kurang dari 8 digit
                displayElement.html('Nama Pelanggan: **(Masukkan 8 digit Nomor Meter)**');
            }
        });
        // --- Akhir bagian baru ---
    });
</script>

</html>
