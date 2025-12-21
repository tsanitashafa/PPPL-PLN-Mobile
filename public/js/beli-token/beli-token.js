//5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH

// Fungsi untuk memformat angka menjadi format Rupiah
function formatRupiah(angka) {
    var reverse = angka.toString().split('').reverse().join(''),
        ribuan = reverse.match(/\d{1,3}/g);
    ribuan = ribuan.join('.').split('').reverse().join('');
    return 'Rp ' + ribuan;
}

// Fungsi untuk memperbarui tampilan Total Pembayaran
function updateSummary(nominal) {
    // Ambil nilai voucher dari input hidden yang kita buat tadi
    var persentase = parseInt($('#session-voucher-value').val()) || 0;

    // rumus presentase
   var nilaiPotongan = (persentase / 100) * nominal;
// Hitung total bayar
    var totalBayar = nominal - nilaiPotongan;
    if (totalBayar < 0) totalBayar = 0;

  // Update Tampilan
    $('.total-pln').text(formatRupiah(nominal));

    // Tampilkan nominal hasil perkalian persentase di baris diskon
    $('.discount-amount').text('-' + formatRupiah(nilaiPotongan));

    $('.total-payment-amount').text(formatRupiah(totalBayar));
    $('.total-amount').text(formatRupiah(totalBayar));
}

$(document).ready(function() {
    var defaultNominal = 10000;
    updateSummary(defaultNominal);

    $('.token-btn').on('click', function() {
        $('.token-btn').removeClass('active');
        $(this).addClass('active');

        var selectedNominal = parseInt($(this).data('nominal'));
        updateSummary(selectedNominal);
    });

    $('#nomor-meter').on('input', function() {
        var nomorMeter = $(this).val();
        var displayElement = $('#nama-pelanggan-display');

        displayElement.html('Nama Pelanggan: **Mencari...**');

        if (nomorMeter.length === 8) {

            var ajaxUrl = $('#nomor-meter').data('url'); // SOLUSI
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: ajaxUrl,
                method: 'POST',
                data: {
                    nomor_meter: nomorMeter,
                    _token: csrfToken
                },
                success: function(response) {
                    if (response.success) {
                        displayElement.html('Nama Pelanggan: **' + response.nama_pelanggan + '**');
                    }
                },
                error: function(xhr) {
                    var errorData = xhr.responseJSON;
                    var errorMessage = errorData && errorData.message ? errorData.message : 'Terjadi kesalahan.';
                    displayElement.html('Nama Pelanggan: **' + errorMessage + '**');
                }
            });

        } else {
            displayElement.html('Nama Pelanggan: **(Masukkan 8 digit Nomor Meter)**');
        }
    });
});


// mengambil data pelanggan beli token berdasarkan nomor meter
document.getElementById('nomor-meter').addEventListener('input', function () {
    const nomorMeter = this.value;

    // hanya fetch jika panjang input 8 digit
    if (nomorMeter.length === 8) {
        fetch(`/pelanggan/detail/${nomorMeter}`)
            .then(response => response.json())
            .then(data => {
                if (data.nama) {
                    document.getElementById('nama-pelanggan-display').innerHTML =
                        `Nama Pelanggan: <strong>${data.nama}</strong>`;
                } else {
                    document.getElementById('nama-pelanggan-display').innerHTML =
                        `Nama Pelanggan: <span class="text-danger">Tidak ditemukan</span>`;
                }
            });
    } else {
        document.getElementById('nama-pelanggan-display').innerHTML =
            "Nama Pelanggan: (Masukkan 8 digit Nomor Meter)";
    }
});


//mengambil data voucher untuk beli token
function attachVoucherClick() {
   $(document).ready(function() {
    // Ambil nilai voucher dari session (kita lempar ke JS via variabel global atau data-attribute)
    // Untuk cara termudah, kita cek label discount-amount

    function calculateFinal() {
        var nominalToken = parseInt($('.token-btn.active').data('nominal')) || 0;

        // Ambil nilai potongan dari session Laravel yang sudah dicetak ke HTML
        // Kita asumsikan Anda mencetak nilai potongan di sebuah hidden input atau variable
        var potongan = parseInt("{{ session('selected_voucher_value', 0) }}") || 0;

        var totalAkhir = Math.max(nominalToken - potongan, 0);

        $('.total-pln').text(formatRupiah(nominalToken));
        $('.discount-amount').text('-' + formatRupiah(potongan));
        $('.total-payment-amount').text(formatRupiah(totalAkhir));
        $('.total-amount').text(formatRupiah(totalAkhir));

        // Update data-attribute tombol lanjutkan
        $('#btnLanjutkan').attr('data-nominal', nominalToken);
        $('#btnLanjutkan').attr('data-total', totalAkhir);
        $('#btnLanjutkan').attr('data-voucher', potongan);
    }

    // Jalankan setiap kali ganti nominal
    $('.token-btn').on('click', function() {
        $('.token-btn').removeClass('active');
        $(this).addClass('active');
        calculateFinal();
    });

    // Jalankan sekali saat start
    calculateFinal();
});
}



// ... (Bagian sebelumnya)

document.addEventListener("DOMContentLoaded", function () {

    const btn = document.getElementById("btnLanjutkan");

    btn.addEventListener("click", function () {

        const url = this.dataset.url; // ← route pembayaran

        // Ambil data dari halaman
        const nomorMeter = document.getElementById("nomor-meter").value;

        // **PERBAIKAN: Ambil nilai numerik mentah (tanpa 'Rp ' dan titik)**
        const nominalToken = document.querySelector(".total-pln").innerText.replace(/[^\d]/g, "");
        const totalBayar = document.querySelector(".total-payment-amount").innerText.replace(/[^\d]/g, "");
        const voucherPotongan = document.querySelector(".discount-amount").innerText.replace(/[^\d]/g, "") || '0'; // Pastikan ada nilai, default '0'

        // Redirect pakai query string
        window.location.href =
       `${url}?meter=${nomorMeter}&nominal=${nominalToken}&total=${totalBayar}&voucher=${voucherPotongan}`;

    });
});
// ... (Sisa kode)



document.getElementById("btnBayar").addEventListener("click", function () {

    const meter = this.dataset.meter;
    const nominal = this.dataset.nominal;
    const total = this.dataset.total;
    const voucher = this.dataset.voucher;

    // isi hidden input
    document.getElementById("meterInput").value = meter;
    document.getElementById("nominalInput").value = nominal;
    document.getElementById("totalInput").value = total;
    document.getElementById("voucherInput").value = voucher;

    // kirim form
    document.getElementById("formBayar").submit();
});



document.getElementById("btnLanjutkan").addEventListener("click", function () {

    const meter = document.getElementById("nomor-meter").value;
    const nominal = document.querySelector(".token-btn.active").dataset.nominal;
    const total = document.querySelector(".total-amount").innerText.replace(/\D/g,'');
    const voucher = selectedVoucherId ?? 0;

    const url = this.dataset.url +
        "?meter=" + meter +
        "&nominal=" + nominal +
        "&total=" + total +
        "&voucher=" + voucher;

    window.location.href = url;
});



